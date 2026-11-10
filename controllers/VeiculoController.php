<?php
// Recebe a requisição e chama o Model e a View
/*
Curso: Engenharia de Software
Disciplina: Linguagem e Tecnicas de Programacao
Professor: Flores
Turma: ESOFT-2
Componentes:
          260081732 - Alan Cristian dos Santos Costa
          260071312 - Gabriel Felipe Albano Grendel
          260140792 - Gustavo Ramos Marcondes
          260052892 - Marcio Jose Aguiar Filho
          260103602 - Victor Asaf Antunes dos Santos
Data: 03 de Novembro de 2026
Descritivo: Sistema CRUD em PHP com MySQL - Módulo Controller de Veiculos
*/
require_once __DIR__ . '/../models/Veiculo.php';

class VeiculoController{
    private $conn;
    private $veiculo;

    public function __construct($db){
        $this->conn = $db;
        $this->veiculo = new VeiculoModel($this->conn);
    }
    function create($marca, $modelo, $ano, $preco)
{
    $this->veiculo->marca = $marca;
    $this->veiculo->modelo = $modelo;
    $this->veiculo->ano = $ano;
    $this->veiculo->preco = $preco;

    return $this->veiculo->create();
}
}



