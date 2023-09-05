<?php

// ipb_import.php language file
global $TABLE_PREFIX, $ipb_prefix;

$lang[0]="Tak";
$lang[1]="Nie";
$lang[2]="<center><u><strong><font size=\"4\" face=\"Arial\">Etap 1: Wymagania początkowe</font></strong></u></center><br />";
$lang[3]="<center><strong><font size=\"2\" face=\"Arial\">Czy pliki IPB są obecne w folderze \"ipb\"?<font color=\"";
$lang[4]="\">&nbsp;&nbsp;&nbsp; ";
$lang[5]="</font></center></strong>";
$lang[6]="<br /><center>Pobierz <a target=\"_new\" href=\"http://www.invisionpower.com/\">IPB</a> i skopiuj zawartość archiwum do folderu \"ipb\".<br />Jeśli folder \"ipb\" nie istnieje, utwórz go w katalogu głównym swojego trackera i skopiuj do niego <br />zawartość archiwum.<br /><br />Po skopiowaniu plików, z"; // p at end is a lowercase p for use with $lang[8]
$lang[7]="<br /><center>Z"; // P at end is an uppercase p for use with $lang[8]
$lang[8]="ainstaluj IPB poprzez <a target=\"_new\" href=\"ipb/admin/install/index.php\">klikniecie tutaj</a>*<br /><br /><strong>* Do instalacji IPB użyj danych do logowania do tej samej bazy, której użyto do instalacji trackera.<br />Możesz użyć jakiegokolwiek prefiksu bazy danych (z wyłączeniem<br />prefiksu użytego dla trackera, w stosownych przypadkach)<br /><br />";
$lang[9]="<font color=\"#0000FF\" size=\"3\">Możesz odświeżyć tę stronę po skończeniu wymaganego zadania!</font></strong></center>";
$lang[10]="<center><strong>Czy IPB jest zainstalowane?<font color=\"";
$lang[11]="Nie znaleziono pliku!";
$lang[12]="Plik znaleziono, ale nie jest zapisywalny!";
$lang[13]="<center><strong>Czy domyślny plik z błędami (w języku angielskim) IPB jest dostępny i zapisywalny?<font color=\"";
$lang[14]="<center><strong>Czy plik ipb.sql jest obecny w katalogu \"sql\"?<font color=\"";
$lang[15]="<br /><center><strong>Plik językowy (";
$lang[16]=")<br />nie odnaleziony, upewnij się, że <font color=\"#FF0000\"><u>wszystkie pliki IPB</u></font> zostały skopiowane do folderu!<br /><br />";
$lang[17]=")<br />nie jest zapisywalny. <font color=\"#FF0000\"><u>Zmień atrybuty chmod tego pliku na 777</u></font><br /><br />";
$lang[18]="<br /><center><strong>Nie odnaleziono pliku ipb.sql. <font color=\"#FF0000\"><u>Upewnij się, że ten plik znajduje się w folderze \"sql\".</u></font><br />(Powinien być dostępny w pakiecie XBTIT!)<br /><br />";
$lang[19]="<br /><center>Wszystkie wymagania zostały spełnione, kliknij <a href=\"";
$lang[20]="\">tutaj, aby kontynuować</a></center>";
$lang[21]="<center><u><strong><font size=\"4\" face=\"Arial\"Etap 2: Ustawienia wstępne</font></strong></u></center><br />";
$lang[22]="<center>Po pomyślnej weryfikacji wymagań początkowych, czas na modyfikacje bazy danych tak,<br /> aby poprawnie współpracowała z trackerem.</center><br />";
$lang[23]="<center><form name=\"db_pwd\" action=\"ipb_import.php\" method=\"GET\">Wprowadź hasło do bazy danych:&nbsp;<input name=\"pwd\" size=\"20\" /><br />\n<br />\n<strong>kliknij <input type=\"submit\" name=\"confirm\" value=\"yes\" size=\"20\" />, aby kontynuować</strong><input type=\"hidden\" name=\"act\" value=\"init_setup\" /></form></center>";
$lang[24]="<center><u><strong><font size=\"4\" face=\"Arial\">Etap 3: Import użytkowników trackera</font></strong></u></center><br />";
$lang[25]="<center>Po pomyślnym skonfigurowaniu bazy danych, czas na import użytkowników trackera.<br />W zależności od liczby użytkowników, może to trochę potrwać, uzbrój się więc w cierpliwość i pozwól<br />skryptowi wykonać jego zadanie!<br /><br /><strong>Kliknij <a href='".$_SERVER["PHP_SELF"]."?act=member_import&confirm=yes'>tutaj</a>, aby kontynuować</center>";
$lang[26]="<center><u><strong><font size=\"4\" face=\"Arial\">Niestety</font></strong></u></center><br />";
$lang[27]="<center>Niestety, ten skrypt przewidziany jest do jednorazowego użycia, a ponieważ raz już go uruchomiłeś, plik skryptu został zablokowany!</center>";
$lang[28]="<center><br /><strong><font color=\"#FF0000\"><br />";
$lang[29]="</strong></font>Konta na forum zostały pomyślnie utworzone. Kliknij <a href='".$_SERVER["PHP_SELF"]."?act=import_forum&amp;confirm=no'>tutaj</a>, aby kontynuować.</center>";
$lang[30]="<center><u><strong><font size=\"4\" face=\"Arial\">Etap 4: Import wyglądu forum i postów</font></strong></u></center><br />";
$lang[31]="<center>To jest ostatni etap importowania forum. Na tym etapie, twoje forum BTI zostanie zaimportowane do forum IPB.<br />Posty zostaną zaimportowane jako nowa kategoria \"Mój import BTI\".<br />Kliknij <a href='".$_SERVER["PHP_SELF"]."?act=import_forum&confirm=yes'>tutaj</a>, aby kontynuować.</center>";
$lang[32]="<center><u><strong><font size=\"4\" face=\"Arial\">Import zakończony</font></strong></u></center><br />";
$lang[33]="<center><font face=\"Arial\" size=\"2\">Zaloguj się <a target=\"_new\" href=\"ipb/index.php?app=core&module=global&section=login\">do forum IPB </a> używając danych do logowania do trackera i idź<br />do <strong>Centrum Admina</strong>, po czym wybierz opcję <strong>Zarządzanie Forum</strong> i uruchom<br /><strong>Znajdź i napraw błędy</strong>, a następnie <strong>przelicz wszystkie podsumowania forum<br /> i statystyki,</strong>, aby uporządkować import, naprawić licznik postów, itd.<br /><br /><strong><font color=\"#0000FF\">Po tym, twoje forum IPB powinno być gotowe do użycia!</font></strong></font></center>";
$lang[34]="<center><u><strong><font size=\"4\" face=\"Arial\" color=\"#FF0000\">WYSTĄPIŁ BŁĄD!</font></strong></u></center><br />\n<br />\n<center><font face=\"Arial\" size=\"3\">Wprowadzono błędne hasło lub nie jesteś właścicielem tego trackera!<br />\nTwój adres IP został zarejestrowany.</font></center>";
$lang[35]="";
$lang[36]="<center>Nie można zapisać do:<br /><br /><b>";
$lang[37]="</b><br /><br />Upewnij się, że plik jest zapisywalny i uruchom skrypt ponownie.</center>";
$lang[38]="<center><br /><font color=\"red\" size=\"4\"><b>Brak dostępu</b></font></center>";
$lang[39]="<br /><center><strong>Plik konfiguracyjny IPB (";
$lang[40]="<center><u><strong><font size=\"4\" face=\"Arial\">Etap 3: Tworzenie połączenia</font></strong></u></center><br />";
$lang[41]="<center>Po pomyślnym skonfigurowaniu bazy danych, czas na skojarzenie użytkowników trackera z użytkownikami forum IPB i przyporządkowanie każdemu rangi odpowiadającej randze na trackerze.<br />W zależności od liczby użytkowników, może to trochę potrwać, uzbrój się więc w cierpliwość i pozwól<br />skryptowi wykonać jego zadanie!<br /><br /><strong>Kliknij <a href='".$_SERVER["PHP_SELF"]."?act=member_bridge&amp;confirm=yes'>tutaj</a>, aby kontynuować.</center>";
$lang[42]="<center><font face=\"Arial\" size=\"2\">Zaloguj się <a target=\"_new\" href=\"ipb/index.php?app=core&module=global&section=login\">do twojego nowego forum IPB</a> używając danych z trackera i idź <br />do <strong>Panelu Admina</strong>, aby ustawić uprawnienia kategorii/forum dla poszczególnych rang.<br />Obecnie, tylko domyślna kategoria/forum jest widoczna dla wszystkich użytkowników.<br /><br /><strong><font color=\"#0000FF\">Twoje zintegrowane forum IPB powinno być gotowe do uzycia!</font></strong></font></center>";
$lang[43]="<center>Pomyślnie połączono";
$lang[44]="konta.<br /><br /></center>";
$lang[45]="<center><b><span style='color:red'>UWAGA: Istnieją";
$lang[46]="niepołączone konta na trackerze i";
$lang[47]="porzucone konta na forum.</span></b><br /><br />Powinieneś sprobować naprawić je ręcznie poprzez porownanie kont w phpMyAdmin.<br />Możesz do tego celu użyć następujących zapytań:<br /><br />Tracker:<br /><textarea rows='1' cols='80'>SELECT * FROM `{$TABLE_PREFIX}users` WHERE `ipb_fid`=0 AND `id`>1 ORDER BY `id` ASC;</textarea><br /><br />Forum:<br /><textarea rows='1' cols='80'>SELECT * FROM `{$ipb_prefix}members` WHERE `member_group_id`=0 ORDER BY `id_member` ASC;</textarea><br /><br />Kiedy znajdziesz pasujące dane, powinieneś zaktualizować pole \"ipb_fid\" w koncie trackera<br />używając pola \"id_member\" z odpowiedniego rekordu na forum.<br /><br />Następnie, zaktualizuj pole \"member_group_id\" w rekordzie forum za pomocą wartości pola \"id_level\" z rekordu trackera.<br /><br />Następnie, zalecane jest usunięcie wszystkich porzuconych kont IPB poprzez  wykonanie polecenia:<br /><textarea rows='1' cols='80'>DELETE FROM `{$ipb_prefix}members` WHERE `member_group_id`=0;</textarea><br /><br /></center>";
$lang[48]="<center>Pomyślnie zaimportowano i połączono";
$lang[49]="<center><b><span style=\"color:#0000FF;\">Twoje zintegrowane forum IPB powinno być gotowe do uzycia!</span></b></center>";
?>