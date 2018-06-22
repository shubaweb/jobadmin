<?php
/**
 * Created by PhpStorm.
 * User: serhiikashuba
 * Date: 13.06.18
 * Time: 13:23
 */

namespace AppBundle\Controller;



use AppBundle\Form\CompanyEdit;
use AppBundle\Form\SearchForm;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class CompanyController extends Controller
{
    /**
     * @Route("/company/list", name="company_list")
     */
    public function listAction(Request $request)
    {
        $searchCompanyForm = $this->createForm(SearchForm::class);
        $editCompanyForm = $this->createForm(CompanyEdit::class);
        $editCompanyForm->handleRequest($request);
        $em = $this->getDoctrine()->getManager();

        if ($editCompanyForm->isSubmitted() && $editCompanyForm->isValid()) {
            $company = $editCompanyForm->getData();
            $company->setCreatedDate(date_create());
            $company->setChangeddate(date_create());
            $em->merge($company);
            $em->flush();
        }
        $companyList = $em->getRepository('AppBundle:AccountCompany')
            ->findAll();
        return $this->render('company/companyList.html.twig', [
            'companyList' => $companyList,
            'editForm' => $editCompanyForm->createView(),
            'searchForm' => $searchCompanyForm->createView()
        ]);
    }

    /**
     * @Route("/company/save")
     * @Method("POST")
     */

    public function saveCompanyAction()
    {

    }
}