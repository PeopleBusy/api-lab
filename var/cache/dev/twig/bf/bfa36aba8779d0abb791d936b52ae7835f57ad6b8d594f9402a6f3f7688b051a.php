<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_f2a6e0de96643102b76e0939e7b7bdbbb6aca70e1239b17a940bf00538ed889f extends Twig_Template
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
        $__internal_98771a41d7eafd82184d42fffb1889dbf1ff46e564c7ae8333d5adc4435da792 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98771a41d7eafd82184d42fffb1889dbf1ff46e564c7ae8333d5adc4435da792->enter($__internal_98771a41d7eafd82184d42fffb1889dbf1ff46e564c7ae8333d5adc4435da792_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_235a86c7e9f4f7a2d247d34668d97ad5bfbe92bce87c4256a2f0e68cbc9482c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_235a86c7e9f4f7a2d247d34668d97ad5bfbe92bce87c4256a2f0e68cbc9482c5->enter($__internal_235a86c7e9f4f7a2d247d34668d97ad5bfbe92bce87c4256a2f0e68cbc9482c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_98771a41d7eafd82184d42fffb1889dbf1ff46e564c7ae8333d5adc4435da792->leave($__internal_98771a41d7eafd82184d42fffb1889dbf1ff46e564c7ae8333d5adc4435da792_prof);

        
        $__internal_235a86c7e9f4f7a2d247d34668d97ad5bfbe92bce87c4256a2f0e68cbc9482c5->leave($__internal_235a86c7e9f4f7a2d247d34668d97ad5bfbe92bce87c4256a2f0e68cbc9482c5_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
", "TwigBundle:Exception:exception.rdf.twig", "/Users/Rachid/SymfonyProjects/api-lab/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
