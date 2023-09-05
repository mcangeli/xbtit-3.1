<?php
$language['ACCOUNT_CREATED']='Účet vytvořen';
$language['USER_NAME']='Uživatel';
$language['USER_PWD_AGAIN']='Zopakujte heslo';
$language['USER_PWD']='Heslo';
$language['USER_STYLE']='Styl';
$language['USER_LANGUE']='Jazyk';
$language['IMAGE_CODE']='Obrázkový kód';
$language['INSERT_USERNAME']='Musíte zadat uživatelské jméno!';
$language['INSERT_PASSWORD']='Musíte zadat heslo!';
$language['DIF_PASSWORDS']='Hesla se neshodují!';
$language['ERR_NO_EMAIL']='Byl zadán neplatný email';
$language['USER_EMAIL_AGAIN']='Zadejte email';
$language['ERR_NO_EMAIL_AGAIN']='Zadejte email';
$language['DIF_EMAIL']='Emaily se neshodují!';
$language['SECURITY_CODE']='Odpovězte na otázku';
# Password strength
$language['WEEK']='Slabé';
$language['MEDIUM']='Jakštakš';
$language['SAFE']='Bezpečné';
$language['STRONG']='Silné';
$language["ERR_GENERIC"]='Vyskystl se problém: '.((is_object($GLOBALS['conn'])) ? mysqli_error($GLOBALS['conn']) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false));
?>