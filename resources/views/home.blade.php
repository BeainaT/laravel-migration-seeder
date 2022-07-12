<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DB TRAINS</title>
</head>
<body>
    <h1>Daily Trains</h1>
    <ul>
        @foreach ($trains as $train)
            <li>
                {{$train->departure_date}}
            </li> 
        @endforeach
    </ul>
</body>
</html>