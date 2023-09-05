<?php
$language["ACCOUNT_CREATED"]="Konto utworzone";
$language["USER_NAME"]="Użytkownik";
$language["USER_PWD_AGAIN"]="Powtórz hasło";
$language["USER_PWD"]="Hasło";
$language["USER_STYLE"]="Styl";
$language["USER_LANGUE"]="Język";
$language["IMAGE_CODE"]="Kod obrazka";
$language["INSERT_USERNAME"]="Musisz wpisać nazwę użytkownika!";
$language["INSERT_PASSWORD"]="Musisz wpisać hasło!";
$language["DIF_PASSWORDS"]="Hasła nie pasują!";
$language["ERR_NO_EMAIL"]="Musisz wprowadzić prawidłowy adres email";
$language["USER_EMAIL_AGAIN"]="Powtórz email";
$language["ERR_NO_EMAIL_AGAIN"]="Powtórz email";
$language["DIF_EMAIL"]="Adresy email nie pasują!";
$language["SECURITY_CODE"]="Odpowiedz na pytanie";
# Password strength
$language["WEEK"]="Słabe";
$language["MEDIUM"]="Średnie";
$language["SAFE"]="Bezpieczne";
$language["STRONG"]="Mocne";

$language["ERR_GENERIC"]="Błąd ogólny: ".((is_object($GLOBALS['conn'])) ? mysqli_error($GLOBALS['conn']) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false));
?>