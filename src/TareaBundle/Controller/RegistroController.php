<?php
namespace TareaBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

use TareaBundle\Form\RegistroType;


use TareaBundle\Entity\Registro;

class RegistroController extends Controller {

  public function indexAction()
  {
    return $this->render('TareaBundle:Default:index.html.twig');
  }
/**
     * @Route("/registro/create", name="registro_create")
     */

    //recuperar datos del formulario y crea el registro en bd
    public function createAction(Request $request)
    {
        
        $registro = new Registro();

         $form = $this->createForm(RegistroType::class,$registro);
         //$_GET , $_POST
         $form->handleRequest($request);


          if ($form->isSubmitted() && $form->isValid()) {
  
            $registro = $form->getData();

            $em = $this->getDoctrine()->getManager();
            //guardar registro
            $em->persist($registro);
            // en realidad ejecuta las consultas (es decir, la consulta INSERT)
            $em->flush();

            return $this->redirectToRoute('TareaBundle:Default:index.html.twig');
          }   
          return $this->render('TareaBundle:Default:form.html.twig', array(
            'form' => $form->createView(),
        ));
    }
   //mostrar registros
   public function mostrarAction()
   {
       $repository = $this->getDoctrine()->getRepository('TareaBundle:Registro');
       // find *all* registro
       $registro = $repository->findAll();

      return $this->render('TareaBundle:Default:index.html.twig', array("registros"=>$registro));
   }

} 
