<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_5d671a681ebd0209e3a452bf689143655b6555a278c073bbfae7b6f3970001e3 extends Twig_Template
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
        $__internal_86914f3958cd8d382a2316c74b9bdad91540da44e4b43e63ff33923eb8abc14a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86914f3958cd8d382a2316c74b9bdad91540da44e4b43e63ff33923eb8abc14a->enter($__internal_86914f3958cd8d382a2316c74b9bdad91540da44e4b43e63ff33923eb8abc14a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_78587ae25e04e28412d8fb439222c9e2aef45f1d255e030d8a37a90db373643f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78587ae25e04e28412d8fb439222c9e2aef45f1d255e030d8a37a90db373643f->enter($__internal_78587ae25e04e28412d8fb439222c9e2aef45f1d255e030d8a37a90db373643f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_86914f3958cd8d382a2316c74b9bdad91540da44e4b43e63ff33923eb8abc14a->leave($__internal_86914f3958cd8d382a2316c74b9bdad91540da44e4b43e63ff33923eb8abc14a_prof);

        
        $__internal_78587ae25e04e28412d8fb439222c9e2aef45f1d255e030d8a37a90db373643f->leave($__internal_78587ae25e04e28412d8fb439222c9e2aef45f1d255e030d8a37a90db373643f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/Users/Rachid/SymfonyProjects/api-lab/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}
