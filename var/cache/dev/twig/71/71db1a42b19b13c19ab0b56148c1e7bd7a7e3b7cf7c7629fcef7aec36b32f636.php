<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_8dc2309d904f26d85fa05b15b44e2e133200b049af7e48768dd0a2650d7ae818 extends Twig_Template
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
        $__internal_80c8e52f66fc4d23ce50506c64e3e91422b75ea8e3cc11f2d6fcef10e08420f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80c8e52f66fc4d23ce50506c64e3e91422b75ea8e3cc11f2d6fcef10e08420f3->enter($__internal_80c8e52f66fc4d23ce50506c64e3e91422b75ea8e3cc11f2d6fcef10e08420f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_d0208a003fb2db62a91251b7a681df7140702235198da3a29358b3d141608b7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0208a003fb2db62a91251b7a681df7140702235198da3a29358b3d141608b7e->enter($__internal_d0208a003fb2db62a91251b7a681df7140702235198da3a29358b3d141608b7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_80c8e52f66fc4d23ce50506c64e3e91422b75ea8e3cc11f2d6fcef10e08420f3->leave($__internal_80c8e52f66fc4d23ce50506c64e3e91422b75ea8e3cc11f2d6fcef10e08420f3_prof);

        
        $__internal_d0208a003fb2db62a91251b7a681df7140702235198da3a29358b3d141608b7e->leave($__internal_d0208a003fb2db62a91251b7a681df7140702235198da3a29358b3d141608b7e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/Users/Rachid/SymfonyProjects/api-lab/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
