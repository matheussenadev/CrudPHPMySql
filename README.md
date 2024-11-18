# CrudPHPMySql
<div align="center">
  <h1>DESCRIÇAO DO PROJETO</h1>
  <p>O projeto realizado visa desenvolver um CRUD (grupo de comandos de linguagem SQL que é utilizado para recuperar, incluir, remover e modificar informações dentro de um banco de dados), tendo como base a linguagem de programação back-end PHP. A aplicação é complementada com um banco de dados local, em que consultas SQL são responsáveis ​​pelo gerenciamento dos registros de maneira eficiente e segura. Além disso, o sistema faz uso de HTML para a estruturação do conteúdo, CSS para estilização, e conta com o suporte de frameworks como o Bootstrap para tornar o design responsivo, elegante e intuitivo.</p>
<p>A aplicação foca no gerenciamento de produtos, permitindo que os usuários realizem o cadastro de produtos com as seguintes parâmetros: Nome do Produto, Preçoe Imagem de Identificação. A interface de usuário foi projetada para ser amigável e acessível, otimizando a experiência do usuário ao navegar e realizar operações no sistema.
Para garantir a segurança e o controle de acesso, o aplicativo inclui uma área de login onde os usuários precisam inserir um nome e senha válidos para acessar as funcionalidades principais. Uma vez autenticados, os usuários têm a possibilidade de cadastrar novos produtos , editar informações de produtos existentes (útil para corrigir dados inseridos erroneamente ou realizar atualizações), excluir registros que não são mais necessários e visualizar os produtos cadastrados em formato gráfico.</p>
<p>A visualização gráfica dos dados é feita com o auxílio do Google Charts , que transforma informações em gráficos interativos e dinâmicos, exibindo, por exemplo, uma porcentagem de produtos cadastrados. Isso oferece aos usuários uma visão clara e intuitiva do conjunto de dados disponíveis, permitindo melhor análise e tomada de decisões.</p>
  <img src="https://via.placeholder.com/150" alt="Imagem Exemplo" width="150" height="150">
  <br>
  <a href="https://github.com/seu-usuario/seu-repositorio">
    <img src="https://img.shields.io/badge/Visitar%20Projeto-GitHub-blue" alt="Visitar Projeto">
  </a>
</div>
<div>
  <h1 align="center">FUNCIONALIDADES</h1>
  <h3>CADASTRO, EDIÇÂO E EXCLUSAO DE PRODUTOS</h3>
  <p>
    A funcionalidade de cadastro permite que os usuários adicionem novos produtos ao sistema. Para realizar o cadastro, o usuário precisa preencher os seguintes campos obrigatórios:
<li>Nome do Produto : Representa o título ou identificação do produto.
<li>Preço : Define o valor do produto. Pode ser inserido como um número decimal.
<li>Imagem de Identificação : Permite o upload de uma imagem associada ao produto, facilitando a identificação visual.
  </p>
  <p>
    A funcionalidade de edição foi desenvolvida para corrigir ou atualizar informações de produtos já cadastrados. Com essa funcionalidade, o usuário pode alterar qualquer um dos campos inseridos anteriormente.
  </p>
  <p>
    A funcionalidade de exclusão é responsável por remover permanentemente registros do sistema. Ela permite que o usuário exclua produtos que não sejam mais necessários ou que foram inseridos por engano.
  </p>
  <h3>SISTEMA DE LOGIN</h3>
  <p>
    A funcionalidade de login é uma parte essencial do sistema, responsável por controlar o acesso às principais operações do CRUD. O objetivo é garantir que apenas usuários autorizados possam gerenciar os produtos e visualizar os dados. Para acessar o sistema, o usuário precisa inserir um nome de usuário e uma senha válida.
  </p>
  <h3>VISUALIZAÇAO DOS DOS DADOS A PARTIR DE GRAFICOS</h3>
  <p>
    A aplicação oferece uma maneira clara e visual de representar os dados por meio de gráficos desenvolvidos com a tecnologia Google Charts . Os gráficos fornecem uma visualização interativa e dinâmica dos produtos cadastrados no sistema, facilitando a análise das informações. 
  </p>
</div>
<div>
  <h1 align="center">FERRAMENTAS USADAS</h1>
  <h3>PHP</h3>
  <p> O PHP desempenha um papel fundamental como a linguagem de programação back-end responsável por todo o processamento e lógica do sistema. Sua função principal nesta aplicação é gerenciar as operações de CRUD (Criar, Ler, Atualizar e Excluir) no banco de dados.</p>
  <h3>MySQL</h3>
  <p>O MySQL é o banco de dados utilizado na aplicação para armazenar todas as informações de maneira organizada e segura.</p>
   <h3>Bootstrap</h3>
  <p>
    O Bootstrap é um framework de front-end que facilita o desenvolvimento de interfaces modernas, responsivas e amigáveis ​​ao usuário.
  </p>
  <h3>Google Charts</h3>
  <p>
    O Google Charts é utilizado para gerar gráficos dinâmicos e interativos que representam visualmente os dados armazenados na aplicação. 
  </p>
</div>
<div>
  <h1 align="center">CONSULTAS SQL</h1>
  <p>$insert = "INSERT INTO produtos(nome, preco, imagem) VALUES('$nome_produto','$preco_produto','$imagem_produto')";</p>
  <p>mysqli_query($connection, "DELETE FROM produtos WHERE id = $id");</p>
  <p>$select = mysqli_query($connection, "SELECT * FROM produtos");</p>
  <p>$resultNiveisAva = "SELECT * FROM produtos";</p>
  <p>$resultUsuario = "INSERT INTO produtos (id, nome_produto) VALUES ('$id', '$ql')";</p>
  <p>$sql_code = "SELECT * FROM  usuarios WHERE nome_usuario = '$nome' AND senha_usuario = '$senha'";</p>
  <p> $update = "UPDATE produtos SET nome='$nome_produto', preco= '$preco_produto', imagem='$imagem_produto' WHERE id = $id";</p>
  <p>$select = mysqli_query($connection, "SELECT * FROM produtos WHERE id = $id");</p>
</div>

<div align="center">
  <h1>Imagens do Projeto</h1>
<h4>Tela de login</h4>
<img src="" width="900px"/>
<h4>Tela de Cadastro</h4>
<img src="https://github.com/matheussenadev/CrudPHPMySql/blob/main/imgsCrud/TelaCadastro.PNG" width="900px"/>
<h4>Tela de Edição</h4>
<img src="" width="900px"/>
<h4>Tela de Dados</h4>
<img src="" width="900px"/>
</div>
