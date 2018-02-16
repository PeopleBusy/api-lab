<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_bbf7cf0086a14256a6fe44c143d0fc0575991796f423d6638c90e0040718dbee extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_31f18a8af985696b1d8ff695d459f547093398d0a6794f144c1ec099ca8ef9f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_31f18a8af985696b1d8ff695d459f547093398d0a6794f144c1ec099ca8ef9f3->enter($__internal_31f18a8af985696b1d8ff695d459f547093398d0a6794f144c1ec099ca8ef9f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_15e030e87d3713c813d7c66b84698b0dbb18a34f84aed17136657ccf80a1433a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15e030e87d3713c813d7c66b84698b0dbb18a34f84aed17136657ccf80a1433a->enter($__internal_15e030e87d3713c813d7c66b84698b0dbb18a34f84aed17136657ccf80a1433a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_31f18a8af985696b1d8ff695d459f547093398d0a6794f144c1ec099ca8ef9f3->leave($__internal_31f18a8af985696b1d8ff695d459f547093398d0a6794f144c1ec099ca8ef9f3_prof);

        
        $__internal_15e030e87d3713c813d7c66b84698b0dbb18a34f84aed17136657ccf80a1433a->leave($__internal_15e030e87d3713c813d7c66b84698b0dbb18a34f84aed17136657ccf80a1433a_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a4713db6b98bc3b27a1b66c3ce09dffe6d54efb4373c076421146db864a0d0b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4713db6b98bc3b27a1b66c3ce09dffe6d54efb4373c076421146db864a0d0b4->enter($__internal_a4713db6b98bc3b27a1b66c3ce09dffe6d54efb4373c076421146db864a0d0b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_fdb0fb3b328fec7bfdf01f7311234cce9ecd2f1368d87c4cc31e2ba7b1941080 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fdb0fb3b328fec7bfdf01f7311234cce9ecd2f1368d87c4cc31e2ba7b1941080->enter($__internal_fdb0fb3b328fec7bfdf01f7311234cce9ecd2f1368d87c4cc31e2ba7b1941080_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_fdb0fb3b328fec7bfdf01f7311234cce9ecd2f1368d87c4cc31e2ba7b1941080->leave($__internal_fdb0fb3b328fec7bfdf01f7311234cce9ecd2f1368d87c4cc31e2ba7b1941080_prof);

        
        $__internal_a4713db6b98bc3b27a1b66c3ce09dffe6d54efb4373c076421146db864a0d0b4->leave($__internal_a4713db6b98bc3b27a1b66c3ce09dffe6d54efb4373c076421146db864a0d0b4_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7aec48df1b83f52cc43902359cb707dc109533b31606c51178b10c67d82841f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7aec48df1b83f52cc43902359cb707dc109533b31606c51178b10c67d82841f6->enter($__internal_7aec48df1b83f52cc43902359cb707dc109533b31606c51178b10c67d82841f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_afc69cf56d8a0c812ee41b5f571368adce3f1a70013f87b0b146146bd04034f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_afc69cf56d8a0c812ee41b5f571368adce3f1a70013f87b0b146146bd04034f4->enter($__internal_afc69cf56d8a0c812ee41b5f571368adce3f1a70013f87b0b146146bd04034f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_afc69cf56d8a0c812ee41b5f571368adce3f1a70013f87b0b146146bd04034f4->leave($__internal_afc69cf56d8a0c812ee41b5f571368adce3f1a70013f87b0b146146bd04034f4_prof);

        
        $__internal_7aec48df1b83f52cc43902359cb707dc109533b31606c51178b10c67d82841f6->leave($__internal_7aec48df1b83f52cc43902359cb707dc109533b31606c51178b10c67d82841f6_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_dadeed1d25ba05f5216796bb6462c61fb0647238c8e3a39ed9825ae14ff09e93 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dadeed1d25ba05f5216796bb6462c61fb0647238c8e3a39ed9825ae14ff09e93->enter($__internal_dadeed1d25ba05f5216796bb6462c61fb0647238c8e3a39ed9825ae14ff09e93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_c4ad541f315847618f160a27f1a0acff5f78cc00f9e60564e4c10f3add4069cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4ad541f315847618f160a27f1a0acff5f78cc00f9e60564e4c10f3add4069cb->enter($__internal_c4ad541f315847618f160a27f1a0acff5f78cc00f9e60564e4c10f3add4069cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_c4ad541f315847618f160a27f1a0acff5f78cc00f9e60564e4c10f3add4069cb->leave($__internal_c4ad541f315847618f160a27f1a0acff5f78cc00f9e60564e4c10f3add4069cb_prof);

        
        $__internal_dadeed1d25ba05f5216796bb6462c61fb0647238c8e3a39ed9825ae14ff09e93->leave($__internal_dadeed1d25ba05f5216796bb6462c61fb0647238c8e3a39ed9825ae14ff09e93_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "WebProfilerBundle:Collector:router.html.twig", "/Users/Rachid/SymfonyProjects/api-lab/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
