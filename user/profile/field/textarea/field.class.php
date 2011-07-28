<?php //$Id: field.class.php 68 2009-07-31 18:23:01Z dlandau $

class profile_field_textarea extends profile_field_base {

    function edit_field_add(&$mform) {
        $cols = $this->field->param1;
        $rows = $this->field->param2;

        /// Create the form field
        $mform->addElement('htmleditor', $this->inputname, format_string($this->field->name), array('cols'=>$cols, 'rows'=>$rows));
        $mform->setType($this->inputname, PARAM_CLEAN);
    }

    /// Overwrite base class method, data in this field type is potentially too large to be
    /// included in the user object
    function is_user_object_data() {
        return false;
    }

}

?>
