<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_eddb373afcf9b610cbe975766745a6c7a4e515598de70aad97abcf71b1b47644 extends Twig_Template
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
        $__internal_70705c33274feee3bcfe830182e940cabdab97269ddc7d7a20acb8fcc20b3d32 = $this->env->getExtension("native_profiler");
        $__internal_70705c33274feee3bcfe830182e940cabdab97269ddc7d7a20acb8fcc20b3d32->enter($__internal_70705c33274feee3bcfe830182e940cabdab97269ddc7d7a20acb8fcc20b3d32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_70705c33274feee3bcfe830182e940cabdab97269ddc7d7a20acb8fcc20b3d32->leave($__internal_70705c33274feee3bcfe830182e940cabdab97269ddc7d7a20acb8fcc20b3d32_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
