<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_f1ad60efabf80362506461bd8b81818728cfd71244e3dc67643b47fc16a6aaaa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4f67cbdc5fda7a8cbf531c816dd498bceed3f4c186f607bd44835a8e00455206 = $this->env->getExtension("native_profiler");
        $__internal_4f67cbdc5fda7a8cbf531c816dd498bceed3f4c186f607bd44835a8e00455206->enter($__internal_4f67cbdc5fda7a8cbf531c816dd498bceed3f4c186f607bd44835a8e00455206_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_4f67cbdc5fda7a8cbf531c816dd498bceed3f4c186f607bd44835a8e00455206->leave($__internal_4f67cbdc5fda7a8cbf531c816dd498bceed3f4c186f607bd44835a8e00455206_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_47c253c61dd1603e16c2737e918c8b1a0b9aa1be39050422805e0111c1d9ebea = $this->env->getExtension("native_profiler");
        $__internal_47c253c61dd1603e16c2737e918c8b1a0b9aa1be39050422805e0111c1d9ebea->enter($__internal_47c253c61dd1603e16c2737e918c8b1a0b9aa1be39050422805e0111c1d9ebea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_47c253c61dd1603e16c2737e918c8b1a0b9aa1be39050422805e0111c1d9ebea->leave($__internal_47c253c61dd1603e16c2737e918c8b1a0b9aa1be39050422805e0111c1d9ebea_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
