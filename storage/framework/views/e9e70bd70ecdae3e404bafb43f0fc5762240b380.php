<?php $__env->startSection('title', 'Resultado'); ?>

<?php $__env->startSection('sidebar'); ?>
    ##parent-placeholder-19bd1503d9bad449304cc6b4e977b74bac6cc771##

    <?php echo $__env->make('menus/menuclass', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<table class="table table-hover table-striped table-bordered">

      <thead>
        <tr>
          <th class="campo2">Telefone</th>
          <th class="campo">Nascimento</th>
          <th >Nome</th>
          <th >Mae</th>
          <th class="campo">Hora</th>
          <th class="campo">Agendar</th>
          <th class="campo">Encaminhar</th>     
        </tr>
      </thead>

      <tbody>

      <?php if($pacientes): ?>
        <?php $__currentLoopData = $pacientes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $paciente): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($paciente->tel); ?></td>
            <td><?php echo e($paciente->nasc); ?></td>
            <td><?php echo e($paciente->nome); ?></td>
            <td><?php echo e($paciente->mae); ?></td>
            <td>12:00</td>            
            <td><button type="button" onclick="agenda('classificar.php?cod2=<?php echo 'cod'?>')" class="btn btn-primary btn-sm">Agendar</button></td>
            <td><button type="button" onclick="classifica('encaminhar.php?cod2=<?php echo 'cod'?>')" class="btn btn-success btn-sm">Encaminhar</button></td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      <?php endif; ?>      
        </tbody>

      </table>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('templates/master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\modelo\resources\views/templates/resultado.blade.php ENDPATH**/ ?>