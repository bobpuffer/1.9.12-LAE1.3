<?php  // $Id: defaults.php 68 2009-07-31 18:23:01Z dlandau $
    if (empty($CFG->workshop_initialdisable)) {
        if (!count_records('workshop')) {
            set_field('modules', 'visible', 0, 'name', 'workshop');  // Disable it by default
            set_config('workshop_initialdisable', 1);
        }
    }

?>
