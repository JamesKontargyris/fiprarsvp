@extends('layouts.master')

@section('body_classes') finsbury @stop

@section('logo_image')
    <img src="img/finsbury_logo_2x.gif" alt="Finsbury Logo" width="215" height="45"/>
@stop

@section('content')
    {{--<div class="banner fair-banner">--}}
        {{--<img src="img/fair_banner_large_2x.jpg" alt="Fipra Global Government Relations Fair Photo Montage" width="700" height="402"/>--}}
    {{--</div>--}}

    @include('partials.errors')

    <div class="form finsbury-form">
        <h1>Finsbury Global Government Affairs Drinks Reception</h1>
        <h3>Tuesday, 23 June 2015, 18.30 - 21.30</h3>
        <h4>The Rooftop Terrace, Finsbury offices, 3 Columbus Circle, New York, 10019, USA</h4>
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
                {!! Form::submit('Register', ['class' => 'form-control finsbury']) !!}
            </div>
        {!! Form::close() !!}
    </div>
@stop