<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Grazie {{ $name }} per averci contattato</h1>
    <h2>Risponderemo il prima possibile</h2>
    <p>Ecco un riepilogo dei tuoi dati:</p>
    <ul>
        <li>Nome e cognome: {{$name}}</li>
        <li>Email: {{$email}}</li>
        <li>Messaggio: {{$info}}</li>
    </ul>
    <small>Se non hai fatto richiesta, ignora pure questa mail.</small>
</body>
</html>