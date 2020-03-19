<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_fc4200b3e3e49cc9f09c05a679dec7e2a4821e4e69306d7b7af83fdb3fa23820 extends Twig_Template
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
        $__internal_50bbbf7ebb46a9491ad77b34606d9451def0a596ef5ab2fc4cda7d403b9a0617 = $this->env->getExtension("native_profiler");
        $__internal_50bbbf7ebb46a9491ad77b34606d9451def0a596ef5ab2fc4cda7d403b9a0617->enter($__internal_50bbbf7ebb46a9491ad77b34606d9451def0a596ef5ab2fc4cda7d403b9a0617_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_50bbbf7ebb46a9491ad77b34606d9451def0a596ef5ab2fc4cda7d403b9a0617->leave($__internal_50bbbf7ebb46a9491ad77b34606d9451def0a596ef5ab2fc4cda7d403b9a0617_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
