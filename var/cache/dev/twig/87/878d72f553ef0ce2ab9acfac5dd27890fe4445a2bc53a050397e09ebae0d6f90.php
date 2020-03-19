<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_fed81c3bce7ad85fbcc69234eeebad7c85c3db7ceb0956ddc19eecd7ae9d0e37 extends Twig_Template
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
        $__internal_e53bc39bb00c1cae17b0d24ae26a32cf7e580f93d5d783195882527300fe31af = $this->env->getExtension("native_profiler");
        $__internal_e53bc39bb00c1cae17b0d24ae26a32cf7e580f93d5d783195882527300fe31af->enter($__internal_e53bc39bb00c1cae17b0d24ae26a32cf7e580f93d5d783195882527300fe31af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_e53bc39bb00c1cae17b0d24ae26a32cf7e580f93d5d783195882527300fe31af->leave($__internal_e53bc39bb00c1cae17b0d24ae26a32cf7e580f93d5d783195882527300fe31af_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */
