<?php
/**
 * Created by PhpStorm.
 * User: hatem
 * Date: 2/26/2018
 * Time: 3:29 AM
 */

namespace PdfBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class PdfController extends Controller
{
    public function pdfAction($id)
    {
        $user = $this->get('security.token_storage')->getToken()->getUser();
        $em = $this->getDoctrine()->getManager();
        $commande = $em->getRepository("CommandeBundle:Commande")->find(array('id'=>$id));
        $idc=$commande->getId();
        $lcommande = $em->getRepository("CommandeBundle:LigneDeCommande", $id)->findBy(array('idCommande' => $idc));

        $html = $this->renderView('PdfBundle:Pdf:Pdf.html.twig', array('commande'=>$commande,'lcommande'=>$lcommande));




        $filename = sprintf('test-%s.pdf', date('Y-m-d'));

        return new Response(
            $this->get('knp_snappy.pdf')->getOutputFromHtml($html),
            200,
            [
                'Content-Type'        => 'application/pdf',
                'Content-Disposition' => sprintf('attachment; filename="%s"', $filename),
            ]
        );
    }
}