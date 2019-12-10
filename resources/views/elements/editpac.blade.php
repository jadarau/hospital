<HTML lang="pt-br">

<HEAD>
     <meta charset="utf-8"/>
     <title>Cadastro de Pacientes</title>

</HEAD>

<body>


<div id="corpoform">
    <form method="post" action="paciente/cadastro">

        <input type="hidden" name="_token" value="{{ csrf_token() }}">
  
    
          <div id="cima">

         <div id="foto"></div>

         <div id="peq">

            <input type="hidden"/>

            <div class="input-group mb-3">
               <div class="input-group-prepend">
                  <span class="input-group-text"  id="inform">SUS</span>
               </div>
                  <input type="text" value="{{$pessoas->sus}}" class="form-control" name="sus" >
            </div>

            <div class="input-group mb-3">
               <div class="input-group-prepend">
                  <span class="input-group-text" id="inform">RG</span>
               </div>
                  <input type="text" class="form-control" name="rg">
            </div>

            <div class="input-group mb-3">
               <div class="input-group-prepend">
                  <span class="input-group-text" id="inform">Telefone</span>
               </div>
                  <input type="text" class="form-control" value="{{$pessoas->tel}}" name="tel" >
            </div>

         </div>

         <div class="input-group mb-3">
               <div class="input-group-prepend">
                  <span class="input-group-text" id="inform">Nome</span>
               </div>
                  <input type="text" class="form-control" value="{{$pessoas->nome}}" name="nome">
            </div>
         
            <div class="input-group mb-3">
               <div class="input-group-prepend">
                  <span class="input-group-text" id="inform">Endere.</span>
               </div>
                  <input type="text" class="form-control" value="{{$pessoas->ende}}" name="ende">
            </div>

            <div class="input-group mb-3">
               <div class="input-group-prepend">
                  <span class="input-group-text" id="inform">Cidade</span>
               </div>
                  <input type="text" class="form-control" value="{{$pessoas->cidade}}" name="cidade">
            </div>

      </div>


      <div id="campos">
          
       
         <div class="input-group mb-3">
               <div class="input-group-prepend">
                  <span class="input-group-text" id="inform">CPF</span>
               </div>
                  <input type="text" class="form-control" value="{{$pessoas->cpf}}" name="cpf">
         </div>

         <div class="input-group mb-3">
               <div class="input-group-prepend">
                  <span class="input-group-text" id="inform">Nasc.</span>
               </div>
                  <input type="text" class="form-control" value="{{$pessoas->nasc}}" name="nasc" >
            </div>
         
            <div class="input-group mb-3">
               <div class="input-group-prepend">
                  <span class="input-group-text" id="inform">Tel. 2</span>
               </div>
                  <input type="text" class="form-control">
            </div>

         
            <div class="input-group mb-3">
               <div class="input-group-prepend">
                  <span class="input-group-text" id="inform">Mãe</span>
               </div>
                  <input type="text" class="form-control" value="{{$pessoas->mae}}" name="mae">
            </div> 
            <div class="input-group mb-3">
               <div class="input-group-prepend">
                  <span class="input-group-text" id="inform">Nº CEP</span>
               </div>
                  <input type="text" class="form-control" value="{{$pessoas->cep}}" name="cep">
            </div>
            
            <div class="input-group mb-3">
               <div class="input-group-prepend">
                  <span class="input-group-text" id="inform">Bairro</span>
               </div>
                  <input type="text" class="form-control" value="{{$pessoas->bairro}}" name="bairro">
            </div>                       

      </div> 
      
      <div id="unidaderef">

         <select required class="form-control">
            <option selected disabled>Selecione a Unidade de Referência do Paciente</option>
            <option>UNIDADE 1</option>
            <option>UNIDADE 2</option>
            <option>UNIDADE 3</option>
            <option>UNIDADE 4</option>
            <option>UNIDADE 5</option>
         </select>

      </div>


      <!--<div id="botao2">-->

         <div id="alinhabt">
            <div class="btn-group" id="botao">
               <button class="btn btn-primary" id="salvar" name="bt1" type="submit" value="Salvar">Salvar</button>
               <button class="btn btn-dark btn-col-auto" id="salvar" onclick="window.location.href = 'buscapac'" name="bt1" type="button">Voltar</button>               
            </div>
         </div>
      <!--<div>-->

    </form>
</div>

</body>

</HTML>