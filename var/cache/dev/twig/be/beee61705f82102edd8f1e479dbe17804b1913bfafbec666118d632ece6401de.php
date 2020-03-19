<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_9b6a17243c8ce70f306569bdf0dd49eb96b5bd8e5df3557577577d07d29cab3b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d40d8288d10bca6fb42c3b90bf978bf4884170fd1a96e47ec48ba2d82e6d4d07 = $this->env->getExtension("native_profiler");
        $__internal_d40d8288d10bca6fb42c3b90bf978bf4884170fd1a96e47ec48ba2d82e6d4d07->enter($__internal_d40d8288d10bca6fb42c3b90bf978bf4884170fd1a96e47ec48ba2d82e6d4d07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_d40d8288d10bca6fb42c3b90bf978bf4884170fd1a96e47ec48ba2d82e6d4d07->leave($__internal_d40d8288d10bca6fb42c3b90bf978bf4884170fd1a96e47ec48ba2d82e6d4d07_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
