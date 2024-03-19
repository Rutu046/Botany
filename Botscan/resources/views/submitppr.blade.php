<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submit Paper</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f2f2f2;
        }
        h1 {
            text-align: center;
            margin-top: 40px;
            font-weight:bold;

        }
        form {
            width: 50%;
            margin: 20px auto;
            background-color: wheat;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        input[type="text"],
        input[type="date"],
        textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
            box-sizing: border-box;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
            font-size: 16px;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <h1>Submit Paper</h1>
    <form method="POST" action="{{route('submit')}}">
    @csrf('post')
        <label for="id">ID:</label>
        <input type="integer" id="id" name="id" placeholder="id">

        <label for="title">Title:</label>
        <input type="string" id="title" name="title" placeholder="title">

        <label for="abstract">Abstract:</label>
        <textarea id="abstract" name="abstract" placeholder="abstract"></textarea>

        <label for="keywords">Keywords:</label>
        <input type="text" id="keywords" name="keywords" placeholder="keywords">

        <label for="publication_date">Publication Date:</label>
        <input type="date" id="publication_date" name="publication_date" placeholder="publication_date">

        <label for="author_document_url">Author Document URL:</label>
        <input type="string" id="author_document_url" name="author_document_url" placeholder="author_document_url">

        <label for="user_id">User ID:</label>
        <input type="integer" id="user_id" name="user_id" placeholder=>

        <label for="authors">Authors:</label>
        <input type="text" id="authors" name="authors" placeholder="authors">

        <input type="submit" value="Submit">
    </form>
</body>
</html>
