@extends('layouts.master')

@section('content')
    <div class="banner dinner-banner">
        <img src="img/dinner_banner_large_2x.jpg" alt="Fipra White House Dinner Photo Montage" width="700" height="402"/>
    </div>
    @if($errors->all())
        <ul class="errors">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif


    <div class="form">
        <h1>RSVP: Fipra's White House Dinner</h1>
        <h3>Wednesday, 24 June 2015, 19.00 - late</h3>
        <h4>Top of the Hay, The Hay Adams - Rooftop, 800 16th ST NW, Washington D.C. 20006</h4>
        <h4>Dress code: Smoking Jacket / Black Tie / Tuxedo for men</h4>
        <hr/>
        <p>Thank you for expressing your interest in joining us for this event. Please complete the form below to RSVP.</p>
        {!! Form::open() !!}
            <div class="form-group">
                {!! Form::label('name', 'Your Name:') !!}
                {!! Form::text('name', null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('email', 'Your Email Address:') !!}
                {!! Form::text('email', null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('telephone', 'Your mobile/cell number:') !!}
                {!! Form::text('telephone', null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('host', 'Your Fipra Host for this Event:') !!}
                {!! Form::text('host', null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('additional_info', 'Any additional information:') !!}
                {!! Form::textarea('additional_info', null, ['class' => 'form-control', 'style' => 'width:100%']) !!}
            </div>
            <div class="form-group">
                {!! Form::submit('Send RSVP', ['class' => 'form-control']) !!}
            </div>
        {!! Form::close() !!}
    </div>
@stop