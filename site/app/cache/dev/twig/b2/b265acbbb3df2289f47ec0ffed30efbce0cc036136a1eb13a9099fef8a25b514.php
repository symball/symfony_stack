<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_d3b70bd5082da12a15878c09fc671827684e307cfeb8895d806941f3b8d74d62 extends Twig_Template
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
        $__internal_c05436fb1956bac425ca1db15e5dfac9e535fa73e9c6b7e35705125e8e3be2f5 = $this->env->getExtension("native_profiler");
        $__internal_c05436fb1956bac425ca1db15e5dfac9e535fa73e9c6b7e35705125e8e3be2f5->enter($__internal_c05436fb1956bac425ca1db15e5dfac9e535fa73e9c6b7e35705125e8e3be2f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_c05436fb1956bac425ca1db15e5dfac9e535fa73e9c6b7e35705125e8e3be2f5->leave($__internal_c05436fb1956bac425ca1db15e5dfac9e535fa73e9c6b7e35705125e8e3be2f5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */
