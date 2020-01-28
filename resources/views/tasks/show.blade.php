@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">

                <div class="panel panel-default">
                    <div class="card-header">{{$task->fullName}}</div>

                    <div class="card-body">


                        <table class="table">
                            <tr>
                                <th>Name</th>
                                <th>Phone number</th>
                                <th>Date</th>
                                <th>Time</th>
                                <th>Table</th>
                                <th>Amount of people</th>
                            </tr>
                            <tr>
                                <td>
                                    {{ $task->fullName }}
                                </td>
                                <td>
                                    {{ $task->phoneNumber }}
                                </td>
                                <td>
                                    {{ $task->Date }}
                                </td>
                                <td>
                                    {{ $task->Time }}
                                </td>
                                <td>
                                    {{ $task->Table }}
                                </td>
                                <td>
                                    {{ $task->Amount }}
                                </td>

                            </tr>

                            <tr>
                            </tr>

                        </table>





                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection