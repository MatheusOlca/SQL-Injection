<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Database Login</h3>
    <form action="submit">
        <label for="name">Nome: </label>
        <input type="text" name="name" id="name">
        </br>

        <label for="name">Senha: </label>
        <input type="password" name="password" id="password">
        </br>
        <button type="submit">Mandar</button>
    </form>
    <?php
        if(in_array('result', $_GET)){
            echo '<p>'.$_GET['result'].'</p>';
        }
    ?>
</body>
</html>