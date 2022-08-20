<?php 
include_once "../base/inicializa.php";
include_once "../includes/header.php";

if(isset($_GET['i'])){
    $id = $_GET['i'];
    $q = $database->query("SELECT m.*, i.nome as igreja FROM membros m JOIN igrejas i ON i.id = m.pertence_igreja WHERE m.id = '$id'");
}
?>
<a href="../index.php"><button>Voltar</button></a>
<form action="../php_action/delete.php" method="POST">
    <table>
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
            <th>Editar</th>
        </tr>
        <?php 
        while($result = $database->fetch_object($q)){
            $id = $result->id;
            echo "
            <tr>
                <td>$result->nome</td>
                <td>$result->cpf</td>
                <td>$result->email</td>
                <td>".data($result->nascimento)."</td>
                <td>$result->telefone</td>
                <td>$result->logradouro</td>
                <td>$result->cidade</td>
                <td>$result->estado</td>
                <td>$result->igreja</td>
                <td><input name=\"delete\" type=\"submit\" value=\"Excluir\"></td>
                <td><button>Editar</button></td>
            </tr>";
        }
        ?>
    </table>
    <input name="id_perfil" type="hidden" value="<?=$id?>">
</form>


<?php 
include_once "../includes/footer.php";
?>