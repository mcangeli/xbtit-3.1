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
// english installation file //

$install_lang["lang_rtl"]               = false;
$install_lang["step"]                   = "Steg:";
$install_lang["welcome_header"]         = "V�lkommen";
$install_lang["welcome"]                = "V�lkommen till installationen f�r nya xbtit.";
$install_lang["installer_language"]     = "Spr�k:";
$install_lang["installer_language_set"] = "M�jligg�r detta spr�k";
$install_lang["start"]                  = "Start";
$install_lang["next"]                   = "N�sta";
$install_lang["back"]                   = "Tillbaka";
$install_lang["requirements_check"]     = "Krav kontroll";
$install_lang["reqcheck"]               = "Req.Kontroll";
$install_lang["settings"]               = "Inst�llningar";
$install_lang["system_req"]             = "<p>".$GLOBALS["btit-tracker"]."&nbsp;".$GLOBALS["current_btit_version"]." kr�ver PHP 4.1.2 eller b�ttre och en MYSQL databas.</p>";
$install_lang["list_chmod"]             = "<p>Innan vi forts�tter, kontrollera s� att alla filerna �r uppladdade, och �r skrivbara (0777 b�r det vara).</p>";
$install_lang["view_log"]               = "Du kan se hela changelog";
$install_lang["here"]                   = "h�r";
$install_lang["settingup"]              = "Installera din tracker";
$install_lang["settingup_info"]         = "Grundinst�llningar";
$install_lang["sitename"]               = "Sitenamn";
$install_lang["sitename_input"]         = "xbtit";
$install_lang["siteurl"]                = "Site-url";
$install_lang["siteurl_info"]           = "Utan avslutning <b>/</b>.";
$install_lang["mysql_settings"]         = "MySQL Inst�llningar";
$install_lang["mysql_settings_info"]    = "Databas Inst�llningar.";
$install_lang["mysql_settings_server"]  = "MySQL Server";
$install_lang["mysql_settings_username"] = "MySQL Anv�ndarnamn";
$install_lang["mysql_settings_password"] = "MySQL L�senord";
$install_lang["mysql_settings_database"] = "MySQL Databas";
$install_lang["mysql_settings_prefix"]  = "MySQL Table Prefix";
$install_lang["cache_folder"]           = "Cache Mapp";
$install_lang["torrents_folder"]        = "Torrents Mapp";
$install_lang["badwords_file"]          = "badwords.txt";
$install_lang["chat.php"]               = "chat.php";
$install_lang["write_succes"]           = "<span style=\"color:#00FF00; font-weight: bold;\">�r skrivbar!</span>";
$install_lang["write_fail"]             = "<span style=\"color:#FF0000; font-weight: bold;\">Inte skrivbar!</span> (0777)";
$install_lang["write_file_not_found"]   = "<span style=\"color:#FF0000; font-weight: bold;\">Hittas inte!</span>";
$install_lang["mysqlcheck"]             = "MySQL anslutnings Kontroll";
$install_lang["mysqlcheck_step"]        = "MySQL Kontroll";
$install_lang["mysql_succes"]           = "<span style=\"color:#00FF00; font-weight: bold;\">Lyckad annslutning till databasen!</span>";
$install_lang["mysql_fail"]             = "<span style=\"color:#FF0000; font-weight: bold;\">Misslyckad annslutning till databasen</span>";
$install_lang["back_to_settings"]       = "G� tillbaka och fyll i n�dv�ndiga uppgifter.";
$install_lang["saved"]                  = "Sparad";
$install_lang["file_not_writeable"]     = "Filen <b>./include/settings.php</b> �r inte skrivbar.";
$install_lang["file_not_exists"]        = "Filen <b>./include/settings.php</b> hittades inte.";
$install_lang["not_continue_settings"]  = "Du kan inte forts�tta om filerna inte �r skrivbara.";
$install_lang["not_continue_settings2"] = "Du kan inte forts�tta med denna fil.";
$install_lang["settings.php"]           = "./include/settings.php";
$install_lang["can_continue"]           = "Du kan forts�tta och �ndra detta senare.";
$install_lang["mysql_import"]           = "Importera MySQL";
$install_lang["mysql_import_step"]      = "SQL Imp.";
$install_lang["create_owner_account"]   = "Skapa Owner Konto";
$install_lang["create_owner_account_step"] = "Skapa Owner";
$install_lang["database_saved"]         = "Database.sql har importerats till din databas.";
$install_lang["create_owner_account_info"] = "H�r kan du skapa owner konto.";
$install_lang["username"]               = "Anv�ndarnamn";
$install_lang["password"]               = "L�senord";
$install_lang["password2"]              = "Repetera l�senord";
$install_lang["email"]                  = "Email";
$install_lang["email2"]                 = "Repetera email";
$install_lang["is_succes"]              = "klart.";
$install_lang["no_leave_blank"]         = "Fyll i allt.";
$install_lang["not_valid_email"]        = "Detta �r ingen gilltig email adress.";
$install_lang["pass_not_same_username"] = "L�senordet kan inte vara samma som anv�ndarnamnet.";
$install_lang["email_not_same"]         = "Email adress st�mmer inte �verens.";
$install_lang["pass_not_same"]          = "L�senord st�mmer inte �verens.";
$install_lang["site_config"]            = "Tracker Inst�llningar";
$install_lang["site_config_step"]       = "Tracker Inst.";
$install_lang["default_lang"]           = "Standard spr�k";
$install_lang["default_style"]          = "Standard Utseende";
$install_lang["torrents_dir"]           = "Torrents Dir";
$install_lang["validation"]             = "Validerings s�tt";
$install_lang["more_settings"]          = "*&nbsp;&nbsp;&nbsp;Mer Inst�llningar hittar du i <u>Admin Panelen</u> n�r installationen �r f�rdig.";
$install_lang["tracker_saved"]          = "Inst�llningarna �r sparade.";
$install_lang["finished"]               = "Snart �r installationen f�rdig";
$install_lang["finished_step"]          = "F�rdigst�ller";
$install_lang["succes_install1"]        = "Installationen �r nu klar!";
$install_lang["succes_install2"]        = "<p>Du lyckades installera ".$GLOBALS["btit-tracker"]." ".$GLOBALS["current_btit_version"]." p� din tracker.</p><p>Vi rekommenderar dig att l�sa installationen. Du kan g�ra detta genom att �ndra <b>install.unlock</b> till <b>install.lock</b> eller att ta bort <b>install.php</b> filen.</p>";
$install_lang["succes_install3"]        = "<p>Vi p� DPWS Media LTD hoppas du gillar denna tracker och att vi ses p� BTIT <a href=\"http://dpwsmedia.com/smf/index.php\" target=\"_blank\">forumet</a>.</p>";
$install_lang["go_to_tracker"]          = "G� till din tracker";

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