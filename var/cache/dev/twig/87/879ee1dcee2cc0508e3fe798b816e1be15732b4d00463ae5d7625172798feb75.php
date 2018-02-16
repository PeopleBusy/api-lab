<?php

/* foundation_5_layout.html.twig */
class __TwigTemplate_f3d216b3a78734c35163b270b70fd40283d1bb8dd9a06138b918d7284267a83a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("form_div_layout.html.twig", "foundation_5_layout.html.twig", 1);
        $this->blocks = array(
            'form_widget_simple' => array($this, 'block_form_widget_simple'),
            'textarea_widget' => array($this, 'block_textarea_widget'),
            'button_widget' => array($this, 'block_button_widget'),
            'money_widget' => array($this, 'block_money_widget'),
            'percent_widget' => array($this, 'block_percent_widget'),
            'datetime_widget' => array($this, 'block_datetime_widget'),
            'date_widget' => array($this, 'block_date_widget'),
            'time_widget' => array($this, 'block_time_widget'),
            'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
            'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
            'checkbox_widget' => array($this, 'block_checkbox_widget'),
            'radio_widget' => array($this, 'block_radio_widget'),
            'form_label' => array($this, 'block_form_label'),
            'choice_label' => array($this, 'block_choice_label'),
            'checkbox_label' => array($this, 'block_checkbox_label'),
            'radio_label' => array($this, 'block_radio_label'),
            'checkbox_radio_label' => array($this, 'block_checkbox_radio_label'),
            'form_row' => array($this, 'block_form_row'),
            'choice_row' => array($this, 'block_choice_row'),
            'date_row' => array($this, 'block_date_row'),
            'time_row' => array($this, 'block_time_row'),
            'datetime_row' => array($this, 'block_datetime_row'),
            'checkbox_row' => array($this, 'block_checkbox_row'),
            'radio_row' => array($this, 'block_radio_row'),
            'form_errors' => array($this, 'block_form_errors'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "form_div_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b6f220c5dcd45f9afe03576758f0af9de6a0b811d2701f2084f3cec4969d72af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6f220c5dcd45f9afe03576758f0af9de6a0b811d2701f2084f3cec4969d72af->enter($__internal_b6f220c5dcd45f9afe03576758f0af9de6a0b811d2701f2084f3cec4969d72af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "foundation_5_layout.html.twig"));

        $__internal_4eba853814dd7b56b1ae7459a842f7dda21ff259651538dbfe353523487443df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4eba853814dd7b56b1ae7459a842f7dda21ff259651538dbfe353523487443df->enter($__internal_4eba853814dd7b56b1ae7459a842f7dda21ff259651538dbfe353523487443df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "foundation_5_layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b6f220c5dcd45f9afe03576758f0af9de6a0b811d2701f2084f3cec4969d72af->leave($__internal_b6f220c5dcd45f9afe03576758f0af9de6a0b811d2701f2084f3cec4969d72af_prof);

        
        $__internal_4eba853814dd7b56b1ae7459a842f7dda21ff259651538dbfe353523487443df->leave($__internal_4eba853814dd7b56b1ae7459a842f7dda21ff259651538dbfe353523487443df_prof);

    }

    // line 6
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_b5f8a0623d1e10d0b3ca1352cddc42306cd335d5cc83cf6068aba4e2101fb835 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b5f8a0623d1e10d0b3ca1352cddc42306cd335d5cc83cf6068aba4e2101fb835->enter($__internal_b5f8a0623d1e10d0b3ca1352cddc42306cd335d5cc83cf6068aba4e2101fb835_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_6840a839aa0199612a21df39b1efbb0e955041f0edc6c2afbac0841a1d1747d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6840a839aa0199612a21df39b1efbb0e955041f0edc6c2afbac0841a1d1747d4->enter($__internal_6840a839aa0199612a21df39b1efbb0e955041f0edc6c2afbac0841a1d1747d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 7
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 8
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 9
            echo "    ";
        }
        // line 10
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_6840a839aa0199612a21df39b1efbb0e955041f0edc6c2afbac0841a1d1747d4->leave($__internal_6840a839aa0199612a21df39b1efbb0e955041f0edc6c2afbac0841a1d1747d4_prof);

        
        $__internal_b5f8a0623d1e10d0b3ca1352cddc42306cd335d5cc83cf6068aba4e2101fb835->leave($__internal_b5f8a0623d1e10d0b3ca1352cddc42306cd335d5cc83cf6068aba4e2101fb835_prof);

    }

    // line 13
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_c0b9ca3c18a89e1b4dcaa8d5fc148e9d3c1490ffd264d3d37eb91629d6cb58f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0b9ca3c18a89e1b4dcaa8d5fc148e9d3c1490ffd264d3d37eb91629d6cb58f8->enter($__internal_c0b9ca3c18a89e1b4dcaa8d5fc148e9d3c1490ffd264d3d37eb91629d6cb58f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_4575091d9bd1eb89e241d2b0214391c09c3b6f1bed90971665a4bccf6579bc65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4575091d9bd1eb89e241d2b0214391c09c3b6f1bed90971665a4bccf6579bc65->enter($__internal_4575091d9bd1eb89e241d2b0214391c09c3b6f1bed90971665a4bccf6579bc65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 14
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 15
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 16
            echo "    ";
        }
        // line 17
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_4575091d9bd1eb89e241d2b0214391c09c3b6f1bed90971665a4bccf6579bc65->leave($__internal_4575091d9bd1eb89e241d2b0214391c09c3b6f1bed90971665a4bccf6579bc65_prof);

        
        $__internal_c0b9ca3c18a89e1b4dcaa8d5fc148e9d3c1490ffd264d3d37eb91629d6cb58f8->leave($__internal_c0b9ca3c18a89e1b4dcaa8d5fc148e9d3c1490ffd264d3d37eb91629d6cb58f8_prof);

    }

    // line 20
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_3bb3b8c09c49ec2198af4945da3df2807c997363acd69131484670fad780723e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3bb3b8c09c49ec2198af4945da3df2807c997363acd69131484670fad780723e->enter($__internal_3bb3b8c09c49ec2198af4945da3df2807c997363acd69131484670fad780723e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_de85fcacb43579c997e7a9e63682d7a1213e62428077ba16f974c98e39ecae2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de85fcacb43579c997e7a9e63682d7a1213e62428077ba16f974c98e39ecae2c->enter($__internal_de85fcacb43579c997e7a9e63682d7a1213e62428077ba16f974c98e39ecae2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 21
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " button"))));
        // line 22
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_de85fcacb43579c997e7a9e63682d7a1213e62428077ba16f974c98e39ecae2c->leave($__internal_de85fcacb43579c997e7a9e63682d7a1213e62428077ba16f974c98e39ecae2c_prof);

        
        $__internal_3bb3b8c09c49ec2198af4945da3df2807c997363acd69131484670fad780723e->leave($__internal_3bb3b8c09c49ec2198af4945da3df2807c997363acd69131484670fad780723e_prof);

    }

    // line 25
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_8abcb783e89682928d643bcee0dd747fdfadeab42f725fb5c299552523ff4531 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8abcb783e89682928d643bcee0dd747fdfadeab42f725fb5c299552523ff4531->enter($__internal_8abcb783e89682928d643bcee0dd747fdfadeab42f725fb5c299552523ff4531_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_cf7240e11eb5246a2a6d235eabce7ff6eb4b5358aa7098334c7f18ec09c5617f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf7240e11eb5246a2a6d235eabce7ff6eb4b5358aa7098334c7f18ec09c5617f->enter($__internal_cf7240e11eb5246a2a6d235eabce7ff6eb4b5358aa7098334c7f18ec09c5617f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 26
        echo "<div class=\"row collapse\">
        ";
        // line 27
        $context["prepend"] = ("{{" == twig_slice($this->env, ($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), 0, 2));
        // line 28
        echo "        ";
        if ( !($context["prepend"] ?? $this->getContext($context, "prepend"))) {
            // line 29
            echo "            <div class=\"small-3 large-2 columns\">
                <span class=\"prefix\">";
            // line 30
            echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
            </div>
        ";
        }
        // line 33
        echo "        <div class=\"small-9 large-10 columns\">";
        // line 34
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 35
        echo "</div>
        ";
        // line 36
        if (($context["prepend"] ?? $this->getContext($context, "prepend"))) {
            // line 37
            echo "            <div class=\"small-3 large-2 columns\">
                <span class=\"postfix\">";
            // line 38
            echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
            </div>
        ";
        }
        // line 41
        echo "    </div>";
        
        $__internal_cf7240e11eb5246a2a6d235eabce7ff6eb4b5358aa7098334c7f18ec09c5617f->leave($__internal_cf7240e11eb5246a2a6d235eabce7ff6eb4b5358aa7098334c7f18ec09c5617f_prof);

        
        $__internal_8abcb783e89682928d643bcee0dd747fdfadeab42f725fb5c299552523ff4531->leave($__internal_8abcb783e89682928d643bcee0dd747fdfadeab42f725fb5c299552523ff4531_prof);

    }

    // line 44
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_f44456e348786cc2270c07983eb557955d05543d3348fa2dc28fdc5fc398e1e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f44456e348786cc2270c07983eb557955d05543d3348fa2dc28fdc5fc398e1e7->enter($__internal_f44456e348786cc2270c07983eb557955d05543d3348fa2dc28fdc5fc398e1e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_6b30224c3e4cd130fb806c7213597f0854966c2db48f0bbaa40f9749de2d7093 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b30224c3e4cd130fb806c7213597f0854966c2db48f0bbaa40f9749de2d7093->enter($__internal_6b30224c3e4cd130fb806c7213597f0854966c2db48f0bbaa40f9749de2d7093_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 45
        echo "<div class=\"row collapse\">
        <div class=\"small-9 large-10 columns\">";
        // line 47
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 48
        echo "</div>
        <div class=\"small-3 large-2 columns\">
            <span class=\"postfix\">%</span>
        </div>
    </div>";
        
        $__internal_6b30224c3e4cd130fb806c7213597f0854966c2db48f0bbaa40f9749de2d7093->leave($__internal_6b30224c3e4cd130fb806c7213597f0854966c2db48f0bbaa40f9749de2d7093_prof);

        
        $__internal_f44456e348786cc2270c07983eb557955d05543d3348fa2dc28fdc5fc398e1e7->leave($__internal_f44456e348786cc2270c07983eb557955d05543d3348fa2dc28fdc5fc398e1e7_prof);

    }

    // line 55
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_80c4d391b85419e383b218deaf6c6e20e074a4feca9c410aee169a960a158490 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80c4d391b85419e383b218deaf6c6e20e074a4feca9c410aee169a960a158490->enter($__internal_80c4d391b85419e383b218deaf6c6e20e074a4feca9c410aee169a960a158490_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_dd052994f7f3a338517df7b8c54eafcca8e3680543402ba6a421f372a21c11e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd052994f7f3a338517df7b8c54eafcca8e3680543402ba6a421f372a21c11e4->enter($__internal_dd052994f7f3a338517df7b8c54eafcca8e3680543402ba6a421f372a21c11e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 56
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 57
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 59
            echo "        ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " row"))));
            // line 60
            echo "        <div class=\"row\">
            <div class=\"large-7 columns\">";
            // line 61
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'errors');
            echo "</div>
            <div class=\"large-5 columns\">";
            // line 62
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'errors');
            echo "</div>
        </div>
        <div ";
            // line 64
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            <div class=\"large-7 columns\">";
            // line 65
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'widget', array("datetime" => true));
            echo "</div>
            <div class=\"large-5 columns\">";
            // line 66
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'widget', array("datetime" => true));
            echo "</div>
        </div>
    ";
        }
        
        $__internal_dd052994f7f3a338517df7b8c54eafcca8e3680543402ba6a421f372a21c11e4->leave($__internal_dd052994f7f3a338517df7b8c54eafcca8e3680543402ba6a421f372a21c11e4_prof);

        
        $__internal_80c4d391b85419e383b218deaf6c6e20e074a4feca9c410aee169a960a158490->leave($__internal_80c4d391b85419e383b218deaf6c6e20e074a4feca9c410aee169a960a158490_prof);

    }

    // line 71
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_6372899851eca45955d267c9668a2d27cb01b9a667ad53bbf1ebb52b57c2867a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6372899851eca45955d267c9668a2d27cb01b9a667ad53bbf1ebb52b57c2867a->enter($__internal_6372899851eca45955d267c9668a2d27cb01b9a667ad53bbf1ebb52b57c2867a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_67c873c3c4d008ce0597415f4cf9e781577a570a42b19090cd3aa0affae3a7d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67c873c3c4d008ce0597415f4cf9e781577a570a42b19090cd3aa0affae3a7d6->enter($__internal_67c873c3c4d008ce0597415f4cf9e781577a570a42b19090cd3aa0affae3a7d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 72
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 73
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 75
            echo "        ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " row"))));
            // line 76
            echo "        ";
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? $this->getContext($context, "datetime")))) {
                // line 77
                echo "            <div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">
        ";
            }
            // line 79
            echo twig_replace_filter(($context["date_pattern"] ?? $this->getContext($context, "date_pattern")), array("{{ year }}" => (("<div class=\"large-4 columns\">" .             // line 80
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "year", array()), 'widget')) . "</div>"), "{{ month }}" => (("<div class=\"large-4 columns\">" .             // line 81
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "month", array()), 'widget')) . "</div>"), "{{ day }}" => (("<div class=\"large-4 columns\">" .             // line 82
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "day", array()), 'widget')) . "</div>")));
            // line 84
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? $this->getContext($context, "datetime")))) {
                // line 85
                echo "            </div>
        ";
            }
            // line 87
            echo "    ";
        }
        
        $__internal_67c873c3c4d008ce0597415f4cf9e781577a570a42b19090cd3aa0affae3a7d6->leave($__internal_67c873c3c4d008ce0597415f4cf9e781577a570a42b19090cd3aa0affae3a7d6_prof);

        
        $__internal_6372899851eca45955d267c9668a2d27cb01b9a667ad53bbf1ebb52b57c2867a->leave($__internal_6372899851eca45955d267c9668a2d27cb01b9a667ad53bbf1ebb52b57c2867a_prof);

    }

    // line 90
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_4c8cef48dc0e6cd477aa32d3f4f3b4fb55b3fce9c7a9be967f96ae21d7c8d668 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c8cef48dc0e6cd477aa32d3f4f3b4fb55b3fce9c7a9be967f96ae21d7c8d668->enter($__internal_4c8cef48dc0e6cd477aa32d3f4f3b4fb55b3fce9c7a9be967f96ae21d7c8d668_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_9f9f6696c94970b126ded30a219a3e85b59981ffe2d135c982b402f0473f7009 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f9f6696c94970b126ded30a219a3e85b59981ffe2d135c982b402f0473f7009->enter($__internal_9f9f6696c94970b126ded30a219a3e85b59981ffe2d135c982b402f0473f7009_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 91
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 92
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 94
            echo "        ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " row"))));
            // line 95
            echo "        ";
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? $this->getContext($context, "datetime"))))) {
                // line 96
                echo "            <div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">
        ";
            }
            // line 98
            echo "        ";
            if (($context["with_seconds"] ?? $this->getContext($context, "with_seconds"))) {
                // line 99
                echo "            <div class=\"large-4 columns\">";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hour", array()), 'widget');
                echo "</div>
            <div class=\"large-4 columns\">
                <div class=\"row collapse\">
                    <div class=\"small-3 large-2 columns\">
                        <span class=\"prefix\">:</span>
                    </div>
                    <div class=\"small-9 large-10 columns\">
                        ";
                // line 106
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minute", array()), 'widget');
                echo "
                    </div>
                </div>
            </div>
            <div class=\"large-4 columns\">
                <div class=\"row collapse\">
                    <div class=\"small-3 large-2 columns\">
                        <span class=\"prefix\">:</span>
                    </div>
                    <div class=\"small-9 large-10 columns\">
                        ";
                // line 116
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "second", array()), 'widget');
                echo "
                    </div>
                </div>
            </div>
        ";
            } else {
                // line 121
                echo "            <div class=\"large-6 columns\">";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hour", array()), 'widget');
                echo "</div>
            <div class=\"large-6 columns\">
                <div class=\"row collapse\">
                    <div class=\"small-3 large-2 columns\">
                        <span class=\"prefix\">:</span>
                    </div>
                    <div class=\"small-9 large-10 columns\">
                        ";
                // line 128
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minute", array()), 'widget');
                echo "
                    </div>
                </div>
            </div>
        ";
            }
            // line 133
            echo "        ";
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? $this->getContext($context, "datetime"))))) {
                // line 134
                echo "            </div>
        ";
            }
            // line 136
            echo "    ";
        }
        
        $__internal_9f9f6696c94970b126ded30a219a3e85b59981ffe2d135c982b402f0473f7009->leave($__internal_9f9f6696c94970b126ded30a219a3e85b59981ffe2d135c982b402f0473f7009_prof);

        
        $__internal_4c8cef48dc0e6cd477aa32d3f4f3b4fb55b3fce9c7a9be967f96ae21d7c8d668->leave($__internal_4c8cef48dc0e6cd477aa32d3f4f3b4fb55b3fce9c7a9be967f96ae21d7c8d668_prof);

    }

    // line 139
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_022a12b6545f1a9308d0e1e5d1971ff97a1a9eafa518ef9f1263c1e8553b2d20 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_022a12b6545f1a9308d0e1e5d1971ff97a1a9eafa518ef9f1263c1e8553b2d20->enter($__internal_022a12b6545f1a9308d0e1e5d1971ff97a1a9eafa518ef9f1263c1e8553b2d20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_fb8330bb4ec6e028a92538d3ab4afa57d7dd4b5c8b39fb511bb8309a473e01dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb8330bb4ec6e028a92538d3ab4afa57d7dd4b5c8b39fb511bb8309a473e01dd->enter($__internal_fb8330bb4ec6e028a92538d3ab4afa57d7dd4b5c8b39fb511bb8309a473e01dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 140
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 141
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 142
            echo "    ";
        }
        // line 143
        echo "
    ";
        // line 144
        if (($context["multiple"] ?? $this->getContext($context, "multiple"))) {
            // line 145
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("style" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "style", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "style", array()), "")) : ("")) . " height: auto; background-image: none;"))));
            // line 146
            echo "    ";
        }
        // line 147
        echo "
    ";
        // line 148
        if ((((($context["required"] ?? $this->getContext($context, "required")) && (null === ($context["placeholder"] ?? $this->getContext($context, "placeholder")))) &&  !($context["placeholder_in_choices"] ?? $this->getContext($context, "placeholder_in_choices"))) &&  !($context["multiple"] ?? $this->getContext($context, "multiple")))) {
            // line 149
            $context["required"] = false;
        }
        // line 151
        echo "<select ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (($context["multiple"] ?? $this->getContext($context, "multiple"))) {
            echo " multiple=\"multiple\" data-customforms=\"disabled\"";
        }
        echo ">
        ";
        // line 152
        if ( !(null === ($context["placeholder"] ?? $this->getContext($context, "placeholder")))) {
            // line 153
            echo "<option value=\"\"";
            if ((($context["required"] ?? $this->getContext($context, "required")) && twig_test_empty(($context["value"] ?? $this->getContext($context, "value"))))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, (((($context["translation_domain"] ?? $this->getContext($context, "translation_domain")) === false)) ? (($context["placeholder"] ?? $this->getContext($context, "placeholder"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["placeholder"] ?? $this->getContext($context, "placeholder")), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain"))))), "html", null, true);
            echo "</option>";
        }
        // line 155
        if ((twig_length_filter($this->env, ($context["preferred_choices"] ?? $this->getContext($context, "preferred_choices"))) > 0)) {
            // line 156
            $context["options"] = ($context["preferred_choices"] ?? $this->getContext($context, "preferred_choices"));
            // line 157
            $this->displayBlock("choice_widget_options", $context, $blocks);
            // line 158
            if (((twig_length_filter($this->env, ($context["choices"] ?? $this->getContext($context, "choices"))) > 0) &&  !(null === ($context["separator"] ?? $this->getContext($context, "separator"))))) {
                // line 159
                echo "<option disabled=\"disabled\">";
                echo twig_escape_filter($this->env, ($context["separator"] ?? $this->getContext($context, "separator")), "html", null, true);
                echo "</option>";
            }
        }
        // line 162
        $context["options"] = ($context["choices"] ?? $this->getContext($context, "choices"));
        // line 163
        $this->displayBlock("choice_widget_options", $context, $blocks);
        // line 164
        echo "</select>";
        
        $__internal_fb8330bb4ec6e028a92538d3ab4afa57d7dd4b5c8b39fb511bb8309a473e01dd->leave($__internal_fb8330bb4ec6e028a92538d3ab4afa57d7dd4b5c8b39fb511bb8309a473e01dd_prof);

        
        $__internal_022a12b6545f1a9308d0e1e5d1971ff97a1a9eafa518ef9f1263c1e8553b2d20->leave($__internal_022a12b6545f1a9308d0e1e5d1971ff97a1a9eafa518ef9f1263c1e8553b2d20_prof);

    }

    // line 167
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_01f7215a005c58da3fc9701d10957d1f20c0d32bfafe479a430a4610c27a40f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01f7215a005c58da3fc9701d10957d1f20c0d32bfafe479a430a4610c27a40f1->enter($__internal_01f7215a005c58da3fc9701d10957d1f20c0d32bfafe479a430a4610c27a40f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_4d68fa032ce55e1a8cb3d2130f0f6dafb1834d4d3f6a8acccf54a04e0653de49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d68fa032ce55e1a8cb3d2130f0f6dafb1834d4d3f6a8acccf54a04e0653de49->enter($__internal_4d68fa032ce55e1a8cb3d2130f0f6dafb1834d4d3f6a8acccf54a04e0653de49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 168
        if (twig_in_filter("-inline", (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) {
            // line 169
            echo "        <ul class=\"inline-list\">
            ";
            // line 170
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 171
                echo "                <li>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 172
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
                // line 173
                echo "</li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 175
            echo "        </ul>
    ";
        } else {
            // line 177
            echo "        <div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            ";
            // line 178
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 179
                echo "                ";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 180
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
                // line 181
                echo "
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 183
            echo "        </div>
    ";
        }
        
        $__internal_4d68fa032ce55e1a8cb3d2130f0f6dafb1834d4d3f6a8acccf54a04e0653de49->leave($__internal_4d68fa032ce55e1a8cb3d2130f0f6dafb1834d4d3f6a8acccf54a04e0653de49_prof);

        
        $__internal_01f7215a005c58da3fc9701d10957d1f20c0d32bfafe479a430a4610c27a40f1->leave($__internal_01f7215a005c58da3fc9701d10957d1f20c0d32bfafe479a430a4610c27a40f1_prof);

    }

    // line 187
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_2b66734043f4380c525450c42c4a0f2f00a0500489744175c49afa55aa5924f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b66734043f4380c525450c42c4a0f2f00a0500489744175c49afa55aa5924f4->enter($__internal_2b66734043f4380c525450c42c4a0f2f00a0500489744175c49afa55aa5924f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_74a4577966db0ca8ca2c7309fe4f3d892ca314c74a0ab533e0afdb199bb292a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74a4577966db0ca8ca2c7309fe4f3d892ca314c74a0ab533e0afdb199bb292a5->enter($__internal_74a4577966db0ca8ca2c7309fe4f3d892ca314c74a0ab533e0afdb199bb292a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 188
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")), "")) : (""));
        // line 189
        echo "    ";
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 190
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 191
            echo "    ";
        }
        // line 192
        echo "    ";
        if (twig_in_filter("checkbox-inline", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 193
            echo "        ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            echo "
    ";
        } else {
            // line 195
            echo "        <div class=\"checkbox\">
            ";
            // line 196
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            echo "
        </div>
    ";
        }
        
        $__internal_74a4577966db0ca8ca2c7309fe4f3d892ca314c74a0ab533e0afdb199bb292a5->leave($__internal_74a4577966db0ca8ca2c7309fe4f3d892ca314c74a0ab533e0afdb199bb292a5_prof);

        
        $__internal_2b66734043f4380c525450c42c4a0f2f00a0500489744175c49afa55aa5924f4->leave($__internal_2b66734043f4380c525450c42c4a0f2f00a0500489744175c49afa55aa5924f4_prof);

    }

    // line 201
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_c0d671e9946adb8170e2c81aee4f46bb465d05a58c02e39bd59897f7d552239f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0d671e9946adb8170e2c81aee4f46bb465d05a58c02e39bd59897f7d552239f->enter($__internal_c0d671e9946adb8170e2c81aee4f46bb465d05a58c02e39bd59897f7d552239f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_5d9d6f779361f2b75b2f0721a6635d1304abf92a01cc8758882f27e89f1e38a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d9d6f779361f2b75b2f0721a6635d1304abf92a01cc8758882f27e89f1e38a0->enter($__internal_5d9d6f779361f2b75b2f0721a6635d1304abf92a01cc8758882f27e89f1e38a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 202
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")), "")) : (""));
        // line 203
        echo "    ";
        if (twig_in_filter("radio-inline", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 204
            echo "        ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            echo "
    ";
        } else {
            // line 206
            echo "        ";
            if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
                // line 207
                $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
                // line 208
                echo "        ";
            }
            // line 209
            echo "        <div class=\"radio\">
            ";
            // line 210
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            echo "
        </div>
    ";
        }
        
        $__internal_5d9d6f779361f2b75b2f0721a6635d1304abf92a01cc8758882f27e89f1e38a0->leave($__internal_5d9d6f779361f2b75b2f0721a6635d1304abf92a01cc8758882f27e89f1e38a0_prof);

        
        $__internal_c0d671e9946adb8170e2c81aee4f46bb465d05a58c02e39bd59897f7d552239f->leave($__internal_c0d671e9946adb8170e2c81aee4f46bb465d05a58c02e39bd59897f7d552239f_prof);

    }

    // line 217
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_b7f4d5ca6e885dfc5b48bb9881bf5be0efe78977fb6f3bb1fbe1bdd359d70b18 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7f4d5ca6e885dfc5b48bb9881bf5be0efe78977fb6f3bb1fbe1bdd359d70b18->enter($__internal_b7f4d5ca6e885dfc5b48bb9881bf5be0efe78977fb6f3bb1fbe1bdd359d70b18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_8b86b5ebe438d0162b6c54a51ce28451221b947759886a68970c17889ab55bf8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b86b5ebe438d0162b6c54a51ce28451221b947759886a68970c17889ab55bf8->enter($__internal_8b86b5ebe438d0162b6c54a51ce28451221b947759886a68970c17889ab55bf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 218
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 219
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 220
            echo "    ";
        }
        // line 221
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_8b86b5ebe438d0162b6c54a51ce28451221b947759886a68970c17889ab55bf8->leave($__internal_8b86b5ebe438d0162b6c54a51ce28451221b947759886a68970c17889ab55bf8_prof);

        
        $__internal_b7f4d5ca6e885dfc5b48bb9881bf5be0efe78977fb6f3bb1fbe1bdd359d70b18->leave($__internal_b7f4d5ca6e885dfc5b48bb9881bf5be0efe78977fb6f3bb1fbe1bdd359d70b18_prof);

    }

    // line 224
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_f7dadc719783eeb62647a14ad66a373995bf81d1844a8f0d7d9d73a6e618cc0e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7dadc719783eeb62647a14ad66a373995bf81d1844a8f0d7d9d73a6e618cc0e->enter($__internal_f7dadc719783eeb62647a14ad66a373995bf81d1844a8f0d7d9d73a6e618cc0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_ff35c4a3d7b779dbf06a902c0544872ebe4574886a15c06bbf67b16d7d85b475 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff35c4a3d7b779dbf06a902c0544872ebe4574886a15c06bbf67b16d7d85b475->enter($__internal_ff35c4a3d7b779dbf06a902c0544872ebe4574886a15c06bbf67b16d7d85b475_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 225
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 226
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 227
            echo "    ";
        }
        // line 228
        echo "    ";
        // line 229
        echo "    ";
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(twig_replace_filter((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 230
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_ff35c4a3d7b779dbf06a902c0544872ebe4574886a15c06bbf67b16d7d85b475->leave($__internal_ff35c4a3d7b779dbf06a902c0544872ebe4574886a15c06bbf67b16d7d85b475_prof);

        
        $__internal_f7dadc719783eeb62647a14ad66a373995bf81d1844a8f0d7d9d73a6e618cc0e->leave($__internal_f7dadc719783eeb62647a14ad66a373995bf81d1844a8f0d7d9d73a6e618cc0e_prof);

    }

    // line 233
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_7d7fb88a3e16276b6ad6ed451f1bfe330d886c1b492691316f8e95e509213999 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d7fb88a3e16276b6ad6ed451f1bfe330d886c1b492691316f8e95e509213999->enter($__internal_7d7fb88a3e16276b6ad6ed451f1bfe330d886c1b492691316f8e95e509213999_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_7e2a3836f4d7d6e61839eff5a48059f21a10b788f328bad418c41166004991fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e2a3836f4d7d6e61839eff5a48059f21a10b788f328bad418c41166004991fb->enter($__internal_7e2a3836f4d7d6e61839eff5a48059f21a10b788f328bad418c41166004991fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 234
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_7e2a3836f4d7d6e61839eff5a48059f21a10b788f328bad418c41166004991fb->leave($__internal_7e2a3836f4d7d6e61839eff5a48059f21a10b788f328bad418c41166004991fb_prof);

        
        $__internal_7d7fb88a3e16276b6ad6ed451f1bfe330d886c1b492691316f8e95e509213999->leave($__internal_7d7fb88a3e16276b6ad6ed451f1bfe330d886c1b492691316f8e95e509213999_prof);

    }

    // line 237
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_1e5cef3556f22074f1ffa327850dfc980f8b35a8d79f5412896dce7a24756bc6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e5cef3556f22074f1ffa327850dfc980f8b35a8d79f5412896dce7a24756bc6->enter($__internal_1e5cef3556f22074f1ffa327850dfc980f8b35a8d79f5412896dce7a24756bc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_6f6e988e1e0d11b71c948b9863a0f989559861335fc9ed06c8e0a427baf5b4de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f6e988e1e0d11b71c948b9863a0f989559861335fc9ed06c8e0a427baf5b4de->enter($__internal_6f6e988e1e0d11b71c948b9863a0f989559861335fc9ed06c8e0a427baf5b4de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 238
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_6f6e988e1e0d11b71c948b9863a0f989559861335fc9ed06c8e0a427baf5b4de->leave($__internal_6f6e988e1e0d11b71c948b9863a0f989559861335fc9ed06c8e0a427baf5b4de_prof);

        
        $__internal_1e5cef3556f22074f1ffa327850dfc980f8b35a8d79f5412896dce7a24756bc6->leave($__internal_1e5cef3556f22074f1ffa327850dfc980f8b35a8d79f5412896dce7a24756bc6_prof);

    }

    // line 241
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_df08036e6986fba8eb28e61e648bc493d2986eae15a1e39e1182669cb9cd029e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df08036e6986fba8eb28e61e648bc493d2986eae15a1e39e1182669cb9cd029e->enter($__internal_df08036e6986fba8eb28e61e648bc493d2986eae15a1e39e1182669cb9cd029e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_62b48c3514d690368fa3fea8ab514d83611c560cc22e598c9641718e621d8d68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62b48c3514d690368fa3fea8ab514d83611c560cc22e598c9641718e621d8d68->enter($__internal_62b48c3514d690368fa3fea8ab514d83611c560cc22e598c9641718e621d8d68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        // line 242
        if (($context["required"] ?? $this->getContext($context, "required"))) {
            // line 243
            echo "        ";
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " required"))));
            // line 244
            echo "    ";
        }
        // line 245
        echo "    ";
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 246
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 247
            echo "    ";
        }
        // line 248
        echo "    ";
        if (array_key_exists("parent_label_class", $context)) {
            // line 249
            echo "        ";
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class"))))));
            // line 250
            echo "    ";
        }
        // line 251
        echo "    ";
        if (twig_test_empty(($context["label"] ?? $this->getContext($context, "label")))) {
            // line 252
            if ( !twig_test_empty(($context["label_format"] ?? $this->getContext($context, "label_format")))) {
                // line 253
                $context["label"] = twig_replace_filter(($context["label_format"] ?? $this->getContext($context, "label_format")), array("%name%" =>                 // line 254
($context["name"] ?? $this->getContext($context, "name")), "%id%" =>                 // line 255
($context["id"] ?? $this->getContext($context, "id"))));
            } else {
                // line 258
                $context["label"] = $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->humanize(($context["name"] ?? $this->getContext($context, "name")));
            }
        }
        // line 261
        echo "    <label";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["label_attr"] ?? $this->getContext($context, "label_attr")));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            echo " ";
            echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
            echo "=\"";
            echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
            echo "\"";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo ">
        ";
        // line 262
        echo ($context["widget"] ?? $this->getContext($context, "widget"));
        echo "
        ";
        // line 263
        echo twig_escape_filter($this->env, (((($context["translation_domain"] ?? $this->getContext($context, "translation_domain")) === false)) ? (($context["label"] ?? $this->getContext($context, "label"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? $this->getContext($context, "label")), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain"))))), "html", null, true);
        echo "
    </label>";
        
        $__internal_62b48c3514d690368fa3fea8ab514d83611c560cc22e598c9641718e621d8d68->leave($__internal_62b48c3514d690368fa3fea8ab514d83611c560cc22e598c9641718e621d8d68_prof);

        
        $__internal_df08036e6986fba8eb28e61e648bc493d2986eae15a1e39e1182669cb9cd029e->leave($__internal_df08036e6986fba8eb28e61e648bc493d2986eae15a1e39e1182669cb9cd029e_prof);

    }

    // line 269
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_075b57a500dbe709dd95a046932e73f43bb331a7cb2327ee9614471104d471cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_075b57a500dbe709dd95a046932e73f43bb331a7cb2327ee9614471104d471cb->enter($__internal_075b57a500dbe709dd95a046932e73f43bb331a7cb2327ee9614471104d471cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_226d7154954f41a44cca3436c21c87f4bd97aea72f563ba629fe030774428c46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_226d7154954f41a44cca3436c21c87f4bd97aea72f563ba629fe030774428c46->enter($__internal_226d7154954f41a44cca3436c21c87f4bd97aea72f563ba629fe030774428c46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 270
        echo "<div class=\"row\">
        <div class=\"large-12 columns";
        // line 271
        if ((( !($context["compound"] ?? $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter(($context["force_error"] ?? $this->getContext($context, "force_error")), false)) : (false))) &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
            echo " error";
        }
        echo "\">
            ";
        // line 272
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
        echo "
            ";
        // line 273
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
            ";
        // line 274
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "
        </div>
    </div>";
        
        $__internal_226d7154954f41a44cca3436c21c87f4bd97aea72f563ba629fe030774428c46->leave($__internal_226d7154954f41a44cca3436c21c87f4bd97aea72f563ba629fe030774428c46_prof);

        
        $__internal_075b57a500dbe709dd95a046932e73f43bb331a7cb2327ee9614471104d471cb->leave($__internal_075b57a500dbe709dd95a046932e73f43bb331a7cb2327ee9614471104d471cb_prof);

    }

    // line 279
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_df81ab6be202ced9c8836db35853b34b9880dabf55e76600185061f0e0168d86 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df81ab6be202ced9c8836db35853b34b9880dabf55e76600185061f0e0168d86->enter($__internal_df81ab6be202ced9c8836db35853b34b9880dabf55e76600185061f0e0168d86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_23bf9104edbd5b023698ae52ba78c9917deb43691e7caca976a7cc4befabef65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23bf9104edbd5b023698ae52ba78c9917deb43691e7caca976a7cc4befabef65->enter($__internal_23bf9104edbd5b023698ae52ba78c9917deb43691e7caca976a7cc4befabef65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 280
        $context["force_error"] = true;
        // line 281
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_23bf9104edbd5b023698ae52ba78c9917deb43691e7caca976a7cc4befabef65->leave($__internal_23bf9104edbd5b023698ae52ba78c9917deb43691e7caca976a7cc4befabef65_prof);

        
        $__internal_df81ab6be202ced9c8836db35853b34b9880dabf55e76600185061f0e0168d86->leave($__internal_df81ab6be202ced9c8836db35853b34b9880dabf55e76600185061f0e0168d86_prof);

    }

    // line 284
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_0a69b109dff744e06a8c7c1af9b6cd5470e33394a2df234d50cd905ce96ea998 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a69b109dff744e06a8c7c1af9b6cd5470e33394a2df234d50cd905ce96ea998->enter($__internal_0a69b109dff744e06a8c7c1af9b6cd5470e33394a2df234d50cd905ce96ea998_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_25006156b8c17f2d972e20b3636a8402143faf44230395d495888f79072ec8d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25006156b8c17f2d972e20b3636a8402143faf44230395d495888f79072ec8d9->enter($__internal_25006156b8c17f2d972e20b3636a8402143faf44230395d495888f79072ec8d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 285
        $context["force_error"] = true;
        // line 286
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_25006156b8c17f2d972e20b3636a8402143faf44230395d495888f79072ec8d9->leave($__internal_25006156b8c17f2d972e20b3636a8402143faf44230395d495888f79072ec8d9_prof);

        
        $__internal_0a69b109dff744e06a8c7c1af9b6cd5470e33394a2df234d50cd905ce96ea998->leave($__internal_0a69b109dff744e06a8c7c1af9b6cd5470e33394a2df234d50cd905ce96ea998_prof);

    }

    // line 289
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_3bca316f39443193454a97e391a7e2e8532ec0d216ed12e08f828c56905ade6e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3bca316f39443193454a97e391a7e2e8532ec0d216ed12e08f828c56905ade6e->enter($__internal_3bca316f39443193454a97e391a7e2e8532ec0d216ed12e08f828c56905ade6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_38948aa72aafa4b2b4a606f901018a636e9621db91fb9ff8e1ec2935468f3e00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38948aa72aafa4b2b4a606f901018a636e9621db91fb9ff8e1ec2935468f3e00->enter($__internal_38948aa72aafa4b2b4a606f901018a636e9621db91fb9ff8e1ec2935468f3e00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 290
        $context["force_error"] = true;
        // line 291
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_38948aa72aafa4b2b4a606f901018a636e9621db91fb9ff8e1ec2935468f3e00->leave($__internal_38948aa72aafa4b2b4a606f901018a636e9621db91fb9ff8e1ec2935468f3e00_prof);

        
        $__internal_3bca316f39443193454a97e391a7e2e8532ec0d216ed12e08f828c56905ade6e->leave($__internal_3bca316f39443193454a97e391a7e2e8532ec0d216ed12e08f828c56905ade6e_prof);

    }

    // line 294
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_db282b39d5fcac5a89b6e428dad7b19ebb00935b90605bc0b3dd036934100a9f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db282b39d5fcac5a89b6e428dad7b19ebb00935b90605bc0b3dd036934100a9f->enter($__internal_db282b39d5fcac5a89b6e428dad7b19ebb00935b90605bc0b3dd036934100a9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_a8781766c808122462486fd90963f1d62d2321d3659603042468e16eecd1566b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8781766c808122462486fd90963f1d62d2321d3659603042468e16eecd1566b->enter($__internal_a8781766c808122462486fd90963f1d62d2321d3659603042468e16eecd1566b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 295
        $context["force_error"] = true;
        // line 296
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_a8781766c808122462486fd90963f1d62d2321d3659603042468e16eecd1566b->leave($__internal_a8781766c808122462486fd90963f1d62d2321d3659603042468e16eecd1566b_prof);

        
        $__internal_db282b39d5fcac5a89b6e428dad7b19ebb00935b90605bc0b3dd036934100a9f->leave($__internal_db282b39d5fcac5a89b6e428dad7b19ebb00935b90605bc0b3dd036934100a9f_prof);

    }

    // line 299
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_ed04ccf5fe3981f9d6917195fd6a752c4ee38fd75cc14ce898cbb6da67fbc3d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed04ccf5fe3981f9d6917195fd6a752c4ee38fd75cc14ce898cbb6da67fbc3d9->enter($__internal_ed04ccf5fe3981f9d6917195fd6a752c4ee38fd75cc14ce898cbb6da67fbc3d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_00a6667521631783e009263cfce7de814c1a2d5c9b2ead825723f4b8d7cf6030 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00a6667521631783e009263cfce7de814c1a2d5c9b2ead825723f4b8d7cf6030->enter($__internal_00a6667521631783e009263cfce7de814c1a2d5c9b2ead825723f4b8d7cf6030_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 300
        echo "<div class=\"row\">
        <div class=\"large-12 columns";
        // line 301
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo " error";
        }
        echo "\">
            ";
        // line 302
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
            ";
        // line 303
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "
        </div>
    </div>";
        
        $__internal_00a6667521631783e009263cfce7de814c1a2d5c9b2ead825723f4b8d7cf6030->leave($__internal_00a6667521631783e009263cfce7de814c1a2d5c9b2ead825723f4b8d7cf6030_prof);

        
        $__internal_ed04ccf5fe3981f9d6917195fd6a752c4ee38fd75cc14ce898cbb6da67fbc3d9->leave($__internal_ed04ccf5fe3981f9d6917195fd6a752c4ee38fd75cc14ce898cbb6da67fbc3d9_prof);

    }

    // line 308
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_2ecd4dbff4cee4b91ef6da19a8efad628d6f69333785bde69b932c049f0c066a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ecd4dbff4cee4b91ef6da19a8efad628d6f69333785bde69b932c049f0c066a->enter($__internal_2ecd4dbff4cee4b91ef6da19a8efad628d6f69333785bde69b932c049f0c066a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_a614c1f8b35b2e088a763de49c0ee088db11d9ebf299b5d603dc0408dc93780e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a614c1f8b35b2e088a763de49c0ee088db11d9ebf299b5d603dc0408dc93780e->enter($__internal_a614c1f8b35b2e088a763de49c0ee088db11d9ebf299b5d603dc0408dc93780e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 309
        echo "<div class=\"row\">
        <div class=\"large-12 columns";
        // line 310
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo " error";
        }
        echo "\">
            ";
        // line 311
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
            ";
        // line 312
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "
        </div>
    </div>";
        
        $__internal_a614c1f8b35b2e088a763de49c0ee088db11d9ebf299b5d603dc0408dc93780e->leave($__internal_a614c1f8b35b2e088a763de49c0ee088db11d9ebf299b5d603dc0408dc93780e_prof);

        
        $__internal_2ecd4dbff4cee4b91ef6da19a8efad628d6f69333785bde69b932c049f0c066a->leave($__internal_2ecd4dbff4cee4b91ef6da19a8efad628d6f69333785bde69b932c049f0c066a_prof);

    }

    // line 319
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_3c6c6312685e927467c7f818907e90f14a7eee348d9b06085ed02d18ba08a6f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c6c6312685e927467c7f818907e90f14a7eee348d9b06085ed02d18ba08a6f2->enter($__internal_3c6c6312685e927467c7f818907e90f14a7eee348d9b06085ed02d18ba08a6f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_9e61c72bf8ce7e80513e64a0e8b87178245f6be472393fc17765ee6dc7dc8bef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e61c72bf8ce7e80513e64a0e8b87178245f6be472393fc17765ee6dc7dc8bef->enter($__internal_9e61c72bf8ce7e80513e64a0e8b87178245f6be472393fc17765ee6dc7dc8bef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 320
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 321
            if ( !Symfony\Bridge\Twig\Extension\twig_is_root_form(($context["form"] ?? $this->getContext($context, "form")))) {
                echo "<small class=\"error\">";
            } else {
                echo "<div data-alert class=\"alert-box alert\">";
            }
            // line 322
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? $this->getContext($context, "errors")));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 323
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "
            ";
                // line 324
                if ( !$this->getAttribute($context["loop"], "last", array())) {
                    echo ", ";
                }
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 326
            if ( !Symfony\Bridge\Twig\Extension\twig_is_root_form(($context["form"] ?? $this->getContext($context, "form")))) {
                echo "</small>";
            } else {
                echo "</div>";
            }
        }
        
        $__internal_9e61c72bf8ce7e80513e64a0e8b87178245f6be472393fc17765ee6dc7dc8bef->leave($__internal_9e61c72bf8ce7e80513e64a0e8b87178245f6be472393fc17765ee6dc7dc8bef_prof);

        
        $__internal_3c6c6312685e927467c7f818907e90f14a7eee348d9b06085ed02d18ba08a6f2->leave($__internal_3c6c6312685e927467c7f818907e90f14a7eee348d9b06085ed02d18ba08a6f2_prof);

    }

    public function getTemplateName()
    {
        return "foundation_5_layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1078 => 326,  1062 => 324,  1058 => 323,  1041 => 322,  1035 => 321,  1033 => 320,  1024 => 319,  1011 => 312,  1007 => 311,  1001 => 310,  998 => 309,  989 => 308,  976 => 303,  972 => 302,  966 => 301,  963 => 300,  954 => 299,  943 => 296,  941 => 295,  932 => 294,  921 => 291,  919 => 290,  910 => 289,  899 => 286,  897 => 285,  888 => 284,  877 => 281,  875 => 280,  866 => 279,  853 => 274,  849 => 273,  845 => 272,  839 => 271,  836 => 270,  827 => 269,  815 => 263,  811 => 262,  795 => 261,  791 => 258,  788 => 255,  787 => 254,  786 => 253,  784 => 252,  781 => 251,  778 => 250,  775 => 249,  772 => 248,  769 => 247,  767 => 246,  764 => 245,  761 => 244,  758 => 243,  756 => 242,  747 => 241,  737 => 238,  728 => 237,  718 => 234,  709 => 233,  699 => 230,  696 => 229,  694 => 228,  691 => 227,  689 => 226,  687 => 225,  678 => 224,  668 => 221,  665 => 220,  663 => 219,  661 => 218,  652 => 217,  638 => 210,  635 => 209,  632 => 208,  630 => 207,  627 => 206,  621 => 204,  618 => 203,  616 => 202,  607 => 201,  593 => 196,  590 => 195,  584 => 193,  581 => 192,  578 => 191,  576 => 190,  573 => 189,  571 => 188,  562 => 187,  550 => 183,  543 => 181,  541 => 180,  539 => 179,  535 => 178,  530 => 177,  526 => 175,  519 => 173,  517 => 172,  515 => 171,  511 => 170,  508 => 169,  506 => 168,  497 => 167,  487 => 164,  485 => 163,  483 => 162,  477 => 159,  475 => 158,  473 => 157,  471 => 156,  469 => 155,  460 => 153,  458 => 152,  450 => 151,  447 => 149,  445 => 148,  442 => 147,  439 => 146,  437 => 145,  435 => 144,  432 => 143,  429 => 142,  427 => 141,  425 => 140,  416 => 139,  405 => 136,  401 => 134,  398 => 133,  390 => 128,  379 => 121,  371 => 116,  358 => 106,  347 => 99,  344 => 98,  338 => 96,  335 => 95,  332 => 94,  329 => 92,  327 => 91,  318 => 90,  307 => 87,  303 => 85,  301 => 84,  299 => 82,  298 => 81,  297 => 80,  296 => 79,  290 => 77,  287 => 76,  284 => 75,  281 => 73,  279 => 72,  270 => 71,  256 => 66,  252 => 65,  248 => 64,  243 => 62,  239 => 61,  236 => 60,  233 => 59,  230 => 57,  228 => 56,  219 => 55,  205 => 48,  203 => 47,  200 => 45,  191 => 44,  181 => 41,  175 => 38,  172 => 37,  170 => 36,  167 => 35,  165 => 34,  163 => 33,  157 => 30,  154 => 29,  151 => 28,  149 => 27,  146 => 26,  137 => 25,  127 => 22,  125 => 21,  116 => 20,  106 => 17,  103 => 16,  101 => 15,  99 => 14,  90 => 13,  80 => 10,  77 => 9,  75 => 8,  73 => 7,  64 => 6,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"form_div_layout.html.twig\" %}

{# Based on Foundation 5 Doc #}
{# Widgets #}

{% block form_widget_simple -%}
    {% if errors|length > 0 -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}
    {{- parent() -}}
{%- endblock form_widget_simple %}

{% block textarea_widget -%}
    {% if errors|length > 0 -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}
    {{- parent() -}}
{%- endblock textarea_widget %}

{% block button_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' button')|trim}) %}
    {{- parent() -}}
{%- endblock %}

{% block money_widget -%}
    <div class=\"row collapse\">
        {% set prepend = '{{' == money_pattern[0:2] %}
        {% if not prepend %}
            <div class=\"small-3 large-2 columns\">
                <span class=\"prefix\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
            </div>
        {% endif %}
        <div class=\"small-9 large-10 columns\">
            {{- block('form_widget_simple') -}}
        </div>
        {% if prepend %}
            <div class=\"small-3 large-2 columns\">
                <span class=\"postfix\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
            </div>
        {% endif %}
    </div>
{%- endblock money_widget %}

{% block percent_widget -%}
    <div class=\"row collapse\">
        <div class=\"small-9 large-10 columns\">
            {{- block('form_widget_simple') -}}
        </div>
        <div class=\"small-3 large-2 columns\">
            <span class=\"postfix\">%</span>
        </div>
    </div>
{%- endblock percent_widget %}

{% block datetime_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else %}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' row')|trim}) %}
        <div class=\"row\">
            <div class=\"large-7 columns\">{{ form_errors(form.date) }}</div>
            <div class=\"large-5 columns\">{{ form_errors(form.time) }}</div>
        </div>
        <div {{ block('widget_container_attributes') }}>
            <div class=\"large-7 columns\">{{ form_widget(form.date, { datetime: true } ) }}</div>
            <div class=\"large-5 columns\">{{ form_widget(form.time, { datetime: true } ) }}</div>
        </div>
    {% endif %}
{%- endblock datetime_widget %}

{% block date_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else %}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' row')|trim}) %}
        {% if datetime is not defined or not datetime %}
            <div {{ block('widget_container_attributes') }}>
        {% endif %}
        {{- date_pattern|replace({
            '{{ year }}': '<div class=\"large-4 columns\">' ~ form_widget(form.year) ~ '</div>',
            '{{ month }}': '<div class=\"large-4 columns\">' ~ form_widget(form.month) ~ '</div>',
            '{{ day }}': '<div class=\"large-4 columns\">' ~ form_widget(form.day) ~ '</div>',
        })|raw -}}
        {% if datetime is not defined or not datetime %}
            </div>
        {% endif %}
    {% endif %}
{%- endblock date_widget %}

{% block time_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else %}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' row')|trim}) %}
        {% if datetime is not defined or false == datetime %}
            <div {{ block('widget_container_attributes') -}}>
        {% endif %}
        {% if with_seconds %}
            <div class=\"large-4 columns\">{{ form_widget(form.hour) }}</div>
            <div class=\"large-4 columns\">
                <div class=\"row collapse\">
                    <div class=\"small-3 large-2 columns\">
                        <span class=\"prefix\">:</span>
                    </div>
                    <div class=\"small-9 large-10 columns\">
                        {{ form_widget(form.minute) }}
                    </div>
                </div>
            </div>
            <div class=\"large-4 columns\">
                <div class=\"row collapse\">
                    <div class=\"small-3 large-2 columns\">
                        <span class=\"prefix\">:</span>
                    </div>
                    <div class=\"small-9 large-10 columns\">
                        {{ form_widget(form.second) }}
                    </div>
                </div>
            </div>
        {% else %}
            <div class=\"large-6 columns\">{{ form_widget(form.hour) }}</div>
            <div class=\"large-6 columns\">
                <div class=\"row collapse\">
                    <div class=\"small-3 large-2 columns\">
                        <span class=\"prefix\">:</span>
                    </div>
                    <div class=\"small-9 large-10 columns\">
                        {{ form_widget(form.minute) }}
                    </div>
                </div>
            </div>
        {% endif %}
        {% if datetime is not defined or false == datetime %}
            </div>
        {% endif %}
    {% endif %}
{%- endblock time_widget %}

{% block choice_widget_collapsed -%}
    {% if errors|length > 0 -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}

    {% if multiple -%}
        {% set attr = attr|merge({style: (attr.style|default('') ~ ' height: auto; background-image: none;')|trim}) %}
    {% endif %}

    {% if required and placeholder is none and not placeholder_in_choices and not multiple -%}
        {% set required = false %}
    {%- endif -%}
    <select {{ block('widget_attributes') }}{% if multiple %} multiple=\"multiple\" data-customforms=\"disabled\"{% endif %}>
        {% if placeholder is not none -%}
            <option value=\"\"{% if required and value is empty %} selected=\"selected\"{% endif %}>{{ translation_domain is same as(false) ? placeholder : placeholder|trans({}, translation_domain) }}</option>
        {%- endif %}
        {%- if preferred_choices|length > 0 -%}
            {% set options = preferred_choices %}
            {{- block('choice_widget_options') -}}
            {% if choices|length > 0 and separator is not none -%}
                <option disabled=\"disabled\">{{ separator }}</option>
            {%- endif %}
        {%- endif -%}
        {% set options = choices -%}
        {{- block('choice_widget_options') -}}
    </select>
{%- endblock choice_widget_collapsed %}

{% block choice_widget_expanded -%}
    {% if '-inline' in label_attr.class|default('') %}
        <ul class=\"inline-list\">
            {% for child in form %}
                <li>{{ form_widget(child, {
                        parent_label_class: label_attr.class|default(''),
                    }) }}</li>
            {% endfor %}
        </ul>
    {% else %}
        <div {{ block('widget_container_attributes') }}>
            {% for child in form %}
                {{ form_widget(child, {
                    parent_label_class: label_attr.class|default(''),
                }) }}
            {% endfor %}
        </div>
    {% endif %}
{%- endblock choice_widget_expanded %}

{% block checkbox_widget -%}
    {% set parent_label_class = parent_label_class|default('') %}
    {% if errors|length > 0 -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}
    {% if 'checkbox-inline' in parent_label_class %}
        {{ form_label(form, null, { widget: parent() }) }}
    {% else %}
        <div class=\"checkbox\">
            {{ form_label(form, null, { widget: parent() }) }}
        </div>
    {% endif %}
{%- endblock checkbox_widget %}

{% block radio_widget -%}
    {% set parent_label_class = parent_label_class|default('') %}
    {% if 'radio-inline' in parent_label_class %}
        {{ form_label(form, null, { widget: parent() }) }}
    {% else %}
        {% if errors|length > 0 -%}
            {% set attr = attr|merge({class: (attr.class|default('') ~ ' error')|trim}) %}
        {% endif %}
        <div class=\"radio\">
            {{ form_label(form, null, { widget: parent() }) }}
        </div>
    {% endif %}
{%- endblock radio_widget %}

{# Labels #}

{% block form_label -%}
    {% if errors|length > 0 -%}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}
    {{- parent() -}}
{%- endblock form_label %}

{% block choice_label -%}
    {% if errors|length > 0 -%}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}
    {# remove the checkbox-inline and radio-inline class, it's only useful for embed labels #}
    {% set label_attr = label_attr|merge({class: label_attr.class|default('')|replace({'checkbox-inline': '', 'radio-inline': ''})|trim}) %}
    {{- block('form_label') -}}
{%- endblock %}

{% block checkbox_label -%}
    {{- block('checkbox_radio_label') -}}
{%- endblock checkbox_label %}

{% block radio_label -%}
    {{- block('checkbox_radio_label') -}}
{%- endblock radio_label %}

{% block checkbox_radio_label -%}
    {% if required %}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' required')|trim}) %}
    {% endif %}
    {% if errors|length > 0 -%}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}
    {% if parent_label_class is defined %}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ parent_label_class)|trim}) %}
    {% endif %}
    {% if label is empty %}
        {%- if label_format is not empty -%}
            {% set label = label_format|replace({
                '%name%': name,
                '%id%': id,
            }) %}
        {%- else -%}
            {% set label = name|humanize %}
        {%- endif -%}
    {% endif %}
    <label{% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>
        {{ widget|raw }}
        {{ translation_domain is same as(false) ? label : label|trans({}, translation_domain) }}
    </label>
{%- endblock checkbox_radio_label %}

{# Rows #}

{% block form_row -%}
    <div class=\"row\">
        <div class=\"large-12 columns{% if (not compound or force_error|default(false)) and not valid %} error{% endif %}\">
            {{ form_label(form) }}
            {{ form_widget(form) }}
            {{ form_errors(form) }}
        </div>
    </div>
{%- endblock form_row %}

{% block choice_row -%}
    {% set force_error = true %}
    {{ block('form_row') }}
{%- endblock choice_row %}

{% block date_row -%}
    {% set force_error = true %}
    {{ block('form_row') }}
{%- endblock date_row %}

{% block time_row -%}
    {% set force_error = true %}
    {{ block('form_row') }}
{%- endblock time_row %}

{% block datetime_row -%}
    {% set force_error = true %}
    {{ block('form_row') }}
{%- endblock datetime_row %}

{% block checkbox_row -%}
    <div class=\"row\">
        <div class=\"large-12 columns{% if not valid %} error{% endif %}\">
            {{ form_widget(form) }}
            {{ form_errors(form) }}
        </div>
    </div>
{%- endblock checkbox_row %}

{% block radio_row -%}
    <div class=\"row\">
        <div class=\"large-12 columns{% if not valid %} error{% endif %}\">
            {{ form_widget(form) }}
            {{ form_errors(form) }}
        </div>
    </div>
{%- endblock radio_row %}

{# Errors #}

{% block form_errors -%}
    {% if errors|length > 0 -%}
        {% if form is not rootform %}<small class=\"error\">{% else %}<div data-alert class=\"alert-box alert\">{% endif %}
        {%- for error in errors -%}
            {{ error.message }}
            {% if not loop.last %}, {% endif %}
        {%- endfor -%}
        {% if form is not rootform %}</small>{% else %}</div>{% endif %}
    {%- endif %}
{%- endblock form_errors %}
", "foundation_5_layout.html.twig", "/Users/Rachid/SymfonyProjects/api-lab/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form/foundation_5_layout.html.twig");
    }
}
