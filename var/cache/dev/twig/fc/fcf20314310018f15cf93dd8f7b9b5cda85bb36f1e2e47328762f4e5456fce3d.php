<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_70a591d9c098a8a9ea1e5fde56e172874217abd66606b4cf75767f04b7c854d0 extends Twig_Template
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
        $__internal_edcea0aa08f021756b3965f1a5d3ed42c9d58ee794520db57c243c62293d296a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_edcea0aa08f021756b3965f1a5d3ed42c9d58ee794520db57c243c62293d296a->enter($__internal_edcea0aa08f021756b3965f1a5d3ed42c9d58ee794520db57c243c62293d296a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_c11c924a5c32001a92a403b5c243e9eaec67ffa3200345bcaa97dd8fe4891849 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c11c924a5c32001a92a403b5c243e9eaec67ffa3200345bcaa97dd8fe4891849->enter($__internal_c11c924a5c32001a92a403b5c243e9eaec67ffa3200345bcaa97dd8fe4891849_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_edcea0aa08f021756b3965f1a5d3ed42c9d58ee794520db57c243c62293d296a->leave($__internal_edcea0aa08f021756b3965f1a5d3ed42c9d58ee794520db57c243c62293d296a_prof);

        
        $__internal_c11c924a5c32001a92a403b5c243e9eaec67ffa3200345bcaa97dd8fe4891849->leave($__internal_c11c924a5c32001a92a403b5c243e9eaec67ffa3200345bcaa97dd8fe4891849_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
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
        return new Twig_Source("<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
", "@Framework/Form/button_widget.html.php", "/Users/Rachid/SymfonyProjects/api-lab/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_widget.html.php");
    }
}
