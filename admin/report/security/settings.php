<?php  //$Id: settings.php 68 2009-07-31 18:23:01Z dlandau $

$ADMIN->add('reports', new admin_externalpage('reportsecurity', get_string('reportsecurity', 'report_security'), "$CFG->wwwroot/$CFG->admin/report/security/index.php",'report/security:view'));
