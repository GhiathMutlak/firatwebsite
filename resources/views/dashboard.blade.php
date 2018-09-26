@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                        @if ( count($posts) > 0 )

                            <div class="row">
                                @foreach( $posts as $post )

                                    <div class="col-lg-4">
                                        <div class="card text-white bg-primary mb-3" style="max-width: 20rem;">

                                            <div class="card-header">
                                                {{$post->first_name}}  {{$post->last_name}}
                                            </div>

                                            <div class="card-body bg-light text-dark">
                                                <h4 class="card-title">
                                                    {{$post->subject}}
                                                </h4>
                                                <p class="card-text">
                                                    {{$post->body}}
                                                </p>

                                                <span class="badge badge-danger">
                                                {{$post->created_at}}
                                                </span>

                                                <a class="pull-right btn btn-info" href="/posts/{{$post->id}}">
                                                    Details
                                                </a>

                                            </div>
                                        </div>
                                    </div>

                                @endforeach
                            </div>
                            {{--{{$posts->links()}}--}}
                        @else

                            <div class="alert alert-dismissible alert-warning">
                                <button type="button" class="close" data-dismiss="alert">&times;</button>
                                <h4 class="alert-heading">Warning!</h4>
                                <p class="mb-0">
                                    Sorry, there is no posts.
                                </p>
                            </div>

                        @endif
                    <div class="card-footer">
                        <a class="btn btn-primary btn-lg" href="/posts/create">
                            New post
                        </a>
                    </div>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
