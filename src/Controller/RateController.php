<?php

namespace App\Controller;

use App\Entity\Article;
use App\Entity\Rating;
use App\Entity\User;
use App\Form\SendRateType;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\User\UserInterface;

class RateController extends AbstractController
{
    #[Route('/rate/{id}', name: 'app_rate')]
    public function index($id, ManagerRegistry $doctrine, UserInterface $user = null, Request $request): Response
    {
       
        if(is_numeric($id)){
            $post = $doctrine->getRepository(Article::class)->find($id);
            if(boolval($post)){
                //cheking if user already voted
                $hasVoted = boolval($doctrine->getRepository(Rating::class)->findBy(["UserId" => $user->getId(), "articleId" => $id]));
                if(!$hasVoted){
                    $rating = new Rating();
                    $form = $this->createForm(SendRateType::class, $rating);
                    $form->handleRequest($request);
                    $entityManager = $doctrine->getManager();
                    if($form->isSubmitted() && $form->isValid()){
                        $userId = $user->getId();
                        $userObj = $doctrine->getRepository(User::class)->find($userId);
                        //integrate to object $post
                        $rating->setUserId($userObj);
                        $rating->setArticleId($post);
                        $entityManager->persist($rating);
                        $entityManager->flush();
                        $this->addFlash('success', 'Votre note a été envoyé');
                        return $this->redirectToRoute('app_index');
                    }
                    return $this->renderForm('rate/index.html.twig', [
                        'form' => $form,
                        'error' =>null
                    ]);
                }
                else{
                    return $this->renderForm('rate/index.html.twig', [
                        'form' => null,
                        'error' => "Vous avez déjà noter ce poste"
                    ]);
                }
            } 
            else{
                return $this->redirectToRoute("app_index");
            }
        }
        return $this->render('rate/index.html.twig', [
            'controller_name' => 'RateController',
        ]);
    }
}
