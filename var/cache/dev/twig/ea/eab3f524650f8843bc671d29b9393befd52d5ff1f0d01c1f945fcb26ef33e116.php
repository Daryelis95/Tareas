<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_bd0ad26ed321d2a3d03525dd221e20b9f7579481f9f31565ef1f3a84cfda2db4 extends Twig_Template
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
        $__internal_7e494746dfd529c9738b75ea1ce8a20b1297f8a67875f608725a9be53927873f = $this->env->getExtension("native_profiler");
        $__internal_7e494746dfd529c9738b75ea1ce8a20b1297f8a67875f608725a9be53927873f->enter($__internal_7e494746dfd529c9738b75ea1ce8a20b1297f8a67875f608725a9be53927873f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_7e494746dfd529c9738b75ea1ce8a20b1297f8a67875f608725a9be53927873f->leave($__internal_7e494746dfd529c9738b75ea1ce8a20b1297f8a67875f608725a9be53927873f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!$label) { $label = isset($label_format)*/
/*     ? strtr($label_format, array('%name%' => $name, '%id%' => $id))*/
/*     : $view['form']->humanize($name); } ?>*/
/* <button type="<?php echo isset($type) ? $view->escape($type) : 'button' ?>" <?php echo $view['form']->block($form, 'button_attributes') ?>><?php echo $view->escape(false !== $translation_domain ? $view['translator']->trans($label, array(), $translation_domain) : $label) ?></button>*/
/* */
