<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
<form action="process_request.php" method="get">
        <label for="name">Nome:</label>
        <input type="text" id="name" name="name" required>

        <br>
        <label for="mail">Email:</label>
        <input type="email" id="mail" name="mail" required>

        <br>
        <label for="age">Età:</label>
        <input type="text" id="age" name="age" required>

        <br>
        <input type="submit" value="Accedi">

    </form>
    
</body>
</html>