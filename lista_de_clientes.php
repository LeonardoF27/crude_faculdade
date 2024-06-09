<h1>Lista de clientes</h1>

<?php
    $sql = "SELECT * FROM  cliente";

    $res = $conn->query($sql);

    $qtd = $res->num_rows;

    if($qtd > 0){
        print "<table class='table table-hover table-striped table-bordered'>";
        print "<tr>";
        print "<tr>";
        print "<td>Id</td>";//tinha dois Nome aqui coloquei Id
        print "<td>Nome</td>";
        print "<td>Pedido</td>";
        print "<td>Endereço</td>";
        print "<td>Número</td>";
        print "<td>Ações</td>";
        print "</tr>";
        while($row = $res->fetch_object()){
            print "<tr>";
            print "<td>".$row->id."</td>";
            print "<td>".$row->nome."</td>";
            print "<td>".$row->pedido."</td>";
            print "<td>".$row->endereco."</td>";
            print "<td>".$row->numero."</td>";
            print "<td>
            <button onclick=\"location.href='?page=editar&id=".$row->id."';\" class='btn btn-success'>Editar</button>

                <button onclick=\"if(confirm('Tem certeza que deseja excluir ?')){location.href='?page=salvar&acao=excluir&id=".$row->id."';}else{false;}\" class='btn btn-danger'>Excluir</button>
            </td>";
            print "</tr>";
        }
        print "</table>";
    }else{
        print "<p class='alert alert-danger'>Não encontrou resultados</p>";
    }
?>