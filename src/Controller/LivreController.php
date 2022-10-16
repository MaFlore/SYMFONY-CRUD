<?php

namespace App\Controller;

use App\Entity\Livre;
use App\Form\LivreType;
use App\Repository\LivreRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LivreController extends AbstractController
{

    #[Route("/",name: "allLivre")]

     public function allLivre(LivreRepository $livreRepository){
         $livres=$livreRepository->findAll();
         return $this->render('livre/listLivre.html.twig',array(

           'livres'=>$livres

         ));

     }

    #[Route('/add', name: 'add')]


    public function addLivre(Request $request, EntityManagerInterface $em)
    {
        $livre=new Livre();
       
        
        $form=$this->createForm(LivreType::class, $livre);

        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
    
           $em ->persist($livre);
           $em ->flush();

           return $this->redirectToRoute('allLivre');
  
        }

        return $this->render('livre/addLivre.html.twig',array(
            'form'=>$form->createView()

        ));

        
    }


    #[Route("/update/{id<\d+>}", name: "update")]

    public function updateLivre(Request $request, Livre $livre, EntityManagerInterface $em)
    {
       
        
        $form=$this->createForm(LivreType::class, $livre);

        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
           $em->flush();

           return $this->redirectToRoute('allLivre');
  
        }

        return $this->render('livre/updateLivre.html.twig',array(
            'form'=>$form->createView()

        ));

        
    }

    #[Route("/delete/{id<\d+>}")]

   public function deleteLivre(Request $request, Livre $livre, EntityManagerInterface $em)
   {
          $em ->remove($livre);
          $em ->flush();

          return $this->redirectToRoute('allLivre');

       
   }

}
