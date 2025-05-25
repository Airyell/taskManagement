<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard</title>
</head>
<body>

<form method="POST" action="{{ route('taskManagement.Board') }}"></form>

<div> 
    <section>
        <table border="1">
            <thead>
                <tr><th>To do</th></tr>
            </thead>
            <tbody>
                @foreach ($tasksTodo as $task)
                    <tr><td>{{ $task->title }}</td></tr>
                @endforeach
            </tbody>
        </table>
    </section>

    <section>
        <table border="1">
            <thead>
                <tr><th>In progress</th></tr>
            </thead>
            <tbody>
                @foreach ($tasksInProgress as $task)
                    <tr><td>{{ $task->title }}</td></tr>
                @endforeach
            </tbody>
        </table>
    </section>

    <section>
        <table border="1">
            <thead>
                <tr><th>Done</th></tr>
            </thead>
            <tbody>
                @foreach ($tasksDone as $task)
                    <tr><td>{{ $task->title }}</td></tr>
                @endforeach
            </tbody>
        </table>
    </section>
</div>

</body>
</html>
