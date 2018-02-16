<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_54f46b88e6cff6d98650d09827fa426249822406e5256fe9556caa0f27d9be56 extends Twig_Template
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
        $__internal_c0c86b7c5ea09cebf671487a4eba6672cc6ea4e57cbb3c47666d54d6999c8e08 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0c86b7c5ea09cebf671487a4eba6672cc6ea4e57cbb3c47666d54d6999c8e08->enter($__internal_c0c86b7c5ea09cebf671487a4eba6672cc6ea4e57cbb3c47666d54d6999c8e08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_21be407cdcdaaf26ff517c3aeae383b7f79a7165eb96b260df0a4563134ac9d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21be407cdcdaaf26ff517c3aeae383b7f79a7165eb96b260df0a4563134ac9d1->enter($__internal_21be407cdcdaaf26ff517c3aeae383b7f79a7165eb96b260df0a4563134ac9d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_c0c86b7c5ea09cebf671487a4eba6672cc6ea4e57cbb3c47666d54d6999c8e08->leave($__internal_c0c86b7c5ea09cebf671487a4eba6672cc6ea4e57cbb3c47666d54d6999c8e08_prof);

        
        $__internal_21be407cdcdaaf26ff517c3aeae383b7f79a7165eb96b260df0a4563134ac9d1->leave($__internal_21be407cdcdaaf26ff517c3aeae383b7f79a7165eb96b260df0a4563134ac9d1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "/Users/Rachid/SymfonyProjects/api-lab/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/percent_widget.html.php");
    }
}
