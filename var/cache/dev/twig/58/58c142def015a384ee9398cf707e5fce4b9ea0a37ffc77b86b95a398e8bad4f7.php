<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_811395011af03a0201b6063f636e6b2759ca943f1684883dc57014d268b45955 extends Twig_Template
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
        $__internal_5b08f323b26e2a2c125c3328d364d2f88b01e85fae8cd789072453b268c42b05 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b08f323b26e2a2c125c3328d364d2f88b01e85fae8cd789072453b268c42b05->enter($__internal_5b08f323b26e2a2c125c3328d364d2f88b01e85fae8cd789072453b268c42b05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_9bcbdfbb8e2b95961a98c289a9d2ada1195fafec0f21f1f4e9121311e9b120fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9bcbdfbb8e2b95961a98c289a9d2ada1195fafec0f21f1f4e9121311e9b120fd->enter($__internal_9bcbdfbb8e2b95961a98c289a9d2ada1195fafec0f21f1f4e9121311e9b120fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_5b08f323b26e2a2c125c3328d364d2f88b01e85fae8cd789072453b268c42b05->leave($__internal_5b08f323b26e2a2c125c3328d364d2f88b01e85fae8cd789072453b268c42b05_prof);

        
        $__internal_9bcbdfbb8e2b95961a98c289a9d2ada1195fafec0f21f1f4e9121311e9b120fd->leave($__internal_9bcbdfbb8e2b95961a98c289a9d2ada1195fafec0f21f1f4e9121311e9b120fd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
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
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "/Users/Rachid/SymfonyProjects/api-lab/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_attributes.html.php");
    }
}
