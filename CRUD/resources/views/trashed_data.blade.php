<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css.map') }}">
    <style>
        /* Center the form at the top of the page */
        .center-top {
            display: flex;
            justify-content: center;
            align-items: flex-start;
            /* Align items to the top */
            background-color: #f2f2f2;
            padding: 20px;
        }

        /* Style the table */
        .styled-table {
            width: 100%;
            border-collapse: collapse;
            font-size: 0.9em;
            font-family: sans-serif;
            background-color: #fff;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
            margin-top: 20px;
        }

        .styled-table thead tr {
            background-color: #009879;
            color: #ffffff;
            text-align: left;
        }

        .styled-table th,
        .styled-table td {
            padding: 12px 15px;
        }

        .styled-table tbody tr {
            border-bottom: 1px solid #dddddd;
        }

        .styled-table tbody tr:nth-of-type(even) {
            background-color: #f3f3f3;
        }

        .styled-table tbody tr:last-of-type {
            border-bottom: 2px solid #009879;
        }

        .styled-table tbody tr.active-row {
            font-weight: bold;
            color: #009879;
        }

        .delete {
            display: inline;
        }
    </style>
</head>

<body>
    <table class="styled-table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Grade</th>
                <th>Email</th>
                <th>Gender</th>
                <th>Age</th>
                <th>Action</th>
            </tr>
        </thead>
        @foreach ($students as $student)
            <tr>
                <td>{{ $student->name }}</td>
                <td>{{ $student->grade }}</td>
                <td>{{ $student->email }}</td>
                <td>{{ $student->gender }}</td>
                <td>{{ $student->age }}</td>
                <td>
                    <a class="btn btn-primary" href="{{ route('students.restore', $student->id) }}"
                        role="button">Restore</a>
                    <form action="{{ route('students.destroy', $student->id) }}" method="post">
                        @method('DELETE')
                        @csrf
                        <button class="btn btn-danger" type="submit">Destroy</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</body>

</html>
