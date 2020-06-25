<?php

namespace App\Controller;

use App\Form\ContactType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Routing\Annotation\Route;

class ContactController extends AbstractController
{
    /**
     * @Route("/contact", name="contact")
     */
    public function index()
    {
        $form = $this->createForm(ContactType::class);
        if ($form->isSubmitted() && $form->isValid()) {
            $mail = (new \Swift_Message('Mail de contact'))
                ->setFrom()
                ->setTo()
                ->setBody();
            return $this->send($mail);
        }
        return $this->render('contact/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
