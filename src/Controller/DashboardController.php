<?php

namespace App\Controller;
use App\Entity\Certificates;
use App\Form\CertificatesType;
use App\Repository\CertificatesRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractController
{
    /**
     * @Route("/", name="dashboard")
     */
    public function index(): Response
    {   
        $now = new \DateTime();
        $certificate = $this->getDoctrine()->getManager();
        $repocertificates = $certificate->getRepository(Certificates::class);
        $certificates = $repocertificates->createQueryBuilder('a')
            // Filter by some parameter if you want
            // ->where('a.published = 1')
            ->select('count(a.id)')
            ->getQuery()
            ->getSingleScalarResult();
        $certificatesrenwb = $repocertificates->createQueryBuilder('a')
            // Filter by some parameter if you want
            // ->where('a.published = 1')
            ->select('count(a.id)')
            ->where('a.renewalDate > :limite')
            ->setParameter('limite', $now->sub(new \DateInterval('P3D')))
            ->getQuery()
            ->getSingleScalarResult();
        return $this->render('dashboard/index.html.twig', [
            'controller_name' => 'DashboardController',
            'certificates' => $certificates,
            'certificatesrenwb' => $certificatesrenwb,
        ]);
    }
}
