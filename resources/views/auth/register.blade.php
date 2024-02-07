<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>register</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background-image: url(https://t4.ftcdn.net/jpg/02/18/89/83/360_F_218898398_wnLuoR9GY4qhLB2tc7o3tSJbQCRfq0xc.jpg);
            padding-top: 50px;
        }

        .container {
            max-width: 400px;
            margin: 0 auto;
        }

        h2 {
            font-size: 2rem;
            margin-bottom: 20px;
            color: #343a40;
            text-transform: uppercase;
            font-weight: bold;
        }

        .form-label {
            color: #495057;
            font-weight: bold;
        }

        .form-control {
            border-radius: 20px;
            border: 1px solid #ced4da;
            padding: 10px;
        }

        .btn {
            border-radius: 20px;
            padding: 10px 20px;
            width: 100%;
            margin-top: 20px;
            transition: all 0.3s ease;
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
            color: #ffffff;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }

        .btn-secondary {
            background-color: #6c757d;
            border-color: #6c757d;
            color: #ffffff;
        }

        .btn-secondary:hover {
            background-color: #5a6268;
            border-color: #545b62;
        }
    </style>
</head>
<body>

<section>
    <div class="container">
        <div class="px-4 py-5 px-md-5 text-center text-lg-start" style="background-color: #ffffff; border-radius: 20px; box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);">
            <h2 class="fw-bold mb-2">Register</h2>

            <form method="post">
                @csrf

                <div class="form-outline mb-4">
                    <label class="form-label" for="name">Nama</label>
                    <input type="name" name="name" id="name" class="form-control" />
                </div>

                <div class="form-outline mb-4">
                    <label class="form-label" for="email">Email address</label>
                    <input type="email" name="email" id="email" class="form-control" />
                </div>

                <div class="form-outline mb-4">
                    <label class="form-label" for="password">Password</label>
                    <input type="password" name="password" id="password" class="form-control" />
                </div>

                <button class="btn btn-primary btn-lg" type="submit">Register</button>
                <a href="/" class="btn btn-secondary btn-lg">Kembali</a>
            </form>
        </div>
    </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>
