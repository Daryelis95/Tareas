<?php

/* TareaBundle:Default:form.html.twig */
class __TwigTemplate_b5dfd5eeabc6bf0ce1d7f1e3d5f56090ad63e2f41f1823e09a88372904ac1e5c extends Twig_Template
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
        $__internal_dd90e774e2b6602779dfc5cba151dc381647c344aa90926f9ebdc179ca1aa077 = $this->env->getExtension("native_profiler");
        $__internal_dd90e774e2b6602779dfc5cba151dc381647c344aa90926f9ebdc179ca1aa077->enter($__internal_dd90e774e2b6602779dfc5cba151dc381647c344aa90926f9ebdc179ca1aa077_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TareaBundle:Default:form.html.twig"));

        // line 1
        echo "<h2>Tareas</h2>
 
";
        // line 3
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" => "", "method" => "POST"));
        echo "
";
        // line 4
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
";
        // line 5
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_dd90e774e2b6602779dfc5cba151dc381647c344aa90926f9ebdc179ca1aa077->leave($__internal_dd90e774e2b6602779dfc5cba151dc381647c344aa90926f9ebdc179ca1aa077_prof);

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
        return array (  34 => 5,  30 => 4,  26 => 3,  22 => 1,);
    }
}
/* <h2>Tareas</h2>*/
/*  */
/* {{form_start(form, {'action':'', 'method':'POST'})}}*/
/* {{ form_widget(form) }}*/
/* {{form_end(form)}}*/
/* */
