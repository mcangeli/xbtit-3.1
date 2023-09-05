<?php
/////////////////////////////////////////////////////////////////////////
// xBtit - Bittorrent tracker/frontend
//
// Copyright (C) 2004 - 2019  btiteam
//
//    ���� �� ������ ����� ����� ��� xBtit.
//
//    �� xBtit ����� ������ ���������: ������� �� �� �������� ���/� �� ��
//    ������������� ��� ���� ����� ��� GNU General Public License ����
//    ���������� ��� �� Free Software Foundation, ���� ��� ������ 3 ���
//    ��� �����, � (���� ������� ���) ������ ������� ������.
//
//    �� xBtit ��������� �� ��� ������ ��� �� ����� �������,
//    ���� ����� ������ �������; ����� ���� �� ����������� ������� ���
//    �������� � ������� ��� ������������ �����.  ��� ��
//    GNU General Public License ��� ������������ ������������.
//
//    �� ������ �� ����� ��������� ��� ��������� ��� GNU General Public License
//    ���� �� �� xBtit.  �� ���,��� ��� <http://www.gnu.org/licenses/>.
//
/////////////////////////////////////////////////////////////////////////

// ������� ������ installation //

$install_lang["charset"]                = "ISO-8859-1";
$install_lang["lang_rtl"]               = ������;
$install_lang["step"]                   = "����:";
$install_lang["welcome_header"]         = "����� ������";
$install_lang["welcome"]                = "����� ������ ��� installation ��� �� ��� XBTI-Tracker.";
$install_lang["installer_language"]     = "������:";
$install_lang["installer_language_set"] = "������� ����� ��� �������";
$install_lang["start"]                  = "������";
$install_lang["next"]                   = "�������";
$install_lang["back"]                   = "�����������";
$install_lang["requirements_check"]     = "������� ���������";
$install_lang["reqcheck"]               = "������� req.";
$install_lang["settings"]               = "��������";
$install_lang["system_req"]             = "<p>".$GLOBALS["btit-tracker"]."&nbsp;".$GLOBALS["current_btit_version"]." ���������� PHP 4.1.2 � �������� ��� ��� MYSQL ���� ���������.</p>";
$install_lang["list_chmod"]             = "<p>���� ���� ��������, �������� ���������� ��� ��� �� ������ �������� ��� ��� �� ������ ��� ���������� ����� ������ ��� ���������� ��� �� ��������� ��� ������� �� �������(0777 should be sufficient).</p>";
$install_lang["view_log"]               = "������� �� ���� �������� �� changelog";
$install_lang["here"]                   = "���";
$install_lang["settingup"]              = "�������� ��� �������� ��� ��� tracker";
$install_lang["settingup_info"]         = "������� ��������";
$install_lang["sitename"]               = "����� site";
$install_lang["sitename_input"]         = "XBTI-Tracker";
$install_lang["siteurl"]                = "Site-url";
$install_lang["siteurl_info"]           = "Without trailing slash";
$install_lang["mysql_settings"]         = "MySQL-��������<br />\n����������� ��� ������ � ��� ���� ��������� MySQL,����� ��� �������� ���";
$install_lang["mysql_settings_info"]    = "�������� ����� ���������.";
$install_lang["mysql_settings_server"]  = "MySQL-��������� �����������(� ������� host �������� ���� ��� ���� ������������� ���������� �����������)";
$install_lang["mysql_settings_username"] = "MySQL ����� ������";
$install_lang["mysql_settings_password"] = "MySQL �������";
$install_lang["mysql_settings_database"] = "MySQL ���� ���������";
$install_lang["mysql_settings_prefix"]  = "MySQL Table Prefix";
$install_lang["cache_folder"]           = "Cache �������";
$install_lang["torrents_folder"]        = "Torrents �������";
$install_lang["badwords_file"]          = "badwords.txt";
$install_lang["chat.php"]               = "chat.php";
$install_lang["write_succes"]           = "<span style=\"color:#00FF00; font-weight: bold;\">is writable!</span>";
$install_lang["write_fail"]             = "<span style=\"color:#FF0000; font-weight: bold;\">NOT writable!</span> (0777)";
$install_lang["write_file_not_found"]   = "<span style=\"color:#FF0000; font-weight: bold;\">NOT FOUND!</span>";
$install_lang["mysqlcheck"]             = "MySQL ������� ��������";
$install_lang["mysqlcheck_step"]        = "MySQL �������";
$install_lang["mysql_succes"]           = "<span style=\"color:#00FF00; font-weight: bold;\">����������� ������� �� �� ���� ���������!</span>";
$install_lang["mysql_fail"]             = "<span style=\"color:#FF0000; font-weight: bold;\">��������, ���� � ������� ��� ������ �� ���������������!</span>";
$install_lang["back_to_settings"]       = "������� ���� ��� ���������� ��� �����������.";
$install_lang["saved"]                  = "�������������";
$install_lang["file_not_writeable"]     = "�� ������ <b>./include/settings.php</b> ��� ����� ���������.";
$install_lang["file_not_exists"]        = "�� ������ <b>./include/settings.php</b> ��� �������.";
$install_lang["not_continue_settings"]  = "��� ������� �� ���������� �� �� install ����� �� ������ �� ����� ���������.";
$install_lang["not_continue_settings2"] = "��� ������� �� ���������� �� ���� �� ������.";
$install_lang["settings.php"]           = "./include/settings.php";
$install_lang["can_continue"]           = "�������� ��� ���� ��� ������� ��������.";
$install_lang["mysql_import"]           = "MySQL ��������";
$install_lang["mysql_import_step"]      = "SQL Imp.";
$install_lang["create_owner_account"]   = "����������� ���� ��� ����������";
$install_lang["create_owner_account_step"] = "���������� ����� ���";
$install_lang["database_saved"]         = "� database.sql ����� �������� ��� ���� ��������� ���.";
$install_lang["create_owner_account_info"] = "��� ����������� ���� ��� ����������.";
$install_lang["username"]               = "����� ������";
$install_lang["password"]               = "�������";
$install_lang["password2"]              = "��������� �������";
$install_lang["email"]                  = "����������� ����������� (email)";
$install_lang["email2"]                 = "��������� ������������ ������������ (email)";
$install_lang["is_succes"]              = "�������� �������.";
$install_lang["no_leave_blank"]         = "��� ������� ������ ����� ����.";
$install_lang["not_valid_email"]        = "�� ����������� ����������� ��� ����� ������.";
$install_lang["pass_not_same_username"] = "� ������� ��� ������ �� ����� ����� �� �� ����� ������.";
$install_lang["email_not_same"]         = "�� ����������� ����������� ��� ����� ����.";
$install_lang["pass_not_same"]          = "� ������� ��� ����� �����.";
$install_lang["site_config"]            = "Tracker ��������";
$install_lang["site_config_step"]       = "Tracker Sett.";
$install_lang["default_lang"]           = "���������� ������";
$install_lang["default_style"]          = "���������� ����";
$install_lang["torrents_dir"]           = "Torrents Dir";
$install_lang["validation"]             = "����������";
$install_lang["more_settings"]          = "*&nbsp;&nbsp;&nbsp;������������ �������� ��� <u>Admin Panel</u> ���� ���� ����������� �� installation.";
$install_lang["tracker_saved"]          = "�� �������� ��� �������������.";
$install_lang["finished"]               = "Rounding up the Installation";
$install_lang["finished_step"]          = "Rounding up";
$install_lang["succes_install1"]        = "�� installation ������������!";
$install_lang["succes_install2a"]       = "<p>������ �������� install �� ".$GLOBALS["btit-tracker"]." ".$GLOBALS["current_btit_version"].".</p><p>T� install �������� ���������� ��� <b>install.php</b> ��� ���������� ��� �� ���������� � ������������������ ���.</p>";
$install_lang["succes_install2b"]       = "<p>������ �������� install �� ".$GLOBALS["btit-tracker"]." ".$GLOBALS["current_btit_version"].".</p><p>��� ������������� �� ���������� �� install. �������� �� �� ������ ���������� �� <b>install.unlock</b> �� <b>install.lock</b> ��� �� ���������� ���� �� <b>install.php</b> ������.</p>";
$install_lang["succes_install3"]        = "<p>� ����� ��� BTI ������� �� ���������� �� ������������� ����� ��� ��������� ��� �� ��� ����� ���� ��� <ahref=\"http://dpwsmedia.com/smf/index.php\" target=\"_blank\">forum</a>.</p>";
$install_lang["go_to_tracker"]          = "������� ��� tracker ���";
$install_lang["forum_type"]             = "Forum �����";
$install_lang["forum_internal"]         = "XBTI-Tracker internal Forum";
$install_lang["forum_smf"]              = "����� ������� Forum";
$install_lang["forum_other"]            = "Unintegrated External Forum - ������ url ��� -->";
$install_lang["smf_download_a"]         = "<strong>If ��������������� ����� ������� Forum:</strong><br /><br/ >�������� ��������� ��� ���������  version ��� ��� ����� ������� Forum <a target='_new' href='http://www.simplemachines.org/download/'>here</a> ��� �������� �� ����������� ��� �������� ��� \"smf\" ������ ��� <a target='_new' href='smf/install.php'>click here</a> ����� �� install.*<br /><strong>(�������� �������������� ��� ���� ���� ��������� ��� ��������������� ��� ��� ���������� ��� install).<br /><br /><font color='#FF0000'>���� ����� install</font></strong> �������� CHMOD �� SMF �������� ������� ������� (<strong>";
$install_lang["smf_download_b"]         = "</strong>) ��� 777 ��� ����� click <strong>Next</strong> ��� �� ���������� �� �� install ��� XBTI-Tracker.<br /><br /><strong>* ��� �� ��� ��������� �� �������� �� ��� ��������/tab ��� �� ���������� �� ������ ��� install ��� XBTI-Tracker.</strong></p>";
$install_lang["smf_err_1"]              = "�� ������ �� ���� �� ����� ������� Forum ��� \"smf\" ������, �������� ����� �� install ���� ����������,<br /><br />Click <a href=\"javascript: history.go(-1);\">here</a> ��� �� ���������� ��� ����������� ������.";
$install_lang["smf_err_2"]              = "�� ������ �� ���� �� ����� ������� Forum ��� ���� ���������, �������� ����� �� install ���� ����������.<br /><br />����� click <a href=\"javascript: history.go(-1);\">���</a> ��� �� ����������� ��� ����������� ������.";
$install_lang["smf_err_3a"]             = "��� ������ �� ������ ��� SMF �������� ������� ������ (<strong>";
$install_lang["smf_err_3b"]             = "</strong>) �������� CHMOD ��� 777 ���� ����������.<br /><br />����� click <a href=\"javascript: history.go(-1);\">here</a> ��� �� ����������� ��� ����������� ������.";
$install_lang["allow_url_fopen"]        = "php.ini value for \"allow_url_fopen\" (best is ON)";
$install_lang["allow_url_fopen_ON"]        = "<span style=\"color:#00FF00; font-weight: bold;\">ON</span>";
$install_lang["allow_url_fopen_OFF"]        = "<span style=\"color:#FF0000; font-weight: bold;\">OFF</span>";
$install_lang["succes_upgrade1"]        = "� ���������� ������������!";
$install_lang["succes_upgrade2a"]       = "<p>������������ �������� ".$GLOBALS["btit-tracker"]." ".$GLOBALS["current_btit_version"]." ���� tracker ���.</p><p>� ���������� ���������� �������� ��� �� ���������� � ������������������ ��� ���� ��� ������������� �� �� ���������� <b>upgrade.php+install.php</b> ��� ����������� ���������.</p>";
$install_lang["succes_upgrade2b"]       = "<p>������������ �������� ".$GLOBALS["btit-tracker"]." ".$GLOBALS["current_btit_version"]." ���� tracker ���.</p><p>��� ������������� �� ���������� �� install. �������� �� �� ������ ���� ���������� <b>install.unlock</b> �� <b>install.lock</b> � ��� �� ���������� ���� �� <b>upgrade.php+install.php</b> ������.</p>";
$install_lang["succes_upgrade3"]        = "<p>W� ����� ��� BTI ������� �� ���������� �� ������������� ����� ��� ��������� ��� �� ��� ����� <ahref=\"http://dpwsmedia.com/smf/index.php\" target=\"_blank\">forum</a>.</p>";
$install_lang['error_mysql_database']   = '� installer �� ������� �� ���� �������� ��� &quot;<i>%s</i>&quot; database.  �� �������� hosts, ������ �� ������������� ���� ��������� ���� ��� administration panel ���� �� xBtit �� ��������������.  ������� ����� ���������� prefixes - ���� �� ����� ������ ��� - ��� ������� ��� ��� ���� ���������.';
$install_lang['error_message_click']    = '���� ���';
$install_lang['error_message_try_again']= '��� �� ��������������';

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