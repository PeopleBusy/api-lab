<?php

/* WebProfilerBundle:Profiler:header.html.twig */
class __TwigTemplate_ec4f5cd4f90b89748d6ad0eec9c6fa3e95008d5a544b4da584c6cbb18d40ea0a extends Twig_Template
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
        $__internal_60b39f2ff41e6835add8929f1d54e4b53ea75fc3a6d2fd6958c56e17e74e5034 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60b39f2ff41e6835add8929f1d54e4b53ea75fc3a6d2fd6958c56e17e74e5034->enter($__internal_60b39f2ff41e6835add8929f1d54e4b53ea75fc3a6d2fd6958c56e17e74e5034_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        $__internal_7b6a8268f144ba6ab64e4e375801f294cbf7df720e52442482cdb305a4785e3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b6a8268f144ba6ab64e4e375801f294cbf7df720e52442482cdb305a4785e3a->enter($__internal_7b6a8268f144ba6ab64e4e375801f294cbf7df720e52442482cdb305a4785e3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_60b39f2ff41e6835add8929f1d54e4b53ea75fc3a6d2fd6958c56e17e74e5034->leave($__internal_60b39f2ff41e6835add8929f1d54e4b53ea75fc3a6d2fd6958c56e17e74e5034_prof);

        
        $__internal_7b6a8268f144ba6ab64e4e375801f294cbf7df720e52442482cdb305a4785e3a->leave($__internal_7b6a8268f144ba6ab64e4e375801f294cbf7df720e52442482cdb305a4785e3a_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "WebProfilerBundle:Profiler:header.html.twig", "/Users/Rachid/SymfonyProjects/api-lab/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/header.html.twig");
    }
}
