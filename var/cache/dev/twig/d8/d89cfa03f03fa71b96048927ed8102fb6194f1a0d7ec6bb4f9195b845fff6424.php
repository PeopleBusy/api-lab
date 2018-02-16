<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_93a0cc4a962f4ec099f1ce87930bee0f32385849d088119306331ccec16e48dc extends Twig_Template
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
        $__internal_1c91baa00f5427533eb0b186250678f5a60a28359877b5d5c863d57a1c8730d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c91baa00f5427533eb0b186250678f5a60a28359877b5d5c863d57a1c8730d1->enter($__internal_1c91baa00f5427533eb0b186250678f5a60a28359877b5d5c863d57a1c8730d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_dcee0f24fb3909010d43ad9a4bf33ffe35a2c988c661ccacdd7fd6c1af8b6f7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dcee0f24fb3909010d43ad9a4bf33ffe35a2c988c661ccacdd7fd6c1af8b6f7f->enter($__internal_dcee0f24fb3909010d43ad9a4bf33ffe35a2c988c661ccacdd7fd6c1af8b6f7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_1c91baa00f5427533eb0b186250678f5a60a28359877b5d5c863d57a1c8730d1->leave($__internal_1c91baa00f5427533eb0b186250678f5a60a28359877b5d5c863d57a1c8730d1_prof);

        
        $__internal_dcee0f24fb3909010d43ad9a4bf33ffe35a2c988c661ccacdd7fd6c1af8b6f7f->leave($__internal_dcee0f24fb3909010d43ad9a4bf33ffe35a2c988c661ccacdd7fd6c1af8b6f7f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/Users/Rachid/SymfonyProjects/api-lab/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
