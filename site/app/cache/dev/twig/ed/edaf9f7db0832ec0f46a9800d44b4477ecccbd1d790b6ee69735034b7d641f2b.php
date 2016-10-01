<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_9bf7c2a5da6a1ccaa4df1c4b1760a08ac3761c039c0201d0bbedfaa631bace0e extends Twig_Template
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
        $__internal_c4b109e69fd6c7bae515c9cdc8cf5e2d81e7319c2b6c904fabe656f37ee04129 = $this->env->getExtension("native_profiler");
        $__internal_c4b109e69fd6c7bae515c9cdc8cf5e2d81e7319c2b6c904fabe656f37ee04129->enter($__internal_c4b109e69fd6c7bae515c9cdc8cf5e2d81e7319c2b6c904fabe656f37ee04129_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_c4b109e69fd6c7bae515c9cdc8cf5e2d81e7319c2b6c904fabe656f37ee04129->leave($__internal_c4b109e69fd6c7bae515c9cdc8cf5e2d81e7319c2b6c904fabe656f37ee04129_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
