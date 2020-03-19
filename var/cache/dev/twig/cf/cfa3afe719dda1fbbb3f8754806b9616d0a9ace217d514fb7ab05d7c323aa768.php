<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_4710c42222d8738f941fb8674e5d511db1ae3f719d17fe455eac33e57d61384e extends Twig_Template
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
        $__internal_2728ede4a7ad1286d127ea4fc1be9b91de6bd6fa635d5e41e011b46cd1e09638 = $this->env->getExtension("native_profiler");
        $__internal_2728ede4a7ad1286d127ea4fc1be9b91de6bd6fa635d5e41e011b46cd1e09638->enter($__internal_2728ede4a7ad1286d127ea4fc1be9b91de6bd6fa635d5e41e011b46cd1e09638_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_2728ede4a7ad1286d127ea4fc1be9b91de6bd6fa635d5e41e011b46cd1e09638->leave($__internal_2728ede4a7ad1286d127ea4fc1be9b91de6bd6fa635d5e41e011b46cd1e09638_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo $view['form']->start($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* <?php echo $view['form']->end($form) ?>*/
/* */
