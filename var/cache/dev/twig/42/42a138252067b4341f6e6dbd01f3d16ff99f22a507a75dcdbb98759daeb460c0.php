<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_73e1f2754db823fce8e3910fe5008369e951840a6082c3fc453dc4446dc5244f extends Twig_Template
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
        $__internal_cb014193b540b40731a3f4adcfce2e1cff569ece7c8b3b8a58f43078ba7e8944 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb014193b540b40731a3f4adcfce2e1cff569ece7c8b3b8a58f43078ba7e8944->enter($__internal_cb014193b540b40731a3f4adcfce2e1cff569ece7c8b3b8a58f43078ba7e8944_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_b03dac64ef9fc0aa8586d0b99da39d48d09e563547ce8fefadd22476bb87b9b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b03dac64ef9fc0aa8586d0b99da39d48d09e563547ce8fefadd22476bb87b9b0->enter($__internal_b03dac64ef9fc0aa8586d0b99da39d48d09e563547ce8fefadd22476bb87b9b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_cb014193b540b40731a3f4adcfce2e1cff569ece7c8b3b8a58f43078ba7e8944->leave($__internal_cb014193b540b40731a3f4adcfce2e1cff569ece7c8b3b8a58f43078ba7e8944_prof);

        
        $__internal_b03dac64ef9fc0aa8586d0b99da39d48d09e563547ce8fefadd22476bb87b9b0->leave($__internal_b03dac64ef9fc0aa8586d0b99da39d48d09e563547ce8fefadd22476bb87b9b0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "/Users/Rachid/SymfonyProjects/api-lab/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget_expanded.html.php");
    }
}
