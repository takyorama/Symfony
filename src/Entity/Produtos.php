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
     * @ORM\Column(type="string", length=10)
     */
    private $id_fornecedor;
    /**
     * @ORM\Column(type="string", length=200)
     */
    private $fornecedor;
    /**
     * @ORM\Column(type="string", length=13)
     */
    private $dta_fabricacao;
    /**
     * @ORM\Column(type="string", length=13)
     */
    private $dta_validade;
    /**
     * @ORM\Column(type="integer")
     */
    private $quantidade;
    /**
     * @ORM\Column(type="float", scale=2)
     */
    private $preco;

    public function getId(): ?int { return $this->id; }
    public function getDescricao(): ?string { return $this->descricao; }
    public function getIdFornecedor(): ?string { return $this->id_fornecedor; }
    public function getFornecedor(): ?string { return $this->fornecedor; }
    public function getDtaFabricacao(): ?string { return $this->dta_fabricacao; }
    public function getDtaValidade(): ?string { return $this->dta_validade; }
    public function getQuantidade(): ?int { return $this->quantidade; }
    public function getPreco(): ?float { return $this->preco; }

    public function setId($id){ $this->id = $id; }
    public function setDescricao($descript){ $this->descricao = $descript; }
    public function setIdFornecedor($id_producer){ $this->id_fornecedor = $id_producer; }
    public function setFornecedor($producer){ $this->fornecedor = $producer; }
    public function setDtaFabricacao($dta_factory){ $this->dta_fabricacao = $dta_factory;}
    public function setDtaValidade($dta_validity){ $this->dta_validade = $dta_validity; }
    public function setQuantidade($amount){ $this->quantidade = $amount; }
    public function setPreco($price){ $this->preco = $price;; }
}
