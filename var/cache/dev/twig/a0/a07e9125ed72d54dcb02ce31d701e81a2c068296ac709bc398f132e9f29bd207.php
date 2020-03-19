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
        $__internal_825b368de49c40434927b55eefc51d0c295f33019a5b118bd5c37691a676ecca = $this->env->getExtension("native_profiler");
        $__internal_825b368de49c40434927b55eefc51d0c295f33019a5b118bd5c37691a676ecca->enter($__internal_825b368de49c40434927b55eefc51d0c295f33019a5b118bd5c37691a676ecca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_825b368de49c40434927b55eefc51d0c295f33019a5b118bd5c37691a676ecca->leave($__internal_825b368de49c40434927b55eefc51d0c295f33019a5b118bd5c37691a676ecca_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_3cf11b15f7e16a5dd54791c300218b1b04d7a5904d442bc05d878ad779ee68b1 = $this->env->getExtension("native_profiler");
        $__internal_3cf11b15f7e16a5dd54791c300218b1b04d7a5904d442bc05d878ad779ee68b1->enter($__internal_3cf11b15f7e16a5dd54791c300218b1b04d7a5904d442bc05d878ad779ee68b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_3cf11b15f7e16a5dd54791c300218b1b04d7a5904d442bc05d878ad779ee68b1->leave($__internal_3cf11b15f7e16a5dd54791c300218b1b04d7a5904d442bc05d878ad779ee68b1_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_21ff61350cc4fdb66a16f5cc31f5f2e16ebb85290178200c54ba556786cae7c9 = $this->env->getExtension("native_profiler");
        $__internal_21ff61350cc4fdb66a16f5cc31f5f2e16ebb85290178200c54ba556786cae7c9->enter($__internal_21ff61350cc4fdb66a16f5cc31f5f2e16ebb85290178200c54ba556786cae7c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_21ff61350cc4fdb66a16f5cc31f5f2e16ebb85290178200c54ba556786cae7c9->leave($__internal_21ff61350cc4fdb66a16f5cc31f5f2e16ebb85290178200c54ba556786cae7c9_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_706ae12dc0c33c47bf804b7e9bf6cb3f6ab82594acacbb4be903490e7e451890 = $this->env->getExtension("native_profiler");
        $__internal_706ae12dc0c33c47bf804b7e9bf6cb3f6ab82594acacbb4be903490e7e451890->enter($__internal_706ae12dc0c33c47bf804b7e9bf6cb3f6ab82594acacbb4be903490e7e451890_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_706ae12dc0c33c47bf804b7e9bf6cb3f6ab82594acacbb4be903490e7e451890->leave($__internal_706ae12dc0c33c47bf804b7e9bf6cb3f6ab82594acacbb4be903490e7e451890_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4895c9e0c85907f6e12c215b78f4343dbd71636b56b9ce765cf936a086d6af10 = $this->env->getExtension("native_profiler");
        $__internal_4895c9e0c85907f6e12c215b78f4343dbd71636b56b9ce765cf936a086d6af10->enter($__internal_4895c9e0c85907f6e12c215b78f4343dbd71636b56b9ce765cf936a086d6af10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_4895c9e0c85907f6e12c215b78f4343dbd71636b56b9ce765cf936a086d6af10->leave($__internal_4895c9e0c85907f6e12c215b78f4343dbd71636b56b9ce765cf936a086d6af10_prof);

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
