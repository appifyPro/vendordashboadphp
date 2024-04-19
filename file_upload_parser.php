<?php
$name = $_GET['name'];
$fileName = $_FILES[$name]["name"]; // The file name
$fileTmpLoc = $_FILES[$name]["tmp_name"]; // File in the PHP tmp folder
$fileType = $_FILES[$name]["type"]; // The type of file it is
$fileSize = $_FILES[$name]["size"]; // File size in bytes
$fileErrorMsg = $_FILES[$name]["error"]; // 0 for false... and 1 for true
if (!$fileTmpLoc) { // if file not chosen
    echo "ERROR: Please browse for a file before clicking the upload button.";
    exit();
}
if(move_uploaded_file($fileTmpLoc, "test_uploads/$fileName")){
    echo "$fileName upload is complete";
} else {
    echo "move_uploaded_file function failed";
}
?>