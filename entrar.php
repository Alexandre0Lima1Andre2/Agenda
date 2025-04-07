<?php include_once "header.php"?>

<main>
    <h2>Login</h2>
    <form action="verificar.php" method="post">
        <input type="email" name="txt_email" placeholder="Digite seu Email"required>
        <input type="password" name="txt_senha" placeholder="Digite sua Senha" required>
        <input type="submit" value="Cadstrar" id="btn">
    </form>
<main>
<?php include_once "footer.php"?>