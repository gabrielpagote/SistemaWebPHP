<?php

require "Conexao.php";

class SistemasRepositoryPDO
{

    private $conexao;

    public function __construct()
    {
        $this->conexao =  Conexao::criar();
    }

    public function listarTodos()
    {
        $sistemasLista = array();

        $sql = "SELECT * FROM sistemas";
        $sistemas = $this->conexao->query($sql);
        if (!$sistemas) return false;

        while ($sistema = $sistemas->fetchObject()) {
            array_push($sistemasLista, $sistema);
        }
        return $sistemasLista;
    }

    public function salvar($sistema): bool
    {
        $sql = "INSERT INTO sistemas (titulo, poster, sinopse, nota) 
        VALUES (:titulo, :poster, :sinopse, :nota)";
        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(':titulo', $sistema->titulo, PDO::PARAM_STR);
        $stmt->bindValue(':sinopse', $sistema->sinopse, PDO::PARAM_STR);
        $stmt->bindValue(':nota', $sistema->nota, PDO::PARAM_STR);
        $stmt->bindValue(':poster', $sistema->poster, PDO::PARAM_STR);

        return $stmt->execute();
    }

    public function favoritar(int $id)
    {
        $sql = "UPDATE sistemas SET favorito = NOT favorito WHERE id=:id";
        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(':id', $id, PDO::PARAM_INT);
        if ($stmt->execute()) {
            return "ok";
        } else {
            return "erro";
        }
    }
}
