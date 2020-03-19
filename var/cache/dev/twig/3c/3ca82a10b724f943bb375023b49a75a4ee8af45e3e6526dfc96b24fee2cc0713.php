<?php

/* TareaBundle:Default:index.html.twig */
class __TwigTemplate_da93ca26a698afe539b81607c346a65315b4cfc36cad74c454cb7048d31e6b2e extends Twig_Template
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
        $__internal_5e652e6d0890941f34284954b098466dee942cd94370ec0252f0c71f8ff83eac = $this->env->getExtension("native_profiler");
        $__internal_5e652e6d0890941f34284954b098466dee942cd94370ec0252f0c71f8ff83eac->enter($__internal_5e652e6d0890941f34284954b098466dee942cd94370ec0252f0c71f8ff83eac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TareaBundle:Default:index.html.twig"));

        // line 1
        echo "eventos

<ul id=\"registros\">
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["registros"]) ? $context["registros"] : $this->getContext($context, "registros")));
        foreach ($context['_seq'] as $context["_key"] => $context["registro"]) {
            // line 5
            echo "        <li>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["registro"], "title", array()), "html", null, true);
            echo "</li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['registro'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "</ul>
";
        
        $__internal_5e652e6d0890941f34284954b098466dee942cd94370ec0252f0c71f8ff83eac->leave($__internal_5e652e6d0890941f34284954b098466dee942cd94370ec0252f0c71f8ff83eac_prof);

    }

    public function getTemplateName()
    {
        return "TareaBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 7,  31 => 5,  27 => 4,  22 => 1,);
    }
}
/* eventos*/
/* */
/* <ul id="registros">*/
/*     {% for registro in registros %}*/
/*         <li>{{ registro.title }}</li>*/
/*     {% endfor %}*/
/* </ul>*/
/* */
