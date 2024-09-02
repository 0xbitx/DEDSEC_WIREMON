<?php
$data = json_decode(file_get_contents('php://input'), true);

if (isset($data['image'])) {
    $imageData = $data['image'];
    // Remove the data URL scheme part and clean the base64 string
    $imageData = str_replace('data:image/png;base64,', '', $imageData);
    $imageData = str_replace(' ', '+', $imageData);
    $decodedImage = base64_decode($imageData);

    // Define the file name and path within the images folder
    $fileName = 'image_' . time() . '.png';
    $filePath = __DIR__ . '/icap/' . $fileName;

    // Check if the images directory exists, if not, create it
    if (!file_exists(__DIR__ . '/icap')) {
        mkdir(__DIR__ . '/icap', 0777, true);
    }

    // Save the decoded image to the file
    if (file_put_contents($filePath, $decodedImage)) {
        echo 'Saved as: ' . $fileName;
    } else {
        echo 'Failed to save image.';
    }
} else {
    echo 'No image data received.';
}
?>