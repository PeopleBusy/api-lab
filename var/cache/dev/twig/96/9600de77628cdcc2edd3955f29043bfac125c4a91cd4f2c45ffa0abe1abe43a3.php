<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_7b88be1cf3a833bef20be636517b08eec6767b6f258e518feb5b2eff18c06ec8 extends Twig_Template
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
        $__internal_a558a0db086e36e5cfec7bfd35f110b08ec2c45f870e9b78e0c7a094f7342b54 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a558a0db086e36e5cfec7bfd35f110b08ec2c45f870e9b78e0c7a094f7342b54->enter($__internal_a558a0db086e36e5cfec7bfd35f110b08ec2c45f870e9b78e0c7a094f7342b54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_569bcb9628e35e13fe680e90abea4b122148a0923cc5c850ddd92a1f981064e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_569bcb9628e35e13fe680e90abea4b122148a0923cc5c850ddd92a1f981064e1->enter($__internal_569bcb9628e35e13fe680e90abea4b122148a0923cc5c850ddd92a1f981064e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_a558a0db086e36e5cfec7bfd35f110b08ec2c45f870e9b78e0c7a094f7342b54->leave($__internal_a558a0db086e36e5cfec7bfd35f110b08ec2c45f870e9b78e0c7a094f7342b54_prof);

        
        $__internal_569bcb9628e35e13fe680e90abea4b122148a0923cc5c850ddd92a1f981064e1->leave($__internal_569bcb9628e35e13fe680e90abea4b122148a0923cc5c850ddd92a1f981064e1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/Users/Rachid/SymfonyProjects/api-lab/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}
