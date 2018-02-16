<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_64bccfecc5c8cb6002d6e1804274edd23c73231437e809759a6906bcaec7d299 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_6d7367baf61e867099c11dea5cb4c29b6ee9441bbb8785aeec0bba8ae56c3c51 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d7367baf61e867099c11dea5cb4c29b6ee9441bbb8785aeec0bba8ae56c3c51->enter($__internal_6d7367baf61e867099c11dea5cb4c29b6ee9441bbb8785aeec0bba8ae56c3c51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $__internal_b02902bd1fcf829c8252db502e3956b2689f069abfbef5e597b43e4c4d3f49cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b02902bd1fcf829c8252db502e3956b2689f069abfbef5e597b43e4c4d3f49cf->enter($__internal_b02902bd1fcf829c8252db502e3956b2689f069abfbef5e597b43e4c4d3f49cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6d7367baf61e867099c11dea5cb4c29b6ee9441bbb8785aeec0bba8ae56c3c51->leave($__internal_6d7367baf61e867099c11dea5cb4c29b6ee9441bbb8785aeec0bba8ae56c3c51_prof);

        
        $__internal_b02902bd1fcf829c8252db502e3956b2689f069abfbef5e597b43e4c4d3f49cf->leave($__internal_b02902bd1fcf829c8252db502e3956b2689f069abfbef5e597b43e4c4d3f49cf_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_41c26c151ce5261b69b9bc9154f988b3f165b3ce8f92f340a00692ea5a87714f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_41c26c151ce5261b69b9bc9154f988b3f165b3ce8f92f340a00692ea5a87714f->enter($__internal_41c26c151ce5261b69b9bc9154f988b3f165b3ce8f92f340a00692ea5a87714f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_24d251c817faf921ba5d4c8d92b755f49a25575c2c9eb8b9fec9ab2c93f74982 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24d251c817faf921ba5d4c8d92b755f49a25575c2c9eb8b9fec9ab2c93f74982->enter($__internal_24d251c817faf921ba5d4c8d92b755f49a25575c2c9eb8b9fec9ab2c93f74982_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_24d251c817faf921ba5d4c8d92b755f49a25575c2c9eb8b9fec9ab2c93f74982->leave($__internal_24d251c817faf921ba5d4c8d92b755f49a25575c2c9eb8b9fec9ab2c93f74982_prof);

        
        $__internal_41c26c151ce5261b69b9bc9154f988b3f165b3ce8f92f340a00692ea5a87714f->leave($__internal_41c26c151ce5261b69b9bc9154f988b3f165b3ce8f92f340a00692ea5a87714f_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
{% include \"@FOSUser/Resetting/request_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:request.html.twig", "/Users/Rachid/SymfonyProjects/api-lab/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/request.html.twig");
    }
}
