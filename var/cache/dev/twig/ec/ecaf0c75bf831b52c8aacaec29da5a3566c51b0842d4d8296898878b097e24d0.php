<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_5c36f83a94828a221161b0a00bbcd1bbdc46255fd766731d31c1ef0b265aa96e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a55be0bc99c589d350f7a9547ec822d4af7283135bab0db54f27de351fcf7bd3 = $this->env->getExtension("native_profiler");
        $__internal_a55be0bc99c589d350f7a9547ec822d4af7283135bab0db54f27de351fcf7bd3->enter($__internal_a55be0bc99c589d350f7a9547ec822d4af7283135bab0db54f27de351fcf7bd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a55be0bc99c589d350f7a9547ec822d4af7283135bab0db54f27de351fcf7bd3->leave($__internal_a55be0bc99c589d350f7a9547ec822d4af7283135bab0db54f27de351fcf7bd3_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_47be46c187588fabcf1024e8a61acfdfc3012a3d4928b73bf7fca7a727422636 = $this->env->getExtension("native_profiler");
        $__internal_47be46c187588fabcf1024e8a61acfdfc3012a3d4928b73bf7fca7a727422636->enter($__internal_47be46c187588fabcf1024e8a61acfdfc3012a3d4928b73bf7fca7a727422636_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_47be46c187588fabcf1024e8a61acfdfc3012a3d4928b73bf7fca7a727422636->leave($__internal_47be46c187588fabcf1024e8a61acfdfc3012a3d4928b73bf7fca7a727422636_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_04abed54a6cdc0fb39af3c7cdbcc67c0cdf5293b8eea206bab3c542914b5df15 = $this->env->getExtension("native_profiler");
        $__internal_04abed54a6cdc0fb39af3c7cdbcc67c0cdf5293b8eea206bab3c542914b5df15->enter($__internal_04abed54a6cdc0fb39af3c7cdbcc67c0cdf5293b8eea206bab3c542914b5df15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_04abed54a6cdc0fb39af3c7cdbcc67c0cdf5293b8eea206bab3c542914b5df15->leave($__internal_04abed54a6cdc0fb39af3c7cdbcc67c0cdf5293b8eea206bab3c542914b5df15_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f4ce6405bbbb8b5da118088f8686919a2b962be16f0f0afcc137f9f69e624b1e = $this->env->getExtension("native_profiler");
        $__internal_f4ce6405bbbb8b5da118088f8686919a2b962be16f0f0afcc137f9f69e624b1e->enter($__internal_f4ce6405bbbb8b5da118088f8686919a2b962be16f0f0afcc137f9f69e624b1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_f4ce6405bbbb8b5da118088f8686919a2b962be16f0f0afcc137f9f69e624b1e->leave($__internal_f4ce6405bbbb8b5da118088f8686919a2b962be16f0f0afcc137f9f69e624b1e_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
