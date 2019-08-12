<?php
require "classes/alunos.php";

$nome = $_POST["nome"];
$matricula = $_POST["matricula"];
$curso = $_POST["curso"];

$aluno = new Alunos();

$aluno->setNome($nome);
$aluno->setCurso($curso);
$aluno->setMatricula($matricula);

echo $aluno->getNome()."br";
echo $aluno->getCurso()."br";
echo $aluno->getMatricula()."br";
?>
