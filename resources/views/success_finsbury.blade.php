@extends('layouts.master')

@section('body_classes') finsbury @stop

@section('logo_image')
    <img src="img/finsbury_fipra_logos.gif" alt="Finsbury and Fipra Logos" width="243" height="40"/>
@stop

@section('content')
    <div class="form">
        <h1>Thank you {{ Session::get('first_name') }} - we have added your name to the guest list for this event.</h1>
        <p>If you require further information at this stage please contact
            {{--Secure mailto link--}}
            <script type="text/javascript">eval(unescape("%75%72%61%77%72%39%31%3d%5b%27%25%36%65%25%36%35%25%37%34%25%37%37%25%36%66%25%37%32%25%36%62%25%36%64%25%36%35%25%36%35%25%37%34%25%36%39%25%36%65%25%36%37%27%2c%5b%27%25%36%33%25%36%66%25%36%64%27%2c%27%25%36%36%25%36%39%25%37%30%25%37%32%25%36%31%27%5d%2e%72%65%76%65%72%73%65%28%29%2e%6a%6f%69%6e%28%27%2e%27%29%5d%2e%6a%6f%69%6e%28%27%40%27%29%3b%79%65%72%64%6e%34%37%3d%27%6e%65%74%77%6f%72%6b%6d%65%65%74%69%6e%67%40%66%69%70%72%61%2e%63%6f%6d%27%3b%64%6f%63%75%6d%65%6e%74%2e%77%72%69%74%65%28%79%65%72%64%6e%34%37%2e%6c%69%6e%6b%28%27%6d%61%69%27%2b%27%6c%74%6f%3a%27%2b%75%72%61%77%72%39%31%29%29%3b"));</script>.
            We look forward to seeing you soon!</p>
            <p><a href="http://finsbury.com">finsbury.com</a></p>
    </div>
@stop