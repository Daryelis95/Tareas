<?php

/* TareaBundle:Default:article.html.twig */
class __TwigTemplate_bea50842afc38c29743c2d3a4e933d180d3d5ff7741a227f158624c7929549f7 extends Twig_Template
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
        $__internal_dbbac4ac03a4bcab28504e8ee31d675c8b6869506dbd6706316369f78c53cb22 = $this->env->getExtension("native_profiler");
        $__internal_dbbac4ac03a4bcab28504e8ee31d675c8b6869506dbd6706316369f78c53cb22->enter($__internal_dbbac4ac03a4bcab28504e8ee31d675c8b6869506dbd6706316369f78c53cb22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TareaBundle:Default:article.html.twig"));

        // line 1
        echo "<style>
th, td {
  padding: 10px;
}
th {
  text-align: right;
}
</style>


<h1>Create or Update Article:</h1>

";
        // line 13
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "

<table>
  <tbody>
    <tr>
      <th>Title:</th>
      <td>";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'widget');
        echo "</td>
    </tr>
    <tr>
      <th>Author:</th>
      <td>";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "author", array()), 'widget');
        echo "</td>
    </tr>
    <tr>
      <th>Article Body:</th>
      <td>";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "body", array()), 'widget');
        echo "</td>
    </tr>
    <tr>
      <th>Homepage:</th>
      <td>";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "url", array()), 'widget');
        echo "</td>
    </tr>
    <tr>
      <th></th>
      <td>";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "save", array()), 'widget');
        echo "</td>
    </tr>
  </tbody>
</table>

";
        // line 40
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        
        $__internal_dbbac4ac03a4bcab28504e8ee31d675c8b6869506dbd6706316369f78c53cb22->leave($__internal_dbbac4ac03a4bcab28504e8ee31d675c8b6869506dbd6706316369f78c53cb22_prof);

    }

    public function getTemplateName()
    {
        return "TareaBundle:Default:article.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 40,  73 => 35,  66 => 31,  59 => 27,  52 => 23,  45 => 19,  36 => 13,  22 => 1,);
    }
}
/* <style>*/
/* th, td {*/
/*   padding: 10px;*/
/* }*/
/* th {*/
/*   text-align: right;*/
/* }*/
/* </style>*/
/* */
/* */
/* <h1>Create or Update Article:</h1>*/
/* */
/* {{ form_start(form) }}*/
/* */
/* <table>*/
/*   <tbody>*/
/*     <tr>*/
/*       <th>Title:</th>*/
/*       <td>{{ form_widget(form.title) }}</td>*/
/*     </tr>*/
/*     <tr>*/
/*       <th>Author:</th>*/
/*       <td>{{ form_widget(form.author) }}</td>*/
/*     </tr>*/
/*     <tr>*/
/*       <th>Article Body:</th>*/
/*       <td>{{ form_widget(form.body) }}</td>*/
/*     </tr>*/
/*     <tr>*/
/*       <th>Homepage:</th>*/
/*       <td>{{ form_widget(form.url) }}</td>*/
/*     </tr>*/
/*     <tr>*/
/*       <th></th>*/
/*       <td>{{ form_widget(form.save) }}</td>*/
/*     </tr>*/
/*   </tbody>*/
/* </table>*/
/* */
/* {{ form_end(form) }}*/
