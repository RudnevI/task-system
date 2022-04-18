<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/style.css') }}">
    <title>Manager Personal Statistics</title>
</head>

<body>
    <section id="section_1">
        <div class="divWrapper">
            <div class="managerPersonalStatDivWrapper">
                <h1 class="managerPersonalStatTextWrapper">
                    Персональная статистика</h1>
                <div class="margin_15 taskStatDiv">
                    <i class="fa fa-arrow-circle-o-up" aria-hidden="true"></i>
                    <p class="margin_0" style="font-weight: bold;">Задачи по проекту 1:</p>

                    <p class="margin_0">всего</p>
                    <input class="inputSize" type="number" value="28" disabled>

                    <p class="margin_0"> &nbsp &nbsp &nbsp &nbsp &nbsp выполнено</p>
                    <input class="inputSize" type="number" value="14" disabled>

                    <p class="margin_0"> &nbsp &nbsp &nbsp &nbsp &nbsp% выполнения</p>
                    <input class="inputSize" type="number" value="50" disabled>
                </div>
                <div>
                    <input style="margin-left: 15px;" type="date" name="calendar" id="datePicker">
                </div>
            </div>
            <hr>
            <div>
                <div class="margin_20_5">
                    <table class="table table-bordered table-striped table-hover">
                        <thead>
                            <tr class="trBackColor">
                                <th scope="col">"№"</th>
                                <th scope="col">Пользователь</th>
                                <th scope="col">Задача</th>
                                <th scope="col">Срок выполнения</th>
                                <th scope="col">Время работы сегодня</th>
                                <th scope="col">Общее время работы</th>
                                <th scope="col">Статус задачи</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>ФИО</td>
                                <td>Задача 1</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>ФИО</td>
                                <td>Задача 1</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>ФИО</td>
                                <td>Задача 2</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>

                            </tr>
                            <tr>
                                <th scope="row">4</th>
                                <td>ФИО</td>
                                <td>Задача 3</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="margin_15 taskStatDiv">
                    <i class="fa fa-arrow-circle-o-up" aria-hidden="true"></i>
                    <p class="margin_0" style="font-weight: bold;">Задачи по проекту 2:</p>

                    <p class="margin_0">всего</p>
                    <input class="inputSize" type="number" value="28" disabled>

                    <p class="margin_0"> &nbsp &nbsp &nbsp &nbsp &nbsp выполнено</p>
                    <input class="inputSize" type="number" value="14" disabled>

                    <p class="margin_0"> &nbsp &nbsp &nbsp &nbsp &nbsp% выполнения</p>
                    <input class="inputSize" type="number" value="50" disabled>
                </div>

                <div class="margin_15 taskStatDiv">
                    <i class="fa fa-arrow-circle-o-up" aria-hidden="true"></i>
                    <p class="margin_0" style="font-weight: bold;">Задачи по проекту 3:</p>

                    <p class="margin_0">всего</p>
                    <input class="inputSize" type="number" value="28" disabled>

                    <p class="margin_0"> &nbsp &nbsp &nbsp &nbsp &nbsp выполнено</p>
                    <input class="inputSize" type="number" value="14" disabled>

                    <p class="margin_0"> &nbsp &nbsp &nbsp &nbsp &nbsp% выполнения</p>
                    <input class="inputSize" type="number" value="50" disabled>
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