

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
    <style>
        body {
            background-color: red;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        form {
            background-color: white;
            padding: 20px;
            border-radius: 5px;
        }

        h2 {
            color: black;
            text-align: center;
        }

        input[type="text"],
        input[type="email"],
        input[type="date"],
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }

        input[type="checkbox"] {
            margin-right: 5px;
        }
    </style>
</head>
<body>
    
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <h2>Formulário</h2>
        <label for="nome">Nome:</label><br>
        <input type="text" id="nome" name="nome" required><br><br>
        
        <label for="cpf">CPF:</label><br>
        <input type="text" id="cpf" name="cpf"  title="Digite um CPF válido"><br><br>
        
        <label for="data_nascimento">Data de Nascimento:</label><br>
        <input type="date" id="data_nascimento" name="data_nascimento" required><br><br>
        
        <label for="email">E-mail:</label><br>
        <input type="email" id="email" name="email" required><br><br>
        
        <label for="telefone">Telefone:</label><br>
        <input type="text" id="telefone" name="telefone" title="Digite um telefone válido" required><br><br>
        
        <input type="checkbox" id="estudante" name="estudante">
        <label for="estudante">É estudante?</label><br><br>
        
        <input type="submit" id="enviar" name="enviar" value="Enviar" required>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nome = $_POST["nome"];
        $cpf = $_POST["cpf"];
        $data_nascimento = $_POST["data_nascimento"];
        $email = $_POST["email"];
        $telefone = $_POST["telefone"];
        $estudante = $_POST["estudante"] ? "Sim" : "Não";

        echo "<br><h2>Dados enviados:</h2>";
        echo "Eu sou $nome, $estudante sou estudante. Meu número de CPF é $cpf, nasci em $data_nascimento e tenho  anos de idade. meu telefone de contato é $telefone<br>";
       
    }
    
    elseif ($_SERVER["REQUEST_METHOD"] == "GET" && !empty($_POST))
      "erro, fromulario nao enviado"

    

?>
</body>
</html>
