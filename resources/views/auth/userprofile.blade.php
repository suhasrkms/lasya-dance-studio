@extends('layouts.app')

@section('content')

  <div class="container" style="min-height:580px; padding-top:7rem; color:black;">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">Please Complete your Profile to proceed</div>

          <div class="card-body ">

            {!! Form::open(['method'=>'POST', 'action'=> 'App\Http\Controllers\UserProfileController@store']) !!}

            <div class="form-group">
              {!! Form::label('phone_no', 'Phone :',['class'=>'pr-4']) !!}
              {!! Form::text('phone_no', null, ['class'=>'form-control col-md-4 d-inline'])!!}
            </div>

            <div class="form-group">
              {!! Form::label('age', 'Age',['class'=>'pr-5']) !!}
              {!! Form::number('age', null,['class'=>'form-control col-md-2 d-inline'])!!}
            </div>

            <div class="form-group">
              {!! Form::label('style', 'Dance Style :',['class'=>'pr-4']) !!}
              {!! Form::select('style', ['student' =>'Student', 'teacher'=>'Teacher', 'admin'=>'Admin']  , null , ['class'=>'form-control col-md-4 d-inline'])!!}
            </div>

            <div class="form-group">
              {!! Form::label('prefered_batch', 'Prefered Batch:',['class'=>'pr-2']) !!}
              {!! Form::select('prefered_batch', ['student' =>'Student', 'teacher'=>'Teacher', 'admin'=>'Admin']  , null , ['class'=>'form-control col-md-4 d-inline'])!!}
            </div>

            <div class="form-group">
              {!! Form::submit('Submit', ['class'=>'btn btn-primary']) !!}
            </div>

            {!! Form::close() !!}

          </div>
        </div>
      </div>
    </div>
  </div>

@endsection
