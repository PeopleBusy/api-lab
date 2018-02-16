<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_965fddb46d9b560c060fe47d8502f34d6ce7b159f6524f3ec3d32a5e0cb44075 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_672c49a1e0b3e9042c9785e5f9f37ef3fb4a82793787d43b421ed151576d22ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_672c49a1e0b3e9042c9785e5f9f37ef3fb4a82793787d43b421ed151576d22ed->enter($__internal_672c49a1e0b3e9042c9785e5f9f37ef3fb4a82793787d43b421ed151576d22ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        $__internal_dd9af24c0dd33041e191093ecdc01973dfd6b2b9276afb83a08348a66cf23c8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd9af24c0dd33041e191093ecdc01973dfd6b2b9276afb83a08348a66cf23c8f->enter($__internal_dd9af24c0dd33041e191093ecdc01973dfd6b2b9276afb83a08348a66cf23c8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_672c49a1e0b3e9042c9785e5f9f37ef3fb4a82793787d43b421ed151576d22ed->leave($__internal_672c49a1e0b3e9042c9785e5f9f37ef3fb4a82793787d43b421ed151576d22ed_prof);

        
        $__internal_dd9af24c0dd33041e191093ecdc01973dfd6b2b9276afb83a08348a66cf23c8f->leave($__internal_dd9af24c0dd33041e191093ecdc01973dfd6b2b9276afb83a08348a66cf23c8f_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_d25f457f62b3b73024ea3ea0778adf22de6c3bbc2b4bdb4cff0f6d12bcc8d549 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d25f457f62b3b73024ea3ea0778adf22de6c3bbc2b4bdb4cff0f6d12bcc8d549->enter($__internal_d25f457f62b3b73024ea3ea0778adf22de6c3bbc2b4bdb4cff0f6d12bcc8d549_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_93ec04f5edc7b95fa7aecf002403d7c43ec02ebae5c8fef076bcde84ad103e2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93ec04f5edc7b95fa7aecf002403d7c43ec02ebae5c8fef076bcde84ad103e2e->enter($__internal_93ec04f5edc7b95fa7aecf002403d7c43ec02ebae5c8fef076bcde84ad103e2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_93ec04f5edc7b95fa7aecf002403d7c43ec02ebae5c8fef076bcde84ad103e2e->leave($__internal_93ec04f5edc7b95fa7aecf002403d7c43ec02ebae5c8fef076bcde84ad103e2e_prof);

        
        $__internal_d25f457f62b3b73024ea3ea0778adf22de6c3bbc2b4bdb4cff0f6d12bcc8d549->leave($__internal_d25f457f62b3b73024ea3ea0778adf22de6c3bbc2b4bdb4cff0f6d12bcc8d549_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_d2c80127c351654f684e20172b11081fd9105498dff2bb79c1c80a63e61e017f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2c80127c351654f684e20172b11081fd9105498dff2bb79c1c80a63e61e017f->enter($__internal_d2c80127c351654f684e20172b11081fd9105498dff2bb79c1c80a63e61e017f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_4e757a1be097f39eea69f463f477b63cd8a127f50889d22fcd981fb63f1a2a8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e757a1be097f39eea69f463f477b63cd8a127f50889d22fcd981fb63f1a2a8d->enter($__internal_4e757a1be097f39eea69f463f477b63cd8a127f50889d22fcd981fb63f1a2a8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_4e757a1be097f39eea69f463f477b63cd8a127f50889d22fcd981fb63f1a2a8d->leave($__internal_4e757a1be097f39eea69f463f477b63cd8a127f50889d22fcd981fb63f1a2a8d_prof);

        
        $__internal_d2c80127c351654f684e20172b11081fd9105498dff2bb79c1c80a63e61e017f->leave($__internal_d2c80127c351654f684e20172b11081fd9105498dff2bb79c1c80a63e61e017f_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_d377a234987cb953e539ecdbafd5a2a2e3b9e7887d8556a58a668d8f823ba6b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d377a234987cb953e539ecdbafd5a2a2e3b9e7887d8556a58a668d8f823ba6b9->enter($__internal_d377a234987cb953e539ecdbafd5a2a2e3b9e7887d8556a58a668d8f823ba6b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_24b0b55895ee5d53fb25d47573ef0932ddb282e7ac6e1dd5dd35f24a81c241aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24b0b55895ee5d53fb25d47573ef0932ddb282e7ac6e1dd5dd35f24a81c241aa->enter($__internal_24b0b55895ee5d53fb25d47573ef0932ddb282e7ac6e1dd5dd35f24a81c241aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_24b0b55895ee5d53fb25d47573ef0932ddb282e7ac6e1dd5dd35f24a81c241aa->leave($__internal_24b0b55895ee5d53fb25d47573ef0932ddb282e7ac6e1dd5dd35f24a81c241aa_prof);

        
        $__internal_d377a234987cb953e539ecdbafd5a2a2e3b9e7887d8556a58a668d8f823ba6b9->leave($__internal_d377a234987cb953e539ecdbafd5a2a2e3b9e7887d8556a58a668d8f823ba6b9_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  85 => 13,  73 => 10,  64 => 8,  54 => 4,  45 => 2,  35 => 13,  33 => 8,  30 => 7,  28 => 2,);
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
{% block subject %}
{%- autoescape false -%}
{{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Registration:email.txt.twig", "/Users/Rachid/SymfonyProjects/api-lab/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/email.txt.twig");
    }
}
