<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Design</title>

    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f4f4f4;
        }

        .container {
            display: flex;
        }

        form {
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            padding: 20px;
            border-radius: 8px;
            background-color: #fff;
        }

        h2 {
            color: #333;
        }

        label {
            display: block;
            margin-bottom: 10px;
        }

        input {
            display: block;
            margin-bottom: 15px;
            padding: 10px;
            width: 100%;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Form Design</title>

        <style>
            body {
                font-family: 'Arial', sans-serif;
                margin: 0;
                padding: 0;
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
                background-color: #f4f4f4;
            }

            .container {
                display: flex;
            }

            form {
                box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
                padding: 20px;
                border-radius: 8px;
                background-color: #fff;
            }

            h2 {
                color: #333;
            }

            label {
                display: block;
                margin-bottom: 10px;
            }

            input {
                display: block;
                margin-bottom: 15px;
                padding: 10px;
                width: 100%;
                box-sizing: border-box;
            }

            input[type="submit"] {
                background-color: #4CAF50;
                color: white;
                cursor: pointer;
            }

            input[type="submit"]:hover {
                background-color: #45a049;
            }
        </style>
    </head>
    <body>

    @if ($student)
        <div class="container">
            <form action="{{ url('student/update', ['id' => $student->id]) }}" method="POST">

                @csrf
                @method('POST')
                <h2>Edit Student</h2>
                <label for="name">Name:</label>
                <input type="text" name="name" value="{{ $student->name }}">

                <label for="email">Email:</label>
                <input type="text" name="email" value="{{ $student->email }}">

                <input type="submit" value="Submit">
            </form>
        </div>
    @endif

    </body>
    </html>

</html>
