<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_c3a361a47479a19e5a1026969dc4d36b7582239ba9bcb06d10aef1c427c50c13 extends Twig_Template
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
        $__internal_52a3eb3f520f35f082bae8b11dd5a69b48e651afb74df4d20759e6ef4647f8ac = $this->env->getExtension("native_profiler");
        $__internal_52a3eb3f520f35f082bae8b11dd5a69b48e651afb74df4d20759e6ef4647f8ac->enter($__internal_52a3eb3f520f35f082bae8b11dd5a69b48e651afb74df4d20759e6ef4647f8ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_52a3eb3f520f35f082bae8b11dd5a69b48e651afb74df4d20759e6ef4647f8ac->leave($__internal_52a3eb3f520f35f082bae8b11dd5a69b48e651afb74df4d20759e6ef4647f8ac_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <table <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <tr>*/
/*         <td colspan="2">*/
/*             <?php echo $view['form']->errors($form) ?>*/
/*         </td>*/
/*     </tr>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </table>*/
/* */
