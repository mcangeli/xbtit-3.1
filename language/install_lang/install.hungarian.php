<?php
/////////////////////////////////////////////////////////////////////////////////////
// xbtit - Bittorrent tracker/frontend
//
// Copyright (C) 2004 - 2019  btiteam
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
// hungarian installation file //

$install_lang["charset"]                = "ISO-8859-2";
$install_lang["lang_rtl"]               = false;
$install_lang["step"]                   = "L�P�S:";
$install_lang["welcome_header"]         = "�dv�zl�nk!";
$install_lang["welcome"]                = "�dv�z�l az xbtit telep�t�je.";
$install_lang["installer_language"]     = "Telep�t�si nyelv:";
$install_lang["installer_language_set"] = "Enable this language";
$install_lang["start"]                  = "Kezd�s";
$install_lang["next"]                   = "K�vetkez�";
$install_lang["back"]                   = "Vissza";
$install_lang["requirements_check"]     = "K�vetelm�nyek ellen�rz�se";
$install_lang["reqcheck"]               = "Ellen�rz�s";
$install_lang["settings"]               = "Be�ll�t�sok";
$install_lang["system_req"]             = "<p>".$GLOBALS["btit-tracker"]."&nbsp;".$GLOBALS["current_btit_version"]." ig�nyei a PHP 4.1.2 vagy �jabb �s MYSQL adatb�zis.</p>";
$install_lang["list_chmod"]             = "<p>Miel�tt folytat�dna a telep�t�s, gy�z�dj meg arr�l, hogy fel lett t�ltve a �sszes f�jl �s a jogosults�g kioszt�sok helyesek. <font size=1>(0777 az aj�nlott)</font>.</p>";
$install_lang["view_log"]               = "A v�ltoz�sok list�j�t megtekintheted";
$install_lang["here"]                   = "ITT";
$install_lang["settingup"]              = "Tracker be�zemel�se";
$install_lang["settingup_info"]         = "Basic Settings";
$install_lang["sitename"]               = "Oldal neve";
$install_lang["sitename_input"]         = "xbtit";
$install_lang["siteurl"]                = "URL c�m";
$install_lang["siteurl_info"]           = "A '/' jel elhagy�s�val a v�g�r�l";
$install_lang["mysql_settings"]         = "MySQL Be�ll�t�s<br />\nHozz l�tre MySQL felhaszn�l�t, adatb�zist �s az el�r�seit add meg!";
$install_lang["mysql_settings_info"]    = "Database Settings.";
$install_lang["mysql_settings_server"]  = "MySQL Szerver (localhost m�k�dik a legt�bb szerveren)";
$install_lang["mysql_settings_username"] = "MySQL Felhaszn�l�n�v";
$install_lang["mysql_settings_password"] = "MySQL Jelsz�";
$install_lang["mysql_settings_database"] = "MySQL Adatb�zis";
$install_lang["mysql_settings_prefix"]  = "MySQL T�bla Prefix";
$install_lang["cache_folder"]           = "Cache Mappa";
$install_lang["torrents_folder"]        = "Torrents Mappa";
$install_lang["badwords_file"]          = "badwords.txt";
$install_lang["chat.php"]               = "chat.php";
$install_lang["write_succes"]           = "<span style=\"color:#00FF00; font-weight: bold;\">�rhat�!</span>";
$install_lang["write_fail"]             = "<span style=\"color:#FF0000; font-weight: bold;\">NEM �rhat�!</span> (0777)";
$install_lang["write_file_not_found"]   = "<span style=\"color:#FF0000; font-weight: bold;\">NEM TAL�LHAT�!</span>";
$install_lang["mysqlcheck"]             = "MySQL Kapcsolat Ellen�rz�se";
$install_lang["mysqlcheck_step"]        = "MySQL Ellen�rz�s";
$install_lang["mysql_succes"]           = "<span style=\"color:#00FF00; font-weight: bold;\">Sikeresen csatlakoztam az adatb�zishoz!</span>";
$install_lang["mysql_fail"]             = "<span style=\"color:#FF0000; font-weight: bold;\">Sikertelen, a kapcsolat nem j�tt l�tre!</span>";
$install_lang["back_to_settings"]       = "L�pj vissza �s t�lts ki mindent.";
$install_lang["saved"]                  = "";
$install_lang["file_not_writeable"]     = "A <b>./include/settings.php</b> nem �rhat�.";
$install_lang["file_not_exists"]        = "A <b>./include/settings.php</b> nem l�tezik.";
$install_lang["not_continue_settings"]  = "Nem folytathatod a telep�t�st, am�g nem lesznek �rhat�k a f�jlok.";
$install_lang["not_continue_settings2"] = "Nem folytathatod ezzel a f�jllal.";
$install_lang["settings.php"]           = "./include/settings.php";
$install_lang["can_continue"]           = "Most folytathatod �s k�s�bb v�ltoztathatsz rajta.";
$install_lang["mysql_import"]           = "MySQL Import";
$install_lang["mysql_import_step"]      = "SQL Import";
$install_lang["create_owner_account"]   = "Tulajdonos regisztr�l�s";
$install_lang["create_owner_account_step"] = "Tulajdonos regisztr�l�s";
$install_lang["database_saved"]         = "Az database.sql sikeresen beimport�lva az adatb�zisba!";
$install_lang["create_owner_account_info"] = "Itt regisztr�lhatod a tulajdonos felhaszn�l�t.";
$install_lang["username"]               = "Felhaszn�l�n�v";
$install_lang["password"]               = "Jelsz�";
$install_lang["password2"]              = "Jelsz� �jra";
$install_lang["email"]                  = "E-mail";
$install_lang["email2"]                 = "E-mail �jra";
$install_lang["is_succes"]              = "k�sz.";
$install_lang["no_leave_blank"]         = "Ne hagyj �resen semmit!";
$install_lang["not_valid_email"]        = "ez nem �rv�nyes E-mail c�m.";
$install_lang["pass_not_same_username"] = "Jelsz� nem lehet a felhaszn�ln�v.";
$install_lang["email_not_same"]         = "Az E-mail nem egyezik.";
$install_lang["pass_not_same"]          = "A jelsz� nem egyezik";
$install_lang["site_config"]            = "Tracker Be�ll�t�sok";
$install_lang["site_config_step"]       = "Be�ll�t�sok";
$install_lang["default_lang"]           = "Alap�rtelmezett nyelv";
$install_lang["default_style"]          = "Alap�rtelmezett megjelen�s";
$install_lang["torrents_dir"]           = "Torrents Mappa";
$install_lang["validation"]             = "Meger�s�t�s m�dja";
$install_lang["more_settings"]          = "*&nbsp;&nbsp;&nbsp;R�szletes be�ll�t�sokhoz haszn�ld az <u>Admin Panel</u>-t";
$install_lang["tracker_saved"]          = "A Be�ll�t�sok elmentve.";
$install_lang["finished"]               = "Telep�t�s befejez�se";
$install_lang["finished_step"]          = "Befejez�s";
$install_lang["succes_install1"]        = "A telep�t�s sikeresen befejez�d�tt!";
$install_lang["succes_install2a"]       = "<p>Sikeresen telep�tetted a ".$GLOBALS["btit-tracker"]." ".$GLOBALS["current_btit_version"]." a trackeredre.</p><p>Azt javasokjuk z�rold a telep�t�st. Ehhez t�r�ld az <b>install.php</b> f�jlt.</p>";
$install_lang["succes_install2b"]       = "<p>Sikeresen telep�tetted a ".$GLOBALS["btit-tracker"]." ".$GLOBALS["current_btit_version"]." a trackeredre.</p><p>Azt javasokjuk z�rold a telep�t�st. Ehhez nevezd �t a <b>install.unlock</b>-ot <b>install.lock</b>-ra vagy t�r�ld az <b>install.php</b> f�jlt.</p>";
$install_lang["succes_install3"]        = "<p>Rem�lj�k el�gedett leszel a trackerrel �s gyakran l�tni fogunk a <a href=\"http://dpwsmedia.com/smf/index.php\" target=\"_blank\">f�rumon</a>.</p>";
$install_lang["go_to_tracker"]          = "Ugr�s az oldalra";
$install_lang["forum_type"]             = "F�rum";
$install_lang["forum_internal"]         = "xbtit F�rum";
$install_lang["forum_smf"]              = "Simple Machines Forum";
$install_lang["forum_other"]            = "K�ls� f�rum - Add meg az URL c�m�t -->";
$install_lang["smf_download_a"]         = "<strong>Ha a favorit a Simple Machines Forum:</strong><br /><br/ >T�ltsd le a legfrissebb verzi�t <a target='_new' href='http://www.simplemachines.org/download/'>INNEN</a> �s t�ltsd fel az  <b>\"smf\"</b> mapp�ba a tartalm�t, majd kattints <a target='_new' href='smf/install.php'>IDE</a>, hogy telep�tsd.*<br /><strong>(Kiz�r�lag azt az adatb�zist haszn�ld, amit most a tracker telep�t�s�hez haszn�lsz).<br /><br /><font color='#FF0000'>Az SMF telep�t�s v�gezt�vel</font></strong> adj <b>777</b> jogot a (<strong>";
$install_lang["smf_download_b"]         = "</strong>) f�jlnak �s kattints a <strong>K�vetkez�</strong> gombra a telep�t�s folytat�s�hoz.<br /><br /><strong>* Mind k�t link �j ablakban ny�lik meg, �gy nem veszik el a jelenlegi telep�t� ablak.</strong></p>";
$install_lang["smf_err_1"]              = "Nem tal�lom a Simple Machines Forum-ot az \"smf\" mapp�ban, k�rlek telep�tsd miel�tt folytatn�d.<br /><br />Kattints <a href=\"javascript: history.go(-1);\">IDE</a>, hogy az el�z� oldalra ugorj.";
$install_lang["smf_err_2"]              = "Nem tal�lom az Simple Machines Forum-ot az adatb�zisban, telep�tsd miel�tt folytatn�d.<br /><br />Kattints <a href=\"javascript: history.go(-1);\">IDE</a>, hogy az el�z� oldalra ugorj.";
$install_lang["smf_err_3a"]             = "Nem lehet �rni a SMF English nyelvi f�jlj�t (<strong>";
$install_lang["smf_err_3b"]             = "</strong>) adj neki jogosults�got, miel�tt tov�bb l�psz (0777).<br /><br />Kattints <a href=\"javascript: history.go(-1);\">IDE</a>, hogy az el�z� oldalra ugorj.";
$install_lang["allow_url_fopen"]        = "php.ini \"allow_url_fopen\" �rt�k (aj�nlott �rt�k: ON)";
$install_lang["allow_url_fopen_ON"]        = "<span style=\"color:#00FF00; font-weight: bold;\">ON</span>";
$install_lang["allow_url_fopen_OFF"]        = "<span style=\"color:#FF0000; font-weight: bold;\">OFF</span>";
$install_lang["succes_upgrade1"]        = "A friss�t�s sikeresen lezajlott!";
$install_lang["succes_upgrade2a"]       = "<p>You succesfully upgraded ".$GLOBALS["btit-tracker"]." ".$GLOBALS["current_btit_version"]." on your tracker.</p><p>The upgrade has been successfully locked to prevent being used again but we advise you to also delete <b>upgrade.php+install.php</b> for extra protection.</p>";
$install_lang["succes_upgrade2b"]       = "<p>You succesfully upgraded ".$GLOBALS["btit-tracker"]." ".$GLOBALS["current_btit_version"]." on your tracker.</p><p>We advise you to lock the installation. You can do this by changing <b>install.unlock</b> to <b>install.lock</b> or to delete this <b>upgrade.php+install.php</b> file.</p>";
$install_lang["succes_upgrade3"]        = "<p>Rem�lj�k el�gedett leszel a trackerrel �s gyakran l�tni fogunk a <a href=\"http://dpwsmedia.com/smf/index.php\" target=\"_blank\">f�rumon</a>.</p>";

