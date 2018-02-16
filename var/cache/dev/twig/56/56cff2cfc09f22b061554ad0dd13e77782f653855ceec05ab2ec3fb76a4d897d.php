<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_88665603f768b51a6abb3f3b5115cbd94efc624405fdbea78ed32b39987bb021 extends Twig_Template
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
        $__internal_148fa3686d70847003bbaba6770dac7e29160787cfa88bd295ed7d5facc2527b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_148fa3686d70847003bbaba6770dac7e29160787cfa88bd295ed7d5facc2527b->enter($__internal_148fa3686d70847003bbaba6770dac7e29160787cfa88bd295ed7d5facc2527b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_60049111431f1e05fa5945c8116562a69a880b286afd1ccf66d7bb5529783cc6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60049111431f1e05fa5945c8116562a69a880b286afd1ccf66d7bb5529783cc6->enter($__internal_60049111431f1e05fa5945c8116562a69a880b286afd1ccf66d7bb5529783cc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form); ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form); ?>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_148fa3686d70847003bbaba6770dac7e29160787cfa88bd295ed7d5facc2527b->leave($__internal_148fa3686d70847003bbaba6770dac7e29160787cfa88bd295ed7d5facc2527b_prof);

        
        $__internal_60049111431f1e05fa5945c8116562a69a880b286afd1ccf66d7bb5529783cc6->leave($__internal_60049111431f1e05fa5945c8116562a69a880b286afd1ccf66d7bb5529783cc6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form); ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form); ?>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "/Users/Rachid/SymfonyProjects/api-lab/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_row.html.php");
    }
}
