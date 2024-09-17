<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora PHP</title>

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