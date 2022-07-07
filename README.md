# MinhasSéries

Aplicação de cadastro de Séries com temporadas e episódios.

## Utilizando o projeto

Obs: O projeto utiliza o Docker como infraestrutura

- Clone o projeto remoto para um reposítório local;
~~~~
$ git clone https://github.com/clevernvs/minhas-series.git
~~~~

- Entre no repositório do projeto local e crie uma cópia do arquivo ".env.example";
~~~~
$ cd minhas-series
$ cp .env.example .env
~~~~

- Defina as variaveis de ambiente no arquivo .env de acordo com a sua preferência;

- Suba os containers com Docker Compose;
~~~~
$ docker-compose up -d
~~~~

- Execute o bash do container "app";
~~~~ 
$ docker-compose exec app bash
~~~~

- Baixe e instale as dependências do projeto local;
~~~~
$ composer install
~~~~

- Gere a chave para a variável de ambiente "APP_KEY"
~~~~
$ php artisan key:generate
~~~~

- Entre no navegador de sua escolha e acesse o projeto;
https://localhost:8989
