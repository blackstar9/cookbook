@extends('layout')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Добавить рецепт
            </h1>
        </section>

        <!-- Main content -->
        <section class="content">
        {{Form::open([
            'route'	=> 'recepies.store',
            'files'	=>	true
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
                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="" value="{{old('title')}}" name="title">
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Описание</label>
                                <textarea name="description" id="" cols="30" rows="10" class="form-control" >{{old('description')}}</textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Полный текст</label>
                                <textarea name="content" id="" cols="30" rows="10" class="form-control"></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <h3>Ингридиенты</h3>
                            {{Form::select('ingridients[]',
                                $ingridients,
                                null,
                                ['class' => 'form-control select2','data-placeholder'=>'Выберите ингридиенты'])
                            }}
        </div>
    </div>
</div>
</div>
<!-- /.box-body -->
<div class="box-footer">
    <button class="btn btn-success pull-right">Добавить рецепт</button>
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