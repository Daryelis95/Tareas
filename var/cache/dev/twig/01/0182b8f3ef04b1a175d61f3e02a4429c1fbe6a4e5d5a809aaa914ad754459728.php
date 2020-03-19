<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_5bf31c1ceddbbdbc04c07548113bc4b1f840d437f2bf3f81c4f49f9ec051dff1 extends Twig_Template
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
        $__internal_32574ecb959f1d5341130efcc363f7adcbc7b678a22e8323d8360626caa3cee5 = $this->env->getExtension("native_profiler");
        $__internal_32574ecb959f1d5341130efcc363f7adcbc7b678a22e8323d8360626caa3cee5->enter($__internal_32574ecb959f1d5341130efcc363f7adcbc7b678a22e8323d8360626caa3cee5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_32574ecb959f1d5341130efcc363f7adcbc7b678a22e8323d8360626caa3cee5->leave($__internal_32574ecb959f1d5341130efcc363f7adcbc7b678a22e8323d8360626caa3cee5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */
