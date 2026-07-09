<?php 
    session_start();
    require_once '../core/Autoload.php';
    AuthMiddleware::guest();
    $error = "";

    if ($_POST) {
        $auth = new AuthController();

        $result = $auth->login($_POST['email'], $_POST['password']);

        if ($result === true) {
            header("Location: dashboard.php");
            exit;
        }else {
            $error = "$result";
        }
    }
?>

<h2>Login</h2>
<form method="post">
    <input type="email" name="email" placeholder="Email" required>
    <br><br>

    <input type="password" name="password" placeholder="Password" required>
    <br><br>

    <button type="submit">Ingresar</button>
</form>

<p style="color: red;">
    <?php echo $error; ?>
</p>