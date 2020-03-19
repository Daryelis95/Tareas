<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_1321519dc6902b2e48ca1522b5702789c17ae978d16dd2700ec43d4d4a62dcbc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_7990f2aa303689b9ad6f644ed7e18ddeb8fa3c72cde1c8c5416098cc0d0b3a32 = $this->env->getExtension("native_profiler");
        $__internal_7990f2aa303689b9ad6f644ed7e18ddeb8fa3c72cde1c8c5416098cc0d0b3a32->enter($__internal_7990f2aa303689b9ad6f644ed7e18ddeb8fa3c72cde1c8c5416098cc0d0b3a32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7990f2aa303689b9ad6f644ed7e18ddeb8fa3c72cde1c8c5416098cc0d0b3a32->leave($__internal_7990f2aa303689b9ad6f644ed7e18ddeb8fa3c72cde1c8c5416098cc0d0b3a32_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_bc3b5c97b16e6228514f4f8833574d9b1ef04f01f61cb1ba40c9cfa6a2e3fd93 = $this->env->getExtension("native_profiler");
        $__internal_bc3b5c97b16e6228514f4f8833574d9b1ef04f01f61cb1ba40c9cfa6a2e3fd93->enter($__internal_bc3b5c97b16e6228514f4f8833574d9b1ef04f01f61cb1ba40c9cfa6a2e3fd93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_bc3b5c97b16e6228514f4f8833574d9b1ef04f01f61cb1ba40c9cfa6a2e3fd93->leave($__internal_bc3b5c97b16e6228514f4f8833574d9b1ef04f01f61cb1ba40c9cfa6a2e3fd93_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_f5b85e8d617ad3d621072b4f279af182a914bc2a31417765f066b692757f5cb7 = $this->env->getExtension("native_profiler");
        $__internal_f5b85e8d617ad3d621072b4f279af182a914bc2a31417765f066b692757f5cb7->enter($__internal_f5b85e8d617ad3d621072b4f279af182a914bc2a31417765f066b692757f5cb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_f5b85e8d617ad3d621072b4f279af182a914bc2a31417765f066b692757f5cb7->leave($__internal_f5b85e8d617ad3d621072b4f279af182a914bc2a31417765f066b692757f5cb7_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_5e3dcd9c6171bbf82337f3567859d02fd2d7034d5a56f612c0fa6676dc8b9e40 = $this->env->getExtension("native_profiler");
        $__internal_5e3dcd9c6171bbf82337f3567859d02fd2d7034d5a56f612c0fa6676dc8b9e40->enter($__internal_5e3dcd9c6171bbf82337f3567859d02fd2d7034d5a56f612c0fa6676dc8b9e40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_5e3dcd9c6171bbf82337f3567859d02fd2d7034d5a56f612c0fa6676dc8b9e40->leave($__internal_5e3dcd9c6171bbf82337f3567859d02fd2d7034d5a56f612c0fa6676dc8b9e40_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
