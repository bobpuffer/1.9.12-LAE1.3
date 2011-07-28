<?PHP // $Id: version.php 68 2009-07-31 18:23:01Z dlandau $

/////////////////////////////////////////////////////////////////////////////////
///  Code fragment to define the version of Wiki
///  This fragment is called by moodle_needs_upgrading() and /admin/index.php
/////////////////////////////////////////////////////////////////////////////////

$module->version  = 2007101509;  // The current module version (Date: YYYYMMDDXX)
$module->requires = 2007101509;  // The current module version (Date: YYYYMMDDXX)
$module->cron     = 3600;        // Period for cron to check this module (secs)

?>
