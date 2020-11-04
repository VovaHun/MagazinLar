<!-- Login form -->
<div class="modal" id="myModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Авторизоваться на сайте</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <form method="POST">
                <!-- Protect form -->
                {{csrf_field()}}
            <!-- Modal body -->
                <div class="form-group">
                    <label for="exampleInputEmail1" class="regLabel">Электронная почта</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1" class="regLabel">Пароль</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" name="password"  required>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Войти</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Закрыть</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Registration form -->

<div class="modal" id="myModal2">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Регистрация на сайте</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <form method="POST">
                <!-- Protect form -->
                {{csrf_field()}}
                <!-- Modal body -->
                <div class="form-group">
                    <label for="exampleInputName" class="regLabel">Имя пользователя</label>
                    <input type="text" class="form-control" id="exampleInputName" name="name" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1" class="regLabel">Электронная почта</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1" class="regLabel">Пароль</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" name="password" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword2" class="regLabel">Повтор пароля</label>
                    <input type="password" class="form-control" id="exampleInputPassword2" name="password2" required>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Зарегестрироваться</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Закрыть</button>
                </div>
            </form>


        </div>
    </div>
</div>
