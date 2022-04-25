<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Админ-панель: управление проектами</title>
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
                                                <th scope="col">ID проекта</th>
                                                <th scope="col">
                                                    Название проекта
                                                </th>
                                                <th scope="col">
                                                    Задачи проекта
                                                </th>
                                                <th scope="col"></th>
                                                <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($projects as $index=>$project)
                <tr>
                    <th scope="row">
                        {{$index + 1}}
                    </th>
                    <td>{{$project->id }}</td>
                    <td>{{$project->name }}</td>
                    <td>
                        @foreach ($project->tasks as $task)</b>
                            {{$task->name}} <br>
                        @endforeach

                    </td>

                    <td>
                        <form action="{{ route('admin-project-delete', ['id' => $project->id]) }}" method="POST">
                            @method('DELETE')
                        <button
                            class="btn borderSolid projectDeletionButton"
                            id="{{$project->id}}"
                        >
                            Удалить
                        </button></form>
                    </td>
                    <td>
                        <a href="{{ route('admin-projects-update-form',  ['id' =>  $project->id]) }}">
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
        <div class="pagination-links">
        {{$projects->links()}}
    </div>
    </div>
</div>
</div>
</div>
</body>
</html>
