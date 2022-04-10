
<?php $__env->startSection('content'); ?>
<div class="row" style="margin-left:500px;margin-top:100px">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Edit Student Data</h2>
        </div>
        <div class="pull-right">
            <a href="<?php echo e(route('student.index')); ?>" class="btn btn-primary">Back</a>
        </div>
    </div>
</div>


<form action="<?php echo e(route('student.update',$student->id)); ?>"  method="post" enctype="multipart/form-data" style="margin-left:500px;margin-top:10px;width:300px;">
    <?php echo csrf_field(); ?>
    <?php echo method_field('PUT'); ?>
    <div class="row">

    <div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
    <strong>FirstName:</strong>
    <input type="text" name="firstname" class="form-control" placeholder="firstname" value='<?php echo e($student->firstname); ?>'>
</div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
    <strong>LasttName:</strong>
    <input type="text" name="lastname" class="form-control" placeholder="lasttname" value='<?php echo e($student->lastname); ?>'>
</div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
    <strong>Email:</strong>
    <input type="text" name="email" class="form-control" placeholder="email" value='<?php echo e($student->email); ?>'>
</div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
    <strong>Phone:</strong>
    <input type="text" name="phone" class="form-control" placeholder="phone" value='<?php echo e($student->phone); ?>'>
</div>
</div>
</div>
<button type="submit" class="btn btn-primary">Submit</button>
</form>
<?php echo $__env->make('students.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\HP\Desktop\larvel_project\project\resources\views/students/edit.blade.php ENDPATH**/ ?>