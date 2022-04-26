<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="30">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/style.css') }}">
    <title>Document</title>
</head>

<body>
    <section id="section_1">
        <div class="divWrapper">
            <div class="textWrapper displaySettings">
                <div>
                    <img class="userImg" src="{{ asset('img/user_2.png') }}" />
                    <input value="{{auth()->user()->name }}" disabled class="form-control">
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

                    <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="поиск по задачам"
                            aria-label="Search">

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


                    <select class="form-select margin_15" style="width: 200px;" aria-label=".form-select-sm example">
                        <option selected>Проекты</option>
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

                                <th scope="col">07</th>
                                <th scope="col">08</th>
                                <th scope="col">09</th>
                                <th scope="col">10</th>
                                <th scope="col">11</th>
                                <th scope="col">12</th>
                                <th scope="col">13</th>
                                <th scope="col">14</th>
                                <th scope="col">15</th>
                                <th scope="col">16</th>
                                <th scope="col">17</th>
                                <th scope="col">18</th>
                                <th scope="col">19</th>
                                <th scope="col">20</th>
                                <th scope="col">21</th>
                                <th scope="col">22</th>
                            </tr>
                        </thead>
                        <tbody>


                            @foreach ($projects as $project)
                                @foreach ($project->tasks as $task)
                                @if (round((strtotime($task->deadline) - time()) / 3600 / 24) <= 1)
                                        <tr bgcolor="pink">
                                    @elseif (round((strtotime($task->deadline) - time()) / 3600 / 24) <= 3)
                                        <tr bgcolor="lemonchiffon">
                                    @else
                                        <tr>
                                    @endif
                                    
                                    <td>{{ $project->name }}</td>
                                    <td>
                                        @if ($task->name != null)
                                            <a id="{{$task->id}}" onClick="clicked()" data-value="{{$task->id}}" data-bs-toggle="modal" data-bs-target="#exampleModal">{{ $task->name }}</a>
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
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form id="taskForm" role="form" method="POST">
                        @method('PUT')
                        <div class="modal-header">
                            <h5 class="modal-title" id="modalLabel"></h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <textarea id="taskDesc" class="form-control margin_15" disabled></textarea>
                            <div class="margin_15 modalTimeDiv">
                                <div class="displayFlex">
                                    <p class="margin_0_10">C</p>
                                    <input type="time" value="07:00" name="time_start" required>
                                </div>

                                <div class="displayFlex">
                                    <p class="margin_0_10">По</p>
                                    <input type="time" value="12:00" name="time_end" required>
                                </div>
                            </div>

                            <select name="job_name" id="job_name_select" class="form-select margin_15"
                                aria-label=".form-select-sm example">
                                <option disabled>Тип работы</option>
                                @foreach ($jobs as $job)
                                    <option value="{{ $job->id }}">{{ $job->name }}</option>
                                @endforeach
                            </select>

                            <select name="tast_status" id="task_status_select" class="form-select margin_15"
                                aria-label=".form-select-sm example">
                                <option disabled>Статус работы</option>
                                <option value="todo">To Do</option>
                                <option value="inprogress">In Progress</option>
                                <option value="completed">Completed</option>
                            </select>

                            <textarea id="taskComment" name="comment" class="form-control margin_15">Комменты</textarea>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </section>
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script src="https://yastatic.net/jquery/3.3.1/jquery.min.js"></script>
<script>
    document.getElementById('datePicker').value = new Date().toISOString().substring(0, 10);

    function clicked() {
        var input = document.getElementById(event.srcElement.id);
        var task_id = input.getAttribute('data-value');
        $.ajax({
            type: "GET",
            dataType: "json",
            url: 'http://localhost:8000/api/task/' + task_id,
            success: function(task) {
                $('#taskForm').attr('action', 'http://localhost:8000/api/taskinfo/' + task_id);
                document.getElementById("taskDesc").value = task.description;
                $('#modalLabel').text(task.name);

                var select = document.getElementById('task_status_select');
                let i = 0;
                $.each(select.options, function() {
                    if (select.options[i].text == task.status) {
                        select.options[i].selected = 'selected';
                    }
                    i++;
                });
            }
        });

        $.ajax({
            type: "GET",
            dataType: "json",
            url: 'http://localhost:8000/api/taskinfo/' + task_id,
            success: function(data) {
                $('#taskComment').text(data.comment);
            }
        });

        $.ajax({
            type: "GET",
            dataType: "json",
            url: 'http://localhost:8000/api/job/',
            success: function(data) {
                let i = 0;
                $.each(data, function() {
                    if (i < 5) {
                        var select = document.getElementById('job_name_select');
                        select.options[i + 1].text = data[i].name;
                        i++;
                    }
                });
            }
        });
    }
</script>


</html>
