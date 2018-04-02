<?php

namespace ZesharCRM\Bundle\CoreBundle\Admin;

use Doctrine\ORM\EntityManager;
use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;
use Sonata\AdminBundle\Validator\ErrorElement;

class ParameterAdmin extends Admin
{
    /**
     * @var
     */
    protected $em;

    public function __construct($code, $class, $baseControllerName, EntityManager $em)
    {
        parent::__construct($code, $class, $baseControllerName);
        $this->em = $em;
    }

    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('name')
            ->add('value');
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('name')
            ->add('value')
            ->add('_action', 'actions', [
                'actions' => [
                    'edit'   => [],
                    'delete' => [],
                ],
            ]);
    }

    /**
     * @param FormMapper $formMapper
     */
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('name')
            ->add('value');
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('id')
            ->add('value');
    }

    public function validate(ErrorElement $errorElement, $object)
    {
        $errorElement
            ->addConstraint(new \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity([
                'fields'  => ['name'],
                'message' => 'Setting with this name already exists',
            ]))
            ->end();
    }

    public function toString($object)
    {
        return 'Parameter';
    }
}
