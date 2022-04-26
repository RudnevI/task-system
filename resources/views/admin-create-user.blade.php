<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Создание пользователя</title>
    @include('subviews.bootstrap')

</head>
<body>
    @include('subviews.admin-menu')
    <form class="creation-form" method="POST" action="{{ route('admin-user-create') }}">
        <div class="creation-form-content">
        <div class="mb-3">
            <label class="form-label">Email</label>
            <input
                type="email"
                class="form-control"

                name="email"
                required
            />
        </div>
        <div class="mb-3">
            <label
                for="exampleInputPassword2"
                class="form-label"
                >Пароль</label
            >
            <input
                type="password"
                class="form-control"

                id="exampleInputPassword2"
                name="password"
                required
            />
        </div>
        <div class="mb-3">
            <label class="form-label"
                >Полное имя</label
            >
            <input
                type="text"

                class="form-control"
                required
                name="name"
            />

        </div>
        <select
            class="form-select margin_15"
            aria-label=".form-select-sm example"
            name="role"
        >
            <option disabled>Роли</option>
            <option value="user">Разработчик</option>
            <option selected value="manager">
                Менеджер
            </option>
            <option value="admin">Администратор</option>
        </select>
        <button
            type="submit"
            class="btn btnBackColor margin_15"
        >
            Сохранить
        </button>
    </div>
    </form>

</body>
</html>
