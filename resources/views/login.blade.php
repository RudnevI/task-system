<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/style.css') }}">
    <title>Авторизация</title>
</head>

<body>
    <section class="container">
        <h1 style="margin: 50px 250px;">Система "Учет рабочего времени"</h1>
        <div class="login_div">
            <form method="POST" action="{{ route('login') }}" id="login_form">
                @csrf
                <div class="mb-3">
                    <label class="form-label" for="email">Email</label>
                    <input id="email" name="email" type="email" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Пароль</label>
                    <input id="password" name="password" type="password" class="form-control" required>
                </div>
                <button type="submit" class="btn btnBackColor margin_15">ВОЙТИ</button>
            </form>
        </div>
    </section>
</body>

</html>
