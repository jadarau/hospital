<?php echo $__env->make('menus/componentes/superior', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->startSection('title', 'Enfermaria'); ?>

<?php echo $__env->make('menus/componentes/meio', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

      <?php echo $__env->make('elements/openferma', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php echo $__env->make('menus/componentes/meiodois', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <?php echo $__env->yieldContent('content'); ?>

<?php echo $__env->make('menus/componentes/inferior', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php /**PATH C:\xampp\htdocs\hospital_58\resources\views/menus/menuenferma.blade.php ENDPATH**/ ?>