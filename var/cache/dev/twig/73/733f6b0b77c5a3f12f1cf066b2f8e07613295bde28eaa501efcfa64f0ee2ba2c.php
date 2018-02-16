<?php

/* form_table_layout.html.twig */
class __TwigTemplate_73da5d9cc6f2fb66667e03021755b4f80531ac575f4adcdc3002c7e3cf5e2a85 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("form_div_layout.html.twig", "form_table_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."form_div_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_row' => array($this, 'block_form_row'),
                'button_row' => array($this, 'block_button_row'),
                'hidden_row' => array($this, 'block_hidden_row'),
                'form_widget_compound' => array($this, 'block_form_widget_compound'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_516781688387bef0e89020df934787d5024928a7a7630bfc400d83e59d9d7fa8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_516781688387bef0e89020df934787d5024928a7a7630bfc400d83e59d9d7fa8->enter($__internal_516781688387bef0e89020df934787d5024928a7a7630bfc400d83e59d9d7fa8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        $__internal_a81141a9fd2010c1c383c47d4b3004df708dcc3ce0cd7168b122917b50ceb0d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a81141a9fd2010c1c383c47d4b3004df708dcc3ce0cd7168b122917b50ceb0d4->enter($__internal_a81141a9fd2010c1c383c47d4b3004df708dcc3ce0cd7168b122917b50ceb0d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        // line 3
        $this->displayBlock('form_row', $context, $blocks);
        // line 15
        $this->displayBlock('button_row', $context, $blocks);
        // line 24
        $this->displayBlock('hidden_row', $context, $blocks);
        // line 32
        $this->displayBlock('form_widget_compound', $context, $blocks);
        
        $__internal_516781688387bef0e89020df934787d5024928a7a7630bfc400d83e59d9d7fa8->leave($__internal_516781688387bef0e89020df934787d5024928a7a7630bfc400d83e59d9d7fa8_prof);

        
        $__internal_a81141a9fd2010c1c383c47d4b3004df708dcc3ce0cd7168b122917b50ceb0d4->leave($__internal_a81141a9fd2010c1c383c47d4b3004df708dcc3ce0cd7168b122917b50ceb0d4_prof);

    }

    // line 3
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_5f21b23642b5ac592e7b1c554c49ca0d28a7676cfb57a33e454c18bcaf851fbc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f21b23642b5ac592e7b1c554c49ca0d28a7676cfb57a33e454c18bcaf851fbc->enter($__internal_5f21b23642b5ac592e7b1c554c49ca0d28a7676cfb57a33e454c18bcaf851fbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_c790f86f2963047e05383169e7b3e3e64a7f17b46b53912f0b0d9cff33e0dfb7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c790f86f2963047e05383169e7b3e3e64a7f17b46b53912f0b0d9cff33e0dfb7->enter($__internal_c790f86f2963047e05383169e7b3e3e64a7f17b46b53912f0b0d9cff33e0dfb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 4
        echo "<tr>
        <td>";
        // line 6
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
        // line 7
        echo "</td>
        <td>";
        // line 9
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 10
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 11
        echo "</td>
    </tr>";
        
        $__internal_c790f86f2963047e05383169e7b3e3e64a7f17b46b53912f0b0d9cff33e0dfb7->leave($__internal_c790f86f2963047e05383169e7b3e3e64a7f17b46b53912f0b0d9cff33e0dfb7_prof);

        
        $__internal_5f21b23642b5ac592e7b1c554c49ca0d28a7676cfb57a33e454c18bcaf851fbc->leave($__internal_5f21b23642b5ac592e7b1c554c49ca0d28a7676cfb57a33e454c18bcaf851fbc_prof);

    }

    // line 15
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_f12c3d4ba4942e5628e334e9a2ef18a973e74a66cd4e94c3ba2bbfeabf37a65a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f12c3d4ba4942e5628e334e9a2ef18a973e74a66cd4e94c3ba2bbfeabf37a65a->enter($__internal_f12c3d4ba4942e5628e334e9a2ef18a973e74a66cd4e94c3ba2bbfeabf37a65a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_2b77d8c437ad89d4b3bf41c1b149da2ce18f51576ed80e95b5e84e7faaec6147 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b77d8c437ad89d4b3bf41c1b149da2ce18f51576ed80e95b5e84e7faaec6147->enter($__internal_2b77d8c437ad89d4b3bf41c1b149da2ce18f51576ed80e95b5e84e7faaec6147_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 16
        echo "<tr>
        <td></td>
        <td>";
        // line 19
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 20
        echo "</td>
    </tr>";
        
        $__internal_2b77d8c437ad89d4b3bf41c1b149da2ce18f51576ed80e95b5e84e7faaec6147->leave($__internal_2b77d8c437ad89d4b3bf41c1b149da2ce18f51576ed80e95b5e84e7faaec6147_prof);

        
        $__internal_f12c3d4ba4942e5628e334e9a2ef18a973e74a66cd4e94c3ba2bbfeabf37a65a->leave($__internal_f12c3d4ba4942e5628e334e9a2ef18a973e74a66cd4e94c3ba2bbfeabf37a65a_prof);

    }

    // line 24
    public function block_hidden_row($context, array $blocks = array())
    {
        $__internal_71aa6adc6d87d76fb84984a994d1421cdb97f3f573bedf80b421ebf2251fd4db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71aa6adc6d87d76fb84984a994d1421cdb97f3f573bedf80b421ebf2251fd4db->enter($__internal_71aa6adc6d87d76fb84984a994d1421cdb97f3f573bedf80b421ebf2251fd4db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        $__internal_26a4c787f040bd2ef833abc1a89b450ba5ba45c89e6a9eafb6c4ececd043857e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26a4c787f040bd2ef833abc1a89b450ba5ba45c89e6a9eafb6c4ececd043857e->enter($__internal_26a4c787f040bd2ef833abc1a89b450ba5ba45c89e6a9eafb6c4ececd043857e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        // line 25
        echo "<tr style=\"display: none\">
        <td colspan=\"2\">";
        // line 27
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 28
        echo "</td>
    </tr>";
        
        $__internal_26a4c787f040bd2ef833abc1a89b450ba5ba45c89e6a9eafb6c4ececd043857e->leave($__internal_26a4c787f040bd2ef833abc1a89b450ba5ba45c89e6a9eafb6c4ececd043857e_prof);

        
        $__internal_71aa6adc6d87d76fb84984a994d1421cdb97f3f573bedf80b421ebf2251fd4db->leave($__internal_71aa6adc6d87d76fb84984a994d1421cdb97f3f573bedf80b421ebf2251fd4db_prof);

    }

    // line 32
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_b888579c8dc643d124ed1ae5e21952ba179a2f051793583417d2e8363d78b2dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b888579c8dc643d124ed1ae5e21952ba179a2f051793583417d2e8363d78b2dd->enter($__internal_b888579c8dc643d124ed1ae5e21952ba179a2f051793583417d2e8363d78b2dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        $__internal_b1059285df101b3079a57ee5d555599514657559f33e452961978fc0305c7092 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1059285df101b3079a57ee5d555599514657559f33e452961978fc0305c7092->enter($__internal_b1059285df101b3079a57ee5d555599514657559f33e452961978fc0305c7092_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        // line 33
        echo "<table ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">";
        // line 34
        if ((Symfony\Bridge\Twig\Extension\twig_is_root_form(($context["form"] ?? $this->getContext($context, "form"))) && (twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0))) {
            // line 35
            echo "<tr>
            <td colspan=\"2\">";
            // line 37
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
            // line 38
            echo "</td>
        </tr>";
        }
        // line 41
        $this->displayBlock("form_rows", $context, $blocks);
        // line 42
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'rest');
        // line 43
        echo "</table>";
        
        $__internal_b1059285df101b3079a57ee5d555599514657559f33e452961978fc0305c7092->leave($__internal_b1059285df101b3079a57ee5d555599514657559f33e452961978fc0305c7092_prof);

        
        $__internal_b888579c8dc643d124ed1ae5e21952ba179a2f051793583417d2e8363d78b2dd->leave($__internal_b888579c8dc643d124ed1ae5e21952ba179a2f051793583417d2e8363d78b2dd_prof);

    }

    public function getTemplateName()
    {
        return "form_table_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  168 => 43,  166 => 42,  164 => 41,  160 => 38,  158 => 37,  155 => 35,  153 => 34,  149 => 33,  140 => 32,  129 => 28,  127 => 27,  124 => 25,  115 => 24,  104 => 20,  102 => 19,  98 => 16,  89 => 15,  78 => 11,  76 => 10,  74 => 9,  71 => 7,  69 => 6,  66 => 4,  57 => 3,  47 => 32,  45 => 24,  43 => 15,  41 => 3,  14 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"form_div_layout.html.twig\" %}

{%- block form_row -%}
    <tr>
        <td>
            {{- form_label(form) -}}
        </td>
        <td>
            {{- form_errors(form) -}}
            {{- form_widget(form) -}}
        </td>
    </tr>
{%- endblock form_row -%}

{%- block button_row -%}
    <tr>
        <td></td>
        <td>
            {{- form_widget(form) -}}
        </td>
    </tr>
{%- endblock button_row -%}

{%- block hidden_row -%}
    <tr style=\"display: none\">
        <td colspan=\"2\">
            {{- form_widget(form) -}}
        </td>
    </tr>
{%- endblock hidden_row -%}

{%- block form_widget_compound -%}
    <table {{ block('widget_container_attributes') }}>
        {%- if form is rootform and errors|length > 0 -%}
        <tr>
            <td colspan=\"2\">
                {{- form_errors(form) -}}
            </td>
        </tr>
        {%- endif -%}
        {{- block('form_rows') -}}
        {{- form_rest(form) -}}
    </table>
{%- endblock form_widget_compound -%}
", "form_table_layout.html.twig", "/Users/Rachid/SymfonyProjects/api-lab/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form/form_table_layout.html.twig");
    }
}
