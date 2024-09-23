<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Inicial</title>
    <link rel="stylesheet" href="style.css">
    @vite('resources/css/home.css')
</head>
<body>
    <div class="header">
        <h2>Maquinário Oficina</h2> 
    </div>

    <center>
        <h1>Seja bem-vindo!</h1>
    </center>

    <div class="container">
    @foreach($maquinas as $maquina)
        <div class="maquina">
            <img src="{{ asset($maquina->imagem) }}" alt="{{ $maquina->nome }}">
            <h2>{{ $maquina->nome }}</h2>
            <button onclick="location.href='{{ route('maquinas.show', $maquina->id) }}'">Utilizar máquina</button>
        </div>
    @endforeach
    </div>

    <dialog id="alerta">            
        <p>Olá, alerta da máquina</p>
        <button id="botaoAlerta">Enviar</button> 
    </dialog>

</body>

<script>
    const alerta = document.getElementById('alerta');
    const botaoAlerta = document.querySelector('#botaoAlerta');

    function AbrirAlerta(maquinaId) {
        alerta.showModal();

        botaoAlerta.addEventListener('click', function() {
            window.location.href = '/maquina/' + maquinaId;
        });
    }
</script>
</html>