<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_9ab51c0c6d50ac5601430b5af998eaa6105b476a8ae5be5fcfb544415cd829aa extends Twig_Template
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
        $__internal_ca5f93b61e1c648e16025b4accf31fd5c06b083a0865eefc606eab0ec1795c4a = $this->env->getExtension("native_profiler");
        $__internal_ca5f93b61e1c648e16025b4accf31fd5c06b083a0865eefc606eab0ec1795c4a->enter($__internal_ca5f93b61e1c648e16025b4accf31fd5c06b083a0865eefc606eab0ec1795c4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_ca5f93b61e1c648e16025b4accf31fd5c06b083a0865eefc606eab0ec1795c4a->leave($__internal_ca5f93b61e1c648e16025b4accf31fd5c06b083a0865eefc606eab0ec1795c4a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */
