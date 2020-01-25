<?php

namespace App\Controller;

use App\Entity\Commentaires;
use App\Entity\Cours;
use App\Entity\Fichier;
use App\Entity\Utilisateurs;
use App\Form\CommentairesType;
use App\Form\FichierType;
use App\Form\RegistrationFormType;
use mysql_xdevapi\ExecutionStatus;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FirstController extends AbstractController
{
    /**
     * @Route("/", name="first")
     */
    public function index()
    {
        if (!($this->getUser())) {
            return $this->redirectToRoute('app_login');
        }
        return $this->render('first/index.html.twig', [
            'controller_name' => 'FirstController',
        ]);
    }

    /**
     * @Route("/cours/{id}" , name="cours.detail")
     */
    public function detail(Cours $cours, Request $request)
    {
        $commentaire = new Commentaires();
        $form = $this->createForm(CommentairesType::class, $commentaire);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $commentaire->setCours($cours);
            $commentaire->setUsername($this->getUser()->getUserId());
            $em = $this->getDoctrine()->getManager();
            $em->persist($commentaire);
            $em->flush();
        }
        return $this->render('first/detail.html.twig', [
            'cours' => $cours,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/addfile" , name="ajouter_fichier")
     * @param Request $request
     * @return Response
     */
    public function upload(Request $request)
    {
        $docFile = new Fichier();
        $form = $this->createForm(FichierType::class, $docFile);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $file = $form->get('path')->getData();
            if ($file) {
                $filename = md5(uniqid()) . '.' . $file->guessExtension();
                $file->move($this->getParameter('upload_directory_cours'), $filename);
                $docFile->setPath($filename);
            }
            $em = $this->getDoctrine()->getManager();
            $em->persist($docFile);
            $em->flush();
            $this->addFlash('success','Fichier ajouté avec succès!!!!');
            return $this->redirectToRoute('first');
        }
        return $this->render('first/add.html.twig', array(
            'form' => $form->createView(),
        ));
    }


//    /**
//     * @Route("/user/{id<\d+>}", name="user")
//     * @param Utilisateurs $utilisateurs
//     * @return Response
//     */
//    public function detailUser(Utilisateurs $utilisateurs = null)
//    {
//        return $this->render('first/detailUser.html.twig', array(
//                'utilisateur' => $utilisateurs
//            )
//        );
//    }

    /**
     * @Route("update/{id<\d+>}", name="user")
     */
    public function updateUser(Request $request, Utilisateurs $utilisateurs = null)
    {
        $form = $this->createForm(RegistrationFormType::class, $utilisateurs);
        $form->handleRequest($request);

        if ($utilisateurs) {
            if ($form->isSubmitted() && $form->isValid()) {

                $file = $form->get('image')->getData();
                if ($file) {
                    $filename = md5(uniqid()) . '.' . $file->guessExtension();
                    $file->move($this->getParameter('upload_directory_profile'), $filename);
                    $utilisateurs->setImage($filename);
                }

                $entityManager = $this->getDoctrine()->getManager();
                $entityManager->persist($utilisateurs);
                $entityManager->flush();
            }
        }
        return $this->render('first/detailUser.html.twig', array(
                'update' => $form->createView(),
                'utilisateur' => $utilisateurs
            )
        );
    }

}
