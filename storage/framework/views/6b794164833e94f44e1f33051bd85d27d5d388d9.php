


<?php $__env->startSection('content'); ?>
   
<table class="table">
    <form class="row g-4" method = "post" action="<?php echo e(url('/paypal')); ?>">
  <?php echo e(csrf_field()); ?>

  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Address</th>
      <th scope="col">Mode of shipment Amount</th>
      <th scope="col">location tarif</th>
      <th scope="col">weight Amount</th>
    </tr>

    
  </thead>
  <tbody>
  <?php $__currentLoopData = $details; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $detail): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
      <th scope="row"><?php echo e($detail->id); ?></th>
      <td><?php echo e($detail->uname); ?></td>
      <td><?php echo e($detail->uemail); ?></td>
      <td><?php echo e($detail->uaddress); ?></td>
      <td><?php echo e($detail->shipment->price); ?></td>
      <td><?php echo e($detail->location->tarrif); ?></td>
      <td><?php echo e($detail->weight*10); ?></td>
      </td>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>   
  </tbody>
</table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel8\resources\views/search.blade.php ENDPATH**/ ?>