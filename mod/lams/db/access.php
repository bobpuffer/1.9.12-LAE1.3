<?php // $Id: access.php 68 2009-07-31 18:23:01Z dlandau $
/**
 * Capability definitions for the lams module.
 *
 * For naming conventions, see lib/db/access.php.
 */
$mod_lams_capabilities = array(

    'mod/lams:participate' => array(

        'captype' => 'write',
        'contextlevel' => CONTEXT_MODULE,
        'legacy' => array(
            'student' => CAP_ALLOW
        )
    ),

    'mod/lams:manage' => array(

        'captype' => 'write',
        'contextlevel' => CONTEXT_MODULE,
        'legacy' => array(
            'teacher' => CAP_ALLOW,
            'editingteacher' => CAP_ALLOW,
            'admin' => CAP_ALLOW
        )
    )
);
