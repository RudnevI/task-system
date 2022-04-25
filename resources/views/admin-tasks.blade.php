<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Админ-панель: управление заданиями</title>
    @include('subviews.bootstrap')
</head>
<body>
    @include('subviews.admin-menu')
    <div id="usser_list_div">
        <table
            class="table table-bordered table-striped table-hover"
        >
            <thead>
                <tr class="trBackColor">
                    <th scope="col">"№"</th>
                                                <th scope="col">ID Задачи</th>
                                                <th scope="col">
                                                    Название задачи
                                                </th>
                                                <th scope="col">
                                                    Название проекта
                                                </th>
                                                <!-- Можно сразу через айди вытащить fullname или login -->
                                                <th scope="col">ID разраба</th>
                                                <th scope="col"></th>
                                                <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tasks as $index=>$task)
                <tr>
                    <th scope="row">
                        {{$index + 1}}
                    </th>
                    <td>{{$task->id }}</td>
                    <td>{{$task->name}}</td>
                    <td>{{$task->project->name}}</td>
                    <td>{{$task->user_id}}</td>
                    <td>
                        <form action="{{route('admin-task-delete', ["id" => $task->id])}}" method="POST">
                            @method('DELETE')
                        <button
                            class="btn borderSolid userDeletionButton"
                            id="{{$task->id}}"
                        >
                            Удалить
                        </button>
                        </form>
                    </td>
                    <td>
                        <a href="{{ route('admin-tasks-update-form', ['id' => $task->id]) }}">
                        <button
                            class="btn borderSolid"
                        >
                            Изменить
                        </button>
                    </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {{$tasks->links()}}
    </div>
</div>
</div>
</div>
</body>
</html>
