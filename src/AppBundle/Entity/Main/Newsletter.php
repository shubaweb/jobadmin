<?php
/**
 * Created by PhpStorm.
 * User: serhiikashuba
 * Date: 20.06.18
 * Time: 14:26
 */

namespace AppBundle\Entity\Main;

use Gedmo\Mapping\Annotation as Gedmo;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="job_admin.newsletter")
 */
class Newsletter
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="boolean", nullable=false, options={"default":false})
     */
    private $mailingStatus;

    /**
     * @ORM\Column(type="string", length=100, nullable=false)
     */
    private $email;

    /**
     * @ORM\Column(type="string", length=1, nullable=true, options={"default":null})
     */
    private $salutation;

    /**
     * @ORM\Column(type="string", length=25, nullable=true, options={"default":null})
     */
    private $title;
    /**
     * @ORM\Column(type="string", length=150, nullable=true, options={"default":null})
     */
    private $lastname;
    /**
     * @ORM\Column(type="string", length=150, nullable=true, options={"default":null})
     */
    private $firstname;
    /**
     * @ORM\Column(type="string", length=150, nullable=true, options={"default":null})
     */
    private $info;
    /**
     * @Gedmo\Timestampable(on="create")
     * @ORM\Column(type="datetime", nullable=false, columnDefinition="TIMESTAMP")
     */
    private $createddate;
    /**
     * @Gedmo\Timestampable(on="update")
     * @ORM\Column(type="datetime", nullable=false, columnDefinition="TIMESTAMP")
     */
    private $changeddate;
    /**
     * @ORM\Column(type="datetime", nullable=false, columnDefinition="TIMESTAMP"))
     */
    private $subscribeDate;
    /**
     * @ORM\Column(type="string",length=20, options={"default":null})
     */
    private $subscribeIP;
    /**
     * @ORM\Column(type="datetime", nullable=false, columnDefinition="TIMESTAMP"))
     */
    private $unsubscribeDate;
    /**
     * @ORM\Column(type="string", length=20, options={"default":null})
     */
    private $unsubscribeIP;
    /**
     * @ORM\Column(type="string",length=20, options={"default":null})
     */
    private $creator;
    /**
     * @ORM\Column(type="string", length=12, options={"default":null})
     */
    private $randomHash;
}