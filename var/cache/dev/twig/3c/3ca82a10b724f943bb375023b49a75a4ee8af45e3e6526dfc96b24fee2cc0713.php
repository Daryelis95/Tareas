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
        $__internal_9a91c68631ec4a25e1ed368a817558defaf24e814fbfc5b46ce3e04d29bd9558 = $this->env->getExtension("native_profiler");
        $__internal_9a91c68631ec4a25e1ed368a817558defaf24e814fbfc5b46ce3e04d29bd9558->enter($__internal_9a91c68631ec4a25e1ed368a817558defaf24e814fbfc5b46ce3e04d29bd9558_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TareaBundle:Default:index.html.twig"));

        // line 2
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => "form/registroForm.html.twig"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9a91c68631ec4a25e1ed368a817558defaf24e814fbfc5b46ce3e04d29bd9558->leave($__internal_9a91c68631ec4a25e1ed368a817558defaf24e814fbfc5b46ce3e04d29bd9558_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_8b3e7a8463ba34efad8948f8d0e2b1de63b94a121316d7757e35966051379a5e = $this->env->getExtension("native_profiler");
        $__internal_8b3e7a8463ba34efad8948f8d0e2b1de63b94a121316d7757e35966051379a5e->enter($__internal_8b3e7a8463ba34efad8948f8d0e2b1de63b94a121316d7757e35966051379a5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "   TAREAS
 ";
        
        $__internal_8b3e7a8463ba34efad8948f8d0e2b1de63b94a121316d7757e35966051379a5e->leave($__internal_8b3e7a8463ba34efad8948f8d0e2b1de63b94a121316d7757e35966051379a5e_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_5394a752b06925d6f55a1f450ebf744a2b241dd0983ad135c36122765c2ddf95 = $this->env->getExtension("native_profiler");
        $__internal_5394a752b06925d6f55a1f450ebf744a2b241dd0983ad135c36122765c2ddf95->enter($__internal_5394a752b06925d6f55a1f450ebf744a2b241dd0983ad135c36122765c2ddf95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
            echo "      <tr id=\"registro\" data-id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["registro"], "id", array()), "html", null, true);
            echo "\">
            
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
        <td><button type=\"button\" class=\"btn  btn-success\">Primary</button></td>
           
      </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['registro'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "      
  </tbody>
</table>
";
        // line 55
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
        // line 65
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" => "", "method" => "POST"));
        echo "
          ";
        // line 66
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        
      </div>
      <div class=\"modal-footer\">
        ";
        // line 70
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
      </div>
    </div>
  </div>
</div>
";
        // line 76
        echo "
";
        
        $__internal_5394a752b06925d6f55a1f450ebf744a2b241dd0983ad135c36122765c2ddf95->leave($__internal_5394a752b06925d6f55a1f450ebf744a2b241dd0983ad135c36122765c2ddf95_prof);

    }

    // line 79
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a0862b0c4726017b1b9049ec899628a454e2a03d2cc6014ea7fb7f2342244f43 = $this->env->getExtension("native_profiler");
        $__internal_a0862b0c4726017b1b9049ec899628a454e2a03d2cc6014ea7fb7f2342244f43->enter($__internal_a0862b0c4726017b1b9049ec899628a454e2a03d2cc6014ea7fb7f2342244f43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 80
        echo "  ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

  <script src=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/framework/js/popup.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_a0862b0c4726017b1b9049ec899628a454e2a03d2cc6014ea7fb7f2342244f43->leave($__internal_a0862b0c4726017b1b9049ec899628a454e2a03d2cc6014ea7fb7f2342244f43_prof);

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
        return array (  184 => 82,  178 => 80,  172 => 79,  164 => 76,  156 => 70,  149 => 66,  145 => 65,  133 => 55,  128 => 51,  117 => 46,  113 => 45,  109 => 44,  105 => 43,  101 => 42,  95 => 40,  91 => 39,  59 => 9,  53 => 8,  45 => 5,  39 => 4,  32 => 1,  30 => 2,  11 => 1,);
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
/*       <tr id="registro" data-id="{{registro.id}}">*/
/*             */
/*         <td>{{ registro.title }}</td>*/
/*         <td>{{ registro.descripcion }}</td>*/
/*         <td>{{ registro.fecha|date("m/d/y")}}</td>*/
/*         <td>{{ registro.prioridad }}</td>*/
/*         <td>{{ registro.status }}</td>*/
/*         <td><button type="button" class="btn  btn-success">Primary</button></td>*/
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
