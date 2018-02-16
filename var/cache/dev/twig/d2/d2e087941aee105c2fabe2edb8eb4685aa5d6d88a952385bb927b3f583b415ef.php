<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_dea64eae9442e41a93ea38f23d683f29ca035fa51a1305e07dca8a9633b7f50b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_274a8ba993746c2b62691ede9f17dfe14ef35844746fee798d0708e6c7df0925 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_274a8ba993746c2b62691ede9f17dfe14ef35844746fee798d0708e6c7df0925->enter($__internal_274a8ba993746c2b62691ede9f17dfe14ef35844746fee798d0708e6c7df0925_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_4a2852ee607d082b6ee1db78e3e4dac240cef00324c4f41749e34ee069c52525 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a2852ee607d082b6ee1db78e3e4dac240cef00324c4f41749e34ee069c52525->enter($__internal_4a2852ee607d082b6ee1db78e3e4dac240cef00324c4f41749e34ee069c52525_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_274a8ba993746c2b62691ede9f17dfe14ef35844746fee798d0708e6c7df0925->leave($__internal_274a8ba993746c2b62691ede9f17dfe14ef35844746fee798d0708e6c7df0925_prof);

        
        $__internal_4a2852ee607d082b6ee1db78e3e4dac240cef00324c4f41749e34ee069c52525->leave($__internal_4a2852ee607d082b6ee1db78e3e4dac240cef00324c4f41749e34ee069c52525_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "/Users/Rachid/SymfonyProjects/api-lab/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_compound.html.php");
    }
}
