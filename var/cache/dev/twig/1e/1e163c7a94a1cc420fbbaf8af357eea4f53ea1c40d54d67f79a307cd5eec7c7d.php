<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_e1c1b734bc0e86b764773fc931edb5ff796c943ef50698a3e10f9e548dcb9a21 extends Twig_Template
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
        $__internal_323fb920c91187b318556ebbea5d25283c38abdcfe5f2d88350320c152d575d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_323fb920c91187b318556ebbea5d25283c38abdcfe5f2d88350320c152d575d8->enter($__internal_323fb920c91187b318556ebbea5d25283c38abdcfe5f2d88350320c152d575d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_b14cfb3262b1af36b2b12f395263750800b045998df1c5a1f32e9a5abbec1451 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b14cfb3262b1af36b2b12f395263750800b045998df1c5a1f32e9a5abbec1451->enter($__internal_b14cfb3262b1af36b2b12f395263750800b045998df1c5a1f32e9a5abbec1451_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_323fb920c91187b318556ebbea5d25283c38abdcfe5f2d88350320c152d575d8->leave($__internal_323fb920c91187b318556ebbea5d25283c38abdcfe5f2d88350320c152d575d8_prof);

        
        $__internal_b14cfb3262b1af36b2b12f395263750800b045998df1c5a1f32e9a5abbec1451->leave($__internal_b14cfb3262b1af36b2b12f395263750800b045998df1c5a1f32e9a5abbec1451_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/Users/Rachid/SymfonyProjects/api-lab/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
