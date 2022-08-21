<?php 
include_once "../base/inicializa.php";
include_once "../includes/header.php";

if(isset($_GET['i'])){
    $id = $_GET['i'];
    $q = $database->query("SELECT m.*, i.nome as igreja FROM membros m JOIN igrejas i ON i.id = m.pertence_igreja WHERE m.id = '$id'");
    $result = $database->fetch_object($q);
}
?>

<link rel="stylesheet" href="../css/style.css">
<script src="../js/edit.js"></script>
<div class="center">
    <a class="btn" style="width:40px" href="../index.php">Voltar</a>
    <form action="../php_action/delete.php" method="POST">
        <table class="form_table">
            <tr>
                <th>Nome</th>
                <th>CPF</th>
                <th>Email</th>
                <th>Data de Nascimento</th>
                <th>Telefone</th>
                <th>Logradouro</th>
                <th>Cidade</th>
                <th>Estado</th>
                <th>Igreja</th>
                <th>Excluir</th>
            </tr>
            <tr>
                <td><textarea disabled id="area_nome"><?=$result->nome?></textarea></td>
                <td><textarea disabled id="area_cpf"><?=$result->cpf?></textarea></td>
                <td><textarea disabled id="area_email"><?=$result->email?></textarea></td>
                <td><textarea disabled id="area_data"><?=data($result->nascimento)?></textarea></td>
                <td><textarea disabled id="area_tel"><?=$result->telefone?></textarea></td>
                <td><textarea disabled id="area_log"><?=$result->logradouro?></textarea></td>
                <td><textarea disabled id="area_cidade"><?=$result->cidade?></textarea></td>
                <td><textarea disabled id="area_estado"><?=$result->estado?></textarea></td>
                <td><textarea disabled id="area_igreja"><?=$result->igreja?></textarea></td>
                <td><input class="btn delete" name="delete" type="submit" value="Excluir"></td>
            </tr>
        </table>
        <input name="id_perfil" type="hidden" value="<?=$id?>">
    </form>
    <button class="btn" style="width:60px" onclick="edit(<?=$id?>)" id="editar" name="editar">Editar</button>
</div>

<?php 
include_once "../includes/footer.php";
?>