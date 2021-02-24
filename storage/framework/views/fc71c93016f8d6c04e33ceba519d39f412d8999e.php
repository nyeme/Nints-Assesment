<!doctype html>
<html lang="en">
 <head>
 <!-- Required meta tags -->
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">

 <!-- CoreUI CSS -->
 <link rel="stylesheet" href="https://unpkg.com/@coreui/coreui/dist/css/coreui.min.css" crossorigin="anonymous">
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

 <title>Home Page</title>
 </head>
 <body >
 <?php echo $__env->make('partials.menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<header> 
 <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">SuperFreighters</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarScroll">
      <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About Us</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Services
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Contact Us</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
</header>


    <div class="container"> 
    <div class="jumbotron"> 
    <form class="row g-4" method = "post" action="<?php echo e(url('/add-price')); ?>">
    <?php echo e(csrf_field()); ?>

    <div class="col-10">
        <label for="inputeName" class="form-label">Fullname</label>
        <input type="name" name='uname' class="form-control" id="inputName" placeholder="Please input Fullname">
  </div>
  <div class="col-10">
    <label for="inputEmail4" class="form-label">Email</label>
    <input type="email" name='uemail' class="form-control" id="inputEmail4" placeholder="Please input Email">
  </div>
  <div class="col-10">
    <label for="inputAddress" class="form-label">Address</label>
    <input type="text" name='uaddress' class="form-control" id="inputAddress" placeholder="Please input address">
  </div>
  <div class="col-md-4">
    <label for="inputMode" class="form-label">Mode of Transportation</label>
    <select name='shipment_id' id="inputMode" class="form-select">
      <?php $__currentLoopData = $shipments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $shipment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <option value="<?php echo e($shipment->id); ?>"><?php echo e($shipment->mode_of_ship); ?></option>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select>
  </div>
  <div class="col-md-3">
    <label for="inputCountry" class="form-label">Country</label>
    <select name='location_id' id="inputCountry" class="form-select">
      <?php $__currentLoopData = $locations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $location): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <option value="<?php echo e($location->id); ?>"><?php echo e($location->location); ?></option>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </select>
  </div>
  <div class="col-md-3">
    <label for="inputWeight" class="form-label">Weight (Kg)</label>
    <input type="text" name ='weight' class="form-control" id="inputWeight" placeholder="Please input cargo weight">
  </div>
  <div class="col-12">
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary"> </a>Submit</button>
  </div>
</form>
</div>
</div>
</div>   
    
<!-- <a href="<?php echo e(url('/new2')); ?>"> -->
 </body>
</html><?php /**PATH C:\xampp\htdocs\laravel8\resources\views/test_home.blade.php ENDPATH**/ ?>