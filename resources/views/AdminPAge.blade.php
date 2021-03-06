<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
            crossorigin="anonymous"
        />
        <link
            rel="stylesheet"
            type="text/css"
            href="{{ asset('/css/style.css') }}"
        />
        <title>Admin Page</title>
        <style>
            #user_list_div {
                height: 100vh;
                width: 60vh;
                overflow: scroll;
            }

            table {
                max-width: 100%;
            }
        </style>
    </head>

    <body>
        <section class="container">
            <div class="container-fluid">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button
                            class="nav-link active"
                            id="home-tab"
                            data-bs-toggle="tab"
                            data-bs-target="#home"
                            type="button"
                            role="tab"
                            aria-controls="home"
                            aria-selected="true"
                        >
                            Пользователи
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button
                            class="nav-link"
                            id="profile-tab"
                            data-bs-toggle="tab"
                            data-bs-target="#profile"
                            type="button"
                            role="tab"
                            aria-controls="profile"
                            aria-selected="false"
                        >
                            Проекты
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button
                            class="nav-link"
                            id="contact-tab"
                            data-bs-toggle="tab"
                            data-bs-target="#contact"
                            type="button"
                            role="tab"
                            aria-controls="contact"
                            aria-selected="false"
                        >
                            Задачи
                        </button>
                    </li>
                </ul>
                <div class="tab-content margin_15" id="myTabContent">
                    <div
                        class="tab-pane fade show active"
                        id="home"
                        role="tabpanel"
                        aria-labelledby="home-tab"
                    >
                        <div class="div_wrapper">
                            <div class="left_menu_side">
                                <button
                                    onclick="showOrHide('#add_user_form')"
                                    class="btn add_btn"
                                >
                                    Добавить пользователя
                                </button>
                                <button
                                    onclick="showOrHide('#usser_list_div')"
                                    class="btn add_btn"
                                >
                                    Все пользователи
                                </button>
                            </div>

                            <div
                                id="user_content_div"
                                class="right_content_side"
                            >
                                <form id="add_user_form">
                                    <div class="mb-3">
                                        <label class="form-label">Логин</label>
                                        <input
                                            type="text"
                                            class="form-control"
                                            required
                                        />
                                    </div>
                                    <div class="mb-3">
                                        <label
                                            for="exampleInputPassword1"
                                            class="form-label"
                                            >Пароль</label
                                        >
                                        <input
                                            type="password"
                                            class="form-control"
                                            id="exampleInputPassword1"
                                            required
                                        />
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label"
                                            >Fullname</label
                                        >
                                        <input
                                            type="text"
                                            class="form-control"
                                            required
                                        />
                                    </div>
                                    <select
                                        class="form-select margin_15"
                                        aria-label=".form-select-sm example"
                                    >
                                        <option disabled>Роли</option>
                                        <option selected value="1">
                                            Разработчик
                                        </option>
                                        <option value="2">Менеджер</option>
                                        <option value="3">Администратор</option>
                                    </select>
                                    <button
                                        type="submit"
                                        class="btn btnBackColor margin_15"
                                    >
                                        Сохранить
                                    </button>
                                </form>

                                <form id="update_user_form">
                                    <div class="mb-3">
                                        <label class="form-label">Логин</label>
                                        <input
                                            type="text"
                                            class="form-control"
                                            value="User Exists"
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
                                            value="User Exists Pass"
                                            id="exampleInputPassword2"
                                            required
                                        />
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label"
                                            >Fullname</label
                                        >
                                        <input
                                            type="text"
                                            value="User Exists Fullname"
                                            class="form-control"
                                            required
                                        />
                                    </div>
                                    <select
                                        class="form-select margin_15"
                                        aria-label=".form-select-sm example"
                                    >
                                        <option disabled>Роли</option>
                                        <option value="1">Разработчик</option>
                                        <option selected value="2">
                                            Менеджер
                                        </option>
                                        <option value="3">Администратор</option>
                                    </select>
                                    <button
                                        type="submit"
                                        class="btn btnBackColor margin_15"
                                    >
                                        Сохранить
                                    </button>
                                </form>

                                <div id="usser_list_div">
                                    <table
                                        class="table table-bordered table-striped table-hover"
                                    >
                                        <thead>
                                            <tr class="trBackColor">
                                                <th scope="col">"№"</th>
                                                <th scope="col">User Login</th>
                                                <th scope="col">User Pass</th>
                                                <th scope="col">Fullname</th>
                                                <th scope="col">Role</th>
                                                <th scope="col"></th>
                                                <th scope="col"></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($users as $index=>$user)
                                            <tr>
                                                <th scope="row">
                                                    {{$index + 1}}
                                                </th>
                                                <td>{{ $user->email }}</td>
                                                <td>{{$user->password}}</td>
                                                <td>{{$user->name}}</td>
                                                <td>{{$user->role}}</td>
                                                <td>
                                                    <button
                                                        class="btn borderSolid userDeletionButton"
                                                        id="{{$user->id}}"
                                                    >
                                                        Удалить
                                                    </button>
                                                </td>
                                                <td>
                                                    <button
                                                        onclick="showOrHide('#update_user_form')"
                                                        class="btn borderSolid"
                                                    >
                                                        Изменить
                                                    </button>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    {{$users->links()}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div
                        class="tab-pane fade"
                        id="profile"
                        role="tabpanel"
                        aria-labelledby="profile-tab"
                    >
                        <div class="div_wrapper">
                            <div class="left_menu_side">
                                <button
                                    onclick="showOrHide('#add_project_form')"
                                    class="btn add_btn"
                                >
                                    Добавить Проект
                                </button>
                                <button
                                    onclick="showOrHide('#pproject_list_div')"
                                    class="btn add_btn"
                                >
                                    Все проекты
                                </button>
                            </div>

                            <div class="right_content_side">
                                <form id="add_project_form">
                                    <div class="mb-3">
                                        <label class="form-label"
                                            >Название проекта</label
                                        >
                                        <input
                                            type="text"
                                            class="form-control"
                                            required
                                        />
                                    </div>
                                    <button
                                        type="submit"
                                        class="btn btnBackColor margin_15"
                                    >
                                        Сохранить
                                    </button>
                                </form>

                                <form id="update_project_form">
                                    <div class="mb-3">
                                        <label class="form-label"
                                            >Название проекта</label
                                        >
                                        <input
                                            type="text"
                                            class="form-control"
                                            value="Проект 1"
                                            required
                                        />
                                    </div>
                                    <button
                                        type="submit"
                                        class="btn btnBackColor margin_15"
                                    >
                                        Сохранить
                                    </button>
                                </form>

                                <div id="pproject_list_div">
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
                                            @foreach ($projects as $index => $project)
                                            <tr>
                                            <th scope="row">{{$index + 1}}</th>
                                            <td> {{$project->id}} </td>
                                            <td> {{$project->name}}</td>
                                            <td>
                                                @foreach ($project->tasks() as $task)
                                                    {{$task->name}}<br>
                                                @endforeach
                                            </td>
                                            <td>
                                                <button
                                                    class="btn borderSolid"
                                                >
                                                    Удалить
                                                </button>
                                            </td>
                                            <td>
                                                <button
                                                    onclick="showOrHide('#update_project_form')"
                                                    class="btn borderSolid"
                                                >
                                                    Изменить
                                                </button>
                                            </td>
                                            @endforeach
                                        </tr>
                                        </tbody>
                                    </table>
                                    {{$projects->links()}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div
                        class="tab-pane fade"
                        id="contact"
                        role="tabpanel"
                        aria-labelledby="contact-tab"
                    >
                        <div class="div_wrapper">
                            <div class="left_menu_side">
                                <button
                                    onclick="showOrHide('#add_task_form')"
                                    class="btn add_btn"
                                >
                                    Добавить задачу
                                </button>
                                <button
                                    onclick="showOrHide('#ttask_list_div')"
                                    class="btn add_btn"
                                >
                                    Все задачи
                                </button>
                            </div>

                            <div class="right_content_side">
                                <form id="add_task_form">
                                    <div class="mb-3">
                                        <label class="form-label"
                                            >Название задачи</label
                                        >
                                        <input
                                            type="text"
                                            class="form-control"
                                            required
                                        />
                                    </div>
                                    <select
                                        class="form-select margin_15"
                                        aria-label=".form-select-sm example"
                                    >
                                        <option disabled>Проекты</option>
                                        <option value="1">Проект 1</option>
                                        <option value="2">Проект 2</option>
                                        <option value="3">Проект 3</option>
                                    </select>
                                    <select
                                        class="form-select margin_15"
                                        aria-label=".form-select-sm example"
                                    >
                                        <option disabled>Разрабы</option>
                                        <option value="1">Разраб 1</option>
                                        <option value="2">Разраб 2</option>
                                        <option value="3">Разраб 3</option>
                                    </select>
                                    <button
                                        type="submit"
                                        class="btn btnBackColor margin_15"
                                    >
                                        Сохранить
                                    </button>
                                </form>

                                <form id="update_task_form">
                                    <div class="mb-3">
                                        <label class="form-label"
                                            >Название задачи</label
                                        >
                                        <input
                                            type="text"
                                            class="form-control"
                                            value="Задача 1"
                                            required
                                        />
                                    </div>
                                    <select
                                        class="form-select margin_15"
                                        aria-label=".form-select-sm example"
                                    >
                                        <option disabled>Проекты</option>
                                        <option value="1">Проект 1</option>
                                        <option selected value="2">
                                            Проект 2
                                        </option>
                                        <option value="3">Проект 3</option>
                                    </select>
                                    <select
                                        class="form-select margin_15"
                                        aria-label=".form-select-sm example"
                                    >
                                        <option disabled>Разрабы</option>
                                        <option selected value="1">
                                            Разраб 1
                                        </option>
                                        <option value="2">Разраб 2</option>
                                        <option value="3">Разраб 3</option>
                                    </select>
                                    <button
                                        type="submit"
                                        class="btn btnBackColor margin_15"
                                    >
                                        Сохранить
                                    </button>
                                </form>

                                <div id="ttask_list_div">
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

                                            <tr>
                                                <th scope="row">1</th>
                                                <td>ID_1</td>
                                                <td>Задача 1</td>
                                                <td>Проект 1</td>
                                                <td>Разраб 2</td>
                                                <td>
                                                    <button
                                                        class="btn borderSolid"
                                                    >
                                                        Удалить
                                                    </button>
                                                </td>
                                                <td>
                                                    <button
                                                        onclick="showOrHide('#update_task_form')"
                                                        class="btn borderSolid"
                                                    >
                                                        Изменить
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">2</th>
                                                <td>ID_2</td>
                                                <td>Задача 2</td>
                                                <td>Проект 3</td>
                                                <td>Разраб 1</td>
                                                <td>
                                                    <button
                                                        class="btn borderSolid"
                                                    >
                                                        Удалить
                                                    </button>
                                                </td>
                                                <td>
                                                    <button
                                                        onclick="showOrHide('#update_task_form')"
                                                        class="btn borderSolid"
                                                    >
                                                        Изменить
                                                    </button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </body>
    <script
        src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"
    ></script>
    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
        crossorigin="anonymous"
    ></script>

    <script src="https://yastatic.net/jquery/3.3.1/jquery.min.js"></script>

    <script>
        function showOrHide(formId) {
            if (formId.includes("user")) {
                $("#usser_list_div").css("display", "none");
            } else if (formId.includes("project")) {
                $("#pproject_list_div").css("display", "none");
            } else if (formId.includes("task")) {
                $("#ttask_list_div").css("display", "none");
            }

            $(formId).css("display", "block");
            $("form:not(" + formId + ")").hide();
        }

        let userDeletionButtons = document.querySelectorAll(
            ".userDeletionButton"
        );
        Array.from(userDeletionButtons).forEach((button) => {
            button.addEventListener("click", async function () {
                await fetch("api/users/delete/" + this.id, {
                    method: "DELETE",
                }).then((res) => {
                    if (res.ok) {
                    }
                    console.log(res)
                });
            });
        });
    </script>
</html>
