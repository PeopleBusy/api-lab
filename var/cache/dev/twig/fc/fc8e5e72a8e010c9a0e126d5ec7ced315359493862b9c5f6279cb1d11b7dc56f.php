<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_7f41615987befb93711f5e32edec08a3697f114c6f11a92f8d6359964b9eef4f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_6ad7a00a8d290b5dac54c4d63e835254d31fd38c922f6b5802fa9c44fd60ac43 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ad7a00a8d290b5dac54c4d63e835254d31fd38c922f6b5802fa9c44fd60ac43->enter($__internal_6ad7a00a8d290b5dac54c4d63e835254d31fd38c922f6b5802fa9c44fd60ac43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $__internal_1e8264bb021cb1ef145fe364353e4f36fb31e1572fefd6608c0edd0c996a24f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e8264bb021cb1ef145fe364353e4f36fb31e1572fefd6608c0edd0c996a24f9->enter($__internal_1e8264bb021cb1ef145fe364353e4f36fb31e1572fefd6608c0edd0c996a24f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6ad7a00a8d290b5dac54c4d63e835254d31fd38c922f6b5802fa9c44fd60ac43->leave($__internal_6ad7a00a8d290b5dac54c4d63e835254d31fd38c922f6b5802fa9c44fd60ac43_prof);

        
        $__internal_1e8264bb021cb1ef145fe364353e4f36fb31e1572fefd6608c0edd0c996a24f9->leave($__internal_1e8264bb021cb1ef145fe364353e4f36fb31e1572fefd6608c0edd0c996a24f9_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4d3a509ae5ec912010db64db0668bc0cf30c68169edb7981a638816a2eeed182 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d3a509ae5ec912010db64db0668bc0cf30c68169edb7981a638816a2eeed182->enter($__internal_4d3a509ae5ec912010db64db0668bc0cf30c68169edb7981a638816a2eeed182_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_747fcc6f05935b099f523e9c824cf401cb97d8fbd4a76fc4caa043d1d01c0a44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_747fcc6f05935b099f523e9c824cf401cb97d8fbd4a76fc4caa043d1d01c0a44->enter($__internal_747fcc6f05935b099f523e9c824cf401cb97d8fbd4a76fc4caa043d1d01c0a44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_747fcc6f05935b099f523e9c824cf401cb97d8fbd4a76fc4caa043d1d01c0a44->leave($__internal_747fcc6f05935b099f523e9c824cf401cb97d8fbd4a76fc4caa043d1d01c0a44_prof);

        
        $__internal_4d3a509ae5ec912010db64db0668bc0cf30c68169edb7981a638816a2eeed182->leave($__internal_4d3a509ae5ec912010db64db0668bc0cf30c68169edb7981a638816a2eeed182_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
{% include \"@FOSUser/Group/new_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:new.html.twig", "/Users/Rachid/SymfonyProjects/api-lab/vendor/friendsofsymfony/user-bundle/Resources/views/Group/new.html.twig");
    }
}
