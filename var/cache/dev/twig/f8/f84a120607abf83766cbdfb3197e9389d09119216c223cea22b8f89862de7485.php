<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_39a055015bd1dc965cf8c3c06fc794461a07cc7e6ad43b76f01a19bd1b60a225 extends Twig_Template
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
        $__internal_9921bf3f978633ad1a375407dc2c71006d44ada9365fc64b397781eba7f1923d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9921bf3f978633ad1a375407dc2c71006d44ada9365fc64b397781eba7f1923d->enter($__internal_9921bf3f978633ad1a375407dc2c71006d44ada9365fc64b397781eba7f1923d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_603f6463914cbe3fbec971afc222c626e05f9ab72ed01978d93fd288de7991db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_603f6463914cbe3fbec971afc222c626e05f9ab72ed01978d93fd288de7991db->enter($__internal_603f6463914cbe3fbec971afc222c626e05f9ab72ed01978d93fd288de7991db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_9921bf3f978633ad1a375407dc2c71006d44ada9365fc64b397781eba7f1923d->leave($__internal_9921bf3f978633ad1a375407dc2c71006d44ada9365fc64b397781eba7f1923d_prof);

        
        $__internal_603f6463914cbe3fbec971afc222c626e05f9ab72ed01978d93fd288de7991db->leave($__internal_603f6463914cbe3fbec971afc222c626e05f9ab72ed01978d93fd288de7991db_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/Users/Rachid/SymfonyProjects/api-lab/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}
