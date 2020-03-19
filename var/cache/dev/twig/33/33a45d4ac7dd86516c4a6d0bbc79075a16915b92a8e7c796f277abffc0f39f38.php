<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_0ad1029ca90955ad423180a4e13911c56736726b253cbf4c5f5d1f6ff524f88e extends Twig_Template
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
        $__internal_6f211e57fceb80cdee2368123a430f98fa7087da09d953d98f4962ac294ba48e = $this->env->getExtension("native_profiler");
        $__internal_6f211e57fceb80cdee2368123a430f98fa7087da09d953d98f4962ac294ba48e->enter($__internal_6f211e57fceb80cdee2368123a430f98fa7087da09d953d98f4962ac294ba48e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_6f211e57fceb80cdee2368123a430f98fa7087da09d953d98f4962ac294ba48e->leave($__internal_6f211e57fceb80cdee2368123a430f98fa7087da09d953d98f4962ac294ba48e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */
