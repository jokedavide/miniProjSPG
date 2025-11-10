

<?php $__env->startSection('content'); ?>
<div class="container">
    <h1>Customers</h1>
    <a href="<?php echo e(route('customers.create')); ?>" class="btn btn-primary mb-3">Add Customer</a>

    <?php if(session('success')): ?>
        <div class="alert alert-success"><?php echo e(session('success')); ?></div>
    <?php endif; ?>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $customers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $customer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($customer->name); ?></td>
                <td><?php echo e($customer->email); ?></td>
                <td><?php echo e($customer->phone); ?></td>
                <td><?php echo e($customer->address); ?></td>
                <td>
                    <a href="<?php echo e(route('customers.edit', $customer->id)); ?>" class="btn btn-sm btn-primary">Edit</a>
                    <form action="<?php echo e(route('customers.destroy', $customer->id)); ?>" method="POST" style="display:inline;">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>
                        <button class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                    </form>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>

    <?php echo e($customers->links()); ?>

</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\ecommerce\resources\views/customers/index.blade.php ENDPATH**/ ?>