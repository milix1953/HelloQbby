<?php
session_start();
?>
<!doctype html>
<html lang="en">

<head>
    <title>帳號登入</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">



</head>
<body onload="document.form1.login.focus()" background="imgs/back-10.gif">
    <div class="container">
        <div class="row mt-5">
            <div class="offset-lg-3 col-lg-6">
                <form name="form1" method="post" action="check.php"  style="background-color: wheat;">
                    <div class="card text-center">
                        <h2 class="card-header"  style="background-color: yellow;">
                            登入驗證
                        </h2>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="login">帳號</label>
                            <input type="text" class="form-control" id="login" name="login">
                        </div>
                        <div class="form-group">
                            <label for="password">密碼</label>
                            <input type="password" class="form-control" id="password" name="password">
                        </div>
                    </div>
                    <div class="card-footer text-muted text-center">
                        <button onclick="play('sel_1.mp3')" type="submit" class="btn btn-danger" >登入確認</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?php
    // if (isset($_SESSION["msg"])) {
    //     echo '<h1>' . $_SESSION["msg"] . '</h1>';
    // }
    ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>