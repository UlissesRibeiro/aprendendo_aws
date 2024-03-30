## Introdução aos storages

<p>Irei falar aqui um pouco sobre os serviços de storage disponiveis na AWS, sendo :

- S3
- Glacier
- EBS
- EFS
- Storage Gateway
</p>

### S3
<img src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/bc/Amazon-S3-Logo.svg/100px-Amazon-S3-Logo.svg.png" width="45">

<p><b>Amazon S3</b> ou <b>Amazon Simple Storage Service</b>, é um serviço oferecido ela Amazon Web Services(AWS) que fornece armazenamento de objetos por meio de uma interface de serviço web.</p>

<p>O S3 pode armazenar qualquer tipo de objeto, o que permite usos como armazenamento para aplicativos de internet, bacups, recuperação de desastres, arquivos de dados, etc.</p>

<strong>Obs.: Arquivos de mais de 160GB deve ser upado usando AWS CLI.</strong>

### Classes de armazenamento S3

O S3 possiu 9 classes, mas irei abordas as mais "relevantes"

- Standard : O padrão, um armazenamento de uso geral para dados acessados com frequência.
- Standard-Infrequent Access, projetado para dados acessados com menos frequência como, backups e dados
de recuperação de desastres.
- Intelligent-Tiering, move objetos automaticamente para uma classe de armazenamento mais econômica.
- Glacier Deep Archive, é o armazenamento de menor custo para dados de arquivamento de longa duração
que são acessados menos de uma vez por ano.

<b>Consulte <a href="https://aws.amazon.com/pt/s3/pricing/?nc=sn&loc=4">aqui</a> informações sobre valores, e tempo de <a href="https://aws.amazon.com/pt/s3/storage-classes/?gclid=Cj0KCQjwzZmwBhD8ARIsAH4v1gWAFT_mZrBG3Ly5g1lKmas-v-gpTk3wkyJxcBX43HFXXPONRg28UooaAshjEALw_wcB&trk=9c7f9c59-8d98-452d-8a14-441a9b6492f3&sc_channel=ps&ef_id=Cj0KCQjwzZmwBhD8ARIsAH4v1gWAFT_mZrBG3Ly5g1lKmas-v-gpTk3wkyJxcBX43HFXXPONRg28UooaAshjEALw_wcB:G:s&s_kwcid=AL!4422!3!589951437116!e!!g!!arquivo%20s3!16393976584!133547552533">recuperação de arquivos</a>!</b>