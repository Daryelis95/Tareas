<?php

/* base.html.twig */
class __TwigTemplate_a7ed3c31a2dd053311e96a210c416f9f9da03cf362230e2f6101b27d54bba0df extends Twig_Template
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
        $__internal_6d21ec916fb70996c2463c5d80b4810df5d6b794f9d594d6ffd7715101042867 = $this->env->getExtension("native_profiler");
        $__internal_6d21ec916fb70996c2463c5d80b4810df5d6b794f9d594d6ffd7715101042867->enter($__internal_6d21ec916fb70996c2463c5d80b4810df5d6b794f9d594d6ffd7715101042867_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        echo "          <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\">
        ";
        // line 8
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 17
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        ";
        // line 19
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendor/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendor/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        
    </head>
    <body>
    <!-- Navigation-->
<div class=\"img\">
<header>
  <div class=\"d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm\">
    <h5 class=\"my-0 mr-md-auto font-weight-normal\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\"><i class=\"fas fa-home\"></i></font></font></h5>
    <nav class=\"my-2 my-md-0 mr-md-3\">
       <a class=\"p-2 text-dark\" href=\"#\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\"><i class=\"fas fa-scroll\"></i>Tableros</font></font></a>
       <font style=\"vertical-align: inherit;\"><a class=\"p-2 text-dark\" href=\"#\"><font style=\"vertical-align: inherit;\">Contacto</font></a><a class=\"p-2 text-dark\" href=\"#\"><font style=\"vertical-align: inherit;\">soporte </font></a></font><a class=\"p-2 text-dark\" href=\"#\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">empresarial</font></font></a>
       <a class=\"p-2 text-dark\" href=\"#\"><font style=\"vertical-align: inherit;\"></font></a>
       <a class=\"p-2 text-dark\" href=\"#\"><font style=\"vertical-align: inherit;\"></font></a>
    </nav>
    <a class=\"btn btn-outline-success\" href=\"#\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">Regístrate</font></font></a>
  </div>
</header>
      
       
        ";
        // line 40
        $this->displayBlock('body', $context, $blocks);
        // line 43
        echo "
         ";
        // line 44
        $this->displayBlock('javascripts', $context, $blocks);
        // line 47
        echo "    </body>
</html>
";
        
        $__internal_6d21ec916fb70996c2463c5d80b4810df5d6b794f9d594d6ffd7715101042867->leave($__internal_6d21ec916fb70996c2463c5d80b4810df5d6b794f9d594d6ffd7715101042867_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_8851d9d4a5d41b222219b104504406d431aeb0ca5176a8d7a9dc3949eaf175af = $this->env->getExtension("native_profiler");
        $__internal_8851d9d4a5d41b222219b104504406d431aeb0ca5176a8d7a9dc3949eaf175af->enter($__internal_8851d9d4a5d41b222219b104504406d431aeb0ca5176a8d7a9dc3949eaf175af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_8851d9d4a5d41b222219b104504406d431aeb0ca5176a8d7a9dc3949eaf175af->leave($__internal_8851d9d4a5d41b222219b104504406d431aeb0ca5176a8d7a9dc3949eaf175af_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_026244b4b109189761fc58a67ddb64f0c0e007b9564eff89537479df3ff0bcd5 = $this->env->getExtension("native_profiler");
        $__internal_026244b4b109189761fc58a67ddb64f0c0e007b9564eff89537479df3ff0bcd5->enter($__internal_026244b4b109189761fc58a67ddb64f0c0e007b9564eff89537479df3ff0bcd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 9
        echo "           <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\">
           <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\">
           <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("fonts/fontawesome-webfont_9D521E95.svg"), "html", null, true);
        echo "\">
           <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("fonts/line-awesome.svg"), "html", null, true);
        echo "\">
           <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/all.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/all.min.css"), "html", null, true);
        echo "\">
           <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/styles.css"), "html", null, true);
        echo "\">
        ";
        
        $__internal_026244b4b109189761fc58a67ddb64f0c0e007b9564eff89537479df3ff0bcd5->leave($__internal_026244b4b109189761fc58a67ddb64f0c0e007b9564eff89537479df3ff0bcd5_prof);

    }

    // line 40
    public function block_body($context, array $blocks = array())
    {
        $__internal_e4c91d115c77b239b87b8f83ec6fc5d94a6ebca0873c43f0f8678fdcf192d71f = $this->env->getExtension("native_profiler");
        $__internal_e4c91d115c77b239b87b8f83ec6fc5d94a6ebca0873c43f0f8678fdcf192d71f->enter($__internal_e4c91d115c77b239b87b8f83ec6fc5d94a6ebca0873c43f0f8678fdcf192d71f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 41
        echo "        
        ";
        
        $__internal_e4c91d115c77b239b87b8f83ec6fc5d94a6ebca0873c43f0f8678fdcf192d71f->leave($__internal_e4c91d115c77b239b87b8f83ec6fc5d94a6ebca0873c43f0f8678fdcf192d71f_prof);

    }

    // line 44
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d8880c37089a474780ffdb7d07a1003dfeeffcf2ce350346dd9aa02cc75cd5a1 = $this->env->getExtension("native_profiler");
        $__internal_d8880c37089a474780ffdb7d07a1003dfeeffcf2ce350346dd9aa02cc75cd5a1->enter($__internal_d8880c37089a474780ffdb7d07a1003dfeeffcf2ce350346dd9aa02cc75cd5a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 45
        echo "          
        ";
        
        $__internal_d8880c37089a474780ffdb7d07a1003dfeeffcf2ce350346dd9aa02cc75cd5a1->leave($__internal_d8880c37089a474780ffdb7d07a1003dfeeffcf2ce350346dd9aa02cc75cd5a1_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 45,  158 => 44,  150 => 41,  144 => 40,  135 => 15,  131 => 14,  127 => 13,  123 => 12,  119 => 11,  115 => 10,  110 => 9,  104 => 8,  92 => 5,  83 => 47,  81 => 44,  78 => 43,  76 => 40,  53 => 20,  48 => 19,  43 => 17,  41 => 8,  36 => 7,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*             {# css bootstrap#}*/
/*           <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">*/
/*         {% block stylesheets %}*/
/*            <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">*/
/*            <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">*/
/*            <link rel="stylesheet" href="{{ asset('fonts/fontawesome-webfont_9D521E95.svg') }}">*/
/*            <link rel="stylesheet" href="{{ asset('fonts/line-awesome.svg') }}">*/
/*            <link rel="stylesheet" href="{{ asset('css/all.css') }}">*/
/*             <link rel="stylesheet" href="{{ asset('css/all.min.css') }}">*/
/*            <link rel="stylesheet" href="{{ asset('css/styles.css') }}">*/
/*         {% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*         {# js bootstrap#}*/
/*         <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>*/
/*         <script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js') }}"></script>*/
/*         */
/*     </head>*/
/*     <body>*/
/*     <!-- Navigation-->*/
/* <div class="img">*/
/* <header>*/
/*   <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">*/
/*     <h5 class="my-0 mr-md-auto font-weight-normal"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><i class="fas fa-home"></i></font></font></h5>*/
/*     <nav class="my-2 my-md-0 mr-md-3">*/
/*        <a class="p-2 text-dark" href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><i class="fas fa-scroll"></i>Tableros</font></font></a>*/
/*        <font style="vertical-align: inherit;"><a class="p-2 text-dark" href="#"><font style="vertical-align: inherit;">Contacto</font></a><a class="p-2 text-dark" href="#"><font style="vertical-align: inherit;">soporte </font></a></font><a class="p-2 text-dark" href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">empresarial</font></font></a>*/
/*        <a class="p-2 text-dark" href="#"><font style="vertical-align: inherit;"></font></a>*/
/*        <a class="p-2 text-dark" href="#"><font style="vertical-align: inherit;"></font></a>*/
/*     </nav>*/
/*     <a class="btn btn-outline-success" href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Regístrate</font></font></a>*/
/*   </div>*/
/* </header>*/
/*       */
/*        */
/*         {% block body %}*/
/*         */
/*         {% endblock %}*/
/* */
/*          {% block javascripts %}*/
/*           */
/*         {% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
