# medical-api

## Passo a Passo para Configuração e Execução

### 1. Pré-requisitos

Certifique-se de ter o [Docker](https://www.docker.com/get-started) instalado e em execução em sua máquina. O Laravel Sail utiliza o Docker para configurar o ambiente de desenvolvimento.

### 2. Clonar o Repositório

Abra o terminal e execute o seguinte comando para clonar o repositório:

```bash
git clone https://github.com/jrfalcao/medical-api.git
cd medical-api
```

### 3. Copiar o Arquivo de Ambiente

Duplique o arquivo `.env.example` e renomeie para `.env`:

```bash
cp .env.example .env
```

### 4. Instalar as Dependências

Utilize o Composer para instalar as dependências do projeto dentro do contêiner do Sail:

```bash
./vendor/bin/sail composer install
```

### 5. Gerar a Chave da Aplicação

Gere a chave da aplicação Laravel:

```bash
./vendor/bin/sail artisan key:generate
```

### 6. Iniciar o Ambiente com o Sail

Inicie os contêineres do Sail:

```bash
./vendor/bin/sail up -d
```

### 7. Executar as Migrações e Seeders

Execute as migrações para criar as tabelas no banco de dados e os seeders para popular com dados iniciais:

```bash
./vendor/bin/sail artisan migrate --seed
```

### 8. Gerar a Documentação do Swagger

Caso a documentação do Swagger não tenha sido gerada, execute:

```bash
./vendor/bin/sail artisan l5-swagger:generate
```

### 9. Acessar a Documentação do Swagger

Após a geração, a documentação do Swagger estará disponível em:
[http://localhost/api/documentation](http://localhost/api/documentation)

### 10. Testar os Endpoints

Utilize ferramentas como [Postman](https://www.postman.com/) ou [Insomnia](https://insomnia.rest/) para testar os endpoints da API conforme documentado no Swagger.

## Observações

- Certifique-se de que as portas necessárias (como a 80 para o HTTP e 3306 para o MySQL) estejam disponíveis e não em uso por outros serviços em sua máquina.
- Para parar os contêineres do Sail, execute:

  ```bash
  ./vendor/bin/sail down
  ```

- Para mais informações sobre o Laravel Sail, consulte a [documentação oficial](https://laravel.com/docs/11.x/sail).

Seguindo esses passos, você deverá ser capaz de configurar e executar o projeto `medical-api` em seu ambiente local.
