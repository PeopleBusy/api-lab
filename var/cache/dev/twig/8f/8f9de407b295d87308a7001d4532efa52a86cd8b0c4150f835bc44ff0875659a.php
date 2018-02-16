<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_a714f6768c990fd6fa86bf98c9dd54616274635514f62c5f605b9aa9f06f765a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_80ea5ffd581c432bc0a359123e2957eea176b8b001aaa6417f09e2e46665139d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80ea5ffd581c432bc0a359123e2957eea176b8b001aaa6417f09e2e46665139d->enter($__internal_80ea5ffd581c432bc0a359123e2957eea176b8b001aaa6417f09e2e46665139d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_bae108423553e95fa30b211da4b9ad1ac9c8e088ce45ba228992c1edc3b7517e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bae108423553e95fa30b211da4b9ad1ac9c8e088ce45ba228992c1edc3b7517e->enter($__internal_bae108423553e95fa30b211da4b9ad1ac9c8e088ce45ba228992c1edc3b7517e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_80ea5ffd581c432bc0a359123e2957eea176b8b001aaa6417f09e2e46665139d->leave($__internal_80ea5ffd581c432bc0a359123e2957eea176b8b001aaa6417f09e2e46665139d_prof);

        
        $__internal_bae108423553e95fa30b211da4b9ad1ac9c8e088ce45ba228992c1edc3b7517e->leave($__internal_bae108423553e95fa30b211da4b9ad1ac9c8e088ce45ba228992c1edc3b7517e_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_0fb618a360437f797747f7bb60221f805609849d8463cdceef3d2cc972ca29ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0fb618a360437f797747f7bb60221f805609849d8463cdceef3d2cc972ca29ae->enter($__internal_0fb618a360437f797747f7bb60221f805609849d8463cdceef3d2cc972ca29ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ea44cd174742bb1cf08f2b8c5260ca7e7a72a5e76ee8335fd2b99d1edd03c185 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea44cd174742bb1cf08f2b8c5260ca7e7a72a5e76ee8335fd2b99d1edd03c185->enter($__internal_ea44cd174742bb1cf08f2b8c5260ca7e7a72a5e76ee8335fd2b99d1edd03c185_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_ea44cd174742bb1cf08f2b8c5260ca7e7a72a5e76ee8335fd2b99d1edd03c185->leave($__internal_ea44cd174742bb1cf08f2b8c5260ca7e7a72a5e76ee8335fd2b99d1edd03c185_prof);

        
        $__internal_0fb618a360437f797747f7bb60221f805609849d8463cdceef3d2cc972ca29ae->leave($__internal_0fb618a360437f797747f7bb60221f805609849d8463cdceef3d2cc972ca29ae_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_2a0f80224c7f908b0073bc82ae18263eecd09dd76641938f5341b1cd71cbf751 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a0f80224c7f908b0073bc82ae18263eecd09dd76641938f5341b1cd71cbf751->enter($__internal_2a0f80224c7f908b0073bc82ae18263eecd09dd76641938f5341b1cd71cbf751_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_98da8f70ae5e9a832aa15b461928a125b60a19d0813d441ec9f7f04b25a1e2d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98da8f70ae5e9a832aa15b461928a125b60a19d0813d441ec9f7f04b25a1e2d4->enter($__internal_98da8f70ae5e9a832aa15b461928a125b60a19d0813d441ec9f7f04b25a1e2d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_98da8f70ae5e9a832aa15b461928a125b60a19d0813d441ec9f7f04b25a1e2d4->leave($__internal_98da8f70ae5e9a832aa15b461928a125b60a19d0813d441ec9f7f04b25a1e2d4_prof);

        
        $__internal_2a0f80224c7f908b0073bc82ae18263eecd09dd76641938f5341b1cd71cbf751->leave($__internal_2a0f80224c7f908b0073bc82ae18263eecd09dd76641938f5341b1cd71cbf751_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_7e6f0c839814629416bcf154fbd513eefb076ad4507d5e0cd839eb905b969198 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e6f0c839814629416bcf154fbd513eefb076ad4507d5e0cd839eb905b969198->enter($__internal_7e6f0c839814629416bcf154fbd513eefb076ad4507d5e0cd839eb905b969198_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ad5d53e13c7b027f5b627caded3d8123818672885e410919c34770ad1ca29f2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad5d53e13c7b027f5b627caded3d8123818672885e410919c34770ad1ca29f2e->enter($__internal_ad5d53e13c7b027f5b627caded3d8123818672885e410919c34770ad1ca29f2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_ad5d53e13c7b027f5b627caded3d8123818672885e410919c34770ad1ca29f2e->leave($__internal_ad5d53e13c7b027f5b627caded3d8123818672885e410919c34770ad1ca29f2e_prof);

        
        $__internal_7e6f0c839814629416bcf154fbd513eefb076ad4507d5e0cd839eb905b969198->leave($__internal_7e6f0c839814629416bcf154fbd513eefb076ad4507d5e0cd839eb905b969198_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/Users/Rachid/SymfonyProjects/api-lab/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
