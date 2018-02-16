<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_82f6a30589b176dab6c35c66d9cd8c2145fdc10a94f3c3ca5eb11720d6cf2cb5 extends Twig_Template
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
        $__internal_ef0700b66d608b6f3eef739ee39c47caab597ef3cc815759c46cfe03fed538e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef0700b66d608b6f3eef739ee39c47caab597ef3cc815759c46cfe03fed538e4->enter($__internal_ef0700b66d608b6f3eef739ee39c47caab597ef3cc815759c46cfe03fed538e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_243993b8084685a5093572252762b5a6070802dac566ccd79031ad7dfd544a19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_243993b8084685a5093572252762b5a6070802dac566ccd79031ad7dfd544a19->enter($__internal_243993b8084685a5093572252762b5a6070802dac566ccd79031ad7dfd544a19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_ef0700b66d608b6f3eef739ee39c47caab597ef3cc815759c46cfe03fed538e4->leave($__internal_ef0700b66d608b6f3eef739ee39c47caab597ef3cc815759c46cfe03fed538e4_prof);

        
        $__internal_243993b8084685a5093572252762b5a6070802dac566ccd79031ad7dfd544a19->leave($__internal_243993b8084685a5093572252762b5a6070802dac566ccd79031ad7dfd544a19_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
", "TwigBundle:Exception:error.css.twig", "/Users/Rachid/SymfonyProjects/api-lab/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
