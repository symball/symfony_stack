<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_14d75bf83d5a1fc6aecc23ca2643bceed140816581dad9847194808dfd6af452 extends Twig_Template
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
        $__internal_f0695c9d91ba7bd2fb00dd82af21916e4c646196ff0409894ec0ee8d7003c030 = $this->env->getExtension("native_profiler");
        $__internal_f0695c9d91ba7bd2fb00dd82af21916e4c646196ff0409894ec0ee8d7003c030->enter($__internal_f0695c9d91ba7bd2fb00dd82af21916e4c646196ff0409894ec0ee8d7003c030_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_f0695c9d91ba7bd2fb00dd82af21916e4c646196ff0409894ec0ee8d7003c030->leave($__internal_f0695c9d91ba7bd2fb00dd82af21916e4c646196ff0409894ec0ee8d7003c030_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </div>*/
/* */
