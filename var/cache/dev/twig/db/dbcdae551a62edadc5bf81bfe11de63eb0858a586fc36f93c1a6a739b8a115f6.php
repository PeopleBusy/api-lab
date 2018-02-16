<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_85b6acc71f15fdcb8e6ce4c10e863215cf48f1e0e2c2e6e20547fa297b65908e extends Twig_Template
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
        $__internal_7b9f3f5654f5425c919fda11a593b6390aad4aef2c33a5fb927997592ec3f74e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b9f3f5654f5425c919fda11a593b6390aad4aef2c33a5fb927997592ec3f74e->enter($__internal_7b9f3f5654f5425c919fda11a593b6390aad4aef2c33a5fb927997592ec3f74e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_d7e4c16cd22db2a0d7ca8f091e2d5cd2d2ef949afaa9e3710d043892d56b08dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7e4c16cd22db2a0d7ca8f091e2d5cd2d2ef949afaa9e3710d043892d56b08dc->enter($__internal_d7e4c16cd22db2a0d7ca8f091e2d5cd2d2ef949afaa9e3710d043892d56b08dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_7b9f3f5654f5425c919fda11a593b6390aad4aef2c33a5fb927997592ec3f74e->leave($__internal_7b9f3f5654f5425c919fda11a593b6390aad4aef2c33a5fb927997592ec3f74e_prof);

        
        $__internal_d7e4c16cd22db2a0d7ca8f091e2d5cd2d2ef949afaa9e3710d043892d56b08dc->leave($__internal_d7e4c16cd22db2a0d7ca8f091e2d5cd2d2ef949afaa9e3710d043892d56b08dc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
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
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "/Users/Rachid/SymfonyProjects/api-lab/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/checkbox_widget.html.php");
    }
}
