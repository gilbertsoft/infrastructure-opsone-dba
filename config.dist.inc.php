<?php

/* phpMyAdmin configuration file */

/* Servers configuration */
$i = 0;

/* Server: web01 [1] */
$i++;
$cfg['Servers'][$i]['verbose'] = 'web01';
$cfg['Servers'][$i]['host'] = $_SERVER['DB_HOST'];
$cfg['Servers'][$i]['port'] = '';
$cfg['Servers'][$i]['socket'] = '';
$cfg['Servers'][$i]['auth_type'] = 'cookie';
$cfg['Servers'][$i]['user'] = 'root';
$cfg['Servers'][$i]['password'] = '';
$cfg['Servers'][$i]['AllowRoot'] = false;
$cfg['Servers'][$i]['pmadb'] = $_SERVER['DB_NAME'];
$cfg['Servers'][$i]['controluser'] = $_SERVER['DB_USERNAME'];
$cfg['Servers'][$i]['controlpass'] = $_SERVER['DB_PASSWORD'];
$cfg['Servers'][$i]['bookmarktable'] = 'pma__bookmark';
$cfg['Servers'][$i]['relation'] = 'pma__relation';
$cfg['Servers'][$i]['userconfig'] = 'pma__userconfig';
$cfg['Servers'][$i]['users'] = 'pma__users';
$cfg['Servers'][$i]['usergroups'] = 'pma__usergroups';
$cfg['Servers'][$i]['navigationhiding'] = 'pma__userconfig';
$cfg['Servers'][$i]['table_info'] = 'pma__table_info';
$cfg['Servers'][$i]['column_info'] = 'pma__column_info';
$cfg['Servers'][$i]['history'] = 'pma__history';
$cfg['Servers'][$i]['recent'] = 'pma__recent';
$cfg['Servers'][$i]['favorite'] = 'pma__favorite';
$cfg['Servers'][$i]['table_uiprefs'] = 'pma__table_uiprefs';
$cfg['Servers'][$i]['tracking'] = 'pma__tracking';
$cfg['Servers'][$i]['table_coords'] = 'pma__table_coords';
$cfg['Servers'][$i]['pdf_pages'] = 'pma__pdf_pages';
$cfg['Servers'][$i]['savedsearches'] = 'pma__savedsearches';
$cfg['Servers'][$i]['central_columns'] = 'pma__table_coords';
$cfg['Servers'][$i]['designer_settings'] = 'pma__designer_settings';
$cfg['Servers'][$i]['export_templates'] = 'pma__export_templates';

/* End of servers configuration */

$cfg['blowfish_secret'] = 'add_new_secret_here';
$cfg['UploadDir'] = '';
$cfg['SaveDir'] = '';
$cfg['BZipDump'] = false;
$cfg['PersistentConnections'] = true;
$cfg['DefaultLang'] = 'de';
$cfg['ServerDefault'] = 1;
