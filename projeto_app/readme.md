## O Projeto

- O projeto vai consistir em ser uma aplicação web simples, um CRUD, em PHP.
- Onde o front vai estar numa EC2, se comunicando com o banco na RDS.
- E os arquivos são mapeados na EFS


## Passos para criar o lab:

- Criar a EC2
- Definir as regras de entrada e saida
- Regras de Entrada para liberar apenas no SEU IP :
	- 22 SSH
	- 80 HTTP
	- ICMP - IPv4
- Regras de Saida para liberar apenas no SEU IP :
	- 80 HTTP

- Instalar :
	- mysql
	- apache2
	- php php-mysql
	
- codigo base de conexão com banco :


      <?php
      $host = "seu-endpoint-rds-aqui";
      $user = "seu-usuario";
      $password = "sua-senha";
      $dbname = "sua-database-se-houver"; //para apenas testar a conexão não precisa da database
      session_start();

      $conn = mysqli_connect($host, $user,$password, $dbname);


      if (!$conn) {
          die("A conexão falhou: " . mysqli_connect_error());
      }
          echo "Conexão estabelecida com sucesso";

      ?>

- codigo base para inserir dados no banco :


      <?php

      include 'con.php';

      $sql = "INSERT INTO usuarios(nome,email,senha)
      VALUES ('John', 'nome@mail.com', '1234')";

      if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }

      $conn->close();
      ?>