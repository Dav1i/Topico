<?php
$host = 'server-trabalho.database.windows.net'; // Ex: meuserver.database.windows.net
$dbname = 'dbTrabalho';
$username = 'adm';
$password = '#Dv12345678';

try {
    $conn = new PDO("sqlsrv:server=$host;Database=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Criação da tabela
    $sqlCreate = "
        IF OBJECT_ID('Clientes', 'U') IS NOT NULL
            DROP TABLE Clientes;

        CREATE TABLE Clientes (
            Id_Cliente INT PRIMARY KEY IDENTITY(1,1),
            Nome NVARCHAR(100),
            Endereço NVARCHAR(150),
            Cidade NVARCHAR(100),
            Telefone NVARCHAR(20)
        );
    ";
    $conn->exec($sqlCreate);

    // Inserção de dados fictícios
    $clientes = [
        ['Ana Souza', 'Rua das Flores, 123', 'São Paulo', '(11) 91234-5678'],
        ['Carlos Lima', 'Av. Brasil, 456', 'Rio de Janeiro', '(21) 99876-5432'],
        ['Mariana Silva', 'Rua A, 10', 'Belo Horizonte', '(31) 98765-4321'],
        ['João Pedro', 'Av. Central, 12', 'Curitiba', '(41) 91234-9876'],
        ['Roberta Santos', 'Rua B, 15', 'Porto Alegre', '(51) 99876-1111'],
        ['Felipe Castro', 'Rua C, 22', 'Salvador', '(71) 93456-7890'],
        ['Larissa Martins', 'Rua D, 8', 'Fortaleza', '(85) 91234-4567'],
        ['Gabriel Nunes', 'Av. Paulista, 1000', 'São Paulo', '(11) 99876-1234'],
        ['Paula Andrade', 'Rua E, 45', 'Recife', '(81) 98765-3456'],
        ['Fernando Rocha', 'Rua F, 20', 'Brasília', '(61) 91234-7890'],
        ['Bruno Alves', 'Rua G, 13', 'Manaus', '(92) 99876-0001'],
        ['Juliana Pires', 'Rua H, 30', 'Belém', '(91) 99876-0002'],
        ['Rafael Costa', 'Rua I, 40', 'São Luís', '(98) 99876-0003'],
        ['Isabela Ramos', 'Rua J, 11', 'Maceió', '(82) 99876-0004'],
        ['Luiz Henrique', 'Rua K, 19', 'Natal', '(84) 99876-0005'],
        ['Renata Vieira', 'Rua L, 25', 'João Pessoa', '(83) 99876-0006'],
        ['Daniel Teixeira', 'Rua M, 35', 'Teresina', '(86) 99876-0007'],
        ['Patrícia Lopes', 'Rua N, 50', 'Aracaju', '(79) 99876-0008'],
        ['Eduardo Mello', 'Rua O, 27', 'Cuiabá', '(65) 99876-0009'],
        ['Camila Duarte', 'Rua P, 33', 'Campo Grande', '(67) 99876-0010'],
        ['André Souza', 'Rua Q, 60', 'Goiânia', '(62) 99876-0011'],
        ['Bianca Freitas', 'Rua R, 77', 'Vitória', '(27) 99876-0012'],
        ['Rodrigo Lima', 'Rua S, 44', 'Florianópolis', '(48) 99876-0013'],
        ['Tatiane Rocha', 'Rua T, 88', 'Palmas', '(63) 99876-0014'],
        ['Vinícius Leal', 'Rua U, 70', 'Porto Velho', '(69) 99876-0015'],
        ['Elaine Barros', 'Rua V, 99', 'Macapá', '(96) 99876-0016'],
        ['Gustavo Reis', 'Rua W, 121', 'Boa Vista', '(95) 99876-0017'],
        ['Sabrina Silva', 'Rua X, 142', 'Rio Branco', '(68) 99876-0018'],
        ['Luciano Prado', 'Rua Y, 155', 'São Paulo', '(11) 99876-0019'],
        ['Carla Mendes', 'Rua Z, 166', 'Rio de Janeiro', '(21) 99876-0020']
    ];

    $stmt = $conn->prepare("INSERT INTO Clientes (Nome, Endereço, Cidade, Telefone) VALUES (?, ?, ?, ?)");

    foreach ($clientes as $cliente) {
        $stmt->execute($cliente);
    }

    echo "Tabela criada e 30 registros inseridos com sucesso.";

} catch (PDOException $e) {
    die("Erro: " . $e->getMessage());
}
?>
