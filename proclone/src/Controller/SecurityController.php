<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\DependencyInjection\Definition;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use Doctrine\Common\Persistence\ManagerRegistry;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\User;
use App\Form\RegistrationType;
use Symfony\Component\HttpFoundation\Request;

class SecurityController extends AbstractController
{
    /**
     * @Route("/inscription", name="security_registration")
     */
    public function Registration(Request $request, EntityManagerInterface $manager): Response
    {
         //$manager = $this->getDoctrine()->getManager();
        $user = new User();
        $form = $this->createForm(RegistrationType::class, $user);
        $form->handleRequest($request);

        if($form->isSubmitted() ){
        $manager->persist($user);
        $manager->flush();
        
        return $this->redirectToRoute('security_login'); 
        }
        return $this->render('security/registration.html.twig',[

        'form'=> $form->createView()
        ]);
    }
    /**
     * @Route("/connexionn", name="security_login")
     */
    public function login(){

    return $this->render('security/login.html.twig');
    }
}
