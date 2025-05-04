<!DOCTYPE html>
<html>
<head>
    <title>Data Petugas</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 5px;
            border: 1px solid #000;
            font-size: 12px;
        }
    </style>
</head>
<body>
    <h3 style="text-align: center;">Data Petugas</h3>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Username</th>
                <th>Password</th>
            </tr>
        </thead>
        <tbody>
            @foreach($petugas as $index => $p)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $p->username }}</td>
                    <td>{{ $p->password }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
