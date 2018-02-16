<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_70ee89472821e596ffe740a4ebde68939ef2f85ab61bc259637d647f742a4bae extends Twig_Template
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
        $__internal_b87de682a73f4dfbd7567770de57a2e53761a4d943249f5ef58ef2658a48681c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b87de682a73f4dfbd7567770de57a2e53761a4d943249f5ef58ef2658a48681c->enter($__internal_b87de682a73f4dfbd7567770de57a2e53761a4d943249f5ef58ef2658a48681c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_5044bb70085068c18dd07d6b0a501155b440fff04b58cdd254f88e033f1f7229 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5044bb70085068c18dd07d6b0a501155b440fff04b58cdd254f88e033f1f7229->enter($__internal_5044bb70085068c18dd07d6b0a501155b440fff04b58cdd254f88e033f1f7229_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_b87de682a73f4dfbd7567770de57a2e53761a4d943249f5ef58ef2658a48681c->leave($__internal_b87de682a73f4dfbd7567770de57a2e53761a4d943249f5ef58ef2658a48681c_prof);

        
        $__internal_5044bb70085068c18dd07d6b0a501155b440fff04b58cdd254f88e033f1f7229->leave($__internal_5044bb70085068c18dd07d6b0a501155b440fff04b58cdd254f88e033f1f7229_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
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
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "/Users/Rachid/SymfonyProjects/api-lab/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/collection_widget.html.php");
    }
}
