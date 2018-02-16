<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_2e1332e773bce4216501721a7e9a56606964e2324616932611f60bf9fd06cb7d extends Twig_Template
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
        $__internal_60c86df52ce77aacd6c03e77b5a52dc025339a7cc33d92fb9bc94c50f8e429da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60c86df52ce77aacd6c03e77b5a52dc025339a7cc33d92fb9bc94c50f8e429da->enter($__internal_60c86df52ce77aacd6c03e77b5a52dc025339a7cc33d92fb9bc94c50f8e429da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_f1c3ef579d83a44703b99c71a21dcf5fdc4961078d0f4965d5e558d8ea6c08dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1c3ef579d83a44703b99c71a21dcf5fdc4961078d0f4965d5e558d8ea6c08dc->enter($__internal_f1c3ef579d83a44703b99c71a21dcf5fdc4961078d0f4965d5e558d8ea6c08dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes'); ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form); ?>
        </td>
    </tr>
    <?php endif; ?>
    <?php echo \$view['form']->block(\$form, 'form_rows'); ?>
    <?php echo \$view['form']->rest(\$form); ?>
</table>
";
        
        $__internal_60c86df52ce77aacd6c03e77b5a52dc025339a7cc33d92fb9bc94c50f8e429da->leave($__internal_60c86df52ce77aacd6c03e77b5a52dc025339a7cc33d92fb9bc94c50f8e429da_prof);

        
        $__internal_f1c3ef579d83a44703b99c71a21dcf5fdc4961078d0f4965d5e558d8ea6c08dc->leave($__internal_f1c3ef579d83a44703b99c71a21dcf5fdc4961078d0f4965d5e558d8ea6c08dc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
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
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes'); ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form); ?>
        </td>
    </tr>
    <?php endif; ?>
    <?php echo \$view['form']->block(\$form, 'form_rows'); ?>
    <?php echo \$view['form']->rest(\$form); ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "/Users/Rachid/SymfonyProjects/api-lab/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_widget_compound.html.php");
    }
}
