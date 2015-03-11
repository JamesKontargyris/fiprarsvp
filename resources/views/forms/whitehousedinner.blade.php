@extends('layouts.master')

@section('content')
    {{--<div class="banner dinner-banner">--}}
        {{--<img src="img/dinner_banner_large_2x.jpg" alt="Fipra White House Dinner Photo Montage" width="700" height="402"/>--}}
    {{--</div>--}}

    @include('partials.errors')

    <div class="form">
        <h1>RSVP: Fipra's White House Dinner</h1>
        <h3>Wednesday, 24 June 2015, 19.00 - late</h3>
        <h4>Top of the Hay, The Hay Adams - Rooftop, 800 16th ST NW, Washington D.C. 20006</h4>
        <h4>Dress code: Smoking Jacket / Black Tie / Tuxedo for men</h4>
        <hr/>
        <p>Thank you for expressing your interest in joining us for this event. Please complete the form below to RSVP.</p>
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
                {!! Form::label('invited_by', 'Who in Fipra invited you to this dinner?') !!}
                {!! Form::text('invited_by', null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('additional_info', 'Any additional information, message or comment?') !!}
                {!! Form::textarea('additional_info', null, ['class' => 'form-control', 'style' => 'width:100%']) !!}
            </div>
            <div class="form-group">
                {!! Form::submit('Send RSVP', ['class' => 'form-control']) !!}
            </div>
        {!! Form::close() !!}
    </div>
@stop