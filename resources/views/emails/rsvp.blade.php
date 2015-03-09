<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{ $subject }}</title>
</head>
<body>
    <p>The following RSVP was received:</p>
    <table cellspacing="5" cellpadding="5" border="0">
        <tr>
            <td>EVENT:</td><td>{{ $subject }}</td>
        </tr>
        @foreach($data as $field => $value)
            <tr>
                <td>{{ strtoupper(str_replace('_', ' ', $field)) }}:</td><td>{{ $value }}</td>
            </tr>
        @endforeach
    </table>
</body>
</html>