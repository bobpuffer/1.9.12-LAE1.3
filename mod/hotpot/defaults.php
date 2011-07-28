<?php // $Id: defaults.php 68 2009-07-31 18:23:01Z dlandau $
    if (empty($CFG->hotpot_initialdisable)) {
        if (!count_records('hotpot')) {
            set_field('modules', 'visible', 0, 'name', 'hotpot');  // Disable it by default
            set_config('hotpot_initialdisable', 1);
        }
    }

?>
