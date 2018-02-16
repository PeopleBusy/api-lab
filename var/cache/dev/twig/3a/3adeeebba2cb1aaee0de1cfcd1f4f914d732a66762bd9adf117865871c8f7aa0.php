<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_9e147ad6909becafd17fdfb2663279db46954f089286432f2f52d83626f9f819 extends Twig_Template
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
        $__internal_1e68c11f6363d738ec1f793ca672818492de5861ca65b2ddff662cf80f8973b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e68c11f6363d738ec1f793ca672818492de5861ca65b2ddff662cf80f8973b3->enter($__internal_1e68c11f6363d738ec1f793ca672818492de5861ca65b2ddff662cf80f8973b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_dc116d7cf70df9e5eed767043f385a195763eb90a804e6cad0f876e7c492e87c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc116d7cf70df9e5eed767043f385a195763eb90a804e6cad0f876e7c492e87c->enter($__internal_dc116d7cf70df9e5eed767043f385a195763eb90a804e6cad0f876e7c492e87c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_1e68c11f6363d738ec1f793ca672818492de5861ca65b2ddff662cf80f8973b3->leave($__internal_1e68c11f6363d738ec1f793ca672818492de5861ca65b2ddff662cf80f8973b3_prof);

        
        $__internal_dc116d7cf70df9e5eed767043f385a195763eb90a804e6cad0f876e7c492e87c->leave($__internal_dc116d7cf70df9e5eed767043f385a195763eb90a804e6cad0f876e7c492e87c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
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
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "/Users/Rachid/SymfonyProjects/api-lab/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_errors.html.php");
    }
}
