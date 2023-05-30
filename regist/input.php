<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Regist</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1>Input</h1>
        <form action="confirm.php" method="post">
            <div>
                <label for="">Name</label>
                <input class="form-control" type="text" name="name">
            </div>
            <div>
                <label for="">Email</label>
                <input class="form-control" type="text" name="email">
            </div>
            <div>
                <label for="">Password</label>
                <input class="form-control" type="password" name="password">
            </div>
            <div>
                <label for="">Gender</label>

                <input id="gender-male" type="radio" name="gender" value="male" checked>
                <label for="gender-male">Male</label>

                <input id="gender-female" type="radio" name="gender" value="female">
                <label for="gender-female">Female</label>
            </div>
            <div>
                <label for="">Birthday</label>
                <select class="form-control" name="month" id="">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                </select>
                月
            </div>
            <div>
                <label for="">Note</label>
                <textarea class="form-control" name="note" id="" cols="80" rows="10"></textarea>
            </div>
            <button class="btn btn-primary">Confirm</button>
        </form>
    </div>
</body>

</html>