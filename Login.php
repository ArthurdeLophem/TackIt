<?php

use tackit\core\Burger;
use tackit\core\Gemeente;

require __DIR__ . '/vendor/autoload.php';



if (!isset($_GET['u'])) {
    $user = "Burger";
    $classA = 'SelectedLogin';
    $classB = 'unSelectedLogin';
}
if (isset($_GET['u'])) {
    if($_GET[('u')] == 'Burger') {
        $user = "Burger";
        $classA = 'SelectedLogin';
        $classB = 'unSelectedLogin';
    }
    if($_GET[('u')] == 'Gemeente') {
        $user = "Gemeente";
        $classA = 'unSelectedLogin';
        $classB = 'SelectedLogin';
    }
}

if (!empty($_POST)) {

    if ($user == "Burger") {
        try {
            $user = new Burger();
            $user->setEmail($_POST['email']);
            $user->setPassword($_POST['password']);
            $loggedUser = $user->canLogin();
            if ($loggedUser) {
                session_start();
                $_SESSION['user'] = $loggedUser;
                header("Location: dashboard.php");
            }
        } catch (Throwable $e) {
            $error = $e->getMessage();
        }
    }
    if ($user == "Gemeente") {
        try {
            $user = new Gemeente();
            $user->setEmail($_POST['email']);
            $user->setPassword($_POST['password']);
            $loggedUser = $user->canLogin();
            if ($loggedUser) {
                session_start();
                $_SESSION['user'] = $loggedUser;
                header("Location: dashboard.php");
            }
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
  <title>Sign in Tackit</title>
</head>
<body class="splitForm">
<div class="Login">
    <section class="LoginAsWho">
        <img src="https://res.cloudinary.com/dgypufy9k/image/upload/v1652810450/Tackit_Assets/street_-_1_1_biypul.png" alt="street">
        <h2>Als wie wil je aanmelden?</h2>
        <div class="form__field">
                   <a class="<?php echo $classA; ?>" href="login.php?u=Burger">Burger</a>
                   <a class="<?php echo $classB; ?>" href="login.php?u=Gemeente">Gemeente</a>
        </div>
    </section>
    <section>
        <div class="TackitSignIn">
		    <div class="form form--login">
			    <form action="" method="post">
				    <img src="https://res.cloudinary.com/dgypufy9k/image/upload/v1652810434/Tackit_Assets/logo_1_wt0q6w.png" alt="TackitLogo">


				    <?php if (isset($error)) : ?>
				    <div class="formError">
					    <p>
						    <?php echo $error; ?>
					    </p>
				    </div>
				    <?php endif; ?>
				    <?php if (isset($_GET["newpassword"])):?>
					    <p>
					    please make sure your password is at least 6 characters in length, includes at least one upper case letter, one number, and one special character.
					    </p>
				    <?php endif ?>
				    <?php if (isset($_GET["succes"])):?>
					    <p>
					    Your password has been succesfully updated.
					    </p>
				    <?php endif ?>
				    <div class="form__field">
					    <input autocomplete="on" type="text" name="email" placeholder="email">
				    </div>
				    <div class="form__field">
					    <input type="password" name="password" placeholder="password">
				    </div>
                    <a class="registerLinkLogin" href="signup.php">Register</a>
				    <p class="extraP extraP--password"><a class="registerLinkLogin" href="reset-password.php">Forgot your password?</a></p>

				
				    <input type="submit" value="Log in" class="formbtn_primarybtn">	
				
			
			    </form>
		        </div>
	    </div>
    </section>
</div>
    <script type="module" src="js/main.js"></script>
</body>
</html>