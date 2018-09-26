@extends('layouts.app')

@section('content')

    <div class="content">

        <div class="container">

                <div class="row">

                        <div class="col-lg-12">
                            <div class="card text-white bg-primary mb-3 text-left" style="max-width: 70rem;">

                                <div class="card-header">
                                    {{$post->first_name}}  {{$post->last_name}}

                                    @if( !Auth::guest() && Auth::user()->id == $post->user_id )
                                    <a class="btn btn-info float-right" href="/posts/{{$post->id}}/edit">
                                        Edit
                                    </a>
                                    @endif

                                </div>

                                <div class="card-body bg-light text-dark">
                                    <h4 class="card-title">
                                        {{$post->subject}}
                                    </h4>
                                    <p class="card-text">
                                        {{$post->body}}
                                    </p>

                                    <span class="badge badge-danger">
                                    {{$post->created_at}} by {{$post->user->name}}
                                    </span>

                                    <a class="btn btn-info float-right" href="/posts/">
                                        Back
                                    </a>

                                    @if( !Auth::guest() && Auth::user()->id == $post->user_id )
                                    {{ Form::open(['action' => ['PostsController@destroy', $post->id], 'method'=>'post']) }}
                                    {{ Form::hidden( '_method', 'DELETE' ) }}
                                    {{ Form::submit('Delete', [ 'class' => 'btn btn-danger ' ])}}
                                    {{ Form::close() }}
                                    @endif

                                </div>
                            </div>
                        </div>

                </div>

        </div>

    </div>

@endsection




