<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_7108f1998d85549bb6b5125a66992f29df3edfbef7d984be56a602cf31e0ebdc extends Twig_Template
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
        $__internal_2ca453660a09f966035df1c32c0dc81b9ba6f73201338c02902407ce42fc4192 = $this->env->getExtension("native_profiler");
        $__internal_2ca453660a09f966035df1c32c0dc81b9ba6f73201338c02902407ce42fc4192->enter($__internal_2ca453660a09f966035df1c32c0dc81b9ba6f73201338c02902407ce42fc4192_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_2ca453660a09f966035df1c32c0dc81b9ba6f73201338c02902407ce42fc4192->leave($__internal_2ca453660a09f966035df1c32c0dc81b9ba6f73201338c02902407ce42fc4192_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
