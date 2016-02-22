<?php

namespace Victoire\Widget\MarkdownBundle\Form;

use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Victoire\Bundle\CoreBundle\Form\WidgetType;

/**
 * WidgetMarkdown form type.
 */
class WidgetMarkdownType extends WidgetType
{
    /**
     * define form fields.
     *
     * @param FormBuilderInterface $builder
     *
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('markdown', null, [
            'label' => 'widget_html.form.markdown.label',
            'attr'  => [
                'v-model'   => 'input',
                'data-type' => 'input',
                'rows'      => 20,

            ],
        ]);
        $builder->add('content', null, [
            'label' => 'widget_html.form.content.label',
            'attr'  => [
                'v-html'    => 'input | marked',
                'data-type' => 'output',
                'class'     => 'vic-hidden',

            ],
        ]);
        parent::buildForm($builder, $options);
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        parent::configureOptions($resolver);

        $resolver->setDefaults([
            'data_class'         => 'Victoire\Widget\MarkdownBundle\Entity\WidgetMarkdown',
            'widget'             => 'Markdown',
            'translation_domain' => 'victoire',
        ]);
    }
}
