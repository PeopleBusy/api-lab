<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_590150518897fdbd2d442b174f3b36b0ffa58cb9b8374c71650d9fc3a3db6372 extends Twig_Template
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
        $__internal_c13de4f42773e1dbe7e6999c11aa7f326fbeacb0901b1418e834f8d5feb7e641 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c13de4f42773e1dbe7e6999c11aa7f326fbeacb0901b1418e834f8d5feb7e641->enter($__internal_c13de4f42773e1dbe7e6999c11aa7f326fbeacb0901b1418e834f8d5feb7e641_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_9592971b1674c726b6c28c5dc07526f2fd64e3acb9f871baba5194746fc17acc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9592971b1674c726b6c28c5dc07526f2fd64e3acb9f871baba5194746fc17acc->enter($__internal_9592971b1674c726b6c28c5dc07526f2fd64e3acb9f871baba5194746fc17acc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_c13de4f42773e1dbe7e6999c11aa7f326fbeacb0901b1418e834f8d5feb7e641->leave($__internal_c13de4f42773e1dbe7e6999c11aa7f326fbeacb0901b1418e834f8d5feb7e641_prof);

        
        $__internal_9592971b1674c726b6c28c5dc07526f2fd64e3acb9f871baba5194746fc17acc->leave($__internal_9592971b1674c726b6c28c5dc07526f2fd64e3acb9f871baba5194746fc17acc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/Users/Rachid/SymfonyProjects/api-lab/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
