<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>History</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 1rem;
        }
        th, td {
            padding: 0.5rem;
            border: 1px solid #ccc;
            text-align: left;
        }
    </style>
</head>
<body>
    <form method="POST" action="{{ route('taskManagement.Archive') }}">
    @csrf
</form>
    <h1>Archive</h1>

    <table>
        <thead>
            <tr>
                <th>Title</th>
            </tr>
        </thead>
        <tbody>
    @foreach($archivedTasks as $task)
        <tr>
            <td>{{ $task->title }}</td>
        </tr>
    @endforeach
</tbody>

    </table>
</body>
</html>
