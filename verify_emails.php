<?php

include 'admin-email.php';
    function verifyEmailWithMailgun($email) {
    $mg_api_key = '3e508ae1-30d3ff8c'; // Replace with your Mailgun API key
    $mg_domain = 'sandboxb341a6c17d2642a7aca021df8f197fa3.mailgun.org'; // Replace with your Mailgun domain
    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, 'https://api.mailgun.net/v4/address/validate');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, '{"address": "'.$email.'"}');

    $headers = array();
    $headers[] = 'Authorization: Basic ' . base64_encode('api:'.$mg_api_key);
    $headers[] = 'Content-Type: application/json';
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

    $result = curl_exec($ch);
    if ($result === false) {
        echo 'Curl error: ' . curl_error($ch);
    } else {
        $response = json_decode($result, true);
        if (isset($response['result']) && $response['result'] === 'deliverable') {
            echo 'Email is valid and deliverable.';
        } elseif (isset($response['result']) && $response['result'] === 'undeliverable') {
            echo 'Email is valid, but not deliverable.';
        } else {
            echo 'Unable to verify email.';
        }
    }
    curl_close($ch);
}

if (isset($_POST['verify'])) {
    $emailToVerify = $_POST['email'];
    verifyEmailWithMailgun($emailToVerify);
}
?>
