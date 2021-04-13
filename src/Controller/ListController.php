<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use App\Repository\ChuteRepository;
use App\Entity\Matiere;
use App\Entity\Chute;

class ListController extends AbstractController
{
    /**
     * @Route("/", name="list")
     */
    public function showListChute(EntityManagerInterface $manager, ChuteRepository $chuteRepository): Response
    {
        $chutes = $chuteRepository->findAll();
        

        /*$matiere = new Matiere();
        $matiere->setName("Verre dépoli de 4mm");

        $manager->persist($matiere);
        $manager->flush();

        $chute = new Chute();
        $chute->setLongueur(3210)
              ->setLargeur(2550)
              ->setQuantite(2)
              ->setMatiere($matiere);

        $manager->persist($chute);
        $manager->flush();*/

        return $this->render('list/list.html.twig', [
           "chutes" => $chutes
        ]);
    } 
}
