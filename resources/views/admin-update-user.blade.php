<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Обновление пользователя</title>
    @include('subviews.bootstrap')
    <style>
        form {
            margin-top: 10vmin;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center
        }
    </style>
</head>
<body>
    @include('subviews.admin-menu')
    <form id="update_user_form" action="{{ route('admin-user-update', ['id' => $user->id]) }}" method="POST">
        @method('PUT')
        <div class="creation-form-content">
        <div class="mb-3">
            <label class="form-label">Email</label>
            <input
                type="email"
                class="form-control"
                value="{{$user->email}}"
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
                value="{{$user->name}}"
                class="form-control"
                required
                name="fullname"
            />

        </div>

        <select
            class="form-select margin_15"
            aria-label=".form-select-sm example"
            name="role"
            value="{{$user->role}}"
        >
            <option disabled>Роли</option>
            <option value="user">Разработчик</option>
            <option selected value="project_manager">
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
