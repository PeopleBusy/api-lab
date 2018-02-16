<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_c7c4d73d5b66f84b3606420c08642b5912b1b3be8c6c0593685a31db99c50918 extends Twig_Template
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
        $__internal_d7bb241abad29f727d5cbde2c40d2e363b3f73ea65b4a64be64f113e3f78c8d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d7bb241abad29f727d5cbde2c40d2e363b3f73ea65b4a64be64f113e3f78c8d2->enter($__internal_d7bb241abad29f727d5cbde2c40d2e363b3f73ea65b4a64be64f113e3f78c8d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_3988464103cf1d695d26671c1d01072bf5c4d34e77664b3db2d17532526e0d4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3988464103cf1d695d26671c1d01072bf5c4d34e77664b3db2d17532526e0d4e->enter($__internal_3988464103cf1d695d26671c1d01072bf5c4d34e77664b3db2d17532526e0d4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_d7bb241abad29f727d5cbde2c40d2e363b3f73ea65b4a64be64f113e3f78c8d2->leave($__internal_d7bb241abad29f727d5cbde2c40d2e363b3f73ea65b4a64be64f113e3f78c8d2_prof);

        
        $__internal_3988464103cf1d695d26671c1d01072bf5c4d34e77664b3db2d17532526e0d4e->leave($__internal_3988464103cf1d695d26671c1d01072bf5c4d34e77664b3db2d17532526e0d4e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/Users/Rachid/SymfonyProjects/api-lab/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
