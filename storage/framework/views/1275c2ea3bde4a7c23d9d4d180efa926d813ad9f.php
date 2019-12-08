<?php $__env->startSection('title', 'Classificaçao'); ?>

<?php $__env->startSection('sidebar'); ?>
    
    <?php $__env->startSection('content'); ?>

    
    <table class="table table-hover table-striped table-bordered">

      <thead>
        <tr>
          <th class="campo2">Telefone</th>
          <th class="campo">nascimento</th>
          <th >Nome</th>
          <th >Mae</th>
          <th class="campo">Alterar</th>
          <th class="campo">Agendar</th>
          <th class="campo">Encaminhar</th>     
        </tr>
      </thead>

      <tbody>
      
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td><button type="button" onclick="alterar('alteracad.php?cod2=<?php echo 'cod' ?>')" class="btn btn-secondary btn-sm">Alterar</button></td>            
            <td><button type="button" onclick="agenda('classificar.php?cod2=<?php echo 'cod'?>')" class="btn btn-primary btn-sm">Agendar</button></td>
            <td><button type="button" onclick="classifica('encaminhar.php?cod2=<?php echo 'cod'?>')" class="btn btn-success btn-sm">Encaminhar</button></td>
        </tr>
        
        </tbody>

      </table>
    
  <?php $__env->stopSection(); ?>
<?php echo $__env->make('menus/menuclass', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\hospital_58\resources\views/pessoas.blade.php ENDPATH**/ ?>