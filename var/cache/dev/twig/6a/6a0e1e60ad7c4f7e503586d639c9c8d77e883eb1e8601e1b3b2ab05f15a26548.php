<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_cb316e87d5208e07cffe60adc264d8c0a35b1422f3f48c5bc470d527f6e65c9d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_218bce8f745da21574cf1c80efd88d0f569c47bb6a1956d9eb0423dd5c1516c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_218bce8f745da21574cf1c80efd88d0f569c47bb6a1956d9eb0423dd5c1516c9->enter($__internal_218bce8f745da21574cf1c80efd88d0f569c47bb6a1956d9eb0423dd5c1516c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $__internal_7b4af39229bd7367b297e28c804043039ec7bc0110e5cf3b326564ac60af8fcf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b4af39229bd7367b297e28c804043039ec7bc0110e5cf3b326564ac60af8fcf->enter($__internal_7b4af39229bd7367b297e28c804043039ec7bc0110e5cf3b326564ac60af8fcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_218bce8f745da21574cf1c80efd88d0f569c47bb6a1956d9eb0423dd5c1516c9->leave($__internal_218bce8f745da21574cf1c80efd88d0f569c47bb6a1956d9eb0423dd5c1516c9_prof);

        
        $__internal_7b4af39229bd7367b297e28c804043039ec7bc0110e5cf3b326564ac60af8fcf->leave($__internal_7b4af39229bd7367b297e28c804043039ec7bc0110e5cf3b326564ac60af8fcf_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b31e24db62bed63bab24795e7b172a642bd765a2151d63094b7bbf392348596a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b31e24db62bed63bab24795e7b172a642bd765a2151d63094b7bbf392348596a->enter($__internal_b31e24db62bed63bab24795e7b172a642bd765a2151d63094b7bbf392348596a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_f733a322d4a513f29331df69d82687ea8c4870dc7d5f8eab1961dcba28e69dd0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f733a322d4a513f29331df69d82687ea8c4870dc7d5f8eab1961dcba28e69dd0->enter($__internal_f733a322d4a513f29331df69d82687ea8c4870dc7d5f8eab1961dcba28e69dd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_f733a322d4a513f29331df69d82687ea8c4870dc7d5f8eab1961dcba28e69dd0->leave($__internal_f733a322d4a513f29331df69d82687ea8c4870dc7d5f8eab1961dcba28e69dd0_prof);

        
        $__internal_b31e24db62bed63bab24795e7b172a642bd765a2151d63094b7bbf392348596a->leave($__internal_b31e24db62bed63bab24795e7b172a642bd765a2151d63094b7bbf392348596a_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
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

{% block fos_user_content %}
{% include \"@FOSUser/Resetting/reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:reset.html.twig", "/Users/Rachid/SymfonyProjects/api-lab/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/reset.html.twig");
    }
}
