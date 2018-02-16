<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_622c802a7b380f244834130a70cb78e20998fa56b8c48bbdfbc1ccdac1390bf8 extends Twig_Template
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
        $__internal_e2680617bf214110af5ff009299fca48f6a3240deac0255e3b8481aa5091098e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2680617bf214110af5ff009299fca48f6a3240deac0255e3b8481aa5091098e->enter($__internal_e2680617bf214110af5ff009299fca48f6a3240deac0255e3b8481aa5091098e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_423c703c470fc076d30d769e671718ef145404aa78c36d6e7d75188f03c4480b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_423c703c470fc076d30d769e671718ef145404aa78c36d6e7d75188f03c4480b->enter($__internal_423c703c470fc076d30d769e671718ef145404aa78c36d6e7d75188f03c4480b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_e2680617bf214110af5ff009299fca48f6a3240deac0255e3b8481aa5091098e->leave($__internal_e2680617bf214110af5ff009299fca48f6a3240deac0255e3b8481aa5091098e_prof);

        
        $__internal_423c703c470fc076d30d769e671718ef145404aa78c36d6e7d75188f03c4480b->leave($__internal_423c703c470fc076d30d769e671718ef145404aa78c36d6e7d75188f03c4480b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/Users/Rachid/SymfonyProjects/api-lab/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
