<?php

namespace App\Controller;

use App\Entity\Livre;
use App\Form\LivreType;
use App\Repository\LivreRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class LivreController extends AbstractController
{

    #[Route("/",name: "app_livres")]
    public function livres(LivreRepository $livreRepository){
        $livres = $livreRepository->findAll();
        return $this->render('livre/listesLivres.html.twig',array(
            'livres'=>$livres
        ));
     }

    #[Route('/ajouter', name: 'app_ajouter_livre')]
    public function ajouterLivre(Request $request, EntityManagerInterface $em)
    {
        $livre = new Livre(); 
        $form = $this->createForm(LivreType::class, $livre);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){ 
            $em ->persist($livre);
            $em ->flush();
            return $this->redirectToRoute('app_livres');
        }
        return $this->render('livre/addLivre.html.twig',array(
            'form'=>$form->createView()
        ));
    }


    #[Route("/modifier/{id<\d+>}", name: "app_modifier_livre")]
    public function modifierLivre(Request $request, Livre $livre, EntityManagerInterface $em)
    {
        $form = $this->createForm(LivreType::class, $livre);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $em->flush();
            return $this->redirectToRoute('app_livres');
        }
        return $this->render('livre/updateLivre.html.twig',array(
            'form'=>$form->createView()
        ));
    }

    #[Route("/supprimer/{id<\d+>}", name: "app_suprimer_livre")]
    public function supprimerLivre(Livre $livre, EntityManagerInterface $em)
    {
        $em ->remove($livre);
        $em ->flush();
        return $this->redirectToRoute('app_livres'); 
    }

}
