@extends('admin.layout')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Blank page
                <small>it all starts here</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="#">Examples</a></li>
                <li class="active">Blank page</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Товары</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="form-group">
                        <a href="{{route('products.create')}}" class="btn btn-success">Добавить</a>
                    </div>
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Название</th>
                            <th>Цена</th>
                            <th>Категория</th>
                            <th>Бренд</th>
                            <th>Описание</th>
                            <th>Картинка</th>
                            <th>Действия</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($products as $product)
                        <tr>
                            <td>{{$product->id}}</td>
                            <td>{{$product->title}}</td>
                            <td>{{$product->price}}</td>
                            <td>{{$product->getCategoryTitle()}}</td>
                            <td>{{$product->getBrandTitle()}}</td>
                            <td>{!!$product->description  !!}</td>
                            <td>
                                <img src="{{$product->getImage()}}" alt="" width="100">
                            </td>
                            <td>
                                <a href="{{route('products.edit', $product->id)}}" class="fa fa-pencil"></a>

                                {!! Form::open(['route'=> ['products.destroy', $product->id], 'method' => 'delete']) !!}
                                <button onclick="return confirm('Вы уверены?')" class="delete" type="submit"><a class="fa fa-remove"></a></button>
                                {!! Form::close() !!}
                            </td>
                        </tr>
                        @endforeach
                        </tfoot>
                    </table>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
