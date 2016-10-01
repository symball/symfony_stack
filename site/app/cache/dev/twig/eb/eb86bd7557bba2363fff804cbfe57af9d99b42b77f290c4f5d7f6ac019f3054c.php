<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_61d87b8d1dd7917661522047ab098da813d3a30c22f68780df23df66148bfd20 extends Twig_Template
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
        $__internal_88b40aad38ce278756e310bd6dd09736bde241fb3217f5dfa3faf74a68e1dc70 = $this->env->getExtension("native_profiler");
        $__internal_88b40aad38ce278756e310bd6dd09736bde241fb3217f5dfa3faf74a68e1dc70->enter($__internal_88b40aad38ce278756e310bd6dd09736bde241fb3217f5dfa3faf74a68e1dc70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_88b40aad38ce278756e310bd6dd09736bde241fb3217f5dfa3faf74a68e1dc70->leave($__internal_88b40aad38ce278756e310bd6dd09736bde241fb3217f5dfa3faf74a68e1dc70_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($widget == 'single_text'): ?>*/
/*     <?php echo $view['form']->block($form, 'form_widget_simple'); ?>*/
/* <?php else: ?>*/
/*     <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*         <?php echo $view['form']->widget($form['date']).' '.$view['form']->widget($form['time']) ?>*/
/*     </div>*/
/* <?php endif ?>*/
/* */
