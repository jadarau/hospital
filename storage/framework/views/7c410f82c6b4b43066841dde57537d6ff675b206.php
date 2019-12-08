<!-- Nav Item - Dashboard -->
<!-- Nav Item - Pages Collapse Menu -->
<?php echo $__env->make('menus/componentes/configuracoes', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
<div class="sidebar-heading">
        Opções
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
          <i class="fas fa-fw fa-folder"></i>
          <span>Menu</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h5 class="collapse-header">Módulos do Sistema:</h5>
            <a class="collapse-item" href="recepcao">Recepção</a>
            <a class="collapse-item" href="classificacao">Classificação</a>            
            <a class="collapse-item" href="atendimento">Atendimento</a>
            <a class="collapse-item" href="internacao">Internação</a>            
            <a class="collapse-item" href="laboratorio">Laboratório</a>  
            <div class="collapse-divider"></div>
            <h6 class="collapse-header">Telas:</h6>
            <a class="collapse-item" href="busca">Pacientes</a>
            <a class="collapse-item" href="profissional">Profissionais</a>
            <a class="collapse-item" href="enfermaria">Enfermarias</a>
            <a class="collapse-item" href="leito">Leitos</a>
          </div>
        </div>
      </li>

      <!-- Nav Item - Charts -->
      <li class="nav-item">
        <a class="nav-link" href="#" onClick="window.open('www.google.com');return:false;">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Usuário</span></a>
      </li>

      <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link" href="tables.html">
          <i class="fas fa-fw fa-table"></i>
          <span>Comunicação</span></a>
      </li><?php /**PATH C:\xampp\htdocs\modelo\resources\views/elements/opinicio.blade.php ENDPATH**/ ?>