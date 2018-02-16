<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_b51f476a1dc1e00f3b4c1db7df42bf6d57a2fc1a27156bb836255e88991af662 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a207cf8865c5ab97136a51e0d39ca09e0962186491391c84e6d3f02e442693ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a207cf8865c5ab97136a51e0d39ca09e0962186491391c84e6d3f02e442693ca->enter($__internal_a207cf8865c5ab97136a51e0d39ca09e0962186491391c84e6d3f02e442693ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_82f83476296345c293f0544f00353d651993d6820926254c1fefa3b470445308 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82f83476296345c293f0544f00353d651993d6820926254c1fefa3b470445308->enter($__internal_82f83476296345c293f0544f00353d651993d6820926254c1fefa3b470445308_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a207cf8865c5ab97136a51e0d39ca09e0962186491391c84e6d3f02e442693ca->leave($__internal_a207cf8865c5ab97136a51e0d39ca09e0962186491391c84e6d3f02e442693ca_prof);

        
        $__internal_82f83476296345c293f0544f00353d651993d6820926254c1fefa3b470445308->leave($__internal_82f83476296345c293f0544f00353d651993d6820926254c1fefa3b470445308_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_730e397a5e7ca9ec4d43192716f3e9288649db72d85f9966df621173f6fd3977 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_730e397a5e7ca9ec4d43192716f3e9288649db72d85f9966df621173f6fd3977->enter($__internal_730e397a5e7ca9ec4d43192716f3e9288649db72d85f9966df621173f6fd3977_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_70fda4d94f13bef61f2b218f3c3546e3bd9071495a6388e83f019f5c24505a32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70fda4d94f13bef61f2b218f3c3546e3bd9071495a6388e83f019f5c24505a32->enter($__internal_70fda4d94f13bef61f2b218f3c3546e3bd9071495a6388e83f019f5c24505a32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_70fda4d94f13bef61f2b218f3c3546e3bd9071495a6388e83f019f5c24505a32->leave($__internal_70fda4d94f13bef61f2b218f3c3546e3bd9071495a6388e83f019f5c24505a32_prof);

        
        $__internal_730e397a5e7ca9ec4d43192716f3e9288649db72d85f9966df621173f6fd3977->leave($__internal_730e397a5e7ca9ec4d43192716f3e9288649db72d85f9966df621173f6fd3977_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_a5cd5923fd4c0a3e221f99b6347ae8bbc77be5f7c019ce5a521aa4a91d0091e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5cd5923fd4c0a3e221f99b6347ae8bbc77be5f7c019ce5a521aa4a91d0091e4->enter($__internal_a5cd5923fd4c0a3e221f99b6347ae8bbc77be5f7c019ce5a521aa4a91d0091e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a5f14db1c590bdf8f3da76b82064b3c54692e63c562ad05da9eb53f8a2870cb8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5f14db1c590bdf8f3da76b82064b3c54692e63c562ad05da9eb53f8a2870cb8->enter($__internal_a5f14db1c590bdf8f3da76b82064b3c54692e63c562ad05da9eb53f8a2870cb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_a5f14db1c590bdf8f3da76b82064b3c54692e63c562ad05da9eb53f8a2870cb8->leave($__internal_a5f14db1c590bdf8f3da76b82064b3c54692e63c562ad05da9eb53f8a2870cb8_prof);

        
        $__internal_a5cd5923fd4c0a3e221f99b6347ae8bbc77be5f7c019ce5a521aa4a91d0091e4->leave($__internal_a5cd5923fd4c0a3e221f99b6347ae8bbc77be5f7c019ce5a521aa4a91d0091e4_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/Users/Rachid/SymfonyProjects/api-lab/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
