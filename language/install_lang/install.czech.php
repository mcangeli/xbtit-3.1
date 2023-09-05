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

$install_lang["charset"]                = "utf-8";
$install_lang["lang_rtl"]               = false;
$install_lang["step"]                   = "KROK:";
$install_lang["welcome_header"]         = "Vítejte";
$install_lang["welcome"]                = "Vítejte v instalaci nového xbtit.";
$install_lang["installer_language"]     = "Jazyk:";
$install_lang["installer_language_set"] = "Vybrat tento jazyk";
$install_lang["start"]                  = "Start";
$install_lang["next"]                   = "Další";
$install_lang["back"]                   = "Zpět";
$install_lang["requirements_check"]     = "Kontrola požadavků";
$install_lang["reqcheck"]               = "Kon. požadavků";
$install_lang["settings"]               = "Nastavení";
$install_lang["system_req"]             = "<p>".$GLOBALS["btit-tracker"]."&nbsp;".$GLOBALS["current_btit_version"]." je požadována verze PHP 4.1.2 nebo lepší a MYSQL databáze.</p>";
$install_lang["list_chmod"]             = "<p>Předtím, než půjdeme dále, se prosím ujistěte, že byly nahrány všechny soubory a že následující soubory mají požadovaná oprávnění, aby do nich skript mohl zapisovat (0777 by mělo stačit).</p>";
$install_lang["view_log"]               = "Můžete se podívat na úplný seznam změn";
$install_lang["here"]                   = "zde";
$install_lang["settingup"]              = "Nastavte váš tracker";
$install_lang["settingup_info"]         = "Základní nastavení";
$install_lang["sitename"]               = "Jméno stránky";
$install_lang["sitename_input"]         = "XBTIT";
$install_lang["siteurl"]                = "Url stránky";
$install_lang["siteurl_info"]           = "bez koncového <b>/</b>";
$install_lang["mysql_settings"]         = "Nastavení MySQL";
$install_lang["mysql_settings_info"]    = "Nastavení databáze.";
$install_lang["mysql_settings_server"]  = "Server MySQL (localhost funguje pro většinu serverů)";
$install_lang["mysql_settings_username"] = "Uživatelské jméno MySQL";
$install_lang["mysql_settings_password"] = "Heslo MySQL";
$install_lang["mysql_settings_database"] = "Databáze MySQL";
$install_lang["mysql_settings_prefix"]  = "Prefix tabulky MySQL";
$install_lang["cache_folder"]           = "Složka Cache";
$install_lang["torrents_folder"]        = "Složka torrentů";
$install_lang["access_code"]            = "Složka acces_code";
$install_lang["badwords_file"]          = "badwords.txt";
$install_lang["chat.php"]               = "chat.php";
$install_lang["write_succes"]           = "<span style=\"color:#00FF00; font-weight: bold;\">je zapisovatelný!</span>";
$install_lang["write_fail"]             = "<span style=\"color:#FF0000; font-weight: bold;\">NENÍ zapisovatelný!</span> (0777)";
$install_lang["write_file_not_found"]   = "<span style=\"color:#FF0000; font-weight: bold;\">NEBYL NALEZEN!</span>";
$install_lang["mysqlcheck"]             = "Kontrola připojení k MySQL";
$install_lang["mysqlcheck_step"]        = "Kontrola MySQL";
$install_lang["mysql_succes"]           = "<span style=\"color:#00FF00; font-weight: bold;\">Úspěšně připojeno k databázi!</span>";
$install_lang["mysql_fail"]             = "<span style=\"color:#FF0000; font-weight: bold;\">Selhání, nepovedlo se připojit k databázi!</span>";
$install_lang["back_to_settings"]       = "Vraťte se a vložte nezbytné informace.";
$install_lang["saved"]                  = "uloženo";
$install_lang["file_not_writeable"]     = "Soubor <b>./include/settings.php</b> není zapisovatelný.";
$install_lang["file_not_exists"]        = "Soubor <b>./include/settings.php</b> neexistuje.";
$install_lang["not_continue_settings"]  = "Nemůžete pokračovat v instalaci, aniž by byl tento soubor zapisovatelný.";
$install_lang["not_continue_settings2"] = "Nemůžete pokračovat s tímto souborem.";
$install_lang["settings.php"]           = "./include/settings.php";
$install_lang["can_continue"]           = "Můžete pokračovat a změnit to později.";
$install_lang["mysql_import"]           = "Import MySQL";
$install_lang["mysql_import_step"]      = "Imp. SQL";
$install_lang["create_owner_account"]   = "Vytváření účtu majitele";
$install_lang["create_owner_account_step"] = "Vytvořit majitele";
$install_lang["database_saved"]         = "Soubor database.sql byl importován do vaší databáze.";
$install_lang["create_owner_account_info"] = "Zde můžete vytvořit účet majitele.";
$install_lang["username"]               = "Uživatelské jméno";
$install_lang["password"]               = "Heslo";
$install_lang["password2"]              = "Zopakovat heslo";
$install_lang["email"]                  = "Email";
$install_lang["email2"]                 = "Zopakovat email";
$install_lang["is_succes"]              = "dokončeno.";
$install_lang["no_leave_blank"]         = "Nic nenechávejte prázdné.";
$install_lang["not_valid_email"]        = "Tato emailová adresa není platná.";
$install_lang["pass_not_same_username"] = "Heslo nemůže být stejné jako uživatelské jméno.";
$install_lang["email_not_same"]         = "Emailové adresy se neshodují.";
$install_lang["pass_not_same"]          = "Hesla se neshodují.";
$install_lang["site_config"]            = "Nastavení trackeru";
$install_lang["site_config_step"]       = "Nast. trackeru";
$install_lang["default_lang"]           = "Defaultní jazyk";
$install_lang["default_style"]          = "Defaultní styl";
$install_lang["torrents_dir"]           = "Složka torrentů";
$install_lang["validation"]             = "Ověřovací mód";
$install_lang["more_settings"]          = "*&nbsp;&nbsp;&nbsp;Více nastavení v <u>Admin panelu</u> až bude instalace dokončena.";
$install_lang["tracker_saved"]          = "Nastavení uloženo.";
$install_lang["finished"]               = "Dokončuji instalaci";
$install_lang["finished_step"]          = "Dokončuji";
$install_lang["succes_install1"]        = "Instalace dokončena!";
$install_lang["succes_install2a"]       = "<p>Úspěšně jste nainstalovali ".$GLOBALS["btit-tracker"]." ".$GLOBALS["current_btit_version"].".</p><p>Instalace byla uzamčena a soubor <b>install.php</b> pro prevenci smazán, aby nebyl znovu použit.</p>";
$install_lang["succes_install2b"]       = "<p>Úspěšně jste nainstalovali ".$GLOBALS["btit-tracker"]." ".$GLOBALS["current_btit_version"].".</p><p>Doporučujeme vám instalaci uzamknout. Můžete to udělat změnou <b>install.unlock</b> na <b>install.lock</b> a smazáním <b>install.php</b> souboru.</p>";
$install_lang["succes_install3"]        = "<p>Tým DPWS Media LTD doufá, že si produkt užijete a že vás opět uvidíme na našem <a href=\"http://dpwsmedia.com/smf/index.php\" target=\"_blank\">fóru</a>.</p>";
$install_lang["go_to_tracker"]          = "Přejít na tracker";
$install_lang["forum_type"]             = "Typ fóra";
$install_lang["forum_internal"]         = "Interní fórum xbtit";
$install_lang["forum_smf"]              = "Simple Machines Forum";
$install_lang["forum_other"]            = "Neintegrované externí fórum - vložte adresu url zde -->";
$install_lang["smf_download_a"]         = "<strong>Pro použití Simple Machines Forum:</strong><br /><br/ >Prosím stáhněte nejnovější verzi Simple Machines Forum <a target='_new' href='http://www.simplemachines.org/download/'>zde</a> a nahrajte obsah archivu do \"smf\" adresáře a <a target='_new' href='smf/install.php'>klikněte zde</a> pro instalaci.*<br /><strong>(Prosím použijte stejné přihlašovací údaje databáze jako při instalačním procesu trackeru).<br /><br /><font color='#FF0000'>Jakmile nainstalováno,</font></strong> udělejte CHMOD jazykového soubor SMF English (<strong>";
$install_lang["smf_download_b"]         = "</strong>) na 777 a klikněte <strong>Další</strong> pro pokračování v instalaci xbtit.<br /><br /><strong>* Oba odkazy se otevřou v novém okně/záložce pro prevenci ztracení pokroku instalace xbtit.</strong></p>";
$install_lang["smf_err_1"]              = "Nelze nalézt Simple Machines Forum v \"smf\" adresáři, před pokračováním jej nainstalujte.<br /><br />Klikněte <a href=\"javascript: history.go(-1);\">zde</a> pro návrat na předchozí stránku.";
$install_lang["smf_err_2"]              = "Nelze nalézt Simple Machines Forum v databázi, před pokračováním jej nainstalujte.<br /><br />Klikněte <a href=\"javascript: history.go(-1);\">zde</a> pro návrat na předchozí stránku.";
$install_lang["smf_err_3a"]             = "Nelze zapisovat do jazykového souboru SMF English (<strong>";
$install_lang["smf_err_3b"]             = "</strong>) před pokračováním udělejte CHMOD na 777.<br /><br />Klikněte <a href=\"javascript: history.go(-1);\">zde</a> pro návrat na předchozí stránku.";
$install_lang["allow_url_fopen"]        = "php.ini hodnota pro \"allow_url_fopen\" (nejlepší je ON)";
$install_lang["allow_url_fopen_ON"]        = "<span style=\"color:#00FF00; font-weight: bold;\">ON</span>";
$install_lang["allow_url_fopen_OFF"]        = "<span style=\"color:#FF0000; font-weight: bold;\">OFF</span>";
$install_lang["succes_upgrade1"]        = "Upgrade je dokončen!";
$install_lang["succes_upgrade2a"]       = "<p>Úspěšně jste upgradovali ".$GLOBALS["btit-tracker"]." ".$GLOBALS["current_btit_version"]." na vašem trackeru.</p><p>Upgrade byl úspěšně uzamčen aby se zabránil jeho znovupoužití. Pro větší bezpečnost vám doporučujeme soubory <b>upgrade.php+install.php</b> smazat.</p>";
$install_lang["succes_upgrade2b"]       = "<p>Úspěšně jste upgradovali ".$GLOBALS["btit-tracker"]." ".$GLOBALS["current_btit_version"]." na vašem trackeru.</p><p>Doporučujeme vám instalaci uzamknout. Můžete to udělat změnou <b>install.unlock</b> na <b>install.lock</b> nebo smazáním <b>upgrade.php+install.php</b> souborů.</p>";
$install_lang["succes_upgrade3"]        = "<p>Tým DPWS Media LTD doufá, že si produkt užijete a že vás opět uvidíme na našem  <a href=\"http://dpwsmedia.com/smf/index.php\" target=\"_blank\">fóru</a>.</p>";
$install_lang['error_mysql_database']   = 'Instalační program nemohl přistoupit k &quot;<i>%s</i>&quot; databázi. Na některých hostingách je potřeba vytvořit databázi v panelu administrace předtím než je xBtit může použít. Některé také přidávají další prefixy - jako uživatelské jméno - do vašich jmen databáze.';
$install_lang['error_message_click']    = 'Klikněte zde';
$install_lang['error_message_try_again']= 'pro nový pokus ';

