<?php  // $Id: move_form.php 272 2010-06-18 15:00:44Z dlandau $

if (!defined('MOODLE_INTERNAL')) {
    die('Direct access to this script is forbidden.');    ///  It must be included from a Moodle page
}

require_once($CFG->libdir.'/formslib.php');

class question_move_form extends moodleform {

    function definition() {
        $mform    =& $this->_form;

        $currentcat   = $this->_customdata['currentcat'];
        $contexts   = $this->_customdata['contexts'];
//--------------------------------------------------------------------------------

        $mform->addElement('questioncategory', 'category', get_string('category','quiz'), compact('contexts', 'currentcat'));


//--------------------------------------------------------------------------------
        $this->add_action_buttons(true, get_string('categorymoveto', 'quiz'));
//--------------------------------------------------------------------------------
        $mform->addElement('hidden', 'delete', $currentcat);
        $mform->setType('delete', PARAM_INT);
    }
}
?>
