<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;
use App\Repository\ChuteRepository;
use App\Form\ChuteType;
use App\Entity\Matiere;
use App\Entity\Chute;

class ListController extends AbstractController
{
    /**
     * @Route("/", name="list")
     */
    public function showListChute(EntityManagerInterface $manager, 
        ChuteRepository $chuteRepository, Request $request
    ): Response {

        $chute = new Chute();

        $form = $this->createForm(ChuteType::class, $chute);

        $form->handleRequest($request);

        $chutes = $chuteRepository->findAllByOrder();

        if ($form->isSubmitted() && $form->isValid()) {
            $newChute = $form->getData();
            $manager->persist($newChute);
            $manager->flush();

            return $this->redirectToRoute('list');
        }

        return $this->render('list/list.html.twig', [
           "chutes" => $chutes,
           "form" => $form->createView()
        ]);
    }

    /**
     * @Route("use_chute/{id}", name="use_chute")
     */
    public function useChute(EntityManagerInterface $manager, 
        ChuteRepository $chuteRepository, $id
    ): Response {

        $chute = $chuteRepository->findOneBy(['id' => $id]);

        if ($chute) {
            $chute->setUsed(true);
            $manager->persist($chute);
            $manager->flush();
        }
       
        return $this->redirectToRoute('list');
    }

    /**
     * @Route("noUse_chute/{id}", name="noUse_chute")
     */
    public function noUseChute(EntityManagerInterface $manager, 
        ChuteRepository $chuteRepository, $id
    ): Response {

        $chute = $chuteRepository->findOneBy(['id' => $id]);

        if ($chute) {
            $chute->setUsed(false);
            $manager->persist($chute);
            $manager->flush();
        }
       
        return $this->redirectToRoute('list');
    }

    /**
     * @Route("/delete_chute/{id}", name="delete_chute")
     */
    public function deleteMatiere( EntityManagerInterface $manager, 
        ChuteRepository $chuteRepository, $id
    ) : Response {

        $chute = $chuteRepository->findOneBy(['id' => $id]);

        if ($chute) {
            $manager->remove($chute);
            $manager->flush();
        } 

        return $this->redirectToRoute('list');
    }

    /**
     * @Route("/edit_chute/{id}", name="edit_chute")
     */
    public function editchute(ChuteRepository $chuteRepository, 
        EntityManagerInterface $manager, Request $request, $id
    ) : Response {

        $chute = $chuteRepository->findOneBy(['id' => $id]);

        $data = $request->request->all(); 

        if ($data && $data["modify_longueur"] != null
            && $data["modify_largeur"] != null
            && $data["modify_quantite"] != null
        ) {
            $chute->setLongueur((int)$data["modify_longueur"])
                  ->setLargeur((int)$data["modify_largeur"])
                  ->setQuantite((int)$data["modify_quantite"])
                  ->setUsed(false);

            $manager->persist($chute);
            $manager->flush();
        
        } else {
            $this->addFlash('warning', 'La modification n\' a pas eu lieu, il manque une valeur.');
        }

        return $this->redirectToRoute('list');
    }

}
