VIDEO RECORDER (PROBLEM 2)
---------------------------------

This is a simple web application that allows users to record videos, segment them and upload them to a server. The application uses the MediaRecorder API to record video and audio from the user's camera and microphone, and segments the recorded video into 3-second chunks before uploading them to the server. The HTML file contains the user interface of the application, while the JavaScript code handles the media recording, segmenting and uploading of the video to the server. The PHP script receives the uploaded chunks of the video and saves them to the directory.

How It Works
-------------

1. The user opens index.html in a web browser and starts the video recording by clicking the "Start Recording" button.
2. The JavaScript code captures the video stream from the user's camera and starts recording using the MediaRecorder API.
3. Every 3 seconds, the recorded video is segmented, and the segments are uploaded to the server using the fetch API.
4. The upload.php script on the server receives the video segments and writes them to the "uploads" directory.
5. The user can stop the recording by clicking the "Stop Recording" button. The video stream is stopped, and any remaining video segments are uploaded to the server.

TECHNICAL DETAILS
------------------

The application is built using HTML, CSS, and JavaScript, and uses the MediaRecorder API to record video and audio from the user's camera and microphone. The recorded video is segmented into 3-second chunks using the Blob.slice() method, and the segments are uploaded to the server using the fetch() API and a FormData object. If the upload is interrupted, the user can resume it by sending a request to the server with the URL and last byte of the last successfully uploaded segment. The server then sends the missing segments to the client for upload.

In this project, upload.php is a server-side script that handles the uploading of large files in chunks. It uses the HTTP POST method to receive each file chunk and stores them in a temporary folder on the server. To use the script, include it in your server-side code and ensure that your HTML form has the following attributes set:

method="POST"
enctype="multipart/form-data"
accept=".webm"

The given files are an example of how to capture and encode video every three seconds, and upload it to a server using the MediaRecorder API and XMLHttpRequest in JavaScript. The code consists of an HTML file (index.html) and a PHP file (upload.php).

TECHNICAL FUNCTIONALITIES
-------------------------

1. Video Capture (computer): The code captures video from the user's camera on computers. The code uses navigator.mediaDevices.getUserMedia(options) to capture the video from the device's camera.

2. Video encoding: The code uses H.264 and AAC codecs for MP4 and VP8 and Opus codecs for WebM.

3. Video Segmentation: The code records and uploads video segments every 3 seconds.The code uses setInterval() to upload video segments every 3 seconds, effectively segmenting the video.

4. Media Packaging (MP4): The code attempts to record and upload the video in MP4 format, but it's important to note that not all browsers support MP4 recording using MediaRecorder. If MP4 is not supported, the code will fall back to WebM format.

5. Real-time Video Upload: The code uploads the video segments to the server in real-time as they are recorded. The code uploads video segments in real-time using the uploadVideo() function and Fetch API.

6. Video storage at the server: The video segments are saved on the server in the "uploads" directory with the respective file extension. The provided server-side code (upload.php) handles the storage of uploaded videos in the "uploads" folder.

7. Reliable delivery: The code uses FetchAPI and has proper error handling and a retry mechanism in case of upload failure, which improves reliability.

