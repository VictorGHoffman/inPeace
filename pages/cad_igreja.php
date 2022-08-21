<?php 
include_once "../includes/header.php";
?>
<link rel="stylesheet" href="../css/style.css">

<div class="form_cad">
    <a class="btn" style="width:40px" href="../index.php">Voltar</a>
    <form action="../php_action/church_register.php" method="POST">
        <div>
            <label for="nome">Nome: </label>
            <input id="nome" name="nome" type="text" value="">
        </div>
        <div>
            <label for="endereco">Endereco: </label>
            <input id="endereco" name="endereco" type="text" value="">
        </div>
        <div>
            <label for="site">Website: </label>
            <input id="site" name="site" type="text" value="">
        </div>
        <div>
            <input class="btn" type="submit" id="btn_church" name="btn_church" value="Cadastrar Igreja">
        </div>

    </form>
</div>
<div style="color:red">
    <?php 
    if(isset($_SESSION['error'])){
        echo $_SESSION['error'];
    }
    ?>
</div>
<?php 
if(isset($_SESSION['error'])){
    unset($_SESSION['error']);
}
include_once "../includes/footer.php";

?>