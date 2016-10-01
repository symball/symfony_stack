<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_5d7c3c0b7ad82e3cdb2a12c997a8ea23fab1383289a7fe571dad4e92673ad32a extends Twig_Template
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
        $__internal_c7f5c9ba8223d8eb2d5d5dc991590a635cd8cd5a54b8e688d56357536ead1fed = $this->env->getExtension("native_profiler");
        $__internal_c7f5c9ba8223d8eb2d5d5dc991590a635cd8cd5a54b8e688d56357536ead1fed->enter($__internal_c7f5c9ba8223d8eb2d5d5dc991590a635cd8cd5a54b8e688d56357536ead1fed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_c7f5c9ba8223d8eb2d5d5dc991590a635cd8cd5a54b8e688d56357536ead1fed->leave($__internal_c7f5c9ba8223d8eb2d5d5dc991590a635cd8cd5a54b8e688d56357536ead1fed_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="<?php echo isset($type) ? $view->escape($type) : 'text' ?>" <?php echo $view['form']->block($form, 'widget_attributes') ?><?php if (!empty($value) || is_numeric($value)): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?> />*/
/* */
