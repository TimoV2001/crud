@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                    @if(Session::has('message'))
                        <div class="alert alert-success">{{Session::get('message')}}</div>
                        @endif
                <div class="panel panel-default">
                    <div class="card-header">Employees</div>

                    <div class="card-body">
                        <table class="table">
                            <tr>
                                <th>Name</th>
                                <th>action</th>
                            </tr>
                            @foreach($tasks as $task)
                                <tr>
                                    <td>{{ link_to_route('task.show',$task->firstName,[$task->id]) }}</td>
                                    <td>
                                        {!! Form::open(array('route'=>['task.destroy',$task->id],'method'=>'DELETE')) !!}
                                            {{ link_to_route('task.edit','Edit',[$task->id], ['class'=>'btn btn-primary']) }}
                                            |
                                            {!! Form::button('Delete',['class'=>'btn btn-danger','type'=>'submit']) !!}
                                        {!! Form::close() !!}

                                    </td>
                                </tr>
                                @endforeach
                        </table>



                    </div>
                </div>


                {{ link_to_route('task.create','Add new name',null, ['class'=>'btn btn-success']) }}
            </div>
        </div>
    </div>
    @endsection