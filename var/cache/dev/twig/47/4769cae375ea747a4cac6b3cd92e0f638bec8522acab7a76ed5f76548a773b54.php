<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_cfe0401eb0414b99af343c52c3a1f6dcff198fcd797ce10b221db5b42bb84be3 extends Twig_Template
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
        $__internal_3f3a7f64a93ff02cfe2a8a80317de59deb17d4db61ad39b9f8d93b89418b1d81 = $this->env->getExtension("native_profiler");
        $__internal_3f3a7f64a93ff02cfe2a8a80317de59deb17d4db61ad39b9f8d93b89418b1d81->enter($__internal_3f3a7f64a93ff02cfe2a8a80317de59deb17d4db61ad39b9f8d93b89418b1d81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_3f3a7f64a93ff02cfe2a8a80317de59deb17d4db61ad39b9f8d93b89418b1d81->leave($__internal_3f3a7f64a93ff02cfe2a8a80317de59deb17d4db61ad39b9f8d93b89418b1d81_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
