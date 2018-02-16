<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_2977d1e8e5fbed1bf54e03f6f5b48b5ba4d5b36f516a11a919239b1871a7e137 extends Twig_Template
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
        $__internal_8baec97e4f154d6e7d16e35321c29f790ef46cf43559d811407df023cc12cda9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8baec97e4f154d6e7d16e35321c29f790ef46cf43559d811407df023cc12cda9->enter($__internal_8baec97e4f154d6e7d16e35321c29f790ef46cf43559d811407df023cc12cda9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_4a0c207b8fd9adeb861c3c8db6d551f86c1d551e652b77d7ec6980b80771474a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a0c207b8fd9adeb861c3c8db6d551f86c1d551e652b77d7ec6980b80771474a->enter($__internal_4a0c207b8fd9adeb861c3c8db6d551f86c1d551e652b77d7ec6980b80771474a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_8baec97e4f154d6e7d16e35321c29f790ef46cf43559d811407df023cc12cda9->leave($__internal_8baec97e4f154d6e7d16e35321c29f790ef46cf43559d811407df023cc12cda9_prof);

        
        $__internal_4a0c207b8fd9adeb861c3c8db6d551f86c1d551e652b77d7ec6980b80771474a->leave($__internal_4a0c207b8fd9adeb861c3c8db6d551f86c1d551e652b77d7ec6980b80771474a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "/Users/Rachid/SymfonyProjects/api-lab/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget.html.php");
    }
}
