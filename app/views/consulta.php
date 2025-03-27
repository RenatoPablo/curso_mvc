<div class="row container">
    <div class="col s12">
        <h3 class="ligth">Pagina consulta</h3>
    </div>
    <div class="col s12">
        <table>
            <tr>
                <th>Nome</th><th>Email</th><th>Ações</th>   
            </tr>

            <?php foreach($consulta as $registo): ?>

                <tr>
                    <td><?php echo $registo['nome']?></td>
                    <td><?php echo $registo['email'] ?></td>
                    <td>
                        <a href="?router=Site/editar/&id=<?php echo base64_encode($registo['id']) ?>">Editar</a> |
                        <a href="?router=Site/confirmaDelete/&id=<?php echo base64_encode($registo['id']) ?>" class="red-text">Excluir</a>
                    </td>
                </tr> 

            <?php endforeach; ?>
        </table>
    </div>
</div>