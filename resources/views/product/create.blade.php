@extends('layouts.main')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Додати товар</h1>
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
                        <form action="{{route("product.store")}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="title">Ім'я</label>
                                    <input type="text" class="form-control" value="{{old('title')}}" name="title" id="title" placeholder="Введіть назву">
                                </div>

                                <div class="form-group">
                                    <label for="description">Опис</label>
                                    <textarea class="form-control" id="description" placeholder="Введіть опис товару" name="description">{{old('description')}}</textarea>
                                </div>

                                <div class="form-group">
                                    <label for="content">Інформація про товар</label>
                                    <textarea class="form-control" id="content" placeholder="Введіть інформацію про товар" name="content">{{old('content')}}</textarea>
                                </div>

                                <div class="form-group">
                                    <label for="preview_image">Зображення</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="preview_image" name="preview_image">
                                            <label class="custom-file-label" for="exampleInputFile">Оберіть зображення</label>
                                        </div>
                                        <div class="input-group-append">
                                            <span class="input-group-text">Завантажено</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="quantity">Кількість</label>
                                    <input type="number" class="form-control" value="{{old('quantity')}}" name="quantity" id="quantity" placeholder="Введіть кількість одиниць товару">
                                </div>

                                <div class="form-group">
                                    <label for="price">Ціна</label>
                                    <input type="number" class="form-control" value="{{old('price')}}" name="price" id="price" placeholder="Введіть ціну за одиницю товару">
                                </div>
                                <div class="form-group">
                                    <label for="category_id">Категорія товару</label>
                                    <select id="category_id" class="custom-select" name="category_id">
                                        <option disabled selected>Категорія</option>
                                        @foreach($categories as $category)
                                            <option {{old('category_id') == $category->id ? 'selected' : ''}} value="{{$category->id}}">
                                                {{$category->title}}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="tags">Теги</label>
                                    <select id="tags" class="tags" name="tags[]" multiple="multiple" data-placeholder="Виберіть теги" style="width: 100%;">
                                        @foreach($tags as $tag)
                                            <option {{old('category_id') == $tag->id ? 'selected' : ''}} value="{{$tag->id}}">
                                                {{$tag->title}}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Створити</button>
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
