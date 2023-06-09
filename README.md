Este é um projeto de um app de envio de currículos. 

## Tecnologias utilizadas 

- Laravel 
- PHP v8.2 
- MySQL 
- Docker 

## Para localmente testar em uma máquina 

- Clone e acesse o diretório do projeto, instale as dependências com o comando `composer install` e depois ` npm install`
- Execute o comando `docker compose up -d` para subir os containers 
- Crie um arquivo `.env` e copie os arquivos do `.env.example` alterando as variáveis do banco de dados de acordo com o IP do container do MySQL.
- Execute o comando `php artisan key:generate` 
- Execute o comando `php artisan migrate` 
- Para iniciar o projeto, execute no seu terminal o comando `php artisan serve` e em outro terminal execute `npm run dev`
- Acesse a url `http://localhost:8000`

## Configurando o Mailtrap

- Acesse a url `https://mailtrap.io/signin` e crie uma conta
- Menu lateral "Email Testing" -> "Inboxes" -> "My Inbox"
- Na parte de "Integrations" selecione "Laravel 7+" e em seguinda altere as variáveis do arquivo `.env` de acordo com o que será gerado
```
MAIL_MAILER=smtp
MAIL_HOST=sandbox.smtp.mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=<MAILTRAP-USERNAME>
MAIL_PASSWORD=<MAILTRAP-PASSWORD>
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS=test@gmail.com
MAIL_FROM_NAME=test@gmail.com
```

<img src="public/img/image-email.png" alt="image-email.png">