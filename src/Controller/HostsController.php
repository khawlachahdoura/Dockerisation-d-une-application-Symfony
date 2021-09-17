<?php

namespace App\Controller;

use App\Entity\Hosts;
use App\Form\HostsType;
use App\Repository\HostsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/hosts")
 */
class HostsController extends AbstractController
{
    /**
     * @Route("/", name="hosts_index", methods={"GET","POST"})
     */
    public function index(HostsRepository $hostsRepository,Request $request): Response
    {
        $host = new Hosts();
        $form = $this->createForm(HostsType::class, $host);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($host);
            $entityManager->flush();
            $this->addFlash('success', $host->getName().' successfuly added! ');
            return $this->redirectToRoute('hosts_index', [], Response::HTTP_SEE_OTHER);
        }
        
        return $this->render('hosts/index.html.twig', [
            'hosts' => $hostsRepository->findAll(),
            'host' => $host,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="hosts_show", methods={"GET"})
     */
    public function show(Hosts $host): Response
    {
        return $this->render('hosts/show.html.twig', [
            'host' => $host,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="hosts_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Hosts $host): Response
    {
        $form = $this->createForm(HostsType::class, $host);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();
            $this->addFlash('success', $host->getName().' successfuly updated! ');
            return $this->redirectToRoute('hosts_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('hosts/edit.html.twig', [
            'host' => $host,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="hosts_delete", methods={"POST"})
     */
    public function delete(Request $request, Hosts $host): Response
    {
        if ($this->isCsrfTokenValid('delete'.$host->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($host);
            $entityManager->flush();
            $this->addFlash('success', $host->getName().' successfuly deleted! ');
        }

        return $this->redirectToRoute('hosts_index', [], Response::HTTP_SEE_OTHER);
    }
}
