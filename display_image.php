<?php
// Get the image file path from the query parameter
$imagePath = $_GET['image'] ?? '';

// Output the image with the appropriate content type
if ($imagePath && file_exists($imagePath)) {
    $imageInfo = getimagesize($imagePath);
    header('Content-Type: ' . $imageInfo['mime']);
    readfile($imagePath);
} else {
    // Handle the case when the image file is not found
    header('HTTP/1.0 404 Not Found');
    echo 'Image not found';
}
?>
