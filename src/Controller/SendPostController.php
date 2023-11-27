<?php

namespace App\Controller;

use App\Entity\Article;
use App\Entity\User;
use App\Form\AddPostType;
use DateTimeImmutable;
use DateTimeZone;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\String\Slugger\SluggerInterface;

//use Symfony\Component\Security\Core\Security;

class SendPostController extends AbstractController
{
    #[Route('/add', name: 'app_send')]
    public function index(Request $request, ManagerRegistry $doctrine, UserInterface $user = null, SluggerInterface $slugger): Response
    {
        $managerDoctrine = $doctrine->getManager();
        $post = new Article();
        //get current date
        $format = 'Y-m-d H:i:s';
        $timezone = new DateTimeZone('Europe/Paris');
        $currentDateTime = DateTimeImmutable::createFromFormat($format, date($format), $timezone);
        //integrate to object
        $post->setCreatedAt($currentDateTime);
        //recover the object User
        $userId = $user->getId();
        $userObj = $doctrine->getRepository(User::class)->find($userId);
        //integrate to object $post
        $post->setUserId($userObj);
        $form = $this->createForm(AddPostType::class, $post);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $imageFile = $form->get('image')->getData();
            if ($imageFile) {
                $originalFilename = pathinfo($imageFile->getClientOriginalName(), PATHINFO_FILENAME);
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename.'-'.uniqid().'.'.$imageFile->guessExtension();
                try {
                    $imageFile->move(
                        $this->getParameter('images_directory'),
                        $newFilename
                    );
                } catch (FileException $e) {
                    // ... handle exception if something happens during file upl
                }
                $post->setImage($newFilename);
            }
            $managerDoctrine->persist($post);
            $managerDoctrine->flush();
            return $this->redirectToRoute("app_index");
        }
        return $this->renderForm('send_post/index.html.twig', [
            'form' => $form,
            
        ]);
    }
}
