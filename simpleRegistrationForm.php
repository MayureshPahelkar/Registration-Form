<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Registration Form</title>
    <style>
        *{
            font-family: Arial, sans-serif;
            /* background:#f5f6fa; */
        }

        .container{
            width: 520px;
            margin:60px auto;
            background:#fff;
            padding:30px;
            border-radius:10px;
        }

        h2{
            text-align:center;
            color:#2e6fd8;
            margin-bottom:25px;
        }

        input{
            width: 100%;
            padding:10px;
            margin:10px 0;
            border:1px solid #ccc;
            border-radius:6px;
        }

        button{
            width: 50%;
            padding:10px;
            margin-left:135px;
            margin-top:10px;
            border:none;
            background:#e1e1e1;
            border-radius:6px;
            font-size:16px;
            cursor:pointer;
        }


        hr{
            margin:30px 0;
        }

        .result-box{
            display:flex;
            align-items: stretch;
            gap:20px;
        }

        .divider{
            width: 2px;
            background: #ccc;
            margin: 0 15px;
        }

        .left, .right{
            width:50%;
        }

        .error{
            color:red;
            font-weight:bold;
        }

        .success{
            color:green;
            font-weight:bold;
        }

        p{
            margin:0;
        }

    </style>
</head>
<body>
    <div class="container">
    <h2>Simple Registration Form</h2>
     
    <form method="POST" action="">
        Name: <input type="text" name="name" placeholder="Enter Your Name">
        Email: <input type="email" name="email" placeholder="Enter Your Email">
        Password:<input type="password" name="password" id="">
        <button type="submit" name="submit">Register</button>
    </form>

    <hr>

    <div class="result-box">
        <div class="left">
            <p class="error">
                <?php
                  if(isset($_POST['submit'])){
                     if(empty($_POST['name']) || empty($_POST['email']) || empty($_POST['password'])){
                         echo "Error: Please fill in all fields!";
                     }
                  }
                ?>
            </p>
        </div>

         <div class="divider"></div>

        <div class="right">
            <p class="success">
                <?php
                   if(isset($_POST['submit'])){
                     if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['password'])){
                         echo "Registration Successful!<br><br>";
                         echo "Name: ".$_POST['name']."<br>";
                         echo "Email: ".$_POST['email']."<br>";
                         echo "Password: ******";
                     }
                   }
                ?>
            </p>
        </div>
    </div>

     </div>
</body>
</html>