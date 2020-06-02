<?php namespace App\Controller;

use App\Entity\Contatos;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class ContatosController extends AbstractController{
    /**
     * @Route("/contatos", name="contatos")
     */
    public function index(): Response {
        $contatos = new Contatos();
        $repositorio = $this->getDoctrine()->getRepository('App\Entity\Contatos');

        //$contatos = $repositorio->findAll();

        return $this->render('contatos/index.html.twig', ['contatos'=>$contatos]);
    }
    /**
     * @Route("/contatos/novo", name="novo_contato")
     */
    public function create(){ return $this->render('contatos/novocontato.html.twig',); }
    /**
     * @Route("/contatos/store", name="lista_contatos")
     */
    public function store(): Response {}
    /**
     * @Route("contatos/edit/$id", name="edita_contato")
     */
    public function edit($id){ return $this->render('editacontato.html.twig', []); }
    /**
     * @Route("contatos/$id/update", name="atualiza_contatos")
     */
    public function update($id): Response { }
    /**
     * @Route("contatos/delete/$id", name="deleta_contato")
     */
    public function delete($id): Response { }
}
