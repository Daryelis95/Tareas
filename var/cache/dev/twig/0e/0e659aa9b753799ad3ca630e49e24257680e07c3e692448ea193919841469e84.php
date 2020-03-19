<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_7e444808954a474c5cf495251c663099afbc8ecaf5c385016ee5de40d0bb6b81 extends Twig_Template
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
        $__internal_6733c56d86434b0b588d203ec272a1c41ed482d4eed1b962a0f8e82ce30e1448 = $this->env->getExtension("native_profiler");
        $__internal_6733c56d86434b0b588d203ec272a1c41ed482d4eed1b962a0f8e82ce30e1448->enter($__internal_6733c56d86434b0b588d203ec272a1c41ed482d4eed1b962a0f8e82ce30e1448_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_6733c56d86434b0b588d203ec272a1c41ed482d4eed1b962a0f8e82ce30e1448->leave($__internal_6733c56d86434b0b588d203ec272a1c41ed482d4eed1b962a0f8e82ce30e1448_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
