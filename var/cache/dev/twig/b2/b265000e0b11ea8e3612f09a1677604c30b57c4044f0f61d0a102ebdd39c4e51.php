<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_7908883afa58bad455f09ccc1db3ccd277a94d7b59ff4e376677648d7f9b9ba2 extends Twig_Template
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
        $__internal_39b91d61abe5a85d3db7d8aea53c4d2a8975343e239bbdbde0582b5a7e33241b = $this->env->getExtension("native_profiler");
        $__internal_39b91d61abe5a85d3db7d8aea53c4d2a8975343e239bbdbde0582b5a7e33241b->enter($__internal_39b91d61abe5a85d3db7d8aea53c4d2a8975343e239bbdbde0582b5a7e33241b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_39b91d61abe5a85d3db7d8aea53c4d2a8975343e239bbdbde0582b5a7e33241b->leave($__internal_39b91d61abe5a85d3db7d8aea53c4d2a8975343e239bbdbde0582b5a7e33241b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */
