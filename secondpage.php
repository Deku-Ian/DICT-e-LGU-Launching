<?php
// countdown.php

// This ensures that the page can't be cached, forcing a fresh load each time
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <script src="countdown.js"></script>
    <title>Countdown Page</title>
    <style>
        body, html {
            margin: 0;
            padding: 0;
            height: 100%;
            overflow: hidden;
            font-family: Arial, sans-serif;
        }
        #videoContainer {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
        }
        #countdownVideo, #backdrop {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        #countdownDisplay {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-size: 10vw; /* Responsive font size */
            color: white;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.5);
        }
        #nextButton {
            position: absolute;
            bottom: 5%;
            left: 50%;
            transform: translateX(-50%);
            padding: 15px 30px;
            font-size: 4vw; /* Responsive font size */
            display: none;
            cursor: pointer;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            transition: all 0.3s ease;
        }
        #nextButton:hover {
            background-color: #45a049;
        }
        .full-width-image {
            width: 100%;
            height: auto;
            display: none;
        }

        /* Media Queries for iPad and other tablets */
        @media only screen and (min-width: 768px) and (max-width: 1024px) {
            #countdownDisplay {
                font-size: 8vw;
            }
            #nextButton {
                font-size: 3vw;
                padding: 20px 40px;
            }
        }

        /* Landscape orientation */
        @media only screen and (min-width: 768px) and (max-width: 1024px) and (orientation: landscape) {
            #countdownDisplay {
                font-size: 6vw;
            }
            #nextButton {
                font-size: 2.5vw;
                padding: 15px 30px;
            }
        }
    </style>
</head>
<body>
    <div id="videoContainer">
        <video id="countdownVideo" autoplay playsinline>
            <source src="videos/countdown.mp4" type="video/mp4">
        </video>
        <video id="backdrop" loop playsinline>
            <source src="videos/last-loop.mp4" type="video/mp4">
        </video>
    </div>
    <div id="countdownDisplay"></div>

    <script>
        // Prevent default touch behavior
        document.addEventListener('touchmove', function(e) {
            e.preventDefault();
        }, { passive: false });
    </script>
</body>
</html>