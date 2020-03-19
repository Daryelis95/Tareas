<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_7842bbd8bc8ad57028cdc5e4cf88775f82d75df0a37a7755672d71bdfba33ab5 extends Twig_Template
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
        $__internal_8243c6a7f88e18a2f474ed91e13fa435c7a397ee5d2251460925565d6feab706 = $this->env->getExtension("native_profiler");
        $__internal_8243c6a7f88e18a2f474ed91e13fa435c7a397ee5d2251460925565d6feab706->enter($__internal_8243c6a7f88e18a2f474ed91e13fa435c7a397ee5d2251460925565d6feab706_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_8243c6a7f88e18a2f474ed91e13fa435c7a397ee5d2251460925565d6feab706->leave($__internal_8243c6a7f88e18a2f474ed91e13fa435c7a397ee5d2251460925565d6feab706_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
