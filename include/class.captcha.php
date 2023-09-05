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
class ocr_captcha
{
    public $key;                                // ultra private static text
    public $long;                               // size of text
    public $lx;                                 // width of picture
    public $ly;                                 // height of picture
    public $nb_noise;                           // nb of background noisy characters
    public $filename;                           // file of captcha picture stored on disk
    public $imagetype = 'png';                    // can also be 'png' or 'jpg'
    public $public_key;                         // public key
    public $font_file = './include/adlibn.ttf';   // path to font file

    public function __construct($long = 6, $lx = 120, $ly = 30, $nb_noise = 25)
    {
        $this->key = md5('rujK9TLFsmypTj4gMqB9SYeVkcgsUAYb'); #Random 32 chars string
        $this->long = $long;
        $this->lx = $lx;
        $this->ly = $ly;
        $this->nb_noise = $nb_noise;
        // generate public key with entropy
        $this->public_key = substr(md5(uniqid(mt_rand(), true)), 0, $this->long);
    }

    public function get_filename($public = '')
    {
        global $CAPTCHA_FOLDER;
        if ($public == '') {
            $public = $this->public_key;
        }

        return $CAPTCHA_FOLDER.'/'.$public.'.'.$this->imagetype;
    }

    // generate the private text coming from the public text, using $this->key (not to be public!!), all you have to do is here to change the algorithm
    public function generate_private($public = '')
    {
        if ($public == '') {
            $public = $this->public_key;
        }

        return substr(md5($this->key.$public), 16 - $this->long / 2, $this->long);
    }

    // check if the public text is link to the private text
    public function check_captcha($public, $private)
    {
        // when check, destroy picture on disk
        if (file_exists($this->get_filename($public))) {
            unlink($this->get_filename($public));
        }

        return strtolower($private) == strtolower($this->generate_private($public));
    }

    // display a captcha picture with private text and return the public text
    public function make_captcha($noise = true)
    {
        $private_key = $this->generate_private();
        $image = imagecreatetruecolor($this->lx, $this->ly);
        $back = imagecolorallocate($image, mt_rand(224, 255), mt_rand(224, 255), mt_rand(224, 255));
        imagefilledrectangle($image, 0, 0, $this->lx, $this->ly, $back);
        if ($noise) { // rand characters in background with random position, angle, color
            for ($i = 0; $i < $this->nb_noise; $i++) {
                $size = mt_rand(6, 14);
                $angle = mt_rand(0, 360);
                $x = mt_rand(10, $this->lx - 10);
                $y = mt_rand(0, $this->ly - 5);
                $color = imagecolorallocate($image, mt_rand(160, 224), mt_rand(160, 224), mt_rand(160, 224));
                $text = chr(mt_rand(45, 127));
                imagettftext($image, $size, $angle, $x, $y, $color, $this->font_file, $text);
            }
        } else {
            // random grid color
            for ($i = 0; $i < $this->lx; $i += 10) {
                $color = imagecolorallocate($image, mt_rand(160, 224), mt_rand(160, 224), mt_rand(160, 224));
                imageline($image, $i, 0, $i, $this->ly, $color);
            }
            for ($i = 0; $i < $this->ly; $i += 10) {
                $color = imagecolorallocate($image, ((int) mt_rand(160, 224)), ((int) mt_rand(160, 224)), ((int) mt_rand(160, 224)));
                imageline($image, 0, $i, $this->lx, $i, $color);
            }
        }
        // private text to read
        for ($i = 0,$x = 5; $i < $this->long; $i++) {
            $r = mt_rand(0, 128);
            $g = mt_rand(0, 128);
            $b = mt_rand(0, 128);
            $color = imagecolorallocate($image, $r, $g, $b);
            $shadow = imagecolorallocate($image, $r + 128, $g + 128, $b + 128);
            $size = mt_rand(12, 17);
            $angle = mt_rand(-30, 30);
            $text = strtoupper(substr($private_key, $i, 1));
            imagettftext($image, $size, $angle, $x + 2, 26, $shadow, $this->font_file, $text);
            imagettftext($image, $size, $angle, $x, 24, $color, $this->font_file, $text);
            $x += $size + 2;
        }
        if ($this->imagetype == 'jpg') {
            imagejpeg($image, $this->get_filename(), 100);
        } else {
            imagepng($image, $this->get_filename());
        }
        imagedestroy($image);
    }

    public function display_captcha($noise = true)
    {
        $this->make_captcha($noise);
        @chmod($this->get_filename(), 0766);

        return '<input type="hidden" name="public_key" value="'.$this->public_key.'" />'."\n".'<img src="'.$this->get_filename().'" alt="" />'."\n";
    }
}
?>
