<?php // $Id: mod.php 68 2009-07-31 18:23:01Z dlandau $

    if (!defined('MOODLE_INTERNAL')) {
        die('Direct access to this script is forbidden.');    ///  It must be included from a Moodle page
    }

    if (has_capability('coursereport/participation:view', $context)) {
        echo '<p>';
        $participationreport = get_string('participationreport');
        echo "<a href=\"{$CFG->wwwroot}/course/report/participation/index.php?id={$course->id}\">";
        echo "$participationreport</a>\n";
        echo '</p>';
    }
?>
