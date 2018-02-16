<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_166ae53c7b5b1ff9d59478aeb01c5794d23f0fe43fe5fddbafa5f2c339df5e50 extends Twig_Template
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
        $__internal_d0d32f61ee8fb2c1cd6dd6049b56b46921472a2927bb0d949ef1ae48453587e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0d32f61ee8fb2c1cd6dd6049b56b46921472a2927bb0d949ef1ae48453587e7->enter($__internal_d0d32f61ee8fb2c1cd6dd6049b56b46921472a2927bb0d949ef1ae48453587e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_f656709e54b9d31d6f2979dbb83f53c4f2ab86142fbfaff4c85cef5bd55fc8d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f656709e54b9d31d6f2979dbb83f53c4f2ab86142fbfaff4c85cef5bd55fc8d4->enter($__internal_f656709e54b9d31d6f2979dbb83f53c4f2ab86142fbfaff4c85cef5bd55fc8d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_d0d32f61ee8fb2c1cd6dd6049b56b46921472a2927bb0d949ef1ae48453587e7->leave($__internal_d0d32f61ee8fb2c1cd6dd6049b56b46921472a2927bb0d949ef1ae48453587e7_prof);

        
        $__internal_f656709e54b9d31d6f2979dbb83f53c4f2ab86142fbfaff4c85cef5bd55fc8d4->leave($__internal_f656709e54b9d31d6f2979dbb83f53c4f2ab86142fbfaff4c85cef5bd55fc8d4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
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
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "/Users/Rachid/SymfonyProjects/api-lab/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/datetime_widget.html.php");
    }
}
