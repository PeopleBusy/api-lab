<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_1c755e58c986844cf8590582f5f14ffdbacbbc0bc0b3ed39327c93ad40c60962 extends Twig_Template
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
        $__internal_765bf075a727f2616f4f70e9dd46022d5c453bfea0375ccc1bbd8ce1950b862d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_765bf075a727f2616f4f70e9dd46022d5c453bfea0375ccc1bbd8ce1950b862d->enter($__internal_765bf075a727f2616f4f70e9dd46022d5c453bfea0375ccc1bbd8ce1950b862d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_883e7716c60542072a6a89b43bb3253916acd4fb4fd566f93f13f794e589e742 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_883e7716c60542072a6a89b43bb3253916acd4fb4fd566f93f13f794e589e742->enter($__internal_883e7716c60542072a6a89b43bb3253916acd4fb4fd566f93f13f794e589e742_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_765bf075a727f2616f4f70e9dd46022d5c453bfea0375ccc1bbd8ce1950b862d->leave($__internal_765bf075a727f2616f4f70e9dd46022d5c453bfea0375ccc1bbd8ce1950b862d_prof);

        
        $__internal_883e7716c60542072a6a89b43bb3253916acd4fb4fd566f93f13f794e589e742->leave($__internal_883e7716c60542072a6a89b43bb3253916acd4fb4fd566f93f13f794e589e742_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "TwigBundle:Exception:exception.css.twig", "/Users/Rachid/SymfonyProjects/api-lab/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
