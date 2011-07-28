<?php  // $Id: exportfile.php 68 2009-07-31 18:23:01Z dlandau $
    require_once(dirname(__FILE__) . '/../config.php');
    require_once($CFG->libdir . '/filelib.php');

    // Note: file.php always calls require_login() with $setwantsurltome=false
    //       in order to avoid messing redirects. MDL-14495
    require_login(0, true, null, false);

    $relativepath = get_file_argument('question/exportfile.php');
    if (!$relativepath) {
        error('No valid arguments supplied or incorrect server configuration');
    }

    $pathname = $CFG->dataroot . '/temp/questionexport/' . $USER->id . '/' .  $relativepath;

    send_temp_file($pathname, $relativepath);
?>