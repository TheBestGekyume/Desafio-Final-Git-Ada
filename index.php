<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora PHP</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background-color: #112;
            color: #ddd;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
        }

        main {
            width: fit-content;
            margin: 0 auto;
            margin-top: 150px;
            background-color: #222;
            padding: 1rem 2rem;
            border-radius: 20px;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        div {
            margin-block: 10px;
        }

        h1,
        h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #fff;
        }

        h2 {
            margin-top: 10px;
        }

        button,
        select {
            padding: 5px 20px;
            cursor: pointer;
        }
        
    </style>

</head>

<body>

    <main>
        <h1>CALCULADORA</h1>

        <form action="" method="GET">

            <div>
                <label for="n1">Numero 1</label>
                <input type="number" name="n1" value="n1" required>
            </div>

            <div>
                <label for="op">Operação</label>
                <select name="op" required>
                    <option value="+">+</option>
                    <option value="-">-</option>
                    <option value="*">*</option>
                    <option value="/">/</option>
                    <option value="sqrt">Raiz Quadrada</option>
                    <option value="**">Potencia</option>
                    <option value="inverterSinal">Inverter Sinal</option>
                    <option value="inverterNumero">Inverter Numero</option>
                    <option value="seno">Seno</option>
                    <option value="cosseno">Cosseno</option>
                    <option value="tangente">Tangente</option>
                    <option value="!">Fatorial</option>
                </select>
            </div>

            <div>
                <label for="n2">Numero 2</label>
                <input type="number" name="n2" value="n2">
            </div>


            <div>
                <button type="submit">Calcular</button>
            </div>

        </form>

    </main>


</body>

</html>