<?php

/* TareaBundle:Default:form.html.twig */
class __TwigTemplate_b5dfd5eeabc6bf0ce1d7f1e3d5f56090ad63e2f41f1823e09a88372904ac1e5c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "TareaBundle:Default:form.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c2556a753dd069c30a9b45cd23079d712074547b4147beec68fefbf83ca0da5a = $this->env->getExtension("native_profiler");
        $__internal_c2556a753dd069c30a9b45cd23079d712074547b4147beec68fefbf83ca0da5a->enter($__internal_c2556a753dd069c30a9b45cd23079d712074547b4147beec68fefbf83ca0da5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TareaBundle:Default:form.html.twig"));

        // line 2
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => "form/registroForm.html.twig"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c2556a753dd069c30a9b45cd23079d712074547b4147beec68fefbf83ca0da5a->leave($__internal_c2556a753dd069c30a9b45cd23079d712074547b4147beec68fefbf83ca0da5a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_e4db65513379dd377cbad625f005285e601faef591dca8245d4474b3be0758b4 = $this->env->getExtension("native_profiler");
        $__internal_e4db65513379dd377cbad625f005285e601faef591dca8245d4474b3be0758b4->enter($__internal_e4db65513379dd377cbad625f005285e601faef591dca8245d4474b3be0758b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "        TAREAS
   ";
        
        $__internal_e4db65513379dd377cbad625f005285e601faef591dca8245d4474b3be0758b4->leave($__internal_e4db65513379dd377cbad625f005285e601faef591dca8245d4474b3be0758b4_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_85cb85a9d42af143b2fd197a4e779089319697f3e9fb60c62cca70b12c4e5180 = $this->env->getExtension("native_profiler");
        $__internal_85cb85a9d42af143b2fd197a4e779089319697f3e9fb60c62cca70b12c4e5180->enter($__internal_85cb85a9d42af143b2fd197a4e779089319697f3e9fb60c62cca70b12c4e5180_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" => "", "method" => "POST"));
        echo "
    ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    ";
        // line 10
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
 ";
        
        $__internal_85cb85a9d42af143b2fd197a4e779089319697f3e9fb60c62cca70b12c4e5180->leave($__internal_85cb85a9d42af143b2fd197a4e779089319697f3e9fb60c62cca70b12c4e5180_prof);

    }

    public function getTemplateName()
    {
        return "TareaBundle:Default:form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 10,  63 => 9,  58 => 8,  52 => 7,  44 => 4,  38 => 3,  31 => 1,  29 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/*   {% form_theme form 'form/registroForm.html.twig' %}*/
/*     {% block title %}*/
/*         TAREAS*/
/*    {% endblock%}*/
/* */
/*   {% block body %}*/
/*     {{form_start(form, {'action':'', 'method':'POST'})}}*/
/*     {{ form_widget(form) }}*/
/*     {{form_end(form)}}*/
/*  {% endblock%}*/
