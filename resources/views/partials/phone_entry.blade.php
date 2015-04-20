<table border="0" cellspacing="5" cellpadding="6">
    <thead>
    <tr>
        <td class="table_label">Country Code</td>
        <td class="table_label">Area Code</td>
        <td class="table_label" colspan="2">Number</td>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td>@include('partials.country_codes')</td>
        <td>{!! Form::text('area_code', null, ['class' => 'form-control', 'size' => '4', 'maxlength' => '3']) !!}</td>
        <td>{!! Form::text('tel_1', null, ['class' => 'form-control', 'size' => '4', 'maxlength' => '3']) !!}</td>
        <td>{!! Form::text('tel_2', null, ['class' => 'form-control', 'size' => '5', 'maxlength' => '4']) !!}</td>
    </tr>
    </tbody>
</table>