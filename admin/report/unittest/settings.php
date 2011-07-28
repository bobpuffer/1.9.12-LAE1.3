<?php  //$Id: settings.php 68 2009-07-31 18:23:01Z dlandau $
$ADMIN->add('reports', new admin_externalpage('reportunittest', get_string('simpletest', 'admin'), "$CFG->wwwroot/$CFG->admin/report/unittest/index.php", 'report/unittest:view'));
?>