<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
    <style>
        /* Styles for body */
        body {
            font-family: 'Segoe UI', sans-serif;
            margin: 0;
            padding: 0;
            background-image: url(https://t4.ftcdn.net/jpg/02/18/89/83/360_F_218898398_wnLuoR9GY4qhLB2tc7o3tSJbQCRfq0xc.jpg); /* Background image */
            background-size: cover; /* Background image cover */
            background-position: center; /* Background image position */
        }

        /* Styles for section */
        .section {
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: rgba(0, 0, 0, 0.5); /* Background color with transparency */
        }
        /* Styles for circle image */
        .circle-img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: cover;
            border: 5px solid #ffffff; /* Border color */
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.3); /* Image shadow */
        }

        /* Styles for heading */
        h3 {
            color: #f0f4f8; /* Heading color */
            margin-bottom: 20px; /* Bottom margin */
        }
        h2 {
            color: #f0f4f8; /* Heading color */
            margin-bottom: 20px; /* Bottom margin */
        }

        /* Styles for buttons */
        .btn-primary {
            background-color: #007bff; /* Button background color */
            border-color: #007bff; /* Button border color */
            color: #ffffff; /* Button text color */
            border-radius: 20px; /* Button border radius */
            padding: 10px; /* Button padding */
            margin-top: 20px; /* Top margin */
            width: 100%; /* Button width */
            transition: background-color 0.3s ease; /* Button hover transition */
        }

        .btn-primary:hover {
            background-color: #0056b3; /* Button background color on hover */
            border-color: #0056b3; /* Button border color on hover */
        }
    </style>
</head>
<body>

<section class="vh-100">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                <div class="card-body p-5 text-center">
                    <img src="https://i.ibb.co/SxjJ73r/Whats-App-Image-2024-02-05-at-22-28-37.jpg" alt="Foto Profil" class="circle-img mb-5">
                    <h3 class="mb-5">SELAMAT DATANG</h3>
                    <h2><marquee>RAHMATULLOH_MI21A</marquee></h2>
                    <a href="/register" class="btn btn-primary btn-lg px-5">Register</a>
                    <a href="/login" class="btn btn-primary btn-lg px-5">Login</a>
                </div>
            </div>
        </div>
    </div>
</section>

</body>
</html>
