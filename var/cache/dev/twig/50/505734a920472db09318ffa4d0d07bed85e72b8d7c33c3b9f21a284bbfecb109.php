<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_25e3e2f4c59752faeb33f7fa34ad2574e01b3547a62ea40cb7ec8873285ccc09 extends Twig_Template
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
        $__internal_4f4d81f272064f47acd06332df9301a71387ff2d78c40e12d35655080c3e8626 = $this->env->getExtension("native_profiler");
        $__internal_4f4d81f272064f47acd06332df9301a71387ff2d78c40e12d35655080c3e8626->enter($__internal_4f4d81f272064f47acd06332df9301a71387ff2d78c40e12d35655080c3e8626_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_4f4d81f272064f47acd06332df9301a71387ff2d78c40e12d35655080c3e8626->leave($__internal_4f4d81f272064f47acd06332df9301a71387ff2d78c40e12d35655080c3e8626_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
