<?php  //$Id: settings.php 68 2009-07-31 18:23:01Z dlandau $

$settings->add(new admin_setting_configtext('lams_serverurl', get_string('server_url', 'lams'), 
                    get_string('serverurl', 'lams'), '') );

$settings->add(new admin_setting_configtext('lams_serverid', get_string('server_id', 'lams'), 
                    get_string('serverid', 'lams'), '') );

$settings->add(new admin_setting_configtext('lams_serverkey', get_string('server_key', 'lams'), 
                    get_string('serverkey', 'lams'), '') );

?>
