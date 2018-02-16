<?php

/* FOSUserBundle:ChangePassword:change_password.html.twig */
class __TwigTemplate_776504d998f3e2483df6063252be207ffc9642cb0e5ca56ea66777482610d0e9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 1);
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
        $__internal_1e5c233c622d0403ebee730ed0ab2d897ef6484c18912ffa0fb44d1684a124d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e5c233c622d0403ebee730ed0ab2d897ef6484c18912ffa0fb44d1684a124d4->enter($__internal_1e5c233c622d0403ebee730ed0ab2d897ef6484c18912ffa0fb44d1684a124d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $__internal_bde2023b5a84d044302ea480a9e0b5aebc86becdf5e6479e9f841e031712c88f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bde2023b5a84d044302ea480a9e0b5aebc86becdf5e6479e9f841e031712c88f->enter($__internal_bde2023b5a84d044302ea480a9e0b5aebc86becdf5e6479e9f841e031712c88f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1e5c233c622d0403ebee730ed0ab2d897ef6484c18912ffa0fb44d1684a124d4->leave($__internal_1e5c233c622d0403ebee730ed0ab2d897ef6484c18912ffa0fb44d1684a124d4_prof);

        
        $__internal_bde2023b5a84d044302ea480a9e0b5aebc86becdf5e6479e9f841e031712c88f->leave($__internal_bde2023b5a84d044302ea480a9e0b5aebc86becdf5e6479e9f841e031712c88f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b6612f7268aeef78ff78097d8ae8c273d6aff48af012e6d956073c41d30f16f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6612f7268aeef78ff78097d8ae8c273d6aff48af012e6d956073c41d30f16f2->enter($__internal_b6612f7268aeef78ff78097d8ae8c273d6aff48af012e6d956073c41d30f16f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_6ee7f28f939b197263d6eefc692e9ccbc5188a58ceeffbae96fe5cfd4cf4cca8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ee7f28f939b197263d6eefc692e9ccbc5188a58ceeffbae96fe5cfd4cf4cca8->enter($__internal_6ee7f28f939b197263d6eefc692e9ccbc5188a58ceeffbae96fe5cfd4cf4cca8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_6ee7f28f939b197263d6eefc692e9ccbc5188a58ceeffbae96fe5cfd4cf4cca8->leave($__internal_6ee7f28f939b197263d6eefc692e9ccbc5188a58ceeffbae96fe5cfd4cf4cca8_prof);

        
        $__internal_b6612f7268aeef78ff78097d8ae8c273d6aff48af012e6d956073c41d30f16f2->leave($__internal_b6612f7268aeef78ff78097d8ae8c273d6aff48af012e6d956073c41d30f16f2_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:change_password.html.twig";
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
{% include \"@FOSUser/ChangePassword/change_password_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:ChangePassword:change_password.html.twig", "/Users/Rachid/SymfonyProjects/api-lab/vendor/friendsofsymfony/user-bundle/Resources/views/ChangePassword/change_password.html.twig");
    }
}
