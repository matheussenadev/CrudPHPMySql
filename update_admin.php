<?php

@include 'config.php';

$id = $_GET['edit'];

if(isset($_POST['atualizar_produto'])){

    $nome_produto = $_POST['nome_produto'];
    $preco_produto = $_POST['preco_produto'];
    $imagem_produto = $_FILES['imagem_produto']['name'];
    $imagem_produto_tmp_name = $_FILES['imagem_produto']['tmp_name'];
    $imagem_produto_folder = 'uploaded_img/'.$imagem_produto;

    if(empty($nome_produto) || empty($preco_produto) || empty($imagem_produto)){
        $mensagem[] = 'preencha todos os campos';
    }else{
        $update = "UPDATE produtos SET nome='$nome_produto', preco= '$preco_produto', imagem='$imagem_produto' WHERE id = $id";
        $upload = mysqli_query($connection,$update);
        if($upload){
            move_uploaded_file($imagem_produto_tmp_name, $imagem_produto_folder);
        }else{
            $mensagem[] = 'Não foi possível adicionar o produto';
        }
    }

};
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <title>Página de Edição</title>

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
    <div class="admin-product-form-container centered">

            <?php  
            
            $select = mysqli_query($connection, "SELECT * FROM produtos WHERE id = $id");
            while($row = mysqli_fetch_assoc($select)){

            
            
            ?>

        <form action="<?php $_SERVER['PHP_SELF'] ?>" method = "post" enctype = "multipart/form-data">
            <h3>Atualizar produto</h3>
            <input type="text" placeholder = "Adicione seu produto" value = "<?php $row['nome'];?>" name = "nome_produto" class = "box">
            <input type="number" placeholder = "Adicione o preço do produto" value = "<?php $row['preco'];?>" name = "preco_produto" class = "box">
            <input type="file" name = "imagem_produto" accept = "image/png, image/jpeg, image/jpg" class = "box">
            <input type="submit" class = "btn" name = "atualizar_produto" value = "atualizar produto">
            <a href="admin_page.php" class= "btn">Voltar</a>
        </form>

        <?php }; ?>
    </div>
    </div>
</body>
</html>
