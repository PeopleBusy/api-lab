<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_595062b09cc92deacc75cc64ed13783d661860201d47322ad43cf348117d1767 extends Twig_Template
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
        $__internal_da8abdaa8e6799de7349e0306847e47c4fee71bcec755809c96ef24297ab02c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da8abdaa8e6799de7349e0306847e47c4fee71bcec755809c96ef24297ab02c6->enter($__internal_da8abdaa8e6799de7349e0306847e47c4fee71bcec755809c96ef24297ab02c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_2a1b4f9469bd839893f37244efe080385c95d36cc597520cb073f70a33dd8441 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a1b4f9469bd839893f37244efe080385c95d36cc597520cb073f70a33dd8441->enter($__internal_2a1b4f9469bd839893f37244efe080385c95d36cc597520cb073f70a33dd8441_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, ($context["widget"] ?? $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_da8abdaa8e6799de7349e0306847e47c4fee71bcec755809c96ef24297ab02c6->leave($__internal_da8abdaa8e6799de7349e0306847e47c4fee71bcec755809c96ef24297ab02c6_prof);

        
        $__internal_2a1b4f9469bd839893f37244efe080385c95d36cc597520cb073f70a33dd8441->leave($__internal_2a1b4f9469bd839893f37244efe080385c95d36cc597520cb073f70a33dd8441_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "/Users/Rachid/SymfonyProjects/api-lab/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/money_widget.html.php");
    }
}
