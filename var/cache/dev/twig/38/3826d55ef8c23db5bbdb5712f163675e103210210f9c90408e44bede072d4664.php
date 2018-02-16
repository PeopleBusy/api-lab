<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_a29cbb9861e2a045fddfbd98072be060a4e6e598e486f62389c51ef81615a8a1 extends Twig_Template
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
        $__internal_258a4f4ac3170032bc1c0945bff7026904414702a164627313d5cdd204f24379 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_258a4f4ac3170032bc1c0945bff7026904414702a164627313d5cdd204f24379->enter($__internal_258a4f4ac3170032bc1c0945bff7026904414702a164627313d5cdd204f24379_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_c354794678b6daebce68048ed33fcfd34b64034c4490841531b8394cbc8a4c45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c354794678b6daebce68048ed33fcfd34b64034c4490841531b8394cbc8a4c45->enter($__internal_c354794678b6daebce68048ed33fcfd34b64034c4490841531b8394cbc8a4c45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_258a4f4ac3170032bc1c0945bff7026904414702a164627313d5cdd204f24379->leave($__internal_258a4f4ac3170032bc1c0945bff7026904414702a164627313d5cdd204f24379_prof);

        
        $__internal_c354794678b6daebce68048ed33fcfd34b64034c4490841531b8394cbc8a4c45->leave($__internal_c354794678b6daebce68048ed33fcfd34b64034c4490841531b8394cbc8a4c45_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/Users/Rachid/SymfonyProjects/api-lab/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/radio_widget.html.php");
    }
}
