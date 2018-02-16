<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_c9973cfcd12842aaf6de3a68e8d6ab42a2f322eddc3229c1e56ad0330df1d4d4 extends Twig_Template
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
        $__internal_e0e10ecb3e606d471751f4da2ff93f8ab0915d0d3e8d94a2142ddd4b4ab904c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0e10ecb3e606d471751f4da2ff93f8ab0915d0d3e8d94a2142ddd4b4ab904c8->enter($__internal_e0e10ecb3e606d471751f4da2ff93f8ab0915d0d3e8d94a2142ddd4b4ab904c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_bdf287ed671b77a4bfb885b0cb3b44e9774c553116b2feadc51b7574e929742b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bdf287ed671b77a4bfb885b0cb3b44e9774c553116b2feadc51b7574e929742b->enter($__internal_bdf287ed671b77a4bfb885b0cb3b44e9774c553116b2feadc51b7574e929742b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_e0e10ecb3e606d471751f4da2ff93f8ab0915d0d3e8d94a2142ddd4b4ab904c8->leave($__internal_e0e10ecb3e606d471751f4da2ff93f8ab0915d0d3e8d94a2142ddd4b4ab904c8_prof);

        
        $__internal_bdf287ed671b77a4bfb885b0cb3b44e9774c553116b2feadc51b7574e929742b->leave($__internal_bdf287ed671b77a4bfb885b0cb3b44e9774c553116b2feadc51b7574e929742b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
", "TwigBundle:Exception:error.rdf.twig", "/Users/Rachid/SymfonyProjects/api-lab/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
