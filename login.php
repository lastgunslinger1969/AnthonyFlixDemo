<?php

require_once("includes/config.php");
require_once("includes/classes/FormSanitizer.php");
require_once("includes/classes/Constants.php");
require_once("includes/classes/Account.php");

use classes\Constants;
use classes\Account;
use classes\FormSanitizer;

$account = new Account($con);

    if(isset($_POST["submitButton"])){

        $username = FormSanitizer::sanitizeFormUsername($_POST["username"]);
        $password = FormSanitizer::sanitizeFormPassword($_POST["password"]);

        $success = $account->login($username,$password);
        if($success){
            // store session
            $_SESSION["userLoggedIn"] = $username;
            header("Location: index.php");
        }
    }
function getInputValue($name)
{
    if (isset($_POST[$name])) {
        echo $_POST[$name];
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Welcome to Anthonyflix</title>
    <link rel="stylesheet" type="text/css" href="assets/style/style.css" title="Logo" alt="Site logo" />
</head>
<body>
<div class="signInContainer">
    <div class="column">
        <div class="header">
            <img src="assets/images/logo.png"/>
            <h3>Sign In</h3>
            <span>to continue to Anthonyflix</span>
        </div>
        <form method="POST">
            <?php echo $account->getError(Constants::$loginFailed); ?>
            <input type="text" name="username" placeholder="Username" value="<?php getInputValue("username"); ?>" required>
            <input type="password" name="password" placeholder="Password" required>
            <input type="submit" name="submitButton" value="Submit">
        </form>

        <a href="register.php" class="signInMessage">Need an account? Sign up here!</a>
    </div>
</div>
</body>
</html>
