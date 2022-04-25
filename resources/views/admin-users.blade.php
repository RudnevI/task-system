<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <title>Админ-панель: управление пользователями</title>
        @include('subviews.bootstrap')

    </head>
    <body>
        @include('subviews.admin-menu')
        <main id="mainElement">

            <form class="creation-form" method="POST" hidden>
                <div>
                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input
                        type="text"
                        class="form-control"
                        value="User Exists"
                        required
                    />
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword2" class="form-label"
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
                    <label class="form-label">Fullname</label>
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
                    <option selected value="2">Менеджер</option>
                    <option value="3">Администратор</option>
                </select>
                <button
                    type="submit"
                    class="btn btnBackColor margin_15 saveUserButton"
                >
                    Сохранить
                </button>
            </div>
            </form>
            <div id="usser_list_div" class="entity-admin-view">
                <table class="table table-bordered table-striped table-hover">
                    <thead>
                        <tr class="trBackColor">
                            <th scope="col">"№"</th>
                            <th scope="col">Email</th>
                            <th scope="col">Хэш пароля</th>
                            <th scope="col">Полное имя</th>
                            <th scope="col">Роль</th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $index=>$user)
                        <tr>
                            <th scope="row">{{$index + 1}}</th>
                            <td>{{$user->email }}</td>
                            <td>{{$user->password}}</td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->role}}</td>
                            <td>
                                <form action="{{ route('admin-user-delete', ['id' => $user->id])}}" method="POST">
                                    @method('DELETE')
                                <button
                                    class="btn borderSolid userDeletionButton"
                                    id="{{$user->id}}"
                                >
                                    Удалить
                                </button></form>
                            </td>
                            <td>
                                <form action="/admin/update-user/{{$user->id}}" method="GET">
                                <button
                                    onclick="showOrHide('#update_user_form')"
                                    class="btn borderSolid"
                                >
                                    Изменить
                                </button>
                            </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <div style="display: flex; justify-content: center">
                    {{$users->links()}}
                </div>
            </div>

        </main>
    </body>
    <script>
        let deleteButtons = document.querySelectorAll(".userDeletionButton");


        let tableElement = document.querySelector('#usser_list_div');

        Array.from(deleteButtons).forEach((button) => {
            button.addEventListener("click", async function () {
                await fetch("../api/users/destroy/" + this.id, {
                    method: "DELETE",
                })
                    .then((res) => {
                        if (res.ok) {
                            this.parentElement.parentElement.remove();
                        } else {
                            console.log(res);
                        }
                    })
                    .catch((err) => {
                        console.log(err);
                    });
            });
        });






    </script>
</html>
