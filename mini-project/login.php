<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body {font-family: Arial, Helvetica, sans-serif;}
        form {border: 3px solid #f1f1f1;}

        input[type=text], input[type=password] {
            width: 50%;
            padding: 10px 18px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }

        button {
            text-align: center;
            background-color: #04AA6D;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 50%;
        }

        button:hover {

            opacity: 0.8;
        }

        .cancelbtn {
            width: auto;
            padding: 10px 18px;
            background-color: #f44336;
        }


        .imgcontainer {
            text-align: center;
            margin: 24px 0 12px 0;
        }

        img.avatar {
            width: 40%;
            border-radius: 50%;
        }
        button {
            margin: auto;
            display:block;
            
        }

        .container {
            padding: 16px;
        }

        span.psw {
            float: right;
            padding-top: 16px;
        }

        /* Change styles for span and cancel button on extra small screens */
        @media screen and (max-width: 300px) {
            span.psw {
                display: block;
                float: none;
            }
            .cancelbtn {
                width: 100%;
            }
        }
    </style>
</head>
<body>

<h2 style="text-align: center">Student Login</h2>

<!--<form action="upload.php" method="post" >-->
<form action="login-verify.php" method="post" >
    <div class="imgcontainer">
        <img src="download.jpeg" alt="Avatar" class="avatar">
    </div>

    <div class="container">
        <label style="padding-left: 250px" for="uname"><b>Username</b></label>
        <input type="text" placeholder="Enter Username" name="uname" required>

        <br><label style="padding-left: 250px" for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="psw" required>

        <button type="submit">Login</button>

    </div>

    <div class="container" style="background-color:#f1f1f1">
        <button type="button" class="cancelbtn">Cancel</button>
    </div>
    <div class="sign-up"> <p>Are you new student? Click here to register. <a href="register.php" style="color:dodgerblue">Sign Up</a>.</p>
    </div>
</form>

</body>
</html>

