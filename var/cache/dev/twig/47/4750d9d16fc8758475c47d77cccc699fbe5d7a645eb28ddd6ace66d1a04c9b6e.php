<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_429b0496579b8bf39fa55c6564006959154c1cfe9c1933d37c6a0c1a1f1ee35d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_f3026c6e56dde2fa36ac6ccb9647ce27bdbe841e5b6d0209931cf93c6ea56b09 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f3026c6e56dde2fa36ac6ccb9647ce27bdbe841e5b6d0209931cf93c6ea56b09->enter($__internal_f3026c6e56dde2fa36ac6ccb9647ce27bdbe841e5b6d0209931cf93c6ea56b09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $__internal_366979d040e35474264265b8063db406ff8127d69a375705e00bb401111259eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_366979d040e35474264265b8063db406ff8127d69a375705e00bb401111259eb->enter($__internal_366979d040e35474264265b8063db406ff8127d69a375705e00bb401111259eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f3026c6e56dde2fa36ac6ccb9647ce27bdbe841e5b6d0209931cf93c6ea56b09->leave($__internal_f3026c6e56dde2fa36ac6ccb9647ce27bdbe841e5b6d0209931cf93c6ea56b09_prof);

        
        $__internal_366979d040e35474264265b8063db406ff8127d69a375705e00bb401111259eb->leave($__internal_366979d040e35474264265b8063db406ff8127d69a375705e00bb401111259eb_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9b19b58e294b05de12c39ccd677d8083374b09c6d3f7457bcc48ded32cc16c55 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b19b58e294b05de12c39ccd677d8083374b09c6d3f7457bcc48ded32cc16c55->enter($__internal_9b19b58e294b05de12c39ccd677d8083374b09c6d3f7457bcc48ded32cc16c55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_a66060fc78f5e8a1b30c756fc311a25eeb5cfd73b4ec9bb38c150093a186cad7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a66060fc78f5e8a1b30c756fc311a25eeb5cfd73b4ec9bb38c150093a186cad7->enter($__internal_a66060fc78f5e8a1b30c756fc311a25eeb5cfd73b4ec9bb38c150093a186cad7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_a66060fc78f5e8a1b30c756fc311a25eeb5cfd73b4ec9bb38c150093a186cad7->leave($__internal_a66060fc78f5e8a1b30c756fc311a25eeb5cfd73b4ec9bb38c150093a186cad7_prof);

        
        $__internal_9b19b58e294b05de12c39ccd677d8083374b09c6d3f7457bcc48ded32cc16c55->leave($__internal_9b19b58e294b05de12c39ccd677d8083374b09c6d3f7457bcc48ded32cc16c55_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
{% include \"@FOSUser/Registration/register_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:register.html.twig", "/Users/Rachid/SymfonyProjects/api-lab/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/register.html.twig");
    }
}
