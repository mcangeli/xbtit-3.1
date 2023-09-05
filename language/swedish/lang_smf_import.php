<?php

// smf_import.php language file

$language['charset']='ISO-8859-1';
$lang[0]='Ja';
$lang[1]='Nej';
$lang[2]='<center><u><strong><font size="4" face="Arial">Steg 1: Initiala krav</font></strong></u></center><br />';
$lang[3]='<center><strong><font size="2" face="Arial">SMF-filer i "smf"-mappen?<font color="';
$lang[4]='">&nbsp;&nbsp;&nbsp; ';
$lang[5]='</font></center></strong>';
$lang[6]='<br /><center>V�nligen <a target="_new" href="http://www.simplemachines.org/download/">ladda ner SMF</a> och ladda upp inneh�llet i arkivet till "smf"-mappen.<br />Om du inte har en "smf"-mapp, skapa en i tracker rooten och ladda upp<br />inneh�llet i arkivet till den.<br /><br />Uppladdad en g�ng p'; // p at end is a lowercase p for use with $lang[8]
$lang[7]='<br /><center>P'; // P at end is an uppercase p for use with $lang[8]
$lang[8]='Installera SMF med <a target="_new" href="smf/install.php">clicking here</a>*<br /><br /><strong>* Anv�nd samma login som f�r trackern,<br />Anv�nd vilket databasprefix som �nskas (anv�nd inte prefix som anv�nds av<br />till�mplig tracker)<br /><br />';
$lang[9]='<font color="#0000FF" size="3">Ladda om sidan n�r du gjort klar uppgiften!</font></strong></center>';
$lang[10]='<center><strong>SMF installerad?<font color="';
$lang[11]='Filen kunde inte hittas!';
$lang[12]='Filen hittades, men det inte att skriva till den!';
$lang[13]='<center><strong>Standard english Errors file finns tillg�nglig och �r skrivbar?<font color="';
$lang[14]='<center><strong>smf.sql fil finns i "sql"-mappen?<font color="';
$lang[15]='<br /><center><strong>Spr�kfil (';
$lang[16]=')<br />saknas, se till att <font color="#FF0000"><u>alla SMF-filer</u></font> laddades upp!<br /><br />';
$lang[17]=')<br />�r inte skrivbar, <font color="#FF0000"><u>v�nligen CHMOD denna fil till 777</u></font><br /><br />';
$lang[18]='<br /><center><strong>smf.sql saknas, <font color="#FF0000"><u>kontrollera att denna fil �r tillg�nglig i "sql" folder.</u></font><br />(Den b�r vara inkluderad med XBTIT distributionen!)<br /><br />';
$lang[19]='<br /><center>Alla krav �r uppfyllda, v�nligen <a href="';
$lang[20]='">klicka h�r f�r att forts�tta</a></center>';
$lang[21]='<center><u><strong><font size="4" face="Arial">Steg 2: Initial Setup</font></strong></u></center><br />';
$lang[22]='<center>N�r allt nu �r verifierat att allt �r p� plats, �r det dags att modifiera databasen<br />s� allt blir i �verensst�mmelse med trackern.</center><br />';
$lang[23]='<center><form name="db_pwd" action="smf_import.php" method="GET">Enter Database password:&nbsp;<input name="pwd" size="20" /><br />'."\n".'<br />'."\n".'<strong>please click <input type="submit" name="confirm" value="yes" size="20" /> to proceed</strong><input type="hidden" name="act" value="init_setup" /><input type="hidden" name="smf_type" value="'.$_GET["smf_type"].'" /></form></center>';
$lang[24]='<center><u><strong><font size="4" face="Arial">Steg 3: Importera trackermedlemmarna</font></strong></u></center><br />';
$lang[25]='<center>N�r databasen �r korrekt uppsatt, �r det dags att b�rja importera trackermedlemmarna,<br />Det h�r kan ta lite tid, s� ha t�lamod och<br />l�t scriptet arbeta i lugn och ro!<br /><br /><strong>please <a href="'.$_SERVER['PHP_SELF'].'?act=member_import&amp;confirm=yes&smf_type='.$_GET["smf_type"].'">Klicka h�r</a> f�r att forts�tta</center>';
$lang[26]='<center><u><strong><font size="4" face="Arial">Ledsen</font></strong></u></center><br />';
$lang[27]='<center>Ledsen, det h�r �r avsett att anv�ndas endast en g�ng. Eftersom du redan har anv�nt det, s� har den h�r filen l�sts!</center>';
$lang[28]='<center><br /><strong><font color="#FF0000"><br />';
$lang[29]='</strong></font> Forumkonton har framg�ngsrikt skapats, v�nligen <a href="'.$_SERVER['PHP_SELF'].'?act=import_forum&amp;confirm=no&smf_type='.$_GET["smf_type"].'">Klicka h�r</a> f�r att forts�tta</center>';
$lang[30]='<center><u><strong><font size="4" face="Arial">Steg 4: Importera forumlayout och poster</font></strong></u></center><br />';
$lang[31]='<center>detta �r det sista steget i forumimporten och det kommer importera dina nuvarande BTI-forum till SMF,<br />De importeras till en ny kategori som heter "Mina BTI-importer",<br />please <a href="'.$_SERVER['PHP_SELF'].'?act=import_forum&amp;confirm=yes&smf_type='.$_GET["smf_type"].'">Klicka h�r</a> f�r att forts�tta</center>';
$lang[32]='<center><u><strong><font size="4" face="Arial">Importen klar</font></strong></u></center><br />';
$lang[33]='<center><font face="Arial" size="2">Please <a target="_new" href="smf/index.php?action=login">Logga in p� ditt nya SMF-forum</a> anv�nd dina trackeruppgifter<strong>*</strong> och g� till<br />the <strong>Administration Center</strong> v�lj sedan <strong>Forumunderh�ll</strong> och k�r<br /><strong>S�k och reparera eventuella fel</strong> f�ljt av <strong>R�kna om alla forums totaler<br />och statistik</strong> f�r att snygga till importen och ordna postr�kningssystemet, etc.<br /><br /><strong><font color="#0000FF">Ditt integrerade SMF-forum �r sedan klart att anv�nda!</font></strong><br /><br /><strong>* Om du anv�nder n�gon annan metod �n xbtit Classic l�senord hashing method i the Security Suite m�ste du (och alla medlemmar) logga in p� trackern f�r att �terst�lla SMF-l�senordet. (Alternativt g�r det att anv�nda Password Recovery p� SMF men det �r mycket b�ttre att g�ra det via tracker login s� att man f�r samma l�senord p� b�da kontona.)</strong></font></center>';
$lang[34]='<center><u><strong><font size="4" face="Arial" color="#FF0000">FEL!</font></strong></u></center><br />'."\n".'<br />'."\n".'<center><font face="Arial" size="3">Du har skrivit fel l�senord, eller du �r inte �gare till denna tracker!<br />'."\n".'Observera att ditt IP har loggats.</font></center>';
$lang[35]='</body>'."\n".'</html>'."\n";
$lang[36]='<center>Det gick inte att skriva till:<br /><br /><b>';
$lang[37]='</b><br /><br />Var god se till att denna fil �r skrivbar och k�r sedan scriptet igen.</center>';
$lang[38]='<center><br /><font color="red" size="4"><b>Tilltr�de nekat</b></font></center>';
?>