<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_30687d79912ee34beeefa80cd4c7258892b8b5ccb60905188aa3160810a4d8ea extends Twig_Template
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
        $__internal_56c48c6b6ddf22aaa6fa65eb825829b219099492d79814e1dabfc2dd76fd4408 = $this->env->getExtension("native_profiler");
        $__internal_56c48c6b6ddf22aaa6fa65eb825829b219099492d79814e1dabfc2dd76fd4408->enter($__internal_56c48c6b6ddf22aaa6fa65eb825829b219099492d79814e1dabfc2dd76fd4408_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_56c48c6b6ddf22aaa6fa65eb825829b219099492d79814e1dabfc2dd76fd4408->leave($__internal_56c48c6b6ddf22aaa6fa65eb825829b219099492d79814e1dabfc2dd76fd4408_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */
