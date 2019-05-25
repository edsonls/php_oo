<?php require_once '../../layout/head.php' ?>
<main role="main" class="container">
    <div class="starter-template">
        <div class="lead" style="margin-top: 100px">
            <h2>Raças
                <a href="formulario.php" class="btn btn-success">
                    Cadastrar
                </a>
            </h2>
            <table class="table">
                <thead class="thead-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Ações</th>
                </tr>
                </thead>
                <tbody id="listRacas">

                </tbody>
            </table>
        </div>
    </div>
</main><!-- /.container -->
<?php require_once '../../layout/footer.php' ?>
<script src="index.js"></script>