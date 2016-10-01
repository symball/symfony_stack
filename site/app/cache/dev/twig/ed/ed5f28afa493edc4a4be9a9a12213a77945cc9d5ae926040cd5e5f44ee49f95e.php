<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_30d20b701f793dd1e7d94feea5a8292fddb87d598137c5bdfe9b542879cdafea extends Twig_Template
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
        $__internal_444cc648b5ab285338c0e12061a1d68411f46eaf7256e2332e79b99573cd9793 = $this->env->getExtension("native_profiler");
        $__internal_444cc648b5ab285338c0e12061a1d68411f46eaf7256e2332e79b99573cd9793->enter($__internal_444cc648b5ab285338c0e12061a1d68411f46eaf7256e2332e79b99573cd9793_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_444cc648b5ab285338c0e12061a1d68411f46eaf7256e2332e79b99573cd9793->leave($__internal_444cc648b5ab285338c0e12061a1d68411f46eaf7256e2332e79b99573cd9793_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo $view['form']->start($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* <?php echo $view['form']->end($form) ?>*/
/* */
