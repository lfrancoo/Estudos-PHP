<?php
namespace Escola;

class Professor {
    public $nome;
    public $disciplina;

    public function __construct($nome, $disciplina) {
        $this->nome = $nome;
        $this->disciplina = $disciplina;
    }

    public function mostrar() {
        echo "Nome do professor: {$this->nome} - Matérias que leciona: {$this->disciplina}<br>";
    }
}
?>

<?php
namespace Alunos;

class Aluno {
    public $nome;
    public $curso;

    public function __construct($nome, $curso) {
        $this->nome = $nome;
        $this->curso = $curso;
    }

    public function mostrar() {
        echo "Aluno: {$this->nome} - Está cursando: {$this->curso}<br>";
    }
}
?>