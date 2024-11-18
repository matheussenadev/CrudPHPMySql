<?php
    include('protect.php');
    
    @include 'config.php';
if(isset($_POST['adicionar_produto'])){

    $nome_produto = $_POST['nome_produto'];
    $preco_produto = $_POST['preco_produto'];
    $imagem_produto = $_FILES['imagem_produto']['name'];
    $imagem_produto_tmp_name = $_FILES['imagem_produto']['tmp_name'];
    $imagem_produto_folder = 'uploaded_img/'.$imagem_produto;

    if(empty($nome_produto) || empty($preco_produto) || empty($imagem_produto)){
        $mensagem[] = 'preencha todos os campos';
    }else{
        $insert = "INSERT INTO produtos(nome, preco, imagem) VALUES('$nome_produto','$preco_produto','$imagem_produto')";
        $upload = mysqli_query($connection,$insert);
        if($upload){
            move_uploaded_file($imagem_produto_tmp_name, $imagem_produto_folder);
            $mensagem[] = 'Novo produto adicionado com sucesso';
        }else{
            $mensagem[] = 'Não foi possível adicionar o produto';
        }
    }

};

if(isset($_GET['delete'])){
    $id = $_GET['delete'];
    mysqli_query($connection, "DELETE FROM produtos WHERE id = $id");
    header('location:admin_page.php');
};



?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Inicial</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">

    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        if(isset($mensagem)){
            foreach($mensagem as $mensagem){
                echo '<span class = "mensagem">' .$mensagem. '</span>';
            }
        }
    ?>
<div class="container">
    <div class="admin-product-form-container">
        <form action="<?php $_SERVER['PHP_SELF'] ?>" method = "post" enctype = "multipart/form-data">
            <h3>Adicionar novo produto</h3>
            <input type="text" placeholder = "Adicione seu produto" name = "nome_produto" class = "box">
            <input type="number" placeholder = "Adicione o preço do produto" name = "preco_produto" class = "box">
            <input type="file" name = "imagem_produto" accept = "image/png, image/jpeg, image/jpg" class = "box">
            <input type="submit" class = "btn" name = "adicionar_produto" value = "adicionar produto">
        </form>
    </div>

        <?php
        
            $select = mysqli_query($connection, "SELECT * FROM produtos");

        ?>

        <div class="display_produtos">
            <table class = "tabela_display_produtos">
             <thead>
                <tr>
                    <th>Imagem do Produto</th>
                    <th>Nome do Produto</th>
                    <th>Preço do Produto</th>
                    <th>Ação</th>
                 </tr>
            </thead>
            <?php while($row = mysqli_fetch_assoc($select)){ ?>
            <tr>
                <td><img src="uploaded_img/<?php echo $row['imagem'];?>" height = "100" alt=""></td>
                <td><?php echo $row['nome'];?></td>
                <td><?php echo $row['preco'];?>/-</td>
                <td>
                    <a href="update_admin.php?edit=<?php echo $row['id'];?>" class = "btn"><i class="fas fa-edit"></i> Editar</a>
                    <a href="admin_page.php?delete=<?php echo $row['id'];?>" class = "btn"><i class="fas fa-trash"></i> Deletar</a>
                </td>
            </tr>  
            <?php  };?>
        </table>
        
        </div>

        <div class = "botoes">
           <button class="sairbtn"><a href="logout.php" class = "sairlink">Sair</a></button> 
           
            <button class = "sairbtn"><a href="dados.php" class = "sairlink">Gráficos</a></button>
        </div>

        

</div>


</body>
</html>
