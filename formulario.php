<?php
require_once 'head.php';
/* Connect to a MySQL database using driver invocation */
$dsn = 'mysql:dbname=iti_malia;host=172.17.0.2;';
$user = 'root';
$password = '123456';

try {
    $dbh = new PDO($dsn, $user, $password);
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}
?>
    <main role="main" class="container">
        <div class="starter-template">
            <div class="lead" style="margin-top: 100px">
                <h2>
                    Cadastro - Raças
                </h2>
                <form action="" method="post">
                    <div class="form-group row">
                        <label for="raca" class="col-sm-2 col-form-label">Nome</label>
                        <div class="col-sm-10">
                            <input type="text" name="raca" class="form-control" id="raca" placeholder="Chow Chow">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary mb-2">Salvar</button>
                </form>
                <?php
                print_r($_POST);
                if (array_key_exists('raca', $_POST)) {
                    $_POST['raca'];
                    $r = $dbh->query("INSERT INTO racas (nome) values ('{$_POST['raca']}')");
                    var_dump($r);
                }
                ?>
            </div>
        </div>
    </main><!-- /.container -->
<?php require_once 'footer.php';