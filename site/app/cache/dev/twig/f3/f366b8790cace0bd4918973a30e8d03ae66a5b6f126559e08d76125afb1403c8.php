<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_5382aa66f5ebb8d3feba2386d9dc15e93aaf01ae9beddfe770ffbd2f8e33477c extends Twig_Template
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
        $__internal_762a377683a166dd72f3d54b4835d31e4a9cf75fc1e34be54ab847db30d5dd0b = $this->env->getExtension("native_profiler");
        $__internal_762a377683a166dd72f3d54b4835d31e4a9cf75fc1e34be54ab847db30d5dd0b->enter($__internal_762a377683a166dd72f3d54b4835d31e4a9cf75fc1e34be54ab847db30d5dd0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_762a377683a166dd72f3d54b4835d31e4a9cf75fc1e34be54ab847db30d5dd0b->leave($__internal_762a377683a166dd72f3d54b4835d31e4a9cf75fc1e34be54ab847db30d5dd0b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!$label) { $label = isset($label_format)*/
/*     ? strtr($label_format, array('%name%' => $name, '%id%' => $id))*/
/*     : $view['form']->humanize($name); } ?>*/
/* <button type="<?php echo isset($type) ? $view->escape($type) : 'button' ?>" <?php echo $view['form']->block($form, 'button_attributes') ?>><?php echo $view->escape(false !== $translation_domain ? $view['translator']->trans($label, array(), $translation_domain) : $label) ?></button>*/
/* */
