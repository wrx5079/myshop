@extends('admin.layout')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Добавить статью
                <small>приятные слова..</small>
            </h1>
        </section>

        <!-- Main content -->
        <section class="content">
        {!! Form::open([
            'route' => 'products.store',
            'files' => true
        ]) !!}
            <!-- Default box -->
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Добавляем товар</h3>
                    @include('admin.errors')
                </div>
                <div class="box-body">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Название</label>
                            <input value="{{old('title')}}" name="title" type="text" class="form-control" id="exampleInputEmail1" placeholder="">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Цена</label>
                            <input value="{{old('price')}}" name="price" type="text" class="form-control" id="exampleInputEmail1" placeholder="">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputFile">Лицевая картинка</label>
                            <input type="file" id="exampleInputFile" name="image">

                            <p class="help-block">Какое-нибудь уведомление о форматах..</p>
                        </div>
                        <div class="form-group">
                            <label>Категория</label>
                            {{Form::select('category_id',
                                $categories,
                                 null,
                                  ['class' => 'form-control select2'])}}
                        </div>
                        <div class="form-group">
                            <label>Бренд</label>
                                {{Form::select('brand_id',
                                $brands,
                                 null,
                                  ['class' => 'form-control select2'])}}
                        </div>
                        <!-- Date -->
                        <div class="form-group">
                            <label>Дата:</label>

                            <div class="input-group date">
                                <div class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                </div>
                                <input type="text" class="form-control pull-right" id="datepicker" name="date" value="{{old('date')}}">
                            </div>
                            <!-- /.input group -->
                        </div>


                        <!-- checkbox -->
                        <div class="form-group">
                            <label>
                                <input type="checkbox" class="minimal" name="status">
                            </label>
                            <label>
                                Показывать
                            </label>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Полный текст</label>
                            <textarea name="description" id="" cols="30" rows="10" class="form-control"></textarea>
                        </div>
                    </div>
                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                    <button class="btn btn-default">Назад</button>
                    <button class="btn btn-success pull-right">Добавить</button>
                </div>
                <!-- /.box-footer-->
            </div>
            <!-- /.box -->
        {!! Form::close() !!}
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
