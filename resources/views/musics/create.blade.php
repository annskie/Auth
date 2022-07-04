@extends('base')

@section('content')

<div class="row">
 <div class="col-md-6 offset-md-3">
 <h1> Add Music</h1>
    <hr>
<div class="card mt-5 border-dark">
 <div class="card-body">

    {!! Form::open(['url' => '/musics', 'method'=>'post']) !!}

    <div class="mb-2">
    {!! Form::label("title", "Title",) !!}
    {!! Form::text("title", null, ['class'=>'form-control']) !!}
    </div>

    <div class="mb-2">
    {!! Form::label("singer", "Singer",) !!}
    {!! Form::text("singer", null, ['class'=>'form-control']) !!}
    </div>

    <div class="mb-2">
    {!! Form::label("genre", "Genre",) !!}
    {!! Form::text("genre", null, ['class'=>'form-control']) !!}
    </div>

    <div class="mb-2">
    {!! Form::label("year_of_release", "Year of Release",) !!}
    {!! Form::text("year_of_release", null, ['class'=>'form-control']) !!}
    </div>

    <div class="mb-2 d-flex justify-content-end">
        <button class="btn btn btn-outline-success" type=" submit">
            Save Music
        </button>
    </div>

    {!! Form::close() !!}
         </div>
      </div>
  </div>
</div>

@endsection
