<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background-image : url(https://t4.ftcdn.net/jpg/02/18/89/83/360_F_218898398_wnLuoR9GY4qhLB2tc7o3tSJbQCRfq0xc.jpg);/* Background color */
            padding-top: 50px; /* Top padding */
        }

        .container {
            max-width: 400px; /* Max width for the container */
            margin: 0 auto; /* Center the container */
        }

        h2 {
            font-size: 2rem; /* Heading font size */
            margin-bottom: 20px; /* Bottom margin */
            color: #343a40; /* Heading color */
            text-transform: uppercase; /* Uppercase text */
            font-weight: bold; /* Bold font weight */
        }

        .form-label {
            color: #495057; /* Label color */
        }

        .form-control {
            border-radius: 20px; /* Border radius */
        }

        .btn-primary {
            background-color: #007bff; /* Button background color */
            border-color: #007bff; /* Button border color */
            color: #ffffff; /* Button text color */
            border-radius: 20px; /* Button border radius */
            padding: 10px 20px; /* Button padding */
            margin-top: 20px; /* Top margin */
            width: 100%; /* Button width */
        }

        .btn-primary:hover {
            background-color: #0056b3; /* Button background color on hover */
            border-color: #0056b3; /* Button border color on hover */
        }

        .btn-secondary {
            background-color: #6c757d; /* Secondary button background color */
            border-color: #6c757d; /* Secondary button border color */
            color: #ffffff; /* Secondary button text color */
            border-radius: 20px; /* Secondary button border radius */
            padding: 10px 20px; /* Secondary button padding */
            margin-top: 10px; /* Top margin */
            width: 100%; /* Secondary button width */
        }

        .btn-secondary:hover {
            background-color: #5a6268; /* Secondary button background color on hover */
            border-color: #545b62; /* Secondary button border color on hover */
        }
    </style>
</head>
<body>

<section>
    <div class="container">
        <div class="px-4 py-5 px-md-5 text-center text-lg-start" style="background-color: #ffffff; border-radius: 20px; box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);">
            <h2 class="fw-bold mb-2">Login</h2>

            @if (session()->has('error'))
                <h5 class="text-danger">{{ session('error') }}</h5>
            @endif

            @if (session()->has('success'))
                <h5 class="text-success">{{ session('success') }}</h5>
            @endif

            <form method="post">

                @csrf

                <div class="form-outline mb-4">
                    <label class="form-label" for="email">Email address</label>
                    <input type="email" name="email" id="email" class="form-control" />
                </div>

                <div class="form-outline mb-4">
                    <label class="form-label" for="password">Password</label>
                    <input type="password" name="password" id="password" class="form-control" />
                </div>

                <button class="btn btn-primary btn-lg" type="submit">Login</button>
                <a href="/" class="btn btn-secondary btn-lg">Kembali</a>
            </form>
        </div>
    </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>


