<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_f6ff5dafee63cb62dfbfff79422c310b728713b67ba55fa3dd09ead40aafdd3a extends Twig_Template
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
        $__internal_139bf25450e658500b5ca201cb7fc2c041019c42399caafb171990100e7865ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_139bf25450e658500b5ca201cb7fc2c041019c42399caafb171990100e7865ec->enter($__internal_139bf25450e658500b5ca201cb7fc2c041019c42399caafb171990100e7865ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_46c289bbf91de74169ded2ea00c4108d6369fd0828883dbaee8c38f652ebed1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46c289bbf91de74169ded2ea00c4108d6369fd0828883dbaee8c38f652ebed1f->enter($__internal_46c289bbf91de74169ded2ea00c4108d6369fd0828883dbaee8c38f652ebed1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_139bf25450e658500b5ca201cb7fc2c041019c42399caafb171990100e7865ec->leave($__internal_139bf25450e658500b5ca201cb7fc2c041019c42399caafb171990100e7865ec_prof);

        
        $__internal_46c289bbf91de74169ded2ea00c4108d6369fd0828883dbaee8c38f652ebed1f->leave($__internal_46c289bbf91de74169ded2ea00c4108d6369fd0828883dbaee8c38f652ebed1f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/Users/Rachid/SymfonyProjects/api-lab/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
