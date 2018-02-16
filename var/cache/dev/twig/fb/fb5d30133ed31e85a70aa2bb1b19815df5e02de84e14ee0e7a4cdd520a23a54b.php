<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_63adbd52a1eaf0f85d004e0e0b547f30af614d2ade883ea9ab15f580040b8fcb extends Twig_Template
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
        $__internal_8bdbed903b62b20d15c527c64f106d83d19cfb9e491a7d2b593941d03cb76204 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8bdbed903b62b20d15c527c64f106d83d19cfb9e491a7d2b593941d03cb76204->enter($__internal_8bdbed903b62b20d15c527c64f106d83d19cfb9e491a7d2b593941d03cb76204_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_a354226f5ff0e8da6a38ae291ef76bb4ebad4403cedb2d819f8f07c9842baa51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a354226f5ff0e8da6a38ae291ef76bb4ebad4403cedb2d819f8f07c9842baa51->enter($__internal_a354226f5ff0e8da6a38ae291ef76bb4ebad4403cedb2d819f8f07c9842baa51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_8bdbed903b62b20d15c527c64f106d83d19cfb9e491a7d2b593941d03cb76204->leave($__internal_8bdbed903b62b20d15c527c64f106d83d19cfb9e491a7d2b593941d03cb76204_prof);

        
        $__internal_a354226f5ff0e8da6a38ae291ef76bb4ebad4403cedb2d819f8f07c9842baa51->leave($__internal_a354226f5ff0e8da6a38ae291ef76bb4ebad4403cedb2d819f8f07c9842baa51_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/Users/Rachid/SymfonyProjects/api-lab/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
