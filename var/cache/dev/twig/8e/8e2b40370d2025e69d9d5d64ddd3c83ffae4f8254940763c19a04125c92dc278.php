<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_1a99166192e027a58de15589c3fe763ebb9804631fc0cdd5e70405e22024939e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:confirmed.html.twig", 1);
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
        $__internal_d6a664aafea208ffc4d162ea7ac53a3d31e77726d9914e682499abf51fc838d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6a664aafea208ffc4d162ea7ac53a3d31e77726d9914e682499abf51fc838d1->enter($__internal_d6a664aafea208ffc4d162ea7ac53a3d31e77726d9914e682499abf51fc838d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $__internal_1f11c2e0806739c0d37981ef6ef7616ad9f2c14be03e780bad647aa01eaa29f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f11c2e0806739c0d37981ef6ef7616ad9f2c14be03e780bad647aa01eaa29f7->enter($__internal_1f11c2e0806739c0d37981ef6ef7616ad9f2c14be03e780bad647aa01eaa29f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d6a664aafea208ffc4d162ea7ac53a3d31e77726d9914e682499abf51fc838d1->leave($__internal_d6a664aafea208ffc4d162ea7ac53a3d31e77726d9914e682499abf51fc838d1_prof);

        
        $__internal_1f11c2e0806739c0d37981ef6ef7616ad9f2c14be03e780bad647aa01eaa29f7->leave($__internal_1f11c2e0806739c0d37981ef6ef7616ad9f2c14be03e780bad647aa01eaa29f7_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1ecdef42651bd52c66a378fb33f71b0dfb2e33378af7f79f159bb70e112eb34d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ecdef42651bd52c66a378fb33f71b0dfb2e33378af7f79f159bb70e112eb34d->enter($__internal_1ecdef42651bd52c66a378fb33f71b0dfb2e33378af7f79f159bb70e112eb34d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_5c4c90cb196ddd342319a457a30e31d27830e217c73149c06a7f4fea4a2b9ff6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c4c90cb196ddd342319a457a30e31d27830e217c73149c06a7f4fea4a2b9ff6->enter($__internal_5c4c90cb196ddd342319a457a30e31d27830e217c73149c06a7f4fea4a2b9ff6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.confirmed", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if (($context["targetUrl"] ?? $this->getContext($context, "targetUrl"))) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, ($context["targetUrl"] ?? $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_5c4c90cb196ddd342319a457a30e31d27830e217c73149c06a7f4fea4a2b9ff6->leave($__internal_5c4c90cb196ddd342319a457a30e31d27830e217c73149c06a7f4fea4a2b9ff6_prof);

        
        $__internal_1ecdef42651bd52c66a378fb33f71b0dfb2e33378af7f79f159bb70e112eb34d->leave($__internal_1ecdef42651bd52c66a378fb33f71b0dfb2e33378af7f79f159bb70e112eb34d_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 8,  54 => 7,  49 => 6,  40 => 5,  11 => 1,);
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
    <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>
    {% if targetUrl %}
    <p><a href=\"{{ targetUrl }}\">{{ 'registration.back'|trans }}</a></p>
    {% endif %}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:confirmed.html.twig", "/Users/Rachid/SymfonyProjects/api-lab/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/confirmed.html.twig");
    }
}
