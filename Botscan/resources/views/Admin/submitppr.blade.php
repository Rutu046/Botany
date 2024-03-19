@extends('layout.master')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submit Paper</title>
    <style>
        /* CSS styles */
        form {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            border-radius: 8px;
            background-color: #fff;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2); /* Add shadow */
        }
        h2 {
            text-align: center;
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        input[type="text"],
        input[type="date"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <h2>Submit Paper</h2>

    <!-- Form -->
    <form method="post" action="/Admin.submitppr"> 
        @csrf
        @method('post')

        <div>
            <label><b>Title</b></label>
            <input type="text" name="title" placeholder="Title"> 
        </div>

        <div>
            <label><b>Abstract</b></label>
            <input type="text" name="abstract" placeholder="Abstract"> 
        </div>

        <div>
            <label><b>Keywords</b></label>
            <input type="text" name="keywords" placeholder="Keywords"> 
        </div>

        <div>
            <label><b>Publication Date</b></label>
            <input type="date" name="publication_date" placeholder="Publication Date"> 
        </div>

        <div>
            <label><b>User ID</b></label>
            <input type="text" name="user_id" placeholder="User ID"> 
        </div>

        <div>
            <label><b>Authors</b></label>
            <input type="text" name="authors" placeholder="Authors"> 
        </div>

        <div>
            <input type="file" name="file"><br>
            <input type="submit" value="Upload File" name="submit">
        </div><br>

        <div>
            <input type="submit" value="Save Paper">
        </div>
    </form>
</body>
</html>

@endsection
