<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Track QR</title>
    <meta name="description" content="The small framework with powerful features">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="/favicon.ico">

    <!-- STYLES -->

    <style {csp-style-nonce}>
        html, body {
            color: rgba(33, 37, 41, 1);
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji";
            font-size: 16px;
            margin: 0;
            padding: 10px;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            text-rendering: optimizeLegibility;
        }
        .submit-btn {
            border: 1px solid black;
            padding: 10px;
            cursor: pointer;
        }
        .submit-btn:hover {
            border: 1px solid black;
            color: #fff;
            background: black;
        }
    </style>
</head>
<body>

<input type="text" id="name">
<span class="submit-btn">submit</span>

<!-- SCRIPTS -->
<!-- <script src="<?= base_url('js/jquery/dist/jquery.min.js') ?>"></script> -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<script>
    $(".submit-btn").on("click", function(){
        var name = $("#name").val()

        $.ajax({
            url: 'login',
            method: 'GET',
            dataType: 'JSON',
            data: {
                name: name
            },
            success: function(response,data) {
               
            }
        });
    })
</script>

<!-- -->

</body>
</html>
