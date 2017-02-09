<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MiniCurso
 *
 * @ORM\Table(name="mini_curso")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\MiniCursoRepository")
 */
class MiniCurso
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
     * @var int
     *
     * @ORM\Column(name="carga_horaria", type="integer")
     */
    private $cargaHoraria;

    /**
     * @var string
     *
     * @ORM\Column(name="dias", type="string", length=255)
     */
    private $dias;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="horario", type="time")
     */
    private $horario;


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
     * @return MiniCurso
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
     * Set cargaHoraria
     *
     * @param integer $cargaHoraria
     *
     * @return MiniCurso
     */
    public function setCargaHoraria($cargaHoraria)
    {
        $this->cargaHoraria = $cargaHoraria;

        return $this;
    }

    /**
     * Get cargaHoraria
     *
     * @return int
     */
    public function getCargaHoraria()
    {
        return $this->cargaHoraria;
    }

    /**
     * Set dias
     *
     * @param string $dias
     *
     * @return MiniCurso
     */
    public function setDias($dias)
    {
        $this->dias = $dias;

        return $this;
    }

    /**
     * Get dias
     *
     * @return string
     */
    public function getDias()
    {
        return $this->dias;
    }

    /**
     * Set horario
     *
     * @param \DateTime $horario
     *
     * @return MiniCurso
     */
    public function setHorario($horario)
    {
        $this->horario = $horario;

        return $this;
    }

    /**
     * Get horario
     *
     * @return \DateTime
     */
    public function getHorario()
    {
        return $this->horario;
    }
}

