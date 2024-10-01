<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina inicial</title>
    <link rel="stylesheet" href="style.css">
    @vite(['resources/css/style.css'])
</head>
<body style="background-image : url('{{ asset('/storage/img/fundo-site.jpeg') }}');">
    <div class="header">
        <h2> Maquinário oficina  </h2> 
      </div>
  
        
    </div>
    <center>
        <h1>Seja bem vindo!</h1>
    </center>
    </div>

    <div class="container">
        <div class="maquina">
            <img src="{{asset('/storage/img/gs200-torno.jpg') }}" alt="Torno gs200">
            <h2>Torno gs200</h2>
            <button onclick="AbrirAlertaTorno()">Utilizar maquina</button>
        </div>

        <div class="maquina2">
            <img src="{{asset('/storage/img/ITAP.png')}}" alt="Bomba ITAP">
            <h2>Bomba ITAP</h2>
            <button onclick="AbrirAlertaBomba()">Utilizar maquina</button>
        </div>

        <dialog id="alerta">            
            <p>Olá, alerta da máquina</p>
            <button>Enviar</button> 
        </dialog>
       
    </div>

</body> 
<script>
    
    const alerta = document.getElementById('alerta');
    const botaoAlerta = document.querySelector('#alerta button')

    function AbrirAlertaTorno(){
        alerta.showModal();
        

        botaoAlerta.addEventListener('click' , function() {
            window.location.href = 'torno';
        })
    }

    function AbrirAlertaBomba(){
        alerta.showModal();
        

        botaoAlerta.addEventListener('click' , function() {
            window.location.href = 'maquinas';
        })
    }
</script>


