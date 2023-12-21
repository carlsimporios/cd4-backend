<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student List</title>

    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #155617;
            margin: 0;
            padding: 0;
        }

        h2 {
            text-align: center;
            color: #333;
        }

        table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
            background-color: #fff;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }

        th, td {
            padding: 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #4CAF50;
            color: white;
        }

        tr:hover {
            background-color: #f5f5f5;
        }

        .edit-btn {
            padding: 8px 12px;
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }
        .delete-btn {
            padding: 8px 12px;
            background-color: #ba4242;
            color: white;
            border: none;
            cursor: pointer;
        }

        .edit-btn:hover {
            background-color: #45a049;
        }
        .delete-btn:hover {
            background-color: #711900;
        }
        .title {
            background-color: #155617;
            padding: 20px;
            text-align: center;
            margin: 0; /* Updated to remove default margin */
        }

        .title h2 {
            color: white;
            margin: 0; /* Updated to remove default margin */
            display: inline-block; /* Make the h2 and button inline-block */
        }

        .add-btn {
            background-color: #fff;
            color: #4CAF50;
            border: none;
            font-size: 24px;
            cursor: pointer;
            padding: 5px 10px;
            margin-left: 10px; /* Add margin to separate h2 and button */
        }

        .add-btn:hover {
            background-color: #ddd;
        }
        .tit {
            background-color: #155617;
            padding: 20px;
            text-align: left;
            margin: 0; /* Updated to remove default margin */
        }
        .tit h2 {
            text-align: left;
            color: #fff;
            margin: 0; /* Updated to remove default margin */
            display: inline-block; /* Make the h2 and button inline-block */
        }
        .grade {
            background-color: #155617;
            padding: 20px;
            text-align: right;
            margin: 0; /* Updated to remove default margin */
        }

        .grade h2 {
            text-align: left;
            color: #fff;
            margin: 0; /* Updated to remove default margin */
            display: inline-block; /* Make the h2 and button inline-block */
        }
        .nav-bar {
            list-style-type: none;
            margin: 0;
            padding: 0;
            background-color: #003366;
            overflow: hidden;
        }

        .nav-bar li {
            float: left;
        }

        .nav-bar li a {
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        .nav-bar li a:hover {
            background-color: #001f4d;
        }
    </style>
</head>
<body>

   <div class="title">
    <h2>BABA YAP SCHOLLAR STUDENTS</h2>
    <a href="{{url ('createStudent')}}">
        <button class="add-btn">+</button>
    </a>

   </div>
   <ul class="nav-bar">
    <li>
        <a href="{{url('course/index')}}">Courses</a>
    </li>
    <li>
        <a href="{{url('grade/index')}}">Grades</a>
    </li>
</ul>



    <table border="1">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Edit</th>
        </tr>

        @foreach($students as $student)
            <tr>
                <td>{{$student->id}}</td>
                <td>{{$student->name}}</td>
                <td>{{$student->email}}</td>
                <td style="text-align:center; padding: 0px;">
                    <a href="{{url('student/edit',$student->id)}}">
                        <button class="edit-btn">Edit</button>
                    </a>

                </td>
            </tr>
        @endforeach
    </table>

</body>
</html>
