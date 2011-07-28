<?php // $Id: access.php 68 2009-07-31 18:23:01Z dlandau $
/**
 * Capability definitions for the workshop module.
 *
 * For naming conventions, see lib/db/access.php.
 */
$mod_workshop_capabilities = array(

    'mod/workshop:participate' => array(

        'riskbitmask' => RISK_SPAM,

        'captype' => 'write',
        'contextlevel' => CONTEXT_MODULE,
        'legacy' => array(
            'student' => CAP_ALLOW
        )
    ),

    'mod/workshop:manage' => array(

        'riskbitmask' => RISK_SPAM,

        'captype' => 'write',
        'contextlevel' => CONTEXT_MODULE,
        'legacy' => array(
            'teacher' => CAP_ALLOW,
            'editingteacher' => CAP_ALLOW,
            'admin' => CAP_ALLOW
        )
    )
);
