<?php
// $dbUserName = "root";
// $dbPassword = "password";
// $pdo = new PDO("mysql:host=mysql; dbname=tq_quest; charset=utf8", $dbUserName, $dbPassword);

// $sql = "SELECT * FROM incomes";
// $statement = $pdo->prepare($sql);
// $statement->execute();
// $incomes = $statement->fetchAll(PDO::FETCH_ASSOC);

// echo "<pre>";
// var_dump($incomes);
// echo "<pre>";






require_once __DIR__ . '/../../vendor/autoload.php';
use App\Incomes;

$incomes = new Incomes();
var_dump($incomes->fetchAllIncomes()) ;















