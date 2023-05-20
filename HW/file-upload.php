<!DOCTYPE html>
<html>
<head>
    <title>File Upload System</title>
</head>
<body>
    <h2>Upload File</h2>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="file" accept=".jpg, .jpeg, .png, .pdf" required>
        <input type="submit" value="Upload">
    </form>

    <h2>Uploaded Files</h2>
    <?php
    $uploadDir = 'uploads/'; // Directory to store the uploaded files

    // Process file upload
    if (isset($_FILES['file'])) {
        $fileName = $_FILES['file']['name'];
        $fileSize = $_FILES['file']['size'];
        $fileTmp = $_FILES['file']['tmp_name'];
        $fileType = $_FILES['file']['type'];
        $fileError = $_FILES['file']['error'];

        // Check if file size is within the allowed limit (1MB)
        if ($fileSize > 1048576) {
            echo "File size exceeds the limit of 1MB.";
        } else {
            // Check if the file is an image or PDF
            if (($fileType == 'image/jpeg' || $fileType == 'image/png' || $fileType == 'application/pdf')) {
                $filePath = $uploadDir . $fileName;

                // Move the uploaded file to the specified directory
                if (move_uploaded_file($fileTmp, $filePath)) {
                    echo "File uploaded successfully.";
                } else {
                    echo "File upload failed.";
                }
            } else {
                echo "Only image (JPEG, PNG) and PDF files are allowed.";
            }
        }
    }

    // Display uploaded files
    $files = scandir($uploadDir);
    foreach ($files as $file) {
        if ($file != '.' && $file != '..') {
            echo '<p>'.$file.' <a href="delete.php?file='.$file.'">Delete</a></p>';
        }
    }
    ?>
</body>
</html>
