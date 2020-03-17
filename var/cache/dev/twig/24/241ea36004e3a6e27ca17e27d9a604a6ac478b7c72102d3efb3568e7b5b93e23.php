<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_1d5605fba19c514ba126d0c6b1ec1c95e004689ef4b4481fe7cb8b5f09b3ada2 extends Twig_Template
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
        $__internal_170d6525123df7d5805d51b11bfd3b99a460038be5be697f9c24cd2f1e52ee9c = $this->env->getExtension("native_profiler");
        $__internal_170d6525123df7d5805d51b11bfd3b99a460038be5be697f9c24cd2f1e52ee9c->enter($__internal_170d6525123df7d5805d51b11bfd3b99a460038be5be697f9c24cd2f1e52ee9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_170d6525123df7d5805d51b11bfd3b99a460038be5be697f9c24cd2f1e52ee9c->leave($__internal_170d6525123df7d5805d51b11bfd3b99a460038be5be697f9c24cd2f1e52ee9c_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_c39f26f5bfe155516a734321b505b797ca473ad1476e6df1ed260ed7319c6478 = $this->env->getExtension("native_profiler");
        $__internal_c39f26f5bfe155516a734321b505b797ca473ad1476e6df1ed260ed7319c6478->enter($__internal_c39f26f5bfe155516a734321b505b797ca473ad1476e6df1ed260ed7319c6478_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_c39f26f5bfe155516a734321b505b797ca473ad1476e6df1ed260ed7319c6478->leave($__internal_c39f26f5bfe155516a734321b505b797ca473ad1476e6df1ed260ed7319c6478_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_995d7f9375a33bdc5c519cf229a1c04537f3527d8c41c9bfffcf0c26db4a4f50 = $this->env->getExtension("native_profiler");
        $__internal_995d7f9375a33bdc5c519cf229a1c04537f3527d8c41c9bfffcf0c26db4a4f50->enter($__internal_995d7f9375a33bdc5c519cf229a1c04537f3527d8c41c9bfffcf0c26db4a4f50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_995d7f9375a33bdc5c519cf229a1c04537f3527d8c41c9bfffcf0c26db4a4f50->leave($__internal_995d7f9375a33bdc5c519cf229a1c04537f3527d8c41c9bfffcf0c26db4a4f50_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c99a82d5a4fb40cb33c68f11d69ad248a79bd85aab099319f693f2e991e9838a = $this->env->getExtension("native_profiler");
        $__internal_c99a82d5a4fb40cb33c68f11d69ad248a79bd85aab099319f693f2e991e9838a->enter($__internal_c99a82d5a4fb40cb33c68f11d69ad248a79bd85aab099319f693f2e991e9838a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_c99a82d5a4fb40cb33c68f11d69ad248a79bd85aab099319f693f2e991e9838a->leave($__internal_c99a82d5a4fb40cb33c68f11d69ad248a79bd85aab099319f693f2e991e9838a_prof);

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
