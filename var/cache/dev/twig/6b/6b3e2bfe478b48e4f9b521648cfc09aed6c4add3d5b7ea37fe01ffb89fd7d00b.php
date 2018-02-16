<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_390fdcdf00dc930247b282e1a6785012712c329751bb93f0369c9b9484c652cf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_9f26aeadd0b4abc54c4e22e808f1cf504844100f7fe9c40404695530b4d64635 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f26aeadd0b4abc54c4e22e808f1cf504844100f7fe9c40404695530b4d64635->enter($__internal_9f26aeadd0b4abc54c4e22e808f1cf504844100f7fe9c40404695530b4d64635_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $__internal_9730218b2915047ff68d48afc7caaaafc52027284ca82ed7deef9c9f7c2d5a34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9730218b2915047ff68d48afc7caaaafc52027284ca82ed7deef9c9f7c2d5a34->enter($__internal_9730218b2915047ff68d48afc7caaaafc52027284ca82ed7deef9c9f7c2d5a34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9f26aeadd0b4abc54c4e22e808f1cf504844100f7fe9c40404695530b4d64635->leave($__internal_9f26aeadd0b4abc54c4e22e808f1cf504844100f7fe9c40404695530b4d64635_prof);

        
        $__internal_9730218b2915047ff68d48afc7caaaafc52027284ca82ed7deef9c9f7c2d5a34->leave($__internal_9730218b2915047ff68d48afc7caaaafc52027284ca82ed7deef9c9f7c2d5a34_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ee6337b57961504158f271868b626fcc27fa14971b499dce9d8b8640fd432614 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee6337b57961504158f271868b626fcc27fa14971b499dce9d8b8640fd432614->enter($__internal_ee6337b57961504158f271868b626fcc27fa14971b499dce9d8b8640fd432614_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_3596bb362458c1b7c553a8a03135813704cc874cb5305778e1ab31ce037b2ca0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3596bb362458c1b7c553a8a03135813704cc874cb5305778e1ab31ce037b2ca0->enter($__internal_3596bb362458c1b7c553a8a03135813704cc874cb5305778e1ab31ce037b2ca0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_3596bb362458c1b7c553a8a03135813704cc874cb5305778e1ab31ce037b2ca0->leave($__internal_3596bb362458c1b7c553a8a03135813704cc874cb5305778e1ab31ce037b2ca0_prof);

        
        $__internal_ee6337b57961504158f271868b626fcc27fa14971b499dce9d8b8640fd432614->leave($__internal_ee6337b57961504158f271868b626fcc27fa14971b499dce9d8b8640fd432614_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
{% include \"@FOSUser/Profile/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:show.html.twig", "/Users/Rachid/SymfonyProjects/api-lab/vendor/friendsofsymfony/user-bundle/Resources/views/Profile/show.html.twig");
    }
}
