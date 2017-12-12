<?php
// src/BW\UtilisateurBundle/Form/RegistrationType.php

namespace BW\UtilisateurBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class RegistrationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('nom');
        $builder->add('prenom');
    }

    public function getParent()
    {
        return 'FOS\UserBundle\Form\Type\RegistrationFormType';
    }

    public function getBlockPrefix()
    {
        return 'utilisateur_user_registration';
    }

    // For Symfony 2.x
    public function getNom()
    {
        return $this->getBlockPrefix();
    }

    public function getPrenom()
    {
        return $this->getBlockPrefix();
    }
}