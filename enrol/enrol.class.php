<?php // $Id: enrol.class.php 68 2009-07-31 18:23:01Z dlandau $

/**
* enrolment_factory is used to "manufacture" an instance of required enrolment plugin.
*/

class enrolment_factory {
    function factory($enrol = '') {
        global $CFG;
        if (!$enrol) {
            $enrol = $CFG->enrol;
        }
        if (file_exists("$CFG->dirroot/enrol/$enrol/enrol.php")) {
            require_once("$CFG->dirroot/enrol/$enrol/enrol.php");
            $class = "enrolment_plugin_$enrol";
            return new $class;
        } else {
            trigger_error("$CFG->dirroot/enrol/$enrol/enrol.php does not exist");
            notify("Enrolment file $enrol/enrol.php does not exist");
        }
    }
}

?>
