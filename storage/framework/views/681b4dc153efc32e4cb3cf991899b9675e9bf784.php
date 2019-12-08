<?php $__env->startSection('title', 'Classificaçao'); ?>

<?php $__env->startSection('sidebar'); ?>
    ##parent-placeholder-19bd1503d9bad449304cc6b4e977b74bac6cc771##

    <?php echo $__env->make('menus/menuclass', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<table class="table table-hover table-striped table-bordered">

      <thead>
        <tr>
          <th class="campo2">Telefone</th>
          <th class="campo">nascimento</th>
          <th >Nome</th>
          <th >Mae</th>
          <th class="campo">Alterar</th>
          <th class="campo">Ficha</th>
          <th class="campo">Sistema</th>     
        </tr>
      </thead>

      <tbody>
      <!--Inserir resultado da busca -->
      <?php if($pacientes): ?>
        <?php $__currentLoopData = $pacientes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $paciente): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($paciente->tel); ?></td>
            <td><?php echo e($paciente->nasc); ?></td>
            <td><?php echo e($paciente->nome); ?></td>
            <td><?php echo e($paciente->mae); ?></td>
            <td><button type="button" onclick="alterar('alteracad.php?cod2=<?php echo 'cod' ?>')" class="btn btn-secondary btn-sm">Alterar</button></td>            
            <td><button type="button" onclick="agenda('classificar.php?cod2=<?php echo 'cod'?>')" class="btn btn-primary btn-sm">Imprimir</button></td>
            <td><button type="button" onclick="classifica('encaminhar.php?cod2=<?php echo 'cod'?>')" class="btn btn-success btn-sm">Encaminhar</button></td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      <?php endif; ?>      
       
      </tbody>

      </table>
    
<?php $__env->stopSection(); ?>   
<?php echo $__env->make('templates/master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\modelo\resources\views/templates/classificacao.blade.php ENDPATH**/ ?>