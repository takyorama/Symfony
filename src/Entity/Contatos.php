<?php namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ContatosRepository")
 */
class Contatos{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;
    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nome;
    /**
     * @ORM\Column(type="string", length=255)
     */
    private $email;
    /**
     * @ORM\Column(type="string", length=15)
     */
    private $telefone;

    public function getId(): ?int { return $this->id; }
    public function getName(): ?string { return $this->nome; }
    public function getEmail(): ?string { return $this->email; }
    public function getPhone(): ?string { return $this->telefone; }

    public function setId($id){ $this->id = $id; }
    public function setName($name){ $this->nome = $name; }
    public function setEmail($email){ $this->email = $email; }
    public function setPhone($phone){ $this->telefone = $phone; }
}
