<?php

/* WebProfilerBundle:Profiler:bag.html.twig */
class __TwigTemplate_c7999aac1e203e09129b0ac983c2c2ea5231842d03d99a3ddcc7f732c75456c5 extends Twig_Template
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
        $__internal_3311d619f7f7b861510c97b107c6530059edd082e76c64e3b02fbf4694e8a1a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3311d619f7f7b861510c97b107c6530059edd082e76c64e3b02fbf4694e8a1a0->enter($__internal_3311d619f7f7b861510c97b107c6530059edd082e76c64e3b02fbf4694e8a1a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:bag.html.twig"));

        $__internal_9e35873e29c8ddbe2ef453125aedfa6cecb05f1fc7928298842a7dcd37b04707 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e35873e29c8ddbe2ef453125aedfa6cecb05f1fc7928298842a7dcd37b04707->enter($__internal_9e35873e29c8ddbe2ef453125aedfa6cecb05f1fc7928298842a7dcd37b04707_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:bag.html.twig"));

        // line 1
        echo "<table class=\"";
        echo twig_escape_filter($this->env, ((array_key_exists("class", $context)) ? (_twig_default_filter(($context["class"] ?? $this->getContext($context, "class")), "")) : ("")), "html", null, true);
        echo "\">
    <thead>
        <tr>
            <th scope=\"col\" class=\"key\">";
        // line 4
        echo twig_escape_filter($this->env, ((array_key_exists("labels", $context)) ? ($this->getAttribute(($context["labels"] ?? $this->getContext($context, "labels")), 0, array(), "array")) : ("Key")), "html", null, true);
        echo "</th>
            <th scope=\"col\">";
        // line 5
        echo twig_escape_filter($this->env, ((array_key_exists("labels", $context)) ? ($this->getAttribute(($context["labels"] ?? $this->getContext($context, "labels")), 1, array(), "array")) : ("Value")), "html", null, true);
        echo "</th>
        </tr>
    </thead>
    <tbody>
        ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_sort_filter($this->getAttribute(($context["bag"] ?? $this->getContext($context, "bag")), "keys", array())));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["key"]) {
            // line 10
            echo "            <tr>
                <th>";
            // line 11
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "</th>
                <td>";
            // line 12
            echo call_user_func_array($this->env->getFunction('profiler_dump')->getCallable(), array($this->env, $this->getAttribute(($context["bag"] ?? $this->getContext($context, "bag")), "get", array(0 => $context["key"]), "method"), ((array_key_exists("maxDepth", $context)) ? (_twig_default_filter(($context["maxDepth"] ?? $this->getContext($context, "maxDepth")), 0)) : (0))));
            echo "</td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 15
            echo "            <tr>
                <td colspan=\"2\">(no data)</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['key'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "    </tbody>
</table>
";
        
        $__internal_3311d619f7f7b861510c97b107c6530059edd082e76c64e3b02fbf4694e8a1a0->leave($__internal_3311d619f7f7b861510c97b107c6530059edd082e76c64e3b02fbf4694e8a1a0_prof);

        
        $__internal_9e35873e29c8ddbe2ef453125aedfa6cecb05f1fc7928298842a7dcd37b04707->leave($__internal_9e35873e29c8ddbe2ef453125aedfa6cecb05f1fc7928298842a7dcd37b04707_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:bag.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 19,  63 => 15,  55 => 12,  51 => 11,  48 => 10,  43 => 9,  36 => 5,  32 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<table class=\"{{ class|default('') }}\">
    <thead>
        <tr>
            <th scope=\"col\" class=\"key\">{{ labels is defined ? labels[0] : 'Key' }}</th>
            <th scope=\"col\">{{ labels is defined ? labels[1] : 'Value' }}</th>
        </tr>
    </thead>
    <tbody>
        {% for key in bag.keys|sort %}
            <tr>
                <th>{{ key }}</th>
                <td>{{ profiler_dump(bag.get(key), maxDepth=maxDepth|default(0)) }}</td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"2\">(no data)</td>
            </tr>
        {% endfor %}
    </tbody>
</table>
", "WebProfilerBundle:Profiler:bag.html.twig", "/Users/Rachid/SymfonyProjects/api-lab/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/bag.html.twig");
    }
}
