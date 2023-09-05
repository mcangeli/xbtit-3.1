<?php

/////////////////////////////////////////////////////////////////////////////////////
// xbtit - Bittorrent tracker/frontend
//
// Copyright (C) 2004 - 2020  Btiteam
//
//    This file is part of xbtit.
//
// Redistribution and use in source and binary forms, with or without modification,
// are permitted provided that the following conditions are met:
//
//   1. Redistributions of source code must retain the above copyright notice,
//      this list of conditions and the following disclaimer.
//   2. Redistributions in binary form must reproduce the above copyright notice,
//      this list of conditions and the following disclaimer in the documentation
//      and/or other materials provided with the distribution.
//   3. The name of the author may not be used to endorse or promote products
//      derived from this software without specific prior written permission.
//
// THIS SOFTWARE IS PROVIDED BY THE AUTHOR ``AS IS'' AND ANY EXPRESS OR IMPLIED
// WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES OF
// MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED.
// IN NO EVENT SHALL THE AUTHOR BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL,
// SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED
// TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR
// PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF
// LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING
// NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE,
// EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
//
////////////////////////////////////////////////////////////////////////////////////

class poll
{
    public $ID;
    public $pollerTitle;
    public $table_prefix;

    public function __construct()
    {
        global $TABLE_PREFIX;
        $this->ID = '';
        $this->pollerTitle = '';
        $this->table_prefix = $TABLE_PREFIX;
    }

    public function setId($id)
    {
        $this->ID = $id;
    }

    public function getDataById($id)
    {
        $res = do_sqlquery('SELECT * FROM '.$this->table_prefix."poller WHERE ID = '$id'");
        if ($inf = mysqli_fetch_array($res)) {
            $this->ID = (int)$inf['ID'];
            $this->pollerTitle = $inf['pollerTitle'];
            $this->active = $inf['active'];
        }
    }

    /* This method returns poller options as an associative array */
    public function getOptionsAsArray()
    {
        $retArray = [];
        $res = do_sqlquery('SELECT * FROM '.$this->table_prefix."poller_option WHERE pollerID = '".$this->ID."' ORDER BY pollerOrder");
        while ($inf = mysqli_fetch_array($res)) {
            $retArray[$inf['ID']] = [$inf['optionText'], (int)$inf['pollerOrder']];
        }

        return $retArray;
    }

    /* This method returns number of votes as an associative array */
    public function getVotesAsArray()
    {
        $retArray = [];
        $res = do_sqlquery('SELECT v.optionID, COUNT(v.ID) AS countVotes FROM '.$this->table_prefix.'poller_vote v, '.$this->table_prefix."poller_option o WHERE v.optionID = o.ID AND o.pollerID = '".$this->ID."' GROUP BY v.optionID");
        while ($inf = mysqli_fetch_array($res)) {
            $retArray[$inf['optionID']] = (int)$inf['countVotes'];
        }

        return $retArray;
    }

    /* Create new poller and return ID of new poller */
    public function createNewPoller($pollerTitle, $userid, $active)
    {
        if ($active == 'yes') {
            quickQuery('UPDATE '.$this->table_prefix."poller SET active = 'no', endDate = UNIX_TIMESTAMP() WHERE poller.active = 'yes'");
            quickQuery('INSERT INTO '.$this->table_prefix."poller(pollerTitle, starterID, active, startDate) VALUES(".sqlesc($pollerTitle).", '".$userid."', 'yes', UNIX_TIMESTAMP())") or die(((is_object($GLOBALS['conn'])) ? mysqli_error($GLOBALS['conn']) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)));
        } elseif ($active == 'no') {
            quickQuery('INSERT INTO '.$this->table_prefix."poller(pollerTitle, endDate, starterID, active, startDate) VALUES(".sqlesc($pollerTitle).", UNIX_TIMESTAMP(), '".$userid."', 'no', UNIX_TIMESTAMP())") or die(((is_object($GLOBALS['conn'])) ? mysqli_error($GLOBALS['conn']) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)));
        }

        $this->ID = ((is_null($___mysqli_res = mysqli_insert_id($GLOBALS['conn']))) ? false : $___mysqli_res);

        return $this->ID;
    }

    /* Add poller options */
    public function addPollerOption($optionText, $pollerOrder)
    {
        quickQuery('INSERT INTO '.$this->table_prefix."poller_option(pollerID, optionText, pollerOrder) VALUES('".$this->ID."', ".sqlesc($optionText).", '".$pollerOrder."')") or die(((is_object($GLOBALS['conn'])) ? mysqli_error($GLOBALS['conn']) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)));

        return (is_null($___mysqli_res = mysqli_insert_id($GLOBALS['conn']))) ? false : $___mysqli_res;
    }

    /* Delete a poll, options in the poll and votes */
    public function deletePoll($pollId)
    {
        quickQuery('DELETE FROM '.$this->table_prefix."poller WHERE ID = '".$pollId."'");
        $res = do_sqlquery('SELECT * FROM '.$this->table_prefix."poller_option WHERE pollerID = '".$pollId."'");
        while ($inf = mysqli_fetch_array($res)) {
            quickQuery('DELETE FROM '.$this->table_prefix."poller_vote WHERE optionID = ".sqlesc($inf['ID']));
            quickQuery('DELETE FROM '.$this->table_prefix."poller_option WHERE ID = ".sqlesc($inf['ID']));
        }
    }

    /* Updating poll title */
    public function setPollerTitle($pollerTitle)
    {
        quickQuery('UPDATE '.$this->table_prefix."poller SET pollerTitle = ".sqlesc($pollerTitle)." WHEER I D = ".sqlesc($this->ID));
    }

    public function setPollerActive($pollerActive)
    {
        if ($pollerActive == 'yes') {
            quickQuery('UPDATE '.$this->table_prefix."poller SET endDate = UNIX_TIMESTAMP(), active='no' WHERE poller.active='yes'");
        }
        quickQuery('UPDATE '.$this->table_prefix."poller SET endDate = '0', active = '".$pollerActive."' WHERE ID = ".sqlesc($this->ID));
    }

    /* Update option label */
    public function setOptionData($newText, $order, $optionId)
    {
        quickQuery('UPDATE '.$this->table_prefix."poller_option SET optionText = ".sqlesc($newText).", pollerOrder = '".$order."' WHERE ID = '".$optionId."'");
    }

    /* Get position of the last option, i.e. to append a new option at the bottom of the list */
    public function getMaxOptionOrder()
    {
        $res = do_sqlquery('SELECT MAX(pollerOrder) AS maxOrder FROM '.$this->table_prefix."poller_option WHERE pollerID = ".sqlesc($this->ID)) or die(((is_object($GLOBALS['conn'])) ? mysqli_error($GLOBALS['conn']) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)));
        if ($inf = mysqli_fetch_array($res)) {
            return (int)$inf['maxOrder'];
        }

        return 0;
    }
}
?>