$install_lang["forum_ipb"]              = "Invision Power Board";
$install_lang["ipb_download_a"]         = "<b>Pro použití Invision Power Board:</b><br /><br/ >Prosím stáhněte nejnovější verzi Invision Power Board z vašeho <a target='_new' href='http://www.invisionpower.com/customer/'>Klientského panelu</a> na Invision Power Services, někde na váš počítač extrahujte soubory a obsah adresáře \"upload\" nahrajte do \"ipb\" adresáře.<br /><br />Jakmile nahráno, ujistěte se, že \"cache\", \"hooks\", \"public\" a \"uploads\" slžoky jsou CHMOD na 777, přejmenujte \"conf_global.dist.php\" na \"conf_global.php\" a udělejte CHMOD na 777.<br /><br />Jakmile provedeno, prosím <a target='_new' href='ipb/admin/install/index.php'>klikněte zde</a> pro instalaci.*<br /><b>(Prosím použijte stejné přihlašovací údaje do databáze jako jste použili při instalaci trackeru a ujistěte se, že jste vložili databázový prefix, doporučujeme použít <span style='color:blue;'>ipb_</span> jako váš prefix).<br /><br /><font color='#FF0000'>Jakmile nainstalováno,</font></b> proveďte CHMOD defaultního cachovaného anglického (English) jazykového souboru (<b>";
$install_lang["ipb_download_b"]         = "</b>) na 777 a klikněte <b>Další</b> pro pokračování v xbtit instalaci.<br /><br /><b>* Oba odkazy se otevřou v novém okně/záložce pro prevenci ztracení pokroku instalace xbtit.</b></p>";
$install_lang["ipb_err_1"]              = "Nelze nalézt Invision Power Board v \"ipb\" adresáři, před pokračováním jej nainstalujte.<br /><br />Klikněte <a href=\"javascript: history.go(-1);\">zde</a> pro návrat na předchozí stránku.";
$install_lang["ipb_err_2"]              = "Nelze nalézt Invision Power Board v databázi, před pokračováním jej nainstalujte.<br /><br />Klikněte <a href=\"javascript: history.go(-1);\">zde</a> pro návrat na předchozí stránku.";
$install_lang["ipb_err_3a"]             = "Nelze zapisovat do jazykového souboru IPB English (<b>";
$install_lang["ipb_err_3b"]             = "</b>) před pokračováním udělejte CHMOD na 777.<br /><br />Klikněte <a href=\"javascript: history.go(-1);\">zde</a> pro návrat na předchozí stránku.";
$install_lang["ipb_err_4a"]             = "IPB English jazykový soubor (<b>";
$install_lang["ipb_err_4b"]             = "</b>) neexistuje, nelze pokračovat.<br /><br />Klikněte <a href=\"javascript: history.go(-1);\">zde</a> pro návrat na předchozí stránku.";
$install_lang["ipb_err_5"]             = "Nelze zapisovat do souboru IPB Config (<b>";
$install_lang["ipb_err_6"]             = "Nelze zapisovat do souboru Tracker Config (<b>";
?>