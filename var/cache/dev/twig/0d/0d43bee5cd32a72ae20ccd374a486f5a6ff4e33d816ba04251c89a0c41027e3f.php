<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_f69f356291c97b1422865e3db43967aec2522e14715513f18c55cf7f4f221da4 extends Twig_Template
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
        $__internal_1ca738924b7ca150dc03c73b99c146d36b014acdc39110a49aa582bb23fcec7e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ca738924b7ca150dc03c73b99c146d36b014acdc39110a49aa582bb23fcec7e->enter($__internal_1ca738924b7ca150dc03c73b99c146d36b014acdc39110a49aa582bb23fcec7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_41a4022af4e335719e1c36e18664eb6f98bd7959da4374b4983ddd829293eea1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41a4022af4e335719e1c36e18664eb6f98bd7959da4374b4983ddd829293eea1->enter($__internal_41a4022af4e335719e1c36e18664eb6f98bd7959da4374b4983ddd829293eea1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_1ca738924b7ca150dc03c73b99c146d36b014acdc39110a49aa582bb23fcec7e->leave($__internal_1ca738924b7ca150dc03c73b99c146d36b014acdc39110a49aa582bb23fcec7e_prof);

        
        $__internal_41a4022af4e335719e1c36e18664eb6f98bd7959da4374b4983ddd829293eea1->leave($__internal_41a4022af4e335719e1c36e18664eb6f98bd7959da4374b4983ddd829293eea1_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "TwigBundle:Exception:exception.atom.twig", "/Users/Rachid/SymfonyProjects/api-lab/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
