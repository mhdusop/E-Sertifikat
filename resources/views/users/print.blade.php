<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Sertifikat {{$user->name}}</title>
    <style>
        * {
            margin: 0;
            padding: 0;
        }
        body {
            background: url(./img/front.png);
            background-size: cover;
        }
        .test {
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="test">
        <h1>{{$user->name}}</h1>
    </div>
    
    
</body>
</html>



