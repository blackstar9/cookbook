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
                    <h3 class="box-title">Список рецептов</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="form-group">
                        @if(Auth::check())
                        <a href="{{route('recepies.create')}}" class="btn btn-success">Добавить</a>
                        @endif
                    </div>
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Название</th>
                            <th>Описание</th>
                            <th>Действия</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($recepies as $recepy)
                            <tr>
                                <td>{{$recepy->id}}</td>
                                <td>{{$recepy->title}}</td>
                                <td>{{$recepy->description}}</td>
                                <td>
                                    <a href="{{route('recepies.show', $recepy->id)}}" class="fa fa-eye"></a>

                                    @if(Auth::check())
                                        <a href="{{route('recepies.edit', $recepy->id)}}" class="fa fa-pencil"></a>

                                        {{Form::open(['route'=>['recepies.destroy', $recepy->id], 'method'=>'delete'])}}
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