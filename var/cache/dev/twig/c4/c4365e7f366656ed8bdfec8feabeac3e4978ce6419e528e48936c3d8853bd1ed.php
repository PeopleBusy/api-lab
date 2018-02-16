<?php

/* @Framework/Form/button_attributes.html.php */
class __TwigTemplate_c40a999d9c1da72baed8709dc2924aecb86ad4bd762907d7308b8874b85a8a7c extends Twig_Template
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
        $__internal_054888107c4b30929276ae3a5df579bc5f9edaf873cfabe2247feac5bc618bfe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_054888107c4b30929276ae3a5df579bc5f9edaf873cfabe2247feac5bc618bfe->enter($__internal_054888107c4b30929276ae3a5df579bc5f9edaf873cfabe2247feac5bc618bfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_6fc01f7b485288ab1a17d8a604aaf062d8bdb6a79bbc5f2fe1ed6c0f3b3a429a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6fc01f7b485288ab1a17d8a604aaf062d8bdb6a79bbc5f2fe1ed6c0f3b3a429a->enter($__internal_6fc01f7b485288ab1a17d8a604aaf062d8bdb6a79bbc5f2fe1ed6c0f3b3a429a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_054888107c4b30929276ae3a5df579bc5f9edaf873cfabe2247feac5bc618bfe->leave($__internal_054888107c4b30929276ae3a5df579bc5f9edaf873cfabe2247feac5bc618bfe_prof);

        
        $__internal_6fc01f7b485288ab1a17d8a604aaf062d8bdb6a79bbc5f2fe1ed6c0f3b3a429a->leave($__internal_6fc01f7b485288ab1a17d8a604aaf062d8bdb6a79bbc5f2fe1ed6c0f3b3a429a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_attributes.html.php";
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
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/button_attributes.html.php", "/Users/Rachid/SymfonyProjects/api-lab/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_attributes.html.php");
    }
}
