<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_ff82ae0d613947a10d1b7e975512a9ba0de97134f0800e3673c94e6273d65c03 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f30fe3d004d7e28f5bf4086b3210a0ba3958b414a633e0ec3438b34b22b1ada4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f30fe3d004d7e28f5bf4086b3210a0ba3958b414a633e0ec3438b34b22b1ada4->enter($__internal_f30fe3d004d7e28f5bf4086b3210a0ba3958b414a633e0ec3438b34b22b1ada4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_e39259e2819ab341df0a1fcb9c163a2c3025c483c5f2133ca6c5f90d41933916 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e39259e2819ab341df0a1fcb9c163a2c3025c483c5f2133ca6c5f90d41933916->enter($__internal_e39259e2819ab341df0a1fcb9c163a2c3025c483c5f2133ca6c5f90d41933916_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f30fe3d004d7e28f5bf4086b3210a0ba3958b414a633e0ec3438b34b22b1ada4->leave($__internal_f30fe3d004d7e28f5bf4086b3210a0ba3958b414a633e0ec3438b34b22b1ada4_prof);

        
        $__internal_e39259e2819ab341df0a1fcb9c163a2c3025c483c5f2133ca6c5f90d41933916->leave($__internal_e39259e2819ab341df0a1fcb9c163a2c3025c483c5f2133ca6c5f90d41933916_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_0ae896f3f6f52b083fd0168b36ae49f1cc703c13ed6ce09df8f6539c2fed7516 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ae896f3f6f52b083fd0168b36ae49f1cc703c13ed6ce09df8f6539c2fed7516->enter($__internal_0ae896f3f6f52b083fd0168b36ae49f1cc703c13ed6ce09df8f6539c2fed7516_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_ba0cdb190939fc79b6d5d404cdf45eb9a5c16dd467e7dc583f4c1ac13c8d63c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba0cdb190939fc79b6d5d404cdf45eb9a5c16dd467e7dc583f4c1ac13c8d63c1->enter($__internal_ba0cdb190939fc79b6d5d404cdf45eb9a5c16dd467e7dc583f4c1ac13c8d63c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 12
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 14
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_ba0cdb190939fc79b6d5d404cdf45eb9a5c16dd467e7dc583f4c1ac13c8d63c1->leave($__internal_ba0cdb190939fc79b6d5d404cdf45eb9a5c16dd467e7dc583f4c1ac13c8d63c1_prof);

        
        $__internal_0ae896f3f6f52b083fd0168b36ae49f1cc703c13ed6ce09df8f6539c2fed7516->leave($__internal_0ae896f3f6f52b083fd0168b36ae49f1cc703c13ed6ce09df8f6539c2fed7516_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2b784383b837d50f8d9394e839d022ba675767c34f1577751a3b5af562d5de8b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b784383b837d50f8d9394e839d022ba675767c34f1577751a3b5af562d5de8b->enter($__internal_2b784383b837d50f8d9394e839d022ba675767c34f1577751a3b5af562d5de8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_6e46289438fce8710c4fcc50e5d3e381b741dc198e73e3c7f9eb6c94dd857563 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e46289438fce8710c4fcc50e5d3e381b741dc198e73e3c7f9eb6c94dd857563->enter($__internal_6e46289438fce8710c4fcc50e5d3e381b741dc198e73e3c7f9eb6c94dd857563_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_6e46289438fce8710c4fcc50e5d3e381b741dc198e73e3c7f9eb6c94dd857563->leave($__internal_6e46289438fce8710c4fcc50e5d3e381b741dc198e73e3c7f9eb6c94dd857563_prof);

        
        $__internal_2b784383b837d50f8d9394e839d022ba675767c34f1577751a3b5af562d5de8b->leave($__internal_2b784383b837d50f8d9394e839d022ba675767c34f1577751a3b5af562d5de8b_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 21,  84 => 20,  75 => 19,  61 => 14,  55 => 12,  46 => 11,  36 => 1,  34 => 7,  33 => 6,  32 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% set messages = {
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "WebProfilerBundle:Profiler:info.html.twig", "/Users/Rachid/SymfonyProjects/api-lab/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
