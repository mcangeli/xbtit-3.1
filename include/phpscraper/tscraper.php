<?php

abstract class tscraper
{
    protected $timeout;

    public function __construct($timeout = 2)
    {
        $this->timeout = $timeout;
    }
}
?>