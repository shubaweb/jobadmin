<?php
/**
 * Created by PhpStorm.
 * User: serhiikashuba
 * Date: 20.06.18
 * Time: 14:17
 */

namespace AppBundle\Entity\Main;

use Gedmo\Mapping\Annotation as Gedmo;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="job_admin.newsletter_locked_domain")
 */
class NewsletterLockedDomain
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    private  $id;

    /**
     * @ORM\Column(type="string", length=100, nullable=false)
     */
    private  $domain;

    /**
     * @Gedmo\Timestampable(on="create")
     * @ORM\Column(type="datetime", nullable=false)
     */
    private  $createddate;

    /**
     * @Gedmo\Timestampable(on="update")
     * @ORM\Column(type="datetime", nullable=false)
     */
    private  $changeddate;

}