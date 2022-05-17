<?php

use tackit\core\Burger;
use tackit\core\Gemeente;

require __DIR__ . '/vendor/autoload.php';

if (!empty($_POST)) {

    if (isset($_POST['burger'])) {
        try {
            $user = new Burger();
            $user->setEmail($_POST['email']);
            $user->setPassword($_POST['password']);
            $loggedUser = $user->canLogin();
            if ($loggedUser) {
                session_start();
                $_SESSION['user'] = $loggedUser;
                header("Location: citizenDashboard.php");
            }
        } catch (Throwable $e) {
            $error = $e->getMessage();
        }
    }
    if (isset($_POST['gemeente'])) {
        try {
            $user = new Gemeente();
            $user->setEmail($_POST['email']);
            $user->setPassword($_POST['password']);
            $loggedUser = $user->canLogin();
            if ($loggedUser) {
                session_start();
                $_SESSION['user'] = $loggedUser;
                header("Location: GemeenteDashboard.php");
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
	<div class="TackitSignIn">
		<div class="form form--login">
			<form action="" method="post">
				<h1 form__title>Sign In</h1>


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
                   <label for="Burger">Burger</label>
                   <input type="checkbox" id="fooby[1][]" name="burger" checked>
                   <label for="Gemeente">Gemeente</label>
                   <input type="checkbox" id="fooby[1][]" name="gemeente">
                </div>
				<div class="form__field">
					<label for="Email">Email</label>
					<input autocomplete="on" type="text" name="email">
				</div>
				<div class="form__field">
					<label for="Password">Password</label>
					<input type="password" name="password">
				</div>
				<p class="extraP extraP--password"><a href="reset-password.php">Forgot your password?</a></p>

				
				<input type="submit" value="Sign in" class="formbtn primarybtn">	
				
			
			</form>
			<p class="extraP">Don't have an account yet? <a href="signup.php">Make one here.</a></p>

		</div>
	</div>
    <script type="module" src="js/main.js"></script>
</body>
</html>