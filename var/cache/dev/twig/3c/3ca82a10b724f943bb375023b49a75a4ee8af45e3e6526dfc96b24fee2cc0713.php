<?php

/* TareaBundle:Default:index.html.twig */
class __TwigTemplate_da93ca26a698afe539b81607c346a65315b4cfc36cad74c454cb7048d31e6b2e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "TareaBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
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
        $__internal_f97e30e4988037b55a78ef94456f6be8cf9462253bb04cfac7ae94a1f924d2f9 = $this->env->getExtension("native_profiler");
        $__internal_f97e30e4988037b55a78ef94456f6be8cf9462253bb04cfac7ae94a1f924d2f9->enter($__internal_f97e30e4988037b55a78ef94456f6be8cf9462253bb04cfac7ae94a1f924d2f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TareaBundle:Default:index.html.twig"));

        // line 2
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => "form/registroForm.html.twig"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f97e30e4988037b55a78ef94456f6be8cf9462253bb04cfac7ae94a1f924d2f9->leave($__internal_f97e30e4988037b55a78ef94456f6be8cf9462253bb04cfac7ae94a1f924d2f9_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_2c32dea4f39dc7b98e0be0fc71e35f5b9f7e3a7b5c284e9776f468fe62ecddf3 = $this->env->getExtension("native_profiler");
        $__internal_2c32dea4f39dc7b98e0be0fc71e35f5b9f7e3a7b5c284e9776f468fe62ecddf3->enter($__internal_2c32dea4f39dc7b98e0be0fc71e35f5b9f7e3a7b5c284e9776f468fe62ecddf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "   TAREAS
 ";
        
        $__internal_2c32dea4f39dc7b98e0be0fc71e35f5b9f7e3a7b5c284e9776f468fe62ecddf3->leave($__internal_2c32dea4f39dc7b98e0be0fc71e35f5b9f7e3a7b5c284e9776f468fe62ecddf3_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_bb6a60732edd1c9083167c078e0ac7a1d8fa4d459115d840c54c32279e769453 = $this->env->getExtension("native_profiler");
        $__internal_bb6a60732edd1c9083167c078e0ac7a1d8fa4d459115d840c54c32279e769453->enter($__internal_bb6a60732edd1c9083167c078e0ac7a1d8fa4d459115d840c54c32279e769453_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo " <div class=\"cont-head\">
  <div class=\"row\">
    <div class=\"col-lg-2 col-md-2\">
     <button type=\"button\" class=\"btn  btn-success btn-table\" data-toggle=\"modal\" data-target=\"#exampleModal\">
     <span class=\"fa fa-plus\"></span>
     Nueva Tarea
     </button>
   
   </div>
    <div class=\"col-lg-4 col-md-4 navbar navbar-light bg-light\">
      <form class=\"form-inline\">
        <input class=\"form-control mr-sm-2\" type=\"search\" placeholder=\"Search\" aria-label=\"Search\">
        <button class=\"btn btn-outline-success my-2 my-sm-0\" type=\"submit\">Search</button>
      </form>
    </div>
    <div class=\"col-lg-6 col-md-6 hidden\"></div>
  </div>
 </div>
 <table class=\"table table-bordered\">
  <thead class=\"thead-dark\">
    <tr>
      <th scope=\"col\">Titulo</th>
      <th scope=\"col\">Descripcion</th>
      <th scope=\"col\">Fecha</th>
      <th scope=\"col\">Prioridad</th>
      <th scope=\"col\">Status</th>
      <th scope=\"col\">Editar</th>
    </tr>
  </thead>
  <tbody>
    ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["registros"]) ? $context["registros"] : $this->getContext($context, "registros")));
        foreach ($context['_seq'] as $context["_key"] => $context["registro"]) {
            // line 40
            echo "      <tr id=\"registro\">
         
        <td>";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["registro"], "title", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["registro"], "descripcion", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 44
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["registro"], "fecha", array()), "m/d/y"), "html", null, true);
            echo "</td>
        <td>";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($context["registro"], "prioridad", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($context["registro"], "status", array()), "html", null, true);
            echo "</td>
        <td><a href=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tarea_update", array("id" => $this->getAttribute($context["registro"], "id", array()))), "html", null, true);
            echo "\" data-toggle=\"modal\" data-target=\"#exampleModal\"><i class=\"fas fa-edit\"></i></a>
        <a href=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tarea_delete", array("id" => $this->getAttribute($context["registro"], "id", array()))), "html", null, true);
            echo "\"><i class=\"fas fa-trash-alt\"></i></i></a></td>
           
      </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['registro'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "      
  </tbody>
</table>
";
        // line 56
        echo "<div class=\"modal fade\" id=\"exampleModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
          <h5 class=\"modal-title\" id=\"exampleModalLabel\">Nueva Tarea</h5>
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
          <span aria-hidden=\"true\">&times;</span>
        </button>
      </div>
      <div class=\"modal-body\">
          ";
        // line 66
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" => "", "method" => "POST"));
        echo "
          ";
        // line 67
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        
      </div>
      <div class=\"modal-footer\">
        ";
        // line 71
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
      </div>
    </div>
  </div>
</div>
";
        // line 77
        echo "
";
        
        $__internal_bb6a60732edd1c9083167c078e0ac7a1d8fa4d459115d840c54c32279e769453->leave($__internal_bb6a60732edd1c9083167c078e0ac7a1d8fa4d459115d840c54c32279e769453_prof);

    }

    // line 80
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_21dcdd5c7bc92fdc14bfc529d641eb86cfe4fe98d46a21f82790778a678331cc = $this->env->getExtension("native_profiler");
        $__internal_21dcdd5c7bc92fdc14bfc529d641eb86cfe4fe98d46a21f82790778a678331cc->enter($__internal_21dcdd5c7bc92fdc14bfc529d641eb86cfe4fe98d46a21f82790778a678331cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 81
        echo "  ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

  <script src=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/framework/js/popup.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_21dcdd5c7bc92fdc14bfc529d641eb86cfe4fe98d46a21f82790778a678331cc->leave($__internal_21dcdd5c7bc92fdc14bfc529d641eb86cfe4fe98d46a21f82790778a678331cc_prof);

    }

    public function getTemplateName()
    {
        return "TareaBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  189 => 83,  183 => 81,  177 => 80,  169 => 77,  161 => 71,  154 => 67,  150 => 66,  138 => 56,  133 => 52,  123 => 48,  119 => 47,  115 => 46,  111 => 45,  107 => 44,  103 => 43,  99 => 42,  95 => 40,  91 => 39,  59 => 9,  53 => 8,  45 => 5,  39 => 4,  32 => 1,  30 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% form_theme form 'form/registroForm.html.twig' %}*/
/* */
/*  {% block title %}*/
/*    TAREAS*/
/*  {% endblock%}*/
/* */
/*  {% block body %}*/
/*  <div class="cont-head">*/
/*   <div class="row">*/
/*     <div class="col-lg-2 col-md-2">*/
/*      <button type="button" class="btn  btn-success btn-table" data-toggle="modal" data-target="#exampleModal">*/
/*      <span class="fa fa-plus"></span>*/
/*      Nueva Tarea*/
/*      </button>*/
/*    */
/*    </div>*/
/*     <div class="col-lg-4 col-md-4 navbar navbar-light bg-light">*/
/*       <form class="form-inline">*/
/*         <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">*/
/*         <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>*/
/*       </form>*/
/*     </div>*/
/*     <div class="col-lg-6 col-md-6 hidden"></div>*/
/*   </div>*/
/*  </div>*/
/*  <table class="table table-bordered">*/
/*   <thead class="thead-dark">*/
/*     <tr>*/
/*       <th scope="col">Titulo</th>*/
/*       <th scope="col">Descripcion</th>*/
/*       <th scope="col">Fecha</th>*/
/*       <th scope="col">Prioridad</th>*/
/*       <th scope="col">Status</th>*/
/*       <th scope="col">Editar</th>*/
/*     </tr>*/
/*   </thead>*/
/*   <tbody>*/
/*     {% for registro in registros %}*/
/*       <tr id="registro">*/
/*          */
/*         <td>{{ registro.title }}</td>*/
/*         <td>{{ registro.descripcion }}</td>*/
/*         <td>{{ registro.fecha|date("m/d/y")}}</td>*/
/*         <td>{{ registro.prioridad }}</td>*/
/*         <td>{{ registro.status }}</td>*/
/*         <td><a href="{{path('tarea_update', {'id':registro.id})}}" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-edit"></i></a>*/
/*         <a href="{{path('tarea_delete', {'id':registro.id})}}"><i class="fas fa-trash-alt"></i></i></a></td>*/
/*            */
/*       </tr>*/
/*     {% endfor %}*/
/*       */
/*   </tbody>*/
/* </table>*/
/* {#++++++++++++++++++++++++++++Modal Form++++++++++++++++++++++++++++++++++++++#}*/
/* <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">*/
/*   <div class="modal-dialog" role="document">*/
/*     <div class="modal-content">*/
/*       <div class="modal-header">*/
/*           <h5 class="modal-title" id="exampleModalLabel">Nueva Tarea</h5>*/
/*         <button type="button" class="close" data-dismiss="modal" aria-label="Close">*/
/*           <span aria-hidden="true">&times;</span>*/
/*         </button>*/
/*       </div>*/
/*       <div class="modal-body">*/
/*           {{form_start(form, {'action':'', 'method':'POST'})}}*/
/*           {{ form_widget(form) }}*/
/*         */
/*       </div>*/
/*       <div class="modal-footer">*/
/*         {{form_end(form)}}*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* {#++++++++++++++++++++++++++++ END Modal Form++++++++++++++++++++++++++++++++++++++#}*/
/* */
/* {% endblock%}*/
/* */
/* {% block javascripts %}*/
/*   {{ parent() }}*/
/* */
/*   <script src="{{ asset('bundles/framework/js/popup.js') }}"></script>*/
/* {% endblock %}*/
/* */
