<?php

namespace App\Form;

use App\Entity\Hosts;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use App\Repository\AccountsManagersRepository;
use App\Entity\AccountsManagers;

class HostsType extends AbstractType {

    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('name')
                ->add('phpVersion')
                ->add('cdn')
                ->add('discSpace')
                ->add('apache_nginx', ChoiceType::class, [
                    'choices' => [
                        'Select Web server'=>'',
                        'Apache' => 'apache',
                        'Nginx' => 'nginx'
                    ],
                    'label' => FALSE
                ])
                
                ->add('sites', CollectionType::class, [
                    'entry_type' => TextType::class,
                    'entry_options' => [
                        'attr' => ['class' => 'form-control'],
                    ],
                    'label'=>false,
                    'by_reference' => false,
                    'allow_add' => true,
                    'allow_delete' => true
                ])
                ->add('databasesLinks', CollectionType::class, [
                    'entry_type' => TextType::class,
                    'entry_options' => [
                        'attr' => ['class' => 'form-control'],
                    ],
                    'label'=>false,
                    'by_reference' => false,
                    'allow_add' => true,
                    'allow_delete' => true
                ])
                ->add('backups', CollectionType::class, [
                    'entry_type' => TextType::class,
                    'entry_options' => [
                        'attr' => ['class' => 'form-control'],
                    ],
                    'label'=>false,
                    'by_reference' => false,
                    'allow_add' => true,
                    'allow_delete' => true
                ])
                
                ->add('adminManager', EntityType::class, [
                    'class' => AccountsManagers::class,
                    'query_builder' => function (AccountsManagersRepository $er) {
                        return $er->createQueryBuilder('u')
                                ->andWhere('u.function = :val')
                                ->setParameter('val', 'adminManager');
                    },
                ])
                ->add('technicalManager', EntityType::class, [
                    'class' => AccountsManagers::class,
                    'query_builder' => function (AccountsManagersRepository $er) {
                        return $er->createQueryBuilder('u')
                                ->andWhere('u.function = :val')
                                ->setParameter('val', 'technicalManager');
                    },
                ])
                ->add('billingManager', EntityType::class, [
                    'class' => AccountsManagers::class,
                    'query_builder' => function (AccountsManagersRepository $er) {
                        return $er->createQueryBuilder('u')
                                ->andWhere('u.function = :val')
                                ->setParameter('val', 'billingManager');
                    },
                ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver) {
        $resolver->setDefaults([
            'data_class' => Hosts::class,
        ]);
    }

}
