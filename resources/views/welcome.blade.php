<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Home</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            background: rgb(2, 0, 36);
            background: linear-gradient(90deg, rgba(2, 0, 36, 1) 0%, rgba(9, 94, 121, 1) 35%, rgba(0, 212, 255, 1) 100%);
            background-size: cover;
            background-position: center;
            font-family: Arial, sans-serif;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .card {
            background-color: rgba(255, 255, 255, 0.8);
            padding: 60px;
            margin: 60px;
            border-radius: 10px;
            text-align: center;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
        }

        .card h1 {
            font-size: 32px;
            margin-bottom: 10px;
        }

        .card p {
            font-size: 18px;
            font-weight: 500;
        }

        .card button {
            margin-top: 30px;
            padding: 10px 20px;
            font-size: 18px;
            border: none;
            background-color: #28A745;
            color: white;
            border-radius: 5px;
            cursor: pointer;
        }

        .card button:hover {
            background-color: #33932E;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="card">
            <h1>Seja bem-vinda Sueli! ❤</h1>
            <p>Este é seu sistema de controle de estoque!</p>
            <p>Clique no botão abaixo para utilizá-lo.</p>
            <button onclick="window.location.href='/produtos'">Acessar o sistema</button>
        </div>
    </div>
</body>

</html>