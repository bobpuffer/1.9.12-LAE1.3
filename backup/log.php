<?php  // $Id: log.php 68 2009-07-31 18:23:01Z dlandau $
       // log.php - old scheduled backups report. Now redirecting
       // to the new admin one

    require_once("../config.php");

    require_login();

    require_capability('moodle/site:backup', get_context_instance(CONTEXT_SYSTEM));

    redirect("$CFG->wwwroot/$CFG->admin/report/backups/index.php", '', 'admin', 1);

?>
