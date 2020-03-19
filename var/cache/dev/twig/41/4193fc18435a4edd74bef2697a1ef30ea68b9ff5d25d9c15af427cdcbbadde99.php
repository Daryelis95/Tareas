<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_71198a434964891874b539d12ddc8f6cd366ae89a43c021354e542f90fe614e0 extends Twig_Template
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
        $__internal_6517c1bb223b177ba1f049dfeafcdb0ca0c033e916bcd55a13fcef4524f42221 = $this->env->getExtension("native_profiler");
        $__internal_6517c1bb223b177ba1f049dfeafcdb0ca0c033e916bcd55a13fcef4524f42221->enter($__internal_6517c1bb223b177ba1f049dfeafcdb0ca0c033e916bcd55a13fcef4524f42221_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_6517c1bb223b177ba1f049dfeafcdb0ca0c033e916bcd55a13fcef4524f42221->leave($__internal_6517c1bb223b177ba1f049dfeafcdb0ca0c033e916bcd55a13fcef4524f42221_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
