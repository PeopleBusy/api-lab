<?php

/* FOSUserBundle:Registration:check_email.html.twig */
class __TwigTemplate_470974507026a99095a33bb22c2f6bfc718c61e70a9bb26807eca69aae820b54 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:check_email.html.twig", 1);
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
        $__internal_9901d9d4a5b6de719f4413934c12f54a70559519e04ae8fec8cb99d1939cb3bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9901d9d4a5b6de719f4413934c12f54a70559519e04ae8fec8cb99d1939cb3bd->enter($__internal_9901d9d4a5b6de719f4413934c12f54a70559519e04ae8fec8cb99d1939cb3bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $__internal_16d0dd58bef8f437bea6993389d02bdfcf76af19040c93944f1da5cfedf20650 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16d0dd58bef8f437bea6993389d02bdfcf76af19040c93944f1da5cfedf20650->enter($__internal_16d0dd58bef8f437bea6993389d02bdfcf76af19040c93944f1da5cfedf20650_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9901d9d4a5b6de719f4413934c12f54a70559519e04ae8fec8cb99d1939cb3bd->leave($__internal_9901d9d4a5b6de719f4413934c12f54a70559519e04ae8fec8cb99d1939cb3bd_prof);

        
        $__internal_16d0dd58bef8f437bea6993389d02bdfcf76af19040c93944f1da5cfedf20650->leave($__internal_16d0dd58bef8f437bea6993389d02bdfcf76af19040c93944f1da5cfedf20650_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_00a6d9d0015a858111b8510100e9b864f20188d5eb4e62fcbc3fde42b47f7988 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00a6d9d0015a858111b8510100e9b864f20188d5eb4e62fcbc3fde42b47f7988->enter($__internal_00a6d9d0015a858111b8510100e9b864f20188d5eb4e62fcbc3fde42b47f7988_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_1a1a0bf793fefb8ebd119b62b6f6804608a2ab3e33c803ef62dc9ff2083bbab3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a1a0bf793fefb8ebd119b62b6f6804608a2ab3e33c803ef62dc9ff2083bbab3->enter($__internal_1a1a0bf793fefb8ebd119b62b6f6804608a2ab3e33c803ef62dc9ff2083bbab3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_1a1a0bf793fefb8ebd119b62b6f6804608a2ab3e33c803ef62dc9ff2083bbab3->leave($__internal_1a1a0bf793fefb8ebd119b62b6f6804608a2ab3e33c803ef62dc9ff2083bbab3_prof);

        
        $__internal_00a6d9d0015a858111b8510100e9b864f20188d5eb4e62fcbc3fde42b47f7988->leave($__internal_00a6d9d0015a858111b8510100e9b864f20188d5eb4e62fcbc3fde42b47f7988_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 6,  40 => 5,  11 => 1,);
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
    <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:check_email.html.twig", "/Users/Rachid/SymfonyProjects/api-lab/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/check_email.html.twig");
    }
}
