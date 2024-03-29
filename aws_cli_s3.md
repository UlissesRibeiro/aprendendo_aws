## Gerenciando S3 via AWS CLI

<p>Primeiramente faça o download do AWS CLI, disponivel <a href="https://aws.amazon.com/pt/cli/">aqui</a>, baseado no seu S.O .</p>

<p>Uma vez baixado e instalado, é necessário fazer as configurações iniciais :

- <b>Necessario ter usuario no IAM</b>

- Rodar o comando 
    
        aws configure

- Passar a chave de acesso IAM do usuario criado
- Secret key do usuario criado
- Pode passar se quiser uma região default

</p>


## Referência de comandos

<p>Todos os comandos estão disponiveis na documentação oficial <a href="https://docs.aws.amazon.com/cli/latest/">aqui </a> </p>


- Listar buckets

        aws s3 ls

- Listar conteudo dos buckets

        aws s3 ls nome-do-bucket

- copiar arquivos local para S3


        aws s3 cp /path/do/arquivo s3://seu-bucket/

- Criar um bucket

        aws s3 mb s3://nome-do-bucket

- Mover objetos de um bucket para outro

        aws s3 mv s3://bucket-um/arquivo s3://bucket-dois/

- Liberando o arquivo para acesso publco em segundos, no exemplo 3 minutos

        aws s3 presign s3://seu-bucket/seu-arquivo --expires-in 180

- Para liberar por dias  usar : 

        aws s3 presign s3://seu-bucket/seu-arquivo --expires-in $((86400 * 7))

- Deletar buckets

        aws s3 rb s3://seu-bucket
        aws s3 rb s3://seu-bucket --force (caso não esteja vazio)

- Deletas objetos do bucket

        aws s3 rm s3://seu-bucket/nome-do-arquivo