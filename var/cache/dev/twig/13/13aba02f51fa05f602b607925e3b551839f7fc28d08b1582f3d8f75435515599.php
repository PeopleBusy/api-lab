<?php

/* WebProfilerBundle:Collector:ajax.html.twig */
class __TwigTemplate_7d6a536ea4d20cbd4fe73511303be4782c789320af770e9e6c4fb511e2149fb4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c4c6aa86ede6abd8fc4cc840aa90bf3c9e9ab1d17ba12428e238898964c60694 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4c6aa86ede6abd8fc4cc840aa90bf3c9e9ab1d17ba12428e238898964c60694->enter($__internal_c4c6aa86ede6abd8fc4cc840aa90bf3c9e9ab1d17ba12428e238898964c60694_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $__internal_3d80bee11957d63fb50d2d6c84e8147af47cfcac687b53a773c58d64e468a06a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d80bee11957d63fb50d2d6c84e8147af47cfcac687b53a773c58d64e468a06a->enter($__internal_3d80bee11957d63fb50d2d6c84e8147af47cfcac687b53a773c58d64e468a06a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c4c6aa86ede6abd8fc4cc840aa90bf3c9e9ab1d17ba12428e238898964c60694->leave($__internal_c4c6aa86ede6abd8fc4cc840aa90bf3c9e9ab1d17ba12428e238898964c60694_prof);

        
        $__internal_3d80bee11957d63fb50d2d6c84e8147af47cfcac687b53a773c58d64e468a06a->leave($__internal_3d80bee11957d63fb50d2d6c84e8147af47cfcac687b53a773c58d64e468a06a_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_c26a3848d1c11a61e8d81c0b8acbc272734efcb3040a2aa939c12ec5e5a642ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c26a3848d1c11a61e8d81c0b8acbc272734efcb3040a2aa939c12ec5e5a642ed->enter($__internal_c26a3848d1c11a61e8d81c0b8acbc272734efcb3040a2aa939c12ec5e5a642ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_d53e58cdde3c74f1458ba75a601b81fe20d4104da66003ac38facdc6e7bbff5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d53e58cdde3c74f1458ba75a601b81fe20d4104da66003ac38facdc6e7bbff5a->enter($__internal_d53e58cdde3c74f1458ba75a601b81fe20d4104da66003ac38facdc6e7bbff5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_d53e58cdde3c74f1458ba75a601b81fe20d4104da66003ac38facdc6e7bbff5a->leave($__internal_d53e58cdde3c74f1458ba75a601b81fe20d4104da66003ac38facdc6e7bbff5a_prof);

        
        $__internal_c26a3848d1c11a61e8d81c0b8acbc272734efcb3040a2aa939c12ec5e5a642ed->leave($__internal_c26a3848d1c11a61e8d81c0b8acbc272734efcb3040a2aa939c12ec5e5a642ed_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "WebProfilerBundle:Collector:ajax.html.twig", "/Users/Rachid/SymfonyProjects/api-lab/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
