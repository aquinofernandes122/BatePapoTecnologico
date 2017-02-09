<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Aluno
 *
 * @ORM\Table(name="aluno")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\AlunoRepository")
 */
class Aluno
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
     * @ORM\Column(name="matricula", type="integer", unique=true)
     */
    private $matricula;

    /**
     * @var string
     *
     * @ORM\Column(name="nome", type="string", length=45)
     */
    private $nome;

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
     * Set matricula
     *
     * @param integer $matricula
     *
     * @return Aluno
     */
    public function setMatricula($matricula)
    {
        $this->matricula = $matricula;

        return $this;
    }

    /**
     * Get matricula
     *
     * @return int
     */
    public function getMatricula()
    {
        return $this->matricula;
    }

    /**
     * Set nome
     *
     * @param string $nome
     *
     * @return Aluno
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
}

