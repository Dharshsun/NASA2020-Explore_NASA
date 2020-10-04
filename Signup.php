<!DOCTYPE html>
	<html>
	    <head>
	        <title>User Registration form</title>
	        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
	        <!--jQuery library--> 
	        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	        <!--Latest compiled and minified JavaScript--> 
	        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	        <meta name="viewport" content="width=device-width, initial-scale=1">
            </head>
	         <style>
         .index{
                padding: 10px ;
                background-color: #101010;
                color:#9d9d9d;
                bottom: 0;
                width: 100%;
                
            }
            .content{
                padding:50px 0px 0px 0px;
                width:100%;
            }
            .content1{
                padding:20px 0px 100px 0px;
            }
            .bg-img{
                background-image: url(images/astronaut-flies-over-earth-space-white-backgrounds-elements-image-furnished-nasa-171661953.jpg);
                background-size: cover;
            }
            </style>
            <body>
           <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                               <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span> 
                
                    </button>
                    <a class="navbar-brand" href="index.php">Mission to Planet Earth: A Digital History</a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    
                    <ul class="nav navbar-nav navbar-right">
                           <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span>Sign up</a></li>
                           <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span>Log in</a></li>
                          
                           <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span>Log Out</a></li>
                      
                    </ul>
                </div>
            </div>
                </div>
                <div class="bg-img">
                    
	    <div class="container">
                
                <div style="padding:120px 0px 150px 0px">
	        <div class="row top_margin">
                    
	            <div class="col-xs-6 col-sm-offset-3">
                        <h2><b>Password Hint:</b></h2>
                        <p><b>Upper case,number</b> </p>
                    <p><b>Length-More than 8 characters</b></p>
                        <h2><b>Sign Up</b></h2>
                        <form method="POST" action="signup_script.php">
	                            <div class="form-group">

                                        <input type="text" class="form-control" id="name" name="name" placeholder="Name">
	                            </div>
	                            <div class="form-group">
	                             
                                        <input type="email" class="form-control" id="email" name="email" placeholder="Email" pattern="[a-z0-9._%+]+@[a-z0-9.-]+.[a-z]{2,3}$">
	                            </div>
	                            <div class="form-group">
	                               
                                        <input type="text" class="form-control" id="password" name="password" placeholder="Password" pattern=(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$>
	                            </div>
	                            <div class="form-group">
	                               
                                        <input type="number" class="form-control" id="contact" name="contact" placeholder="Contact">
	                            </div>
                                     <div class="form-group">
	                               
                                         <input type="text" class="form-control" id="city" name="city" placeholder="City">
	                            </div>
                                     <div class="form-group">
	                              
                                         <input type="text" class="form-control" id="address" name="address" placeholder="Address">
	                            </div>
	                            <button type="submit" class="btn btn-primary" value=”registration_submit”>Submit</button>
	                        </form>
	                    </div>
	                </div>
	            </div>
	        </div>
            </div>
    
            <footer class="index">
        <center>
        <div class="container">
            <p>Copyright © Ace the Case 2020</p>
            
        </div>
        </center>
    </footer>
	</body>
        </html>
