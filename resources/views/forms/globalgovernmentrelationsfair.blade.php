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
        <h3>Thursday, 25 June 2015, 2:00pm - 5.00pm</h3>
        <h4>The Newseum, 555 Pennsylvania Ave NW, Washington, D.C.</h4>
        <hr/>
        <p>Please complete the form to RSVP.</p>
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
                {!! Form::label('company_name', 'Company Name:') !!}
                {!! Form::text('company_name', null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('area_code', 'Mobile/cell number (with country/area code):') !!}
                @include('partials.phone_entry')
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
                {!! Form::submit('Submit RSVP', ['class' => 'form-control fipra']) !!}
            </div>
        {!! Form::close() !!}
    </div>
@stop

@section('footer')
    <img src="img/15th_anniversary_emblem_2x.png" alt="Fipra's 15th Anniversary - 2000-2015" width="175" height="115"/>
@stop