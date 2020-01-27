@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="card-header">Make employee</div>
                    <div class="card-body">

                        {!! Form::open(array('route'=>'task.store')) !!}

                        <div class="form-group">
                            {!! Form::label('firstName','Enter First name') !!}
                            {!! Form::text('firstName',null,['class'=>'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('lastName','Enter Last name') !!}
                            {!! Form::text('lastName',null,['class'=>'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('birthDate','Enter Birthday') !!}
                            {!! Form::date('birthDate', null, ['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            <label>Job</label>
                            <select class="form-control">
                                @foreach ($categories as $id => $name)
                                    <option value="{{ $id }}">{{ $name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            {!! Form::button('create',['type'=>'submit', 'class'=>'btn btn-primary']) !!}
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