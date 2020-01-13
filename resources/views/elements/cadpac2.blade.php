<HTML lang="pt-br">

<HEAD>
     <meta charset="utf-8"/>
     <title>Cadastro de Pacientes</title>     
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
     <script src="{{asset('https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js')}}"></script>
         <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
         <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
         <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
         <script src="{{ asset('http://parsleyjs.org/dist/parsley.js') }}"></script>

         <style type="text/css">
            
            #dois{display:none;}
            #tres{display:none;}

         </style>
         <meta name="_token" content="{{ csrf_token() }}" />
</HEAD>

<body>

<script>
 
$(document).ready(function () {
   $.ajaxSetup({
         headers: {
            'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
         }
   });

   $('#paises').on('change', function(){          
      var paises =  $(this).val();  
      var _token = $('input[name="_token"]').val();
      // var dependent = $(this).data('dependent');
      $.ajax({     
            type: "POST",
            url: "{{ route('uf') }}",
            data: JSON.stringify({ paises: paises, _token: _token }),
            dataType: "json",
            contentType: "application/json; charset=utf-8",
            success: function (estados) {                     
                    var selectbox = $('#ufnasc');
                    selectbox.find('option').remove();
                    $('<option>').val('').text('Selecione o Estado').appendTo(selectbox);
                        $.each(estados, function (i, d) {
                           $('<option>').val(d.codigo).text(d.uf).appendTo(selectbox);
                        });                
            }
     });   
   });
});
        
   function sociais(){
      $('#um').hide();
      $('#tres').hide();
      $('#dois').show();
      // document.getElementById('um').style.display="none";
      // document.getElementById('tres').style.display="none";
      document.getElementById('dois').style.background="#DCDCDC";
      document.getElementById('dois').style.height="475px";
      // document.getElementById('cima2').style.height="340px";
      // document.getElementById('campos2').style.height="340px";      
      // document.getElementById('campos2').style.background="blue";
   }
   function cadastro(){
      $('#um').show();
      $('#tres').hide();
      $('#dois').hide();
      // document.getElementById('dois').style.display="none";
      // document.getElementById('tres').style.display="none";
      // document.getElementById('um').style.display="block";
   }
   function esus(){
      $('#um').hide();
      $('#tres').show();
      $('#dois').hide();
      // document.getElementById('um').style.display="none";
      // document.getElementById('dois').style.display="none";
      // document.getElementById('tres').style.display="block";
      document.getElementById('tres').style.height="500px";
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

      <div id="familiacab" style="border:solid 1px;border-radius:10px;height:80px">

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

            <div class="input-group mb-3" >
               <div class="input-group-prepend">
                  <span class="input-group-text" id="inform">Nasc.*</span>
               </div>
                  <input type="text" class="form-control" name="nasc">
            </div>            

         </div>

            <div class="input-group mb-3" style="margin-left:2px;width:99%">
               <div class="input-group-prepend">
                  <span class="input-group-text" id="inform">Nome*</span>
               </div>
                  <input type="text" class="form-control" name="nome" required >
            </div>

            <div class="input-group mb-3" style="margin-left:2px;width:99%">
               <div class="input-group-prepend">
                  <span class="input-group-text" id="inform">Pai*</span>
               </div>
                  <input type="text" class="form-control" name="pai" required >
            </div> 
         
            <div class="input-group mb-3" style="margin-left:2px;width:99%">
               <div class="input-group-prepend">
                  <span class="input-group-text" id="inform">Nº</span>
               </div>
                  <input type="text" class="form-control" name="cep">
            </div>

            <div class="input-group mb-3" style="margin-left:2px;width:99%">
               <div class="input-group-prepend">
                  <span class="input-group-text" id="city">Cidade</span>
               </div>
                  <select class="form-control">
                     <option>Cidade de residência</option>
                  </select>
            </div>   

      </div>


      <div id="campos">          
       
         <div class="input-group mb-3" style="margin-left:2px;width:99%;margin-top:2px">
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

         <div class="input-group mb-3" style="margin-left:2px;width:99%">
               <div class="input-group-prepend">
                  <span class="input-group-text" id="inform">Social</span>
               </div>
                  <input type="text" class="form-control" placeholder="Nome social" required name="social">
            </div> 
         
            <div class="input-group mb-3" style="margin-left:2px;width:99%">
               <div class="input-group-prepend">
                  <span class="input-group-text" id="inform">Etnia*</span>
               </div>
                  <select class="form-control">
                     <option>Default select</option>
                  </select>
            </div>

         
            <div class="input-group mb-3" style="margin-left:2px;width:99%">
               <div class="input-group-prepend">
                  <span class="input-group-text" id="inform">Mãe*</span>
               </div>
                  <input type="text" class="form-control" required name="mae">
            </div>  

            <div class="input-group mb-3" style="margin-left:2px;width:99%">
               <div class="input-group-prepend">
                  <span class="input-group-text" id="inform">Endere.</span>
               </div>
                  <input type="text" class="form-control" name="ende">
            </div>

            <div class="input-group mb-3" style="margin-left:2px;width:99%">
               <div class="input-group-prepend">
                  <span class="input-group-text" id="inform">UF</span>
               </div>
                  <select class="form-control" name="uf" id="uf" data-dependent="cidade">
                     <option value="">Estado onde mora</option>
                  @if($estados)
                     @foreach($estados as $estado)                     
                     <option value="{{$estado->codigo}}">{{$estado->uf}}</option>
                     @endforeach
                  @endif
                  </select>
            </div>

            <div class="input-group mb-3" style="margin-left:2px;width:99%">
               <div class="input-group-prepend">
                  <span class="input-group-text" id="bairro">Bairro</span>
               </div>
                  <select class="form-control" id="bairro" >
                     <option></option>
                  </select>                  
            </div>            

      </div>       
            
         <!-- <div id="alinhabt"> -->
            <div class="btn-group" id="botao">
               <button class="btn btn-primary" id="salvar" name="bt1" type="submit" value="Salvar">Salvar</button>
               <button class="btn btn-dark btn-col-auto" id="salvar" onclick="window.location.href = 'buscapac'" name="bt1" type="button">Limpar</button>               
            </div>
         <!-- </div> -->
      
</div>

</div>



<div id="dois">
@include('elements/abacad2')

<div id="corpoform2">   
       
   <div id="cima2">
 
 <div class="input-group mb-3" style="margin-left:2px;width:99%;margin-top:2px">
    <div class="input-group-prepend">
       <span class="input-group-text"  id="inform2">RG</span>
    </div>
       <input type="text" class="form-control" name="rg" >
 </div>

 <div class="input-group mb-3" style="margin-left:2px;width:99%">
    <div class="input-group-prepend">
       <span class="input-group-text" id="inform2">CNH</span>
    </div>
       <input type="text" class="form-control" name="cnh">
 </div>

 <div class="input-group mb-3" style="margin-left:2px;width:99%">
    <div class="input-group-prepend">
       <span class="input-group-text" id="inform2">Nacionalidade*</span>
    </div>
    <select class="form-control" name="nacion" id="nacio">
       @if($nacions)
          @foreach($nacions as $nacion)                     
          <option value="{{$nacion->id}}">{{$nacion->descricao}}</option>
          @endforeach
       @endif
       </select>
 </div>


 <div class="input-group mb-3" style="margin-left:2px;width:99%">
    <div class="input-group-prepend">
       <span class="input-group-text" id="inform2">Data naturalização*</span>
    </div>
       <input type="text" class="form-control" name="natura" required >
 </div>

 <div class="input-group mb-3" style="margin-left:2px;width:99%">
    <div class="input-group-prepend">
       <span class="input-group-text" id="inform2">UF de Nascimento*</span>
    </div>
       <select class="form-control" id="ufnasc">
          <option>Selecione o Estado</option>
          @if($estados)
             @foreach($estados as $estado)                     
                <option value="{{$estado->codigo}}">{{$estado->uf}}</option>
             @endforeach
          @endif
       </select>
 </div>

 <div class="input-group mb-3" style="margin-left:2px;width:99%">
    <div class="input-group-prepend">
       <span class="input-group-text" id="inform2">Data de Entrada</span>
    </div>
       <input type="text" class="form-control" name="cidade">
 </div>

</div>


<div id="campos2">          

<div class="input-group mb-3" style="margin-left:2px;width:99%;margin-top:2px">
    <div class="input-group-prepend">
       <span class="input-group-text" id="inform2">NIS (PIS/PASEP)</span>
    </div>
       <input type="text" class="form-control" name="nis">
</div>

<div class="input-group mb-3" style="margin-left:2px;width:99%">
    <div class="input-group-prepend">
       <span class="input-group-text" id="inform2">Passaport</span>
    </div>
       <input type="text" class="form-control" required name="passaport" >
</div>

<div class="input-group mb-3" style="margin-left:2px;width:99%">
    <div class="input-group-prepend">
       <span class="input-group-text" id="inform2">País nascimento*</span>
    </div>
    <select class="form-control" name="paises" id="paises" data-dependent="ufnasc">
    <option value=""></option>
       @if($paises)
          @foreach($paises as $pais)                     
          <option value="{{$pais->cod}}" <?php if($pais->cod == "76"){echo "selected";} ?>>{{$pais->descricao}}</option>
          @endforeach
       @endif
       </select>
 </div>


 <div class="input-group mb-3" style="margin-left:2px;width:99%">
    <div class="input-group-prepend">
       <span class="input-group-text" id="inform2">Portaria Natural.*</span>
    </div>
       <input type="text" class="form-control" required name="mae">
 </div> 

            <div class="input-group mb-3" style="margin-left:2px;width:99%">
               <div class="input-group-prepend">
                  <span class="input-group-text" id="inform2">Munic. Nascimento*</span>
               </div>
               <select class="form-control">
                  <option>Default select</option>
               </select>
            </div>
 
            <div class="input-group mb-3" style="margin-left:2px;width:99%"style="margin-left:2px;width:99%">
               <div class="input-group-prepend">
                  <span class="input-group-text" id="inform2">@Email</span>
               </div>
                  <input type="text" class="form-control" required name="email" >
            </div>                  

      </div>       

      <div class="input-group mb-3" style="height:0.5%;width:100%;"></div>

      <div class="input-group mb-3" style="border:solid 1px;height:50px;border-radius:10px;background:none;margin-top:10px;">
         <!-- Select unidade de referência do paciente -->
         <select class="form-control" style="margin-top:0.5%;margin-left:2px">
            <option selected disabled>Selecione a Unidade de Referência do Paciente*</option>
            <option>UNIDADE 1</option>
            <option>UNIDADE 2</option>
            <option>UNIDADE 3</option>
            <option>UNIDADE 4</option>
            <option>UNIDADE 5</option>
         </select>
      </div>

</div>

</div>


<div id="tres">
@include('elements/abacad3')

   <div id="e-sus">

      
      <div id="parentesco">

         <div id="parentcheck" style="width:65%;float:left;background:#E6E6FA;border:solid 1px;border-radius:10px;margin-left:7px;margin-top:5px">
            
            <label style="margin-left:5px">Relação de Parentesco com o Responsável Familiar</label>
            <div class="input-group mb-3">
               <!-- <div class="input-group-prepend">
                  <span class="input-group-text" id="bairro"></span>
               </div> -->
                  <select class="form-control" id="bairro" >
                     <option></option>
                  </select>                  
            </div>     

         </div>

         <div id="ocupacao" style="width:33%;height:90px;float:left;background:#E6E6FA;border:solid 1px;border-radius:10px;margin-left:5px;margin-top:5px">

            <label style="margin-left:5px">Ocupação</label>
             <div class="input-group mb-3">
               <!-- <div class="input-group-prepend">
                  <span class="input-group-text" id="inform">Ocupação</span>
               </div> -->
                  <input type="text" class="form-control" name="ocupa" >
             </div> 

         </div>

         <div class="input-group mb-3" style="width:98.7%;height:50px;background:#E6E6FA;border:solid 1px;border-radius:10px;margin-left:5px;margin-top:9%;">
                 
               <div class="input-group mb-3" style="width:40%;float:left;margin-left:0.5%;margin-top:0.5%">
                  <div class="input-group-prepend">
                     <span class="input-group-text" id="bairro">FREQUENTA ESCOLA OU CRECHE?</span>
                  </div>
                  <select class="form-control" id="bairro" >
                     <option value="1">Sim</option>
                     <option value="0">Não</option>
                  </select>                  
               </div> 

               <div class="input-group mb-3" style="width:59%;float:right;margin-top:0.5%">
                  <div class="input-group-prepend">
                     <span class="input-group-text" id="bairro">Crianças de 0 a 9 anos, com quem fica?</span>
                  </div>
                  <select class="form-control" id="bairro" >
                     <option></option>
                  </select>                  
               </div> 


         </div>

         <div id="curso" style="width:65%;height:90px;float:left;background:#E6E6FA;border:solid 1px;border-radius:10px;margin-left:7px;margin-top:-9px">
         
            <label style="margin-left:5px">Curso mais elevaddo que frequenta ou frequentou?</label>            
            <div class="input-group mb-3">
               <!-- <div class="input-group-prepend">
                  <span class="input-group-text" id="bairro"></span>
               </div> -->
                  <select class="form-control" id="bairro" >
                     <option></option>
                  </select>                  
            </div>     

         </div>

         <div id="trabalho" style="width:33%;height:90px;float:left;background:#E6E6FA;border:solid 1px;border-radius:10px;margin-left:5px;margin-top:-9px">

            <label style="margin-left:5px">Situação no mercado de trabalho</label>                        
            <div class="input-group mb-3">
               <!-- <div class="input-group-prepend">
                  <span class="input-group-text" id="bairro">Bairro</span>
               </div> -->
                  <select class="form-control" id="bairro" >
                     <option></option>
                  </select>                  
            </div>     

         </div>

         <div class="input-group mb-3" style="width:98.7%;height:50px;background:#E6E6FA;border:solid 1px;border-radius:10px;margin-left:5px;margin-top:9.5%;">

            <div style="width:55%;height:40px;float:left;background:none">
               <div class="input-group-prepend" style="float:left;margin-top:4px">
                  <label style="margin-top:5px;margin-left:5px">É membro de povo ou comunidade tradicional?</label>
               </div>
                        
               <div style="background:none;width:35%;float:left;margin-top:4px" class="form-check form-check-inline">
                     <input class="form-check-input" type="radio" name="masculino" id="inlineRadio1" value="option1">
                     <label class="form-check-label" for="inlineRadio1">Sim</label>

                     <input class="form-check-input" type="radio" name="feminino" id="inlineRadio2" value="option2">
                     <label class="form-check-label" for="inlineRadio2">Não</label>
               </div> 
            </div>   

             <div class="input-group mb-3" style="background:none;width:44%;float:left;margin-top:4px">
                  <div class="input-group-prepend">
                     <span class="input-group-text">Qual?</span>
                  </div>
                     <input type="text" class="form-control" name="cidade">
              </div>                                 
              
         </div>

      </div>

   </div>

</div>

</form>

</div>

</body>

</HTML>
