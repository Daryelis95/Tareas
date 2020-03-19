<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_15903716c6016c8f2a13cae9d401cfc4c09ebee8c332dffff3e7996d854ac295 extends Twig_Template
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
        $__internal_db7df6d9b79fb9d906518d154ac1781beb5fc346088f3c7b36427fe5780fa9f2 = $this->env->getExtension("native_profiler");
        $__internal_db7df6d9b79fb9d906518d154ac1781beb5fc346088f3c7b36427fe5780fa9f2->enter($__internal_db7df6d9b79fb9d906518d154ac1781beb5fc346088f3c7b36427fe5780fa9f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_db7df6d9b79fb9d906518d154ac1781beb5fc346088f3c7b36427fe5780fa9f2->leave($__internal_db7df6d9b79fb9d906518d154ac1781beb5fc346088f3c7b36427fe5780fa9f2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */
