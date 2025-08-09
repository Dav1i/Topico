<?php include 'db_config.php'; ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Lista de Clientes</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #fafafa;
        }

        h2 {
            text-align: center;
            color: #333;
        }

        table {
            border-collapse: collapse;
            width: 80%;
            margin: 20px auto;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        th, td {
            padding: 10px;
            border: 1px solid #ccc;
            text-align: left;
        }

        th {
            background-color: #444;
            color: white;
        }

        
        tr:nth-child(odd) {
            background-color: #ffffff; 
        }

        tr:nth-child(even) {
            background-color: #d3d3d3;
        }

        tr:hover {
            background-color: #d0e4f5;
        }
    </style>
</head>
<body>
    <h2>Lista de Clientes</h2>

    <table>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Endereço</th>
            <th>Cidade</th>
            <th>Telefone</th>
        </tr>

        <?php
        if (isset($conn)) {
            $stmt = $conn->query("SELECT * FROM Clientes");
            while ($row = $stmt->fetch()) {
                echo "<tr>
                    <td>{$row['Id_Cliente']}</td>
                    <td>{$row['Nome']}</td>
                    <td>{$row['Endereço']}</td>
                    <td>{$row['Cidade']}</td>
                    <td>{$row['Telefone']}</td>
                </tr>";
            }
        } else {
            echo "<tr><td colspan='5'>Erro ao conectar ao banco de dados.</td></tr>";
        }
        ?>
    </table>
</body>
</html>
