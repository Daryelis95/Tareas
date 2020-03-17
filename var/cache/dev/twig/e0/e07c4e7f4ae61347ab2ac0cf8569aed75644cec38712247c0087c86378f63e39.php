<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_d067471f743cfc2f97b16499a9178b535f3eae355cd8f435f145bad5801149ee extends Twig_Template
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
        $__internal_3fea47e764cb38129c7e1a003223972ade43be40e469f7d5fd29b4f3769fcfdc = $this->env->getExtension("native_profiler");
        $__internal_3fea47e764cb38129c7e1a003223972ade43be40e469f7d5fd29b4f3769fcfdc->enter($__internal_3fea47e764cb38129c7e1a003223972ade43be40e469f7d5fd29b4f3769fcfdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3fea47e764cb38129c7e1a003223972ade43be40e469f7d5fd29b4f3769fcfdc->leave($__internal_3fea47e764cb38129c7e1a003223972ade43be40e469f7d5fd29b4f3769fcfdc_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a05123c1efdd59699f2471e280b99e3c2646480e06b35ddbd91cbd44d8a65b8d = $this->env->getExtension("native_profiler");
        $__internal_a05123c1efdd59699f2471e280b99e3c2646480e06b35ddbd91cbd44d8a65b8d->enter($__internal_a05123c1efdd59699f2471e280b99e3c2646480e06b35ddbd91cbd44d8a65b8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_a05123c1efdd59699f2471e280b99e3c2646480e06b35ddbd91cbd44d8a65b8d->leave($__internal_a05123c1efdd59699f2471e280b99e3c2646480e06b35ddbd91cbd44d8a65b8d_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_cb552dc2a93655c6e82e596a85d563a0e7d58b1d2d6c93553bc646cc8985aa2e = $this->env->getExtension("native_profiler");
        $__internal_cb552dc2a93655c6e82e596a85d563a0e7d58b1d2d6c93553bc646cc8985aa2e->enter($__internal_cb552dc2a93655c6e82e596a85d563a0e7d58b1d2d6c93553bc646cc8985aa2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_cb552dc2a93655c6e82e596a85d563a0e7d58b1d2d6c93553bc646cc8985aa2e->leave($__internal_cb552dc2a93655c6e82e596a85d563a0e7d58b1d2d6c93553bc646cc8985aa2e_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_74ab68e5bbd5e70940a235a6c59959afeb6bd9f2dfce8620c2ac3e1d6b0706cb = $this->env->getExtension("native_profiler");
        $__internal_74ab68e5bbd5e70940a235a6c59959afeb6bd9f2dfce8620c2ac3e1d6b0706cb->enter($__internal_74ab68e5bbd5e70940a235a6c59959afeb6bd9f2dfce8620c2ac3e1d6b0706cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_74ab68e5bbd5e70940a235a6c59959afeb6bd9f2dfce8620c2ac3e1d6b0706cb->leave($__internal_74ab68e5bbd5e70940a235a6c59959afeb6bd9f2dfce8620c2ac3e1d6b0706cb_prof);

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
