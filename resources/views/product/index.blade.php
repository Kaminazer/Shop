@extends('layouts.main')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Товари</h1>
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
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <a href="{{route('product.create')}}" class="btn btn-primary">Додати новий товар</a>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0">
                          {{--  <table class="table table-hover text-nowrap">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Ім'я</th>
                                    <th>Прізвище</th>
                                    <th>Email</th>
                                    <th>Вік</th>
                                    <th>Стать</th>
                                    <th>Адреса</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($products as $user)
                                <tr>
                                    <td>{{$user->id}}</td>
                                    <td><a href="{{route('product.show', $user->id)}}">{{$user->name}}</a></td>
                                    <td>{{$user->last_name}}</td>
                                    <td>{{$user->email}}</td>
                                    <td>{{$user->age}}</td>
                                    <td>{{$user->genderTitle}}</td>
                                    <td>{{$user->address}}</td>

                                </tr>
                                @endforeach
                                </tbody>
                            </table>--}}
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
