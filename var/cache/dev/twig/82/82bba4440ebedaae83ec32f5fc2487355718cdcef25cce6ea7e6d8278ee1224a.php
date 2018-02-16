<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_25c859d7e62ca592d328042d05978f592c840f5fef76d98627f19e7cc9d89f3a extends Twig_Template
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
        $__internal_ea70b8843e4ca1f4d5254ecd502cd2d2e0cc25dd73507c6607bc3ac70217f68b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea70b8843e4ca1f4d5254ecd502cd2d2e0cc25dd73507c6607bc3ac70217f68b->enter($__internal_ea70b8843e4ca1f4d5254ecd502cd2d2e0cc25dd73507c6607bc3ac70217f68b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_d943381fb4a8fbad8164bf856db4648de95385b6d5f9c8d9334ee648d181771f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d943381fb4a8fbad8164bf856db4648de95385b6d5f9c8d9334ee648d181771f->enter($__internal_d943381fb4a8fbad8164bf856db4648de95385b6d5f9c8d9334ee648d181771f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_ea70b8843e4ca1f4d5254ecd502cd2d2e0cc25dd73507c6607bc3ac70217f68b->leave($__internal_ea70b8843e4ca1f4d5254ecd502cd2d2e0cc25dd73507c6607bc3ac70217f68b_prof);

        
        $__internal_d943381fb4a8fbad8164bf856db4648de95385b6d5f9c8d9334ee648d181771f->leave($__internal_d943381fb4a8fbad8164bf856db4648de95385b6d5f9c8d9334ee648d181771f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_container_attributes.html.php";
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
        return new Twig_Source("<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_container_attributes.html.php", "/Users/Rachid/SymfonyProjects/api-lab/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_container_attributes.html.php");
    }
}
