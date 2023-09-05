<?php
$language['ACCOUNT_CREATED']='Hesap Oluşturuldu';
$language['USER_NAME']='Kullanıcı Adı';
$language['USER_PWD_AGAIN']='Şifre Tekrarı';
$language['USER_PWD']='Şifre';
$language['USER_STYLE']='Tema';
$language['USER_LANGUE']='Dil';
$language['IMAGE_CODE']='Resim Kodu';
$language['INSERT_USERNAME']='Bir kullanıcı adı girmelisiniz!';
$language['INSERT_PASSWORD']='Bir şifre girmelisiniz!';
$language['DIF_PASSWORDS']='Şifreler eşleşmiyor!';
$language['ERR_NO_EMAIL']='Geçerli bir e-posta adresi girmelisiniz';
$language['USER_EMAIL_AGAIN']='e-Posta tekrarı';
$language['ERR_NO_EMAIL_AGAIN']='e-Posta tekrarı';
$language['DIF_EMAIL']='e-Posta adresleri eşleşmiyor!';
$language['SECURITY_CODE']='Soruyu cevaplayın';
# Password strength
$language['WEEK']='Zayıf';
$language['MEDIUM']='Orta';
$language['SAFE']='Güvenli';
$language['STRONG']='Güçlü';
$language["ERR_GENERIC"]='Genel Hata: '.((is_object($GLOBALS['conn'])) ? mysqli_error($GLOBALS['conn']) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false));
?>