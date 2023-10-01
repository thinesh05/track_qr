<head>
    <?php echo $header ?>
    <title><?php echo $title ?></title>
    <!-- CUSTOM STYLES -->
    <style {csp-style-nonce}>
        
    </style>
</head>
<body> 
    <div class="main">
        <?php echo $navbar ?>
        <div class="content">
            <span class="username"></span>
        </div>
    </div>
    <?php echo $footer ?>
    <script>
        $(document).ready(function() {
            var urlParams = new URLSearchParams(window.location.search);
            var username = urlParams.get('username');

            $(".username").text("Hello "+username+" !")
        })
    </script>
</body>