<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{ $data['subject'] }}</title>
</head>
<body>
    <p>The following RSVP was received:</p>
    <table cellspacing="5" cellpadding="5" border="0">
        <tr>
            <td>EVENT:</td><td>{{ $data['subject'] }}</td>
        </tr>
        @foreach($data['form-data'] as $field => $value)
            <tr>
                <td>{{ strtoupper(str_replace('_', ' ', $field)) }}: {{ $value }}</td>
            </tr>
        @endforeach
    </table>
</body>
</html>