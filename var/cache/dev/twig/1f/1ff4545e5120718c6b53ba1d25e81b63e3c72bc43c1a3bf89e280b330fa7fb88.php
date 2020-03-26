<?php

/* tareabase.html.twig */
class __TwigTemplate_1dabe6e14604b64319ddf340723a83b660e1d9704524689166d29f4f26452dd2 extends Twig_Template
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
        $__internal_3629ad91be636afc1a9cb66623e173473dc4b5272bf661883bdbc2a0ef65fb14 = $this->env->getExtension("native_profiler");
        $__internal_3629ad91be636afc1a9cb66623e173473dc4b5272bf661883bdbc2a0ef65fb14->enter($__internal_3629ad91be636afc1a9cb66623e173473dc4b5272bf661883bdbc2a0ef65fb14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tareabase.html.twig"));

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
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_3629ad91be636afc1a9cb66623e173473dc4b5272bf661883bdbc2a0ef65fb14->leave($__internal_3629ad91be636afc1a9cb66623e173473dc4b5272bf661883bdbc2a0ef65fb14_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_d795560be0739e2406f99369d4927510748301c49133a35d6f58bc200ce25380 = $this->env->getExtension("native_profiler");
        $__internal_d795560be0739e2406f99369d4927510748301c49133a35d6f58bc200ce25380->enter($__internal_d795560be0739e2406f99369d4927510748301c49133a35d6f58bc200ce25380_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Tareas";
        
        $__internal_d795560be0739e2406f99369d4927510748301c49133a35d6f58bc200ce25380->leave($__internal_d795560be0739e2406f99369d4927510748301c49133a35d6f58bc200ce25380_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d5b606a64683d324d2bde18bf2fcdbd7da65c56381a963c75b2be5ef6d32ae8e = $this->env->getExtension("native_profiler");
        $__internal_d5b606a64683d324d2bde18bf2fcdbd7da65c56381a963c75b2be5ef6d32ae8e->enter($__internal_d5b606a64683d324d2bde18bf2fcdbd7da65c56381a963c75b2be5ef6d32ae8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_d5b606a64683d324d2bde18bf2fcdbd7da65c56381a963c75b2be5ef6d32ae8e->leave($__internal_d5b606a64683d324d2bde18bf2fcdbd7da65c56381a963c75b2be5ef6d32ae8e_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_b450d09c86aec129c593ea6c48b316b57691a6f35499b8baaaed053d1cef73b6 = $this->env->getExtension("native_profiler");
        $__internal_b450d09c86aec129c593ea6c48b316b57691a6f35499b8baaaed053d1cef73b6->enter($__internal_b450d09c86aec129c593ea6c48b316b57691a6f35499b8baaaed053d1cef73b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_b450d09c86aec129c593ea6c48b316b57691a6f35499b8baaaed053d1cef73b6->leave($__internal_b450d09c86aec129c593ea6c48b316b57691a6f35499b8baaaed053d1cef73b6_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_fccae5257628d963243455227ef55ebfffb9ab6a82d2f63999a75a81fbf96d9f = $this->env->getExtension("native_profiler");
        $__internal_fccae5257628d963243455227ef55ebfffb9ab6a82d2f63999a75a81fbf96d9f->enter($__internal_fccae5257628d963243455227ef55ebfffb9ab6a82d2f63999a75a81fbf96d9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_fccae5257628d963243455227ef55ebfffb9ab6a82d2f63999a75a81fbf96d9f->leave($__internal_fccae5257628d963243455227ef55ebfffb9ab6a82d2f63999a75a81fbf96d9f_prof);

    }

    public function getTemplateName()
    {
        return "tareabase.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Tareas{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
