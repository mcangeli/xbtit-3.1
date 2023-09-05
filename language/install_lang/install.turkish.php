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

// turkish installation file //

$install_lang["charset"]                = "UTF-8";
$install_lang["lang_rtl"]               = false;
$install_lang["step"]                   = "ADIM:";
$install_lang["welcome_header"]         = "Hoş geldiniz";
$install_lang["welcome"]                = "Yeni xbtit kurulumuna hoş geldiniz.";
$install_lang["installer_language"]     = "Dil:";
$install_lang["installer_language_set"] = "Bu dili etkinleştir";
$install_lang["start"]                  = "Başla";
$install_lang["next"]                   = "İleri";
$install_lang["back"]                   = "Geri";
$install_lang["requirements_check"]     = "Gereksinim kontrolü";
$install_lang["reqcheck"]               = "Ger.kontrolü";
$install_lang["settings"]               = "Ayarlar";
$install_lang["system_req"]             = "<p>".$GLOBALS["btit-tracker"]."&nbsp;".$GLOBALS["current_btit_version"].", PHP'nin 4.1.2 ya da daha üst bir sürümüne ve bir MYSQL veritabanına gereksinimi var.</p>";
$install_lang["list_chmod"]             = "<p>Bir sonraki adıma geçmeden önce, lütfen tüm dosyaların yüklendiğinden ve bu betiğin yazması için aşağıdaki dosyaların uygun izinlere sahip olduğundan emin olun (0777 yeterli olur).</p>";
$install_lang["view_log"]               = "Tam sürüm geçmişini görebilirsiniz: ";
$install_lang["here"]                   = "(burdan)";
$install_lang["settingup"]              = "İzleyiciniz ayarlanıyor";
$install_lang["settingup_info"]         = "Basit Ayarlar";
$install_lang["sitename"]               = "Site Adı";
$install_lang["sitename_input"]         = "xbtit";
$install_lang["siteurl"]                = "Site URL'si";
$install_lang["siteurl_info"]           = "Sonunda taksim işareti olmayan";
$install_lang["mysql_settings"]         = "MySQL Ayarları<br />\nBir MySQL kullanıcısı ve veritabanı oluşturun, detaylı buraya girin";
$install_lang["mysql_settings_info"]    = "Veritabanı Ayarları.";
$install_lang["mysql_settings_server"]  = "MySQL Sunucusu (çoğu sunucuda localhost işe yarar)";
$install_lang["mysql_settings_username"] = "MySQL Kullanıcı Adı";
$install_lang["mysql_settings_password"] = "MySQL Şifresi";
$install_lang["mysql_settings_database"] = "MySQL Veritabanı";
$install_lang["mysql_settings_prefix"]  = "MySQL Tablo Öneki";
$install_lang["cache_folder"]           = "cache Klasörü";
$install_lang["torrents_folder"]        = "Torrents Klasörü";
$install_lang["access_code"]            = "acces_code Klasörü";
$install_lang["badwords_file"]          = "badwords.txt";
$install_lang["chat.php"]               = "chat.php";
$install_lang["write_succes"]           = "<span style=\"color:#00FF00; font-weight: bold;\">Yazılabilir!</span>";
$install_lang["write_fail"]             = "<span style=\"color:#FF0000; font-weight: bold;\">Yazılabilir DEĞİL!</span> (0777)";
$install_lang["write_file_not_found"]   = "<span style=\"color:#FF0000; font-weight: bold;\">BULUNAMADI!</span>";
$install_lang["mysqlcheck"]             = "MySQL Bağlantı Kontrolü";
$install_lang["mysqlcheck_step"]        = "MySQL Kontrolü";
$install_lang["mysql_succes"]           = "<span style=\"color:#00FF00; font-weight: bold;\">Veritababına başarılı bir şekilde bağlandı!</span>";
$install_lang["mysql_fail"]             = "<span style=\"color:#FF0000; font-weight: bold;\">Hata, bağlantı kurulamadı!</span>";
$install_lang["back_to_settings"]       = "Geri dönün ve gerekli bilgileri doldurun.";
$install_lang["saved"]                  = "kaydedildi";
$install_lang["file_not_writeable"]     = "<b>./include/settings.php</b> dosyası yazılabilir değil.";
$install_lang["file_not_exists"]        = "<b>./include/settings.php</b> dosyası mevcut değil.";
$install_lang["not_continue_settings"]  = "Bu dosya yazılabilir olmadan devam edemezsiniz";
$install_lang["not_continue_settings2"] = "Bu dosya ile devam edemezsiniz.";
$install_lang["settings.php"]           = "./include/settings.php";
$install_lang["can_continue"]           = "Devam edebilir ve bu dosyayı sonra değiştirebilirsiniz.";
$install_lang["mysql_import"]           = "MySQL İçe Aktarma";
$install_lang["mysql_import_step"]      = "SQL İç.Akt.";
$install_lang["create_owner_account"]   = "Kurucu Hesabı Oluşturma";
$install_lang["create_owner_account_step"] = "Kurucu Oluşturma";
$install_lang["database_saved"]         = "database.sql dosyası veritabanına aktarıldı.";
$install_lang["create_owner_account_info"] = "Kurucu hesabını buradan oluşturabilirsiniz.";
$install_lang["username"]               = "Kullanıcı Adı";
$install_lang["password"]               = "Şifre";
$install_lang["password2"]              = "Şifre (Tekrar)";
$install_lang["email"]                  = "e-Posta";
$install_lang["email2"]                 = "e-Posta (Tekrar)";
$install_lang["is_succes"]              = "tamamdır.";
$install_lang["no_leave_blank"]         = "Boş bir alan bırakmayın.";
$install_lang["not_valid_email"]        = "Bu geçerli bir e-posta adresi değildir.";
$install_lang["pass_not_same_username"] = "Şifre kullanıcı adıyla aynı olamaz.";
$install_lang["email_not_same"]         = "e-Posta adresleri eşleşmiyor.";
$install_lang["pass_not_same"]          = "Şifreler eşleşmiyor.";
$install_lang["site_config"]            = "İzleyici Ayarları";
$install_lang["site_config_step"]       = "İzleyici Ayar..";
$install_lang["default_lang"]           = "Varsayılan Dil";
$install_lang["default_style"]          = "Varsayılan Tema";
$install_lang["torrents_dir"]           = "Torrent Klasörü";
$install_lang["validation"]             = "Doğrulama Modu";
$install_lang["more_settings"]          = "*&nbsp;&nbsp;&nbsp;Daha fazla ayar, kurulum tamamlandığında <u>Admin Paneli</u>nde.";
$install_lang["tracker_saved"]          = "Ayarlar kaydedildi.";
$install_lang["finished"]               = "Kurulum tamamlanıyor";
$install_lang["finished_step"]          = "Kurulum Tamamlama";
$install_lang["succes_install1"]        = "Kurulum tamamlandı!";
$install_lang["succes_install2a"]       = "<p>".$GLOBALS["btit-tracker"]." ".$GLOBALS["current_btit_version"]." kurulumunu başarıyla tamamladınız.</p><p>Kurulum başarıyla kilitlendi ve tekrar kullanılmasını önlemek için <b>install.php</b> dosyası silindi.</p>";
$install_lang["succes_install2b"]       = "<p>".$GLOBALS["btit-tracker"]." ".$GLOBALS["current_btit_version"]." kurulumunu başarıyla tamamladınız.</p><p>Yüklemeyi kilitlemenizi tavsiye ederiz. Bunu <b>install.unlock</b> dosyasını <b>install.lock</b> şeklinde değiştirerek veya <b>install.php</b> dosyasını silerek yapabilirsiniz.</p>";
$install_lang["succes_install3"]        = "<p>BTITakımı olarak bu ürünü keyifle kullanmanızı ve sizi <a href=\"http://dpwsmedia.com/smf/index.php\" target=\"_blank\">forumumuzda</a></p> tekrar görmeyi umarız.</p>";
$install_lang["go_to_tracker"]          = "İzleyicinize gidin";
$install_lang["forum_type"]             = "Forum Tipi";
$install_lang["forum_internal"]         = "xbtit Dahili Forum";
$install_lang["forum_smf"]              = "Simple Machines Forum";
$install_lang["forum_other"]            = "Entegre Edilmemiş Dış Forum - URL'yi buraya girin -->";
$install_lang["smf_download_a"]         = "<strong>Eğer Simple Machines Forum kullanıyorsanız:</strong><br /><br/ >Lütfen Simple Machines Forumun son sürümünü <a target='_new' href='http://www.simplemachines.org/download/'>buradan</a> indirin, sıkıştırılmış arşiv içeriğini \"smf\" klasörüne yükleyin ve kurmak için <a target='_new' href='smf/install.php'>buraya</a> tıklayın.*<br /><strong>(Bu kurulum işlemi için lütfen aynı kimlik bilgilerini kullanın).<br /><br /><font color='#FF0000'>Kurduktan sonra</font></strong> lütfen SMF İngilizce dil dosyasının CHMOD ayarını (<strong>";
$install_lang["smf_download_b"]         = "</strong>) 777 yapın ve xbtit kurulumuna devam etmek için <strong>İleri</strong> butonuna tıklayın.<br /><br /><strong>* Her iki bağlantı da xbtit kurulumunda yerinizi kaybetmeyesiniz diye yeni bir pencere/sekme içine açılır.</strong></p>";
$install_lang["smf_err_1"]              = "Simple Machines Forum \"smf\" klasöründe bulunamadı, lütfen devam etmeden önce onu kurun.<br /><br />Bir önceki sayfaya dönmek için <a href=\"javascript: history.go(-1);\">buraya</a> tıklayın.";
$install_lang["smf_err_2"]              = "Simple Machines Forum veritabanında bulunamadı, lütfen devam etmeden önce onu kurun.<br /><br />Bir önceki sayfaya dönmek için <a href=\"javascript: history.go(-1);\">buraya</a> tıklayın.";
$install_lang["smf_err_3a"]             = "SMF İngilizce dil dosyasına yazma başarısız (<strong>";
$install_lang["smf_err_3b"]             = "</strong>) lütfen devam etmeden önce CHMOD ayarını 777 yapın.<br /><br />Bir önceki sayfaya dönmek için <a href=\"javascript: history.go(-1);\">buraya</a> tıklayın.";
$install_lang["allow_url_fopen"]        = "php.ini dosyasındaki \"allow_url_fopen\" değeri (ON en iyisi)";
$install_lang["allow_url_fopen_ON"]        = "<span style=\"color:#00FF00; font-weight: bold;\">ON</span>";
$install_lang["allow_url_fopen_OFF"]        = "<span style=\"color:#FF0000; font-weight: bold;\">OFF</span>";
$install_lang["succes_upgrade1"]        = "Yükseltme başarılı!";
$install_lang["succes_upgrade2a"]       = "<p>İzleyicinizi ".$GLOBALS["btit-tracker"]." ".$GLOBALS["current_btit_version"]." sürümüne başarılı bir şekilde yükselttiniz.</p><p>Yükseltme başarılı bir şekilde kilitlendi fakat biz daha fazla güvenlik için <b>upgrade.php+install.php</b> dosyalarını silmenizi öneriyoruz.</p>";
$install_lang["succes_upgrade2b"]       = "<p>İzleyicinizi ".$GLOBALS["btit-tracker"]." ".$GLOBALS["current_btit_version"]." sürümüne başarılı bir şekilde yükselttiniz.</p><p>Kurulumu kilitlemenizi öneriyoruz. Bunu <b>install.unlock</b> dosyasını <b>install.lock</b> olarak değiştirerek ya da <b>upgrade.php+install.php</b> dosyalarını silerek yapabilirsiniz.</p>";
$install_lang["succes_upgrade3"]        = "<p>BTITakımı olarak bu ürünü keyifle kullanmanızı ve sizi <a href=\"http://www.DPWS Media LTD.org/smf/index.php\" target=\"_blank\">forumumuzda</a>.</p> tekrar görmeyi umarız.</p>";
$install_lang['error_mysql_database']   = 'Kurulum sihirbazı &quot;<i>%s</i>&quot; veritabanına erişim sağlayamadı. Bazı sunucularda, xBtit kurulumuna girmeden önce yönetim panelinden veritabanı oluşturmak zorunda olabilirsiniz. Bazıları da veritabanı adınıza (kullanıcı adınız gibi) önekler ekleyebilir.';
$install_lang['error_message_click']    = 'Buraya tıklayın';
$install_lang['error_message_try_again']= 'Tekrar denemek için';

