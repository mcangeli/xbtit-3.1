<?php

// ipb_import.php language file
global $TABLE_PREFIX, $ipb_prefix;

$lang[0]='Ano';
$lang[1]='Ne';
$lang[2]='<center><u><strong><font size="4" face="Arial">Fáze 1: Počáteční požadavky</font></strong></u></center><br />';
$lang[3]='<center><strong><font size="2" face="Arial">Jsou IPB soubory přítomny v "ipb" složce?<font color="';
$lang[4]='">&nbsp;&nbsp;&nbsp; ';
$lang[5]='</font></center></strong>';
$lang[6]='<br /><center>Prosím <a target="_new" href="http://www.invisionpower.com/">stáhněte IPB</a> a z archivu ze složky "upload" nahrajte soubory do "ipb" složky.<br />Jestliže nemáte "ipb" složku, prosím vytvořte ji v kořenovém adresáři (rootu) vašeho trackeru a nahrajte<br />obsah do ní obsah složky "upload".<br /><br />Jakmile nahráno p'; // p at end is a lowercase p for use with $lang[8]
$lang[7]='<br /><center>P'; // P at end is an uppercase p for use with $lang[8]
$lang[8]='prosím nainstalujte IPB kliknutím <a target="_new" href="ipb/admin/install/index.php">zde</a>*<br /><br /><strong>* Prosím použijte stejné přihlašovací údaje do databáze, jaké používate na trackeru.<br />Můžete použít jakýkoliv databázový prefix (kromě toho, který používá<br />tracker)<br /><br />';
$lang[9]='<font color="#0000FF" size="3">Stránku můžete obnovit jakmile dokončíte požadovanou operaci!</font></strong></center>';
$lang[10]='<center><strong>Je IPB nainstalován?<font color="';
$lang[11]='Soubor nenalezen!';
$lang[12]='Soubor nalezen, ale není zapisovatelný!';
$lang[13]='<center><strong>Základní IPB chyby. Je soubor dostupný a zapisovatelný?<font color="';
$lang[14]='<center><strong>Je ipb.sql soubor přítomen v "sql" složce?<font color="';
$lang[15]='<br /><center><strong>Jazykový soubor (';
$lang[16]=')<br />chybí, prosím ujistěte se, <font color="#FF0000"><u>že všechny IPB soubory</u></font> byly nahrány!<br /><br />';
$lang[17]=')<br />není zapisovatelný, <font color="#FF0000"><u>prosím CHMOD tento sobor na 777</u></font><br /><br />';
$lang[18]='<br /><center><strong>ipb.sql chybí, <font color="#FF0000"><u>prosím ujistěte se, že je tento soubor přítomen v "sql" složce.</u></font><br />(Měl by být zahrnut spločně s xbtitFM distribucí!)<br /><br />';
$lang[19]='<br /><center>Všechny požadavky splněny, prosím <a href="';
$lang[20]='">klikněte zde pro pokračování</a></center>';
$lang[21]='<center><u><strong><font size="4" face="Arial">Fáze 2: Prvotní nastavení:</font></strong></u></center><br />';
$lang[22]='<center>Nyní, když jsme všechno oěřili, je načase upravit databázi,<br />aby vše korespondovalo s trackerem..</center><br />';
$lang[23]='<center><form name="db_pwd" action="'.$_SERVER['PHP_SELF'].'" method="GET">Vložte heslo databáze:&nbsp;<input name="pwd" size="20" /><br /><br /><strong>prosím klikněte <input type="submit" name="confirm" value="yes" size="20" /> pro pokračování</strong><input type="hidden" name="act" value="init_setup" /></form></center>';
$lang[24]='<center><u><strong><font size="4" face="Arial">Fáze 3: Importování uživatelů trackeru</font></strong></u></center><br />';
$lang[25]='<center>Nyní když je databáze správně nastavena, je čas importovat uživatele trackeru.<br />Tato operace zabere nějaký čas v závislosti na počtu uživatelů. Prosím buďte trpěliví.<br />Pro pokračování povolte script!<br /><br /><strong>Klikněte <a href="'.$_SERVER['PHP_SELF'].'?act=member_import&amp;confirm=yes">zde</a> pro poračování</center>';
$lang[26]='<center><u><strong><font size="4" face="Arial">Omlouváme se</font></strong></u></center><br />';
$lang[27]='<center>Omlouváme se, tento script je možné použít pouze jednou. Jelikož již byl použit, tak byl uzamčen.</center>';
$lang[28]='<center><br /><strong><font color="#FF0000"><br />';
$lang[29]='</strong></font> Uživatelské účty fóra úspěšně vytvořeny, prosím <a href="'.$_SERVER['PHP_SELF'].'?act=import_forum&amp;confirm=no">klikněte zde</a> pro pokračování</center>';
$lang[30]='<center><u><strong><font size="4" face="Arial">Fáze 4: Importování rozložení a příspěvku fóra</font></strong></u></center><br />';
$lang[31]='<center>Tohle je poslední fáze importování fóra. Naimportuje se současné BTI fórum do IPB.<br />Import bude vykonán do nově vytvořené kategorie "My BTI import".<br />Prosím <a href="'.$_SERVER['PHP_SELF'].'?act=import_forum&amp;confirm=yes">klikněte zde</a> pro pokračování</center>';
$lang[32]='<center><u><strong><font size="4" face="Arial">Importování dokončeno</font></strong></u></center><br />';
$lang[33]='<center><font face="Arial" size="2">Prosím <a target="_new" href="ipb/index.php?app=core&module=global&section=login">přihlaště se do vašeho nového IPB fóra</a> použitím vašich údajů z Trackeru a jděte do<br /> <strong>Administračního centra.</strong> Poté vyberte <strong>Spravování fóra</strong> a spusťte <br /><strong> Najít a opravit chyby.</strong> Následně spusťte <strong>Přepočítat všechny počty fóra<br />a statistiky</strong> k uklizení importu, opravení počtu příspěvků atd. <br /><br /><strong><font color="#0000FF">Vaše integroavné IPM Fórum by poté mělo být připraveno k použití!</font></strong></font></center>';
$lang[34]='<center><u><strong><font size="4" face="Arial" color="#FF0000">CHYBA!</font></strong></u></center><br />'."\n".'<br />'."\n".'<center><font face="Arial" size="3">Zadali jste špatné heslo nebo nejste majitelem tohoto trackeru!<br />'."\n".'Vaše IP byla zaznamenána.</font></center>';
$lang[35]='';
$lang[36]='<center>Nemůžu zapisovat do:<br /><br /><b>';
$lang[37]='</b><br /><br />Prosím ujistěte se, že je soubor zapisovatelný a poté spusťte skript znovu.</center>';
$lang[38]='<center><br /><font color="red" size="4"><b>Přístup odepřen</b></font></center>';
$lang[39]='<br /><center><strong>Konfigurační soubor IPB (';
$lang[40]='<center><u><strong><font size="4" face="Arial">Fáze 3: Vytváření spojení</font></strong></u></center><br />';
$lang[41]='<center>Nyní když byla databáze vytvořena, je načase propojit uživatele trackeru s ipb uživateli a nastavit jejich rank tak, aby se shodoval s rankem na trackeru.<br />Tato operace zabere nějaký čas úměrný počtu uživatelů. Prosím buďte trpěliví a povolte<br />tento skript, aby úkon mohl provést!<br /><br /><strong>Prosím <a href="'.$_SERVER['PHP_SELF'].'?act=member_bridge&amp;confirm=yes">klikněte zdee</a> pro pokračování</center>';
$lang[42]='<center><font face="Arial" size="2">Prosím <a target="_new" href="ipb/index.php?app=core&module=global&section=login">přihlašte se do svého nového IPB fóra</a> použitím vašich přihlašovacích údajů z Trackeru a jděte doo<br />the <strong>Admin Panelu</strong> a nastavte kategorii/oprávnění fóra pro vaše hodnosti,<br />momentálně pouze defaultní kategorie/forum je viditelná pro všechny.<br /><br /><strong><font color="#0000FF">Vaše integrované IPB fórum by poté mělo být připraveno k použití!</font></strong></font></center>';
$lang[43]="<center>Úspěšně propojeno!";
$lang[44]="účty.<br /><br /></center>";
$lang[45]="<center><b><span style='color:red'>POZOR: Jsou zde";
$lang[46]="nepropojené účty trackeru a";
$lang[47]="ovojené účty fóra.</span></b><br /><br />Měl byste se pokusit je opravit ručně porovnáním detailů účtu v phpMyAdmin.<br />Použijte následující příkazy query:<br /><br />Tracker:<br /><textarea rows='1' cols='80'>SELECT * FROM `{$TABLE_PREFIX}users` WHERE `ipb_fid`=0 AND `id`>1 ORDER BY `id` ASC;</textarea><br /><br />Forum:<br /><textarea rows='1' cols='80'>SELECT * FROM `{$ipb_prefix}members` WHERE `member_group_id`=0 ORDER BY `id_member` ASC;</textarea><br /><br />Jakmile naleznete shodu, měl byste updatovat \"ipb_fid\" pole na trackerovém účtě<br />s hodnotou od \"id_member\" pole s příslušným záznamem fóra.<br /><br />Poté updatujte \"member_group_id\" pole v záznamu fóra s hodnotu z \"id_level\" pole ze záznamu trackeru.<br /><br />Je doporučeno smazat všechny zbývající osvojené IPB účty následujícím příkazem query:<br /><textarea rows='1' cols='80'>DELETE FROM `{$ipb_prefix}members` WHERE `member_group_id`=0;</textarea><br /><br /></center>";
$lang[48]="<center>Importování a propojení úspěšně dokončeno";
$lang[49]="<center><b><span style=\"color:#0000FF;\">Vaše integrované IPB Fórum je nyní připraveno k použití!</span></b></center>";
?>