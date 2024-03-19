@extends('layout.master')

@section('content')
<head>
<style>
        /* Form container */
        .form-container {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            border-radius: 8px;
            background-color: #fff;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2); /* Add shadow */
        }

        /* Form title */
        .form-title {
            text-align: center;
            margin-bottom: 20px;
        }

        /* Form input label */
        .form-label {
            display: block;
            margin-bottom: 5px;
        }

        /* Form inputs */
        .form-input {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        /* Submit button */
        .submit-btn {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
        }

        /* Change submit button color on hover */
        .submit-btn:hover {
            background-color: #45a049;
        }
    </style>
</head>

<body>

<div class="form-container">
  <h2 class="form-title">User Form</h2>
  <form action="/submit_user" method="post">
    @csrf <!-- Add CSRF token for security -->
    <label for="id" class="form-label">ID:</label>
    <input type="number" id="id" name="id" class="form-input" required>

    <label for="name" class="form-label">Name:</label>
    <input type="text" id="name" name="name" class="form-input" required>

    <label for="email" class="form-label">Email:</label>
    <input type="email" id="email" name="email" class="form-input" required>

    <label for="password" class="form-label">Password:</label>
    <input type="password" id="password" name="password" class="form-input" required>

    <label for="mobile" class="form-label">Mobile:</label>
    <input type="tel" id="mobile" name="mobile" class="form-input" required>

    <label for="role_id" class="form-label">Role ID:</label>
    <input type="number" id="role_id" name="role_id" class="form-input" required>

    <input type="submit" value="Submit" class="submit-btn">
  </form>
</div>

</body>
@endsection
