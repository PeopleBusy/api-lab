<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_71347338da19d82d7df67083a6d931e129557906b2ff163a5092266a28969c66 extends Twig_Template
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
        $__internal_784fc48e4eebd71220d58e59f33665663f346e1a00d30fcd5f937455bdf4fa88 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_784fc48e4eebd71220d58e59f33665663f346e1a00d30fcd5f937455bdf4fa88->enter($__internal_784fc48e4eebd71220d58e59f33665663f346e1a00d30fcd5f937455bdf4fa88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_3a27ef7d1d3e166e4b179a33cb60fd9ad538f6723af7a46e9d2afc6212dd439b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a27ef7d1d3e166e4b179a33cb60fd9ad538f6723af7a46e9d2afc6212dd439b->enter($__internal_3a27ef7d1d3e166e4b179a33cb60fd9ad538f6723af7a46e9d2afc6212dd439b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php foreach (\$attr as \$k => \$v): ?>
<?php if ('placeholder' === \$k || 'title' === \$k): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (true === \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (false !== \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_784fc48e4eebd71220d58e59f33665663f346e1a00d30fcd5f937455bdf4fa88->leave($__internal_784fc48e4eebd71220d58e59f33665663f346e1a00d30fcd5f937455bdf4fa88_prof);

        
        $__internal_3a27ef7d1d3e166e4b179a33cb60fd9ad538f6723af7a46e9d2afc6212dd439b->leave($__internal_3a27ef7d1d3e166e4b179a33cb60fd9ad538f6723af7a46e9d2afc6212dd439b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php foreach (\$attr as \$k => \$v): ?>
<?php if ('placeholder' === \$k || 'title' === \$k): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (true === \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (false !== \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/attributes.html.php", "/Users/Rachid/SymfonyProjects/api-lab/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/attributes.html.php");
    }
}
