<?php
// Lógica do CRUD (SELECT, INSERT, UPDATE, DELETE) (GUSTAVO)
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
Descritivo: Sistema CRUD em PHP com MySQL - Módulo Model de Veiculos
*/

class VeiculoModel{
    private $conn;
    private $table_name = "veiculos";
    public $id;
    public $marca;
    public $modelo;
    public $ano;
    public $preco;

    public function __construct($db){
        $this->conn = $db;
    }

    /* fazer */
    function read (){

    }

     /* gustavo */
    function create(){
        /* Monta a consulta*/
        $sql = "INSERT INTO {$this->table_name} (marca, modelo, ano, preco) VALUES(?, ?, ?, ?)";
        /* preparar a consulta*/
        $stmt = $this->conn->prepare($sql);

        return $stmt->execute([
        $this->marca,
        $this->modelo,
        $this->ano,
        $this->preco
        ]);
    }


}