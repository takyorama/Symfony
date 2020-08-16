<?php namespace App\Controller;

use App\Entity\Contatos;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * @Route("contatos", name="contatos_")
 */
class ContatosController extends AbstractController{
    /**
     * @Route("/", name="homepage")
     */
    public function index(): Response {
        $repositorio = $this->getDoctrine()->getRepository(Contatos::class);

        $contatos = $repositorio->findAll();

        return $this->render('contatos/contatos.html.twig', ['controller_name'=>'ContatosController', 'contatos'=>$contatos]);
    }
    /**
     * @Route("/novo", name="novo")
     */
    public function create(){ return $this->render('contatos/novo.html.twig',); }
    /**
     * @Route("/store", name="lista")
     */
    public function store(Request $request): Response {
        $input = $request->request->all();

        $contato = new Contatos();
        $contato->setName($input['nome']);
        $contato->setEmail($input['email']);
        $contato->setTelephone($input['telefone']);

        $manager = $this->getDoctrine()->getManager();
        $manager->persist($contato);
        $manager->flush();

        return $this->redirect('contatos/contatos.html.twig');
    }
    /**
     * @Route("edit/$id", name="edita")
     */
    public function edit($id){
        $repositorio = $this->getDoctrine()->getRepository(Contatos::class);
        $contato = $repositorio->findOneBy($id);

        return $this->render('edita.html.twig', ['contato'=>$contato]);
    }
    /**
     * @Route("$id/update", name="atualiza")
     */
    public function update($id): Response {
        $repositorio = $this->getDoctrine()->getRepository(Contatos::class);
        $contato = $repositorio->findOneBy($id);

        return $this->render('edita.html.twig', ['contato'=>$contato]);
    }
    /**
     * @Route("delete/$id", name="deleta")
     */
    public function delete($id): Response { }
}
