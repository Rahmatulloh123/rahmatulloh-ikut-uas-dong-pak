<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>dashboard</title>
</head>
<style>
    
body {
    font-family: 'Segoe UI', sans-serif;
    margin: 0;
    padding: 0;
    background-image: url(https://t4.ftcdn.net/jpg/02/18/89/83/360_F_218898398_wnLuoR9GY4qhLB2tc7o3tSJbQCRfq0xc.jpg); /* Background image */
}

/* Styles for section */
.section {
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    background-color: rgba(231, 238, 231, 0.983); /* Background color */
}

/* Styles for circle image */
.circle-img {
    width: 150px;
    height: 150px;
    border-radius: 50%;
    object-fit: cover;
    border: 5px solid #ffffff; /* Border color */
    box-shadow: 0 0 20px rgba(250, 248, 248, 0.1); /* Image shadow */
}

/* Styles for heading */
h1 {
    color: #fcfdfe; /* Heading color */
}
h3 {
    color: #fcfdfe; /* Heading color */
}


/* Styles for buttons */
.btn-primary {
    background-color: #007bff; /* Button background color */
    border-color: #007bff; /* Button border color */
    color: #ffffff; /* Button text color */
}

.btn-primary:hover {
    background-color: #13beee; /* Button background color on hover */
    border-color: #09b2ef; /* Button border color on hover */
}

        
</style>
<body>

    <section class="vh-100" style="background-image: url(https://t4.ftcdn.net/jpg/02/18/89/83/360_F_218898398_wnLuoR9GY4qhLB2tc7o3tSJbQCRfq0xc.jpg)">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card-body p-5 text-center">
                        <div class="profile-picture mb-4">
                        </div>
                        <h1 class="mb-3"><?php echo e(Auth::user()->name); ?></h1>
                        <h3 class="mb-5"><?php echo e(Auth::user()->email); ?></h3>
                        <a href="<?php echo e(route('logout')); ?>" class="btn btn-primary btn-lg btn-block px-5">Logout</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    











<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>
<?php /**PATH C:\xampp\htdocs\uas-laravel-2157401077\resources\views/auth/dashboard.blade.php ENDPATH**/ ?>