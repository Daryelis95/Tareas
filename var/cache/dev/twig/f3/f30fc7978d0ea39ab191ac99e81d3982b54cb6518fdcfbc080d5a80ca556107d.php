<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_45e218956c73c050673b630492cf419744f61bfb8318e10d7ddee77351b54ce3 extends Twig_Template
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
        $__internal_9994b99162c4727292e6f6a500c12cdf24c2939c46d165b40ed906babeb6dbf6 = $this->env->getExtension("native_profiler");
        $__internal_9994b99162c4727292e6f6a500c12cdf24c2939c46d165b40ed906babeb6dbf6->enter($__internal_9994b99162c4727292e6f6a500c12cdf24c2939c46d165b40ed906babeb6dbf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_9994b99162c4727292e6f6a500c12cdf24c2939c46d165b40ed906babeb6dbf6->leave($__internal_9994b99162c4727292e6f6a500c12cdf24c2939c46d165b40ed906babeb6dbf6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($widget == 'single_text'): ?>*/
/*     <?php echo $view['form']->block($form, 'form_widget_simple'); ?>*/
/* <?php else: ?>*/
/*     <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*         <?php echo $view['form']->widget($form['date']).' '.$view['form']->widget($form['time']) ?>*/
/*     </div>*/
/* <?php endif ?>*/
/* */
