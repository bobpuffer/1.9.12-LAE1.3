<?php  // $Id: settings.php 68 2009-07-31 18:23:01Z dlandau $
$ADMIN->add('reports', new admin_externalpage('reportquestion', get_string('question', 'admin'), "$CFG->wwwroot/$CFG->admin/report/question/index.php", 'moodle/site:config'));
?>