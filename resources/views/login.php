<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
<link rel="icon" href="https://i.dlpng.com/static/png/6459177_preview.png" type="image/gif" sizes="16x16">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
<link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css"/>
    <style type="text/css">
        
        body {
        background-image: url('https://img.freepik.com/free-vector/blue-white-low-poly-triangle-shapes-background_1035-19007.jpg?size=626&ext=jpg');
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
        }
        .container{
            width:300px;
            margin-top:50px;   
        }
        
        input:focus + .fa {
            color: #358eed;
        }
        .input-icons {
            position: relative;
            margin-bottom:20px;
            
        }
        .input-icons > input {
            text-indent: 27px;
            font-family: "Lato", sans-serif;
        }
        .input-icons > .fa-user {
        position: absolute;
        top: 10px;
        left: 10px;
        font-size: 15px;
        color: #777777;
        }
        .input-icons > .fa-lock {
        position: absolute;
        top: 10px;
        left: 10px;
        font-size: 15px;
        color: #777777;
        }
        h2{
            color:#312c2b;
            text-align:center;
            letter-spacing:2px;
            text-shadow: 4px 4px #eee; 
        }
       
    </style>
</head>
<body>
<div class="container animated wow fadeInDown">
        <h2>LOGIN</h2>
        <hr>
        <form action= "validate"  method="post">
            <div class="input-icons">
                <input type="text" name="username" class="form-control" placeholder="Username" required>
                <span class="fa fa-user pop"></span>
            </div>    
            <div class="input-icons">
                <input type="password" name="password" class="form-control" placeholder="Password" required>
                <span class="fa fa-lock pop" ></span>
            </div>
            <div class="in-group">
                <input type="submit" class="btn btn-primary" value="Login">
            </div>
        </form>
        
    </div> 
    <script >
  
        new WOW().init();
    </script>
</body>
</html>