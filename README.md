# Sistema de Avaliação de Perfumes · API Lumen

API em PHP para um projeto de catálogo e avaliação de perfumes. A versão atual expõe o CRUD de `/api/sexo` e já contém modelos e migrações do catálogo. Avaliações, ocasiões de uso e favoritos fazem parte da proposta do projeto.

## Rodar localmente

Use PHP 8.1 ou posterior compatível com as dependências do projeto, Composer 2 e MySQL. Crie um banco local e configure as variáveis `DB_*` no `.env`.

```bash
git clone https://github.com/bagaaz/sistema_perfumes.git
cd sistema_perfumes
cp .env.example .env
# Configure o banco antes de migrar.
composer install
php artisan key:generate
php artisan migrate
php artisan db:seed
php -S 127.0.0.1:8000 -t public public/index.php
```

A raiz responde com a versão da aplicação. Teste a API com `curl http://127.0.0.1:8000/api/sexo`.
