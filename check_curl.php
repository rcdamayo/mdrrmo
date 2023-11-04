<?php
// Check if the cURL extension is enabled
if (in_array('curl', get_loaded_extensions())) {
    echo 'cURL is enabled';
} else {
    echo 'cURL is not enabled';
}
?>
