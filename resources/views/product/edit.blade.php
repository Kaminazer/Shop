@extends('layouts.main')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Редагувати користувача</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Головна</a></li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-md-6">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <form action="{{route("user.update", $user->id)}}" method="post">
                            @csrf
                            @method('patch')
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="name">Ім'я</label>
                                    <input type="text" class="form-control" value="{{old('name') ?? $user->name}}" name="name" id="name" placeholder="Введіть ім'я">
                                </div>

                                <div class="form-group">
                                    <label for="last_name">Прізвище</label>
                                    <input type="text" class="form-control" value="{{old('last_name') ?? $user->last_name}}" name="last_name" id="last_name" placeholder="Введіть прізвище">
                                </div>

                                <div class="form-group">
                                    <label for="email">Електронна пошта</label>
                                    <input type="email" class="form-control" value="{{old('email') ?? $user->email}}" name="email" id="email" placeholder="Введіть електронну адресу">
                                </div>

                                <div class="form-group">
                                    <label for="password">Пароль</label>
                                    <input type="password" class="form-control" name="password" id="password" placeholder="Введіть пароль">
                                </div>

                                <div class="form-group">
                                    <label for="password_confirmation">Підтвердження паролю</label>
                                    <input type="password" class="form-control" name="password_confirmation" id="password_confirmation" placeholder="Введіть пароль повторно">
                                </div>

                                <div class="form-group">
                                    <label for="age">Вік</label>
                                    <input type="number" class="form-control" value="{{old('age') ?? $user->age}}" name="age" id="age" placeholder="Введіть вік">
                                </div>
                                <div class="form-group">
                                    <label for="gender">Стать</label>
                                    <select id="gender" class="custom-select" name="gender">
                                        <option disabled selected>Стать</option>
                                        <option {{$user->gender == 0 ? 'selected' : ''}} value="0">Чоловік</option>
                                        <option {{$user->gender == 1 ? 'selected' : ''}} value="1">Жінка</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="address">Адреса</label>
                                    <input type="text" class="form-control" value="{{old('address') ?? $user->address}}" name="address" id="address" placeholder="Введіть адресу">
                                </div>

                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Змінити</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.card -->
                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
