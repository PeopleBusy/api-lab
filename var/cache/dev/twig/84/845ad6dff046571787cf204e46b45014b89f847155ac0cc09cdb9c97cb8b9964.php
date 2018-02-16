<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_d35231165cc289e0183d18ccefbd19812fa0dc4f1c6b2dd27d611829a67fd9ed extends Twig_Template
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
        $__internal_0a3bb0ee8e48ba8c8e7985d538334f0e7e535783948507ffbfcdb6bbc1dbff7e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a3bb0ee8e48ba8c8e7985d538334f0e7e535783948507ffbfcdb6bbc1dbff7e->enter($__internal_0a3bb0ee8e48ba8c8e7985d538334f0e7e535783948507ffbfcdb6bbc1dbff7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_e55ea8478390193858856a543bfd8ab3e21b6478b90d5e9f5da06101590105af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e55ea8478390193858856a543bfd8ab3e21b6478b90d5e9f5da06101590105af->enter($__internal_e55ea8478390193858856a543bfd8ab3e21b6478b90d5e9f5da06101590105af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_0a3bb0ee8e48ba8c8e7985d538334f0e7e535783948507ffbfcdb6bbc1dbff7e->leave($__internal_0a3bb0ee8e48ba8c8e7985d538334f0e7e535783948507ffbfcdb6bbc1dbff7e_prof);

        
        $__internal_e55ea8478390193858856a543bfd8ab3e21b6478b90d5e9f5da06101590105af->leave($__internal_e55ea8478390193858856a543bfd8ab3e21b6478b90d5e9f5da06101590105af_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "TwigBundle:Exception:exception.js.twig", "/Users/Rachid/SymfonyProjects/api-lab/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
