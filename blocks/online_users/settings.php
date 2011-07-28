<?php  //$Id: settings.php 68 2009-07-31 18:23:01Z dlandau $

$settings->add(new admin_setting_configtext('block_online_users_timetosee', get_string('timetosee', 'block_online_users'),
                   get_string('configtimetosee', 'block_online_users'), 5, PARAM_INT));

?>
