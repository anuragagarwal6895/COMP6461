# Problem 1

This exercise helps us understand how DASH works in real-life streaming applications. There are three tasks in this exercise and each task is worth 1 mark. We rec- ommend completing the tasks in order.
Recall the architecture of a streaming application built on DASH.


The HTTP server provides the playlist and media segments (sometimes referred to as streamlets) for the DASH client to retrieve (i.e., ”pull”) on-demand.
For our DASH client in this exercise, we will use a browser-based video player provided by the DASH Industry Forum at:
https://reference.dashif.org/dash.js/v4.5.0/samples/dash-if-reference-player/index.html
Please access the player using any modern browser (we recommend using Google Chrome).

## Task 1

The player provides several MPD playlists for users to choose from (see the list under ”Stream”). In this assignment, we will use our playlist at
https://nustreaming.github.io/streaming/bbb.mpd
Download the playlist by pasting the MPD URL in your browser’s address bar. Inspect the file with your favorite text editor and answer the following discussion questions:
1. How many different video quality levels are provided by this playlist?
2. What are the highest and lowest quality levels?
3. Why do we need different quality levels? Please give an example where the player would retrieve the video at different quality levels.

## Task 2

Next, play the video provided by our playlist by replacing the MPD URL in the DASH client and clicking ”Load”.


Now let’s inspect the video segments retrieved by the client. On your browser, open up the network inspection tool 1 to view the browser’s network log.
While the player is playing (i.e., streaming) the video, you should see the network log being updated dynamically.

This log contains the list of HTTP responses received by the client, including the video segments retrieved.
Pick one video segment from the list, download it, and answer the following discussion questions:
1. What is the URL of your selected video segment?
2. What is the file format of this video segment?
3. What is the duration of this video segment? (Note that all video segments from the same playlist should have the same duration.)
4. Different applications may use different video segment durations (typically between 2 and 10 sec- onds). From a networking perspective, describe one advantage and one disadvantage of using longer video segments (e.g., 10 seconds per segment).

## Task 3

From Task 1 and 2, we can see that for DASH, the MPD playlist and video segments are retrieved over HTTP (i.e., the HTTP URLs). Now let’s inspect the HTTP request and response in greater detail using Wireshark.
Open Wireshark on the machine running the browser.


Using the same MPD URL as in Task 1, try retrieving the MPD file again on your browser and observe the capture log being updated on Wireshark.
Save Wireshark’s capture log for this HTTP request and response in the default pcapng file format. Use Wireshark capture filters 2 to capture and save only the relevant packets.
Save your file as dash-wireshark-≪Student number≫.pcapng.
