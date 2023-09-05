<?php

if (!isset($_GET["smf_type"])) {
    $_GET["smf_type"]="";
}

// smf_import.php language file

$lang[0]='Ano';
$lang[1]='Ne';
$lang[2]='<center><u><strong><font size="4" face="Arial">Fáze 1: Prvotní požadavky</font></strong></u></center><br />';
$lang[3]='<center><strong><font size="2" face="Arial">Jsou SMF soubory přítomny v "smf" adresáři?<font color="';
$lang[4]='">&nbsp;&nbsp;&nbsp; ';
$lang[5]='</font></center></strong>';
$lang[6]='<br /><center>Prosím <a target="_new" href="http://www.simplemachines.org/download/">stáhněte SMF</a> a nahrajte obsah archivu do "smf" adresáře.<br />Jestliže nemáte "smf" adresář, vytvořte jej v rootu vašeho trackeru a nahrajte<br /> do něj obsah archivu.<br /><br />Jakmile nahráno p'; // p at end is a lowercase p for use with $lang[8]
$lang[7]='<br /><center>P'; // P at end is an uppercase p for use with $lang[8]
$lang[8]='rosím nainstalujte SMF <a target="_new" href="smf/install.php">kliknutím zde</a>*<br /><br /><strong>* Prosím použijte stejné přihlašovací údaje databáze jako používáte na trackeru.<br />Můžete použít jakýkoliv databázový prefix. (kromě toho, který používá tracker)<br /><br />';
$lang[9]='<font color="#0000FF" size="3">Jakmile je úloha dokončena, můžete obnovit tuto stránku!</font></strong></center>';
$lang[10]='<center><strong>SMF nainstalováno?<font color="';
$lang[11]='Soubor nenalezen!';
$lang[12]='Soubor nalezen, ale není zapisovatelný!';
$lang[13]='<center><strong>Základní SMF chyba. Je soubor dostupný a zapisovatelný?<font color="';
$lang[14]='<center><strong>Je smf.sql soubor přítomen v "sql" adresáři?<font color="';
$lang[15]='<br /><center><strong>Jazykový soubor (';
$lang[16]=')<br />chybí, prosím ujistěte se, <font color="#FF0000"><u>že všechny SMF soubory</u></font> byly nahrány!<br /><br />';
$lang[17]=')<br />není zapisovatelný, <font color="#FF0000"><u>prosím CHMOD tento soubor na 777</u></font><br /><br />';
$lang[18]='<br /><center><strong>smf.sql chybí, <font color="#FF0000"><u>prosím ujistěte se, že je tento soubor přítomen v "sql" adresáři.</u></font><br />(Bývá zahrnut společně s XBTIT distribucí!)<br /><br />';
$lang[19]='<br /><center>Všechny požadavky splněny, prosím <a href="';
$lang[20]='">klikněte zde pro pokračování</a></center>';
$lang[21]='<center><u><strong><font size="4" face="Arial">Fáze 2: Prvotní nastavení</font></strong></u></center><br />';
$lang[22]='<center>Nyní, když jsme oveřili, že je vše na svém místě, nastal čas upravit databázi,<br />aby vše bylo v souladu s trackerem.</center><br />';
$lang[23]='<center><form name="db_pwd" action="smf_import.php" method="GET">Vložte heslo databáze:&nbsp;<input name="pwd" size="20" /><br />'."\n".'<br />'."\n".'<strong>prosím klikněte <input type="submit" name="confirm" value="yes" size="20" /> pro pokračování</strong><input type="hidden" name="act" value="init_setup" /><input type="hidden" name="smf_type" value="'.$_GET["smf_type"].'" /></form></center>';
$lang[24]='<center><u><strong><font size="4" face="Arial">Fáze 3: Importování uživatelů trackeru</font></strong></u></center><br />';
$lang[25]='<center>Nyní, když byla databáze korektně nastavena, je načase importovate uživatele trackeru.<br />Tato operace zabere nějaký čas v závislosti na počtu uživatelů. Prosím buďte trpěliví a povolte<br />skript pro zahájení!<br /><br /><strong>Prosím <a href="'.$_SERVER['PHP_SELF'].'?act=member_import&amp;confirm=yes&smf_type='.$_GET["smf_type"].'">klikněte zde</a> pro pokračování</center>';
$lang[26]='<center><u><strong><font size="4" face="Arial">Omlouváme se</font></strong></u></center><br />';
$lang[27]='<center>Omlouváme se, tento skript je možné použít pouze jednou. Jelikož již byl použit, je uzamčen!</center>';
$lang[28]='<center><br /><strong><font color="#FF0000"><br />';
$lang[29]='</strong></font> Účty fóra úspěšně vytvořeny, prosím <a href="'.$_SERVER['PHP_SELF'].'?act=import_forum&amp;confirm=no&smf_type='.$_GET["smf_type"].'">klikněte zde</a> pro pokračování</center>';
$lang[30]='<center><u><strong><font size="4" face="Arial">Fáze 4: Importování rozvrření a příspěvků fóra</font></strong></u></center><br />';
$lang[31]='<center>Tohle je poslední fáze importu fóra. Vaše současné BTI fórum se naimportuje do SMF<br />fóra do nové kategorie "My BTI import".<br />Prosím <a href="'.$_SERVER['PHP_SELF'].'?act=import_forum&amp;confirm=yes&smf_type='.$_GET["smf_type"].'">klikněte zde</a> pro pokračování</center>';
$lang[32]='<center><u><strong><font size="4" face="Arial">Importování dokončeno</font></strong></u></center><br />';
$lang[33]='<center><font face="Arial" size="2">Prosím <a target="_new" href="smf/index.php?action=login">přihlašte se do svého nového SMF fóram</a> použitím přihlšovacích údajů vašeho Trackeru<strong>*</strong> a jděte do<br />the <strong>Administračního centra</strong> a poté vyberte <strong>Údržba fóra</strong> a spusťte<br /><strong>Najít a opravit chyby.</strong> Následně spusťte <strong>Přepočítat všechny počty fóra<br />a statistiky</strong> k uklizení importu, opravení počtu příspěvků atd. <br /><br /><strong><font color="#0000FF">Vaše integroavné SMF Fórum by poté mělo být připraveno k použití!!</font></strong><br /><br /><strong>* Jestliže používáte jinou metodu hashování hesla než je xbtit Classic v Bezpečnostním nastaveníp, vy (a vaši uživatelé) se budou muset  do trackeru znovu přihlásit pro resetování SMF hesla. (Alternativně lze použít možnost obnovení hesla v SMF, ovšem je mnohem lepší to provést přes přihlašování na trackeru, takže heslo k trackeru a fóru bude stejné pro oba účty.)</strong></font></center>';
$lang[34]='<center><u><strong><font size="4" face="Arial" color="#FF0000">CHYBA!</font></strong></u></center><br />'."\n".'<br />'."\n".'<center><font face="Arial" size="3">Zadali jste nesprávné heslo nebo nejste majitelem trackeru!<br />'."\n".'Vaše IP adresa byla zaznamenána.</font></center>';
$lang[35]='</body>'."\n".'</html>'."\n";
$lang[36]='<center>Nemůžu zapisovat do:<br /><br /><b>';
$lang[37]='</b><br /><br />Prosím ujistěte se, že tento soubor je zapisovatelný a a spusťte skript znovu.</center>';
$lang[38]='<center><br /><font color="red" size="4"><b>Přístup odepřen</b></font></center>';
?>