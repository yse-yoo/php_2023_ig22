<?php
//PHP program
$regist = $_POST;
// var_dump($regist);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Regist</title>
</head>

<body>
    <div class="container">
        <h1>Confirm</h1>
        <form action="" method="post">
            <div>
                <label for="">Name</label>
                <p><?= $regist['name'] ?></p>
            </div>
            <div>
                <label for="">Email</label>
                <p><?= $regist['email'] ?></p>
            </div>
            <div>
                <label for="">Gender</label>
                <p><?= $regist['gender'] ?></p>
            </div>
            <div>
                <label for="">Birthday</label>
                <p><?= $regist['month'] ?></p>
            </div>
            <div>
                <label for="">Note</label>
                <p><?= nl2br($regist['note']) ?></p>
            </div>
            <button>Regist</button>
            <a href="input.php">Back</a>
        </form>
    </div>
</body>

</html>