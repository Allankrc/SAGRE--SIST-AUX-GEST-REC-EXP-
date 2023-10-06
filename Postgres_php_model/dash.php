<?php

// Include the Bootstrap 4 CSS and JavaScript files

// Get the data from the database
$data = [
    "data" => "2023-10-06",
    "hora" => "16:34:27 PST",
    "total_viagens" => 100,
    "total_gastos" => 100000,
    "gastos_por_categoria" => [
        "transporte" => 50000,
        "hospedagem" => 25000,
        "alimentacao" => 25000
    ],
    "gastos_por_funcionario" => [
        "joao_silva" => 20000,
        "maria_souza" => 20000,
        "jose_santos" => 20000,
        "pedro_lima" => 20000,
        "ana_pereira" => 20000
    ],
    "gastos_por_destino" => [
        "sao_paulo" => 30000,
        "rio_de_janeiro" => 30000,
        "brasilia" => 20000,
        "belo_horizonte" => 20000
    ]
];

// Display the dashboard
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <title>Dashboard de controle de viagens</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

<div class="container">

    <h1>Dashboard de controle de viagens</h1>

    <div class="row">

        <div class="col-md-4">

            <h2>Dados gerais</h2>

            <table class="table table-bordered">
                <tbody>
                    <tr>
                        <th>Data</th>
                        <td><?php echo $data["data"]; ?></td>
                    </tr>
                    <tr>
                        <th>Hora</th>
                        <td><?php echo $data["hora"]; ?></td>
                    </tr>
                    <tr>
                        <th>Total de viagens</th>
                        <td><?php echo $data["total_viagens"]; ?></td>
                    </tr>
                    <tr>
                        <th>Total de gastos</th>
                        <td><?php echo number_format($data["total_gastos"], 2, ",", "."); ?></td>
                    </tr>
                </tbody>
            </table>

        </div>

        <div class="col-md-8">

            <h2>Gráficos</h2>

            <div class="row">

                <div class="col-md-6">

                    <h3>Gastos por categoria</h3>

                    <canvas id="grafico-barras"></canvas>

                </div>

                <div class="col-md-6">

                    <h3>Evolução dos gastos por funcionário</h3>

                    <canvas id="grafico-linhas"></canvas>

                </div>

            </div>

            <div class="row">

                <div class="col-md-12">

                    <h3>Gastos por destino</h3>

                    <canvas id="grafico-mapa"></canvas>

                </div>

            </div>

        </div>

    </div>

</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.1/