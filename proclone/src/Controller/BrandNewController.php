<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\Common\Persistence\ObjectManager; 
use App\Entity\Article;
use App\Entity\Gestion;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;


class BrandNewController extends AbstractController
{
   /**
     * @Route("/blog", name="blog")
     */
    public function index()
    {
        return $this->render('index.html.twig', [
            'controller_name' => 'BlogController',
        ]);
    }
    /**
    * @Route("/accueil", name="home")  
    */
    public function home(Request $request){
        $article =new Article();
        $form = $this->createFormBuilder($article)
        ->add('title',TextType::class , ['attr' => [
        'placeholder'=> "titre de l article",
        'class'=>'form-control'
        ]])
        ->add('Auteur',TextType::class, [
        'attr'=>[
            'placeholder'=>"nom de l auteur",
            'class'=>'form-control'
        ]
        ])
        ->add('Save',SubmitType::class, [
        'label'=>'enregistrer'
        ])
        ->getForm();
        $form->handleRequest($request);
         if ($form->isSubmitted() && $form->isValid()) {
            $username = $form->getData()->getTitle();
            return $this->render('formdata.html.twig', [
            'ltitle'=> $username
            ]);
            }
        return $this->render('home.html.twig',
        [ 'formArticle' => $form->createView()]
        );
    }
    /**
    * @Route("/", name="conso")
    */
    public function con(Request $reques){

    $gestion = new Gestion();
    $formulaire = $this ->createFormBuilder($gestion)
    
        ->add('prenom',TextType::class , [
        
        'attr' => [
        'placeholder'=> "nom du ou des participant(e)s",
        'class'=>'form-control'
         
        ]])
        ->add('presomme',NumberType::class , [
        'attr' => [
        'placeholder'=> "Montant ",
        'class'=>'form-control'
        ]])
        ->add('deuxnom',TextType::class , ['attr' => [
        'placeholder'=> "nom du ou des participant(e)s",
        'class'=>'form-control'
        ]])
        ->add('deuxsomme',NumberType::class , ['attr' => [
        'placeholder'=> "Montant",
        'class'=>'form-control'
        ]])
        ->add('troisnom',TextType::class , [
        'required' => false,
        'attr' => [
        'placeholder'=> "nom du ou des participant(e)s",
        'class'=>'form-control'
        ]])
        ->add('troissomme',NumberType::class , [
        'required' => false,
        'attr' => [
        'placeholder'=> "Montant",
        'class'=>'form-control'
        ]])
        ->add('nbparticipant',NumberType::class , [
        
        'attr' => [
        'placeholder'=> "Avant de faire le calcul entrez le  nombre de participant(e)s !",
        'class'=>'form-control',
        'style'=>'width:50%'
        ]])
        ->add('quanom',NumberType::class , [
        'required' => true,
        'attr' => [
        'placeholder'=> "nom du ou des participant(e)s ",
        'class'=>'form-control'
        ]])
        ->add('quasomme',NumberType::class , [
        'required' => true,
        'attr' => [
        'placeholder'=> "Montant ",
        'class'=>'form-control'
        ]])
        ->add('titre',TextType::class , [
        'required' => true,
        'attr' => [
        'placeholder'=> "Titre ",
        'class'=>'w3-input w3-animate-input',
        'style'=>'width:20%'

        ]])
        ->add('Send',SubmitType::class, [
        
        'label'=>'faire le calcul'
        ])
        ->getForm();

        
        $formulaire->handleRequest($reques);
        
        $titre = $formulaire->getData()->getTitre();
        $pre = $formulaire->getData()->getPrenom();
        $deux = $formulaire->getData()->getDeuxnom();
        $trois = $formulaire->getData()->getTroisnom();
        $quatre = $formulaire->getData()->getQuanom();
        $presom = $formulaire->getData()->getPresomme();
        $deusom = $formulaire->getData()->getDeuxsomme();
        $troisom = $formulaire->getData()->getTroissomme();
        $quatresom = $formulaire->getData()->getQuasomme();

        $nbparticipant= $formulaire->getData()->getNbparticipant();
        
        /*  if ($formulaire->isSubmitted() ) {
 
         return $this->render('blog/gestion.html.twig', [
            'prenom'=> $pre,
            'totale'=> $presom + $deusom
            ]);
            } */

        if($nbparticipant==2){
             $totale = $presom + $deusom;
             $mtparpersonne = $totale/$nbparticipant;
             $montantapayer1 = $mtparpersonne - $presom;
             $montantapayer2 = $mtparpersonne - $deusom;
             return $this->render('gestion.html.twig', [
             'titre'=> $titre,
            'prenom'=> $pre,
            'deunom' => $deux,
            'pre' => $presom,
            'deu' => $deusom,
            'totale'=> $presom + $deusom,
            'nbparticipant' => $nbparticipant,
            'montantapayer1' => $montantapayer1,
            'montantapayer2' => $montantapayer2,
            'mtparpersonne'=> $mtparpersonne
            ]);
             }

              if($nbparticipant==3){
             $totale = $presom + $deusom + $troisom;
             $mtparpersonne = $totale/$nbparticipant;
             $montantapayer1 = $mtparpersonne - $presom;
             $montantapayer2 = $mtparpersonne - $deusom;
             $montantapayer3 = $mtparpersonne - $troisom;
             return $this->render('gestion.html.twig', [
             'titre'=> $titre,
            'prenom'=> $pre,
            'deunom' => $deux,
            'troisnom' => $trois,
            'pre' => $presom,
            'deu' => $deusom,
            'trois'=> $troisom,
            'totale'=> $presom + $deusom + $troisom,
            'nbparticipant' => $nbparticipant,
            'montantapayer1' => $montantapayer1,
            'montantapayer2' => $montantapayer2,
            'montantapayer3' => $montantapayer3,
            'mtparpersonne'=> $mtparpersonne
            ]);
             }

    return $this->render('conso.html.twig',
    [ 'formGestion' => $formulaire->createView()]
    );
    }
     /**
    * @Route("/inscr", name="formu")
    */
    public function form(){

    return $this->render('form.html.twig');
    }


    /**
    * @Route("/co", name="pageconnexion")  
    */
    public function connexionn(){
        
        
        return $this->render('/blog/connexion.html.twig'
        
        );
    }


}
