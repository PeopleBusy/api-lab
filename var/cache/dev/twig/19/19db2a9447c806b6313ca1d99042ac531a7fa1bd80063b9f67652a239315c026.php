<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_57defbfaf9e20e27e31d800d235298eacc8de6b57f286b7646fe0baf27426f7a extends Twig_Template
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
        $__internal_0fd7bf10d59f8d5f5b7aa85b22edd2942ac40b85669767f95c8000bccaf5e7d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0fd7bf10d59f8d5f5b7aa85b22edd2942ac40b85669767f95c8000bccaf5e7d3->enter($__internal_0fd7bf10d59f8d5f5b7aa85b22edd2942ac40b85669767f95c8000bccaf5e7d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_aa7c364ce2dc28c3c8f839736ab895924afeb936084bbe5da48442af70da1cc0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa7c364ce2dc28c3c8f839736ab895924afeb936084bbe5da48442af70da1cc0->enter($__internal_aa7c364ce2dc28c3c8f839736ab895924afeb936084bbe5da48442af70da1cc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_0fd7bf10d59f8d5f5b7aa85b22edd2942ac40b85669767f95c8000bccaf5e7d3->leave($__internal_0fd7bf10d59f8d5f5b7aa85b22edd2942ac40b85669767f95c8000bccaf5e7d3_prof);

        
        $__internal_aa7c364ce2dc28c3c8f839736ab895924afeb936084bbe5da48442af70da1cc0->leave($__internal_aa7c364ce2dc28c3c8f839736ab895924afeb936084bbe5da48442af70da1cc0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/Users/Rachid/SymfonyProjects/api-lab/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
