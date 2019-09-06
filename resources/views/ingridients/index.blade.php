@extends('layout')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Список ингридиентов</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="form-group">
                        @if(Auth::check())
                            <a href="{{route('ingridients.create')}}" class="btn btn-success">Добавить</a>
                        @endif
                    </div>
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Название</th>
                            <th>Действия</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($ingridients as $ingridient)
                            <tr>
                                <td>{{$ingridient->id}}</td>
                                <td>{{$ingridient->title}}</td>
                                <td>
                                    @if(Auth::check())
                                        <a href="{{route('ingridients.edit', $ingridient->id)}}" class="fa fa-pencil"></a>
                                        {{Form::open(['route'=>['ingridients.destroy', $ingridient->id], 'method'=>'delete'])}}
                                        <button onclick="return confirm('Вы уверены?')" type="submit" class="delete">
                                            <i class="fa fa-remove"></i>
                                        </button>
                                        {{Form::close()}}
                                    @endif
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