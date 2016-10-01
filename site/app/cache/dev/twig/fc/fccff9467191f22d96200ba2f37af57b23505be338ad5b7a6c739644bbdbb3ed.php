<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_df8de1818040f7dcf43043a120d2e02a405f90c722964f3001c90c33ed1e4620 extends Twig_Template
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
        $__internal_97e7dc93aa9603395b178affe467053bf911c2e300f053c005c7bd66201e634a = $this->env->getExtension("native_profiler");
        $__internal_97e7dc93aa9603395b178affe467053bf911c2e300f053c005c7bd66201e634a->enter($__internal_97e7dc93aa9603395b178affe467053bf911c2e300f053c005c7bd66201e634a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_97e7dc93aa9603395b178affe467053bf911c2e300f053c005c7bd66201e634a->leave($__internal_97e7dc93aa9603395b178affe467053bf911c2e300f053c005c7bd66201e634a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr style="display: none">*/
/*     <td colspan="2">*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
