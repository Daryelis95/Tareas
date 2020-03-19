<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_6acc65e4ddb9863a5a08583f8380fff56a5bb2dc37a5b2c86f965ca97917b4c6 extends Twig_Template
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
        $__internal_de8e67e9a1529b83d30a071019e65d15f70ac1e137b0cc715f9b69b2c2a3222e = $this->env->getExtension("native_profiler");
        $__internal_de8e67e9a1529b83d30a071019e65d15f70ac1e137b0cc715f9b69b2c2a3222e->enter($__internal_de8e67e9a1529b83d30a071019e65d15f70ac1e137b0cc715f9b69b2c2a3222e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_de8e67e9a1529b83d30a071019e65d15f70ac1e137b0cc715f9b69b2c2a3222e->leave($__internal_de8e67e9a1529b83d30a071019e65d15f70ac1e137b0cc715f9b69b2c2a3222e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
