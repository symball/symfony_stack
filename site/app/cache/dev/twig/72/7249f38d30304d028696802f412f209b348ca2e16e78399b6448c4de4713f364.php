<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_b23156d2f50b41231b3280229de575b8424b4802737681f952daa4baeaac7efa extends Twig_Template
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
        $__internal_074283e1f1bd8ee8c0cb352f097758f9399925625dff8ec934f62dde9a8ef416 = $this->env->getExtension("native_profiler");
        $__internal_074283e1f1bd8ee8c0cb352f097758f9399925625dff8ec934f62dde9a8ef416->enter($__internal_074283e1f1bd8ee8c0cb352f097758f9399925625dff8ec934f62dde9a8ef416_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_074283e1f1bd8ee8c0cb352f097758f9399925625dff8ec934f62dde9a8ef416->leave($__internal_074283e1f1bd8ee8c0cb352f097758f9399925625dff8ec934f62dde9a8ef416_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo str_replace('{{ widget }}', $view['form']->block($form, 'form_widget_simple'), $money_pattern) ?>*/
/* */
