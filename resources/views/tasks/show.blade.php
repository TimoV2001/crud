@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">

                <div class="panel panel-default">
                    <div class="card-header">{{$task->firstName}}</div>

                    <div class="card-body">


                        <table class="table">
                            <tr>
                                <td>
                                    {{ $task->firstName }}
                                    {{ $task->lastName }}
                                </td>
                            </tr>

                            <tr>
                                <td>{{ $task->birthDate }}</td>
                            </tr>

                            <tr>
                                <td>{{ $category->name }}</td>
                            </tr>
                        </table>





                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection