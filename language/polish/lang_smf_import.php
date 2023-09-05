<?php

// smf_import.php language file
$lang[0]="Tak";
$lang[1]="Nie";
$lang[2]="<center><u><strong><font size=\"4\" face=\"Arial\">Etap 1: Wymagania początkowe</font></strong></u></center><br />";
$lang[3]="<center><strong><font size=\"2\" face=\"Arial\">Czy pliki SMF są obecne w folderze \"smf\"?<font color=\"";
$lang[4]="\">&nbsp;&nbsp;&nbsp; ";
$lang[5]="</font></center></strong>";
$lang[6]="<br /><center>Pobierz<a target=\"_new\" href=\"http://www.simplemachines.org/download/\">SMF</a> i skopiuj zawartość archiwum do folderu \"smf\".<br />Jeśli folder \"smf\" nie istnieje, utwórz go w katalogu głównym swojego trackera i skopiuj do niego <br />zawartość archiwum.<br /><br />Po skopiowaniu plików, z"; // p at end is a lowercase p for use with $lang[8]
$lang[7]="<br /><center>Z"; // P at end is an uppercase p for use with $lang[8]
$lang[8]="ainstaluj SMF poprzez <a target=\"_new\" href=\"smf/install.php\">kliknięcie tutaj</a>*<br /><br /><strong>* Do instalacji SMF użyj danych do logowania do tej samej bazy, której użyto do instalacji trackera.<br />Możesz użyć jakiegokolwiek prefiksu bazy danych (z wyłączeniem<br />prefiksu użytego dla trackera, w stosownych przypadkach)<br /><br />";
$lang[9]="<font color=\"#0000FF\" size=\"3\">Możesz odświeżyć tę stronę po skończeniu wymaganego zadania!</font></strong></center>";
$lang[10]="<center><strong>Czy SMF jest zainstalowane?<font color=\"";
$lang[11]="Nie znaleziono pliku!";
$lang[12]="Plik znaleziono, ale nie jest zapisywalny!";
$lang[13]="<center><strong>Czy domyślny plik z błędami (w języku angielskim) SMF jest dostępny i zapisywalny?<font color=\"";
$lang[14]="<center><strong>Czy plik smf.sql jest obecny w katalogu \"sql\"?<font color=\"";
$lang[15]="<br /><center><strong>Plik językowy (";
$lang[16]=")<br />nie odnaleziony, upewnij się, że <font color=\"#FF0000\"><u>wszystkie pliki SMF</u></font> zostały skopiowane do folderu!<br /><br />";
$lang[17]=")<br />nie jest zapisywalny. <font color=\"#FF0000\"><u>Zmień atrybuty chmod tego pliku na 777</u></font><br /><br />";
$lang[18]="<br /><center><strong>Nie odnaleziono pliku smf.sql. <font color=\"#FF0000\"><u>Upewnij się, że ten plik znajduje się w folderze \"sql\".</u></font><br />(Powinien być dostępny w pakiecie XBTIT!)<br /><br />";
$lang[19]="<br /><center>Wszystkie wymagania zostały spełnione, kliknij <a href=\"";
$lang[20]="\">tutaj, aby kontynuować</a></center>";
$lang[21]="<center><u><strong><font size=\"4\" face=\"Arial\"Etap 2: Ustawienia wstępne</font></strong></u></center><br />";
$lang[22]="<center>Po pomyślnej weryfikacji wymagań początkowych, czas na modyfikacje bazy danych tak,<br /> aby poprawnie współpracowała z trackerem.</center><br />";
$lang[23]="<center><form name=\"db_pwd\" action=\"smf_import.php\" method=\"GET\">Wprowadź hasło do bazy danych:&nbsp;<input name=\"pwd\" size=\"20\" /><br />\n<br />\n<strong> kliknij <input type=\"submit\" name=\"confirm\" value=\"yes\" size=\"20\" />, aby kontynuować.</strong><input type=\"hidden\" name=\"act\" value=\"init_setup\" /></form></center>";
$lang[24]="<center><u><strong><font size=\"4\" face=\"Arial\">Etap 3: Import użytkowników trackera</font></strong></u></center><br />";
$lang[25]="<center>Po pomyślnym skonfigurowaniu bazy danych, czas na import użytkowników trackera.<br />W zależności od liczby użytkowników, może to trochę potrwać, uzbrój się więc w cierpliwość i pozwól<br />skryptowi wykonać jego zadanie!<br /><br /><strong>Kliknij <a href='".$_SERVER["PHP_SELF"]."?act=member_import&confirm=yes'>tutaj</a>, aby kontynuować.</center>";
$lang[26]="<center><u><strong><font size=\"4\" face=\"Arial\">Niestety</font></strong></u></center><br />";
$lang[27]="<center>Niestety, ten skrypt przewidziany jest do jednorazowego użycia, a ponieważ raz już go uruchomiłeś, plik skryptu został zablokowany!</center>";
$lang[28]="<center><br /><strong><font color=\"#FF0000\"><br />";
$lang[29]="</strong></font>Konta na forum zostały pomyślnie utworzone. Kliknij <a href='".$_SERVER["PHP_SELF"]."?act=import_forum&amp;confirm=no'>tutaj</a>, aby kontynuować.</center>";
$lang[30]="<center><u><strong><font size=\"4\" face=\"Arial\">Etap 4: Import wyglądu forum i postów</font></strong></u></center><br />";
$lang[31]="<center>To jest ostatni etap importowania forum. Na tym etapie, twoje forum BTI zostanie zaimportowane do forum SMF.<br />Posty zostaną zaimportowane jako nowa kategoria \"Mój import BTI\".<br />Kliknij <a href='".$_SERVER["PHP_SELF"]."?act=import_forum&confirm=yes'>tutaj</a>, aby kontynuować.</center>";
$lang[32]="<center><u><strong><font size=\"4\" face=\"Arial\">Import zakończony</font></strong></u></center><br />";
$lang[33]="<center><font face=\"Arial\" size=\"2\">Zaloguj się <a target=\"_new\" href=\"smf/index.php?action=login\">do forum SMF</a> używając danych do logowania do trackera<strong>*</strong> i idź<br />do<strong>Centrum Admina</strong>, po czym wybierz opcję <strong>Zarządzanie Forum</strong> i uruchom<br /><strong>Znajdź i napraw błędy</strong>, a następnie <strong>przelicz wszystkie podsumowania forum<br /> i statystyki,</strong>, aby uporządkować import, naprawić licznik postów, itd.<br /><br /><strong><font color=\"#0000FF\">Po tym, twoje forum SMF powinno być gotowe do użycia!</font></strong><br /><br /><strong>* Jeśli do hashowania hasła używasz metody innej niż xbtit Classic w Pakiecie Bezpieczeństwa, Ty i inni użytkownicy będą musieli zalogować się do trackera, żeby zresetować swoje hasła do SMF. (Alternatywnie, możesz użyć opcji odzyskiwania hasła na forum SMF, ale lepiej zrobić to przez tracker, dzięki czemu za pomocą jednego hasła zalogujesz sie i do trackera i do forum SMF.)</strong></font></center>";
$lang[34]="<center><u><strong><font size=\"4\" face=\"Arial\" color=\"#FF0000\">WYSTĄPIŁ BŁĄD!</font></strong></u></center><br />\n<br />\n<center><font face=\"Arial\" size=\"3\">Wprowadzono błędne hasło lub nie jesteś właścicielem tego trackera!<br />\nTwój adres IP został zarejestrowany.</font></center>";
$lang[35]="</body>\n</html>\n";
$lang[36]="<center>Nie można zapisać do:<br /><br /><b>";
$lang[37]="</b><br /><br />Upewnij się, że plik jest zapisywalny i uruchom skrypt ponownie.</center>";
$lang[38]="<center><br /><font color=\"red\" size=\"4\"><b>Brak dostępu</b></font></center>";
?>