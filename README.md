<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Sobre Aplicação

Essa é uma aplicação desenvolvida com fins didácticos. Onde venho por meio dessa colocar em pratica tudo quanto tenho aprendido dentro do universo da programação. 
O obijetivo central aqui é criar uma "API" na qual eu consiga através de um front-end desenvolvido em "VUE js" eu consiga estabelecer uma conexão clinte and server. Com esse desafio pretendo sair da minha zona de conforto colocar a mão no código e desenvolver uma aplicação inteira do zero, pretendo no meio desse trajeto de aprendizagem utilizar de várias ferramentas as quais ainda não tive contato com intuito de "mistificar/perder o medo"  de achar que ainda não sei programar, rsrsrsrsrs.



## Como Rodar a Aplicação

Para rodar a plicação em sua maquina local é muito simples, basta seguir os comando a baixo que você logo tera aplicação "API" rodando em sua maquina, para interagir com a API instale um "postman" ou desenvolva um dashboard enquando não fianalizo o front-end.

1º Abra o terminal, acesse um diretorio de sua preferência de digite o seguinte comando:
```
 git clone https://github.com/CaiqueDeveloper/api_cbfood.git
```

após fazer o clone da aplicação é necessario navegar até dentro da pasta da aplicação, com o console aberto na pasta apalicação
digite os seguintes comandos:

Baixar/Atualizar todas as dependecias da aplicação
```
 composer update
```
Configurar a Secrret do laravel
```
    php artisan key:generate
```
Configurar o JWT
```
    php artisan jwt:secreet
```


Feito dos esses Passos você precisa configurar o arquivo .env com as credencias do seu banco local ou remoto, apos configurar as credencia do banco vamos rodar as nossas migrate com o comando:
```
    php artisan migrate
```
pronto acabamos de subir todas as nossa tabelas do banco de dados agora vamos rodar as nossa Seeder, para temos acesso aplicação com um usuarios teste. Rode o seguite comando:

```
    php artisan db:seed
```

Pronto Feito isso já temos nosso usuario teste configurado para fazer nosso login na palicação:

e-mail:companyteste@gmail.com
senha: 12345678


