<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_0cbf0a239bced41c3124b6127d4805f3bc80ae6efb05dfecca54fc53371f4cd6 extends Twig_Template
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
        $__internal_454320d5692d4f92ed84281925158dd076f00d09d529cfaeae36075c88e7f5db = $this->env->getExtension("native_profiler");
        $__internal_454320d5692d4f92ed84281925158dd076f00d09d529cfaeae36075c88e7f5db->enter($__internal_454320d5692d4f92ed84281925158dd076f00d09d529cfaeae36075c88e7f5db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_454320d5692d4f92ed84281925158dd076f00d09d529cfaeae36075c88e7f5db->leave($__internal_454320d5692d4f92ed84281925158dd076f00d09d529cfaeae36075c88e7f5db_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <textarea <?php echo $view['form']->block($form, 'widget_attributes') ?>><?php echo $view->escape($value) ?></textarea>*/
/* */
