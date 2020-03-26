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
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_68b51285e5e42a9b5a9a02c088660fb534815d7d5ddaa680dbba19485cf93bc4 = $this->env->getExtension("native_profiler");
        $__internal_68b51285e5e42a9b5a9a02c088660fb534815d7d5ddaa680dbba19485cf93bc4->enter($__internal_68b51285e5e42a9b5a9a02c088660fb534815d7d5ddaa680dbba19485cf93bc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TareaBundle:Default:form.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_68b51285e5e42a9b5a9a02c088660fb534815d7d5ddaa680dbba19485cf93bc4->leave($__internal_68b51285e5e42a9b5a9a02c088660fb534815d7d5ddaa680dbba19485cf93bc4_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_f386cc11eb6496865ce32e9c0660978eb008c42f79e038a7d2f15b8591cd68b6 = $this->env->getExtension("native_profiler");
        $__internal_f386cc11eb6496865ce32e9c0660978eb008c42f79e038a7d2f15b8591cd68b6->enter($__internal_f386cc11eb6496865ce32e9c0660978eb008c42f79e038a7d2f15b8591cd68b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "
";
        // line 7
        echo "
  
<h2>Tareas</h2>
 
";
        // line 11
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" => "", "method" => "POST"));
        echo "
";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
";
        // line 13
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "



";
        
        $__internal_f386cc11eb6496865ce32e9c0660978eb008c42f79e038a7d2f15b8591cd68b6->leave($__internal_f386cc11eb6496865ce32e9c0660978eb008c42f79e038a7d2f15b8591cd68b6_prof);

    }

    // line 19
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c187531a96de6a69f22b387995b33953081388e37075de1f07b55388cc9c087a = $this->env->getExtension("native_profiler");
        $__internal_c187531a96de6a69f22b387995b33953081388e37075de1f07b55388cc9c087a->enter($__internal_c187531a96de6a69f22b387995b33953081388e37075de1f07b55388cc9c087a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 20
        echo "  ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo " 

  <script src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/framework/js/delete-registro.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/framework/js/popup.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_c187531a96de6a69f22b387995b33953081388e37075de1f07b55388cc9c087a->leave($__internal_c187531a96de6a69f22b387995b33953081388e37075de1f07b55388cc9c087a_prof);

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
        return array (  86 => 23,  82 => 22,  76 => 20,  70 => 19,  58 => 13,  54 => 12,  50 => 11,  44 => 7,  41 => 5,  35 => 4,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/*  */
/* {% block body %}*/
/* */
/* {#++++++++++++++++++++++++++++++FORM++++++++++++++++++++++++++++++#}*/
/* */
/*   */
/* <h2>Tareas</h2>*/
/*  */
/* {{form_start(form, {'action':'', 'method':'POST'})}}*/
/* {{ form_widget(form) }}*/
/* {{form_end(form)}}*/
/* */
/* */
/* */
/* {% endblock %}*/
/* */
/* {% block javascripts %}*/
/*   {{ parent() }} */
/* */
/*   <script src="{{ asset('bundles/framework/js/delete-registro.js') }}"></script>*/
/*   <script src="{{ asset('bundles/framework/js/popup.js') }}"></script>*/
/* {% endblock %}*/
