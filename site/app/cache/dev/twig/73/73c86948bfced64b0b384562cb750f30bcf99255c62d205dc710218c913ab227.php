<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_ed1bfc7cfb2bbf3bc170d2b74e3b79256260cd0614c0d17a897c070097c477c6 extends Twig_Template
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
        $__internal_6af635ab42eecd9f7f0ddddd89e8b196c38c2b083a516a7489e4a32defbf5f6e = $this->env->getExtension("native_profiler");
        $__internal_6af635ab42eecd9f7f0ddddd89e8b196c38c2b083a516a7489e4a32defbf5f6e->enter($__internal_6af635ab42eecd9f7f0ddddd89e8b196c38c2b083a516a7489e4a32defbf5f6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_6af635ab42eecd9f7f0ddddd89e8b196c38c2b083a516a7489e4a32defbf5f6e->leave($__internal_6af635ab42eecd9f7f0ddddd89e8b196c38c2b083a516a7489e4a32defbf5f6e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */
