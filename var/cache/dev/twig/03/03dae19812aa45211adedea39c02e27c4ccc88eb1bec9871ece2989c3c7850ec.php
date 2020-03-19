<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_e7a9427c2f8804ae3fd275583883a41509fb127a767191ee493d686a4c01e7c9 extends Twig_Template
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
        $__internal_2e4510c8baa54a81bcade0a41562311ea644bcac81291890d3b4d44f1027e3c1 = $this->env->getExtension("native_profiler");
        $__internal_2e4510c8baa54a81bcade0a41562311ea644bcac81291890d3b4d44f1027e3c1->enter($__internal_2e4510c8baa54a81bcade0a41562311ea644bcac81291890d3b4d44f1027e3c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_2e4510c8baa54a81bcade0a41562311ea644bcac81291890d3b4d44f1027e3c1->leave($__internal_2e4510c8baa54a81bcade0a41562311ea644bcac81291890d3b4d44f1027e3c1_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
