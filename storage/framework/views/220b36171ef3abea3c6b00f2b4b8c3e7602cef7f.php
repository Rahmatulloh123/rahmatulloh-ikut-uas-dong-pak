<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>


<section>
<div class="px-4 py-5 px-md-5 text-center text-lg-start" style="background-color: hsl(0, 0%, 96%)">
<div class="container">

<h2 class="fw-bold mb-2 text-uppercase">Register</h2>


<form method="post">

<?php echo csrf_field(); ?>

<!-- Nama -->
<div class="form-outline mb-4">
  <label class="form-label" for="name">Nama</label>
    <input type="name" name="name" id="name" class="form-control" />
  </div>

  <!-- Email input -->
  <div class="form-outline mb-4">
  <label class="form-label" for="email">Email address</label>
    <input type="email" name="email" id="email" class="form-control" />
  </div>

  <!-- Password input -->
  <div class="form-outline mb-4">
  <label class="form-label" for="password">Password</label>
    <input type="password" name="password" id="password" class="form-control" />
  </div>

  <button class="btn btn-primary btn-lg px-5" type="submit">Register</button>
    <a href="/" class="btn btn-primary btn-lg px-5">Kembali</a>
</div>
</div>
 
</section>
  
</form>
<?php /**PATH D:\uas-laravel-2157401093\resources\views/auth/register.blade.php ENDPATH**/ ?>