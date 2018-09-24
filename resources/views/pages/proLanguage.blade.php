@extends('layout.app')

    @section('content')
        <div class="content">
            <div class="title m-b-md">
                Programming Language
            </div>
        </div>
        <div class="content">
            <div class="title m-b-md">
                <ul >
                @foreach( $names as $plname )
                   <li> {{$plname}} </li>
                @endforeach
                </ul>
            </div>
        </div>
    @endsection
