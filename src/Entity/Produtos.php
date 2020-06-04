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
     * @ORM\Column(typ="string", length="10")
     */
    private $id_fornecedor;
    /**
     * @ORM\Column(type="string", length="200")
     */
    private $fornecedor;
    /**
     * @ORM\Column(type="string", length="13")
     */
    private $dta_fabricacao;
    /**
     * @ORM\Column(type="string", length="13")
     */
    private $dta_validade;
    /**
     * @ORM\Column(type="integer")
     */
    private $quantidade;
    /**
     * @ORM\Column(type="float")
     */
    private $preco;

    public function getId(): ?int { return $this->id; }
    public function getDescription(): ?string { return $this->descricao; }
    public function getIdProducer(): ?string {}
    public function getProducer(): ?string {}
    public function getDateFactory(): ?string {}
    public function getdateValidity(): ?string {}
    public function getAmount(): ?int { return $this->quantidade; }
    public function getPrice(): ?float { return $this->preco; }

    public function setId($id){ $this->id = $id; }
    public function setDescription($descript){ $this->descricao = $descript; }
    public function setIdProducer($id_producer){ $this->id_fornecedor = $id_producer; }
    public function setProducer($producer){ $this->fornecedor = $producer; }
    public function setDateFactory($dta_factory){ $this->dta_fabricacao = $dta_factory;}
    public function setDateValidity($dta_validity){ $this->dta_validade = $dta_validity; }
    public function setAmount($amount){ $this->quantidade = $amount; }
    public function setPrice($price){ $this->preco = $price;; }
}
