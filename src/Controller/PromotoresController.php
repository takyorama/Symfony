<?php namespace App\Controller;

use App\Entity\Promotores;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
/**
 * @Route("/promotores", name="promotores_")
 */
class PromotoresController extends AbstractController{
    /**
     * @Route("/", name="homepage")
     */
    public function index(): Response {
        $promotores = new Promotores();
        $repositorio = $this->getDoctrine()->getRepository(Promotores::class);
        //$promotores = $repositorio->findAll();

        return $this->render('promotores/promotores.html.twig', ['controller_name'=>'Promotor', 'promotores'=>$promotores]);
    }
    /**
     * @Route("/novo", name="novo")
     */
    public function create(){ return $this->render('promotores/novo.html.twig',); }
    /**
     * @Route("/store", name="lista")
     */
    public function store(Request $request){ return $this->render('promotores/promotores.html.twig',); }
    /**
     * @Route("/edit/$id", name="edita")
     */
    public function edit($id){ return $this->render('promotores/edita.html.twig', ); }
    /**
     * @Route("/$id/update", name="atualiza")
     */
    public function update(Request $request, $id){}
    /**
     * @Route("/delete/$id", name="deleta")
     */
    public function delete($id){}
}
