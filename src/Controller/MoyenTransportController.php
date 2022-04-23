<?php

namespace App\Controller;

use App\Entity\MoyenTransport;
use App\Form\MoyenTransport1Type;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Knp\Component\Pager\PaginatorInterface;

/**
 * @Route("/moyen/transport")
 */
class MoyenTransportController extends AbstractController
{
    /**
     * @Route("/", name="app_moyen_transport_index", methods={"GET"})
     */
    public function index(EntityManagerInterface $entityManager, Request $request, PaginatorInterface $paginator): Response
    {
        $donnees = $moyen_transports = $entityManager
            ->getRepository(MoyenTransport::class)
            ->findAll();

        $moyen_transports = $paginator->paginate(
            $donnees, // Requête contenant les données à paginer
            $request->query->getInt('page', 1), // Numéro de la page en cours, passé dans l'URL, 1 si aucune page
            3 // Nombre de résultats par page
        );

        return $this->render('moyen_transport/index.html.twig', [
            'moyen_transports' => $moyen_transports,
        ]);
    }

    /**
     * @Route("/cardfront", name="app_moyen_transport_cardsfront", methods={"GET"})
     */
    public function cardsfront(EntityManagerInterface $entityManager): Response
    {
        $moyenTransports = $entityManager
            ->getRepository(MoyenTransport::class)
            ->findAll();

        return $this->render('moyen_transport/cardsfront.html.twig', [
            'moyen_transports' => $moyenTransports,
        ]);
    }


    /**
     * @Route("/affichage", name="app_moyen_transport_affichage", methods={"GET"})
     */
    public function affichage(EntityManagerInterface $entityManager, Request $request, PaginatorInterface $paginator): Response
    {
        $donnees = $moyen_transports = $entityManager
            ->getRepository(MoyenTransport::class)
            ->findAll();

        $moyen_transports = $paginator->paginate(
            $donnees, // Requête contenant les données à paginer
            $request->query->getInt('page', 1), // Numéro de la page en cours, passé dans l'URL, 1 si aucune page
            3 // Nombre de résultats par page
        );

        return $this->render('moyen_transport/affichage.html.twig', [
            'moyen_transports' => $moyen_transports,
        ]);
    }


    /**
     * @Route("/new", name="app_moyen_transport_new", methods={"GET", "POST"})
     */
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $moyenTransport = new MoyenTransport();
        $form = $this->createForm(MoyenTransport1Type::class, $moyenTransport);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($moyenTransport);
            $entityManager->flush();

            return $this->redirectToRoute('app_moyen_transport_affichage', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('moyen_transport/new.html.twig', [
            'moyen_transport' => $moyenTransport,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{idTransport}", name="app_moyen_transport_show", methods={"GET"})
     */
    public function show(MoyenTransport $moyenTransport): Response
    {
        return $this->render('moyen_transport/show.html.twig', [
            'moyen_transport' => $moyenTransport,
        ]);
    }

    /**
     * @Route("/{idTransport}/edit", name="app_moyen_transport_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, MoyenTransport $moyenTransport, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(MoyenTransport1Type::class, $moyenTransport);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_moyen_transport_affichage', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('moyen_transport/edit.html.twig', [
            'moyen_transport' => $moyenTransport,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{idTransport}", name="app_moyen_transport_delete", methods={"POST"})
     */
    public function delete(Request $request, MoyenTransport $moyenTransport, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$moyenTransport->getIdTransport(), $request->request->get('_token'))) {
            $entityManager->remove($moyenTransport);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_moyen_transport_affichage', [], Response::HTTP_SEE_OTHER);
    }
}
