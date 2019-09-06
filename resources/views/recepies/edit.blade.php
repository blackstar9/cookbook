@extends('layout')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Редактировать рецепт
            </h1>
        </section>

        <!-- Main content -->
        <section class="content">
        {{Form::open([
            'route'	=>	['recepies.update', $recepy->id],
            'files'	=>	true,
            'method'	=>	'put'
        ])}}
        <!-- Default box -->
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Рецепт</h3>
                    @include('errors')
                </div>
                <div class="box-body">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Название</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="" value="{{$recepy->title}}" name="title">
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Описание</label>
                                <textarea name="description" id="" cols="30" rows="10" class="form-control" >{{$recepy->description}}</textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Полный текст</label>
                                <textarea name="content" id="" cols="30" rows="10" class="form-control">{{$recepy->content}}</textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <h3>Ингридиенты</h3>
                            {{Form::select('ingridients[]',
                                $ingridients,
                                $selectedIngridients,
                                ['class' => 'form-control select2', 'data-placeholder'=>'Выберите ингридиенты'])
                            }}
                        </div>
                    </div>
                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                    <button class="btn btn-warning pull-right">Изменить рецепт</button>
                </div>
                <!-- /.box-footer-->
            </div>
            <!-- /.box -->
            {{Form::close()}}
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection