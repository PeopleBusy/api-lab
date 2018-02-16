<?php

/* FOSUserBundle:Profile:show_content.html.twig */
class __TwigTemplate_b26e065254c22c77927a544c1389566b74d3a4a596db34efa6a4d3f6859a25b2 extends Twig_Template
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
        $__internal_8931ce3cc7b7954680c91ff130921f3de6a9895a1bb353bc98ad11525fb9cce0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8931ce3cc7b7954680c91ff130921f3de6a9895a1bb353bc98ad11525fb9cce0->enter($__internal_8931ce3cc7b7954680c91ff130921f3de6a9895a1bb353bc98ad11525fb9cce0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

        $__internal_0361735ffae4ec16ea2660ec889f79eeef73372d4cc11f4f0e3951a1c4b2e6c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0361735ffae4ec16ea2660ec889f79eeef73372d4cc11f4f0e3951a1c4b2e6c7->enter($__internal_0361735ffae4ec16ea2660ec889f79eeef73372d4cc11f4f0e3951a1c4b2e6c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_user_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</p>
    <p>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_8931ce3cc7b7954680c91ff130921f3de6a9895a1bb353bc98ad11525fb9cce0->leave($__internal_8931ce3cc7b7954680c91ff130921f3de6a9895a1bb353bc98ad11525fb9cce0_prof);

        
        $__internal_0361735ffae4ec16ea2660ec889f79eeef73372d4cc11f4f0e3951a1c4b2e6c7->leave($__internal_0361735ffae4ec16ea2660ec889f79eeef73372d4cc11f4f0e3951a1c4b2e6c7_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 5,  29 => 4,  25 => 2,);
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

<div class=\"fos_user_user_show\">
    <p>{{ 'profile.show.username'|trans }}: {{ user.username }}</p>
    <p>{{ 'profile.show.email'|trans }}: {{ user.email }}</p>
</div>
", "FOSUserBundle:Profile:show_content.html.twig", "/Users/Rachid/SymfonyProjects/api-lab/vendor/friendsofsymfony/user-bundle/Resources/views/Profile/show_content.html.twig");
    }
}
