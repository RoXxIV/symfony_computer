<?php

namespace App\Controller;

use App\Entity\Component;
use App\Form\ComponentType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/component", name="component_")
 */
class ComponentController extends AbstractController
{
    /**
     * @Route("/", name="index")
     */
    public function index(): Response
    {
        return $this->render('component/index.html.twig', [
            'controller_name' => 'ComponentController',
        ]);
    }

    /**
     * @Route("/new", name="new")
     */
    public function new(): Response
    {
        $component = new Component();

        $form = $this->createForm(ComponentType::class, $component);

        return $this->render('component/new.html.twig', [
            'formComponent' => $form->createView(),
        ]);
    }
}
