<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/style.css') }}">
    <title>Login Page</title>
</head>

<body>
    <section class="container">
        <h1 style="margin: 50px 250px;">Система "Учет рабочего времени"</h1>
        <div class="login_div">
            <form id="login_form">
                <div class="mb-3">
                    <label class="form-label">Логин</label>
                    <input type="text" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Пароль</label>
                    <input type="password" class="form-control" required>
                </div>
                <button type="submit" class="btn btnBackColor margin_15">ВОЙТИ</button>
            </form>
        </div>
    </section>
</body>
<script src="https://yastatic.net/jquery/3.3.1/jquery.min.js"></script>

</html>