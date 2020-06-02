<?php namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ProdutosRepository")
 */
class Produtos{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;
    /**
     * @ORM\Column(type="string", length=255)
     */
    private $descricao;
    /**
     * @ORM\Column(type="integer")
     */
    private $quantidade;
    /**
     * @ORM\Column(type="integer")
     */
    private $preco;

    public function getId(): ?int { return $this->id; }
    public function getDescription(): ?string { return $this->descricao; }
    public function getAmount(): ?int { return $this->quantidade; }
    public function getPrice(): ?int { return $this->preco; }

    public function setId($id){ $this->id; }
    public function setDescription($descript){ $this->descricao; }
    public function setAmount($amount){ $this->quantidade; }
    public function setPrice($price){ $this->preco; }
}
