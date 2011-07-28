<?php // $Id: mod_form.php 68 2009-07-31 18:23:01Z dlandau $
require_once ($CFG->dirroot.'/course/moodleform_mod.php');

class mod_label_mod_form extends moodleform_mod {

    function definition() {

        $mform    =& $this->_form;

        $mform->addElement('htmleditor', 'content', get_string('labeltext', 'label'), array('size'=>'64'));
        $mform->setType('content', PARAM_RAW);
        $mform->addRule('content', get_string('required'), 'required', null, 'client');
        $mform->setHelpButton('content', array('questions', 'richtext'), false, 'editorhelpbutton');

        $features = array('groups'=>false, 'groupings'=>false, 'groupmembersonly'=>true,
                          'outcomes'=>false, 'gradecat'=>false, 'idnumber'=>false);
        $this->standard_coursemodule_elements($features);

//-------------------------------------------------------------------------------
// buttons
        $this->add_action_buttons(true, false, null);

    }

}
?>
