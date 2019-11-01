# stepper 
Desafio para programador backend

#### Problema
1. Criar um formulário de cadastro em três passos com os seguintes campos:
- a. Passo 1: Nome Completo
- b. Passo 1: Data de Nascimento
- c. Passo 2: Endereço (Rua, Número, CEP, Cidade, Estado) (não precisa consultar base de CEP)
- d. Passo 3: Telefone Fixo
- e. Passo 3: Telefone Celular

2. Cada passo deve conter parte do formulário, onde o usuário irá preencher os dados e clicar no botão [ Próximo ]

3. Deve salvar cada etapa do formulário no banco de dados, de forma que caso a janela do navegador fechar, parte dos dados estão salvos e o usuário poderá retomar o preenchimento do formulário

4. Implementar validação de entrada e máscaras neste formulário


#### Implementação do código em ambiente Linux
1. Faça o clone o deste repositório, após isso será necessário instalar as dependências do projeto.
2. Através do terminal, entre na pasta clonada e execute o comando
    ..* composer install
3. Agora será necessário da permisões em algumas pasta antes de rodar o projeto. Ainda no terminal execute o comando:
    ..* sudo chmod 775 -R bootstrap/cache storage/
4. Na sua IDE, faça uma copia do arquivo '.env.example' que fica na pasta raiz do projeto, e altere o nome da copia para '.env'.
 .. 1. Caso queira usar um bando de dados com Mysql, PostgreSQL, MSSQL e etc, altere:
- DB_CONNECTION= tipo-de-conexo
- DB_HOST= endereco-do-banco
- DB_PORT= porta-do-banco
- DB_DATABASE= nome-do-banco
- DB_USERNAME= usuario-do-banco
- DB_PASSWORD= senha
 - Obs: Alterar as frases aoós o sinal de "=", por valores reais
    .. 2. Caso prefira usar sqlite, faça:
            - DB_CONNECTION=sqlite 
            - # DB_HOST= 
            - # DB_PORT= 
            - # DB_DATABASE=
            - # DB_USERNAME=
            - # DB_PASSWORD=
            Obs: Será necessário crir o arquivo 'database.sqlite' dentro da pasta 'database' que está na raiz do projeto.
5. No terminal, depois de acessar a raiz do projeto, execute o comando:
- php artisan migrate
6. E para rodar o projeto, execute:
- php artisan serve
7. Após isso, é só acessar o projeto pela url "localhost:8000" 