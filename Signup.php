<?php
    require __DIR__ . '/vendor/autoload.php';

    //check if form is filled in when submitted
    use tackit\core\Burger;
    use tackit\core\Gemeente;

    if (!empty($_POST)) {

        if(isset($_POST['burger'])) {    
        try {
            $user = new Burger();
            $user->setUsername($_POST['username']);
            $user->setEmail($_POST['email']);
            $user->setPassword($_POST['password']);
            $user->setRepeatPassword($_POST['passwordRepeat']);
            $savedUser = $user->save();

            session_start();
            $_SESSION['user'] = $savedUser;

        } catch (Throwable $e) {
            $error = $e->getMessage();
        }
        }
        if(isset($_POST['gemeente'])) {
            try {
                $user = new Gemeente();
                $user->setUsername($_POST['username']);
                $user->setEmail($_POST['email']);
                $user->setPassword($_POST['password']);
                $user->setRepeatPassword($_POST['passwordRepeat']);
                $savedUser = $user->save();
    
                session_start();
                $_SESSION['user'] = $savedUser;

            } catch (Throwable $e) {
                $error = $e->getMessage();
            }
        }
    }

?><!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once("inc/header.inc.php"); ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <title>Signup Tackit</title>
</head>
<body class="splitForm">
    <div class="TackitSignUp">
        <div class="form">
            <form action="" method="post">
                <h1>Signup for Tackit</h1>

                <?php if (isset($error)): ?>
                    <div class="formError">
                            <p><?php echo $error; ?></p>
                    </div> 
                <?php endif; ?>
                
        
                <div class="singnup__field">
                   <label for="Burger">Burger</label>
                   <input type="checkbox" id="fooby[1][]" name="burger" checked>
                   <label for="Gemeente">Gemeente</label>
                   <input type="checkbox" id="fooby[1][]" name="gemeente">
                </div>
                <div class="singnup__field">
                    <label for="Username">Username</label>
                    <input autocomplete="off" type="text" id="username"  name="username" onBlur="userAvailability()"><span id="user-availability-status"></span> 
                </div>

                <div class="singnup__field">
                    <label for="Email">Email</label>
                    <input type="text" id="email" name="email" onBlur="emailAvailability()"><span id="email-availability-status"></span> 
                </div>

                <div class="singnup__field">
                    <label for="Password">Password</label>
                    <input type="password" name="password">
                </div>

                <div class="singnup__field">
                    <label for="Password">Repeat password</label>
                    <input type="password" name="passwordRepeat">
                </div>

                <div class="singnup__field">
                    <input type="submit" value="Sign up" class="formbtn primarybtn">
                </div>

            </form>
            <p class="extraP">Already have an account? <a href="login.php">Sign in here.</a></p>   
        </div>
    </div>
    <script type="module" src="js/main.js"></script>
</body>
</html>