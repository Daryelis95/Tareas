<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_daf053fdd69d98ff45c29568c4c35148fc0492f955fba2d47291072f32f645d9 extends Twig_Template
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
        $__internal_e6d3d3c7e3efc957c5747e664b3bb100b1f226f7abac1d579d38b71333288ce1 = $this->env->getExtension("native_profiler");
        $__internal_e6d3d3c7e3efc957c5747e664b3bb100b1f226f7abac1d579d38b71333288ce1->enter($__internal_e6d3d3c7e3efc957c5747e664b3bb100b1f226f7abac1d579d38b71333288ce1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_e6d3d3c7e3efc957c5747e664b3bb100b1f226f7abac1d579d38b71333288ce1->leave($__internal_e6d3d3c7e3efc957c5747e664b3bb100b1f226f7abac1d579d38b71333288ce1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
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
/* <?php echo str_replace('{{ widget }}', $view['form']->block($form, 'form_widget_simple'), $money_pattern) ?>*/
/* */
