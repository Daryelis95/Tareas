<?php
namespace TareaBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

use AppBundle\Entity\Article;

class ArticleController extends Controller {
/**
* @Route("/create-article")
*/
public function createAction(Request $request) {

    $article = new Article();
    $form = $this->createFormBuilder($article)
      ->add('title', TextType::class)
      ->add('author', TextType::class)
      ->add('body', TextareaType::class)
      ->add('url', TextType::class,
      array('required' => false, 'attr' => array('placeholder' => 'www.example.com')))
      ->add('save', SubmitType::class, array('label' => 'New Article'))
      ->getForm();
  
    $form->handleRequest($request);
  
    if ($form->isSubmitted()) {
  
      $article = $form->getData();
  
      $em = $this->getDoctrine()->getManager();
      $em->persist($article);
      $em->flush();
  
      return $this->redirect('/view-article/' . $article->getId());
  
    }
  
    return $this->render(
      'TareaBundle:Default:article.html.twig',
      array('form' => $form->createView())
      );
  
  }
  
} 
?>