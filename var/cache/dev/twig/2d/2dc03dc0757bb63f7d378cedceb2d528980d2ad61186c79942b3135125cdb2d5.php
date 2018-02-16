<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_688a087021bd8f13f7b75c0d28c4cff34b08a7b74b182e134db9a8a78a788e46 extends Twig_Template
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
        $__internal_a59c36ebdc6d1827ec0470612af62eb9d14ca392a41138caf60c6e37d57fbe62 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a59c36ebdc6d1827ec0470612af62eb9d14ca392a41138caf60c6e37d57fbe62->enter($__internal_a59c36ebdc6d1827ec0470612af62eb9d14ca392a41138caf60c6e37d57fbe62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        $__internal_700cb3bc855220c08512f8798d03b72f283380231efc3b9f44caa193726c725a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_700cb3bc855220c08512f8798d03b72f283380231efc3b9f44caa193726c725a->enter($__internal_700cb3bc855220c08512f8798d03b72f283380231efc3b9f44caa193726c725a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_a59c36ebdc6d1827ec0470612af62eb9d14ca392a41138caf60c6e37d57fbe62->leave($__internal_a59c36ebdc6d1827ec0470612af62eb9d14ca392a41138caf60c6e37d57fbe62_prof);

        
        $__internal_700cb3bc855220c08512f8798d03b72f283380231efc3b9f44caa193726c725a->leave($__internal_700cb3bc855220c08512f8798d03b72f283380231efc3b9f44caa193726c725a_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_408b6077e4742580eaf0e8dfe8aa0c385bff123c11973d915b804f1b54ab9d3c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_408b6077e4742580eaf0e8dfe8aa0c385bff123c11973d915b804f1b54ab9d3c->enter($__internal_408b6077e4742580eaf0e8dfe8aa0c385bff123c11973d915b804f1b54ab9d3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_9de78ca3c59166d336908ac1ba49d0e89634d71230f243553beacf0fe28e75a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9de78ca3c59166d336908ac1ba49d0e89634d71230f243553beacf0fe28e75a8->enter($__internal_9de78ca3c59166d336908ac1ba49d0e89634d71230f243553beacf0fe28e75a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_9de78ca3c59166d336908ac1ba49d0e89634d71230f243553beacf0fe28e75a8->leave($__internal_9de78ca3c59166d336908ac1ba49d0e89634d71230f243553beacf0fe28e75a8_prof);

        
        $__internal_408b6077e4742580eaf0e8dfe8aa0c385bff123c11973d915b804f1b54ab9d3c->leave($__internal_408b6077e4742580eaf0e8dfe8aa0c385bff123c11973d915b804f1b54ab9d3c_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_a6c7da8c091898f878b9694d62f8079cd42bc50ea1e45b3bc68ff5dc23177e3c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6c7da8c091898f878b9694d62f8079cd42bc50ea1e45b3bc68ff5dc23177e3c->enter($__internal_a6c7da8c091898f878b9694d62f8079cd42bc50ea1e45b3bc68ff5dc23177e3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_366142485407e390dcacf1aba3f48c81187a08cf34427cbdaec888603605a736 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_366142485407e390dcacf1aba3f48c81187a08cf34427cbdaec888603605a736->enter($__internal_366142485407e390dcacf1aba3f48c81187a08cf34427cbdaec888603605a736_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_366142485407e390dcacf1aba3f48c81187a08cf34427cbdaec888603605a736->leave($__internal_366142485407e390dcacf1aba3f48c81187a08cf34427cbdaec888603605a736_prof);

        
        $__internal_a6c7da8c091898f878b9694d62f8079cd42bc50ea1e45b3bc68ff5dc23177e3c->leave($__internal_a6c7da8c091898f878b9694d62f8079cd42bc50ea1e45b3bc68ff5dc23177e3c_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_a738f401a518cafddfa304e05f6c6bb86d32c3f6d5484afc1515fe5f20819700 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a738f401a518cafddfa304e05f6c6bb86d32c3f6d5484afc1515fe5f20819700->enter($__internal_a738f401a518cafddfa304e05f6c6bb86d32c3f6d5484afc1515fe5f20819700_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_908d5fade04d81c274c715ed8fc2b67558c1127cfbbd75bbc352668b79283054 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_908d5fade04d81c274c715ed8fc2b67558c1127cfbbd75bbc352668b79283054->enter($__internal_908d5fade04d81c274c715ed8fc2b67558c1127cfbbd75bbc352668b79283054_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_908d5fade04d81c274c715ed8fc2b67558c1127cfbbd75bbc352668b79283054->leave($__internal_908d5fade04d81c274c715ed8fc2b67558c1127cfbbd75bbc352668b79283054_prof);

        
        $__internal_a738f401a518cafddfa304e05f6c6bb86d32c3f6d5484afc1515fe5f20819700->leave($__internal_a738f401a518cafddfa304e05f6c6bb86d32c3f6d5484afc1515fe5f20819700_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
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
{{ 'resetting.email.subject'|trans({'%username%': user.username}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Resetting:email.txt.twig", "/Users/Rachid/SymfonyProjects/api-lab/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/email.txt.twig");
    }
}
