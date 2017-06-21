<div class="content-wrapper">

    <section class="content-header">
        <h1>
            <?php echo $titulo; ?>
            <small>Optional description</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i>Lista</a></li>
            <li class="active">Clientes</li>
        </ol>
    </section>

    <section class="content">
        <div class="row">
        <a class='btn btn-success' href="<?php echo base_url('index.php/cliente/novo'); ?>">
            Cadastrar Cliente
        </a>
        
        <table id="example1" class="table table-hover">
            <thead>
            <th>#</th>
            <th>Nome Completo</th>
            <th>Telefone</th>
            <th>CPF</th>
            <th>Data de Nascimento</th>
            <th>Endereço</th>
            <th>Cidade</th>
            <th>Estado</th>
            <th>Excluir</th>
            </thead>
            <tbody>
                <?php foreach ($lista as $cliente) { ?>
                    <tr>
                        <td><?= $cliente['idcliente']; ?></td>
                        <td><?= $cliente['nome_completo']; ?></td>
                        <td><?= $cliente['telefone']; ?></td>
                        <td><?= $cliente['cpf']; ?></td>
                        <td><?= $cliente['data_nasc']; ?></td>
                        <td><?= $cliente['endereco']; ?></td>
                        <td><?= $cliente['cidade']; ?></td>
                        <td><?= $cliente['estado']; ?></td>
                        <td>
                            <a class='btn btn-danger' href="<?php echo base_url('index.php/cliente/excluir/' . $cliente['idcliente']); ?>">Excluir</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
        </div>
    </section>
</div>