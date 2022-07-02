<?php

namespace App\Controller;

use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mailer\Transport\TransportInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\Routing\Annotation\Route;

class MailController extends AbstractController
{
    /**
     * @Route("/mail", name="mail")
     */
    public function index(TransportInterface $mailer): Response
    {

        $email = (new TemplatedEmail())
            ->from('hello@example.com')
            ->to('you@example.com')
            ->subject('Test de MailDev')
            ->text('Ceci est un mail de test');

        $mailer->send($email);

        return $this->render('mail/index.html.twig', [
            'controller_name' => 'MailController',
        ]);
    }
}
