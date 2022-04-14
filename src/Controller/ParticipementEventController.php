<?php

namespace App\Controller;

use App\Entity\Evenement;
use App\Entity\ParticipementEvent;
use App\Entity\Utilisateurs;
use App\Form\ParticipementEventType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/participement/event")
 */
class ParticipementEventController extends AbstractController
{
    /**
     * @Route("/", name="app_participement_event_index", methods={"GET"})
     */
    public function index(EntityManagerInterface $entityManager): Response
    {
        $evenements = $entityManager->getRepository(Evenement::class)->findAll();
        $utilisateurs = $entityManager->getRepository(Utilisateurs::class)->findAll();
        $participementEvents = $entityManager
            ->getRepository(ParticipementEvent::class)
            ->findAll();

        return $this->render('participement_event/index.html.twig', [
            'participement_events' => $participementEvents,
            'evenements'=>$evenements,
            'utilisateurs'=>$utilisateurs,
        ]);
    }

    /**
     * @Route("/new", name="app_participement_event_new", methods={"GET", "POST"})
     */
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $participementEvent = new ParticipementEvent();
        $form = $this->createForm(ParticipementEventType::class, $participementEvent);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($participementEvent);
            $entityManager->flush();

            return $this->redirectToRoute('app_participement_event_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('participement_event/new.html.twig', [
            'participement_event' => $participementEvent,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{idParticipement}", name="app_participement_event_show", methods={"GET"})
     */
    public function show(ParticipementEvent $participementEvent): Response
    {

        return $this->render('participement_event/show.html.twig', [
            'participement_event' => $participementEvent,

        ]);
    }

    /**
     * @Route("/{idParticipement}/edit", name="app_participement_event_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, ParticipementEvent $participementEvent, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(ParticipementEventType::class, $participementEvent);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_participement_event_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('participement_event/edit.html.twig', [
            'participement_event' => $participementEvent,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{idParticipement}", name="app_participement_event_delete", methods={"POST"})
     */
    public function delete(Request $request, ParticipementEvent $participementEvent, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$participementEvent->getIdParticipement(), $request->request->get('_token'))) {
            $entityManager->remove($participementEvent);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_participement_event_index', [], Response::HTTP_SEE_OTHER);
    }
}
