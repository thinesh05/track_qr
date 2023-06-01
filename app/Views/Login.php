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

        .welcomeFont {
            font-weight:700;
            color : #4495FA;
            font-size:36px;
        }

        .submit-btn {
            border: 2px solid #4495FA;
            color :#4495FA;
            padding: 10px; 
            cursor: pointer;
            border-radius : 36px;
            /* padding-right: 10%;
            padding-left:10%; */
            width : 100%;
            font-weight : 700;
            margin-top :15px;

        }
        .submit-btn:hover {
            color: #fff;
            background: #4495FA;
            border-radius : 36px;
            width : 100%;
        }

        #username,#password {
            border: 1px solid transparent;
            padding: 10px;
            border-radius : 36px;
            background: #F8F8F8;
            width : 100%;
            font-weight : 100;         
            margin-top : 15px;   
        }

        * {
  box-sizing: border-box;
}


/* style inputs and link buttons */
input,
.btn {
  width: 100%;
  padding: 12px;
  border: none;
  border-radius: 36px;
  background: #F8F8F8;
  margin: 5px 0;
  opacity: 0.85;
  display: inline-block;
  font-size: 17px;
  line-height: 20px;
  text-decoration: none; /* remove underline from anchors */
}

input:hover,
.btn:hover {
  opacity: 1;
}


/* Two-column layout */
.col {
  float: left;
  width: 50%;
  margin: auto;
  padding: 0 50px;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
    

    </style>
</head>

<body>


<div class="container">
  <form action="/action_page.php">
    <div class="row">

      <div class="col">
        <img id="welcomeImg" src="assets/welcomePage.png" alt="Welcome">
      </div>

      <div class="col">
        <img id="loginLogo" src="assets/Blue_Modern_QRCode.png" alt="trackQR_Logo">
        <input type="text" name="username" placeholder="Username" required>
        <input type="password" name="password" placeholder="Password" required>
        <input class="submit-btn" type="submit" value="Login">
      </div>
      
    </div>
  </form>
</div>


<!-- <div class="container">
  <div class="row-12 flex">
    <div class="col-6">
        <img id="welcomeImg" src="assets/welcomePage.png" alt="Welcome">
    </div>
    <div class="col-6">

        <div class="">
            <img id="loginLogo" src="assets/Blue_Modern_QRCode.png" alt="trackQR_Logo">
        </div>
            <span class="welcomeFont">Welcome Back</span> -->
        
        <!-- <div class="row">
            <input type="text" id="username" placeholder="Username">
        </div>
        <div class="row">
            <input type="text" id="password" placeholder="Password">    
        </div>
        <div class="row">
            <span id="forgotpassword" >Forgot password</span> 
        </div>
        <div class="row">
            <span class="submit-btn">Login</span>
        </div> -->
           
</div>
  </div>
</div>

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
