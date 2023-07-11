<!DOCTYPE html>
<html>

<head>
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
    </style>
</head>

<body>
    <div class="center-top">
        <form action="{{ route('students.update', $student) }}" method="POST">
            @method('PUT')
            @csrf
            <div class="form-input">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" value="{{ $student->name }}" required>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" value="{{ $student->email }}" required>
            </div>
            <div class="form-input">
                <label for="grade">Grade:</label>
                <input type="text" id="grade" name="grade" value="{{ $student->grade }}" required>

                <label for="password">Password:</label>
                <input type="password" id="password" name="password" value="{{ $student->password }}" required>
            </div>
            <div class="form-input">
                <label for="age">Age:</label>
                <input type="number" id="age" name="age" value="{{ $student->age }}" required>
            </div>
            <div class="form-submit-button">
                <button type="submit">Submit</button>
            </div>
        </form>
    </div>
</body>

</html>
