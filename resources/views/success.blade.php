@extends('layouts.master')

@section('content')
    <div class="form">
        <h1>{{ $messages['title']  }}</h1>
        <p>{{ $messages['body'] }}</p>
    </div>
@stop