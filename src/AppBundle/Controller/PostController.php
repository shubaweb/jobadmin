<?php
/**
 * Created by PhpStorm.
 * User: serhiikashuba
 * Date: 18.06.18
 * Time: 16:43
 */

namespace AppBundle\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class PostController extends Controller
{
    /**
     * @Route("/company/search", name="searchCompany")
     */
    public function searchCompanyAction(Request $request)
    {
        $query = $request->get('query');
        $em = $this->getDoctrine()->getManager();
        $companies = $em->getRepository('AppBundle:AccountCompany')
            ->findAllTitleMatchingQuery($query);

        return $this->render('company/list.html.twig', [
            'companyList' => $companies
        ]);
    }

}