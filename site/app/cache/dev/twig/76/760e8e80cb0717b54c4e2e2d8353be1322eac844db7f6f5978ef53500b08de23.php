<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_1e863e8cd11a15c82c042127fc42430cb9c6dafc195ed4691fcb99cc34593355 extends Twig_Template
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
        $__internal_cf0ae6fa56de600e101203f119ce5d98daa084f39b5fda16b92c6b3e173504e0 = $this->env->getExtension("native_profiler");
        $__internal_cf0ae6fa56de600e101203f119ce5d98daa084f39b5fda16b92c6b3e173504e0->enter($__internal_cf0ae6fa56de600e101203f119ce5d98daa084f39b5fda16b92c6b3e173504e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_cf0ae6fa56de600e101203f119ce5d98daa084f39b5fda16b92c6b3e173504e0->leave($__internal_cf0ae6fa56de600e101203f119ce5d98daa084f39b5fda16b92c6b3e173504e0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */
