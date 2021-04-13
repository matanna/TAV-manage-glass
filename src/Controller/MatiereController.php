<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use App\Repository\MatiereRepository;
use App\Repository\ChuteRepository;
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

        $formNew = $this->createForm(MatiereType::class, $matiere);

        $formNew->handleRequest($request);

        if ($formNew->isSubmitted() && $formNew->isValid()) {
            $newMatiere = $formNew->getData();
            $matiere->setName($newMatiere->getName());
            $manager->persist($matiere);
            $manager->flush();

            return $this->redirectToRoute('matiere');
        }

        $matieres = $matiereRepository->findAll();

        return $this->render('matiere/matiere.html.twig', [
            "matieres" => $matieres,
            "form" => $formNew->createView()
        ]);
    }

    /**
     * @Route("/edit_matiere/{id}", name="edit_matiere")
     */
    public function editMatiere(MatiereRepository $matiereRepository, 
        EntityManagerInterface $manager, Request $request, $id
    ) : Response {

        $matiere = $matiereRepository->findOneBy(['id' => $id]);

        $data = $request->request->all();

        if ($data && $data["modify_matiere"] != null) {
            $matiere->setName($data["modify_matiere"]);
            $manager->persist($matiere);
            $manager->flush();
        
            return $this->redirectToRoute('matiere');
        }

        return $this->redirectToRoute('matiere');
    }

    /**
     * @Route("/delete_matiere/{id}", name="delete_matiere")
     */
    public function deleteMatiere(MatiereRepository $matiereRepository, 
        EntityManagerInterface $manager, ChuteRepository $chuteRepository, $id
    ) : Response {

        $matiere = $matiereRepository->findOneBy(['id' => $id]);
        $chutes = $chuteRepository->findBy(['matiere' => $matiere]);

        if ($chutes == null) {
            $manager->remove($matiere);
            $manager->flush();
        } else {
            $this->addFlash('warning', 'Cette matière ne peut pas être supprimée');
        }

        return $this->redirectToRoute('matiere');
    }
}
