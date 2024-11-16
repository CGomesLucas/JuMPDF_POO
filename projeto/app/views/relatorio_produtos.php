<!DOCTYPE html>
<html>
<head>
    <style>
        table {width: 100%; border-collapse: collapse;}
        th, td {border: 1px solid #000; padding: 8px; text-align: left;}
    </style>
    <title>Relatório de Produtos</title>
</head>
<body>
    <h1>Relatório de Produtos</h1>
    <table>
        <tr>
            <th>Nome</th>
            <th>Descrição</th>
            <th>Preço</th>
            <th>Quantidade</th>
            <th>Data de Adição</th>
        </tr>
        <?php foreach ($produto as $produto): ?> 
        <tr>
            <td><?= htmlspecialchars($produto['nome']) ?></td>
            <td><?= htmlspecialchars(number_format($produto['preco'], 2, ',', '.')) ?></td>
            <td><?= htmlspecialchars($produto['quantidade']) ?></td>
            <<td><?= htmlspecialchars($produto['data_adicao']) ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
