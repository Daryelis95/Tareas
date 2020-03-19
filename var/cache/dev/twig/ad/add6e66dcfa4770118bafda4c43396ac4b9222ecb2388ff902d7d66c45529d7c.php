<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_1027e975649806d23fc54115c854b3572fcb9f1ae0dfc4db6bb6e3ad82a49482 extends Twig_Template
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
        $__internal_d193e85d8d898335e6fe97f6fbf30093bb7295a905e27d10518b40e3c24e459c = $this->env->getExtension("native_profiler");
        $__internal_d193e85d8d898335e6fe97f6fbf30093bb7295a905e27d10518b40e3c24e459c->enter($__internal_d193e85d8d898335e6fe97f6fbf30093bb7295a905e27d10518b40e3c24e459c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_d193e85d8d898335e6fe97f6fbf30093bb7295a905e27d10518b40e3c24e459c->leave($__internal_d193e85d8d898335e6fe97f6fbf30093bb7295a905e27d10518b40e3c24e459c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
