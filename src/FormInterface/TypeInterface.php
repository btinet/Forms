<?php

use Btinet\FormInterface\FormBuilderInterface;

interface TypeInterface
{

    public function buildForm(FormBuilderInterface $builder, array $options);

    public function createForm();

    /**
     * Returns the name of the parent type.
     *
     * @return string|null
     */
    public function getParent(): ?string;
}