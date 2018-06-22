<?php
/**
 * Created by PhpStorm.
 * User: serhiikashuba
 * Date: 13.06.18
 * Time: 12:03
 */

namespace AppBundle\Entity\Main;

use Gedmo\Mapping\Annotation as Gedmo;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="AppBundle\Repository\AccountCompanyRepository")
 * @ORM\Table(name="job_admin.account_company", indexes={@ORM\Index(name="search_idx", columns={"title"})})
 */

//TODO change all 'columnDefinition' by native ORM properties
class AccountCompany
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer", length=11, nullable=false)
     */
    private $id;
    /**
     * @ORM\Column(type="string", length=20, nullable=true, options={"default":null})
     */
    private $activationid;
    /**
     * @ORM\Column(type="string", length=10, nullable=true, options={"default":"customer"})
     */
    private $accountType;
    /**
     * @ORM\Column(type="string", length=150, nullable=false)
     */
    private $title;
    /**
     * @ORM\Column(type="string", length=75, nullable=true, options={"default":null})
     */
    private $street;
    /**
     * @ORM\Column(type="string", length=10, nullable=true, options={"default":null})
     */
    private $zip;
    /**
     * @ORM\Column(type="string", length=100, nullable=true, options={"default":null})
     */
    private $city;
    /**
     * @ORM\Column(type="string", length=75, nullable=true, options={"default":null})
     */
    private $email;
    /**
     * @ORM\Column(type="string", length=50, nullable=false)
     */
    private $password;
    /**
     * @ORM\Column(type="string", length=5, nullable=true, options={"default":null})
     */
    private $gender;
    /**
     * @ORM\Column(type="string", length=75, nullable=true, options={"default":null})
     */
    private $lastname;
    /**
     * @ORM\Column(type="string", length=75, nullable=true, options={"default":null})
     */
    private $firstname;
    /**
     * @ORM\Column(type="string", length=100, nullable=true, options={"default":null})
     */
    private $department;
    /**
     * @ORM\Column(type="string", length=50, nullable=true, options={"default":null})
     */
    private $telephone;
    /**
     * @ORM\Column(type="string", length=50, nullable=true, options={"default":null})
     */
    private $fax;
    /**
     * @ORM\Column(type="string", length=200, nullable=true, options={"default":null})
     */
    private $homepage;
    /**
     * @ORM\Column(type="string", length=200, nullable=true, options={"default":null})
     */
    private $facebook;
    /**
     * @ORM\Column(type="string", length=50, nullable=true, options={"default":null})
     */
    private $logo;
    /**
     * @Gedmo\Timestampable(on="create")
     * @ORM\Column(type="datetime", nullable=false, columnDefinition="TIMESTAMP")
     */
    private $createddate;
    /**
     * @Gedmo\Timestampable(on="change")
     * @ORM\Column(type="datetime", nullable=false, columnDefinition="TIMESTAMP")
     */
    private $changeddate;
    /**
     * @ORM\Column(type="datetime", nullable=true, options={"default":null})
     */
    private $lastlogin;
    /**
     * @ORM\Column(type="string", length=20, nullable=true, options={"default":null})
     */
    private $lastloginip;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title): void
    {
        $this->title = $title;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password): void
    {
        $this->password = $password;
    }

    /**
     * @return mixed
     */
    public function getCreateddate()
    {
        return $this->createddate;
    }

    /**
     * @param mixed $createddate
     */
    public function setCreateddate($createddate): void
    {
        $this->createddate = $createddate;
    }

    /**
     * @return mixed
     */
    public function getChangeddate()
    {
        return $this->changeddate;
    }

    /**
     * @param mixed $changeddate
     */
    public function setChangeddate($changeddate): void
    {
        $this->changeddate = $changeddate;
    }




}