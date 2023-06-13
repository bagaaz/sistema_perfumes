# Sistema de Avaliação de Perfumes (API)

Sistema de avaliação de perfumes, desenvolvido em Lumen (PHP). A ideia desse sistema é ter um banco de dados de perfumes no qual os usuários poderão avaliar perfumes, indicar quais as melhores ocasiões para usar-los, criar uma lista de favoritos, e muito mais.

## Pré-requisitos

- PHP >= 8.1
- Composer >= 2.0
- Git
- MySQL >= 8.0 (ou seu sistema de banco de dados relacional preferido)

## Passo a passo da configuração

Siga os passos abaixo para configurar o sistema localmente.

### 1. Clonar o Repositório
Clone este repositório em sua máquina local usando o seguinte comando Git:

`git clone https://github.com/seu_nome_de_usuario/nome_do_repositorio.git` 

### 2. Configurar o Arquivo .env
Copie o arquivo `.env.example` para `.env` na raiz do projeto. Você pode fazer isso com o seguinte comando:

`cp .env.example .env` 

Em seguida, abra o arquivo `.env` e configure as variáveis de ambiente para corresponder às configurações do seu ambiente local, incluindo as configurações do banco de dados.

### 3. Instalar Dependências
Instale as dependências do projeto com o Composer:

`composer install` 

### 4. Gerar Chave da Aplicação
Gere uma nova chave para a sua aplicação Lumen com o comando Artisan:

`php artisan key:generate` 

### 5. Executar as Migrações
Execute as migrações para configurar a base de dados:

`php artisan migrate` 

### 6. Popular a Base de Dados (Seeds)
Se existirem seeds para o projeto, você pode executá-los com:

`php artisan db:seed`
