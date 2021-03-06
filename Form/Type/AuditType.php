<?php

namespace Cisco\ResolveTargetEntityTestBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class AuditType extends AbstractType
{

    public function buildForm( FormBuilderInterface $builder, array $options )
    {
        $builder->add( 'target', null, array(
            'required'    => true,
            'empty_data'  => null,
        ));
        $builder->add( 'comment' );
    }

    public function getName()
    {
        return 'audit';
    }

    public function setDefaultOptions( OptionsResolverInterface $resolver )
    {
        $resolver->setDefaults( array(
            'data_class' => 'Cisco\ResolveTargetEntityTestBundle\Entity\Audit',
        ));
    }

}