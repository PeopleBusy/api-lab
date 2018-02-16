<?php

/* bootstrap_3_layout.html.twig */
class __TwigTemplate_c297b1c664b93554758f35c4898ddb7fc56b50421c6e5c8437bc57d050f93eac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("form_div_layout.html.twig", "bootstrap_3_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."form_div_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_widget_simple' => array($this, 'block_form_widget_simple'),
                'textarea_widget' => array($this, 'block_textarea_widget'),
                'button_widget' => array($this, 'block_button_widget'),
                'money_widget' => array($this, 'block_money_widget'),
                'percent_widget' => array($this, 'block_percent_widget'),
                'datetime_widget' => array($this, 'block_datetime_widget'),
                'date_widget' => array($this, 'block_date_widget'),
                'time_widget' => array($this, 'block_time_widget'),
                'dateinterval_widget' => array($this, 'block_dateinterval_widget'),
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
                'button_row' => array($this, 'block_button_row'),
                'choice_row' => array($this, 'block_choice_row'),
                'date_row' => array($this, 'block_date_row'),
                'time_row' => array($this, 'block_time_row'),
                'datetime_row' => array($this, 'block_datetime_row'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
                'radio_row' => array($this, 'block_radio_row'),
                'form_errors' => array($this, 'block_form_errors'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_17899288c9c0526fbead074c8df116d040f22dfecab12dfa2edbbe5e695ed582 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17899288c9c0526fbead074c8df116d040f22dfecab12dfa2edbbe5e695ed582->enter($__internal_17899288c9c0526fbead074c8df116d040f22dfecab12dfa2edbbe5e695ed582_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        $__internal_ad5f934fc9b013a7198309dc6600b5bbc33fbe267a3894ef0cb1c23cce194765 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad5f934fc9b013a7198309dc6600b5bbc33fbe267a3894ef0cb1c23cce194765->enter($__internal_ad5f934fc9b013a7198309dc6600b5bbc33fbe267a3894ef0cb1c23cce194765_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        // line 2
        echo "
";
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 11
        echo "
";
        // line 12
        $this->displayBlock('textarea_widget', $context, $blocks);
        // line 16
        echo "
";
        // line 17
        $this->displayBlock('button_widget', $context, $blocks);
        // line 21
        echo "
";
        // line 22
        $this->displayBlock('money_widget', $context, $blocks);
        // line 39
        echo "
";
        // line 40
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 46
        echo "
";
        // line 47
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 60
        echo "
";
        // line 61
        $this->displayBlock('date_widget', $context, $blocks);
        // line 79
        echo "
";
        // line 80
        $this->displayBlock('time_widget', $context, $blocks);
        // line 95
        $this->displayBlock('dateinterval_widget', $context, $blocks);
        // line 133
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 137
        echo "
";
        // line 138
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 157
        echo "
";
        // line 158
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 168
        echo "
";
        // line 169
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 179
        echo "
";
        // line 181
        echo "
";
        // line 182
        $this->displayBlock('form_label', $context, $blocks);
        // line 186
        echo "
";
        // line 187
        $this->displayBlock('choice_label', $context, $blocks);
        // line 192
        echo "
";
        // line 193
        $this->displayBlock('checkbox_label', $context, $blocks);
        // line 198
        echo "
";
        // line 199
        $this->displayBlock('radio_label', $context, $blocks);
        // line 204
        echo "
";
        // line 205
        $this->displayBlock('checkbox_radio_label', $context, $blocks);
        // line 229
        echo "
";
        // line 231
        echo "
";
        // line 232
        $this->displayBlock('form_row', $context, $blocks);
        // line 239
        echo "
";
        // line 240
        $this->displayBlock('button_row', $context, $blocks);
        // line 245
        echo "
";
        // line 246
        $this->displayBlock('choice_row', $context, $blocks);
        // line 250
        echo "
";
        // line 251
        $this->displayBlock('date_row', $context, $blocks);
        // line 255
        echo "
";
        // line 256
        $this->displayBlock('time_row', $context, $blocks);
        // line 260
        echo "
";
        // line 261
        $this->displayBlock('datetime_row', $context, $blocks);
        // line 265
        echo "
";
        // line 266
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 272
        echo "
";
        // line 273
        $this->displayBlock('radio_row', $context, $blocks);
        // line 279
        echo "
";
        // line 281
        echo "
";
        // line 282
        $this->displayBlock('form_errors', $context, $blocks);
        
        $__internal_17899288c9c0526fbead074c8df116d040f22dfecab12dfa2edbbe5e695ed582->leave($__internal_17899288c9c0526fbead074c8df116d040f22dfecab12dfa2edbbe5e695ed582_prof);

        
        $__internal_ad5f934fc9b013a7198309dc6600b5bbc33fbe267a3894ef0cb1c23cce194765->leave($__internal_ad5f934fc9b013a7198309dc6600b5bbc33fbe267a3894ef0cb1c23cce194765_prof);

    }

    // line 5
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_b7f9835bca95c317f24053d69a873ce1da6fbdf05e49197c6741cfdac94855fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7f9835bca95c317f24053d69a873ce1da6fbdf05e49197c6741cfdac94855fe->enter($__internal_b7f9835bca95c317f24053d69a873ce1da6fbdf05e49197c6741cfdac94855fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_b7c2d4969fbbe1aca9eb7aa48b982720015e3fe9daabbed699ad697eb0ee1761 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7c2d4969fbbe1aca9eb7aa48b982720015e3fe9daabbed699ad697eb0ee1761->enter($__internal_b7c2d4969fbbe1aca9eb7aa48b982720015e3fe9daabbed699ad697eb0ee1761_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 6
        if (( !array_key_exists("type", $context) || !twig_in_filter(($context["type"] ?? $this->getContext($context, "type")), array(0 => "file", 1 => "hidden")))) {
            // line 7
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 9
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_b7c2d4969fbbe1aca9eb7aa48b982720015e3fe9daabbed699ad697eb0ee1761->leave($__internal_b7c2d4969fbbe1aca9eb7aa48b982720015e3fe9daabbed699ad697eb0ee1761_prof);

        
        $__internal_b7f9835bca95c317f24053d69a873ce1da6fbdf05e49197c6741cfdac94855fe->leave($__internal_b7f9835bca95c317f24053d69a873ce1da6fbdf05e49197c6741cfdac94855fe_prof);

    }

    // line 12
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_9a0cf38658d3db04d2d8d09089a087676d5ee52732ba0857770c118c60fb1f33 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a0cf38658d3db04d2d8d09089a087676d5ee52732ba0857770c118c60fb1f33->enter($__internal_9a0cf38658d3db04d2d8d09089a087676d5ee52732ba0857770c118c60fb1f33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_73e328a3537f8b7715f454d3d9298f4f846a8603e76a0bee22d21848ef7d9165 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73e328a3537f8b7715f454d3d9298f4f846a8603e76a0bee22d21848ef7d9165->enter($__internal_73e328a3537f8b7715f454d3d9298f4f846a8603e76a0bee22d21848ef7d9165_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 13
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 14
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_73e328a3537f8b7715f454d3d9298f4f846a8603e76a0bee22d21848ef7d9165->leave($__internal_73e328a3537f8b7715f454d3d9298f4f846a8603e76a0bee22d21848ef7d9165_prof);

        
        $__internal_9a0cf38658d3db04d2d8d09089a087676d5ee52732ba0857770c118c60fb1f33->leave($__internal_9a0cf38658d3db04d2d8d09089a087676d5ee52732ba0857770c118c60fb1f33_prof);

    }

    // line 17
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_b9b453109d7c36add9b5e60633081203ef752ad20e324c67d89b7305d26c0e15 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9b453109d7c36add9b5e60633081203ef752ad20e324c67d89b7305d26c0e15->enter($__internal_b9b453109d7c36add9b5e60633081203ef752ad20e324c67d89b7305d26c0e15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_12a145e46f114ae1367132b81e7c5c1c12538b6517fcdf030558318a55a0570d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12a145e46f114ae1367132b81e7c5c1c12538b6517fcdf030558318a55a0570d->enter($__internal_12a145e46f114ae1367132b81e7c5c1c12538b6517fcdf030558318a55a0570d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 18
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "btn-default")) : ("btn-default")) . " btn"))));
        // line 19
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_12a145e46f114ae1367132b81e7c5c1c12538b6517fcdf030558318a55a0570d->leave($__internal_12a145e46f114ae1367132b81e7c5c1c12538b6517fcdf030558318a55a0570d_prof);

        
        $__internal_b9b453109d7c36add9b5e60633081203ef752ad20e324c67d89b7305d26c0e15->leave($__internal_b9b453109d7c36add9b5e60633081203ef752ad20e324c67d89b7305d26c0e15_prof);

    }

    // line 22
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_1739ab54f28d81e4e65b63ecaf0d5bb29bdec20ba17aa191426f3c2364e75ba1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1739ab54f28d81e4e65b63ecaf0d5bb29bdec20ba17aa191426f3c2364e75ba1->enter($__internal_1739ab54f28d81e4e65b63ecaf0d5bb29bdec20ba17aa191426f3c2364e75ba1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_4fb431e1cae216afb942aff9e1cb054bf0cdd17ed5b3fb51a254112b48f2569a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4fb431e1cae216afb942aff9e1cb054bf0cdd17ed5b3fb51a254112b48f2569a->enter($__internal_4fb431e1cae216afb942aff9e1cb054bf0cdd17ed5b3fb51a254112b48f2569a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 23
        $context["prepend"] =  !(is_string($__internal_68ca01865d7fb293aafed5331e4c3f0763ad1edce0b2cb937bc5618dce7f5b21 = ($context["money_pattern"] ?? $this->getContext($context, "money_pattern"))) && is_string($__internal_d523fc33355496acf79c529a028baa22a6dcd7de0c25a2094ec6917c1d979bd8 = "{{") && ('' === $__internal_d523fc33355496acf79c529a028baa22a6dcd7de0c25a2094ec6917c1d979bd8 || 0 === strpos($__internal_68ca01865d7fb293aafed5331e4c3f0763ad1edce0b2cb937bc5618dce7f5b21, $__internal_d523fc33355496acf79c529a028baa22a6dcd7de0c25a2094ec6917c1d979bd8)));
        // line 24
        echo "    ";
        $context["append"] =  !(is_string($__internal_77d392ecd15a236305e982374227d9693d6b3f052401555e45a45ba62509c918 = ($context["money_pattern"] ?? $this->getContext($context, "money_pattern"))) && is_string($__internal_fba11e159e048bd3491228c74f838bd0b86a43830c6e133fa135f7dbea69ac34 = "}}") && ('' === $__internal_fba11e159e048bd3491228c74f838bd0b86a43830c6e133fa135f7dbea69ac34 || $__internal_fba11e159e048bd3491228c74f838bd0b86a43830c6e133fa135f7dbea69ac34 === substr($__internal_77d392ecd15a236305e982374227d9693d6b3f052401555e45a45ba62509c918, -strlen($__internal_fba11e159e048bd3491228c74f838bd0b86a43830c6e133fa135f7dbea69ac34))));
        // line 25
        echo "    ";
        if ((($context["prepend"] ?? $this->getContext($context, "prepend")) || ($context["append"] ?? $this->getContext($context, "append")))) {
            // line 26
            echo "        <div class=\"input-group\">
            ";
            // line 27
            if (($context["prepend"] ?? $this->getContext($context, "prepend"))) {
                // line 28
                echo "                <span class=\"input-group-addon\">";
                echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
                echo "</span>
            ";
            }
            // line 30
            $this->displayBlock("form_widget_simple", $context, $blocks);
            // line 31
            if (($context["append"] ?? $this->getContext($context, "append"))) {
                // line 32
                echo "                <span class=\"input-group-addon\">";
                echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
                echo "</span>
            ";
            }
            // line 34
            echo "        </div>
    ";
        } else {
            // line 36
            $this->displayBlock("form_widget_simple", $context, $blocks);
        }
        
        $__internal_4fb431e1cae216afb942aff9e1cb054bf0cdd17ed5b3fb51a254112b48f2569a->leave($__internal_4fb431e1cae216afb942aff9e1cb054bf0cdd17ed5b3fb51a254112b48f2569a_prof);

        
        $__internal_1739ab54f28d81e4e65b63ecaf0d5bb29bdec20ba17aa191426f3c2364e75ba1->leave($__internal_1739ab54f28d81e4e65b63ecaf0d5bb29bdec20ba17aa191426f3c2364e75ba1_prof);

    }

    // line 40
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_0a85181d8a10f2a19de02fb6199669752143fb65b361bba6e7d82a66902217fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a85181d8a10f2a19de02fb6199669752143fb65b361bba6e7d82a66902217fd->enter($__internal_0a85181d8a10f2a19de02fb6199669752143fb65b361bba6e7d82a66902217fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_f2eab61a956ca61d061a7aa3972d124460f62e43bf9fbca71bf30a76678e4db8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2eab61a956ca61d061a7aa3972d124460f62e43bf9fbca71bf30a76678e4db8->enter($__internal_f2eab61a956ca61d061a7aa3972d124460f62e43bf9fbca71bf30a76678e4db8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 41
        echo "<div class=\"input-group\">";
        // line 42
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 43
        echo "<span class=\"input-group-addon\">%</span>
    </div>";
        
        $__internal_f2eab61a956ca61d061a7aa3972d124460f62e43bf9fbca71bf30a76678e4db8->leave($__internal_f2eab61a956ca61d061a7aa3972d124460f62e43bf9fbca71bf30a76678e4db8_prof);

        
        $__internal_0a85181d8a10f2a19de02fb6199669752143fb65b361bba6e7d82a66902217fd->leave($__internal_0a85181d8a10f2a19de02fb6199669752143fb65b361bba6e7d82a66902217fd_prof);

    }

    // line 47
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_544f54c101573971cf8edbcf9b190d7af5040b7ff8ba9e753d139af70e110bc5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_544f54c101573971cf8edbcf9b190d7af5040b7ff8ba9e753d139af70e110bc5->enter($__internal_544f54c101573971cf8edbcf9b190d7af5040b7ff8ba9e753d139af70e110bc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_aa06349da3d22b33542a412c8557a8f5e150bcb9aa21acd2a98b6f339757540c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa06349da3d22b33542a412c8557a8f5e150bcb9aa21acd2a98b6f339757540c->enter($__internal_aa06349da3d22b33542a412c8557a8f5e150bcb9aa21acd2a98b6f339757540c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 48
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 49
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 51
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 52
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 53
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'errors');
            // line 54
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'errors');
            // line 55
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'widget', array("datetime" => true));
            // line 56
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'widget', array("datetime" => true));
            // line 57
            echo "</div>";
        }
        
        $__internal_aa06349da3d22b33542a412c8557a8f5e150bcb9aa21acd2a98b6f339757540c->leave($__internal_aa06349da3d22b33542a412c8557a8f5e150bcb9aa21acd2a98b6f339757540c_prof);

        
        $__internal_544f54c101573971cf8edbcf9b190d7af5040b7ff8ba9e753d139af70e110bc5->leave($__internal_544f54c101573971cf8edbcf9b190d7af5040b7ff8ba9e753d139af70e110bc5_prof);

    }

    // line 61
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_6c06046b96babcfc71ff4a5ca5273158033f74c31f87abe68a18c6b844845864 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c06046b96babcfc71ff4a5ca5273158033f74c31f87abe68a18c6b844845864->enter($__internal_6c06046b96babcfc71ff4a5ca5273158033f74c31f87abe68a18c6b844845864_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_2c2bf099dc18d9db0742ce86956eef1b6af5b90f261c284ca2b846cade0b6b8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c2bf099dc18d9db0742ce86956eef1b6af5b90f261c284ca2b846cade0b6b8e->enter($__internal_2c2bf099dc18d9db0742ce86956eef1b6af5b90f261c284ca2b846cade0b6b8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 62
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 63
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 65
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 66
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? $this->getContext($context, "datetime")))) {
                // line 67
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 69
            echo twig_replace_filter(($context["date_pattern"] ?? $this->getContext($context, "date_pattern")), array("{{ year }}" =>             // line 70
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "year", array()), 'widget'), "{{ month }}" =>             // line 71
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "month", array()), 'widget'), "{{ day }}" =>             // line 72
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "day", array()), 'widget')));
            // line 74
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? $this->getContext($context, "datetime")))) {
                // line 75
                echo "</div>";
            }
        }
        
        $__internal_2c2bf099dc18d9db0742ce86956eef1b6af5b90f261c284ca2b846cade0b6b8e->leave($__internal_2c2bf099dc18d9db0742ce86956eef1b6af5b90f261c284ca2b846cade0b6b8e_prof);

        
        $__internal_6c06046b96babcfc71ff4a5ca5273158033f74c31f87abe68a18c6b844845864->leave($__internal_6c06046b96babcfc71ff4a5ca5273158033f74c31f87abe68a18c6b844845864_prof);

    }

    // line 80
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_3bdc2e6744f11e3c47a3a08ce1c3fd7eb6e6d1a11f62f2332320db64fb083186 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3bdc2e6744f11e3c47a3a08ce1c3fd7eb6e6d1a11f62f2332320db64fb083186->enter($__internal_3bdc2e6744f11e3c47a3a08ce1c3fd7eb6e6d1a11f62f2332320db64fb083186_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_4468d092f38462db6a81e8bedb550476f7299bc387f5457487a09e5bb24bdf5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4468d092f38462db6a81e8bedb550476f7299bc387f5457487a09e5bb24bdf5b->enter($__internal_4468d092f38462db6a81e8bedb550476f7299bc387f5457487a09e5bb24bdf5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 81
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 82
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 84
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 85
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? $this->getContext($context, "datetime"))))) {
                // line 86
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 88
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hour", array()), 'widget');
            if (($context["with_minutes"] ?? $this->getContext($context, "with_minutes"))) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minute", array()), 'widget');
            }
            if (($context["with_seconds"] ?? $this->getContext($context, "with_seconds"))) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "second", array()), 'widget');
            }
            // line 89
            echo "        ";
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? $this->getContext($context, "datetime"))))) {
                // line 90
                echo "</div>";
            }
        }
        
        $__internal_4468d092f38462db6a81e8bedb550476f7299bc387f5457487a09e5bb24bdf5b->leave($__internal_4468d092f38462db6a81e8bedb550476f7299bc387f5457487a09e5bb24bdf5b_prof);

        
        $__internal_3bdc2e6744f11e3c47a3a08ce1c3fd7eb6e6d1a11f62f2332320db64fb083186->leave($__internal_3bdc2e6744f11e3c47a3a08ce1c3fd7eb6e6d1a11f62f2332320db64fb083186_prof);

    }

    // line 95
    public function block_dateinterval_widget($context, array $blocks = array())
    {
        $__internal_696e704ad4bee1cfacc98bdab827702d16955124028d11c88b4c66280ad0bcbf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_696e704ad4bee1cfacc98bdab827702d16955124028d11c88b4c66280ad0bcbf->enter($__internal_696e704ad4bee1cfacc98bdab827702d16955124028d11c88b4c66280ad0bcbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        $__internal_1227278b49765799cc81585b2f275ad12118406da1f89cb22462b649d7c27e46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1227278b49765799cc81585b2f275ad12118406da1f89cb22462b649d7c27e46->enter($__internal_1227278b49765799cc81585b2f275ad12118406da1f89cb22462b649d7c27e46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        // line 96
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 97
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 99
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 100
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 101
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
            // line 102
            echo "<div class=\"table-responsive\">
                <table class=\"table ";
            // line 103
            echo twig_escape_filter($this->env, ((array_key_exists("table_class", $context)) ? (_twig_default_filter(($context["table_class"] ?? $this->getContext($context, "table_class")), "table-bordered table-condensed table-striped")) : ("table-bordered table-condensed table-striped")), "html", null, true);
            echo "\">
                    <thead>
                    <tr>";
            // line 106
            if (($context["with_years"] ?? $this->getContext($context, "with_years"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "years", array()), 'label');
                echo "</th>";
            }
            // line 107
            if (($context["with_months"] ?? $this->getContext($context, "with_months"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "months", array()), 'label');
                echo "</th>";
            }
            // line 108
            if (($context["with_weeks"] ?? $this->getContext($context, "with_weeks"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "weeks", array()), 'label');
                echo "</th>";
            }
            // line 109
            if (($context["with_days"] ?? $this->getContext($context, "with_days"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "days", array()), 'label');
                echo "</th>";
            }
            // line 110
            if (($context["with_hours"] ?? $this->getContext($context, "with_hours"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hours", array()), 'label');
                echo "</th>";
            }
            // line 111
            if (($context["with_minutes"] ?? $this->getContext($context, "with_minutes"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minutes", array()), 'label');
                echo "</th>";
            }
            // line 112
            if (($context["with_seconds"] ?? $this->getContext($context, "with_seconds"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "seconds", array()), 'label');
                echo "</th>";
            }
            // line 113
            echo "</tr>
                    </thead>
                    <tbody>
                    <tr>";
            // line 117
            if (($context["with_years"] ?? $this->getContext($context, "with_years"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "years", array()), 'widget');
                echo "</td>";
            }
            // line 118
            if (($context["with_months"] ?? $this->getContext($context, "with_months"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "months", array()), 'widget');
                echo "</td>";
            }
            // line 119
            if (($context["with_weeks"] ?? $this->getContext($context, "with_weeks"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "weeks", array()), 'widget');
                echo "</td>";
            }
            // line 120
            if (($context["with_days"] ?? $this->getContext($context, "with_days"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "days", array()), 'widget');
                echo "</td>";
            }
            // line 121
            if (($context["with_hours"] ?? $this->getContext($context, "with_hours"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hours", array()), 'widget');
                echo "</td>";
            }
            // line 122
            if (($context["with_minutes"] ?? $this->getContext($context, "with_minutes"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minutes", array()), 'widget');
                echo "</td>";
            }
            // line 123
            if (($context["with_seconds"] ?? $this->getContext($context, "with_seconds"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "seconds", array()), 'widget');
                echo "</td>";
            }
            // line 124
            echo "</tr>
                    </tbody>
                </table>
            </div>";
            // line 128
            if (($context["with_invert"] ?? $this->getContext($context, "with_invert"))) {
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "invert", array()), 'widget');
            }
            // line 129
            echo "</div>";
        }
        
        $__internal_1227278b49765799cc81585b2f275ad12118406da1f89cb22462b649d7c27e46->leave($__internal_1227278b49765799cc81585b2f275ad12118406da1f89cb22462b649d7c27e46_prof);

        
        $__internal_696e704ad4bee1cfacc98bdab827702d16955124028d11c88b4c66280ad0bcbf->leave($__internal_696e704ad4bee1cfacc98bdab827702d16955124028d11c88b4c66280ad0bcbf_prof);

    }

    // line 133
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_3deae0c671e58790809c09527956962242ff6dce5518aabded8ecccd3afb3c96 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3deae0c671e58790809c09527956962242ff6dce5518aabded8ecccd3afb3c96->enter($__internal_3deae0c671e58790809c09527956962242ff6dce5518aabded8ecccd3afb3c96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_1fe64cddc1878ac17e4b27189ba94763f132dcf2a1d9c42f09487ed64857836c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1fe64cddc1878ac17e4b27189ba94763f132dcf2a1d9c42f09487ed64857836c->enter($__internal_1fe64cddc1878ac17e4b27189ba94763f132dcf2a1d9c42f09487ed64857836c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 134
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 135
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
        
        $__internal_1fe64cddc1878ac17e4b27189ba94763f132dcf2a1d9c42f09487ed64857836c->leave($__internal_1fe64cddc1878ac17e4b27189ba94763f132dcf2a1d9c42f09487ed64857836c_prof);

        
        $__internal_3deae0c671e58790809c09527956962242ff6dce5518aabded8ecccd3afb3c96->leave($__internal_3deae0c671e58790809c09527956962242ff6dce5518aabded8ecccd3afb3c96_prof);

    }

    // line 138
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_d82d54621522511b33d0fa7282cb7613fcfa3bbbb0771c18b0b7c5fd5ea7f80c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d82d54621522511b33d0fa7282cb7613fcfa3bbbb0771c18b0b7c5fd5ea7f80c->enter($__internal_d82d54621522511b33d0fa7282cb7613fcfa3bbbb0771c18b0b7c5fd5ea7f80c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_4bc16e777b162a560836e8377c3fc302c1261acd5cde6336e701839c74aa8bc0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4bc16e777b162a560836e8377c3fc302c1261acd5cde6336e701839c74aa8bc0->enter($__internal_4bc16e777b162a560836e8377c3fc302c1261acd5cde6336e701839c74aa8bc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 139
        if (twig_in_filter("-inline", (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) {
            // line 140
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 141
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 142
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 143
($context["choice_translation_domain"] ?? $this->getContext($context, "choice_translation_domain"))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 147
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 148
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 149
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 150
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 151
($context["choice_translation_domain"] ?? $this->getContext($context, "choice_translation_domain"))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 154
            echo "</div>";
        }
        
        $__internal_4bc16e777b162a560836e8377c3fc302c1261acd5cde6336e701839c74aa8bc0->leave($__internal_4bc16e777b162a560836e8377c3fc302c1261acd5cde6336e701839c74aa8bc0_prof);

        
        $__internal_d82d54621522511b33d0fa7282cb7613fcfa3bbbb0771c18b0b7c5fd5ea7f80c->leave($__internal_d82d54621522511b33d0fa7282cb7613fcfa3bbbb0771c18b0b7c5fd5ea7f80c_prof);

    }

    // line 158
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_c7519cbde5745e3bc3861119b6a64a62db3a808368e6c39d64d79419cfaf88db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7519cbde5745e3bc3861119b6a64a62db3a808368e6c39d64d79419cfaf88db->enter($__internal_c7519cbde5745e3bc3861119b6a64a62db3a808368e6c39d64d79419cfaf88db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_e3ae3bd095519efe29a4d2676da2ca120d4b009936029ff38d0a10436f1ab73b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3ae3bd095519efe29a4d2676da2ca120d4b009936029ff38d0a10436f1ab73b->enter($__internal_e3ae3bd095519efe29a4d2676da2ca120d4b009936029ff38d0a10436f1ab73b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 159
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")), (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) : ((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
        // line 160
        if (twig_in_filter("checkbox-inline", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 161
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
        } else {
            // line 163
            echo "<div class=\"checkbox\">";
            // line 164
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            // line 165
            echo "</div>";
        }
        
        $__internal_e3ae3bd095519efe29a4d2676da2ca120d4b009936029ff38d0a10436f1ab73b->leave($__internal_e3ae3bd095519efe29a4d2676da2ca120d4b009936029ff38d0a10436f1ab73b_prof);

        
        $__internal_c7519cbde5745e3bc3861119b6a64a62db3a808368e6c39d64d79419cfaf88db->leave($__internal_c7519cbde5745e3bc3861119b6a64a62db3a808368e6c39d64d79419cfaf88db_prof);

    }

    // line 169
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_c5316f0108a7781b6af464745b80c43afe3481df75fa49ef284b38b7761a0474 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5316f0108a7781b6af464745b80c43afe3481df75fa49ef284b38b7761a0474->enter($__internal_c5316f0108a7781b6af464745b80c43afe3481df75fa49ef284b38b7761a0474_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_eef7bf53d421f3d263d066957139e25b6294353988fb986187310443a19b6c2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eef7bf53d421f3d263d066957139e25b6294353988fb986187310443a19b6c2a->enter($__internal_eef7bf53d421f3d263d066957139e25b6294353988fb986187310443a19b6c2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 170
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")), (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) : ((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
        // line 171
        if (twig_in_filter("radio-inline", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 172
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
        } else {
            // line 174
            echo "<div class=\"radio\">";
            // line 175
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            // line 176
            echo "</div>";
        }
        
        $__internal_eef7bf53d421f3d263d066957139e25b6294353988fb986187310443a19b6c2a->leave($__internal_eef7bf53d421f3d263d066957139e25b6294353988fb986187310443a19b6c2a_prof);

        
        $__internal_c5316f0108a7781b6af464745b80c43afe3481df75fa49ef284b38b7761a0474->leave($__internal_c5316f0108a7781b6af464745b80c43afe3481df75fa49ef284b38b7761a0474_prof);

    }

    // line 182
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_0bf558ce5e24983205a84fed3cf741f1461c1b21b5a4dc65de6eb79d1e00e3c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0bf558ce5e24983205a84fed3cf741f1461c1b21b5a4dc65de6eb79d1e00e3c0->enter($__internal_0bf558ce5e24983205a84fed3cf741f1461c1b21b5a4dc65de6eb79d1e00e3c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_3156f1484a87ccd074de93e8be0c3064a65587b223462a421c1fbb5b11f52d3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3156f1484a87ccd074de93e8be0c3064a65587b223462a421c1fbb5b11f52d3f->enter($__internal_3156f1484a87ccd074de93e8be0c3064a65587b223462a421c1fbb5b11f52d3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 183
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " control-label"))));
        // line 184
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_3156f1484a87ccd074de93e8be0c3064a65587b223462a421c1fbb5b11f52d3f->leave($__internal_3156f1484a87ccd074de93e8be0c3064a65587b223462a421c1fbb5b11f52d3f_prof);

        
        $__internal_0bf558ce5e24983205a84fed3cf741f1461c1b21b5a4dc65de6eb79d1e00e3c0->leave($__internal_0bf558ce5e24983205a84fed3cf741f1461c1b21b5a4dc65de6eb79d1e00e3c0_prof);

    }

    // line 187
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_478717a85ec6796875c1482db88169443de12af1e073449546388db246dc3a20 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_478717a85ec6796875c1482db88169443de12af1e073449546388db246dc3a20->enter($__internal_478717a85ec6796875c1482db88169443de12af1e073449546388db246dc3a20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_a790dcfbc56ac98945f7b78b30fdf359de3bd0c8d9ea4c930f38b707826413e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a790dcfbc56ac98945f7b78b30fdf359de3bd0c8d9ea4c930f38b707826413e9->enter($__internal_a790dcfbc56ac98945f7b78b30fdf359de3bd0c8d9ea4c930f38b707826413e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 189
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(twig_replace_filter((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 190
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_a790dcfbc56ac98945f7b78b30fdf359de3bd0c8d9ea4c930f38b707826413e9->leave($__internal_a790dcfbc56ac98945f7b78b30fdf359de3bd0c8d9ea4c930f38b707826413e9_prof);

        
        $__internal_478717a85ec6796875c1482db88169443de12af1e073449546388db246dc3a20->leave($__internal_478717a85ec6796875c1482db88169443de12af1e073449546388db246dc3a20_prof);

    }

    // line 193
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_e175d1c596b066b2584afa56f8dfadc4738f5ec66ba965c2c52069b3b356d407 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e175d1c596b066b2584afa56f8dfadc4738f5ec66ba965c2c52069b3b356d407->enter($__internal_e175d1c596b066b2584afa56f8dfadc4738f5ec66ba965c2c52069b3b356d407_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_0d41c5354bbc46db4560ca04bf4b8fbd74b094eee4a90fbb6ff9d501db08f812 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d41c5354bbc46db4560ca04bf4b8fbd74b094eee4a90fbb6ff9d501db08f812->enter($__internal_0d41c5354bbc46db4560ca04bf4b8fbd74b094eee4a90fbb6ff9d501db08f812_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 194
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("for" => ($context["id"] ?? $this->getContext($context, "id"))));
        // line 196
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_0d41c5354bbc46db4560ca04bf4b8fbd74b094eee4a90fbb6ff9d501db08f812->leave($__internal_0d41c5354bbc46db4560ca04bf4b8fbd74b094eee4a90fbb6ff9d501db08f812_prof);

        
        $__internal_e175d1c596b066b2584afa56f8dfadc4738f5ec66ba965c2c52069b3b356d407->leave($__internal_e175d1c596b066b2584afa56f8dfadc4738f5ec66ba965c2c52069b3b356d407_prof);

    }

    // line 199
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_59c1342095d0512b8a26e019e51dd0a0607d731a97384e6286611f12609dd900 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_59c1342095d0512b8a26e019e51dd0a0607d731a97384e6286611f12609dd900->enter($__internal_59c1342095d0512b8a26e019e51dd0a0607d731a97384e6286611f12609dd900_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_8fed75e2687caff92d5caa193e44718c7482e74d7d20be829426cd2f2a2136ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8fed75e2687caff92d5caa193e44718c7482e74d7d20be829426cd2f2a2136ea->enter($__internal_8fed75e2687caff92d5caa193e44718c7482e74d7d20be829426cd2f2a2136ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 200
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("for" => ($context["id"] ?? $this->getContext($context, "id"))));
        // line 202
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_8fed75e2687caff92d5caa193e44718c7482e74d7d20be829426cd2f2a2136ea->leave($__internal_8fed75e2687caff92d5caa193e44718c7482e74d7d20be829426cd2f2a2136ea_prof);

        
        $__internal_59c1342095d0512b8a26e019e51dd0a0607d731a97384e6286611f12609dd900->leave($__internal_59c1342095d0512b8a26e019e51dd0a0607d731a97384e6286611f12609dd900_prof);

    }

    // line 205
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_e76274cb25f579b9018ee18e23a7306c5c429d9c192a6ba0970007528b8b3d3e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e76274cb25f579b9018ee18e23a7306c5c429d9c192a6ba0970007528b8b3d3e->enter($__internal_e76274cb25f579b9018ee18e23a7306c5c429d9c192a6ba0970007528b8b3d3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_f9235f6615ec5205c2e1a23231cdf66cf007f0a2677de058b3cb42e3230b2761 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9235f6615ec5205c2e1a23231cdf66cf007f0a2677de058b3cb42e3230b2761->enter($__internal_f9235f6615ec5205c2e1a23231cdf66cf007f0a2677de058b3cb42e3230b2761_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        // line 206
        echo "    ";
        // line 207
        echo "    ";
        if (array_key_exists("widget", $context)) {
            // line 208
            echo "        ";
            if (($context["required"] ?? $this->getContext($context, "required"))) {
                // line 209
                echo "            ";
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " required"))));
                // line 210
                echo "        ";
            }
            // line 211
            echo "        ";
            if (array_key_exists("parent_label_class", $context)) {
                // line 212
                echo "            ";
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter((((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") . ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class"))))));
                // line 213
                echo "        ";
            }
            // line 214
            echo "        ";
            if (( !(($context["label"] ?? $this->getContext($context, "label")) === false) && twig_test_empty(($context["label"] ?? $this->getContext($context, "label"))))) {
                // line 215
                if ( !twig_test_empty(($context["label_format"] ?? $this->getContext($context, "label_format")))) {
                    // line 216
                    $context["label"] = twig_replace_filter(($context["label_format"] ?? $this->getContext($context, "label_format")), array("%name%" =>                     // line 217
($context["name"] ?? $this->getContext($context, "name")), "%id%" =>                     // line 218
($context["id"] ?? $this->getContext($context, "id"))));
                } else {
                    // line 221
                    $context["label"] = $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->humanize(($context["name"] ?? $this->getContext($context, "name")));
                }
            }
            // line 224
            echo "        <label";
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
            echo ">";
            // line 225
            echo ($context["widget"] ?? $this->getContext($context, "widget"));
            echo " ";
            echo twig_escape_filter($this->env, (( !(($context["label"] ?? $this->getContext($context, "label")) === false)) ? ((((($context["translation_domain"] ?? $this->getContext($context, "translation_domain")) === false)) ? (($context["label"] ?? $this->getContext($context, "label"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? $this->getContext($context, "label")), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain")))))) : ("")), "html", null, true);
            // line 226
            echo "</label>
    ";
        }
        
        $__internal_f9235f6615ec5205c2e1a23231cdf66cf007f0a2677de058b3cb42e3230b2761->leave($__internal_f9235f6615ec5205c2e1a23231cdf66cf007f0a2677de058b3cb42e3230b2761_prof);

        
        $__internal_e76274cb25f579b9018ee18e23a7306c5c429d9c192a6ba0970007528b8b3d3e->leave($__internal_e76274cb25f579b9018ee18e23a7306c5c429d9c192a6ba0970007528b8b3d3e_prof);

    }

    // line 232
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_6a312dfcf124bcd463863b2284e70854d5c3e996ed71d03f5b289860be6b26ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a312dfcf124bcd463863b2284e70854d5c3e996ed71d03f5b289860be6b26ef->enter($__internal_6a312dfcf124bcd463863b2284e70854d5c3e996ed71d03f5b289860be6b26ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_2b9e6ff2b1feeecf3e3a93d09ecd18828c8613b831d81809827744a76f0ea53f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b9e6ff2b1feeecf3e3a93d09ecd18828c8613b831d81809827744a76f0ea53f->enter($__internal_2b9e6ff2b1feeecf3e3a93d09ecd18828c8613b831d81809827744a76f0ea53f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 233
        echo "<div class=\"form-group";
        if ((( !($context["compound"] ?? $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter(($context["force_error"] ?? $this->getContext($context, "force_error")), false)) : (false))) &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
            echo " has-error";
        }
        echo "\">";
        // line 234
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
        // line 235
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 236
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 237
        echo "</div>";
        
        $__internal_2b9e6ff2b1feeecf3e3a93d09ecd18828c8613b831d81809827744a76f0ea53f->leave($__internal_2b9e6ff2b1feeecf3e3a93d09ecd18828c8613b831d81809827744a76f0ea53f_prof);

        
        $__internal_6a312dfcf124bcd463863b2284e70854d5c3e996ed71d03f5b289860be6b26ef->leave($__internal_6a312dfcf124bcd463863b2284e70854d5c3e996ed71d03f5b289860be6b26ef_prof);

    }

    // line 240
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_9e8e551be4067a3fa095d8898ed10827acc70f164fd0de0b74eab266688975f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e8e551be4067a3fa095d8898ed10827acc70f164fd0de0b74eab266688975f3->enter($__internal_9e8e551be4067a3fa095d8898ed10827acc70f164fd0de0b74eab266688975f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_27b319cfab3ac9d7982904e2833da13b0cdaae1fd3a95f20fcfd8d504d85b932 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27b319cfab3ac9d7982904e2833da13b0cdaae1fd3a95f20fcfd8d504d85b932->enter($__internal_27b319cfab3ac9d7982904e2833da13b0cdaae1fd3a95f20fcfd8d504d85b932_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 241
        echo "<div class=\"form-group\">";
        // line 242
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 243
        echo "</div>";
        
        $__internal_27b319cfab3ac9d7982904e2833da13b0cdaae1fd3a95f20fcfd8d504d85b932->leave($__internal_27b319cfab3ac9d7982904e2833da13b0cdaae1fd3a95f20fcfd8d504d85b932_prof);

        
        $__internal_9e8e551be4067a3fa095d8898ed10827acc70f164fd0de0b74eab266688975f3->leave($__internal_9e8e551be4067a3fa095d8898ed10827acc70f164fd0de0b74eab266688975f3_prof);

    }

    // line 246
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_70e77510205de7abdd84caa0b6869969c6d6564f0d76fd08a80384aafb4c87e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_70e77510205de7abdd84caa0b6869969c6d6564f0d76fd08a80384aafb4c87e1->enter($__internal_70e77510205de7abdd84caa0b6869969c6d6564f0d76fd08a80384aafb4c87e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_16321570697ffa889f336c5244c7cf1fa37d17d5c1f5260ce4b0679a3692e4ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16321570697ffa889f336c5244c7cf1fa37d17d5c1f5260ce4b0679a3692e4ca->enter($__internal_16321570697ffa889f336c5244c7cf1fa37d17d5c1f5260ce4b0679a3692e4ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 247
        $context["force_error"] = true;
        // line 248
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_16321570697ffa889f336c5244c7cf1fa37d17d5c1f5260ce4b0679a3692e4ca->leave($__internal_16321570697ffa889f336c5244c7cf1fa37d17d5c1f5260ce4b0679a3692e4ca_prof);

        
        $__internal_70e77510205de7abdd84caa0b6869969c6d6564f0d76fd08a80384aafb4c87e1->leave($__internal_70e77510205de7abdd84caa0b6869969c6d6564f0d76fd08a80384aafb4c87e1_prof);

    }

    // line 251
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_2cb38f0180b72d417121b8cc6ff62cb9c677c073af8bc9dcde6c76130a9239c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2cb38f0180b72d417121b8cc6ff62cb9c677c073af8bc9dcde6c76130a9239c7->enter($__internal_2cb38f0180b72d417121b8cc6ff62cb9c677c073af8bc9dcde6c76130a9239c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_5e291c4dd7c1f074be85d983f2eef6109cce8121ad1f168c595e0d9e9add3aa5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e291c4dd7c1f074be85d983f2eef6109cce8121ad1f168c595e0d9e9add3aa5->enter($__internal_5e291c4dd7c1f074be85d983f2eef6109cce8121ad1f168c595e0d9e9add3aa5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 252
        $context["force_error"] = true;
        // line 253
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_5e291c4dd7c1f074be85d983f2eef6109cce8121ad1f168c595e0d9e9add3aa5->leave($__internal_5e291c4dd7c1f074be85d983f2eef6109cce8121ad1f168c595e0d9e9add3aa5_prof);

        
        $__internal_2cb38f0180b72d417121b8cc6ff62cb9c677c073af8bc9dcde6c76130a9239c7->leave($__internal_2cb38f0180b72d417121b8cc6ff62cb9c677c073af8bc9dcde6c76130a9239c7_prof);

    }

    // line 256
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_8b38fbce8d840eefebebc67f623abe6bfe9a771f85f749382a03d46ac5161bd8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b38fbce8d840eefebebc67f623abe6bfe9a771f85f749382a03d46ac5161bd8->enter($__internal_8b38fbce8d840eefebebc67f623abe6bfe9a771f85f749382a03d46ac5161bd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_91e0e610df679c1f6956b0779da0828651ffdb7e4c2a860e3a7fc8007c8732a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91e0e610df679c1f6956b0779da0828651ffdb7e4c2a860e3a7fc8007c8732a9->enter($__internal_91e0e610df679c1f6956b0779da0828651ffdb7e4c2a860e3a7fc8007c8732a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 257
        $context["force_error"] = true;
        // line 258
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_91e0e610df679c1f6956b0779da0828651ffdb7e4c2a860e3a7fc8007c8732a9->leave($__internal_91e0e610df679c1f6956b0779da0828651ffdb7e4c2a860e3a7fc8007c8732a9_prof);

        
        $__internal_8b38fbce8d840eefebebc67f623abe6bfe9a771f85f749382a03d46ac5161bd8->leave($__internal_8b38fbce8d840eefebebc67f623abe6bfe9a771f85f749382a03d46ac5161bd8_prof);

    }

    // line 261
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_b14f33a7f8ff796b15f486062cce961eaafdee205042de4c7e732233743d01fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b14f33a7f8ff796b15f486062cce961eaafdee205042de4c7e732233743d01fb->enter($__internal_b14f33a7f8ff796b15f486062cce961eaafdee205042de4c7e732233743d01fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_ad64dce869c5d0f215a730d335104b1e868d2b40fc8d1ab7a66b6427c0faf744 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad64dce869c5d0f215a730d335104b1e868d2b40fc8d1ab7a66b6427c0faf744->enter($__internal_ad64dce869c5d0f215a730d335104b1e868d2b40fc8d1ab7a66b6427c0faf744_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 262
        $context["force_error"] = true;
        // line 263
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_ad64dce869c5d0f215a730d335104b1e868d2b40fc8d1ab7a66b6427c0faf744->leave($__internal_ad64dce869c5d0f215a730d335104b1e868d2b40fc8d1ab7a66b6427c0faf744_prof);

        
        $__internal_b14f33a7f8ff796b15f486062cce961eaafdee205042de4c7e732233743d01fb->leave($__internal_b14f33a7f8ff796b15f486062cce961eaafdee205042de4c7e732233743d01fb_prof);

    }

    // line 266
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_4a33d47b6a2a3f6c628995b345a3df0b5dec389f772ba9a21c80222e80598918 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a33d47b6a2a3f6c628995b345a3df0b5dec389f772ba9a21c80222e80598918->enter($__internal_4a33d47b6a2a3f6c628995b345a3df0b5dec389f772ba9a21c80222e80598918_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_9e8e20710b1579b14f6a5461c82b1cc69e6cf066a9ab29aadffc76b573f2c3c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e8e20710b1579b14f6a5461c82b1cc69e6cf066a9ab29aadffc76b573f2c3c8->enter($__internal_9e8e20710b1579b14f6a5461c82b1cc69e6cf066a9ab29aadffc76b573f2c3c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 267
        echo "<div class=\"form-group";
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">";
        // line 268
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 269
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 270
        echo "</div>";
        
        $__internal_9e8e20710b1579b14f6a5461c82b1cc69e6cf066a9ab29aadffc76b573f2c3c8->leave($__internal_9e8e20710b1579b14f6a5461c82b1cc69e6cf066a9ab29aadffc76b573f2c3c8_prof);

        
        $__internal_4a33d47b6a2a3f6c628995b345a3df0b5dec389f772ba9a21c80222e80598918->leave($__internal_4a33d47b6a2a3f6c628995b345a3df0b5dec389f772ba9a21c80222e80598918_prof);

    }

    // line 273
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_adedf6dea29df780676a2728891d5c6a6c02e580c7f87d4e2a396db57dabf9a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_adedf6dea29df780676a2728891d5c6a6c02e580c7f87d4e2a396db57dabf9a4->enter($__internal_adedf6dea29df780676a2728891d5c6a6c02e580c7f87d4e2a396db57dabf9a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_7e7e171768ebc09dc8ce339ce62ee175e662be6eb39e2b5153d93fe0f9cc902a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e7e171768ebc09dc8ce339ce62ee175e662be6eb39e2b5153d93fe0f9cc902a->enter($__internal_7e7e171768ebc09dc8ce339ce62ee175e662be6eb39e2b5153d93fe0f9cc902a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 274
        echo "<div class=\"form-group";
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">";
        // line 275
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 276
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 277
        echo "</div>";
        
        $__internal_7e7e171768ebc09dc8ce339ce62ee175e662be6eb39e2b5153d93fe0f9cc902a->leave($__internal_7e7e171768ebc09dc8ce339ce62ee175e662be6eb39e2b5153d93fe0f9cc902a_prof);

        
        $__internal_adedf6dea29df780676a2728891d5c6a6c02e580c7f87d4e2a396db57dabf9a4->leave($__internal_adedf6dea29df780676a2728891d5c6a6c02e580c7f87d4e2a396db57dabf9a4_prof);

    }

    // line 282
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_f4a83a6ccfe97ba0b890e83e400e2679fd510ed9d227e7b6ee42043c2d7cce66 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4a83a6ccfe97ba0b890e83e400e2679fd510ed9d227e7b6ee42043c2d7cce66->enter($__internal_f4a83a6ccfe97ba0b890e83e400e2679fd510ed9d227e7b6ee42043c2d7cce66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_f18fabd834a7789f61500ac37f97913e72b154e544e7ad48b4f0414cdabee06b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f18fabd834a7789f61500ac37f97913e72b154e544e7ad48b4f0414cdabee06b->enter($__internal_f18fabd834a7789f61500ac37f97913e72b154e544e7ad48b4f0414cdabee06b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 283
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 284
            if ( !Symfony\Bridge\Twig\Extension\twig_is_root_form(($context["form"] ?? $this->getContext($context, "form")))) {
                echo "<span class=\"help-block\">";
            } else {
                echo "<div class=\"alert alert-danger\">";
            }
            // line 285
            echo "    <ul class=\"list-unstyled\">";
            // line 286
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? $this->getContext($context, "errors")));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 287
                echo "<li><span class=\"glyphicon glyphicon-exclamation-sign\"></span> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 289
            echo "</ul>
    ";
            // line 290
            if ( !Symfony\Bridge\Twig\Extension\twig_is_root_form(($context["form"] ?? $this->getContext($context, "form")))) {
                echo "</span>";
            } else {
                echo "</div>";
            }
        }
        
        $__internal_f18fabd834a7789f61500ac37f97913e72b154e544e7ad48b4f0414cdabee06b->leave($__internal_f18fabd834a7789f61500ac37f97913e72b154e544e7ad48b4f0414cdabee06b_prof);

        
        $__internal_f4a83a6ccfe97ba0b890e83e400e2679fd510ed9d227e7b6ee42043c2d7cce66->leave($__internal_f4a83a6ccfe97ba0b890e83e400e2679fd510ed9d227e7b6ee42043c2d7cce66_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_3_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  1149 => 290,  1146 => 289,  1138 => 287,  1134 => 286,  1132 => 285,  1126 => 284,  1124 => 283,  1115 => 282,  1105 => 277,  1103 => 276,  1101 => 275,  1095 => 274,  1086 => 273,  1076 => 270,  1074 => 269,  1072 => 268,  1066 => 267,  1057 => 266,  1047 => 263,  1045 => 262,  1036 => 261,  1026 => 258,  1024 => 257,  1015 => 256,  1005 => 253,  1003 => 252,  994 => 251,  984 => 248,  982 => 247,  973 => 246,  963 => 243,  961 => 242,  959 => 241,  950 => 240,  940 => 237,  938 => 236,  936 => 235,  934 => 234,  928 => 233,  919 => 232,  907 => 226,  903 => 225,  888 => 224,  884 => 221,  881 => 218,  880 => 217,  879 => 216,  877 => 215,  874 => 214,  871 => 213,  868 => 212,  865 => 211,  862 => 210,  859 => 209,  856 => 208,  853 => 207,  851 => 206,  842 => 205,  832 => 202,  830 => 200,  821 => 199,  811 => 196,  809 => 194,  800 => 193,  790 => 190,  788 => 189,  779 => 187,  769 => 184,  767 => 183,  758 => 182,  747 => 176,  745 => 175,  743 => 174,  740 => 172,  738 => 171,  736 => 170,  727 => 169,  716 => 165,  714 => 164,  712 => 163,  709 => 161,  707 => 160,  705 => 159,  696 => 158,  685 => 154,  679 => 151,  678 => 150,  677 => 149,  673 => 148,  669 => 147,  662 => 143,  661 => 142,  660 => 141,  656 => 140,  654 => 139,  645 => 138,  635 => 135,  633 => 134,  624 => 133,  613 => 129,  609 => 128,  604 => 124,  598 => 123,  592 => 122,  586 => 121,  580 => 120,  574 => 119,  568 => 118,  562 => 117,  557 => 113,  551 => 112,  545 => 111,  539 => 110,  533 => 109,  527 => 108,  521 => 107,  515 => 106,  510 => 103,  507 => 102,  505 => 101,  501 => 100,  499 => 99,  496 => 97,  494 => 96,  485 => 95,  473 => 90,  470 => 89,  460 => 88,  455 => 86,  453 => 85,  451 => 84,  448 => 82,  446 => 81,  437 => 80,  425 => 75,  423 => 74,  421 => 72,  420 => 71,  419 => 70,  418 => 69,  413 => 67,  411 => 66,  409 => 65,  406 => 63,  404 => 62,  395 => 61,  384 => 57,  382 => 56,  380 => 55,  378 => 54,  376 => 53,  372 => 52,  370 => 51,  367 => 49,  365 => 48,  356 => 47,  345 => 43,  343 => 42,  341 => 41,  332 => 40,  321 => 36,  317 => 34,  311 => 32,  309 => 31,  307 => 30,  301 => 28,  299 => 27,  296 => 26,  293 => 25,  290 => 24,  288 => 23,  279 => 22,  269 => 19,  267 => 18,  258 => 17,  248 => 14,  246 => 13,  237 => 12,  227 => 9,  224 => 7,  222 => 6,  213 => 5,  203 => 282,  200 => 281,  197 => 279,  195 => 273,  192 => 272,  190 => 266,  187 => 265,  185 => 261,  182 => 260,  180 => 256,  177 => 255,  175 => 251,  172 => 250,  170 => 246,  167 => 245,  165 => 240,  162 => 239,  160 => 232,  157 => 231,  154 => 229,  152 => 205,  149 => 204,  147 => 199,  144 => 198,  142 => 193,  139 => 192,  137 => 187,  134 => 186,  132 => 182,  129 => 181,  126 => 179,  124 => 169,  121 => 168,  119 => 158,  116 => 157,  114 => 138,  111 => 137,  109 => 133,  107 => 95,  105 => 80,  102 => 79,  100 => 61,  97 => 60,  95 => 47,  92 => 46,  90 => 40,  87 => 39,  85 => 22,  82 => 21,  80 => 17,  77 => 16,  75 => 12,  72 => 11,  70 => 5,  67 => 4,  64 => 2,  14 => 1,);
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

{# Widgets #}

{% block form_widget_simple -%}
    {% if type is not defined or type not in ['file', 'hidden'] %}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) -%}
    {% endif %}
    {{- parent() -}}
{%- endblock form_widget_simple %}

{% block textarea_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) %}
    {{- parent() -}}
{%- endblock textarea_widget %}

{% block button_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('btn-default') ~ ' btn')|trim}) %}
    {{- parent() -}}
{%- endblock %}

{% block money_widget -%}
    {% set prepend = not (money_pattern starts with '{{') %}
    {% set append = not (money_pattern ends with '}}') %}
    {% if prepend or append %}
        <div class=\"input-group\">
            {% if prepend %}
                <span class=\"input-group-addon\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
            {% endif %}
            {{- block('form_widget_simple') -}}
            {% if append %}
                <span class=\"input-group-addon\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
            {% endif %}
        </div>
    {% else %}
        {{- block('form_widget_simple') -}}
    {% endif %}
{%- endblock money_widget %}

{% block percent_widget -%}
    <div class=\"input-group\">
        {{- block('form_widget_simple') -}}
        <span class=\"input-group-addon\">%</span>
    </div>
{%- endblock percent_widget %}

{% block datetime_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form.date) -}}
            {{- form_errors(form.time) -}}
            {{- form_widget(form.date, { datetime: true } ) -}}
            {{- form_widget(form.time, { datetime: true } ) -}}
        </div>
    {%- endif %}
{%- endblock datetime_widget %}

{% block date_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        {% if datetime is not defined or not datetime -%}
            <div {{ block('widget_container_attributes') -}}>
        {%- endif %}
            {{- date_pattern|replace({
                '{{ year }}': form_widget(form.year),
                '{{ month }}': form_widget(form.month),
                '{{ day }}': form_widget(form.day),
            })|raw -}}
        {% if datetime is not defined or not datetime -%}
            </div>
        {%- endif -%}
    {% endif %}
{%- endblock date_widget %}

{% block time_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        {% if datetime is not defined or false == datetime -%}
            <div {{ block('widget_container_attributes') -}}>
        {%- endif -%}
        {{- form_widget(form.hour) }}{% if with_minutes %}:{{ form_widget(form.minute) }}{% endif %}{% if with_seconds %}:{{ form_widget(form.second) }}{% endif %}
        {% if datetime is not defined or false == datetime -%}
            </div>
        {%- endif -%}
    {% endif %}
{%- endblock time_widget %}

{%- block dateinterval_widget -%}
    {%- if widget == 'single_text' -%}
        {{- block('form_widget_simple') -}}
    {%- else -%}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form) -}}
            <div class=\"table-responsive\">
                <table class=\"table {{ table_class|default('table-bordered table-condensed table-striped') }}\">
                    <thead>
                    <tr>
                        {%- if with_years %}<th>{{ form_label(form.years) }}</th>{% endif -%}
                        {%- if with_months %}<th>{{ form_label(form.months) }}</th>{% endif -%}
                        {%- if with_weeks %}<th>{{ form_label(form.weeks) }}</th>{% endif -%}
                        {%- if with_days %}<th>{{ form_label(form.days) }}</th>{% endif -%}
                        {%- if with_hours %}<th>{{ form_label(form.hours) }}</th>{% endif -%}
                        {%- if with_minutes %}<th>{{ form_label(form.minutes) }}</th>{% endif -%}
                        {%- if with_seconds %}<th>{{ form_label(form.seconds) }}</th>{% endif -%}
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        {%- if with_years %}<td>{{ form_widget(form.years) }}</td>{% endif -%}
                        {%- if with_months %}<td>{{ form_widget(form.months) }}</td>{% endif -%}
                        {%- if with_weeks %}<td>{{ form_widget(form.weeks) }}</td>{% endif -%}
                        {%- if with_days %}<td>{{ form_widget(form.days) }}</td>{% endif -%}
                        {%- if with_hours %}<td>{{ form_widget(form.hours) }}</td>{% endif -%}
                        {%- if with_minutes %}<td>{{ form_widget(form.minutes) }}</td>{% endif -%}
                        {%- if with_seconds %}<td>{{ form_widget(form.seconds) }}</td>{% endif -%}
                    </tr>
                    </tbody>
                </table>
            </div>
            {%- if with_invert %}{{ form_widget(form.invert) }}{% endif -%}
        </div>
    {%- endif -%}
{%- endblock dateinterval_widget -%}

{% block choice_widget_collapsed -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) %}
    {{- parent() -}}
{%- endblock %}

{% block choice_widget_expanded -%}
    {% if '-inline' in label_attr.class|default('') -%}
        {%- for child in form %}
            {{- form_widget(child, {
                parent_label_class: label_attr.class|default(''),
                translation_domain: choice_translation_domain,
            }) -}}
        {% endfor -%}
    {%- else -%}
        <div {{ block('widget_container_attributes') }}>
            {%- for child in form %}
                {{- form_widget(child, {
                    parent_label_class: label_attr.class|default(''),
                    translation_domain: choice_translation_domain,
                }) -}}
            {% endfor -%}
        </div>
    {%- endif %}
{%- endblock choice_widget_expanded %}

{% block checkbox_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {% if 'checkbox-inline' in parent_label_class %}
        {{- form_label(form, null, { widget: parent() }) -}}
    {% else -%}
        <div class=\"checkbox\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif %}
{%- endblock checkbox_widget %}

{% block radio_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {% if 'radio-inline' in parent_label_class %}
        {{- form_label(form, null, { widget: parent() }) -}}
    {% else -%}
        <div class=\"radio\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif %}
{%- endblock radio_widget %}

{# Labels #}

{% block form_label -%}
    {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' control-label')|trim}) -%}
    {{- parent() -}}
{%- endblock form_label %}

{% block choice_label -%}
    {# remove the checkbox-inline and radio-inline class, it's only useful for embed labels #}
    {%- set label_attr = label_attr|merge({class: label_attr.class|default('')|replace({'checkbox-inline': '', 'radio-inline': ''})|trim}) -%}
    {{- block('form_label') -}}
{% endblock %}

{% block checkbox_label -%}
    {%- set label_attr = label_attr|merge({'for': id}) -%}

    {{- block('checkbox_radio_label') -}}
{%- endblock checkbox_label %}

{% block radio_label -%}
    {%- set label_attr = label_attr|merge({'for': id}) -%}

    {{- block('checkbox_radio_label') -}}
{%- endblock radio_label %}

{% block checkbox_radio_label %}
    {# Do not display the label if widget is not defined in order to prevent double label rendering #}
    {% if widget is defined %}
        {% if required %}
            {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' required')|trim}) %}
        {% endif %}
        {% if parent_label_class is defined %}
            {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ parent_label_class)|trim}) %}
        {% endif %}
        {% if label is not same as(false) and label is empty %}
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
            {{- widget|raw }} {{ label is not same as(false) ? (translation_domain is same as(false) ? label : label|trans({}, translation_domain)) -}}
        </label>
    {% endif %}
{% endblock checkbox_radio_label %}

{# Rows #}

{% block form_row -%}
    <div class=\"form-group{% if (not compound or force_error|default(false)) and not valid %} has-error{% endif %}\">
        {{- form_label(form) -}}
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock form_row %}

{% block button_row -%}
    <div class=\"form-group\">
        {{- form_widget(form) -}}
    </div>
{%- endblock button_row %}

{% block choice_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock choice_row %}

{% block date_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock date_row %}

{% block time_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock time_row %}

{% block datetime_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock datetime_row %}

{% block checkbox_row -%}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock checkbox_row %}

{% block radio_row -%}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock radio_row %}

{# Errors #}

{% block form_errors -%}
    {% if errors|length > 0 -%}
    {% if form is not rootform %}<span class=\"help-block\">{% else %}<div class=\"alert alert-danger\">{% endif %}
    <ul class=\"list-unstyled\">
        {%- for error in errors -%}
            <li><span class=\"glyphicon glyphicon-exclamation-sign\"></span> {{ error.message }}</li>
        {%- endfor -%}
    </ul>
    {% if form is not rootform %}</span>{% else %}</div>{% endif %}
    {%- endif %}
{%- endblock form_errors %}
", "bootstrap_3_layout.html.twig", "/Users/Rachid/SymfonyProjects/api-lab/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form/bootstrap_3_layout.html.twig");
    }
}
