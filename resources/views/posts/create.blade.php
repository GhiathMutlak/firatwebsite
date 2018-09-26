@extends('layouts.app')

@section('content')


        <div class="container">

            <div class="row">

                <div class="col-lg-12">
                    <div class="card text-white bg-primary mb-3" >

                        <div class="card-header">
                           Create post
                        </div>

                        {{ Form::open(['action' => 'PostsController@store', 'method'=>'post']) }}

                        <div class="card-body bg-light text-dark">

                            <div class="form-group">

                                <h4 class="card-title">
                                    {{Form::label('subject', 'Subject' )}}
                                </h4>
                                <p class="card-text">
                                    {{ Form::text('subject', '', ['class' => 'form-control','placeholder'=>'Subject']) }}
                                </p>

                                <h4 class="card-title">
                                    {{Form::label('first_name', 'First name')}}
                                </h4>
                                <p class="card-text">
                                    {{ Form::text('first_name', '', ['class' => 'form-control','placeholder'=>'First name']) }}
                                </p>

                                <h4 class="card-title">
                                    {{Form::label('last_name', 'Last name')}}
                                </h4>
                                <p class="card-text">
                                    {{ Form::text('last_name', '', ['class' => 'form-control','placeholder'=>'Last name'])}}
                                </p>

                                <h4 class="card-title">
                                    {{Form::label('body', 'Description')}}
                                </h4>
                                <p class="card-text">
                                    {{ Form::textArea('body', '', ['class' => 'form-control','placeholder'=>'Description']) }}
                                </p>
                                {{Form::submit('Create', [ 'class' => 'btn btn-primary btn-lg' ])}}


                            </div>

                        </div>

                        {{ Form::close() }}

                    </div>
                </div>

            </div>

        </div>

@endsection




