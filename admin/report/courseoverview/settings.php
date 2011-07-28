<?php  // $Id: settings.php 68 2009-07-31 18:23:01Z dlandau $
$ADMIN->add('reports', new admin_externalpage('reportcourseoverview', get_string('courseoverview', 'admin'), "$CFG->wwwroot/$CFG->admin/report/courseoverview/index.php",'report/courseoverview:view'));
?>