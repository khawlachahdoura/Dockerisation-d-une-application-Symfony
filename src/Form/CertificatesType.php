<?php

namespace App\Form;

use App\Entity\Certificates;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use App\Repository\DomainsRepository;
use App\Entity\Domains;

class CertificatesType extends AbstractType {

    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('creationDate', DateType::class, [
                    'widget' => 'single_text',
                    // adds a class that can be selected in JavaScript
                    'attr' => ['class' => 'form-control'],
                ])
                ->add('renewalDate', DateType::class, [
                    'widget' => 'single_text',
                    // adds a class that can be selected in JavaScript
                    'attr' => ['class' => 'form-control'],
                ])
                ->add('renewalMode')
                ->add('owner')
                ->add('issuer')
                ->add('domain',EntityType::class,[
                    'class' => Domains::class,
                    'choice_label' => function ($domain) {
                        return $domain->getName();
                    }
                ])
        ;
    }
/**add('domain',EntityType::class,[
               'class' => Domains::class,
               'choice_label' => function ($domain) {
                   return $domain->getName();
               }
           ]) */
    public function configureOptions(OptionsResolver $resolver) {

        $resolver->setDefaults([
            'data_class' => Certificates::class,
        ]);
    }
}
