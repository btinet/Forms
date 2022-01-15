<?php


use Btinet\FormInterface\FormBuilderInterface;
use Btinet\Type\PasswordType;
use Btinet\Type\TextAreaType;

class UserType extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder,$options)
    {
        $builder
            ->add('user')
            ->add('password',PasswordType::class)
            ->add('description',TextAreaType::class)
        ;
    }
}