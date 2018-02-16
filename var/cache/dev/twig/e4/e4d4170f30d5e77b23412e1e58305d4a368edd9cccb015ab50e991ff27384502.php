<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_187c8dea48effe1cba8a3da8833e0a1701d169a2fc38d25f7bf692492309062c extends Twig_Template
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
        $__internal_5c61f6c87c04a29f72b8c20e7f3f9ddcc95f17fcc6570946b7e97e53ca000342 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c61f6c87c04a29f72b8c20e7f3f9ddcc95f17fcc6570946b7e97e53ca000342->enter($__internal_5c61f6c87c04a29f72b8c20e7f3f9ddcc95f17fcc6570946b7e97e53ca000342_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_5e444570354d3d3239b9afd0224f30bc78d962fc77479ff6e08c3dcd380ce977 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e444570354d3d3239b9afd0224f30bc78d962fc77479ff6e08c3dcd380ce977->enter($__internal_5e444570354d3d3239b9afd0224f30bc78d962fc77479ff6e08c3dcd380ce977_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_5c61f6c87c04a29f72b8c20e7f3f9ddcc95f17fcc6570946b7e97e53ca000342->leave($__internal_5c61f6c87c04a29f72b8c20e7f3f9ddcc95f17fcc6570946b7e97e53ca000342_prof);

        
        $__internal_5e444570354d3d3239b9afd0224f30bc78d962fc77479ff6e08c3dcd380ce977->leave($__internal_5e444570354d3d3239b9afd0224f30bc78d962fc77479ff6e08c3dcd380ce977_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "TwigBundle:Exception:error.atom.twig", "/Users/Rachid/SymfonyProjects/api-lab/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
