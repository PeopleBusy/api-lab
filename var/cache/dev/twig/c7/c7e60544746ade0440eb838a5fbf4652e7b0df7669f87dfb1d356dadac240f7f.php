<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_247bc37f1c7b7e19886c1390e35eaa18e560699cd05e1e92b3b74e10227b6d16 extends Twig_Template
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
        $__internal_c24f4be4240ceaa942fe98cac884ffdd032aa7cb4e2fa946d6191acc72969687 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c24f4be4240ceaa942fe98cac884ffdd032aa7cb4e2fa946d6191acc72969687->enter($__internal_c24f4be4240ceaa942fe98cac884ffdd032aa7cb4e2fa946d6191acc72969687_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_79bfcf1f4577c0742cc7669d9dec9bd71f007330cc5ce1deec68c71b36971dd0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79bfcf1f4577c0742cc7669d9dec9bd71f007330cc5ce1deec68c71b36971dd0->enter($__internal_79bfcf1f4577c0742cc7669d9dec9bd71f007330cc5ce1deec68c71b36971dd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_c24f4be4240ceaa942fe98cac884ffdd032aa7cb4e2fa946d6191acc72969687->leave($__internal_c24f4be4240ceaa942fe98cac884ffdd032aa7cb4e2fa946d6191acc72969687_prof);

        
        $__internal_79bfcf1f4577c0742cc7669d9dec9bd71f007330cc5ce1deec68c71b36971dd0->leave($__internal_79bfcf1f4577c0742cc7669d9dec9bd71f007330cc5ce1deec68c71b36971dd0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/Users/Rachid/SymfonyProjects/api-lab/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
