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

    <script src="<?= base_url('js/jquery/dist/jquery.min.js') ?>"></script>
    <script src="node_modules/js-sha256/src/sha256.js"></script>
    <script src="node_modules/native-toast/dist/native-toast.js"></script>
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> -->
    <script>
        $(document).ready(function() {
            var urlParams = new URLSearchParams(window.location.search);
            var username = urlParams.get('username');

            $(".username").text("Hello "+username+" !")
        })
    </script>
</body>