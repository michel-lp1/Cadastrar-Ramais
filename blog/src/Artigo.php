<?php

class Artigo
{

    private $mysql;

    public function __construct(mysqli $mysql)
    {
        $this->mysql = $mysql;
    }

    public function adicionar(string $setor, string $ramal, string $descricao): void
    {
        $insereArtigo = $this->mysql->prepare('INSERT INTO artigos (setor, ramal, descricao) VALUES(?,?,?);');
        $insereArtigo->bind_param('sss', $setor, $ramal, $descricao);// verf o 'ss', se pode escrever outro S 
        $insereArtigo->execute();
    }

    public function remover(string $id): void
    {
        $removerArtigo = $this->mysql->prepare('DELETE FROM artigos WHERE id = ?');
        $removerArtigo->bind_param('s', $id);
        $removerArtigo->execute();
    }

    public function exibirTodos(): array
    {

        $resultado = $this->mysql->query('SELECT id, setor, ramal, descricao FROM artigos');
        $artigos = $resultado->fetch_all(MYSQLI_ASSOC);

        return $artigos;
    }

    public function encontrarPorId(string $id): array
    {
        $selecionaArtigo = $this->mysql->prepare("SELECT id, setor, ramal, descricao FROM artigos WHERE id = ?");
        $selecionaArtigo->bind_param('s', $id);
        $selecionaArtigo->execute();
        $artigo = $selecionaArtigo->get_result()->fetch_assoc();
        return $artigo;
    }

    public function editar(string $id, string $setor, string $ramal, string $descricao): void
    {
        $editaArtigo = $this->mysql->prepare('UPDATE artigos SET setor = ?, ramal = ?, descricao = ? WHERE id = ?');
        $editaArtigo->bind_param('ssss', $setor, $ramal, $descricao, $id);
        $editaArtigo->execute();
    }
}