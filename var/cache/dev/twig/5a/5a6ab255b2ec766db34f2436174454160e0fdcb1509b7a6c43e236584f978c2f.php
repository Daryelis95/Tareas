<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_e75ecc5d1738a4f23915695ec30c53cb55ee1f2b0d7a66721c42909c87fd422e extends Twig_Template
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
        $__internal_152d2fa1112eb92e03dd9c247065ccab5351b473b1613e410ec8d7c5ebbf4415 = $this->env->getExtension("native_profiler");
        $__internal_152d2fa1112eb92e03dd9c247065ccab5351b473b1613e410ec8d7c5ebbf4415->enter($__internal_152d2fa1112eb92e03dd9c247065ccab5351b473b1613e410ec8d7c5ebbf4415_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_152d2fa1112eb92e03dd9c247065ccab5351b473b1613e410ec8d7c5ebbf4415->leave($__internal_152d2fa1112eb92e03dd9c247065ccab5351b473b1613e410ec8d7c5ebbf4415_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </div>*/
/* */
