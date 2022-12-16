# Lumen PHP Framework

[![Build Status](https://travis-ci.org/laravel/lumen-framework.svg)](https://travis-ci.org/laravel/lumen-framework)
[![Total Downloads](https://img.shields.io/packagist/dt/laravel/lumen-framework)](https://packagist.org/packages/laravel/lumen-framework)
[![Latest Stable Version](https://img.shields.io/packagist/v/laravel/lumen-framework)](https://packagist.org/packages/laravel/lumen-framework)
[![License](https://img.shields.io/packagist/l/laravel/lumen)](https://packagist.org/packages/laravel/lumen-framework)

Laravel Lumen is a stunningly fast PHP micro-framework for building web applications with expressive, elegant syntax. We believe development must be an enjoyable, creative experience to be truly fulfilling. Lumen attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as routing, database abstraction, queueing, and caching.

## Official Documentation

Documentation for the framework can be found on the [Lumen website](https://lumen.laravel.com/docs).

## Contributing

Thank you for considering contributing to Lumen! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Security Vulnerabilities

If you discover a security vulnerability within Lumen, please send an e-mail to Taylor Otwell at taylor@laravel.com. All security vulnerabilities will be promptly addressed.

## License

The Lumen framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

## Configuração

1) Primeiramente instalar o XAMPP na última versão disponível (PHP, APACHE e MYSQL)
2) Abrir o Xampp Panel e startuar o Apache o MYSQL
3) Clonar o repositório na pasta htdocs (c:\xampp\htdocs), tem o arquivo api-alunos.zip (que fica mais fácil pra ti)
4) Abrir a URL http://localhost/phpmyadmin e importar o .SQL (alunos_db.sql banco de dados da aplicação, está dentro do arquivo api-alunos-zip)
5) Importar a collection para dentro do Postman e realizar as chamadas \o/

## Estrutra do projeto

Utilizei um simples MVC (poderia ter utilizado design pattern, injeção de dependência mas ficaria complexo), ficando da seguinte maneira:
1) A requisição chega através das rotas (routes/web.php)
2) Após são envidas para os controllers (app\http\controllers) que tratam as requisições
3) Temos a Service que é responsável pelas regras negócio (não fiz nada, não sabia o que tu ia utilizar ahehauehuaheuhaeuha) 
4) Temos também a Repository que é a responsavel pela parte do banco (CRUD), criei o crud do Aluno e só o insert das Notas, depois tu altera como tu quiser
5) API não tem autenticação
