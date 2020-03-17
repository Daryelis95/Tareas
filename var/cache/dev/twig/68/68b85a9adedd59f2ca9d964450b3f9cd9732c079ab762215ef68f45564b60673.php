<?php

/* base.html.twig */
class __TwigTemplate_ee5ba96451391f02fb5786b14576424cd08185803732eeae3044467d6fe6463b extends Twig_Template
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
        $__internal_cf0b699a22bc08870017846844d0323b4c171d7dddcb4538dda333ae7f5dc2f3 = $this->env->getExtension("native_profiler");
        $__internal_cf0b699a22bc08870017846844d0323b4c171d7dddcb4538dda333ae7f5dc2f3->enter($__internal_cf0b699a22bc08870017846844d0323b4c171d7dddcb4538dda333ae7f5dc2f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_cf0b699a22bc08870017846844d0323b4c171d7dddcb4538dda333ae7f5dc2f3->leave($__internal_cf0b699a22bc08870017846844d0323b4c171d7dddcb4538dda333ae7f5dc2f3_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_0bf1baa16a05b03902479288c847e9f35e00aab2fccfc977a5e239287d41ecb1 = $this->env->getExtension("native_profiler");
        $__internal_0bf1baa16a05b03902479288c847e9f35e00aab2fccfc977a5e239287d41ecb1->enter($__internal_0bf1baa16a05b03902479288c847e9f35e00aab2fccfc977a5e239287d41ecb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_0bf1baa16a05b03902479288c847e9f35e00aab2fccfc977a5e239287d41ecb1->leave($__internal_0bf1baa16a05b03902479288c847e9f35e00aab2fccfc977a5e239287d41ecb1_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_1b1f8e6aa287e2fca7c67767cb4e7e0354f293ebbc80dfb2e1725a51757d2650 = $this->env->getExtension("native_profiler");
        $__internal_1b1f8e6aa287e2fca7c67767cb4e7e0354f293ebbc80dfb2e1725a51757d2650->enter($__internal_1b1f8e6aa287e2fca7c67767cb4e7e0354f293ebbc80dfb2e1725a51757d2650_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_1b1f8e6aa287e2fca7c67767cb4e7e0354f293ebbc80dfb2e1725a51757d2650->leave($__internal_1b1f8e6aa287e2fca7c67767cb4e7e0354f293ebbc80dfb2e1725a51757d2650_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_1dab074d603f63c3a4fbe47b967a1db6a67ac3b1252d7d00c834762f2668cca5 = $this->env->getExtension("native_profiler");
        $__internal_1dab074d603f63c3a4fbe47b967a1db6a67ac3b1252d7d00c834762f2668cca5->enter($__internal_1dab074d603f63c3a4fbe47b967a1db6a67ac3b1252d7d00c834762f2668cca5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_1dab074d603f63c3a4fbe47b967a1db6a67ac3b1252d7d00c834762f2668cca5->leave($__internal_1dab074d603f63c3a4fbe47b967a1db6a67ac3b1252d7d00c834762f2668cca5_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7d09ab29e0971268829992aedfc02482cc8f557bce269e64e04bb40fea73452a = $this->env->getExtension("native_profiler");
        $__internal_7d09ab29e0971268829992aedfc02482cc8f557bce269e64e04bb40fea73452a->enter($__internal_7d09ab29e0971268829992aedfc02482cc8f557bce269e64e04bb40fea73452a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_7d09ab29e0971268829992aedfc02482cc8f557bce269e64e04bb40fea73452a->leave($__internal_7d09ab29e0971268829992aedfc02482cc8f557bce269e64e04bb40fea73452a_prof);

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
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
