<?php
require_once 'layout/head.php';
/* Connect to a MySQL database using driver invocation */
$dsn = 'mysql:dbname=iti_malia;host=172.17.0.2;';
$user = 'root';
$password = '123456';

try {
    $dbh = new PDO($dsn, $user, $password);
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}
$racas = $dbh->query("SELECT * FROM racas");

?>
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
                    <tbody>
                    <?php foreach ($racas->fetchAll() as $raca): ?>
                        <tr>
                            <th scope="row"><?= $raca['id'] ?></th>
                            <td><?= $raca['nome'] ?></td>
                            <td>
                                <button type="button" class="btn btn-primary">
                                    Editar
                                </button>
                                <button type="button" class="btn btn-danger">
                                    Deletar
                                </button>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </main><!-- /.container -->
<?php require_once 'layout/footer.php';