<?php

/* TareaBundle:Plantillas:tareabase.html.twig */
class __TwigTemplate_807f11388fe681c5177969c43389ec5842f752e3da4b296fb19a8ef0c41ae665 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7a086a26733a771ef76f50471643d5ac5cd09e542cce62cb93de82b162ee8952 = $this->env->getExtension("native_profiler");
        $__internal_7a086a26733a771ef76f50471643d5ac5cd09e542cce62cb93de82b162ee8952->enter($__internal_7a086a26733a771ef76f50471643d5ac5cd09e542cce62cb93de82b162ee8952_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TareaBundle:Plantillas:tareabase.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
            ";
        // line 7
        echo "        ";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 12
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
      <nav class=\"nav\">
        <a class=\"nav-link active\" href=\"#\">Active</a>
        <a class=\"nav-link\" href=\"#\">Link</a>
        <a class=\"nav-link\" href=\"#\">Link</a>
        <a class=\"nav-link disabled\" href=\"#\" tabindex=\"-1\" aria-disabled=\"true\">Disabled</a>
      </nav>
        ";
        // line 21
        $this->displayBlock('body', $context, $blocks);
        // line 36
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 39
        echo "    </body>
</html>
";
        
        $__internal_7a086a26733a771ef76f50471643d5ac5cd09e542cce62cb93de82b162ee8952->leave($__internal_7a086a26733a771ef76f50471643d5ac5cd09e542cce62cb93de82b162ee8952_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_55a5f8fff3210c77e08a95412d516225e224bd5c5b38cb575fc98a6a275048d4 = $this->env->getExtension("native_profiler");
        $__internal_55a5f8fff3210c77e08a95412d516225e224bd5c5b38cb575fc98a6a275048d4->enter($__internal_55a5f8fff3210c77e08a95412d516225e224bd5c5b38cb575fc98a6a275048d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_55a5f8fff3210c77e08a95412d516225e224bd5c5b38cb575fc98a6a275048d4->leave($__internal_55a5f8fff3210c77e08a95412d516225e224bd5c5b38cb575fc98a6a275048d4_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ee43d3189492b36ed53bae4f775fe71719409e8495fe00b15e8b8c1bca0c99fd = $this->env->getExtension("native_profiler");
        $__internal_ee43d3189492b36ed53bae4f775fe71719409e8495fe00b15e8b8c1bca0c99fd->enter($__internal_ee43d3189492b36ed53bae4f775fe71719409e8495fe00b15e8b8c1bca0c99fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "           <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/css/bootstrap.min.css\" rel=\"stylesheet"), "html", null, true);
        echo "/>
           <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/css/bootstrap.css\" rel=\"stylesheet"), "html", null, true);
        echo "/>
           <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/css/bootstrap-grid.css\" rel=\"stylesheet"), "html", null, true);
        echo "/>
        ";
        
        $__internal_ee43d3189492b36ed53bae4f775fe71719409e8495fe00b15e8b8c1bca0c99fd->leave($__internal_ee43d3189492b36ed53bae4f775fe71719409e8495fe00b15e8b8c1bca0c99fd_prof);

    }

    // line 21
    public function block_body($context, array $blocks = array())
    {
        $__internal_1b54d0067688b0f634f199b6ccbe9e3e64015756c4d724ec26e5647f0beefbf8 = $this->env->getExtension("native_profiler");
        $__internal_1b54d0067688b0f634f199b6ccbe9e3e64015756c4d724ec26e5647f0beefbf8->enter($__internal_1b54d0067688b0f634f199b6ccbe9e3e64015756c4d724ec26e5647f0beefbf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 22
        echo "          <div class=\"container\">
            <div class=\"row\">
              <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-4\">
               loremhfhbjjfvjdhbgzcadfsshas cac vsd cfada s s
              </div>
              <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-4\">
               loremhfhbjjfvjdhbgzcadfsshas cac vsd cfada s s
              </div>
              <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-4\">
               loremhfhbjjfvjdhbgzcadfsshas cac vsd cfada s s
              </div>
            </div>
          </div>
        ";
        
        $__internal_1b54d0067688b0f634f199b6ccbe9e3e64015756c4d724ec26e5647f0beefbf8->leave($__internal_1b54d0067688b0f634f199b6ccbe9e3e64015756c4d724ec26e5647f0beefbf8_prof);

    }

    // line 36
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c6e460300320844df128a31b37f3cccc37861e4891562ec849e0feb06e0c9cb3 = $this->env->getExtension("native_profiler");
        $__internal_c6e460300320844df128a31b37f3cccc37861e4891562ec849e0feb06e0c9cb3->enter($__internal_c6e460300320844df128a31b37f3cccc37861e4891562ec849e0feb06e0c9cb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 37
        echo "          
        ";
        
        $__internal_c6e460300320844df128a31b37f3cccc37861e4891562ec849e0feb06e0c9cb3->leave($__internal_c6e460300320844df128a31b37f3cccc37861e4891562ec849e0feb06e0c9cb3_prof);

    }

    public function getTemplateName()
    {
        return "TareaBundle:Plantillas:tareabase.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 37,  128 => 36,  108 => 22,  102 => 21,  93 => 10,  89 => 9,  84 => 8,  78 => 7,  66 => 5,  57 => 39,  54 => 36,  52 => 21,  39 => 12,  36 => 7,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*             {# stiles#}*/
/*         {% block stylesheets %}*/
/*            <link href="{{ asset('public/css/bootstrap.min.css" rel="stylesheet') }}/>*/
/*            <link href="{{ asset('public/css/bootstrap.css" rel="stylesheet') }}/>*/
/*            <link href="{{ asset('public/css/bootstrap-grid.css" rel="stylesheet') }}/>*/
/*         {% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*       <nav class="nav">*/
/*         <a class="nav-link active" href="#">Active</a>*/
/*         <a class="nav-link" href="#">Link</a>*/
/*         <a class="nav-link" href="#">Link</a>*/
/*         <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>*/
/*       </nav>*/
/*         {% block body %}*/
/*           <div class="container">*/
/*             <div class="row">*/
/*               <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">*/
/*                loremhfhbjjfvjdhbgzcadfsshas cac vsd cfada s s*/
/*               </div>*/
/*               <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">*/
/*                loremhfhbjjfvjdhbgzcadfsshas cac vsd cfada s s*/
/*               </div>*/
/*               <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">*/
/*                loremhfhbjjfvjdhbgzcadfsshas cac vsd cfada s s*/
/*               </div>*/
/*             </div>*/
/*           </div>*/
/*         {% endblock %}*/
/*         {% block javascripts %}*/
/*           */
/*         {% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
