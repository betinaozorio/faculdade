
<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Manutenção de Clientes
            <small>Optional description</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i>Cadastro</a></li>
            <li class="active">Clientes</li>
        </ol>
    </section>

    <section class="content">
        <div class="panel">
        <form action="<?= $acao; ?>" method="POST">

            <div class="form-group">
                <label for="nome_completo">Nome Completo</label>
                <input class="form-control"
                       type="text" name="nome_completo" pattern=".{0}|.{8,}" required title="Minimo de 8 caracteres"
                       value="<?php if (isset($cliente)) echo $cliente['nome_completo'];?>"/>
            </div>
            <div class="form-group">
                <label for="Endereco">Telefone</label>
                <input class="form-control"
                       type="text" name="telefone" required="required"
                       value="<?php if (isset($cliente)) echo $cliente['telefone']; ?>"/>
            </div>
            <div class="form-group">
                <label for="cpf">CPF</label>
                <input class="form-control"
                       type="text" name="cpf" required="required"
                       value="<?php if (isset($cliente)) echo $cliente['cpf']; ?>"/>
            </div>
            <div class="form-group">
                <label for="data_nasc">Data de Nascimento</label>
                <input class="form-control"
                       type="text" name="data_nasc"
                       value="<?php if (isset($cliente)) echo $cliente['data_nasc']; ?>"/>
            </div>
            <div class="form-group">
                <label for="endereco">Endereço</label>
                <input class="form-control"
                       type="text" name="endereco" required="required"
                       value="<?php if (isset($cliente)) echo $cliente['endereco']; ?>"/>
            </div>
            <div class="form-group">
                <label for="cidade">Cidade</label>
                <input class="form-control"
                       type="text" name="cidade" required="required"
                       value="<?php if (isset($cliente)) echo $cliente['cidade']; ?>"/>
            </div>
            <div class="form-group">
                <label for="estado">Estado</label>
                <input class="form-control"
                       type="text" name="estado" required="required"
                       value="<?php if (isset($cliente)) echo $cliente['estado']; ?>"/>
            </div>
            <input type="submit" value="Cadastrar"/>
        </form>
            </div>
    </section>
</div>
