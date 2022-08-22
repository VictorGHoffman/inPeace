<?php 
include_once "./base/inicializa.php";
include_once "./includes/header.php";

$q = $database->query("SELECT m.*, i.nome as igreja FROM membros m JOIN igrejas i ON i.id = m.pertence_igreja");

?>
<link rel="stylesheet" href="./css/style.css">
<div class="center">
    <div>
        <?php 
        if($database->num_rows($q)){?>
            <table class="form_table">
                <tr>
                    <th>Nome</th>
                    <th>CPF</th>
                    <th>Email</th>
                    <th>Igreja</th>
                </tr>
                <?php 
                while($result = $database->fetch_object($q)){
                    echo "
                    <tr>
                        <td><a href=\"./pages/perfil.php?i=$result->id\">$result->nome</a></td>
                        <td>$result->cpf</td>
                        <td>$result->email</td>
                        <td>$result->igreja</td>
                    </tr>";
                }?>
            </table>
        <?php 
        }else{
            echo "<h2>Nenhum membro cadastrado.</h2>";
        }
        ?>
    </div>
    <div style="display:flex">
        <a class="btn"href="./pages/cad_igreja.php">Cadastrar Igreja</a>
        <a class="btn"href="./pages/cad_membro.php">Cadastrar Membro</a>
    </div>
</div>

<?php 
include_once "./includes/footer.php";
?>
