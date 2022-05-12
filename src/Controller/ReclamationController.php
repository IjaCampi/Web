<?php

namespace App\Controller;

use App\Entity\Reclamation;
use App\Entity\User;
use App\Form\ReclamationType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Knp\Component\Pager\PaginatorInterface;

/**
 * @Route("/reclamation")
 */
class ReclamationController extends AbstractController
{
    /**
     * @Route("/", name="app_reclamation_index", methods={"GET"})
     */
    public function index(EntityManagerInterface $entityManager,Request $request, PaginatorInterface $paginator): Response
    {
        $donnees= $entityManager
            ->getRepository(Reclamation::class)
            ->findAll();

        $reclamations = $paginator->paginate(
                $donnees, // Requête contenant les données à paginer (ici nos articles)
                $request->query->getInt('page', 1), // Numéro de la page en cours, passé dans l'URL, 1 si aucune page
                2 // Nombre de résultats par page
            );
        return $this->render('reclamation/index.html.twig', [
            'reclamations' => $reclamations,
        ]);
    }


    /**
     * @Route("/reclamationUser", name="mes_reclamation_user", methods={"GET"})
     */
    public function reclamationUser(EntityManagerInterface $entityManager): Response
    {
        $user = $entityManager
            ->getRepository(User::class)
            ->find(1);
        $reclamations = $entityManager
            ->getRepository(Reclamation::class)
            ->findBy(array('idu'=>$user));

        return $this->render('reclamation/reclamationUser.html.twig', [
            'reclamations' => $reclamations,
        ]);
    }

    /**
     * @Route("/front", name="front", methods={"GET"})
     */
    public function front(EntityManagerInterface $entityManager): Response
    {

        return $this->render('front.html.twig', [
        ]);
    }

    /**
     * @Route("/sos", name="sos")
     */
    public function sos(EntityManagerInterface $entityManager, \Swift_Mailer $mailer): Response
    {

        $user = $entityManager
        ->getRepository(User::class)
        ->find(1);

        $message = (new \Swift_Message('SOS Urgent'))
        ->setFrom('nermin.fattouch@esprit.tn')
        ->setTo($user->getEmail())
        ->setBody(
            $this->renderView(
                'reclamation/emailSos.html.twig',
                ['user' => $user]
            ),
            'text/html'
        )

        // you can remove the following code if you don't define a text version for your emails
        ->addPart(
            $this->renderView(
                // templates/emails/registration.txt.twig
                'reclamation/emailSos.html.twig',
                ['user' => $user]
            ),
            'text/plain'
        );
    $mailer->send($message);
    return $this->redirectToRoute('mes_reclamation_user', [], Response::HTTP_SEE_OTHER);
    }


    /**
     * @Route("/new", name="app_reclamation_new", methods={"GET", "POST"})
     */
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $reclamation = new Reclamation();
        $form = $this->createForm(ReclamationType::class, $reclamation);
        $form->handleRequest($request);
        $user = $entityManager
            ->getRepository(User::class)
            ->find(1);
        if ($form->isSubmitted() && $form->isValid()) {
            $reclamation->setEtat("En attent");
            $reclamation->setDate(new \DateTime());
            $reclamation->getUploadFile();
            $reclamation->setIdu($user);
            $entityManager->persist($reclamation);
            $entityManager->flush();

            return $this->redirectToRoute('mes_reclamation_user', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('reclamation/new.html.twig', [
            'reclamation' => $reclamation,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{idR}", name="app_reclamation_show", methods={"GET"})
     */
    public function show(Reclamation $reclamation): Response
    {
        return $this->render('reclamation/show.html.twig', [
            'reclamation' => $reclamation,
        ]);
    }

    /**
     * @Route("/{idR}/edit", name="app_reclamation_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Reclamation $reclamation, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(ReclamationType::class, $reclamation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            if ($reclamation->getFile() != null){
                $reclamation->getUploadFile();
            }

            $entityManager->flush();

            return $this->redirectToRoute('mes_reclamation_user', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('reclamation/edit.html.twig', [
            'reclamation' => $reclamation,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/delete/{id}", name="reclamation_delete")
     */
    public function delete($id): Response
    {
        $em = $this->getDoctrine()->getManager();
        $categorie = $em->getRepository(Reclamation::class)->find($id);
        $em->remove($categorie);
        $em->flush();
        return $this->redirectToRoute('mes_reclamation_user');
    }


    /**
     * @Route("/traiter/{id}", name="reclamation_traiter")
     */
    public function traiter($id, \Swift_Mailer $mailer): Response
    {
        $em = $this->getDoctrine()->getManager();
        $rec = $em->getRepository(Reclamation::class)->find($id);
        $rec->setEtat("traiter");

        $message = (new \Swift_Message('Reclamation Traiter'))
        ->setFrom('nermin.fattouch@esprit.tn')
        ->setTo($rec->getIdU()->getEmail())
        ->setBody(
            $this->renderView(
                'reclamation/emailTraiter.html.twig',
                ['reclamation' => $rec]
            ),
            'text/html'
        )

        // you can remove the following code if you don't define a text version for your emails
        ->addPart(
            $this->renderView(
                // templates/emails/registration.txt.twig
                'reclamation/emailTraiter.html.twig',
                ['reclamation' => $rec]
            ),
            'text/plain'
        );
       $mailer->send($message);
        $em->persist($rec);
        $em->flush();
        return $this->redirectToRoute('app_reclamation_index');
    }
}
