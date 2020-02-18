<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Control</title>
</head>
<body>

   @foreach ($options as $value)
        <li>{{$value}} </li>
    @endforeach

    @if($options['profile']=='admin')
        You're logged like a Admin
    @elseif($options['profile']=='user')
        You're logged
    @endif
</body>
</html>
