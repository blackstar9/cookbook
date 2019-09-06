@extends('layout')

@section('content')
    <!--main content start-->
    <div class="main-content">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <article class="post">
                        <div class="post-content">
                            <header class="entry-header text-center text-uppercase">
                                <h1 class="entry-title">{{$recepy->title}}</h1>
                            </header>
                            <div class="entry-content">
                                {!! $recepy->content !!}
                            </div>
                        </div>

                        <div>
                            <h3>Ингридиенты</h3>
                            {{Form::select('ingridients[]',
                                $ingridients,
                                $selectedIngridients,
                                ['class' => 'form-control select2','data-placeholder'=>'Выберите ингридиенты'])
                            }}
                        </div>
                    </article>


                </div>
            </div>
        </div>
    </div>
    <!-- end main content-->
@endsection