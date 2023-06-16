<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: Content-Type");
header("Access-Control-Allow-Methods: POST");

// Set the file extension based on the MIME type
$contentType = $_SERVER["CONTENT_TYPE"];
$fileExtension = ($contentType === "video/mp4") ? ".mp4" : ".webm";

// Set the filename
$filename = "video_" . date("Ymd_His") . "_" . round(microtime(true) * 1000) . $fileExtension;



// Set the filename
//$filename = "video_" . date("Ymd_His") . "_" . round(microtime(true) * 1000) . ".webm";

// Open a new file for writing
$file = fopen("uploads/" . $filename, "w");

// Read the raw POST data and write it to the file
$incoming = fopen("php://input", "r");
while ($chunk = fread($incoming, 1024*1024)) {
    fwrite($file, $chunk);
}

fclose($incoming);
fclose($file);

echo "Video uploaded successfully";
?>
