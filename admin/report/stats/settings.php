<?php  // $Id: settings.php 68 2009-07-31 18:23:01Z dlandau $
// just a link to course report
$ADMIN->add('reports', new admin_externalpage('reportstats', get_string('stats', 'admin'), "$CFG->wwwroot/course/report/stats/index.php", 'coursereport/stats:view'));
?>