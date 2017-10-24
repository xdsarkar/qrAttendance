<?php
    $isMobile = false;
    if (preg_match('/Android/i', $_SERVER['HTTP_USER_AGENT'])) {
        $isMobile = true;
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Scanner QR</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
            <style>
            body, html {
                padding: 0;
                margin: 0;
                font-family: 'Helvetica Neue', 'Calibri', Arial, sans-serif;
                height: 100%;
            }
            #app {
                background: #263238;
                display: flex;
                align-items: stretch;
                justify-content: stretch;
                height: 100%;
            }
            .sidebar {
                background: #eceff1;
                min-width: 330px;
                display: flex;
                flex-direction: column;
                justify-content: flex-start;
                overflow: auto;
            }
            .preview-container {
                flex-direction: column;
                align-items: center;
                justify-content: center;
                display: flex;
                width: 100%;
                overflow: hidden;
            }
            .scans li {
                padding: 10px 20px;
                border-bottom: 1px solid #ccc;
            }

            @media only screen and (min-device-width : 320px) and (max-device-width : 480px) {
                #app {
                    display: block;
                }
                .preview-container {
                    display: block;
                }
                .preview-container video {
                    margin: auto;
                    display: block;
                }
                .mobile-block {
                    background: #eceff1;
                    overflow: auto;
                }
            }


        </style>
        </head>
        <body>
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="/">Attendance App</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="/admin.php">Admin Panel</a>
                        </li>
                    </ul>
                </div>
            </nav>
            <div id="app">
                <?php if (!$isMobile) { ?>
                <div class="sidebar">
                    <div class="scans"></div>
                </div>
                <?php } ?>
                <div class="preview-container">
                    <video  id="preview"></video>
                </div>
                <?php if ($isMobile) { ?>
                <div class="mobile-block">
                    <div class="scans"></div>
                </div>
                <?php } ?>
            </div>
        </body>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
        <script type="text/javascript" src="lib/instascan.min.js"></script>
        <script type="text/javascript" src="code.js"></script>
    </html>