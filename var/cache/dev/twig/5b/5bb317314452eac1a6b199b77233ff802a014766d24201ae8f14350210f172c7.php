<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_b05b208462e30fb4bbaf829f9220f062cd45f1e3309431299d321c37c1d5be5c extends Twig_Template
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
        $__internal_ecf3edc95fa877b11ee81ffec8d83f1b93dc85a4393b24572b5a45bc828264ab = $this->env->getExtension("native_profiler");
        $__internal_ecf3edc95fa877b11ee81ffec8d83f1b93dc85a4393b24572b5a45bc828264ab->enter($__internal_ecf3edc95fa877b11ee81ffec8d83f1b93dc85a4393b24572b5a45bc828264ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_ecf3edc95fa877b11ee81ffec8d83f1b93dc85a4393b24572b5a45bc828264ab->leave($__internal_ecf3edc95fa877b11ee81ffec8d83f1b93dc85a4393b24572b5a45bc828264ab_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="<?php echo isset($type) ? $view->escape($type) : 'text' ?>" <?php echo $view['form']->block($form, 'widget_attributes') ?><?php if (!empty($value) || is_numeric($value)): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?> />*/
/* */
