<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_5f6ed3af88b7047ef1ac8defecaf46b790e10c5d3f0e688c44cfb8650206a26d extends Twig_Template
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
        $__internal_a2856b57fa28ca60dd4a85d5291524f71a6e08b0bfd0a7c17fb4153de6278554 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2856b57fa28ca60dd4a85d5291524f71a6e08b0bfd0a7c17fb4153de6278554->enter($__internal_a2856b57fa28ca60dd4a85d5291524f71a6e08b0bfd0a7c17fb4153de6278554_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_d2d3f56909074f1d38cc6e3f60c10e9c81296002db772bdaf5ffc2701982fecd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2d3f56909074f1d38cc6e3f60c10e9c81296002db772bdaf5ffc2701982fecd->enter($__internal_d2d3f56909074f1d38cc6e3f60c10e9c81296002db772bdaf5ffc2701982fecd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_a2856b57fa28ca60dd4a85d5291524f71a6e08b0bfd0a7c17fb4153de6278554->leave($__internal_a2856b57fa28ca60dd4a85d5291524f71a6e08b0bfd0a7c17fb4153de6278554_prof);

        
        $__internal_d2d3f56909074f1d38cc6e3f60c10e9c81296002db772bdaf5ffc2701982fecd->leave($__internal_d2d3f56909074f1d38cc6e3f60c10e9c81296002db772bdaf5ffc2701982fecd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/Users/Rachid/SymfonyProjects/api-lab/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