$install_lang["forum_ipb"]              = "Invision Power Board";
$install_lang["ipb_download_a"]         = "<b>If using Invision Power Board:</b><br /><br/ >Please download the latest version of Invision Power Board from your <a target='_new' href='http://www.invisionpower.com/customer/'>Client Area</a> at Invision Power Services, extract the files somewhere on your computer and then upload the contents of the \"upload\" folder to the \"ipb\" folder.<br /><br />Once uploaded please make sure the \"cache\", \"hooks\", \"public\" and \"uploads\" folders are CHMOD'd to 777 recursively, rename \"conf_global.dist.php\" to \"conf_global.php\" and CHMOD that to 777 as well.<br /><br />Once done please <a target='_new' href='ipb/admin/install/index.php'>click here</a> to install it.*<br /><b>(Please use the same database credentials you used for this installation procedure and be sure to enter a database prefix, we suggest using <span style='color:blue;'>ipb_</span> as your prefix).<br /><br /><font color='#FF0000'>Once installed</font></b> please CHMOD the default cached English language file (<b>";
$install_lang["ipb_download_b"]         = "</b>) to 777 and click <b>Next</b> to continue with the xbtit installation.<br /><br /><b>* Both links will open into a new window/tab to prevent losing your place on the xbtit installation.</b></p>";
$install_lang["ipb_err_1"]              = "Can't find Invision Power Board in the \"ipb\" folder, please install it before proceeding.<br /><br />Click <a href=\"javascript: history.go(-1);\">here</a> to return to the previous page.";
$install_lang["ipb_err_2"]              = "Can't find Invision Power Board in the database, please install it before proceeding.<br /><br />Click <a href=\"javascript: history.go(-1);\">here</a> to return to the previous page.";
$install_lang["ipb_err_3a"]             = "Unable to write to the IPB English language file (<b>";
$install_lang["ipb_err_3b"]             = "</b>) please CHMOD to 777 before proceeding.<br /><br />Click <a href=\"javascript: history.go(-1);\">here</a> to return to the previous page.";
$install_lang["ipb_err_4a"]             = "IPB English language file (<b>";
$install_lang["ipb_err_4b"]             = "</b>) doesn't exist, cannot proceed.<br /><br />Click <a href=\"javascript: history.go(-1);\">here</a> to return to the previous page.";
$install_lang["ipb_err_5"]             = "Unable to write to the IPB Config file (<b>";
$install_lang["ipb_err_6"]             = "Unable to write to the Tracker Config file (<b>";
?>