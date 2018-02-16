<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_c2a21f58267f3befbc0e5bcdb11b3119fcc853d666b2f19124f466ad4bc07a2d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
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
        $__internal_e6348984cc842e72af54406877c1a7695391ac4b27736ea8f1a8bc094ac302c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6348984cc842e72af54406877c1a7695391ac4b27736ea8f1a8bc094ac302c3->enter($__internal_e6348984cc842e72af54406877c1a7695391ac4b27736ea8f1a8bc094ac302c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $__internal_ee8558570a4d35a3eae1e668af591ec3a6be6639b1ae0dcc5a5aa94d58d83a66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee8558570a4d35a3eae1e668af591ec3a6be6639b1ae0dcc5a5aa94d58d83a66->enter($__internal_ee8558570a4d35a3eae1e668af591ec3a6be6639b1ae0dcc5a5aa94d58d83a66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e6348984cc842e72af54406877c1a7695391ac4b27736ea8f1a8bc094ac302c3->leave($__internal_e6348984cc842e72af54406877c1a7695391ac4b27736ea8f1a8bc094ac302c3_prof);

        
        $__internal_ee8558570a4d35a3eae1e668af591ec3a6be6639b1ae0dcc5a5aa94d58d83a66->leave($__internal_ee8558570a4d35a3eae1e668af591ec3a6be6639b1ae0dcc5a5aa94d58d83a66_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3f4c53895f5a517ef19ab6883e519e58c4c4e0cd6a3cae273f33d7bda4ed6f8f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f4c53895f5a517ef19ab6883e519e58c4c4e0cd6a3cae273f33d7bda4ed6f8f->enter($__internal_3f4c53895f5a517ef19ab6883e519e58c4c4e0cd6a3cae273f33d7bda4ed6f8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_711dde0b8e6572cc545dd8032048be2c977c132909da2e22774e11491d8db0cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_711dde0b8e6572cc545dd8032048be2c977c132909da2e22774e11491d8db0cd->enter($__internal_711dde0b8e6572cc545dd8032048be2c977c132909da2e22774e11491d8db0cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_711dde0b8e6572cc545dd8032048be2c977c132909da2e22774e11491d8db0cd->leave($__internal_711dde0b8e6572cc545dd8032048be2c977c132909da2e22774e11491d8db0cd_prof);

        
        $__internal_3f4c53895f5a517ef19ab6883e519e58c4c4e0cd6a3cae273f33d7bda4ed6f8f->leave($__internal_3f4c53895f5a517ef19ab6883e519e58c4c4e0cd6a3cae273f33d7bda4ed6f8f_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
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
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}
", "FOSUserBundle:Security:login.html.twig", "/Users/Rachid/SymfonyProjects/api-lab/vendor/friendsofsymfony/user-bundle/Resources/views/Security/login.html.twig");
    }
}
