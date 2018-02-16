<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_d65b39e4206693397dd2d21bc7b0d2f54d9726291ae46b56472a18a3ff527cbb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_08f8a2b8dfb11beaefc1c49e0d1cc8726052fd35bed0f892d2674a223bcd633a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_08f8a2b8dfb11beaefc1c49e0d1cc8726052fd35bed0f892d2674a223bcd633a->enter($__internal_08f8a2b8dfb11beaefc1c49e0d1cc8726052fd35bed0f892d2674a223bcd633a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_a0179eff902b7e44824842c1c10b9e05d20d6bf5b09dd2f11cd5b3a98078c93c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0179eff902b7e44824842c1c10b9e05d20d6bf5b09dd2f11cd5b3a98078c93c->enter($__internal_a0179eff902b7e44824842c1c10b9e05d20d6bf5b09dd2f11cd5b3a98078c93c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_08f8a2b8dfb11beaefc1c49e0d1cc8726052fd35bed0f892d2674a223bcd633a->leave($__internal_08f8a2b8dfb11beaefc1c49e0d1cc8726052fd35bed0f892d2674a223bcd633a_prof);

        
        $__internal_a0179eff902b7e44824842c1c10b9e05d20d6bf5b09dd2f11cd5b3a98078c93c->leave($__internal_a0179eff902b7e44824842c1c10b9e05d20d6bf5b09dd2f11cd5b3a98078c93c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_4484801559c7b41dc9a317a3fddf8bbb58c8c929bff5a0edb574fb014f9b0315 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4484801559c7b41dc9a317a3fddf8bbb58c8c929bff5a0edb574fb014f9b0315->enter($__internal_4484801559c7b41dc9a317a3fddf8bbb58c8c929bff5a0edb574fb014f9b0315_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_610c57bc9c79597422235b735e1a9eac0e9774f85552d704b0dbf4744db34b21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_610c57bc9c79597422235b735e1a9eac0e9774f85552d704b0dbf4744db34b21->enter($__internal_610c57bc9c79597422235b735e1a9eac0e9774f85552d704b0dbf4744db34b21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_610c57bc9c79597422235b735e1a9eac0e9774f85552d704b0dbf4744db34b21->leave($__internal_610c57bc9c79597422235b735e1a9eac0e9774f85552d704b0dbf4744db34b21_prof);

        
        $__internal_4484801559c7b41dc9a317a3fddf8bbb58c8c929bff5a0edb574fb014f9b0315->leave($__internal_4484801559c7b41dc9a317a3fddf8bbb58c8c929bff5a0edb574fb014f9b0315_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_5565d0026f28d191073f5486571a3e72ed2272ef732e5022126ed1a2e6ec2f67 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5565d0026f28d191073f5486571a3e72ed2272ef732e5022126ed1a2e6ec2f67->enter($__internal_5565d0026f28d191073f5486571a3e72ed2272ef732e5022126ed1a2e6ec2f67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_e292075255941188aaa17625812109d950eb90598826c17a05a5b8806465cd35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e292075255941188aaa17625812109d950eb90598826c17a05a5b8806465cd35->enter($__internal_e292075255941188aaa17625812109d950eb90598826c17a05a5b8806465cd35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_e292075255941188aaa17625812109d950eb90598826c17a05a5b8806465cd35->leave($__internal_e292075255941188aaa17625812109d950eb90598826c17a05a5b8806465cd35_prof);

        
        $__internal_5565d0026f28d191073f5486571a3e72ed2272ef732e5022126ed1a2e6ec2f67->leave($__internal_5565d0026f28d191073f5486571a3e72ed2272ef732e5022126ed1a2e6ec2f67_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ada3e0aacb3b5509e725ba3f7094b7c9630442c4f886fea64a89ee1add68b5f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ada3e0aacb3b5509e725ba3f7094b7c9630442c4f886fea64a89ee1add68b5f5->enter($__internal_ada3e0aacb3b5509e725ba3f7094b7c9630442c4f886fea64a89ee1add68b5f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_2ce55760b174f85878e61936bc1f20dff0bbad2d0201b84d40ea49331ddc3231 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ce55760b174f85878e61936bc1f20dff0bbad2d0201b84d40ea49331ddc3231->enter($__internal_2ce55760b174f85878e61936bc1f20dff0bbad2d0201b84d40ea49331ddc3231_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_2ce55760b174f85878e61936bc1f20dff0bbad2d0201b84d40ea49331ddc3231->leave($__internal_2ce55760b174f85878e61936bc1f20dff0bbad2d0201b84d40ea49331ddc3231_prof);

        
        $__internal_ada3e0aacb3b5509e725ba3f7094b7c9630442c4f886fea64a89ee1add68b5f5->leave($__internal_ada3e0aacb3b5509e725ba3f7094b7c9630442c4f886fea64a89ee1add68b5f5_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "WebProfilerBundle:Collector:exception.html.twig", "/Users/Rachid/SymfonyProjects/api-lab/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
