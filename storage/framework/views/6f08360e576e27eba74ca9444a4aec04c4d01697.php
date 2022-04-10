
<?php $__env->startSection('content'); ?>
<div class="pull-left">
<h2>    Student Management System</h2>
</div>
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-right">
            <a href="<?php echo e(route('student.create')); ?>" class="btn btn-success">Add New Student</a>
        </div>
    </div>
    
</div>
<?php if($message=Session::get('success')): ?>
<div class="alert alert-success">
    <p><?php echo e($message); ?></P>
</div>
<?php endif; ?>

<table class="table table-bordered">
    <tr>
        <th>No</th>
        <th>FirstName</th>
        <th>LastName</th>
        <th>Email</th>
        <th>Phone</th>
    </tr>
    <?php $__currentLoopData = $students; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $student): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
        <td><?php echo e(++$i); ?></td>
        <td><?php echo e($student->firstname); ?></td>
        <td><?php echo e($student->lastname); ?></td>
        <td><?php echo e($student->email); ?></td>
        <td><?php echo e($student->phone); ?></td>
        <td>
            <form action="<?php echo e(route('student.destroy',$student->id)); ?>" method="POST">
<a href="<?php echo e(route('student.show',$student->id)); ?>" class="btn btn-info">show</a>
<a href="<?php echo e(route('student.edit',$student->id)); ?>" class="btn btn-primary">edit</a>
<?php echo csrf_field(); ?>
<?php echo method_field('DELETE'); ?>
<button class="btn btn-danger" type="submit">Delete</button>
</form>
        </td>
    </tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>
<?php echo $__env->make('students.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\asus\Downloads\hotel bookings\project\resources\views/students/index.blade.php ENDPATH**/ ?>