<!DOCTYPE html>
<html>

<head>
    <title>Departments</title>
</head>

<body>
    <h1>Departments</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>departments</th>
                <th>position</th>
                <th>others</th>
            </tr>
        </thead>
        <tbody>
            @foreach($departments as $item)
            <tr>
                <td>{{ $item->employee_id}}</td>
                <td>{{ $item->department}}</td>
                <td>{{ $item->position}}</td>
                <td>{{ $item->others}}</td>
               
            </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('employees') }}">Go to employees</a>
    
</body>

</html>