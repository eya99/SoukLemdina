<?php

namespace WorkshopBundle\Controller;

use CMEN\GoogleChartsBundle\GoogleCharts\Charts\PieChart;
use SUserBundle\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use WorkshopBundle\Entity\ParticipantWork;
use WorkshopBundle\Entity\Workshop;
use WorkshopBundle\WorkshopBundle;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $user = $this->container->get('security.token_storage')->getToken()->getUser();
        $pieChart = new PieChart();
        $em = $this->getDoctrine();
        $workshop = $em->getRepository(Workshop::class)->findAll();
        $participants = $em->getRepository(ParticipantWork::class)->findAll();
        $user= $em->getRepository("SUserBundle:User")->find($user);

        $totalParticipants = count($participants);
        $data = array();
        $stat = ['workshop', 'nbrParticipants'];
        array_push($data, $stat);
        foreach ($participants as $p) {
            $stat = array();
            $work = $em->getRepository(Workshop::class)->find($p->getIdWorkshop());
            $parts = $em->getRepository(ParticipantWork::class)->findBy(array('idWorkshop' => $work));
            $nb = (count($parts) * 100) / $totalParticipants;
            array_push($stat, $work->getNomWorkshop(),$nb);
            $stat = [$work->getNomWorkshop(), $nb];
            array_push($data, $stat);
        }
        $pieChart->getData()->setArrayToDataTable(
            $data
        );
        $pieChart->getOptions()->setTitle('Pourcentages des participants par Workshop');
        $pieChart->getOptions()->setHeight(500);
        $pieChart->getOptions()->setWidth(900);
        $pieChart->getOptions()->getTitleTextStyle()->setBold(true);
        $pieChart->getOptions()->getTitleTextStyle()->setColor('#009900');
        $pieChart->getOptions()->getTitleTextStyle()->setItalic(true);
        $pieChart->getOptions()->getTitleTextStyle()->setFontName('Arial');
        $pieChart->getOptions()->getTitleTextStyle()->setFontSize(20);
        return $this->render('WorkshopBundle:Default:index.html.twig', array('piechart' =>
            $pieChart));
        return $this->render('WorkshopBundle:Default:index.html.twig', array('piechart' =>
            $pieChart));
    }
}
