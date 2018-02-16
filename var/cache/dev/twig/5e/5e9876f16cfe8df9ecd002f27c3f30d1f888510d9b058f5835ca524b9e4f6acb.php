<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_96ca24a00285cebc7fd52bd8e62efe8a6c7ad97ef3157eb3aa41e6346e531016 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9ed66003923b0572aff218eff73edae3ae160d70b419eff8d3d323e7ec4e8b79 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ed66003923b0572aff218eff73edae3ae160d70b419eff8d3d323e7ec4e8b79->enter($__internal_9ed66003923b0572aff218eff73edae3ae160d70b419eff8d3d323e7ec4e8b79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_e28736d57649e8a20c601e047b243b3dcfe04c5ba3654eff30c38e82d46f8ea6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e28736d57649e8a20c601e047b243b3dcfe04c5ba3654eff30c38e82d46f8ea6->enter($__internal_e28736d57649e8a20c601e047b243b3dcfe04c5ba3654eff30c38e82d46f8ea6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_9ed66003923b0572aff218eff73edae3ae160d70b419eff8d3d323e7ec4e8b79->leave($__internal_9ed66003923b0572aff218eff73edae3ae160d70b419eff8d3d323e7ec4e8b79_prof);

        
        $__internal_e28736d57649e8a20c601e047b243b3dcfe04c5ba3654eff30c38e82d46f8ea6->leave($__internal_e28736d57649e8a20c601e047b243b3dcfe04c5ba3654eff30c38e82d46f8ea6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/Users/Rachid/SymfonyProjects/api-lab/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
