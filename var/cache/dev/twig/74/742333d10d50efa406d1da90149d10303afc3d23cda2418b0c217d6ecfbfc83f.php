<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_0149ec179c738a7257c965f8daee78e01bbb266df851a343ac038ed95a28c66e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_eab8c1d6281a8e377511bee54bdc950e7afc48b908f7017af96779c73dd608da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eab8c1d6281a8e377511bee54bdc950e7afc48b908f7017af96779c73dd608da->enter($__internal_eab8c1d6281a8e377511bee54bdc950e7afc48b908f7017af96779c73dd608da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $__internal_429021b27e3559b614e5ddc32834fca5a5b8e0f4a64c7802e57f6a31a4f02ba0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_429021b27e3559b614e5ddc32834fca5a5b8e0f4a64c7802e57f6a31a4f02ba0->enter($__internal_429021b27e3559b614e5ddc32834fca5a5b8e0f4a64c7802e57f6a31a4f02ba0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eab8c1d6281a8e377511bee54bdc950e7afc48b908f7017af96779c73dd608da->leave($__internal_eab8c1d6281a8e377511bee54bdc950e7afc48b908f7017af96779c73dd608da_prof);

        
        $__internal_429021b27e3559b614e5ddc32834fca5a5b8e0f4a64c7802e57f6a31a4f02ba0->leave($__internal_429021b27e3559b614e5ddc32834fca5a5b8e0f4a64c7802e57f6a31a4f02ba0_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_bc4a7f8d67506a6190dd9e4decfea791bff3b9a2689eabbfad073ae31eeed094 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc4a7f8d67506a6190dd9e4decfea791bff3b9a2689eabbfad073ae31eeed094->enter($__internal_bc4a7f8d67506a6190dd9e4decfea791bff3b9a2689eabbfad073ae31eeed094_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_b8640d59e47e6ccb2bc6816bed16204978cf33a51e5f520a50cd8fc85d5264af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8640d59e47e6ccb2bc6816bed16204978cf33a51e5f520a50cd8fc85d5264af->enter($__internal_b8640d59e47e6ccb2bc6816bed16204978cf33a51e5f520a50cd8fc85d5264af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_b8640d59e47e6ccb2bc6816bed16204978cf33a51e5f520a50cd8fc85d5264af->leave($__internal_b8640d59e47e6ccb2bc6816bed16204978cf33a51e5f520a50cd8fc85d5264af_prof);

        
        $__internal_bc4a7f8d67506a6190dd9e4decfea791bff3b9a2689eabbfad073ae31eeed094->leave($__internal_bc4a7f8d67506a6190dd9e4decfea791bff3b9a2689eabbfad073ae31eeed094_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
{% include \"@FOSUser/Profile/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:edit.html.twig", "/Users/Rachid/SymfonyProjects/api-lab/vendor/friendsofsymfony/user-bundle/Resources/views/Profile/edit.html.twig");
    }
}
