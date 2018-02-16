<?php

/* FOSUserBundle:Resetting:check_email.html.twig */
class __TwigTemplate_32e00b697ea1fd26b455cf7efc8b04d771f10183d66654a417287799a850c624 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:check_email.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4291bc549021657bb3792fe4ab188be3f998759d3bcea5656f9180737bd6f5fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4291bc549021657bb3792fe4ab188be3f998759d3bcea5656f9180737bd6f5fa->enter($__internal_4291bc549021657bb3792fe4ab188be3f998759d3bcea5656f9180737bd6f5fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $__internal_900a67362365130f3e37e877e9882f920b861ed8b955845fdee91a8c9db9358a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_900a67362365130f3e37e877e9882f920b861ed8b955845fdee91a8c9db9358a->enter($__internal_900a67362365130f3e37e877e9882f920b861ed8b955845fdee91a8c9db9358a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4291bc549021657bb3792fe4ab188be3f998759d3bcea5656f9180737bd6f5fa->leave($__internal_4291bc549021657bb3792fe4ab188be3f998759d3bcea5656f9180737bd6f5fa_prof);

        
        $__internal_900a67362365130f3e37e877e9882f920b861ed8b955845fdee91a8c9db9358a->leave($__internal_900a67362365130f3e37e877e9882f920b861ed8b955845fdee91a8c9db9358a_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f96954a2f1d8bca2fb635edd0f68c8b6bfcede9460901977404a70416a843601 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f96954a2f1d8bca2fb635edd0f68c8b6bfcede9460901977404a70416a843601->enter($__internal_f96954a2f1d8bca2fb635edd0f68c8b6bfcede9460901977404a70416a843601_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_9307bd32f374a83bc6e024e75a3d5718844ab8c0f5b24e0966981a32ab388577 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9307bd32f374a83bc6e024e75a3d5718844ab8c0f5b24e0966981a32ab388577->enter($__internal_9307bd32f374a83bc6e024e75a3d5718844ab8c0f5b24e0966981a32ab388577_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => ($context["tokenLifetime"] ?? $this->getContext($context, "tokenLifetime"))), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_9307bd32f374a83bc6e024e75a3d5718844ab8c0f5b24e0966981a32ab388577->leave($__internal_9307bd32f374a83bc6e024e75a3d5718844ab8c0f5b24e0966981a32ab388577_prof);

        
        $__internal_f96954a2f1d8bca2fb635edd0f68c8b6bfcede9460901977404a70416a843601->leave($__internal_f96954a2f1d8bca2fb635edd0f68c8b6bfcede9460901977404a70416a843601_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 7,  49 => 6,  40 => 5,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
<p>
{{ 'resetting.check_email'|trans({'%tokenLifetime%': tokenLifetime})|nl2br }}
</p>
{% endblock %}
", "FOSUserBundle:Resetting:check_email.html.twig", "/Users/Rachid/SymfonyProjects/api-lab/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/check_email.html.twig");
    }
}
