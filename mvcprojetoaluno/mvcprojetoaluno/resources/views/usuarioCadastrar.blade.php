<!DOCTYPE html>
<!-- TELA UsuarioCadastrar.php -->
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <title>Formulário Cadastro</title>
    </head>
    <body>
        <a href="/PHP_PBE_2IDS_2025/MVCExemplo/usuario/listar">Ir para tela Listar</a>
        <form method="POST" action="salvar">
            <input type="text" name="telefone" placeholder="Seu telefone" require>
            <input type="date" name="data nascimento" placeholder="data nascimento" require>
            <input type="number" name="idade" placeholder="Sua idade" require>
            <input type="number" name="" placeholder="Seu nome" require>
            <button type="submit">Enviar</button>
        </form>
    </body>
</html>