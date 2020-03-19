<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_cf19285e6caefc53a37a715fd55909893bcc84112a3a9ba07c3b7261445f5707 extends Twig_Template
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
        $__internal_f7680b7d1329c40585c96c169ec20f4e87099a6e546c1c0cf26a29ff86fbc8a6 = $this->env->getExtension("native_profiler");
        $__internal_f7680b7d1329c40585c96c169ec20f4e87099a6e546c1c0cf26a29ff86fbc8a6->enter($__internal_f7680b7d1329c40585c96c169ec20f4e87099a6e546c1c0cf26a29ff86fbc8a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_f7680b7d1329c40585c96c169ec20f4e87099a6e546c1c0cf26a29ff86fbc8a6->leave($__internal_f7680b7d1329c40585c96c169ec20f4e87099a6e546c1c0cf26a29ff86fbc8a6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */
