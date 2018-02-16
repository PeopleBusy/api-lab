<?php

/* @Framework/Form/widget_attributes.html.php */
class __TwigTemplate_093af59b697bd63af9bf7ec3dbdc88bb10e04fc7f1d87bdfc7e8c27dfc3aaf78 extends Twig_Template
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
        $__internal_bc31713809cb188c23be0cb6b004a44da906eeecc1f6db66967ec561bb54b15f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc31713809cb188c23be0cb6b004a44da906eeecc1f6db66967ec561bb54b15f->enter($__internal_bc31713809cb188c23be0cb6b004a44da906eeecc1f6db66967ec561bb54b15f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        $__internal_88a8ee9e58f0c7c856639dd171a5d5ce80edb1312411ddb5496351fa6b9dd4b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88a8ee9e58f0c7c856639dd171a5d5ce80edb1312411ddb5496351fa6b9dd4b3->enter($__internal_88a8ee9e58f0c7c856639dd171a5d5ce80edb1312411ddb5496351fa6b9dd4b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_bc31713809cb188c23be0cb6b004a44da906eeecc1f6db66967ec561bb54b15f->leave($__internal_bc31713809cb188c23be0cb6b004a44da906eeecc1f6db66967ec561bb54b15f_prof);

        
        $__internal_88a8ee9e58f0c7c856639dd171a5d5ce80edb1312411ddb5496351fa6b9dd4b3->leave($__internal_88a8ee9e58f0c7c856639dd171a5d5ce80edb1312411ddb5496351fa6b9dd4b3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_attributes.html.php";
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
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_attributes.html.php", "/Users/Rachid/SymfonyProjects/api-lab/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_attributes.html.php");
    }
}
