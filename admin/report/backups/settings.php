<?php  // $Id: settings.php 68 2009-07-31 18:23:01Z dlandau $
$ADMIN->add('reports', new admin_externalpage('reportbackups', get_string('backups', 'admin'), "$CFG->wwwroot/$CFG->admin/report/backups/index.php",'moodle/site:backup'));
?>