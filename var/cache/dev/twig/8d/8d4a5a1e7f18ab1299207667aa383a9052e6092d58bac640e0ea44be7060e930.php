<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_74f3ed9f661bf302caf94694aa3746d9f62e3920328a5309dff0810c4bea56d9 extends Twig_Template
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
        $__internal_abb8dc7c4dedbed8fc707eeb759436d1537ce6d81ff5027fe541a3d99dc15732 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_abb8dc7c4dedbed8fc707eeb759436d1537ce6d81ff5027fe541a3d99dc15732->enter($__internal_abb8dc7c4dedbed8fc707eeb759436d1537ce6d81ff5027fe541a3d99dc15732_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_b52c1ef6473ff8c5125c8b3551f8e0e805bed0e2cfc53299b68a2614d40f7d37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b52c1ef6473ff8c5125c8b3551f8e0e805bed0e2cfc53299b68a2614d40f7d37->enter($__internal_b52c1ef6473ff8c5125c8b3551f8e0e805bed0e2cfc53299b68a2614d40f7d37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_abb8dc7c4dedbed8fc707eeb759436d1537ce6d81ff5027fe541a3d99dc15732->leave($__internal_abb8dc7c4dedbed8fc707eeb759436d1537ce6d81ff5027fe541a3d99dc15732_prof);

        
        $__internal_b52c1ef6473ff8c5125c8b3551f8e0e805bed0e2cfc53299b68a2614d40f7d37->leave($__internal_b52c1ef6473ff8c5125c8b3551f8e0e805bed0e2cfc53299b68a2614d40f7d37_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/Users/Rachid/SymfonyProjects/api-lab/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
