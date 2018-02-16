<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_50e63a4516b70e96cba49ebe91051189aaa815e88165a7c41c7d56aa62f3cf35 extends Twig_Template
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
        $__internal_ccad1a7163b6b5e71195ea2d723e02ea613005dcc032b98c775186da7b9368ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ccad1a7163b6b5e71195ea2d723e02ea613005dcc032b98c775186da7b9368ec->enter($__internal_ccad1a7163b6b5e71195ea2d723e02ea613005dcc032b98c775186da7b9368ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_7c0d34886650980d4ae1e01ad2636fe826bbb7ef9c8b830a951062bd35d2a7a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c0d34886650980d4ae1e01ad2636fe826bbb7ef9c8b830a951062bd35d2a7a8->enter($__internal_7c0d34886650980d4ae1e01ad2636fe826bbb7ef9c8b830a951062bd35d2a7a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_ccad1a7163b6b5e71195ea2d723e02ea613005dcc032b98c775186da7b9368ec->leave($__internal_ccad1a7163b6b5e71195ea2d723e02ea613005dcc032b98c775186da7b9368ec_prof);

        
        $__internal_7c0d34886650980d4ae1e01ad2636fe826bbb7ef9c8b830a951062bd35d2a7a8->leave($__internal_7c0d34886650980d4ae1e01ad2636fe826bbb7ef9c8b830a951062bd35d2a7a8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/Users/Rachid/SymfonyProjects/api-lab/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
