<?php 
include_once "../includes/header.php";
?>
<link rel="stylesheet" href="../css/style.css">

<a href="../index.php"><button>Voltar</button></a>
<div class="form_cad">
    <form action="../php_action/church_register.php" method="POST">
        <label for="nome">Nome: </label>
        <input id="nome" name="nome" type="text" value="">

        <label for="endereco">Endereco: </label>
        <input id="endereco" name="endereco" type="text" value="">

        <label for="site">Website: </label>
        <input id="site" name="site" type="text" value="">
        
        <label for="foto">Foto: </label>
        <input id="foto" name="foto" type="text" value="">
        </select>
        <input type="submit" id="btn_church" name="btn_church" value="Cadastrar Igreja">
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