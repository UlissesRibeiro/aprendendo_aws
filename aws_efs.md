## Amazon EFS

<img src="docs/images/efs.png" width="50">

### Criando um EFS e vinculando a uma EC2

<p>Primeiramente o que é o EFS? A grosso modo é um NFS/NAS, que você pode usar para compartilhar os arquivos entre varias instâncias EC2!</p>

<p>Para criar um EFS, através do console AWS, busque nos serviços por <b>EFS</b>, e logo na tela principal você vai ver o botão <b>Criar um sistemas de arquivos</b>, clique nele e :

- Informe um nome, apesar de opcional, é bom dar nomes aos bois.
- Selecione a VPC caso tenha mais de uma.
- Clique em criar.

Acesse o EFS criado, e agora para vincular a uma EC2, clique em <b>Anexar</b>, lhe oferencendo algums opções :

- Montar via DNS
- Montar usando o assistente EFS
- Montar usando cliente NFS

A documentação esta <a href="https://docs.aws.amazon.com/efs/latest/ug/installing-amazon-efs-utils.html">aqui sobre a instação do assistente EFS</a>, e sobre as <a href="https://docs.aws.amazon.com/efs/latest/ug/mounting-fs-mount-helper-ec2-linux.html">formas de montagemm</a> .

<b>Importante, para que o EFS seja possivel ser conectado a EC2, vincule ao grupo de segurança da EC2</b>