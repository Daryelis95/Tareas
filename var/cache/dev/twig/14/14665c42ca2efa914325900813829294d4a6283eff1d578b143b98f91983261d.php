<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_b92792cacfffd92016750920b14289c0ebadb52e57bd3b3c9472c605cce122e7 extends Twig_Template
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
        $__internal_c2e44ccabe17eecc560470113f7abcee71c9ead7498b43379617448b0f6a21e5 = $this->env->getExtension("native_profiler");
        $__internal_c2e44ccabe17eecc560470113f7abcee71c9ead7498b43379617448b0f6a21e5->enter($__internal_c2e44ccabe17eecc560470113f7abcee71c9ead7498b43379617448b0f6a21e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_c2e44ccabe17eecc560470113f7abcee71c9ead7498b43379617448b0f6a21e5->leave($__internal_c2e44ccabe17eecc560470113f7abcee71c9ead7498b43379617448b0f6a21e5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */
