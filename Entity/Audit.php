<?php

namespace Cisco\ResolveTargetEntityTestBundle\Entity;

use Cisco\ResolveTargetEntityTestBundle\Model\TargetInterface;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="audit")
 */
class Audit
{
    /**
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue
     */
    private $id;

    /**
     * @ORM\Column(type="string")
     */
    private $comment;

    /**
     * @ORM\ManyToOne(targetEntity="Cisco\ResolveTargetEntityTestBundle\Model\TargetInterface")
     * @ORM\JoinColumn(name="target_id",referencedColumnName="id")
     */
    protected $target;
    
    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set comment
     *
     * @param string $comment
     * @return \Cisco\ResolveTargetEntityTestBundle\Entity\Audit
     */
    public function setComment( $comment )
    {
        $this->comment = $comment;
        return $this;
    }

    /**
     * Get comment
     *
     * @return string 
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Set target
     *
     * @param \Cisco\ResolveTargetEntityTestBundle\Model\TargetInterface $target
     * @return \Cisco\ResolveTargetEntityTestBundle\Entity\Audit
     */
    public function setTarget( TargetInterface $target )
    {
        $this->target = $target;
        return $this;
    }

    /**
     * Get target
     *
     * @return \Cisco\ResolveTargetEntityTestBundle\Model\TargetInterface
     */
    public function getTarget()
    {
        return $this->target;
    }
}
