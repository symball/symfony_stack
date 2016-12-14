<?php

namespace AppBundle\Document;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;

/**
 * @MongoDB\Document()
 */
class User extends BaseUser
{
    /**
     * @MongoDB\Id(strategy="auto")
     */
    protected $id;
    /**
     * ### START CUSTOM CODE ###
     * If regenerating the document using doctrine, temporarily
     * move this and remove all code beneath the end of this area
     * to ensure it works properly
     */
   public function __toString()
   {
     return $this->id;
   }
    public function __construct()
    {
        parent::__construct();
    }
    /**
     * ### END CUSTOM CODE ###
     */

}
