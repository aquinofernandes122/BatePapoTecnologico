<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AlunoMiniCurso
 *
 * @ORM\Table(name="aluno_mini_curso")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\AlunoMiniCursoRepository")
 */
class AlunoMiniCurso
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
     * @var int
     *
     * @ORM\Column(name="aluno_id", type="integer")
     */
    private $alunoId;

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
     * Set alunoId
     *
     * @param integer $alunoId
     *
     * @return AlunoMiniCurso
     */
    public function setAlunoId($alunoId)
    {
        $this->alunoId = $alunoId;

        return $this;
    }

    /**
     * Get alunoId
     *
     * @return int
     */
    public function getAlunoId()
    {
        return $this->alunoId;
    }

    /**
     * Set minicursoId
     *
     * @param integer $minicursoId
     *
     * @return AlunoMiniCurso
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

