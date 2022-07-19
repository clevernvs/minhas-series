<h1>MinhasSéries</h1>

<p>
    A MinhasSeries é uma aplicação web para cadastro de séries com temporadas e episódios.
</p>

<br>
<h2>🔧 O que foi utilizado</h2>

<p>
    <li><a href="https://laravel.com/">Laravel</a> - Framework PHP</li>
    <li><a href="#">NGinx</a> - Servidor</li>
    <li><a href="#">MySQL</a> - Banco de Dados Relacional</li>
    <li><a href="#">Redis</a></li>
    <li><a href="https://mailtrap.io/">Mailtrap</a> - para envio de E-mail</li>
</p> 

<br>
<h2>🆙 Utilizando o Projeto</h2>
<br>

<p>
    Obs: O projeto utiliza o Docker como infraestrutura.
</p>
<br>

<p>
    Clone o repositório remoto do projeto para um reposítório local
</p>
<pre>$ git clone https://github.com/clevernvs/minhas-series.git</pre>
<br>

<p>
    Entre no repositório local do projeto e faça uma cópia do arquivo ".env.example" renomeando para ".env"
</p>
<pre>
$ cd minhas-series
$ cp .env.example .env 
</pre>
<br>

<p>
    Defina as variáveis de ambiente no arquivo ".env" de acordo com a suas preferência
</p>
<br>

<p>
    Suba os containers da aplicação com Docker Compose
</p>
<pre>$ docker-compose up -d</pre>
<br>

<p>
    Execute o bash do container "app"
</p>
<pre>$ docker-compose exec app bash</pre>
<br>

<p>
    Baixe e instale as dependências do projeto local
</p>
<pre>$ composer install</pre>
<br>

<p>
    Gere a chave para a variável de ambiente "APP_KEY"
</p>
<pre>$ php artisan key:generate</pre>
<br>

<p>
    Entre no navegador de sua preferência e acesse o projeto pelo:
</p>
https://localhost:8989


