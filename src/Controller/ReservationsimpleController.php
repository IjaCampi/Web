<?php

namespace App\Controller;

use App\Entity\Reservationsimple;
use App\Form\ReservationsimpleType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/reservationsimple")
 */
class ReservationsimpleController extends AbstractController
{
    /**
     * @Route("/", name="app_reservationsimple_index", methods={"GET"})
     */
    public function index(EntityManagerInterface $entityManager): Response
    {
        $reservationsimples = $entityManager
            ->getRepository(Reservationsimple::class)
            ->findAll();

        return $this->render('reservationsimple/index.html.twig', [
            'reservationsimples' => $reservationsimples,
        ]);
    }

    /**
     * @Route("/new", name="app_reservationsimple_new", methods={"GET", "POST"})
     */
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $reservationsimple = new Reservationsimple();
        $form = $this->createForm(ReservationsimpleType::class, $reservationsimple);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($reservationsimple);
            $entityManager->flush();

            return $this->redirectToRoute('app_reservationsimple_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('reservationsimple/new.html.twig', [
            'reservationsimple' => $reservationsimple,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{idRs}", name="app_reservationsimple_show", methods={"GET"})
     */
    public function show(Reservationsimple $reservationsimple): Response
    {
        return $this->render('reservationsimple/show.html.twig', [
            'reservationsimple' => $reservationsimple,
        ]);
    }

    /**
     * @Route("/{idRs}/edit", name="app_reservationsimple_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Reservationsimple $reservationsimple, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(ReservationsimpleType::class, $reservationsimple);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_reservationsimple_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('reservationsimple/edit.html.twig', [
            'reservationsimple' => $reservationsimple,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{idRs}", name="app_reservationsimple_delete", methods={"POST"})
     */
    public function delete(Request $request, Reservationsimple $reservationsimple, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$reservationsimple->getIdRs(), $request->request->get('_token'))) {
            $entityManager->remove($reservationsimple);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_reservationsimple_index', [], Response::HTTP_SEE_OTHER);
    }
}
