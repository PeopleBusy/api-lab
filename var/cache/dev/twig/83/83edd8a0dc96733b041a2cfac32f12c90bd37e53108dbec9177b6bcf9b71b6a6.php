<?php

/* FOSUserBundle:Group:show_content.html.twig */
class __TwigTemplate_eddf942d743033f7948eb905c7ed320b9baa706a81b7dbca5046d7058e0c4178 extends Twig_Template
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
        $__internal_fba37f733f22e63bc58f145b20c46261451e895b3c8d2cf8215262b4440b1c4a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fba37f733f22e63bc58f145b20c46261451e895b3c8d2cf8215262b4440b1c4a->enter($__internal_fba37f733f22e63bc58f145b20c46261451e895b3c8d2cf8215262b4440b1c4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        $__internal_604ca86b3ea2c9ec7194dc2a3fe0e2e4796b726f283489b252f629b9602b1768 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_604ca86b3ea2c9ec7194dc2a3fe0e2e4796b726f283489b252f629b9602b1768->enter($__internal_604ca86b3ea2c9ec7194dc2a3fe0e2e4796b726f283489b252f629b9602b1768_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_group_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("group.show.name", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["group"] ?? $this->getContext($context, "group")), "getName", array(), "method"), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_fba37f733f22e63bc58f145b20c46261451e895b3c8d2cf8215262b4440b1c4a->leave($__internal_fba37f733f22e63bc58f145b20c46261451e895b3c8d2cf8215262b4440b1c4a_prof);

        
        $__internal_604ca86b3ea2c9ec7194dc2a3fe0e2e4796b726f283489b252f629b9602b1768->leave($__internal_604ca86b3ea2c9ec7194dc2a3fe0e2e4796b726f283489b252f629b9602b1768_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 4,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

<div class=\"fos_user_group_show\">
    <p>{{ 'group.show.name'|trans }}: {{ group.getName() }}</p>
</div>
", "FOSUserBundle:Group:show_content.html.twig", "/Users/Rachid/SymfonyProjects/api-lab/vendor/friendsofsymfony/user-bundle/Resources/views/Group/show_content.html.twig");
    }
}
