<?php

/* @Framework/Form/repeated_row.html.php */
class __TwigTemplate_d234cc265339e15c5e6fb3fd733ec716ace6e830307cc34930acbfb84d05b465 extends Twig_Template
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
        $__internal_7de69f9b6d3123fd7aefa6b55a2910a65d7da10840ec5520e9fa7c376f40e4f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7de69f9b6d3123fd7aefa6b55a2910a65d7da10840ec5520e9fa7c376f40e4f7->enter($__internal_7de69f9b6d3123fd7aefa6b55a2910a65d7da10840ec5520e9fa7c376f40e4f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        $__internal_a48bdb9b3e27b3b65b3bf524147458c7047ce04f8d90d47bfedfc50a80800538 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a48bdb9b3e27b3b65b3bf524147458c7047ce04f8d90d47bfedfc50a80800538->enter($__internal_a48bdb9b3e27b3b65b3bf524147458c7047ce04f8d90d47bfedfc50a80800538_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_7de69f9b6d3123fd7aefa6b55a2910a65d7da10840ec5520e9fa7c376f40e4f7->leave($__internal_7de69f9b6d3123fd7aefa6b55a2910a65d7da10840ec5520e9fa7c376f40e4f7_prof);

        
        $__internal_a48bdb9b3e27b3b65b3bf524147458c7047ce04f8d90d47bfedfc50a80800538->leave($__internal_a48bdb9b3e27b3b65b3bf524147458c7047ce04f8d90d47bfedfc50a80800538_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/repeated_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_rows') ?>
", "@Framework/Form/repeated_row.html.php", "/Users/Rachid/SymfonyProjects/api-lab/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/repeated_row.html.php");
    }
}
