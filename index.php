<?php
require 'alunos_escola.php';


use Escola\Professor;
use Alunos\Aluno;
// Usando namespace Escola
$profEscola = new \Escola\Professor("Alex", "Cursos de tecnologia");
$profEscola->mostrar();

// Usando namespace Alunos
$alunoEscola = new \Alunos\Aluno("Lucas", " Desenvolvimento de Sistemas");
$alunoEscola->mostrar();
?>
