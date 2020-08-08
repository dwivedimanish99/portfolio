<!DOCTYPE html>
<html>
    <head>
        <title>login</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
            .top_margin{
                margin-top:20px;
            }
   .footer{
   padding: 10px 0;
  background-color: #000;
 color:#9d9d9d;
 bottom:0;
 width:100%;
 position: fixed;
 font-size:14px;
 text-align:center;
 height:40px;
}
        </style>
    </head>
</head>
<body>
       <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>                        
                    </button>
                    <a class="navbar-brand" href="index.php">Ctrl Budget</a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                         <li><a href="aboutus.php"><span class="glyphicon glyphicon-info-sign"></span> About us</a></li>
                        <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                        <li><a href="loginup1.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                    </ul>
        </div>
      </div>
    </nav>
    <div class="container">
        <div class="row top_margin">
            <div class="col-xs-6 col-xs-offset-3"><br><br>
                <div class=" panel panel-primary">
                    <div class="panel-heading">User Registration</div>
                    <div class="panel-body">
                        <form method="POST" action="user_registration.php">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" name="email">
                            </div>
                            <div class="form-group">
                                <label for="Password">Password</label>
                                <input type="text" class="form-control" id="Password" name="Password">
                            </div>
                            <button type="submit" class="btn btn-primary" value=”registration_submit”>Submit</button><br><br>
                            <div class=" panel-primary">
                                <p>Don't have account <a href="signup.php">Register here </a></p>
                            </div>
                                
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer>
                    <div class="footer">
                        <p> Copyright @ Control Budget.All Rights Reserved | Contact Us: +91-8448444853.</p>
                    </div>
                </footer>
</body>
</html>