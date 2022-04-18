<?php

namespace App\Controller;

use App\Entity\LigneCommande;
use App\Form\LigneCommandeType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

use Symfony\Component\Routing\Annotation\Route;
/**
 * @Route("/ligne/commande")
 */
class LigneCommandeController extends AbstractController
{
    /**
     * @Route("/", name="app_ligne_commande_index", methods={"GET"})
     */
    public function index(EntityManagerInterface $entityManager): Response
    {
        $ligneCommandes = $entityManager
            ->getRepository(LigneCommande::class)
            ->findAll();

        return $this->render('ligne_commande/index.html.twig', [
            'ligne_commandes' => $ligneCommandes,
        ]);
    }

    /**
     * @Route("/new", name="app_ligne_commande_new", methods={"GET", "POST"})
     */
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $ligneCommande = new LigneCommande();
        $form = $this->createForm(LigneCommandeType::class, $ligneCommande);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($ligneCommande);
            $entityManager->flush();

            return $this->redirectToRoute('app_ligne_commande_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('ligne_commande/new.html.twig', [
            'ligne_commande' => $ligneCommande,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="app_ligne_commande_show", methods={"GET"})
     */
    public function show(LigneCommande $ligneCommande): Response
    {
        return $this->render('ligne_commande/show.html.twig', [
            'ligne_commande' => $ligneCommande,
        ]);
    }

    /**
     * @Route("/get/{id}", name="app_lc_show_commande")
     */
    public function showbycommande($id): Response
    {

        $ligneCommande = $this->getDoctrine()->getRepository(LigneCommande::class)->findByExampleField($id);

        return $this->render('ligne_commande/index.html.twig', [
            'ligne_commandes' => $ligneCommande,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="app_ligne_commande_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, LigneCommande $ligneCommande, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(LigneCommandeType::class, $ligneCommande);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_ligne_commande_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('ligne_commande/edit.html.twig', [
            'ligne_commande' => $ligneCommande,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="app_ligne_commande_delete", methods={"POST"})
     */
    public function delete(Request $request, LigneCommande $ligneCommande, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete' . $ligneCommande->getId(), $request->request->get('_token'))) {
            $entityManager->remove($ligneCommande);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_ligne_commande_index', [], Response::HTTP_SEE_OTHER);
    }
}
