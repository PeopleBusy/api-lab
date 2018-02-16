<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_0e94882457a39e1fc8ec5af694f2a51fd37d0459a06966e66c05e2a28fe76ade extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_fe0cc319e36d59774cc7c2b5acbd29a6d24ed4be792a179d3f195469c1b033b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe0cc319e36d59774cc7c2b5acbd29a6d24ed4be792a179d3f195469c1b033b7->enter($__internal_fe0cc319e36d59774cc7c2b5acbd29a6d24ed4be792a179d3f195469c1b033b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_8883f35adc84d09720192572f9f05c37bab1927c4d7c0c4d047bb731db2191a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8883f35adc84d09720192572f9f05c37bab1927c4d7c0c4d047bb731db2191a2->enter($__internal_8883f35adc84d09720192572f9f05c37bab1927c4d7c0c4d047bb731db2191a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fe0cc319e36d59774cc7c2b5acbd29a6d24ed4be792a179d3f195469c1b033b7->leave($__internal_fe0cc319e36d59774cc7c2b5acbd29a6d24ed4be792a179d3f195469c1b033b7_prof);

        
        $__internal_8883f35adc84d09720192572f9f05c37bab1927c4d7c0c4d047bb731db2191a2->leave($__internal_8883f35adc84d09720192572f9f05c37bab1927c4d7c0c4d047bb731db2191a2_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_4b680dfc456347885716b749ebfa5a0a579ebb326942cb821fc8f3f0d7ac8b83 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b680dfc456347885716b749ebfa5a0a579ebb326942cb821fc8f3f0d7ac8b83->enter($__internal_4b680dfc456347885716b749ebfa5a0a579ebb326942cb821fc8f3f0d7ac8b83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_61cdf50cae2033672c04828d67b6c4e2258b9c195ad320de60e888a322b11636 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61cdf50cae2033672c04828d67b6c4e2258b9c195ad320de60e888a322b11636->enter($__internal_61cdf50cae2033672c04828d67b6c4e2258b9c195ad320de60e888a322b11636_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_61cdf50cae2033672c04828d67b6c4e2258b9c195ad320de60e888a322b11636->leave($__internal_61cdf50cae2033672c04828d67b6c4e2258b9c195ad320de60e888a322b11636_prof);

        
        $__internal_4b680dfc456347885716b749ebfa5a0a579ebb326942cb821fc8f3f0d7ac8b83->leave($__internal_4b680dfc456347885716b749ebfa5a0a579ebb326942cb821fc8f3f0d7ac8b83_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_332e2e7b1f46ee20320741ffd3bbf9f8b5618826489e401e9d7a8422ae714f04 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_332e2e7b1f46ee20320741ffd3bbf9f8b5618826489e401e9d7a8422ae714f04->enter($__internal_332e2e7b1f46ee20320741ffd3bbf9f8b5618826489e401e9d7a8422ae714f04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d5d9f55632c420f776541d8f88e9638ef8b1967cde5ad855620d1f7b43eb5ed0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5d9f55632c420f776541d8f88e9638ef8b1967cde5ad855620d1f7b43eb5ed0->enter($__internal_d5d9f55632c420f776541d8f88e9638ef8b1967cde5ad855620d1f7b43eb5ed0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_d5d9f55632c420f776541d8f88e9638ef8b1967cde5ad855620d1f7b43eb5ed0->leave($__internal_d5d9f55632c420f776541d8f88e9638ef8b1967cde5ad855620d1f7b43eb5ed0_prof);

        
        $__internal_332e2e7b1f46ee20320741ffd3bbf9f8b5618826489e401e9d7a8422ae714f04->leave($__internal_332e2e7b1f46ee20320741ffd3bbf9f8b5618826489e401e9d7a8422ae714f04_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_0306653fc83e732a77debdd0f0172c1e963e5cb69cbe4079e94747250e0b581f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0306653fc83e732a77debdd0f0172c1e963e5cb69cbe4079e94747250e0b581f->enter($__internal_0306653fc83e732a77debdd0f0172c1e963e5cb69cbe4079e94747250e0b581f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_dd959373b2d45f0b9b10c5fa0c8b266cc1d44812c647e5ffc85a19860b92d588 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd959373b2d45f0b9b10c5fa0c8b266cc1d44812c647e5ffc85a19860b92d588->enter($__internal_dd959373b2d45f0b9b10c5fa0c8b266cc1d44812c647e5ffc85a19860b92d588_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_dd959373b2d45f0b9b10c5fa0c8b266cc1d44812c647e5ffc85a19860b92d588->leave($__internal_dd959373b2d45f0b9b10c5fa0c8b266cc1d44812c647e5ffc85a19860b92d588_prof);

        
        $__internal_0306653fc83e732a77debdd0f0172c1e963e5cb69cbe4079e94747250e0b581f->leave($__internal_0306653fc83e732a77debdd0f0172c1e963e5cb69cbe4079e94747250e0b581f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "TwigBundle:Exception:exception_full.html.twig", "/Users/Rachid/SymfonyProjects/api-lab/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
