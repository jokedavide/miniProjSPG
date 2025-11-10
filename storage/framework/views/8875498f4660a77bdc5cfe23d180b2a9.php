<?php $__env->startSection('content'); ?>
<div class="container">
    <h1>Dashboard</h1>
    <p>Welcome, <?php echo e(auth()->user()->name); ?>!</p>
    <div class="list-group">
        <a href="<?php echo e(route('products.index')); ?>" class="list-group-item list-group-item-action">Manage Products</a>
        <a href="<?php echo e(route('customers.index')); ?>" class="list-group-item list-group-item-action">Manage Customers</a>
        <a href="<?php echo e(route('orders.index')); ?>" class="list-group-item list-group-item-action">Manage Orders</a>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\ecommerce\resources\views/dashboard.blade.php ENDPATH**/ ?>