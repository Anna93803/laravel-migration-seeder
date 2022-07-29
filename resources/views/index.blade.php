<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
        <title>Document</title>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col">
                    @foreach ($trains as $item)
                    <div class="bg-success d-flex my-5 py-5 gap-4 justify-content-center">
                        <div><strong class="d-flex">Treno: </strong>{{$item["codice_treno"]}}</div>
                        <div><strong class="d-flex">Azienda:</strong>{{$item["nome_azienda"]}}</div>
                        <div><strong class="d-flex">Partenza da:</strong>{{$item["stazione_partenza"]}}</div>
                        <div><strong class="d-flex">Arrivo:</strong> {{$item["stazione_arrivo"]}}</div>
                        <div><strong class="d-flex">Orario di partenza: </strong>{{$item["orario_partenza"]}}</div>
                        <div><strong class="d-flex">Orario di arrivo:</strong> {{$item["orario_arrivo"]}}</div>
                        <div><strong class="d-flex">Numero Carrozza:</strong> {{$item["num_carrozze"]}}</div>
                        <div><strong class="d-flex">Il treno è in orario:</strong> {{$item["in_orario"]}}</div>
                        <div><strong class="d-flex">Il treno è cancellato:</strong> {{$item["is_cancellato"]}}</div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </body>
</html>