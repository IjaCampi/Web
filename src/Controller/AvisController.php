<?php

namespace App\Controller;

use App\Entity\Avis;
use App\Entity\User;
use App\Form\AvisType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/avis")
 */
class AvisController extends AbstractController
{
    /**
     * @Route("/", name="app_avis_index")
     */
    public function index(Request $request,EntityManagerInterface $entityManager): Response
    {
        $avis = $entityManager
            ->getRepository(Avis::class)
            ->findAll();
        $user = $entityManager
            ->getRepository(User::class)
            ->find(1);
        $avi = new Avis();
        $form = $this->createForm(AvisType::class, $avi);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $avi->setIdu($user);
            $entityManager->persist($avi);
            $entityManager->flush();

            return $this->redirectToRoute('app_avis_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('avis/index.html.twig', [
            'avis' => $avis,
            'form' => $form->createView(),

        ]);
    }



    /**
     * @Route("/{idA}/edit", name="app_avis_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Avis $avi, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(AvisType::class, $avi);
        $form->handleRequest($request);
        $avis = $entityManager
            ->getRepository(Avis::class)
            ->findAll();

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_avis_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('avis/index.html.twig', [
            'avi' => $avi,
            'form' => $form->createView(),
            'avis' => $avis,
        ]);
    }

    /**
     * @Route("/delete/{id}", name="avis_delete")
     */
    public function delete($id): Response
    {
        $em = $this->getDoctrine()->getManager();
        $avis = $em->getRepository(Avis::class)->find($id);
        $em->remove($avis);
        $em->flush();
        return $this->redirectToRoute('app_avis_index');
    }
}
