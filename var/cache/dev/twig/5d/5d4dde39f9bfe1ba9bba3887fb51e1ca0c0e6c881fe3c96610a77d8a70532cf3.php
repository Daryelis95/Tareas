<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_f94d5bd0c1ef1a7a797a0bdf0cad1aeeafc4d74383b5518ea484a32a020d6821 extends Twig_Template
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
        $__internal_175a846cbd4b7bcd244d98e84758bbb10f8401b37e34b93475faf04b61badcc1 = $this->env->getExtension("native_profiler");
        $__internal_175a846cbd4b7bcd244d98e84758bbb10f8401b37e34b93475faf04b61badcc1->enter($__internal_175a846cbd4b7bcd244d98e84758bbb10f8401b37e34b93475faf04b61badcc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_175a846cbd4b7bcd244d98e84758bbb10f8401b37e34b93475faf04b61badcc1->leave($__internal_175a846cbd4b7bcd244d98e84758bbb10f8401b37e34b93475faf04b61badcc1_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
