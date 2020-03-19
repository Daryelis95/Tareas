<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_acb389743ae62325fddfdd19d721650c301e75c234181262d8094a9831985e44 extends Twig_Template
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
        $__internal_ed7c5dd72150f396260ab8800299930c2b6088d82d3b0df6c4628961a9db1ab7 = $this->env->getExtension("native_profiler");
        $__internal_ed7c5dd72150f396260ab8800299930c2b6088d82d3b0df6c4628961a9db1ab7->enter($__internal_ed7c5dd72150f396260ab8800299930c2b6088d82d3b0df6c4628961a9db1ab7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_ed7c5dd72150f396260ab8800299930c2b6088d82d3b0df6c4628961a9db1ab7->leave($__internal_ed7c5dd72150f396260ab8800299930c2b6088d82d3b0df6c4628961a9db1ab7_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
