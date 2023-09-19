<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Dashboard</title>
        <meta name="description" content="The small framework with powerful features">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" type="image/png" href="/logo.ico">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/stylesheet.css'); ?>">
        <link rel="stylesheet" href="node_modules/native-toast/dist/native-toast.css">
        
        <!-- CUSTOM STYLES -->
        <style {csp-style-nonce}>
            
        </style>
    </head>
    <body>
        <span class="username"></span>

        <script src="<?= base_url('js/jquery/dist/jquery.min.js') ?>"></script>
        <script src="node_modules/js-sha256/src/sha256.js"></script>
        <script src="node_modules/native-toast/dist/native-toast.js"></script>
        <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> -->
        <script>
            $(document).ready(function() {
                var urlParams = new URLSearchParams(window.location.search);
                var username = urlParams.get('username');

                $(".username").text("Hello "+username)
            })
        </script>
    </body>
</html>
