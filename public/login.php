<?php
    require_once '../core/Autoload.php';
    AuthMiddleware::guest();
    $authController = new AuthController();
    $error = "";
    if ($_POST) {

        $result = $authController->login($_POST['email'], $_POST['password']);
        if ($result === true) {
            header("Location: dashboard.php");
            exit;
        }else {
            $error = $result;
        }
    }
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Iniciar Sesión</title>
    </head>
    <body>
        <h2>Iniciar Sesión</h2>
        <?php if (!empty($error)): ?>
            <?php if (is_array($error)): ?>
                <ul>
                    <?php foreach ($error as $mensaje): ?>
                        <li>
                            <?= htmlspecialchars($mensaje) ?>
                        </li>
                    <?php endforeach; ?>
                </ul>
            <?php else: ?>
                <p>
                    <?= htmlspecialchars($error) ?>
                </p>
            <?php endif; ?>
        <?php endif; ?>
        <form method="POST">

            <label>Email</label><br>

            <input type="email" name="email" value="<?= htmlspecialchars($_POST['email'] ?? '') ?>">

            <br><br>

            <label>Contraseña</label><br>

            <input type="password" name="password">

            <br><br>

            <button type="submit">
                Iniciar sesión
            </button>

        </form>
    </body>
</html>