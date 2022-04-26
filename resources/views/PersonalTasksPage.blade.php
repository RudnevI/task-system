<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/style.css') }}">
    <title>Document</title>
</head>

<body>
    <section id="section_1">
        <div class="divWrapper">
            <div class="textWrapper displaySettings">
                <div>
                <img class="userImg" src="{{ asset('img/user_2.png') }}" />
                    <input value="Имя пользователя" disabled class="form-control">
                </div>
                <h1 class="titleH1">Учет рабочего времени</h1>
            </div>
            <hr>
            <div>
                <div class="displaySettings">
                    <a type="button" class="btn btnBackColor" href="../html/DevPersonalStatistics.html">Посмотреть
                        персональную статистику</a>
                    <div>
                        <span>Сегодня:</span>
                        <input type="date" name="calendar" id="datePicker">
                    </div>
                    <form class="d-flex" action="{{ route('index.search') }}" method="GET">
                        <input class="form-control me-2" type="search" placeholder="поиск по задачам" aria-label="Search" name="name">
                        <button class="btn btn-outline-success" type="submit">Поиск</button>
                    </form>

                </div>

                <div class="displaySettings" style="width: 600px; justify-content: space-around;">
                    <form action="{{ route('index.filter') }}" method="GET">
                        <label class="form-label">Проект</label>
                    <select class="form-select margin_15" style="width: 200px;" aria-label=".form-select-sm example" name="project_id">
                            <option value="" selected disabled>Проекты</option>
                            @foreach ($projects as $project)
                                <option value="{{ $project->id }}">{{ $project->name }}</option>
                            @endforeach
                        </select>

                    <span>Дедлайн:</span>
                    <input type="date" name="deadline" id="datePicker_2">
                    <button class="btn btnBackColor" type="submit">фильтр</button>
                </form>
                </div>

                <div class="margin_20_5">
                    <table class="table table-bordered table-striped table-hover">
                        <thead>
                            <tr class="trBackColor">
                                <th scope="col">Проект</th>
                                <th scope="col">Задача</th>
                                <th scope="col">Дедлайн</th>
                                <th scope="col">Статус</th>

                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($projects as $project)
                                @foreach ($project->tasks as $task)
                                <tr>
                                    <td>{{ $project->name }}</td>
                                    <td>
                                        @if ($task->name != null)
                                            {{$task->name}}
                                        @endif
                                    </td>
                                    <td>
                                        @if ($task->deadline != null)
                                        {{$task->deadline}}
                                        @endif
                                </td>
                                    <td>
                                        @if ($task->status != null)
                                        {{$task->status}}
                                        @endif
                                    </td>
                                </tr>
                                @endforeach
                            @endforeach
                        </tbody>

                    </table>
                </div>
            </div>
            {{ $projects->links() }}

        </div>


        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Задача 1</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <h6 class="margin_15">Проект 1</h6>
                        <textarea class="form-control margin_15" disabled>Описание задачи</textarea>
                        <div class="margin_15 modalTimeDiv">
                            <div class="displayFlex">
                                <p class="margin_0_10">C</p>
                                <input type="time" value="07:00" required>
                            </div>

                            <div class="displayFlex">
                                <p class="margin_0_10">По</p>
                                <input type="time" value="07:00" required>
                            </div>
                        </div>

                        <select class="form-select margin_15" aria-label=".form-select-sm example">
                            <option selected>Тип работы</option>
                            <option value="1">Тип работы 1</option>
                            <option value="2">Тип работы 2</option>
                            <option value="3">Тип работы 3</option>
                        </select>

                        <select class="form-select margin_15" aria-label=".form-select-sm example">
                            <option selected>Статус работы</option>
                            <option value="1">В работе</option>
                            <option value="2">Завершено</option>
                        </select>

                        <textarea class="form-control margin_15">Коменты</textarea>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

<script>
    document.getElementById('datePicker').value = new Date().toISOString().substring(0, 10);
</script>

</html>
