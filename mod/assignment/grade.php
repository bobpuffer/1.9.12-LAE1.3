<?php  // $Id: grade.php 68 2009-07-31 18:23:01Z dlandau $

    require_once("../../config.php");

    $id   = required_param('id', PARAM_INT);          // Course module ID

    if (! $cm = get_coursemodule_from_id('assignment', $id)) {
        error("Course Module ID was incorrect");
    }

    if (! $assignment = get_record("assignment", "id", $cm->instance)) {
        error("assignment ID was incorrect");
    }

    if (! $course = get_record("course", "id", $assignment->course)) {
        error("Course is misconfigured");
    }

    require_login($course->id, false, $cm);

    if (has_capability('mod/assignment:grade', get_context_instance(CONTEXT_MODULE, $cm->id))) {
        redirect('submissions.php?id='.$cm->id);
    } else {
        redirect('view.php?id='.$cm->id);
    }

?>
