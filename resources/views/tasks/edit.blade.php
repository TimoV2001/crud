@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="card-header">Update Reservation</div>
                    <div class="card-body">

                        {!! Form::model($task,array('route'=>['task.update',$task->id], 'method'=>'PUT')) !!}

                        <div class="form-group">
                            {!! Form::label('fullName','Enter Full Name') !!}
                            {!! Form::text('fullName',null,['class'=>'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('phoneNumber','Enter Phone number') !!}
                            {!! Form::text('phoneNumber',null,['class'=>'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('Date','Enter Date') !!}
                            {!! Form::date('Date', null, ['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('Time','Enter Time') !!}
                            {!! Form::time('Time', null, ['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('Table','Enter Table number') !!}
                            {!! Form::text('Table',null,['class'=>'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('Amount','Enter Amount') !!}
                            {!! Form::text('Amount',null,['class'=>'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::button('Update Reservation',['type'=>'submit', 'class'=>'btn btn-primary']) !!}
                        </div>

                        {!! Form::close() !!}


                    </div>
                </div>
                @if(count($errors) > 0)
                    <ul class="alert alert-danger">
                        @foreach(@$errors->all() as $error)
                            <il>{{$error}}</il>
                        @endforeach
                    </ul>
                @endif
            </div>
        </div>
    </div>
@endsection