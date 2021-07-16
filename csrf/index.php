<?php

session_start();
$_SESSION['csrf_token'] = sha1(rand(1, 200000));

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="send.php" method="POST">
        <input type="hidden" name="_csrf_token" value="<?php echo $_SESSION['csrf_token']; ?>">
        <input name="nome" type="text" placeholder="Nome"><br>
        <input name="email" type="email" placeholder="E-mail"><br>
        <textarea name="descricao" placeholder="Descrição" id="" cols="30" rows="10"></textarea><br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>