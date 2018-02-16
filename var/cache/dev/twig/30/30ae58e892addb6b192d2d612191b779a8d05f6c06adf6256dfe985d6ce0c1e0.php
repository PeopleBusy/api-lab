<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_62b432fb9b6da33ca0c267a93ca13d9b9ebd014e47f6bdbd6c7caa629234b7d6 extends Twig_Template
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
        $__internal_dd69b57de7e936c2596fd56a85f90b4b0c4cf0beb84b0574b1a93f5977a8867b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd69b57de7e936c2596fd56a85f90b4b0c4cf0beb84b0574b1a93f5977a8867b->enter($__internal_dd69b57de7e936c2596fd56a85f90b4b0c4cf0beb84b0574b1a93f5977a8867b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_09542c5a58fa08be2b5f75d4c1578406e2410efb70707f172b7df4344880c37f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09542c5a58fa08be2b5f75d4c1578406e2410efb70707f172b7df4344880c37f->enter($__internal_09542c5a58fa08be2b5f75d4c1578406e2410efb70707f172b7df4344880c37f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_dd69b57de7e936c2596fd56a85f90b4b0c4cf0beb84b0574b1a93f5977a8867b->leave($__internal_dd69b57de7e936c2596fd56a85f90b4b0c4cf0beb84b0574b1a93f5977a8867b_prof);

        
        $__internal_09542c5a58fa08be2b5f75d4c1578406e2410efb70707f172b7df4344880c37f->leave($__internal_09542c5a58fa08be2b5f75d4c1578406e2410efb70707f172b7df4344880c37f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/Users/Rachid/SymfonyProjects/api-lab/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
