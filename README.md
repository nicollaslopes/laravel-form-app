Este é um projeto de um app de envio de currículos. 

## Tecnologias utilizadas 

- Laravel 
- PHP v8.1 
- MySQL 
- Docker 

## Para localmente testar em uma máquina 
- Clone e acesse o diretório do projeto, instale as dependências com o comando `composer install` 
- Execute o comando `docker compose up -d` para subir os containers 
- Crie um arquivo `.env` e copie os arquivos do `.env.example` alterando as variáveis do banco de dados 
- Execute o comando `php artisan key:generate` 
- Execute o comando `php artisan migrate` 
- Para iniciar o projeto, execute no seu terminal o comando `php artisan serve` 
- Acesse a url `http://localhost:8000`
