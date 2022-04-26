<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Обновление задачи</title>
    @include('subviews.bootstrap')
</head>
<body>
    @include('subviews.admin-menu')
    <form class="creation-form" action="/admin/update-task/{{$task->id}}" method="POST">
        @method('PUT')
        <div class="creation-form-content">
        <div class="mb-3">
            <label class="form-label"
                >Название</label
            >
            <input
                type="text"
                class="form-control"
                value="{{$task->name}}"
                required
            />
        </div>
        <label class="form-label">Проект</label>
        <select
            class="form-select margin_15"
            aria-label=".form-select-sm example"
            value="{{$task->project_id}}"
        >
            <option disabled>Проекты</option>
            @foreach ($projects as $project)
                <option value="{{$project->id}}"
                    @if ($project->id == $task->project_id)
                        selected="selected"
                    @endif

                    > {{$project->name}}</option>
            @endforeach

        </select>



        <label class="form-label"
        >Описание</label
    >
    <textarea class="form-control"
    name="description"

    >
        {{$task->description}}
    </textarea>

    <label class="form-label"
        >Дедлайн</label
    >
    <input class="form-control"
    name="deadline"
    type="date"
    value="{{$task->deadline}}"
    >


 <select
            class="form-select margin_15"
            aria-label=".form-select-sm example"
            name="status"
            value="{{$task->status}}"
        >
        <option value="inprogress"
        @if ($task->status == "inprogress")
            selected="selected"
        @endif

        >В работе</option>
        <option value="todo"
        @if ($task->status == "todo")
            selected="selected"
        @endif

        >На рассмотрении</option>
        <option value="completed"
        @if ($task->status == "completed")
            selected="selected"
        @endif
        >Завершено</option>
 </select>

        <label class="form-label">Исполнитель</label>
        <select
            class="form-select margin_15"
            aria-label=".form-select-sm example"
            value="{{$task->user_id}}"
        >
            <option disabled>Исполнитель</option>
            @foreach ($users as $user)
                <option value="{{$user->id}}"
                    @if ($user->id == $task->user_id)
                        selected="selected"
                    @endif
                    >{{$user->name}}</option>
            @endforeach
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
