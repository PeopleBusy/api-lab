<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_b1c110410a2761bd0e5594c53d1332562ed2a3126ded60b42960c373c9826159 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_8224cb616cfa8123e166c3fd1217926895ea0e2b3966b946fc50f1d000f53157 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8224cb616cfa8123e166c3fd1217926895ea0e2b3966b946fc50f1d000f53157->enter($__internal_8224cb616cfa8123e166c3fd1217926895ea0e2b3966b946fc50f1d000f53157_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $__internal_5e5c097572f3a4f4c0db058b3ba8731252174003d5e5154cd1c08cdc02915833 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e5c097572f3a4f4c0db058b3ba8731252174003d5e5154cd1c08cdc02915833->enter($__internal_5e5c097572f3a4f4c0db058b3ba8731252174003d5e5154cd1c08cdc02915833_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8224cb616cfa8123e166c3fd1217926895ea0e2b3966b946fc50f1d000f53157->leave($__internal_8224cb616cfa8123e166c3fd1217926895ea0e2b3966b946fc50f1d000f53157_prof);

        
        $__internal_5e5c097572f3a4f4c0db058b3ba8731252174003d5e5154cd1c08cdc02915833->leave($__internal_5e5c097572f3a4f4c0db058b3ba8731252174003d5e5154cd1c08cdc02915833_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9440b797dad3eec1bbc7453de3a13ce937d46e972264b53a3dd3ef253593e6da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9440b797dad3eec1bbc7453de3a13ce937d46e972264b53a3dd3ef253593e6da->enter($__internal_9440b797dad3eec1bbc7453de3a13ce937d46e972264b53a3dd3ef253593e6da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_46c8b71d747abf96de3769eadb0b9452fe98a3a347533a0f4053928ddd46955f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46c8b71d747abf96de3769eadb0b9452fe98a3a347533a0f4053928ddd46955f->enter($__internal_46c8b71d747abf96de3769eadb0b9452fe98a3a347533a0f4053928ddd46955f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_46c8b71d747abf96de3769eadb0b9452fe98a3a347533a0f4053928ddd46955f->leave($__internal_46c8b71d747abf96de3769eadb0b9452fe98a3a347533a0f4053928ddd46955f_prof);

        
        $__internal_9440b797dad3eec1bbc7453de3a13ce937d46e972264b53a3dd3ef253593e6da->leave($__internal_9440b797dad3eec1bbc7453de3a13ce937d46e972264b53a3dd3ef253593e6da_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
{% include \"@FOSUser/Group/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:show.html.twig", "/Users/Rachid/SymfonyProjects/api-lab/vendor/friendsofsymfony/user-bundle/Resources/views/Group/show.html.twig");
    }
}
