<?php  //$Id: filtersettings.php 68 2009-07-31 18:23:01Z dlandau $

$settings->add(new admin_setting_configtextarea('filter_censor_badwords', get_string('badwordslist','admin'),
               get_string('badwordsconfig', 'admin').'<br />'.get_string('badwordsdefault', 'admin'), ''));

?>
