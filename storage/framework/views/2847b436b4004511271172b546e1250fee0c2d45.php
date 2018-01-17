<?php $__env->startSection('title','登录'); ?>

<?php $__env->startSection('content'); ?>
  <p>这是登录</p>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('my-js'); ?>
    <script>
        alert('js');
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>