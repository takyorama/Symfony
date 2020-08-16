<?php namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\PromotoresRepository")
 */
class Promotores{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;
    /**
     * @ORM\Column(type="string", length=200)
     */
    private $nome;
    /**
     * @ORM\Column(type="string", length=13)
     */
    private $cpf;
    /**
     * @ORM\Column(type="string", length=200)
     */
    private $empresa;

    public function getId(): ?int { return $this->id; }
    public function getName(): ?string{ return $this->nome; }
    public function getCPF(): ?string { return $this->cpf; }
    public function getEnterprise(): ?string{ return $this->empresa; }

    public function setId($id): self { $this->id = $id; }
    public function setName($name): self { $this->nome = $name; }
    public function setCPF($cpf): self { $this->cpf = $cpf; }
    public function setEnterprise($enterprise): self { $this->empresa = $enterprise; }
}
