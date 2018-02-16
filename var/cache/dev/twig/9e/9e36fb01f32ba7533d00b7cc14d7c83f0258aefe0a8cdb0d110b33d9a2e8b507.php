<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_d0289102bbf9bfe5426c28ca319102c2100d3db8aa2e3387c37d707472af7730 extends Twig_Template
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
        $__internal_56b4109035e83bc1acfff8ba966b244bafe911d4191667045e1295cf895de953 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_56b4109035e83bc1acfff8ba966b244bafe911d4191667045e1295cf895de953->enter($__internal_56b4109035e83bc1acfff8ba966b244bafe911d4191667045e1295cf895de953_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        $__internal_50ba989e8bdbe751a8524ef5c43f56f1c5e0558e7d442e638156b437f4a02f1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50ba989e8bdbe751a8524ef5c43f56f1c5e0558e7d442e638156b437f4a02f1f->enter($__internal_50ba989e8bdbe751a8524ef5c43f56f1c5e0558e7d442e638156b437f4a02f1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo ($context["status_code"] ?? $this->getContext($context, "status_code"));
        echo " ";
        echo ($context["status_text"] ?? $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_56b4109035e83bc1acfff8ba966b244bafe911d4191667045e1295cf895de953->leave($__internal_56b4109035e83bc1acfff8ba966b244bafe911d4191667045e1295cf895de953_prof);

        
        $__internal_50ba989e8bdbe751a8524ef5c43f56f1c5e0558e7d442e638156b437f4a02f1f->leave($__internal_50ba989e8bdbe751a8524ef5c43f56f1c5e0558e7d442e638156b437f4a02f1f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "TwigBundle:Exception:error.txt.twig", "/Users/Rachid/SymfonyProjects/api-lab/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.txt.twig");
    }
}
