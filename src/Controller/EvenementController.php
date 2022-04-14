<?php

namespace App\Controller;

use App\Entity\Evenement;
use App\Form\EvenementType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/evenement")
 */
class EvenementController extends AbstractController
{
    /**
     * @Route("/event", name="app_evenement_index", methods={"GET"})
     */
    public function index(EntityManagerInterface $entityManager): Response
    {
        $evenements = $entityManager
            ->getRepository(Evenement::class)
            ->findAll();

        return $this->render('evenement/index.html.twig', [
            'evenements' => $evenements,
        ]);
    }
    /**
     * @Route("/eventindex", name="app_evenement_indexfront", methods={"GET"})
     */
    public function indexfront(): Response
    {
      $repo =$this->getDoctrine()->getRepository(Evenement::class);
      $evenement=$repo->findAll();
        return $this->render('evenement/indexfront.html.twig', [
            'evenement' => $evenement,
        ]);

    }
    /**
     * @Route("/home", name="app_evenement_home", methods={"GET"})
     */
    public function home(): Response
    {

        return $this->render('evenement/home.html.twig', [

        ]);

    }


    /**
     * @Route("/new", name="app_evenement_new", methods={"GET", "POST"})
     */
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $evenement = new Evenement();
        $form = $this->createForm(EvenementType::class, $evenement);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($evenement);
            $entityManager->flush();

            return $this->redirectToRoute('app_evenement_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('evenement/new.html.twig', [
            'evenement' => $evenement,
            'form' => $form->createView(),
        ]);
    }
    /**
     * @Route("/newFront", name="app_evenement_new_front", methods={"GET", "POST"})
     */
    public function newfront(Request $request ): Response
    {
        $evenement = new Evenement();
        $form = $this->createForm(EvenementType::class, $evenement);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em=$this->getDoctrine()->getManager();
            $em->persist($evenement);
            $em->flush();

            return $this->redirectToRoute('app_evenement_indexfront', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('evenement/new_front.html.twig', [
            'evenement' => $evenement,
            'form' => $form->createView(),
        ]);
    }


    /**
     * @Route("/{idEvent}", name="app_evenement_show", methods={"GET"})
     */
    public function show(Evenement $evenement): Response
    {
        return $this->render('evenement/show.html.twig', [
            'evenement' => $evenement,
        ]);
    }

    /**
     * @Route("/{idEvent}/edit", name="app_evenement_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Evenement $evenement, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(EvenementType::class, $evenement);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_evenement_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('evenement/edit.html.twig', [
            'evenement' => $evenement,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{idEvent}", name="app_evenement_delete", methods={"POST"})
     */
    public function delete(Request $request, Evenement $evenement, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$evenement->getIdEvent(), $request->request->get('_token'))) {
            $entityManager->remove($evenement);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_evenement_index', [], Response::HTTP_SEE_OTHER);
    }

}
