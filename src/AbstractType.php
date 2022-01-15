<?php

use Btinet\FormInterface\FormBuilderInterface;

abstract class AbstractType implements TypeInterface
{

    function buildForm(FormBuilderInterface $builder, array $options)
    {

    }

    function createForm()
    {
        // TODO: Implement createForm() method.
    }


    public function getParent(): ?string
    {
        return 'x';
    }
}