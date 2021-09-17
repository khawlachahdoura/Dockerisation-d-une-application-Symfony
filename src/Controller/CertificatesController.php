<?php

namespace App\Controller;


use App\Entity\Certificates;
use App\Form\CertificatesType;
use App\Repository\CertificatesRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/certificates")
 */
class CertificatesController extends AbstractController
{
   
    /**
     * @Route("/", name="certificates_index", methods={"GET","POST"})
     */
    public function index(Request $request, CertificatesRepository $certificatesRepository): Response
    {
        $certificate = new Certificates();
        $form = $this->createForm(CertificatesType::class, $certificate);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $certificate->getDomain();
            $entityManager->persist($certificate);
            $entityManager->flush();
            $this->addFlash('success','Certificate successfuly added! ');
            return $this->redirectToRoute('certificates_index', [], Response::HTTP_SEE_OTHER);
        }
        return $this->render('certificates/index.html.twig', [
            'certificates' => $certificatesRepository->findAll(),
            'certificate' => $certificate,
            'form' => $form->createView(),
        ]);
    }
 /**
     * @Route("/", name="certificates_showcertif", methods={"GET","POST"})
     */
    public function showcertif(Request $request, CertificatesRepository $certificatesRepository): Response
    {
        $certificate = new Certificates();
        $form = $this->createForm(CertificatesType::class, $certificate);
        $certificate = $this->getDoctrine()->getManager();
        $repocertificates = $certificate->getRepository(Certificates::class);
        $certificat = $repocertificates->createQueryBuilder('a')
        ->select('count(a.id)')
        ->where('a.renewalDate > :limite')
        ->setParameter('limite', $now->sub(new \DateInterval('P3D')))
        ->getQuery()
        ->getSingleScalarResult();
        return $this->render('certificates/index1.html.twig', [
            'certificat' => $certificatesRepository->findAll(),
            'certificate' => $certificate,
            
        ]);
    }

    /**
     * @Route("/{id}", name="certificates_show", methods={"GET"})
     */
    public function show(Certificates $certificate): Response
    {
        return $this->render('certificates/show.html.twig', [
            'certificate' => $certificate,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="certificates_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Certificates $certificate): Response
    {
        $form = $this->createForm(CertificatesType::class, $certificate);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();
            $this->addFlash('success','Certificate successfuly updated! ');
            return $this->redirectToRoute('certificates_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('certificates/edit.html.twig', [
            'certificate' => $certificate,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="certificates_delete", methods={"POST"})
     */
    public function delete(Request $request, Certificates $certificate): Response
    {
        if ($this->isCsrfTokenValid('delete'.$certificate->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($certificate);
            $entityManager->flush();
            $this->addFlash('success','Certificate successfuly deleted! ');
        }

        return $this->redirectToRoute('certificates_index', [], Response::HTTP_SEE_OTHER);
    }
}
