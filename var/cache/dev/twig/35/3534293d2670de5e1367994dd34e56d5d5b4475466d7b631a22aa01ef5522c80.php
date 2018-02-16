<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_b043c2d72247747f6ec679b8f87992bcab997a906359722fcd6ca5ef9f7ceeaa extends Twig_Template
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
        $__internal_00b65f1cb801a4a00e293e174de078da1b68b9bb95e0ab17b96bcf15e99d52c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00b65f1cb801a4a00e293e174de078da1b68b9bb95e0ab17b96bcf15e99d52c4->enter($__internal_00b65f1cb801a4a00e293e174de078da1b68b9bb95e0ab17b96bcf15e99d52c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_59e917c16352a06ea1441cf1272444ceedc584559128c8a639499f150c6ba503 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59e917c16352a06ea1441cf1272444ceedc584559128c8a639499f150c6ba503->enter($__internal_59e917c16352a06ea1441cf1272444ceedc584559128c8a639499f150c6ba503_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_00b65f1cb801a4a00e293e174de078da1b68b9bb95e0ab17b96bcf15e99d52c4->leave($__internal_00b65f1cb801a4a00e293e174de078da1b68b9bb95e0ab17b96bcf15e99d52c4_prof);

        
        $__internal_59e917c16352a06ea1441cf1272444ceedc584559128c8a639499f150c6ba503->leave($__internal_59e917c16352a06ea1441cf1272444ceedc584559128c8a639499f150c6ba503_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.js.twig", "/Users/Rachid/SymfonyProjects/api-lab/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
