<?php //$Id: block_rss_client_error.php 68 2009-07-31 18:23:01Z dlandau $
// Print an error page condition
require_once('../../config.php');

$error = required_param('error', PARAM_CLEAN);

print_header(get_string('error'),
              get_string('error'),
              get_string('error') );

print clean_text(urldecode($error));

print_footer();
?>
