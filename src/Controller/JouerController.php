<?php

namespace App\Controller;

use App\Entity\Grille;
use App\Form\GrilleType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

#[isGranted('ROLE_USER')]
class JouerController extends AbstractController
{
    #[Route('/jouer', name: 'jouer_index')]
    public function index(
        Request                $request,
        EntityManagerInterface $em
    ): Response
    {
        $grille = new Grille();
        $grilleForm = $this->createForm(GrilleType::class, $grille);
        $grilleForm->handleRequest($request);
        if ($grilleForm->isSubmitted() && $grilleForm->isValid()) {
            $grille->setJoueur($this->getUser());
            $grille->setDate(new \DateTime());
            $em->persist($grille);
            $em->flush();
            $this->addFlash('success', 'La grille a bien été prise en compte');
            return $this->redirectToRoute('jouer_index');
        }
        return $this->render('jouer/index.html.twig',
            compact('grilleForm')
        );
    }
}
