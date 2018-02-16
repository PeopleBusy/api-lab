<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_441f7394c9d59cd0131db0b6d20e7fefc3cdb3c06efbcd77e15ebfd7ce444150 extends Twig_Template
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
        $__internal_c6c9ad11d3b26078a60c5371d2c948e7716b4d07cc1471122c7607855778ebac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6c9ad11d3b26078a60c5371d2c948e7716b4d07cc1471122c7607855778ebac->enter($__internal_c6c9ad11d3b26078a60c5371d2c948e7716b4d07cc1471122c7607855778ebac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        $__internal_11179ccf2c54e122ef4a12e9644e56bc987419507f827683a41930605a58d10b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11179ccf2c54e122ef4a12e9644e56bc987419507f827683a41930605a58d10b->enter($__internal_11179ccf2c54e122ef4a12e9644e56bc987419507f827683a41930605a58d10b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_c6c9ad11d3b26078a60c5371d2c948e7716b4d07cc1471122c7607855778ebac->leave($__internal_c6c9ad11d3b26078a60c5371d2c948e7716b4d07cc1471122c7607855778ebac_prof);

        
        $__internal_11179ccf2c54e122ef4a12e9644e56bc987419507f827683a41930605a58d10b->leave($__internal_11179ccf2c54e122ef4a12e9644e56bc987419507f827683a41930605a58d10b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "TwigBundle:Exception:error.xml.twig", "/Users/Rachid/SymfonyProjects/api-lab/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.xml.twig");
    }
}
