<?php require_once '../../layout/head.php' ?>
<main role="main" class="container">
    <div class="starter-template">
        <div class="lead" style="margin-top: 100px">
            <h2>
                Cadastro de Raças
            </h2>
            <div class="row">
                <form action="controller.php" method="post">
                    <input type="hidden" name="op" value="2">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="nome">Nome</label>
                        </div>
                        <input type="text" class="form-control" id="nome" name="nome" required>
                    </div>
                    <button class="btn btn-success">Salvar</button>
                </form>
            </div>
        </div>
    </div>
</main><!-- /.container -->
<?php require_once '../../layout/footer.php' ?>
<script src="formulario.js"></script>