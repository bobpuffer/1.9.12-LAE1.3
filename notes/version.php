<?php   // $Id: version.php 68 2009-07-31 18:23:01Z dlandau $

/////////////////////////////////////////////////////////////////////////////////
///  Code fragment to define the version of the note module
///  This fragment is called by moodle_needs_upgrading() and /admin/index.php
/////////////////////////////////////////////////////////////////////////////////

$note_version  = 2007070700;  // The current version of note module (Date: YYYYMMDDXX)
$module->cron     = 1800;           // Period for cron to check this module (secs)
