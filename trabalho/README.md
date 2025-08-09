# Projeto: Lista de Clientes em PHP com Banco Azure SQL

Este projeto consiste em uma aplicação web em PHP que se conecta a um banco de dados SQL Server hospedado na Azure e exibe uma lista de clientes em uma tabela HTML estilizada.

---

## Tecnologias utilizadas

- PHP 8+ (via XAMPP)
- Azure SQL Database
- HTML/CSS
- PDO + Driver SQLSRV
- Git + GitHub

---

## Como configurar o banco de dados no Azure

1. Acesse o [Portal da Azure](https://portal.azure.com).
2. Crie um novo recurso do tipo **Banco de Dados SQL**.
3. Crie ou selecione um **servidor SQL** (ex: `server-trabalho.database.windows.net`) com login e senha.
4. Após criado, vá em **"Configurações de firewall e rede virtual"** e adicione seu IP atual para permitir conexões externas.
5. Anote:
   - Nome do servidor
   - Nome do banco
   - Usuário e senha

---

## Como executar este projeto localmente (XAMPP)

### Pré-requisitos:

- [XAMPP instalado](https://www.apachefriends.org/pt_br/index.html)
- Extensões do SQL Server habilitadas:
  - `php_pdo_sqlsrv.dll`
  - `php_sqlsrv.dll`

> Essas extensões podem ser instaladas via [drivers da Microsoft para SQL Server + PHP](https://learn.microsoft.com/sql/connect/php/download-drivers-php-sql-server).

---

### Passos para rodar o projeto:

1. Clone este repositório:

```bash
git clone https://github.com/Dav1i/Topico.git
