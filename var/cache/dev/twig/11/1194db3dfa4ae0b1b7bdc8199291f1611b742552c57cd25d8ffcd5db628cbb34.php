<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_10bd18b4590cebc8bdee022d0b64c09d2a02e5b9fc47006e954a257f4b27a3bd extends Twig_Template
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
        $__internal_524c898bd1b1323a74d397b1ea9ff19b88e54b7b90a36ed8ed1ca5fff2cee366 = $this->env->getExtension("native_profiler");
        $__internal_524c898bd1b1323a74d397b1ea9ff19b88e54b7b90a36ed8ed1ca5fff2cee366->enter($__internal_524c898bd1b1323a74d397b1ea9ff19b88e54b7b90a36ed8ed1ca5fff2cee366_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_524c898bd1b1323a74d397b1ea9ff19b88e54b7b90a36ed8ed1ca5fff2cee366->leave($__internal_524c898bd1b1323a74d397b1ea9ff19b88e54b7b90a36ed8ed1ca5fff2cee366_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
