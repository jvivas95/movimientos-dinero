<?php


class Movimiento
{
    private $id;
    private $titulo;
    private $importe;
    private $observaciones;
    private $created_at;
    private $usuario_id;

    public function __construct($id, $titulo, $importe, $observaciones, $created_at, $usuario_id)
    {
        $this->id = $id;
        $this->titulo = $titulo;
        $this->importe = $importe;
        $this->observaciones = $observaciones;
        $this->created_at = $created_at;
        $this->usuario_id = $usuario_id;
    }

    // GETTERS
    public function getId()
    {
        return $this->id;
    }

    public function getTitulo()
    {
        return $this->titulo;
    }

    public function getImporte()
    {
        return $this->importe;
    }

    public function getObservaciones()
    {
        return $this->observaciones;
    }

    public function getCreatedAt()
    {
        return $this->created_at;
    }

    public function getUsuarioId()
    {
        return $this->usuario_id;
    }

    //SETTERS

    /*
    public function setId($id)
    {
        $this->id = $id;
    }
    */

    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;
    }

    public function setImporte($importe)
    {
        $this->importe = $importe;
    }

    public function setObservaciones($observaciones)
    {
        $this->observaciones = $observaciones;
    }

    /*
    public function setCreatedAt($created_at)
    {
        $this->created_at = $created_at;
    }
    */

    public function setUsuarioId($usuario_id)
    {
        $this->usuario_id = $usuario_id;
    }

}