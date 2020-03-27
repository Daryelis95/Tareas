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
     * @Route("/create/{id}", name="tarea_create")
     */

    //recuperar datos del formulario y crea el registro en bd
    public function createAction(Request $request , $id=null)
    {   
        if($id){
            //mostrar DATOS de la db
          $repository = $this->getDoctrine()->getRepository(Registro::class);
          // find *all* registro
          $registro = $repository->find($id);
        } else{
            $registro = new Registro();
        }
        

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

            return $this->redirectToRoute('tarea_create');
          }   
          
          //mostrar DATOS de la db
          $repository = $this->getDoctrine()->getRepository('TareaBundle:Registro');
          // find *all* registro
          $registro = $repository->findAll();

          return $this->render('TareaBundle:Default:index.html.twig', 
          array('form' => $form->createView(),
          "registros"=>$registro
          ));
    }
    /**
     * @Route("/mostrar", name="tarea_mostrar")
     */
    public function mostrarAction(Request $request )
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

            return $this->redirectToRoute('tarea_create');
          }   
          //mostrar DATOS de la db
          $repository = $this->getDoctrine()->getRepository('TareaBundle:Registro');
          // find *all* registro
          $registro = $repository->findAll();

          return $this->render('TareaBundle:Default:index.html.twig', 
          array('form' => $form->createView(),
          "registros"=>$registro
          ));
    }
   
   /**
     * @Route("/update/{id}" , name="tarea_update")
   */
    public function updateAction($id)
   {

          // find *all* registro
    $repository = $this->getDoctrine()->getRepository(Registro::class);
    $registro = $repository->find($id);

    

    if (!$registro) {
        throw $this->createNotFoundException(
            'No existe el registro '.$id
        );
    }
    
    
    $em = $this->getDoctrine()->getManager();
    //guardar registro
    $em->persist($registro);
    $entityManager->flush();

    return $this->redirectToRoute('tarea_create', [
        'id' => $registro->getId()
    ]);
   }
  /**
     * @Route("/delete/{id}" , name="tarea_delete")
   */
   public function deleteAction($id)
   { 
      if($id){
          // buscar registros
        $repository = $this->getDoctrine()->getRepository(Registro::class);
        $registro = $repository->find($id);
        // Eliminar Registro
        $ent = $this->getDoctrine()->getManager();
        $ent->remove($registro);
        $ent->flush();
      }

      return $this->redirectToRoute('tarea_create');
    
   }
    
} 
