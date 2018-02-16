<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_60a1987c8136ef3a37355d8e4544f4c299ba7b6eb15f3ebc6d813e42bd2628d8 extends Twig_Template
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
        $__internal_8a77f9b7bb08faef5fe8a72d691cc766638a1e6e3df3965be196312257d3a831 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a77f9b7bb08faef5fe8a72d691cc766638a1e6e3df3965be196312257d3a831->enter($__internal_8a77f9b7bb08faef5fe8a72d691cc766638a1e6e3df3965be196312257d3a831_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_0d8ad569bf08dd770c0ac18d6a3d63918dad37290ca68596cae39b5048652ede = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d8ad569bf08dd770c0ac18d6a3d63918dad37290ca68596cae39b5048652ede->enter($__internal_0d8ad569bf08dd770c0ac18d6a3d63918dad37290ca68596cae39b5048652ede_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_8a77f9b7bb08faef5fe8a72d691cc766638a1e6e3df3965be196312257d3a831->leave($__internal_8a77f9b7bb08faef5fe8a72d691cc766638a1e6e3df3965be196312257d3a831_prof);

        
        $__internal_0d8ad569bf08dd770c0ac18d6a3d63918dad37290ca68596cae39b5048652ede->leave($__internal_0d8ad569bf08dd770c0ac18d6a3d63918dad37290ca68596cae39b5048652ede_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "TwigBundle:Exception:error.json.twig", "/Users/Rachid/SymfonyProjects/api-lab/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
