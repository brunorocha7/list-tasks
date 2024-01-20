# Instruções
Considerando que já tenha um ambiente para rodar php (como o xampp), siga as etapas abaixo para executar o projeto localmente:
1. Para baixar o projeto, no terminal execute: ````git clone  https://github.com/brunorocha7/ListaTarefas.git````
2. Instale o composer, no terminal execute: ````composer install````
3. Renomeie o arquivo `.env.example` para `.env`. Esse arquivo contém as configurações do banco de dados local
4. Startar os serviços apache e MySQL no Xampp
5. Rode a migrate para criar o banco de dados: ````php artisan migrate````
6. Inicie um servidor para o projeto executando: ````php artisan serve````
7. Abra um novo terminal para iniciar um servidor para API: ````php artisan serve --port 8001````
8. Para acessar o frontend: http://127.0.0.1:8000/
9. Para consultar as API’s no POSTMAN ou INSOMNIA: http://127.0.0.1:8001/api/tarefas

## Página inicial


![alt text](https://github.com/brunorocha7/list-tasks/blob/main/resources/images/home.png)


## Cadastrar tarefa


![alt text](https://github.com/brunorocha7/list-tasks/blob/main/resources/images/create.png)
![alt text](https://github.com/brunorocha7/list-tasks/blob/main/resources/images/created.png)

## API - Cadastrar tarefa no Postman

![alt text](https://github.com/brunorocha7/list-tasks/blob/main/resources/images/postman_created.png)

## Tabela de endpoints

| Ação | Método | Endpoint | Parâmetros |
| ------ | ------ |------ | ------ |
| Listar | GET | [http://127.0.0.1:8001/api/tarefas] |
| Buscar | GET | [http://127.0.0.1:8001/api/tarefas/{id}] |
| Inserir | POST | [http://127.0.0.1:8001/api/tarefas] | nome, descricao, status |
| Atualizar | PUT | [http://127.0.0.1:8001/api/tarefas/{id}] | nome, descricao, status |
| Deletar | DELETE | [http://127.0.0.1:8001/api/tarefas/{id}] |
