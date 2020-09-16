<!-- Author: Santiago Hincapié Murillo-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <title>{{ __('information.mail.title')}} </title>
</head>

<body>
    <h1>{{ $mail_data['title'] }} </h1>
    <p> {{ $mail_data['body'] }} </p>
    <p> {{ __('information.mail.content')}} </p>
</body>

</html>