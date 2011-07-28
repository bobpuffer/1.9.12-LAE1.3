<?php // $Id: access.php 68 2009-07-31 18:23:01Z dlandau $

$enrol_authorize_capabilities = array(

    'enrol/authorize:managepayments' => array(
        'riskbitmask' => RISK_PERSONAL,
        'captype' => 'write',
        'contextlevel' => CONTEXT_SYSTEM,
        'legacy' => array(
            'admin' => CAP_ALLOW
        )
    ),

    'enrol/authorize:uploadcsv' => array(
        'riskbitmask' => RISK_XSS,
        'captype' => 'write',
        'contextlevel' => CONTEXT_SYSTEM,
        'legacy' => array(
            'admin' => CAP_ALLOW
        )
    )

);

?>
