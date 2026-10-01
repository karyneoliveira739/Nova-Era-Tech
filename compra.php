<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Formulário de Compra</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>

    <h1>Formulário de Compra</h1>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $produto = htmlspecialchars($_POST['produto'] ?? '');
        $nome = htmlspecialchars($_POST['nome'] ?? '');
        $email = htmlspecialchars($_POST['email'] ?? '');
        
        echo "<div style='background: #e2f0d9; padding: 15px; margin-bottom: 20px; border: 1px solid #c8e1b7;'>";
        echo "<h3>Compra realizada com sucesso!</h3>";
        echo "<p>Obrigado, <strong>$nome</strong>! O seu pedido do produto <strong>$produto</strong> foi recebido.</p>";
        echo "<p>Enviamos os detalhes de confirmação para o e-mail: <strong>$email</strong></p>";
        echo "</div>";
    }
    ?>

    <form action="compra.php" method="POST">
        <fieldset>
            <legend>Dados do Pedido</legend>

            <label for="produto">Produto:</label>
            <select id="produto" name="produto" required>
                <option value="">Selecione um produto</option>
                <option value="Playstation 5">PlayStation®5 Pro - R$ 7.399,00</option>
                <option value="Iphone 18 Pro Max">Apple iPhone 18 Pro Max 1 TB — Bordô - R$ 15.749,10</option>
                <option value="Caixa Acústica Philco Pcx20000">Caixa Acústica PhilcoPCX20000- R$ 1309,90</option>
                <option value="Ps4 Fat Desbloqueado + Gold-Hein">PlayStation®4 Fat Desbloqueado + Gold-Hein- R$ 3.199,00</option>
            </select>

            <label for="quantidade">Quantidade:</label>
            <input type="number" id="quantidade" name="quantidade" min="1" value="1" required>
        </fieldset>

        <fieldset>
            <legend>Dados Pessoais</legend>

            <label for="nome">Nome Completo:</label>
            <input type="text" id="nome" name="nome" required>

            <label for="cpf">CPF:</label>
            <input type="text" id="cpf" name="cpf" placeholder="000.000.000-00" required>

            <label for="email">E-mail:</label>
            <input type="email" id="email" name="email" required>

            <label for="telefone">Telefone:</label>
            <input type="tel" id="telefone" name="telefone" placeholder="(00) 00000-0000" required>
        </fieldset>

        <fieldset>
            <legend>Endereço</legend>

            <label for="cep">CEP:</label>
            <input type="text" id="cep" name="cep" placeholder="00000-000" required>

            <label for="endereco">Endereço:</label>
            <input type="text" id="endereco" name="endereco" required>

            <label for="numero">Número:</label>
            <input type="text" id="numero" name="numero" required>

            <label for="complemento">Complemento:</label>
            <input type="text" id="complemento" name="complemento">

            <label for="bairro">Bairro:</label>
            <input type="text" id="bairro" name="bairro" required>

            <label for="cidade">Cidade:</label>
            <input type="text" id="cidade" name="cidade" required>

            <label for="estado">Estado:</label>
            <select id="estado" name="estado" required>
                <option value="">Selecione</option>
                <option>AC</option>
                <option>AL</option>
                <option>AP</option>
                <option>AM</option>
                <option>BA</option>
                <option>CE</option>
                <option>DF</option>
                <option>ES</option>
                <option>GO</option>
                <option>MA</option>
                <option>MT</option>
                <option>MS</option>
                <option>MG</option>
                <option>PA</option>
                <option>PB</option>
                <option>PR</option>
                <option>PE</option>
                <option>PI</option>
                <option>RJ</option>
                <option>RN</option>
                <option>RS</option>
                <option>RO</option>
                <option>RR</option>
                <option>SC</option>
                <option>SP</option>
                <option>SE</option>
                <option>TO</option>
            </select>
        </fieldset>

        <fieldset>
            <legend>Forma de Pagamento</legend>
            <label><input type="radio" name="pagamento" value="credito" checked> Cartão de Crédito</label>
            <label><input type="radio" name="pagamento" value="debito"> Cartão de Débito</label>
            <label><input type="radio" name="pagamento" value="pix"> Pix</label>
            <label><input type="radio" name="pagamento" value="boleto"> Boleto Bancário</label>
        </fieldset>

        <fieldset>
            <legend>Dados do Cartão</legend>
            <label for="nome-cartao">Nome no Cartão:</label>
            <input type="text" id="nome-cartao" name="nome-cartao" required>

            <label for="numero-cartao">Número do Cartão:</label>
            <input type="text" id="numero-cartao" name="numero-cartao" placeholder="0000 0000 0000 0000" required>

            <label for="validade">Validade:</label>
            <input type="text" id="validade" name="validade" placeholder="MM/AA" required>

            <label for="cvv">CVV:</label>
            <input type="text" id="cvv" name="cvv" placeholder="123" required>
        </fieldset>

        <button type="submit" class="botao-comprar">Finalizar Compra</button>
    </form>

    <div class="voltar">
    <button onclick="history.back()" class="botao-voltar">Voltar</button>
    <br>
    <button onclick="location.href='index.html'" class="botao-voltar">Voltar para a página inicial</button>
</div>

   <script src="js/script.js"></script>
</body>
</html>