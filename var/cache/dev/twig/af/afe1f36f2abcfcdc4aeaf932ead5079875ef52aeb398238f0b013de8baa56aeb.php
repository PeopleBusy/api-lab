<?php

/* WebProfilerBundle:Collector:exception.css.twig */
class __TwigTemplate_232175c64af6cfe13366a34938c42efad926efa7da18a4143c5a2e2b1cae1193 extends Twig_Template
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
        $__internal_7b52ca0c8c04d7a4879f22c53e0c04a2e598adbb19c143a26d799dee67796b58 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b52ca0c8c04d7a4879f22c53e0c04a2e598adbb19c143a26d799dee67796b58->enter($__internal_7b52ca0c8c04d7a4879f22c53e0c04a2e598adbb19c143a26d799dee67796b58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

        $__internal_ea56031df6f1e6c392211acb2e8c7f6a8257f4ec79a374c478479528bafce0e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea56031df6f1e6c392211acb2e8c7f6a8257f4ec79a374c478479528bafce0e7->enter($__internal_ea56031df6f1e6c392211acb2e8c7f6a8257f4ec79a374c478479528bafce0e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}
.exception-summary.exception-without-message {
    display: none;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper .container {
    min-height: auto;
}
";
        
        $__internal_7b52ca0c8c04d7a4879f22c53e0c04a2e598adbb19c143a26d799dee67796b58->leave($__internal_7b52ca0c8c04d7a4879f22c53e0c04a2e598adbb19c143a26d799dee67796b58_prof);

        
        $__internal_ea56031df6f1e6c392211acb2e8c7f6a8257f4ec79a374c478479528bafce0e7->leave($__internal_ea56031df6f1e6c392211acb2e8c7f6a8257f4ec79a374c478479528bafce0e7_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("{{ include('@Twig/exception.css.twig') }}

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}
.exception-summary.exception-without-message {
    display: none;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper .container {
    min-height: auto;
}
", "WebProfilerBundle:Collector:exception.css.twig", "/Users/Rachid/SymfonyProjects/api-lab/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.css.twig");
    }
}
