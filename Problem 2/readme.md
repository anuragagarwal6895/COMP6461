# Problem 2

## Basic Introduction to Problem Statement
The DASH approach of streaming is becoming very popular. It is basically a replacement for the RTSP/RTP/RTCP-based approach to streaming, especially with Video on Demand (VoD). With DASH, the server is a simple HTTP web server (e.g., Apache). The media (video) is divided into small individually playable video segments which are, for example, 10 seconds long. These segments are also called streamlets.
The client media player retrieves the streamlets from the web server, one at a time, and plays them without interruption.


For the client to know the streamlet files that belong to a complete video, the server provides a playlist file (also called a Media Presentation Description (MPD)).
The playlist file has a special format; it is basically an XML file for the MPEG DASH standard.
To start streaming, the client player loads the playlist file and then starts to download the streamlets that are listed in this file.

In this problem, your <b>task</b> is to:

(1) Use a media player application based on dash.js (check the ref- erence) that plays a stored (VoD) DASH playlist, while adaptively switching and playing video streamlets.

(2) Conduct various set of experiments to test/compare the efficiency of built-in Adaptive BitRate (ABR) algorithms. You will be given several utilities that will help you to get the lab assignment done.
The web-based media player application, based on dash.js (v4.5.0), should retrieve the video available on the web server (check the MPD file url in the reference). The dash.js player supports adaptive stream switching through ABR – that means it adaptively chooses the most suitable quality for the next video streamlet (i.e., chunks or segments) to be downloaded based on your network condition while playing the current streamlet.


The minimum steps for this Problem are:
1. Retrieve the video available on the server using the provided MPD and download the MPEG-DASH XML-formatted playlist file and video segments for the selected video (on-demand).
2. Switch the rendering of one video streamlet to another based on the ABR algorithm.
3. Collect the results during the playback every 8 seconds. The metrics you should collect periodically
are: selected bitrate (Mbps), buffer level (second), measured throughput (Mbps), segment download time (second), and segment size (byte). The result collection can be done either through an implemented customized script or by modifying the HTML of the video player (i.e., add a Javascript function).
4. Repeat steps 1., 2., and 3. for every ABR (Throughput-based, BOLA, and Dynamic).
5. Compare the three ABRs in terms of metrics highlighted in step 3.
6. Analyze/Discuss the results and write the report.


## Reference and Software Information
1. Use a web server that stores the segmented video content with a link to the MPD, which is located at: https://nustreaming.github.io/streaming/bbb.mpd.


2. You can access the dash.js player using your browser using the following URL:
https://reference.dashif.org/dash.js/v4.5.0/samples/dash-if-reference-player/index.html 
