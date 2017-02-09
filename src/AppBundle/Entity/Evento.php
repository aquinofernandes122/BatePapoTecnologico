<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Evento
 *
 * @ORM\Table(name="evento")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\EventoRepository")
 */
class Evento
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nome", type="string", length=45)
     */
    private $nome;

    /**
     * @var string
     *
     * @ORM\Column(name="cidade", type="string", length=45)
     */
    private $cidade;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_hora", type="datetime")
     */
    private $dataHora;

    /**
     * @var string
     *
     * @ORM\Column(name="local", type="string", length=100)
     */
    private $local;

    /**
     * @var string
     *
     * @ORM\Column(name="descrissão", type="string", length=255)
     */
    private $descrissão;

    /**
     * @var string
     *
     * @ORM\Column(name="tipo", type="string", length=45)
     */
    private $tipo;

    /**
     * @var int
     *
     * @ORM\Column(name="minicurso_id", type="integer")
     */
    private $minicursoId;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nome
     *
     * @param string $nome
     *
     * @return Evento
     */
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get nome
     *
     * @return string
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set cidade
     *
     * @param string $cidade
     *
     * @return Evento
     */
    public function setCidade($cidade)
    {
        $this->cidade = $cidade;

        return $this;
    }

    /**
     * Get cidade
     *
     * @return string
     */
    public function getCidade()
    {
        return $this->cidade;
    }

    /**
     * Set dataHora
     *
     * @param \DateTime $dataHora
     *
     * @return Evento
     */
    public function setDataHora($dataHora)
    {
        $this->dataHora = $dataHora;

        return $this;
    }

    /**
     * Get dataHora
     *
     * @return \DateTime
     */
    public function getDataHora()
    {
        return $this->dataHora;
    }

    /**
     * Set local
     *
     * @param string $local
     *
     * @return Evento
     */
    public function setLocal($local)
    {
        $this->local = $local;

        return $this;
    }

    /**
     * Get local
     *
     * @return string
     */
    public function getLocal()
    {
        return $this->local;
    }

    /**
     * Set descrissão
     *
     * @param string $descrissão
     *
     * @return Evento
     */
    public function setDescrissão($descrissão)
    {
        $this->descrissão = $descrissão;

        return $this;
    }

    /**
     * Get descrissão
     *
     * @return string
     */
    public function getDescrissão()
    {
        return $this->descrissão;
    }

    /**
     * Set tipo
     *
     * @param string $tipo
     *
     * @return Evento
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;

        return $this;
    }

    /**
     * Get tipo
     *
     * @return string
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * Set minicursoId
     *
     * @param integer $minicursoId
     *
     * @return Evento
     */
    public function setMinicursoId($minicursoId)
    {
        $this->minicursoId = $minicursoId;

        return $this;
    }

    /**
     * Get minicursoId
     *
     * @return int
     */
    public function getMinicursoId()
    {
        return $this->minicursoId;
    }
}

