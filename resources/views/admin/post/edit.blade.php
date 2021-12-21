@extends('layouts.admin_layout')

@section('title', 'Редагувати статтю')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Редагувати статтю: {{$post['title']}}</h1>
                </div><!-- /.col -->

            </div><!-- /.row -->

            @if (session('success'))
                <div class="alert alert-success" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h4><i class="icon fa fa-check"></i>{{ session('success') }}</h4>
                </div>
            @endif

        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row" >
                <div class="col-lg-12">
                    <div class="card card-primary">

                        <!-- form start -->
                        <form action="{{route('post.update',$post['id'])}}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Назва</label>
                                    <input type="text" value="{{$post('title')}}" name="title" class="form-control" id="exampleInputEmail1" placeholder="Введіль назву статті" required>
                                </div>

                                <div class="form-group">
                                    <textarea name="text" class="editor">{{$post['text']}}</textarea>
                                </div>

                                <div class="form-group">
                                    <label for="feature_image">Головне зображення</label>
                                    <img src="{{$post['img']}}" alt="" class="img-uploaded" style="display: block; width: 300px">
                                    <input type="text" name="img" class="form-control" id="feature_image"
                                           name="feature_image" value="{{$post['img']}}" readonly>
                                    <a href="" class="popup_selector" data-inputid="feature_image">Вибрати фото</a>
                                </div>

                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Оновтити</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>



        </div><!-- /.container-fluid -->
    </section>
@endsection
