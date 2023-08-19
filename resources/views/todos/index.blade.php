<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">

<title>Todos</title>
</head>

    <body>
    <h1 class='text-center my-5'>Todos Page</h1>
        <ul>
        @foreach ($todos as $todo)

        <li>
            {{$todo->name}}
        </li>

        @endforeach
        </ul>
        <div class="container">
            <h1 class="text-center my-5">Todos Page</h1>
            <div class="row justify-content-center">
              <div class="col-md-8 mb-5">
                <div class="card card-default">
                  <div class="card-header">
                    Todos
                  </div>

                  <div class="card-body">
                    <ul class="list-group">
                      @foreach($todos as $todo)
                        <li class="list-group-item">
                          {{ $todo->name }}

                          <a href="/todos/{{ $todo->id }}" class="btn btn-primary btn-sm float-end">View</a>
                        </li>
                      @endforeach
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
    </body>
</html>
