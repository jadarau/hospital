<HTML lang="pt-br">

<HEAD>
     <meta charset="utf-8"/>
     <title>Cadastro de Pacientes</title>
     <link rel="stylesheet" href="css/cadastro.css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
         <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
         <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
         <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
         <script src="{{ asset('http://parsleyjs.org/dist/parsley.js') }}"></script>

         <style type="text/css">

            #dois{display:none;}
            #tres{display:none;}

         </style>
         
</HEAD>

<body>

<script>

$(document).ready(function () {
     popula();
});

    function popula(){
    $.ajax({
            type: "get",
            url: "geografiapaises",
            data: { paises: paises },
            dataType: 'json',
            contentType: "application/json; charset=utf-8",
            success: function (obj) {
                if (obj != null) {
                    var data = obj.data;
                    var selectbox = $('#paises');
                    selectbox.find('option').remove();
                    $.each(data, function (key, value) {
                        $('<option>').val(value.cod).text(value.desc).appendTo(selectbox);
                    });
                }
            }
        });
    }

   function sociais(){
      document.getElementById('um').style.display="none";
      document.getElementById('tres').style.display="none";
      document.getElementById('dois').style.display="block";
   }
   function cadastro(){
      document.getElementById('dois').style.display="none";
      document.getElementById('tres').style.display="none";
      document.getElementById('um').style.display="block";
   }
   function esus(){
      document.getElementById('um').style.display="none";
      document.getElementById('dois').style.display="none";
      document.getElementById('tres').style.display="block";
   }

</script>

<div id="geral" style="background:#DCDCDC;">

   @if (session('status'))
      <div class="alert alert-success">
        {{ session('status') }}
      </div>
   @endif

<form method="post" id="cadpac" action="paciente/cadastro">

<div id="um">

@include('elements/abacad')

<div id="corpoform">
    
        <!-- <input type="hidden" name="_token" value="{{ csrf_token() }}"> -->
   @csrf   

      <div id="familiacab">

         <div id="q1">
         <div id="fc1">CNS do Cidadão</div>
         <div id="f0">
            <div class="form-inline">               
                  <input type="text" class="form-control" name="sus" style="width:92%;margin-left:4%">
            </div>
         </div>
         </div>

         <div id="q2">
         <div id="fc2">É o Responsável Familiar?</div>
         <div id="f1" >         
            <div style="background:none;margin-left:2%;width:80%" class="form-check form-check-inline">
               <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
               <label class="form-check-label" for="inlineRadio1">Sim</label>

               <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
               <label class="form-check-label" for="inlineRadio2">Não</label>
            </div>
         </div>
         </div>

         <div id="q3">
         <div id="fc3">CNS do Responsável Familiar</div>
         <div id="f2">         
            <div class="form-inline">               
                  <input type="text" class="form-control"  style="width:92%;margin-left:4%" name="cnsresp" >
            </div>
         </div>
         </div>

         <div id="q4">
         <div id="fc4">Microárea*</div>
         <div id="f3" style="text-align:left">
            <div id="micro" style="margin-left:7.5%;background:none;width:85%" class="form-inline">               
                  <input type="text" class="form-control" name="micro" style="width:100px">&nbsp;
                  <input type="checkbox" class="form-control" name="fa">&nbsp;
                  <label>FA</label>
            </div>         
         </div>
         </div>

      </div>      

      <div id="familia"></div>

      
       <div id="cima">

         <div id="foto"></div>

         <div id="peq">

            <input type="hidden"/>

            <div class="input-group mb-3">
               <div class="input-group-prepend">
                  <span class="input-group-text"  id="inform">CPF</span>
               </div>
                  <input type="text" class="form-control" name="cpf" >
            </div>

            <div class="input-group mb-3">
               <div class="input-group-prepend">
                  <span class="input-group-text" id="inform">Celular</span>
               </div>
                  <input type="text" class="form-control" name="celular">
            </div>

            <div class="input-group mb-3">
               <div class="input-group-prepend">
                  <span class="input-group-text" id="inform">Etnia*</span>
               </div>
                  <select class="form-control">
                     <option>Default select</option>
                  </select>
            </div>

         </div>

            <div class="input-group mb-3">
               <div class="input-group-prepend">
                  <span class="input-group-text" id="inform">Nome*</span>
               </div>
                  <input type="text" class="form-control" name="nome" required >
            </div>

            <div class="input-group mb-3">
               <div class="input-group-prepend">
                  <span class="input-group-text" id="inform">Pai*</span>
               </div>
                  <input type="text" class="form-control" name="pai" required >
            </div> 
         
            <div class="input-group mb-3">
               <div class="input-group-prepend">
                  <span class="input-group-text" id="inform">Endere.</span>
               </div>
                  <input type="text" class="form-control" name="ende">
            </div>

            <div class="input-group mb-3">
               <div class="input-group-prepend">
                  <span class="input-group-text" id="inform">UF</span>
               </div>
                  <select class="form-control">
                     <option>Default select</option>
                  </select>
            </div>

            

      </div>


      <div id="campos">          
       
         <div class="input-group mb-3">
               <div class="input-group-prepend">
                  <span class="input-group-text" id="inform">Sexo*</span>
               </div>
                        
                  <div style="background:none;width:78%;" class="form-check form-check-inline">
                     <input class="form-check-input" type="radio" name="masculino" id="inlineRadio1" value="option1">
                     <label class="form-check-label" for="inlineRadio1">Masculino</label>

                     <input class="form-check-input" type="radio" name="feminino" id="inlineRadio2" value="option2">
                     <label class="form-check-label" for="inlineRadio2">Feminino</label>
                  </div>               
         </div>

            <div class="input-group mb-3">
               <div class="input-group-prepend">
                  <span class="input-group-text" id="inform">Email</span>
               </div>
                  <input type="text" class="form-control" required name="email" >
            </div>
         
            <div class="input-group mb-3">
               <div class="input-group-prepend">
                  <span class="input-group-text" id="inform">Nasc.*</span>
               </div>
                  <input type="text" class="form-control" name="nasc">
            </div>

         
            <div class="input-group mb-3">
               <div class="input-group-prepend">
                  <span class="input-group-text" id="inform">Social</span>
               </div>
                  <input type="text" class="form-control" placeholder="Nome social" required name="social">
            </div> 

            <div class="input-group mb-3">
               <div class="input-group-prepend">
                  <span class="input-group-text" id="inform">Mãe*</span>
               </div>
                  <input type="text" class="form-control" required name="mae">
            </div> 

            <div class="input-group mb-3">
               <div class="input-group-prepend">
                  <span class="input-group-text" id="inform">Nº CEP</span>
               </div>
                  <input type="text" class="form-control" name="cep">
            </div>
            
            <div class="input-group mb-3">
               <div class="input-group-prepend">
                  <span class="input-group-text" id="inform">Cidade</span>
               </div>
                  <select class="form-control">
                     <option>Default select</option>
                  </select>
            </div>         
            
            <div class="input-group mb-3">
               <div class="input-group-prepend">
                  <span class="input-group-text" id="inform">Bairro</span>
               </div>
                  <select class="form-control">
                     <option>Default select</option>
                  </select>
            </div>

      </div> 
      
      <div id="unidaderef">

         <select required class="form-control">
            <option selected disabled>Selecione a Unidade de Referência do Paciente*</option>
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
               <button class="btn btn-dark btn-col-auto" id="salvar" onclick="window.location.href = 'buscapac'" name="bt1" type="button">Limpar</button>               
            </div>
         </div>
      <!--<div>-->    
