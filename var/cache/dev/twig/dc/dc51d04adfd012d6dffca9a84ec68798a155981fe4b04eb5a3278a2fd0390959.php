<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_574d94a41c4e102fcf7096ebc63e6f471fbb5ecaaad313b50696f53d8af94756 extends Twig_Template
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
        $__internal_3787f181e53b5287d03b573fb1a804f547af37c5b6e88fe7f88f11d3084d6e51 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3787f181e53b5287d03b573fb1a804f547af37c5b6e88fe7f88f11d3084d6e51->enter($__internal_3787f181e53b5287d03b573fb1a804f547af37c5b6e88fe7f88f11d3084d6e51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_c1ac575a40b41868662398eddacb31bf93db6b517c9e593ae7c98b0eb4328195 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1ac575a40b41868662398eddacb31bf93db6b517c9e593ae7c98b0eb4328195->enter($__internal_c1ac575a40b41868662398eddacb31bf93db6b517c9e593ae7c98b0eb4328195_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_3787f181e53b5287d03b573fb1a804f547af37c5b6e88fe7f88f11d3084d6e51->leave($__internal_3787f181e53b5287d03b573fb1a804f547af37c5b6e88fe7f88f11d3084d6e51_prof);

        
        $__internal_c1ac575a40b41868662398eddacb31bf93db6b517c9e593ae7c98b0eb4328195->leave($__internal_c1ac575a40b41868662398eddacb31bf93db6b517c9e593ae7c98b0eb4328195_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/Users/Rachid/SymfonyProjects/api-lab/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
