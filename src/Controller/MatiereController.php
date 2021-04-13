<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use App\Repository\MatiereRepository;
use Symfony\Component\HttpFoundation\Request;
use App\Form\MatiereType;
use App\Entity\Matiere;

class MatiereController extends AbstractController
{
    /**
     * @Route("/matiere", name="matiere")
     */
    public function manageMatiere(MatiereRepository $matiereRepository, 
        Request $request, EntityManagerInterface $manager
    ): Response {
        $matiere = new Matiere();

        $form = $this->createForm(MatiereType::class, $matiere);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $newMatiere = $form->getData();
            $matiere->setName($newMatiere->getName());
            $manager->persist($matiere);
            $manager->flush();
        }

        $matieres = $matiereRepository->findAll();

        return $this->render('matiere/matiere.html.twig', [
            "matieres" => $matieres,
            "form" => $form->createView()
        ]);
    }
}
