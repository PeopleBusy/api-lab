<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_94c83e201dad51c7f46770d1197e72e456d3a0ffbcab5befe608063004d2d252 extends Twig_Template
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
        $__internal_974d5f218bd6e6a6792c0c16ad098ea3aad9e642d0358fd7f3d00133603b0dbc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_974d5f218bd6e6a6792c0c16ad098ea3aad9e642d0358fd7f3d00133603b0dbc->enter($__internal_974d5f218bd6e6a6792c0c16ad098ea3aad9e642d0358fd7f3d00133603b0dbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_72a08e2cacf3aa48ace64fa6888211bf5fc5d6d516df01e3e085aca722fc1272 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72a08e2cacf3aa48ace64fa6888211bf5fc5d6d516df01e3e085aca722fc1272->enter($__internal_72a08e2cacf3aa48ace64fa6888211bf5fc5d6d516df01e3e085aca722fc1272_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_974d5f218bd6e6a6792c0c16ad098ea3aad9e642d0358fd7f3d00133603b0dbc->leave($__internal_974d5f218bd6e6a6792c0c16ad098ea3aad9e642d0358fd7f3d00133603b0dbc_prof);

        
        $__internal_72a08e2cacf3aa48ace64fa6888211bf5fc5d6d516df01e3e085aca722fc1272->leave($__internal_72a08e2cacf3aa48ace64fa6888211bf5fc5d6d516df01e3e085aca722fc1272_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/Users/Rachid/SymfonyProjects/api-lab/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
