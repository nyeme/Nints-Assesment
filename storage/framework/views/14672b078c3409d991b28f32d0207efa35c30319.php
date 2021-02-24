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

    <h3>Details</h3>
    
    <table class="table">
    <form class="row g-4" method = "post" action="<?php echo e(url('/paypal')); ?>">
  <?php echo e(csrf_field()); ?>

  <thead>
    <tr>
      <th scope="col">id number</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Address</th>
      <th scope="col">Mode of shipment Amount</th>
      <th scope="col">location tarif</th>
      <th scope="col">weight Amount</th>
      <th scope="col">Total Cost + tax</th>
    </tr>

    
  </thead>
  <tbody>
  <?php $__currentLoopData = $details; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $detail): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
      <th scope="row"><?php echo e($detail->id); ?></th>
      <td><?php echo e($detail->uname); ?></td>
      <td><?php echo e($detail->uemail); ?></td>
      <td><?php echo e($detail->uaddress); ?></td>
      <td>Naira <?php echo e($detail->shipment->price); ?></td>
      <td>Naira <?php echo e($detail->location->tarrif); ?></td>
      <td>Naira <?php echo e($detail->weight*10); ?></td>
      <td>Naira <?php echo e((($detail->weight*10)+$detail->location->tarrif+$detail->shipment->price)*10); ?></td>
      </td>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>   
  </tbody>
</table>

<div class="col-12">
    <button type="submit" class="btn btn-primary"> </a>Pay</button>
  </div>
  </div>
</form>
</div>
</div>
</div>   
    
  </form>
 </body>
</html><?php /**PATH C:\xampp\htdocs\laravel8\resources\views/total/amount.blade.php ENDPATH**/ ?>