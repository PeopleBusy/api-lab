<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_de2aca0ae9ad5bb27e4cc62a382afdd2a3b2e15db6710043d4e759f0f791239e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e54db1ac05f24af7614f8a7e5e752fb16e290f6000d0c49ad57db42d6c37079e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e54db1ac05f24af7614f8a7e5e752fb16e290f6000d0c49ad57db42d6c37079e->enter($__internal_e54db1ac05f24af7614f8a7e5e752fb16e290f6000d0c49ad57db42d6c37079e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_e92fe86bc5ca0e9946c989542860ee17b1681f807123a9e166b28e7476705b3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e92fe86bc5ca0e9946c989542860ee17b1681f807123a9e166b28e7476705b3f->enter($__internal_e92fe86bc5ca0e9946c989542860ee17b1681f807123a9e166b28e7476705b3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_e54db1ac05f24af7614f8a7e5e752fb16e290f6000d0c49ad57db42d6c37079e->leave($__internal_e54db1ac05f24af7614f8a7e5e752fb16e290f6000d0c49ad57db42d6c37079e_prof);

        
        $__internal_e92fe86bc5ca0e9946c989542860ee17b1681f807123a9e166b28e7476705b3f->leave($__internal_e92fe86bc5ca0e9946c989542860ee17b1681f807123a9e166b28e7476705b3f_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_009e3f91d5954d68947e2e72c2de594efb5061d35210498b3ae11c6aef841217 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_009e3f91d5954d68947e2e72c2de594efb5061d35210498b3ae11c6aef841217->enter($__internal_009e3f91d5954d68947e2e72c2de594efb5061d35210498b3ae11c6aef841217_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_b21e9bc8459c6567290ffe9992f3f976abab5b435321f473f4a13f240d1e0927 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b21e9bc8459c6567290ffe9992f3f976abab5b435321f473f4a13f240d1e0927->enter($__internal_b21e9bc8459c6567290ffe9992f3f976abab5b435321f473f4a13f240d1e0927_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_b21e9bc8459c6567290ffe9992f3f976abab5b435321f473f4a13f240d1e0927->leave($__internal_b21e9bc8459c6567290ffe9992f3f976abab5b435321f473f4a13f240d1e0927_prof);

        
        $__internal_009e3f91d5954d68947e2e72c2de594efb5061d35210498b3ae11c6aef841217->leave($__internal_009e3f91d5954d68947e2e72c2de594efb5061d35210498b3ae11c6aef841217_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/Users/Rachid/SymfonyProjects/api-lab/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
