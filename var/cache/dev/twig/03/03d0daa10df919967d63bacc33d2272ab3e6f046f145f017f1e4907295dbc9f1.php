<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_35021cfe1c541c7480ec2602bc86e93cc56b3f957ee975d9262a7214aa46a213 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1285a4d2ad7171ec6a1fe29dbf0d8ab64ce6b24219c5405000b7e5e362d270f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1285a4d2ad7171ec6a1fe29dbf0d8ab64ce6b24219c5405000b7e5e362d270f0->enter($__internal_1285a4d2ad7171ec6a1fe29dbf0d8ab64ce6b24219c5405000b7e5e362d270f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_152f79698bab75464b7ae326cf3094e54b25f33055971b9debcc2e3a5a0bc956 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_152f79698bab75464b7ae326cf3094e54b25f33055971b9debcc2e3a5a0bc956->enter($__internal_152f79698bab75464b7ae326cf3094e54b25f33055971b9debcc2e3a5a0bc956_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1285a4d2ad7171ec6a1fe29dbf0d8ab64ce6b24219c5405000b7e5e362d270f0->leave($__internal_1285a4d2ad7171ec6a1fe29dbf0d8ab64ce6b24219c5405000b7e5e362d270f0_prof);

        
        $__internal_152f79698bab75464b7ae326cf3094e54b25f33055971b9debcc2e3a5a0bc956->leave($__internal_152f79698bab75464b7ae326cf3094e54b25f33055971b9debcc2e3a5a0bc956_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_db47c5301fa408987ca3462135bf5b8f0021dd2c8d9d5989c0e5be2b2c9b4579 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db47c5301fa408987ca3462135bf5b8f0021dd2c8d9d5989c0e5be2b2c9b4579->enter($__internal_db47c5301fa408987ca3462135bf5b8f0021dd2c8d9d5989c0e5be2b2c9b4579_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_9a7bab43b1842552c330f8436eead1e9075379df65a3bba96d87332e1d2857ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a7bab43b1842552c330f8436eead1e9075379df65a3bba96d87332e1d2857ab->enter($__internal_9a7bab43b1842552c330f8436eead1e9075379df65a3bba96d87332e1d2857ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_9a7bab43b1842552c330f8436eead1e9075379df65a3bba96d87332e1d2857ab->leave($__internal_9a7bab43b1842552c330f8436eead1e9075379df65a3bba96d87332e1d2857ab_prof);

        
        $__internal_db47c5301fa408987ca3462135bf5b8f0021dd2c8d9d5989c0e5be2b2c9b4579->leave($__internal_db47c5301fa408987ca3462135bf5b8f0021dd2c8d9d5989c0e5be2b2c9b4579_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_0dfdf8a8a99f5f1452d8802c75ad76825074945866aae3e919568b54d0feb373 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0dfdf8a8a99f5f1452d8802c75ad76825074945866aae3e919568b54d0feb373->enter($__internal_0dfdf8a8a99f5f1452d8802c75ad76825074945866aae3e919568b54d0feb373_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_59871407dbb52a34c13094b313f9af2385da607affab77521113321a378e7018 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59871407dbb52a34c13094b313f9af2385da607affab77521113321a378e7018->enter($__internal_59871407dbb52a34c13094b313f9af2385da607affab77521113321a378e7018_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, ($context["file"] ?? $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, ($context["line"] ?? $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt(($context["filename"] ?? $this->getContext($context, "filename")), ($context["line"] ?? $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_59871407dbb52a34c13094b313f9af2385da607affab77521113321a378e7018->leave($__internal_59871407dbb52a34c13094b313f9af2385da607affab77521113321a378e7018_prof);

        
        $__internal_0dfdf8a8a99f5f1452d8802c75ad76825074945866aae3e919568b54d0feb373->leave($__internal_0dfdf8a8a99f5f1452d8802c75ad76825074945866aae3e919568b54d0feb373_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "WebProfilerBundle:Profiler:open.html.twig", "/Users/Rachid/SymfonyProjects/api-lab/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
