<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">

    <title>Todo Item</title>
</head>

    <body>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="container">
                    <h1 class="text-center my-5">

                    {{  $todo->name }}
                    </h1>

                    <div class="card card-default">
                        <div class="card-header">
                            <div class="card-body">
                            Details
                            </div>
                        </div>
                        <div class="card-body">
                            {{ $todo->description }}
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </body>
</html>
