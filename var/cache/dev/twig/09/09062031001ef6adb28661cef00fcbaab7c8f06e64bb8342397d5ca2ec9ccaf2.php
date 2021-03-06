<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_97afb834e1757336f0410888f1efb89e5a51d50fae1443a9da8b95776860dcea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5f4503fa95cb5c6648feb7ebf3bc0328a7ca24d9d00ee3899a9edd2a368e1106 = $this->env->getExtension("native_profiler");
        $__internal_5f4503fa95cb5c6648feb7ebf3bc0328a7ca24d9d00ee3899a9edd2a368e1106->enter($__internal_5f4503fa95cb5c6648feb7ebf3bc0328a7ca24d9d00ee3899a9edd2a368e1106_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5f4503fa95cb5c6648feb7ebf3bc0328a7ca24d9d00ee3899a9edd2a368e1106->leave($__internal_5f4503fa95cb5c6648feb7ebf3bc0328a7ca24d9d00ee3899a9edd2a368e1106_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ed9a7a307041ef366fe4f86feb60692f515e7007f5ff55209103242a13f6cf3a = $this->env->getExtension("native_profiler");
        $__internal_ed9a7a307041ef366fe4f86feb60692f515e7007f5ff55209103242a13f6cf3a->enter($__internal_ed9a7a307041ef366fe4f86feb60692f515e7007f5ff55209103242a13f6cf3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_ed9a7a307041ef366fe4f86feb60692f515e7007f5ff55209103242a13f6cf3a->leave($__internal_ed9a7a307041ef366fe4f86feb60692f515e7007f5ff55209103242a13f6cf3a_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_938425604664be0b828d532a3e25a651b302643d0cc04c3564c81b8b81d6b59b = $this->env->getExtension("native_profiler");
        $__internal_938425604664be0b828d532a3e25a651b302643d0cc04c3564c81b8b81d6b59b->enter($__internal_938425604664be0b828d532a3e25a651b302643d0cc04c3564c81b8b81d6b59b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_938425604664be0b828d532a3e25a651b302643d0cc04c3564c81b8b81d6b59b->leave($__internal_938425604664be0b828d532a3e25a651b302643d0cc04c3564c81b8b81d6b59b_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
