<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Workers</title>
</head>
<body>
Index
<div>
    <hr>

        <div>
            <div>
                Name: {{ $worker->name }}
            </div>
            <div>
                Last name: {{ $worker->last_name }}
            </div>
            <div>
                Email: {{ $worker->email }}
            </div>
            <div>
                Age: {{ $worker->age }}
            </div>
            <div>
                Description: {{ $worker->description }}
            </div>
            <div>
                Is married: {{ $worker->is_married }}
            </div>
        </div>
        <hr>
</div>
</body>
</html>
