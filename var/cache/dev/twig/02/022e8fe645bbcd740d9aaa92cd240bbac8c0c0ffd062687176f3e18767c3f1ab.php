<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_02114be109ad2430fb4ae9f4b389b4db553d1ffc324f297a8d565d5a21eb3f67 extends Twig_Template
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
        $__internal_2f704b23c96849c15036d8e229c08f6f9bb171c659787543ba80554b73ff92a4 = $this->env->getExtension("native_profiler");
        $__internal_2f704b23c96849c15036d8e229c08f6f9bb171c659787543ba80554b73ff92a4->enter($__internal_2f704b23c96849c15036d8e229c08f6f9bb171c659787543ba80554b73ff92a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_2f704b23c96849c15036d8e229c08f6f9bb171c659787543ba80554b73ff92a4->leave($__internal_2f704b23c96849c15036d8e229c08f6f9bb171c659787543ba80554b73ff92a4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <table <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <tr>*/
/*         <td colspan="2">*/
/*             <?php echo $view['form']->errors($form) ?>*/
/*         </td>*/
/*     </tr>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </table>*/
/* */
