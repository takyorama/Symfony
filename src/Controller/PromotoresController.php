<?php namespace App\Controller;

use App\Entity\Promotores;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class PromotoresController extends AbstractController{
    /**
     * @Route("/promotores", name="promotores")
     */
    public function index(): Response {
        $promotores = new Promotores();
        $repositorio = $this->getDoctrine()->getRepository('App\Entity\Promotores');

        return $this->render('promotores/index.html.twig', ['promotores'=>$promotores]);
    }
    /**
     * @Route("/promotores/novo", name="novo_promotor")
     */
    public function create(){ return $this->render('promotores/novo.html.twig',); }
    /**
     * @Route("promotores/store", name="lista_promotores")
     */
    public function store(){ return $this->render('promotores/lista.html.twig',); }
    /**
     * @Route("promotores/edit/$id", name="edita_promotor")
     */
    public function edit($id){ return $this->render('promotores/edita.html.twig', ); }
    /**
     * @Route("promotores/$id/update", name="atualiza_promotor")
     */
    public function update($id){}
    /**
     * @Route("promotores/delete/$id", name="deleta_promotor")
     */
    public function delete($id){}
}
