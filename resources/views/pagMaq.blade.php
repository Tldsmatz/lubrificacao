<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $maquina->nome }}</title>
    <link rel="stylesheet" href="{{ asset('css/pagTorno.css') }}">
</head>
<body>
    <div class="header">
      <h2> Maquinário oficina </h2> 
    </div>

    <div class="container">
        <div class="elemento">
            <h1>{{ $maquina->nome }}</h1>   
        
            <img src="{{ asset($maquina->imagem) }}" alt="{{ $maquina->nome }}">

            <h2>Tabela de óleos recomendados:</h2>
            <p>
            <table border="1">
                <thead>
                    <tr>
                        <th>‎ </th>
                        <th>Sistema de Lubrificação Automática</th>
                        <th>Sistema de Refrigeração</th>
                        <th>Lubrificador do Sistema Pneumático</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Tipo de óleo</td>
                        <td>{{ $oleos[0]->tipo ?? 'N/A' }}</td>
                        <td>{{ $oleos[1]->tipo ?? 'N/A' }}</td>
                        <td>{{ $oleos[2]->tipo ?? 'N/A' }}</td>
                    </tr>
                    <tr>
                        <td>Ajuste do Sistema</td>
                        <td>2 cc/injeção</td>
                        <td>------</td>
                        <td>1 gota/5 ativações</td>
                    </tr>
                    <tr>
                        <td>Periodo de Abastecimento! Substituição</td>
                        <td>72 horas (max.)</td>
                        <td>Conforme necessário</td>
                        <td>Verificação Semanal</td>
                    </tr>
                    <tr>
                        <td>Limpeza do Reservatório</td>
                        <td>Reservatório a Cada 12 Meses</td>
                        <td>Mensal</td>
                        <td>a Cada 6 meses</td>
                    </tr>
                </tbody>
            </table>    
            </p>    
        </div>

        <div class="elemento2">
            <img src="{{ asset('images/' . $maquina->imagem) }}" width="300px" height="200px">
        </div>

        <div class="formulario">
            <h2>Registro</h2>
            <form action="{{ route('maquina.registrar', ['id' => $maquina->id]) }}" method="POST">
    @csrf
    <input type="text" name="nome" placeholder="Nome" required/><br />
    <input type="text" name="curso" placeholder="Curso" required/><br />
    <input id="date" type="date" name="data" required/>
    <input type="time" id="appt" name="horario" min="09:00" max="18:00" required />

    <h2>O que foi feito</h2> 
    <div class="caixa-selecao">
        <div>
            <label class="caixa-selecao">Troca de óleo Sistema de lubrificação</label>
            <input type="checkbox" name="lubrificacao" />
        </div>
        <br>
        <div>
            <label class="caixa-selecao">Troca de óleo sistema de refrigeração</label>
            <input type="checkbox" name="refrigeracao" />
        </div>
        <br>
        <div>
            <label class="caixa-selecao">Troca de óleo sistema pneumático</label>
            <input type="checkbox" name="pneumatico" />
        </div>
        <div>
            <label class="caixa-selecao">Utilização</label>
            <input type="checkbox" name="utilizacao" checked="checked"> 
        </div>
    </div>

    <div>
        <button type="submit" class="botao">Enviar dados</button>
    </div>
</form>
        </div>
    </div>
</body>
</html>