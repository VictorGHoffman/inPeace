<?php 
session_start();
include_once "../base/inicializa.php";
include_once "../api/api_connect.php";
include_once "../includes/header.php";

$q_igreja = $database->query("SELECT id, nome FROM igrejas");

?>
<link rel="stylesheet" href="../css/style.css">
<a href="../index.php"><button>Voltar</button></a>
<div class="form_cad">
    <form action="../php_action/member_register.php" method="POST">
        <label for="nome">Nome: </label>
        <input id="nome" name="nome" type="text" value="">

        <label for="cpf">CPF: </label>
        <input id="cpf" name="cpf" type="text" value="">

        <label for="nascimento">Data de Nascimento: </label>
        <input id="nascimento" name="nascimento" type="date" value="">
        
        <label for="email">Email: </label>
        <input id="email" name="email" type="text" value="">

        <label for="telefone">Telefone: </label>
        <input id="telefone" name="telefone" type="text" value="">
        
        <label for="logradouro">Logradouro: </label>
        <input id="logradouro" name="logradouro" type="text" value="">

        <label for="estado">Estado: </label>
        <select name="estado" id="estado">
            <option selected disabled value="0">Selecione um estado</option>
            <?php 
            foreach($estados as $estado){
                echo '<option value="' . $estado['id'] . '">' . $estado['nome'] . '</option>';
            }
            ?>
        </select>
        
        <label for="cidade">Cidade: </label>
        <select name="cidade" id="cidade">
            <option selected disabled value="0">Selecione uma cidade</option>
        </select>

        <label for="igreja">Igreja pertencente: </label>
        <select name="igreja" id="igreja">
            <option selected disabled value="0">Selecione uma igreja</option>
            <?php 
            while($result = $database->fetch_object($q_igreja)){
                echo '<option value="'.$result->id.'">'.$result->nome.'</option>';
            }
            ?>
        </select>
        <input type="submit" id="btn_member" name="btn_member" value="Cadastrar Membro">
    </form>
    
    <div style="color:red">
        <?php 
            if(isset($_SESSION['error'])){
                echo $_SESSION['error'];
            }
        ?>
    </div>
</div>

<?php 
if(isset($_SESSION['error'])){
    unset($_SESSION['error']);
}
include_once "../includes/footer.php";
?>

