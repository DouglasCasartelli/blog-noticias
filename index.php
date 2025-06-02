<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Teste PHP</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f4f4f4;
            color: #333;
        }
        .container {
            background-color: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 800px;
            margin: auto;
        }
        h1, h2 {
            color: #0056b3;
        }
        pre {
            background-color: #eee;
            padding: 15px;
            border-radius: 5px;
            overflow-x: auto;
        }
        .info-box {
            background-color: #e9f7ef;
            border-left: 5px solid #28a745;
            padding: 15px;
            margin-top: 20px;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Bem-vindo à sua Página de Teste PHP!</h1>
        <p>Esta é uma página simples para verificar se o seu ambiente PHP está funcionando corretamente.</p>

        ---

        <h2>Exemplo de PHP Básico</h2>

        <?php
            // Definindo algumas variáveis
            $nome = "Usuário Teste";
            $idade = 30;
            $numero1 = 10;
            $numero2 = 5;

            // Exibindo informações
            echo "<p>Olá, **" . $nome . "**!</p>";
            echo "<p>Você tem **" . $idade . "** anos.</p>";

            // Realizando uma operação matemática
            $soma = $numero1 + $numero2;
            echo "<p>A soma de " . $numero1 . " e " . $numero2 . " é: **" . $soma . "**</p>";

            // Exibindo a data e hora atuais
            echo "<p>A data e hora atuais são: **" . date("d/m/Y H:i:s") . "**</p>";
        ?>

        ---

        <h2>Informações do Servidor PHP</h2>

        <div class="info-box">
            <p>Para ver detalhes completos sobre a configuração do seu servidor PHP, você pode usar a função `phpinfo()`. **Cuidado:** Esta função expõe muitas informações sobre o seu servidor, então **não a use em um ambiente de produção** sem antes remover ou proteger o acesso a ela.</p>
        </div>

        <h3>Clique no botão abaixo para ver as informações do PHP:</h3>
        <form action="" method="get">
            <button type="submit" name="show_phpinfo" value="true">Mostrar phpinfo()</button>
        </form>

        <?php
            if (isset($_GET['show_phpinfo']) && $_GET['show_phpinfo'] == 'true') {
                echo "<h2>Detalhes do phpinfo()</h2>";
                phpinfo(); // Esta função exibe todas as informações de configuração do PHP
            }
        ?>

        ---

        <h2>Como Usar Este Modelo</h2>
        <ol>
            <li>Salve o código acima em um arquivo com a extensão `.php` (ex: `teste.php`).</li>
            <li>Coloque este arquivo no diretório raiz do seu servidor web (ex: `htdocs` para Apache/XAMPP, `www` para Nginx/WAMP).</li>
            <li>Abra seu navegador e digite o endereço correspondente (ex: `http://localhost/teste.php`).</li>
            <li>Você deverá ver o conteúdo da página com as informações geradas pelo PHP.</li>
        </ol>

        <p>Se você não conseguir ver o conteúdo processado pelo PHP, verifique se o seu servidor web está configurado corretamente e se o PHP está instalado e habilitado.</p>
    </div>
</body>
</html>