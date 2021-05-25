 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
</head>
<body>
    <?php include_once "header.php"?>
    <!-- <div class="minht-100"> -->
        <div class="banner">
            <div class="container">
                
                <div class="loginbannertext">
                    <h1>WELCOME TO LOGIN PAGE</h1>
                    <p>Stay connected by logging in with your email/username and password.</p>
                </div>
                <div class="loginDiv">
                    
                    <form action="includes/login.inc.php" method="post" class="loginForm">
                        <h1>LOG IN</h1> 
                        <div class="error ">
                            
                                <?php 
                                    if(isset($_GET['error'])){
                                        switch ($_GET['error']) {
                                            case 'emptyinput':
                                                echo '<div class="msg warning"> Please fill-up all required fields.</div>';
                                                break;
                                            case 'loginerror':
                                                echo '<div class="msg warning"> Account doesn\'t exist.</div>';
                                                break;
                                            case 'wrongpassword':
                                                echo '<div class="msg warning"> Incorrect Password.</div>';
                                                break;
                                            case 'accountlock':
                                                echo '<div class="msg warning"> Account is locked. Please wait for 30minutes to re-try. Or you can <a href="passwordreset.php">reset your password here.</a></div>';
                                                break;
                                        }
                                    }
                                    // if(isset($_SESSION['lasttried']) && isset($_SESSION['attempt']))
                                    //     echo $_SESSION['lasttried'].$_SESSION['attempt'];
                                ?>
                            
                        </div>
                        <br><br>
                        <input type="text" name="username" id="username" placeholder="Username/Email" value=<?php echo isset($_GET['username'])?$_GET['username']:"";?> ><br><br>
                        <input type="password" name="password" id="password" placeholder="Password" ><br>
                        <!-- <input type="checkbox" name="admin" id="admin"> -->
                        <!-- <label>Login as Admin</label> -->
                        <br><br>

                        <!-- <a href="passwordreset.php">Forgot Password?</a> -->
                        <input type="submit" value="Login" name="login" class="button lime"><br><br>
                        
                        <!-- <label>Or create a new account</label><br><br><br>
                        <a href="registration.php" class="button purple wid-100" >Create Account</a><br><br> -->

                        
                    </form>
                    
                </div>
            </div>
        </div>
    <!-- </div> -->
    
</body>
</html>