<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Dados do candidato: </h2>
    <ul>
        <hr>
        <li> Nome: {{ $data['name'] }} </li> 
        <li> Email: {{ $data['email'] }} </li> 
        <li> Telefone: {{ $data['phone'] }} </li> 
        <li> Cargo desejado: {{ $data['desired_job'] }} </li>
        <li> Escolaridade: {{ $data['schooling'] }} </li> 
        <li> Observações: {{ $data['observations'] }} </li> 
        <li> Arquivo: <a href="{{ asset('storage/' . $data['file']) }}" download>Download</a> </li> 
    </ul>

</body>
</html>

