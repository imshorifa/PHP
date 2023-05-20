<?php
if (isset($_GET['file'])) {
    $fileName = $_GET['file'];
    $filePath = 'uploads/' . $fileName;

    // Delete the file
    if (unlink($filePath)) {
        echo "File deleted successfully.";
    } else {
        echo "Failed to delete the file.";
    }
}
?>
