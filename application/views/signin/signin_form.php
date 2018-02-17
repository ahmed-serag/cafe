<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html>
    <head>
        <?php $this->load->view('signin/signinhead');
         ?>
    </head>
    
    <body  >
        <div class="header" >
            <h1 >
             Reservations system
            </h1>
        </div>
        <div class="loginmodal-container" >
            <h1>Login to Your Account</h1><br>
            <form action="<?php echo $this->config->base_url(); ?>index.php/Admin/login" method="post">
                <input type="text" name="user" placeholder="Username" required>
                <input type="password" name="pass" placeholder="Password" required>
                <input type="submit" style="background-color: #e8423e;" name="login" class="login loginmodal-submit" value="Login">
            </form>
        </div>
    </body>
</html>