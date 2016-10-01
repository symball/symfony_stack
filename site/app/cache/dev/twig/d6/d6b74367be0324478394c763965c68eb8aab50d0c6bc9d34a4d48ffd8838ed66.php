<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_0cbe4e2b48babaa97766e75c448647cbce0bae37137f67c15f88fb04581cd603 extends Twig_Template
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
        $__internal_c28194194800288319ee45d39a7810c476e66d3bfd37c58cbbd959348beffa6d = $this->env->getExtension("native_profiler");
        $__internal_c28194194800288319ee45d39a7810c476e66d3bfd37c58cbbd959348beffa6d->enter($__internal_c28194194800288319ee45d39a7810c476e66d3bfd37c58cbbd959348beffa6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_c28194194800288319ee45d39a7810c476e66d3bfd37c58cbbd959348beffa6d->leave($__internal_c28194194800288319ee45d39a7810c476e66d3bfd37c58cbbd959348beffa6d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */
