<?php

namespace App\Controller;

use DateTime;
use App\Entity\User;
use App\Form\UserType;
use App\Entity\Produit;
use App\Repository\UserRepository;
use App\Repository\ProduitRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Form\ProduitType;



/**
 * @Route("/admin", name="admin_")
 */

class AdminController extends AbstractController


{
    /**
     * @Route("/add-user", name="user-add")
     */
    public function add(Request $request, EntityManagerInterface $manager): Response
    {
        $user = new user();

        $form = $this->createForm(UserType::class, $user);

        $form->handleRequest($request);

        if ( $form->isSubmitted() && $form->isValid() ) {
            
            $user->setcreatedtimestamp(new DateTime());
            $manager->persist($user);
            $manager->flush();
        }
    
        return $this->render('admin/formulaire.html.twig', [
            'formUser' => $form->createView()
        ]);

 
    // public function ajout(Request $request, EntityManagerInterface $manager): Response
    // {
        $produit = new Produit();

        $form = $this->createForm(ProduitType::class, $produit);

        $form->handleRequest($request);

        if ( $form->isSubmitted() && $form->isValid() ) {
            
            $produit->setDateEnregistrement(new DateTime("now"));
            // $manager = $this->getDoctrine()->getManager();
            
            $manager->persist($produit);
            $manager->flush();

        }
    
        return $this->render('admin/formulaire.html.twig', [
            'formProduit' => $form->createView()
        ]);
    }



    }


    /**
     * @Route("/gestion-user", name="gestion_user")
     */
    // public function gestionProduits(ProduitRepository $repo , UserRepository $repoU)
    // {
    //     $users = $repoU->findAll();

    //     return $this->render("admin/gestion-user.html.twig", [
    //         'users' => $users
    //     ]);
  
    // // public function gestionProduits(ProduitRepository $repo)
    // {
    //     $produits = $repo->findAll();

    //     return $this->render("admin/gestion-produits.html.twig", [
    //         'produits' => $produits
    //     ]);

    // }

    // }

    /**
     *@Route("/details-user-{id<\d+>}", name="details_user")
     */
    // public function detailsUser($id, UserRepository $repo)
    // {
    //     $user = $repo->find($id);

        
    //     return $this->render("admin/details-user.html.twig", [
    //         'user' => $user
    //     ]);
    // }

    // /**
    //  * @Route("/update-user-{id<\d+>}", name="update_user")
    //  */
    // public function updates($id, UserRepository $repo, Request $request)
    // {
    //     $user = $repo->find($id);

    //     $form = $this->createForm(UserType::class, $user);
    //     $form->handleRequest($request);

    //     if ( $form->isSubmitted() && $form->isValid()) {
            
    //         $repo->add($user, 1);

    //         return $this->redirectToRoute("admin_gestion_user");
    //     }

    //     return $this->render("admin/formulaire.html.twig", [
    //         'formUser' => $form->createView()
    //     ]);
    // }

    // /**
    //  * @Route("/deletes-user-{id<\d+>}", name="deletes_user")
    //  */
    // public function deletes($id, UserRepository $repo)
    // {
    //     $user = $repo->find($id);

    //     $repo->remove($user, 1);

    //     return $this->redirectToRoute("admin_gestion_user");
    // }

  


   

    // /**
    //  *@Route("/details-produit-{id<\d+>}", name="details_produit")
    //  */
    // public function detailsProduit($id, ProduitRepository $repo)
    // {
    //     $produit = $repo->find($id);

        
    //     return $this->render("admin/details-produit.html.twig", [
    //         'produit' => $produit
    //     ]);
    // }

    // /**
    //  * @Route("/update-produit-{id<\d+>}", name="update_produit")
    //  */
    // public function update($id, ProduitRepository $repo, Request $request)
    // {
    //     $produit = $repo->find($id);

    //     $form = $this->createForm(ProduitType::class, $produit);
    //     $form->handleRequest($request);

    //     if ( $form->isSubmitted() && $form->isValid()) {
            
    //         $repo->add($produit, 1);

    //         return $this->redirectToRoute("admin_gestion_produits");
    //     }

    //     return $this->render("admin/formulaire.html.twig", [
    //         'formProduit' => $form->createView()
    //     ]);
    // }

    // /**
    //  * @Route("/delete-produit-{id<\d+>}", name="delete_produit")
    //  */
    // public function delete($id, ProduitRepository $repo)
    // {
    //     $produit = $repo->find($id);

    //     $repo->remove($produit, 1);

    //     return $this->redirectToRoute("admin_gestion_produits");
    // }









