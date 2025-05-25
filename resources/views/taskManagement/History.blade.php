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
    <form method="POST" action="{{ route('taskManagement.History') }}"></form>
    <h1>History</h1>

<form method="POST" action="{{ route('history.store') }}">
    @csrf
    <label for="action">need pa crud and e connect diri every activity</label>
</form>

    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Action</th>
                <th>User</th>
                <th>Date</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($items as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->action }}</td>
                    <td>{{ $item->user->name ?? 'N/A' }}</td>
                    <td>{{ $item->created_at->format('Y-m-d H:i') }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="4">No history found.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</body>
</html>
