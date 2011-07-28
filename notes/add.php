<?php // $Id: add.php 68 2009-07-31 18:23:01Z dlandau $

    require_once('../config.php');

    $courseid      = required_param('course', PARAM_INT);
    $userid        = required_param('user', PARAM_INT);

    redirect("edit.php?courseid=$courseid&amp;userid=$userid");

    //note: this script is not used anymore - removed from HEAD
?>
