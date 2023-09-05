
-- PLEASE NOTE

-- THIS UPGRADE SQL FILE SHOULD NOT BE APPLIED MANUALLY UNDER ANY CIRCUMSTANCES!
-- -----------------------------------------------------------------------------
--
-- Please run upgrade.php.
--
-- Running this upgrade manually will result in missing columns in your tables.
--
-- DO NOT DO IT!!!!!!! 
--
-- -----------------------------------------------------------------------------

UPDATE `xbtit_news` SET `title` = 'Welcome to xbtit 3.0' WHERE `xbtit_news`.`id` = 1;
UPDATE `xbtit_news` SET `news` =
 0x496620796f752063616e20726561642074686973207468656e20796f75722073657420757020776173206120737563636573732e0d0a596f752077696c6c2077616e7420746f2064656c657465207468697320706f73742e200d0a546563686e6963616c20737570706f72742063616e20626520666f756e64206f6e2074686520786274697420666f72756d73205b75726c5d687474703a2f2f7777772e6274697465616d2e65755b2f75726c5d WHERE `xbtit_news`.`id` = 1;


UPDATE `xbtit_settings` SET `value` = 'xbtit 3.0' WHERE `xbtit_settings`.`key` = 'name';

