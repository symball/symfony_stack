<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_02eb5bc49d40166f9493024120783a7c01dc5ef204d61380350269f756a1ac92 extends Twig_Template
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
        $__internal_ee6e37ecd8954e882dd0341097614b408ada0a6272ef5935aa0f1bc9b355fe28 = $this->env->getExtension("native_profiler");
        $__internal_ee6e37ecd8954e882dd0341097614b408ada0a6272ef5935aa0f1bc9b355fe28->enter($__internal_ee6e37ecd8954e882dd0341097614b408ada0a6272ef5935aa0f1bc9b355fe28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_ee6e37ecd8954e882dd0341097614b408ada0a6272ef5935aa0f1bc9b355fe28->leave($__internal_ee6e37ecd8954e882dd0341097614b408ada0a6272ef5935aa0f1bc9b355fe28_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <textarea <?php echo $view['form']->block($form, 'widget_attributes') ?>><?php echo $view->escape($value) ?></textarea>*/
/* */
