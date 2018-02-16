<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_711981281956c9595012d3200cf6df1120ec4e29538590673ec3a419a6f57daa extends Twig_Template
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
        $__internal_353bd9cbae6de9c3cee43bdca9daee03659485e99590c60b15b2780eb55d9fe2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_353bd9cbae6de9c3cee43bdca9daee03659485e99590c60b15b2780eb55d9fe2->enter($__internal_353bd9cbae6de9c3cee43bdca9daee03659485e99590c60b15b2780eb55d9fe2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_d7651aa8e9a4341e4b2f5dd14274d25ec5e547cc96e46960c21fcbc5baebd099 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7651aa8e9a4341e4b2f5dd14274d25ec5e547cc96e46960c21fcbc5baebd099->enter($__internal_d7651aa8e9a4341e4b2f5dd14274d25ec5e547cc96e46960c21fcbc5baebd099_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")), "exception" => $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_353bd9cbae6de9c3cee43bdca9daee03659485e99590c60b15b2780eb55d9fe2->leave($__internal_353bd9cbae6de9c3cee43bdca9daee03659485e99590c60b15b2780eb55d9fe2_prof);

        
        $__internal_d7651aa8e9a4341e4b2f5dd14274d25ec5e547cc96e46960c21fcbc5baebd099->leave($__internal_d7651aa8e9a4341e4b2f5dd14274d25ec5e547cc96e46960c21fcbc5baebd099_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "TwigBundle:Exception:exception.json.twig", "/Users/Rachid/SymfonyProjects/api-lab/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
