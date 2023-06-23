<?php

require_once( __DIR__ . "/../vendor/autoload.php" );

use Monolog\logger;
use Monolog\Handler\StreamHandler;
use App\model\Aluno;

$nomedobanco = 'alunos';
$servidordobancodedados = 'localhost';
$usuario = 'root';
$senha = '';

$a = new Aluno();

function get_connection(){
    $dns = "mysql:host=localhost;dbname=chamadasonline; charset=utf8mb4";
    $conn = new \PDO($dns, "root", "");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $conn;
}

$c = get_connection();

$query = "SELECT * FROM alunos";
$statement = $c->prepare($query);
$statement -> execute();

$resultados = $statement->fetchAll(\PDO::FETCH_ASSOC);


?>

<table>

    <thead>

        <tr>

            <th style="background-color: blue; width:200px"> Alunos </th>

            <th style="background-color: green; width:200px">chamadasonline</th>

        </tr>

    </thead>


    <tbody>

        <?php foreach ($resultados as $dados): ?>

            <tr>

                <td style="text-align:center"><?php echo $dados['id']; ?></td>

                <td style="text-align:center"><?php echo $dados['nome']; ?></td>

            </tr>

        <?php endforeach; ?>

    </tbody>

</table>