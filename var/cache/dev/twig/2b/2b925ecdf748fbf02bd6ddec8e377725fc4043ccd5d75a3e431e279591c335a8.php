<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_4bdfbf40948d9cc337150a7d4bbc19648a6b6aa57b0ba0338d47a4c5012c2da2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_0ed12f8c9597ab057fe214786b2d5096935af9afc976ec09a7845da5637abb23 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ed12f8c9597ab057fe214786b2d5096935af9afc976ec09a7845da5637abb23->enter($__internal_0ed12f8c9597ab057fe214786b2d5096935af9afc976ec09a7845da5637abb23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $__internal_2dfba2ec1ac7f2b449c7eb0d3c478c7a173166669a5d00d51fc40e30dd24a757 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2dfba2ec1ac7f2b449c7eb0d3c478c7a173166669a5d00d51fc40e30dd24a757->enter($__internal_2dfba2ec1ac7f2b449c7eb0d3c478c7a173166669a5d00d51fc40e30dd24a757_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0ed12f8c9597ab057fe214786b2d5096935af9afc976ec09a7845da5637abb23->leave($__internal_0ed12f8c9597ab057fe214786b2d5096935af9afc976ec09a7845da5637abb23_prof);

        
        $__internal_2dfba2ec1ac7f2b449c7eb0d3c478c7a173166669a5d00d51fc40e30dd24a757->leave($__internal_2dfba2ec1ac7f2b449c7eb0d3c478c7a173166669a5d00d51fc40e30dd24a757_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8fa1266ef8f30962014f57c09d9eead4dd5cb20962ffa0734138932a05448fc3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8fa1266ef8f30962014f57c09d9eead4dd5cb20962ffa0734138932a05448fc3->enter($__internal_8fa1266ef8f30962014f57c09d9eead4dd5cb20962ffa0734138932a05448fc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_c688c03e8ef251710f55cc0156def57f3b33ebdc913e83f4f3340e0bd6da8192 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c688c03e8ef251710f55cc0156def57f3b33ebdc913e83f4f3340e0bd6da8192->enter($__internal_c688c03e8ef251710f55cc0156def57f3b33ebdc913e83f4f3340e0bd6da8192_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_c688c03e8ef251710f55cc0156def57f3b33ebdc913e83f4f3340e0bd6da8192->leave($__internal_c688c03e8ef251710f55cc0156def57f3b33ebdc913e83f4f3340e0bd6da8192_prof);

        
        $__internal_8fa1266ef8f30962014f57c09d9eead4dd5cb20962ffa0734138932a05448fc3->leave($__internal_8fa1266ef8f30962014f57c09d9eead4dd5cb20962ffa0734138932a05448fc3_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
{% include \"@FOSUser/Group/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:edit.html.twig", "/Users/Rachid/SymfonyProjects/api-lab/vendor/friendsofsymfony/user-bundle/Resources/views/Group/edit.html.twig");
    }
}
