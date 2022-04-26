<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Создание проекта</title>
    @include('subviews.bootstrap')
</head>
<body>
@include('subviews.admin-menu')
<form class="creation-form" action="{{ route('admin-project-create') }}" method="POST">
    <div class="creation-form-content">
    <div class="mb-3">
        <label class="form-label"
            >Название проекта</label
        >
        <input
            type="text"
            class="form-control"
            name="name"
            required
        />
    </div>
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
