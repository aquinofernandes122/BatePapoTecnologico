<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Trabalhos
 *
 * @ORM\Table(name="trabalhos")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\TrabalhosRepository")
 */
class Trabalhos
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
     * @ORM\Column(name="titulo", type="string", length=45)
     */
    private $titulo;

    /**
     * @var string
     *
     * @ORM\Column(name="descrissao", type="string", length=255)
     */
    private $descrissao;

    /**
     * @var string
     *
     * @ORM\Column(name="diretorio", type="string", length=255)
     */
    private $diretorio;

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
     * Set titulo
     *
     * @param string $titulo
     *
     * @return Trabalhos
     */
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;

        return $this;
    }

    /**
     * Get titulo
     *
     * @return string
     */
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * Set descrissao
     *
     * @param string $descrissao
     *
     * @return Trabalhos
     */
    public function setDescrissao($descrissao)
    {
        $this->descrissao = $descrissao;

        return $this;
    }

    /**
     * Get descrissao
     *
     * @return string
     */
    public function getDescrissao()
    {
        return $this->descrissao;
    }

    /**
     * Set diretorio
     *
     * @param string $diretorio
     *
     * @return Trabalhos
     */
    public function setDiretorio($diretorio)
    {
        $this->diretorio = $diretorio;

        return $this;
    }

    /**
     * Get diretorio
     *
     * @return string
     */
    public function getDiretorio()
    {
        return $this->diretorio;
    }

    /**
     * Set minicursoId
     *
     * @param integer $minicursoId
     *
     * @return Trabalhos
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

