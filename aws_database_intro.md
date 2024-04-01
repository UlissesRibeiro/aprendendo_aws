## Amazon RDS

<p>O Amazon Relational Database Service, ou Amazon RDS (Serviço de banco de dados relacional da Amazon (em inglês)) é um serviço de banco de dados relacional distribuído da Amazon Web Services (AWS).</p>
<p>É um serviço da web executado "na nuvem" projetado para simplificar a configuração, operação e escalonamento de um banco de dados relacional para uso em aplicativos.</p>


### Criando um RDS

- Acesse o painel de serviço e escolhe RDS
- Clique em <b>Criar banco de dados</b>
- Escolha entre os metodos : 
    - Padrão : Onde você vai ter que fazer muitas definições
    - Facil : Simples e direto na criação
- Para estudos prefiro escolher o <b>facil</b>
- Escolha o banco(MySQL,MariaDB,PostgreSQL,etc)
- Escolha o tipo de instancia, usaremos a nivel gratuito.
- Defina uma nome para sua instancia RDS
- Defina o usuario principal ou deixe como admin
- Escolha o tipo de credencial, eu escolhi <b>Self managed</b>, onde posso definir minha senha de acesso para o usuario admin.
- Escolha se o RDS vai se conectar com alguma EC2, no momento escolha que não vai.
- Clique em <b>Criar banco de dados</b>.
- Aguarde um pouco, o processo é demorado, diferente de uma EC2.

<b>Obs.: Por padrão no modo facil, o acesso publico estava desativado, então após a criação você pode editar essa configuração, assim também como definir as regras de entrada e saida, para poder se conectar a partir da sua maquina.</b>

- Após fazer as devidas configurações com a RDS criada, para se conectar, você vai usar o end-point :

        database-1.c76a445guyxbl.us-east-1.rds.amazonaws.com
<i>endpoint de exemplo</i>

- Detalhe, não tem database criada nesse banco!

### Testando conexão da EC2 no banco criado

- No caso optei pelo MySQL, então segue :

        mysql -h endpoint -u usuario -p

- Se fizer tudo certinho, a conexão vai funcionar, lembrando que a EC2 nivel gratuito, é necessário fazer a instalação do MySQL.