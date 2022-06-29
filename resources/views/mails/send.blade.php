<!DOCTYPE html>
<html>
    <head>
        <title>Spdms.com</title>
    </head>
    <body>
        <h1>You have the following projects in your timeline</h1>
        @foraech($projects)
        <p>{{$project->name}}</p>
        <p>{{$project->start}}</p>
        <p>{{$project->end}}</p>
        <p>Thanks</p>
    </body>
</html>