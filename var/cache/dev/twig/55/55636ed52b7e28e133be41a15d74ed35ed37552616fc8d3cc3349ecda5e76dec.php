<?php

/* ::base.html.twig */
class __TwigTemplate_e0f9cf1a6c6795797f9f66a884b4b1e11c341fa966b1b7828033616e7e0648af extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8288122ea0318cf0adfd224692f9db80c8ba91fb47b008de71dff86301b46591 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8288122ea0318cf0adfd224692f9db80c8ba91fb47b008de71dff86301b46591->enter($__internal_8288122ea0318cf0adfd224692f9db80c8ba91fb47b008de71dff86301b46591_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_26f0cf2da1986f5c1a14ba971ad184a95ca0f8742830ed763b2af5389eb83ddc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26f0cf2da1986f5c1a14ba971ad184a95ca0f8742830ed763b2af5389eb83ddc->enter($__internal_26f0cf2da1986f5c1a14ba971ad184a95ca0f8742830ed763b2af5389eb83ddc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_8288122ea0318cf0adfd224692f9db80c8ba91fb47b008de71dff86301b46591->leave($__internal_8288122ea0318cf0adfd224692f9db80c8ba91fb47b008de71dff86301b46591_prof);

        
        $__internal_26f0cf2da1986f5c1a14ba971ad184a95ca0f8742830ed763b2af5389eb83ddc->leave($__internal_26f0cf2da1986f5c1a14ba971ad184a95ca0f8742830ed763b2af5389eb83ddc_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_c74dee439a9c4219a7a1d7915d51770e7a9e4aeb60ad484248ecba1a08fdf6f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c74dee439a9c4219a7a1d7915d51770e7a9e4aeb60ad484248ecba1a08fdf6f1->enter($__internal_c74dee439a9c4219a7a1d7915d51770e7a9e4aeb60ad484248ecba1a08fdf6f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_128bf32544ff23c169ad4780d9de5ff78f276e5f4570c136c2fbd98bbd587c69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_128bf32544ff23c169ad4780d9de5ff78f276e5f4570c136c2fbd98bbd587c69->enter($__internal_128bf32544ff23c169ad4780d9de5ff78f276e5f4570c136c2fbd98bbd587c69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_128bf32544ff23c169ad4780d9de5ff78f276e5f4570c136c2fbd98bbd587c69->leave($__internal_128bf32544ff23c169ad4780d9de5ff78f276e5f4570c136c2fbd98bbd587c69_prof);

        
        $__internal_c74dee439a9c4219a7a1d7915d51770e7a9e4aeb60ad484248ecba1a08fdf6f1->leave($__internal_c74dee439a9c4219a7a1d7915d51770e7a9e4aeb60ad484248ecba1a08fdf6f1_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_8dc2636d85f300baa34f21c35d8571f5396151cb49315fc63aa22197f8ea6801 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8dc2636d85f300baa34f21c35d8571f5396151cb49315fc63aa22197f8ea6801->enter($__internal_8dc2636d85f300baa34f21c35d8571f5396151cb49315fc63aa22197f8ea6801_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_377995c23a34b227ade80efa3635c993332653ac17b9c778f35478da16064700 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_377995c23a34b227ade80efa3635c993332653ac17b9c778f35478da16064700->enter($__internal_377995c23a34b227ade80efa3635c993332653ac17b9c778f35478da16064700_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_377995c23a34b227ade80efa3635c993332653ac17b9c778f35478da16064700->leave($__internal_377995c23a34b227ade80efa3635c993332653ac17b9c778f35478da16064700_prof);

        
        $__internal_8dc2636d85f300baa34f21c35d8571f5396151cb49315fc63aa22197f8ea6801->leave($__internal_8dc2636d85f300baa34f21c35d8571f5396151cb49315fc63aa22197f8ea6801_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_415b81821b77e403193c0dd77de41103e36718a957e5cfb8b8d629d40083eddd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_415b81821b77e403193c0dd77de41103e36718a957e5cfb8b8d629d40083eddd->enter($__internal_415b81821b77e403193c0dd77de41103e36718a957e5cfb8b8d629d40083eddd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f0a9fdabcda359de55854e5b83da18d0d05d037f1ce238847aba7687ceef411b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0a9fdabcda359de55854e5b83da18d0d05d037f1ce238847aba7687ceef411b->enter($__internal_f0a9fdabcda359de55854e5b83da18d0d05d037f1ce238847aba7687ceef411b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_f0a9fdabcda359de55854e5b83da18d0d05d037f1ce238847aba7687ceef411b->leave($__internal_f0a9fdabcda359de55854e5b83da18d0d05d037f1ce238847aba7687ceef411b_prof);

        
        $__internal_415b81821b77e403193c0dd77de41103e36718a957e5cfb8b8d629d40083eddd->leave($__internal_415b81821b77e403193c0dd77de41103e36718a957e5cfb8b8d629d40083eddd_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_5d6ab7800868998bf6fc0ba123a6243d601989ff878906e05a1cbff6d32e484f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d6ab7800868998bf6fc0ba123a6243d601989ff878906e05a1cbff6d32e484f->enter($__internal_5d6ab7800868998bf6fc0ba123a6243d601989ff878906e05a1cbff6d32e484f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6fe69bab78c2d1bc593eb02bb082c64e0a1067314e6c7d6d9648252409f9bf1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6fe69bab78c2d1bc593eb02bb082c64e0a1067314e6c7d6d9648252409f9bf1f->enter($__internal_6fe69bab78c2d1bc593eb02bb082c64e0a1067314e6c7d6d9648252409f9bf1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_6fe69bab78c2d1bc593eb02bb082c64e0a1067314e6c7d6d9648252409f9bf1f->leave($__internal_6fe69bab78c2d1bc593eb02bb082c64e0a1067314e6c7d6d9648252409f9bf1f_prof);

        
        $__internal_5d6ab7800868998bf6fc0ba123a6243d601989ff878906e05a1cbff6d32e484f->leave($__internal_5d6ab7800868998bf6fc0ba123a6243d601989ff878906e05a1cbff6d32e484f_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "::base.html.twig", "/Users/Rachid/SymfonyProjects/api-lab/app/Resources/views/base.html.twig");
    }
}
