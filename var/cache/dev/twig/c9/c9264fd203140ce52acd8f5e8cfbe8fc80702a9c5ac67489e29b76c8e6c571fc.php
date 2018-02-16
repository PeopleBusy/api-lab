<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_bc4080ecd81e498407de05cb890482c29836e3b35cde139f669985367d379bc6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_aff49795b8f0e4a61e4b7fe8117e27735b68905b9f279b1b5f21cb21c2a7aa1f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aff49795b8f0e4a61e4b7fe8117e27735b68905b9f279b1b5f21cb21c2a7aa1f->enter($__internal_aff49795b8f0e4a61e4b7fe8117e27735b68905b9f279b1b5f21cb21c2a7aa1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $__internal_0ee960d68c5ae943e578b7005cd6a2c9b90ceb100bdfdf2a5bdacc21e5fc48a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ee960d68c5ae943e578b7005cd6a2c9b90ceb100bdfdf2a5bdacc21e5fc48a8->enter($__internal_0ee960d68c5ae943e578b7005cd6a2c9b90ceb100bdfdf2a5bdacc21e5fc48a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aff49795b8f0e4a61e4b7fe8117e27735b68905b9f279b1b5f21cb21c2a7aa1f->leave($__internal_aff49795b8f0e4a61e4b7fe8117e27735b68905b9f279b1b5f21cb21c2a7aa1f_prof);

        
        $__internal_0ee960d68c5ae943e578b7005cd6a2c9b90ceb100bdfdf2a5bdacc21e5fc48a8->leave($__internal_0ee960d68c5ae943e578b7005cd6a2c9b90ceb100bdfdf2a5bdacc21e5fc48a8_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3faadb5d3e070213b0edca18688810ecc1c527959828cea8a221d2302d02d266 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3faadb5d3e070213b0edca18688810ecc1c527959828cea8a221d2302d02d266->enter($__internal_3faadb5d3e070213b0edca18688810ecc1c527959828cea8a221d2302d02d266_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_a2779597fe10cc93fd5b4fe9f03f9720eefcdf969b0cdc66df6d7f06ebbc3636 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2779597fe10cc93fd5b4fe9f03f9720eefcdf969b0cdc66df6d7f06ebbc3636->enter($__internal_a2779597fe10cc93fd5b4fe9f03f9720eefcdf969b0cdc66df6d7f06ebbc3636_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_a2779597fe10cc93fd5b4fe9f03f9720eefcdf969b0cdc66df6d7f06ebbc3636->leave($__internal_a2779597fe10cc93fd5b4fe9f03f9720eefcdf969b0cdc66df6d7f06ebbc3636_prof);

        
        $__internal_3faadb5d3e070213b0edca18688810ecc1c527959828cea8a221d2302d02d266->leave($__internal_3faadb5d3e070213b0edca18688810ecc1c527959828cea8a221d2302d02d266_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
{% include \"@FOSUser/Group/list_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:list.html.twig", "/Users/Rachid/SymfonyProjects/api-lab/vendor/friendsofsymfony/user-bundle/Resources/views/Group/list.html.twig");
    }
}
