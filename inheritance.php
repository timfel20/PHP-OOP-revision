<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inheritance</title>
</head>
<body>
    <?php

        require "checkingAccount.php";
        $account = new CheckingAccount;
        $account -> deposite(50);
        $account -> withdraw(10);

    ?>   
</body>

</html>