</div>

</div>


<div id="dois">
@include('elements/abacad2')

<div id="corpoform2" style="background:black;">
    
         <div id="cima2" style="background:#DCDCDC;">
 
            <div class="input-group mb-3">
               <div class="input-group-prepend">
                  <span class="input-group-text"  id="inform2">RG</span>
               </div>
                  <input type="text" class="form-control" name="rg" >
            </div>

            <div class="input-group mb-3">
               <div class="input-group-prepend">
                  <span class="input-group-text" id="inform2">CNH</span>
               </div>
                  <input type="text" class="form-control" name="cnh">
            </div>

            <div class="input-group mb-3">
               <div class="input-group-prepend">
                  <span class="input-group-text" id="inform2">Nacionalidade*</span>
               </div>
                  <select class="form-control">
                     <option>Default select</option>
                  </select>
            </div>


         <div class="input-group mb-3">
               <div class="input-group-prepend">
                  <span class="input-group-text" id="inform2">Data naturalização*</span>
               </div>
                  <input type="text" class="form-control" name="natura" required >
            </div>
         
            <div class="input-group mb-3">
               <div class="input-group-prepend">
                  <span class="input-group-text" id="inform2">UF de Nascimento*</span>
               </div>
                  <select class="form-control">
                     <option>Default select</option>
                  </select>
            </div>

            <div class="input-group mb-3">
               <div class="input-group-prepend">
                  <span class="input-group-text" id="inform2">Data de Entrada</span>
               </div>
                  <input type="text" class="form-control" name="cidade">
            </div>

      </div>


      <div id="campos2" style="background:#DCDCDC;">
          
       
         <div class="input-group mb-3">
               <div class="input-group-prepend">
                  <span class="input-group-text" id="inform2">NIS (PIS/PASEP)</span>
               </div>
                  <input type="text" class="form-control" name="nis">
         </div>

         <div class="input-group mb-3">
               <div class="input-group-prepend">
                  <span class="input-group-text" id="inform2">Passaport</span>
               </div>
                  <input type="text" class="form-control" required name="passaport" >
            </div>
         
            <div class="input-group mb-3">
               <div class="input-group-prepend">
                  <span class="input-group-text" id="inform2">País nascimento*</span>
               </div>
                  <select class="form-control" id="paises">
                     <option>Default select</option>
                  </select>
            </div>

         
            <div class="input-group mb-3">
               <div class="input-group-prepend">
                  <span class="input-group-text" id="inform2">Portaria Natural.*</span>
               </div>
                  <input type="text" class="form-control" required name="mae">
            </div> 
            <div class="input-group mb-3">
               <div class="input-group-prepend">
                  <span class="input-group-text" id="inform2">Munic. Nascimento*</span>
               </div>
                  <select class="form-control">
                     <option>Default select</option>
                  </select>
            </div>
            
            <div class="input-group mb-3">
               <div class="input-group-prepend">
                  <span class="input-group-text" id="inform2">Bairro</span>
               </div>
                  <input type="text" class="form-control" name="bairro">
            </div>                       

      </div> 
      
         

</div>

</div>


<div id="tres">
@include('elements/abacad3')

<div id="e-sus">
e-sus
</div>

</div>

</form>

</div>
   
</body>

</HTML>
