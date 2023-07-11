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

        /* Style the form elements */
        .form-input {
            margin-bottom: 10px;
            display: flex;
            align-items: center;
        }

        .form-input label {
            margin-right: 10px;
        }

        .form-input input[type="text"],
        .form-input input[type="email"],
        .form-input input[type="password"],
        .form-input select {
            width: 250px;
            padding: 10px;
            border: none;
            border-radius: 4px;
            background-color: #fff;
            transition: box-shadow 0.3s ease-in-out;
        }

        .form-input input[type="text"]:focus,
        .form-input input[type="email"]:focus,
        .form-input input[type="password"]:focus,
        .form-input select:focus {
            outline: none;
            box-shadow: 0 0 5px rgba(81, 203, 238, 1);
        }

        .form-input select {
            padding: 8px;
        }

        .form-submit-button {
            display: flex;
            justify-content: center;
            margin-top: 10px;
        }

        .form-submit-button button {
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            background-color: #4CAF50;
            color: #fff;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease-in-out;
        }

        .form-submit-button button:hover {
            background-color: #45a049;
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
    <div class="center-top">
        <form action="{{ route('students.store') }}" method="POST">
            @csrf
            <div class="form-input">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-input">
                <label for="grade">Grade:</label>
                <input type="text" id="grade" name="grade" required>

                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="form-input">
                <label for="gender">Gender:</label>
                <select id="gender" name="gender" required>
                    <option value="">Select</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="other">Other</option>
                </select>

                <label for="age">Age:</label>
                <input type="number" id="age" name="age" required>
            </div>
            <div class="form-submit-button">
                <button type="submit">Submit</button>
            </div>
        </form>
    </div>

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
                    <a class="btn btn-primary" href="{{ route('students.edit', $student) }}"
                        role="button">Edit</a>
                    <a class="btn btn-danger" href="{{ route('students.archeive', $student->id) }}"
                        role="button">Archeive</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</body>

</html>
