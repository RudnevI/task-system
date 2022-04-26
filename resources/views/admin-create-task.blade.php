<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Создание задачи</title>
    @include('subviews.bootstrap')
</head>
<body>
    @include('subviews.admin-menu')
    <form class="creation-form" method= "POST" action="{{ route('admin-task-create') }}">
        <div class="creation-form-content">
        <div class="mb-3">
            <label class="form-label"
                >Название задачи</label
            >
            <input
                type="text"
                class="form-control"
                name="name"
                required
            />
        </div>
        <label class="form-label"
        >Проект</label
    >
        <select
            class="form-select margin_15"
            aria-label=".form-select-sm example"
            name="project_id"
        >
            <option disabled>Проекты</option>
            @foreach ($projects as $project)
                <option value="{{$project->id}}"> {{$project->name}}</option>
            @endforeach

        </select>

        <label class="form-label"
        >Описание</label
    >
    <textarea class="form-control"
    name="description"
    >

    </textarea>

    <label class="form-label"
        >Дедлайн</label
    >
    <input class="form-control"
    name="deadline"
    type="date"
    >


 <select
            class="form-select margin_15"
            aria-label=".form-select-sm example"
            name="status"
        >
        <option value="inprogress">В работе</option>
        <option value="todo">На рассмотрении</option>
        <option value="completed">Завершено</option>
 </select>




        <label class="form-label"
        >Исполнитель</label
    >

        <select
            class="form-select margin_15"
            aria-label=".form-select-sm example"
            name="user_id"
        >
            <option disabled>Исполнители</option>
            @foreach ($users as $user)
                <option value="{{$user->id}}">{{$user->name}}</option>
            @endforeach
        </select>
        <button
            type="submit"
            class="btn btnBackColor margin_15"
        >
            Сохранить
        </button>
    </form>
</div>
</body>
</html>
