<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_6be870fe2c8ea18edfda6cf43b5c550505cd75a3876f5d1424ef974f17dedf79 extends Twig_Template
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
        $__internal_fedbdc6c0194e8f7be1855c70ba132161286651393a548f1ebbbf733af41fbeb = $this->env->getExtension("native_profiler");
        $__internal_fedbdc6c0194e8f7be1855c70ba132161286651393a548f1ebbbf733af41fbeb->enter($__internal_fedbdc6c0194e8f7be1855c70ba132161286651393a548f1ebbbf733af41fbeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_fedbdc6c0194e8f7be1855c70ba132161286651393a548f1ebbbf733af41fbeb->leave($__internal_fedbdc6c0194e8f7be1855c70ba132161286651393a548f1ebbbf733af41fbeb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */
