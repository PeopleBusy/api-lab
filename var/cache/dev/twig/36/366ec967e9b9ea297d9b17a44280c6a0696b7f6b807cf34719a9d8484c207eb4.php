<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_2d6545a6b51215e1be6bc3fef8cd54bb14a07cd7ed184983fa7fe80eaac964cb extends Twig_Template
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
        $__internal_bfdc9fd4d8ae278c22eb34ae52126319fae7bcc69bdd4b378d52579e9a653772 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bfdc9fd4d8ae278c22eb34ae52126319fae7bcc69bdd4b378d52579e9a653772->enter($__internal_bfdc9fd4d8ae278c22eb34ae52126319fae7bcc69bdd4b378d52579e9a653772_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_1ff15f48583bb3e1f91384f627e2eef776ed0ead141f0e1c785089afbccd22e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ff15f48583bb3e1f91384f627e2eef776ed0ead141f0e1c785089afbccd22e3->enter($__internal_1ff15f48583bb3e1f91384f627e2eef776ed0ead141f0e1c785089afbccd22e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_bfdc9fd4d8ae278c22eb34ae52126319fae7bcc69bdd4b378d52579e9a653772->leave($__internal_bfdc9fd4d8ae278c22eb34ae52126319fae7bcc69bdd4b378d52579e9a653772_prof);

        
        $__internal_1ff15f48583bb3e1f91384f627e2eef776ed0ead141f0e1c785089afbccd22e3->leave($__internal_1ff15f48583bb3e1f91384f627e2eef776ed0ead141f0e1c785089afbccd22e3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/Users/Rachid/SymfonyProjects/api-lab/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}
