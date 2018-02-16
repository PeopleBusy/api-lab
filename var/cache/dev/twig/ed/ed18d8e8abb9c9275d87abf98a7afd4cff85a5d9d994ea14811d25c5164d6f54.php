<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_d3166fcf5fde9e7cf671068f7ddc51ca23774277032990bbc29a597dc88047b5 extends Twig_Template
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
        $__internal_cf9ef2ea895016846c0701408ddbe97df4ee93249e38cdd4283b492f7f950188 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf9ef2ea895016846c0701408ddbe97df4ee93249e38cdd4283b492f7f950188->enter($__internal_cf9ef2ea895016846c0701408ddbe97df4ee93249e38cdd4283b492f7f950188_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_eb9b9d63821c6ab8a15f3f477a94ed32fa8b110f0da8071dc3f01070db8c1641 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb9b9d63821c6ab8a15f3f477a94ed32fa8b110f0da8071dc3f01070db8c1641->enter($__internal_eb9b9d63821c6ab8a15f3f477a94ed32fa8b110f0da8071dc3f01070db8c1641_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_cf9ef2ea895016846c0701408ddbe97df4ee93249e38cdd4283b492f7f950188->leave($__internal_cf9ef2ea895016846c0701408ddbe97df4ee93249e38cdd4283b492f7f950188_prof);

        
        $__internal_eb9b9d63821c6ab8a15f3f477a94ed32fa8b110f0da8071dc3f01070db8c1641->leave($__internal_eb9b9d63821c6ab8a15f3f477a94ed32fa8b110f0da8071dc3f01070db8c1641_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
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
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "/Users/Rachid/SymfonyProjects/api-lab/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_simple.html.php");
    }
}
