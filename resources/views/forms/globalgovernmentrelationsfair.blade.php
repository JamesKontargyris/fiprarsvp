@extends('layouts.master')

@section('logo_image')
    <img src="img/fipra_network_meeting_logo_2x.png" alt="Fipra Logo" width="285" height="48"/>
@stop

@section('content')
    {{--<div class="banner fair-banner">--}}
        {{--<img src="img/fair_banner_large_2x.jpg" alt="Fipra Global Government Relations Fair Photo Montage" width="700" height="402"/>--}}
    {{--</div>--}}

    @include('partials.errors')

    <div class="form">
        <h1>Fipra's Global Government Relations Fair</h1>
        <h3>Thursday, 25 June 2015, 14.00 - 17.00</h3>
        <h4>The Newseum, 555 Pennsylvania Ave NW, Washington DC</h4>
        <hr/>
        <p>Thank you for expressing your interest in joining us for this event. Please complete the form below to register your interest in attending.</p>
        <p>You will be sent a formal invitation in due course.</p>
        <p>Any of the details you provide below will not be used for any other purposes.</p>
        {!! Form::open() !!}
            <div class="form-group">
                {!! Form::label('first_name', 'First Name:') !!}
                {!! Form::text('first_name', null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('last_name', 'Last Name:') !!}
                {!! Form::text('last_name', null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('email', 'Email Address:') !!}
                {!! Form::text('email', null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('telephone', 'Mobile/cell number (with country/area code):') !!}
                {!! Form::text('telephone', null, ['class' => 'form-control']) !!}
                <span class="form-field-info">In case we need to reach you about the event</span>
            </div>
            <div class="form-group">
                {!! Form::label('fipra_contact', 'Who are your current contacts in the Fipra Network?') !!}
                {!! Form::text('fipra_contact', null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('additional_info', 'Any additional information, message or comment?') !!}
                {!! Form::textarea('additional_info', null, ['class' => 'form-control', 'style' => 'width:100%']) !!}
            </div>
            <div class="form-group">
                {!! Form::submit('Register', ['class' => 'form-control fipra']) !!}
            </div>
        {!! Form::close() !!}
    </div>
@stop

@section('footer')
    <img src="img/15th_anniversary_emblem_2x.png" alt="Fipra's 15th Anniversary - 2000-2015" width="175" height="115"/>
@stop