$install_lang["forum_ipb"]              = "Invision Power Board";
$install_lang["ipb_download_a"]         = "<b>Eğer Invision Power Board kullanıyorsanız:</b><br /><br/ >Lütfen Invision Power Servislerindeki <a target='_new' href='http://www.invisionpower.com/customer/'>Müşteri Profiliniz</a>den Invision Power Board'un son sürümünü indirin, sıkıştırılmış arşivden dosyaları bilgisayarınıza çıkartın ve \"upload\" klasörünün içeriğini \"ipb\" klasörüne yükleyin.<br /><br />Yükledikten sonra \"cache\", \"hooks\", \"public\" ve \"uploads\" klasörlerinin CHMOD ayarının 777 (-R, --recursive) olduğundan emin olun, \"conf_global.dist.php\" dosyasını \"conf_global.php\" olarak yeniden adlandırıp onun da CHMOD ayarını 777 yapın.<br /><br /> Bu ayarlardan sonra lütfen kurulum için <a target='_new' href='ipb/admin/install/index.php'> buraya</a>  tıklayın.*<br /><b>(Lütfen bu kurulum işlemi için aynı veritabanı kimlik bilgilerini kullandığınızdan ve bir veritabanı öneki girdiğinizden emin olun, biz <span style='color:blue;'>ipb_</span> kullanmanızı öneriyoruz.).<br /><br /><font color='#FF0000'>Kurulumdan sonra</font></b> lütfen varsayılan geçici İngilizce dil dosyasının CHMOD ayarını (<b>";
$install_lang["ipb_download_b"]         = "</b>) 777 yapın ve xbtit kurulumuna devam etmek için <b>İleri</b> butonuna tıklayın.<br /><br /><b>* Her iki bağlantı da xbtit kurulumunda yerinizi kaybetmeyesiniz diye yeni bir pencere/sekme içine açılır.</b></p>";
$install_lang["ipb_err_1"]              = "Invision Power Board \"ipb\" klasöründe bulunamadı, lütfen devam etmeden önce onu kurun.<br /><br />Bir önceki sayfaya dönmek için <a href=\"javascript: history.go(-1);\">buraya</a> tıklayın.";
$install_lang["ipb_err_2"]              = "Invision Power Board veritabanında bulunamadı, lütfen devam etmeden önce onu kurun.<br /><br />Bir önceki sayfaya dönmek için <a href=\"javascript: history.go(-1);\">buraya</a> tıklayın.";
$install_lang["ipb_err_3a"]             = "IPB İngilizce dil dosyasına yazma başarısız (<b>";
$install_lang["ipb_err_3b"]             = "</b>) lütfen devam etmeden önce CHMOD ayarını 777 yapın.<br /><br />Bir önceki sayfaya dönmek için <a href=\"javascript: history.go(-1);\">buraya</a> tıklayın.";
$install_lang["ipb_err_4a"]             = "IPB İngilizce dil dosyası (<b>";
$install_lang["ipb_err_4b"]             = "</b>) mevcut değil, devam edilemez.<br /><br />Bir önceki sayfaya dönmek için <a href=\"javascript: history.go(-1);\">buraya</a> tıklayın.";
$install_lang["ipb_err_5"]             = "IPB Yapılandırma dosyasına yazma başarısız (<b>";
$install_lang["ipb_err_6"]             = "İzleyici Yapılandırma dosyasına yazma başarısız (<b>";
?>