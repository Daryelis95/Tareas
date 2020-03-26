<?php

/* form/registroForm.html.twig */
class __TwigTemplate_a5b37f06eeb6d282bb22f77de349cdcbd2cc359189edc38eee2b66544f190bd4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'form_row' => array($this, 'block_form_row'),
            'form_widget_simple' => array($this, 'block_form_widget_simple'),
            'textarea_widget' => array($this, 'block_textarea_widget'),
            'button_widget' => array($this, 'block_button_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_beb484ed89e4b66212e79eb0189097ffbc1f296fc1c37dcd7760f179a903ce6b = $this->env->getExtension("native_profiler");
        $__internal_beb484ed89e4b66212e79eb0189097ffbc1f296fc1c37dcd7760f179a903ce6b->enter($__internal_beb484ed89e4b66212e79eb0189097ffbc1f296fc1c37dcd7760f179a903ce6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form/registroForm.html.twig"));

        // line 1
        $this->displayBlock('form_row', $context, $blocks);
        // line 9
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 14
        $this->displayBlock('textarea_widget', $context, $blocks);
        // line 18
        $this->displayBlock('button_widget', $context, $blocks);
        
        $__internal_beb484ed89e4b66212e79eb0189097ffbc1f296fc1c37dcd7760f179a903ce6b->leave($__internal_beb484ed89e4b66212e79eb0189097ffbc1f296fc1c37dcd7760f179a903ce6b_prof);

    }

    // line 1
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_1dff9e149c58e10e549559968684e60c7859f4957b9bfdaab3afab909e375ce7 = $this->env->getExtension("native_profiler");
        $__internal_1dff9e149c58e10e549559968684e60c7859f4957b9bfdaab3afab909e375ce7->enter($__internal_1dff9e149c58e10e549559968684e60c7859f4957b9bfdaab3afab909e375ce7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 2
        echo "<div class=\"form-group\">";
        // line 3
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label');
        // line 4
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 6
        echo "</div>";
        
        $__internal_1dff9e149c58e10e549559968684e60c7859f4957b9bfdaab3afab909e375ce7->leave($__internal_1dff9e149c58e10e549559968684e60c7859f4957b9bfdaab3afab909e375ce7_prof);

    }

    // line 9
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_affe0b81e370b8a2bb226035340d400d93611ef37f22de3746e3e10c1b3af020 = $this->env->getExtension("native_profiler");
        $__internal_affe0b81e370b8a2bb226035340d400d93611ef37f22de3746e3e10c1b3af020->enter($__internal_affe0b81e370b8a2bb226035340d400d93611ef37f22de3746e3e10c1b3af020_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 10
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "text")) : ("text"));
        // line 11
        echo "<input type=\"";
        echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "html", null, true);
        echo "\" class=\"form-control\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " ";
        if ( !twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            echo "value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "\" ";
        }
        echo "/>";
        
        $__internal_affe0b81e370b8a2bb226035340d400d93611ef37f22de3746e3e10c1b3af020->leave($__internal_affe0b81e370b8a2bb226035340d400d93611ef37f22de3746e3e10c1b3af020_prof);

    }

    // line 14
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_f13756a0b95a8d02f212003c7878dd1419d693bb66075649d8a92efae302cccf = $this->env->getExtension("native_profiler");
        $__internal_f13756a0b95a8d02f212003c7878dd1419d693bb66075649d8a92efae302cccf->enter($__internal_f13756a0b95a8d02f212003c7878dd1419d693bb66075649d8a92efae302cccf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 15
        echo "<textarea ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " class=\"form-control\">";
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        echo "</textarea>";
        
        $__internal_f13756a0b95a8d02f212003c7878dd1419d693bb66075649d8a92efae302cccf->leave($__internal_f13756a0b95a8d02f212003c7878dd1419d693bb66075649d8a92efae302cccf_prof);

    }

    // line 18
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_b6f48e1ed997d07312783c719b8addb2c14209e26e7f2ca82282f918c99296f7 = $this->env->getExtension("native_profiler");
        $__internal_b6f48e1ed997d07312783c719b8addb2c14209e26e7f2ca82282f918c99296f7->enter($__internal_b6f48e1ed997d07312783c719b8addb2c14209e26e7f2ca82282f918c99296f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 19
        if (twig_test_empty((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")))) {
            // line 20
            if ( !twig_test_empty((isset($context["label_format"]) ? $context["label_format"] : $this->getContext($context, "label_format")))) {
                // line 21
                $context["label"] = twig_replace_filter((isset($context["label_format"]) ? $context["label_format"] : $this->getContext($context, "label_format")), array("%name%" =>                 // line 22
(isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "%id%" =>                 // line 23
(isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))));
            } else {
                // line 26
                $context["label"] = $this->env->getExtension('form')->humanize((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")));
            }
        }
        // line 29
        echo "<button type=\"";
        echo twig_escape_filter($this->env, ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "button")) : ("button")), "html", null, true);
        echo "\" class=\"btn btn-primary\" ";
        $this->displayBlock("button_attributes", $context, $blocks);
        echo ">";
        echo twig_escape_filter($this->env, ((((isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")) === false)) ? ((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label"))) : ($this->env->getExtension('translator')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))))), "html", null, true);
        echo "</button>";
        
        $__internal_b6f48e1ed997d07312783c719b8addb2c14209e26e7f2ca82282f918c99296f7->leave($__internal_b6f48e1ed997d07312783c719b8addb2c14209e26e7f2ca82282f918c99296f7_prof);

    }

    public function getTemplateName()
    {
        return "form/registroForm.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  121 => 29,  117 => 26,  114 => 23,  113 => 22,  112 => 21,  110 => 20,  108 => 19,  102 => 18,  91 => 15,  85 => 14,  68 => 11,  66 => 10,  60 => 9,  53 => 6,  51 => 5,  49 => 4,  47 => 3,  45 => 2,  39 => 1,  32 => 18,  30 => 14,  28 => 9,  26 => 1,);
    }
}
/* {%- block form_row -%}*/
/*     <div class="form-group">*/
/*         {{- form_label(form) -}}*/
/*         {{- form_errors(form) -}}*/
/*         {{- form_widget(form) -}}*/
/*     </div>*/
/* {%- endblock form_row -%}*/
/* */
/* {%- block form_widget_simple -%}*/
/*     {%- set type = type|default('text') -%}*/
/*     <input type="{{ type }}" class="form-control" {{ block('widget_attributes') }} {% if value is not empty %}value="{{ value }}" {% endif %}/>*/
/* {%- endblock form_widget_simple -%}*/
/* */
/* {%- block textarea_widget -%}*/
/*     <textarea {{ block('widget_attributes') }} class="form-control">{{ value }}</textarea>*/
/* {%- endblock textarea_widget -%}*/
/* */
/* {%- block button_widget -%}*/
/*     {%- if label is empty -%}*/
/*         {%- if label_format is not empty -%}*/
/*             {% set label = label_format|replace({*/
/*                 '%name%': name,*/
/*                 '%id%': id,*/
/*             }) %}*/
/*         {%- else -%}*/
/*             {% set label = name|humanize %}*/
/*         {%- endif -%}*/
/*     {%- endif -%}*/
/*     <button type="{{ type|default('button') }}" class="btn btn-primary" {{ block('button_attributes') }}>{{ translation_domain is same as(false) ? label : label|trans({}, translation_domain) }}</button>*/
/* {%- endblock button_widget -%}*/
/* */
/*     */
/* */
