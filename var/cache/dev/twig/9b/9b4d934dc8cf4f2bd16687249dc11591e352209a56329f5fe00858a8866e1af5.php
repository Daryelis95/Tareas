<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_f6abc37a90ee68aa63fafb108d77218b2adeb955ada4940f6f14bfee923b67b8 extends Twig_Template
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
        $__internal_2a41e444f815a5f5b27a5ecbcefc32eecc637e7c577fc62aef656bc9ad1523e2 = $this->env->getExtension("native_profiler");
        $__internal_2a41e444f815a5f5b27a5ecbcefc32eecc637e7c577fc62aef656bc9ad1523e2->enter($__internal_2a41e444f815a5f5b27a5ecbcefc32eecc637e7c577fc62aef656bc9ad1523e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_2a41e444f815a5f5b27a5ecbcefc32eecc637e7c577fc62aef656bc9ad1523e2->leave($__internal_2a41e444f815a5f5b27a5ecbcefc32eecc637e7c577fc62aef656bc9ad1523e2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr style="display: none">*/
/*     <td colspan="2">*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
