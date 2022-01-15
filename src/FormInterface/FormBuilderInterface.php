<?php

namespace Btinet\FormInterface;

interface FormBuilderInterface
{
    /**
     * Adds a new field to this group. A field must have a unique name within
     * the group. Otherwise the existing field is overwritten.
     *
     * If you add a nested group, this group should also be represented in the
     * object hierarchy.
     *
     * @param string|FormBuilderInterface $child
     * @param array<string, mixed>        $options
     *
     * @return static
     */
    public function add($child, string $type = null, array $options = []): FormBuilderInterface;
}