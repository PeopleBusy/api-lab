<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_196a2d851bbc347474be2668210d7396f449c80eae0baa74a1cbbfe1226284a0 extends Twig_Template
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
        $__internal_466d666f49e2980d8f580cfb97a00827ef1e84a55ee822cf866009dc50397eeb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_466d666f49e2980d8f580cfb97a00827ef1e84a55ee822cf866009dc50397eeb->enter($__internal_466d666f49e2980d8f580cfb97a00827ef1e84a55ee822cf866009dc50397eeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_6cd099448b277ce4262c30539675ebd1dddd693a828055cfb9414f8828ab7688 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6cd099448b277ce4262c30539675ebd1dddd693a828055cfb9414f8828ab7688->enter($__internal_6cd099448b277ce4262c30539675ebd1dddd693a828055cfb9414f8828ab7688_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_466d666f49e2980d8f580cfb97a00827ef1e84a55ee822cf866009dc50397eeb->leave($__internal_466d666f49e2980d8f580cfb97a00827ef1e84a55ee822cf866009dc50397eeb_prof);

        
        $__internal_6cd099448b277ce4262c30539675ebd1dddd693a828055cfb9414f8828ab7688->leave($__internal_6cd099448b277ce4262c30539675ebd1dddd693a828055cfb9414f8828ab7688_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/Users/Rachid/SymfonyProjects/api-lab/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
