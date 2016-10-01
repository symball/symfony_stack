<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_51518df3fba84f860f88176c6f253b11996eb3e1312f80933cd98eee6a6d0bf0 extends Twig_Template
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
        $__internal_29944c20000a318e5a9be8dbcc6777ce4be4b4256a18df0a87973e56c1172c3a = $this->env->getExtension("native_profiler");
        $__internal_29944c20000a318e5a9be8dbcc6777ce4be4b4256a18df0a87973e56c1172c3a->enter($__internal_29944c20000a318e5a9be8dbcc6777ce4be4b4256a18df0a87973e56c1172c3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_29944c20000a318e5a9be8dbcc6777ce4be4b4256a18df0a87973e56c1172c3a->leave($__internal_29944c20000a318e5a9be8dbcc6777ce4be4b4256a18df0a87973e56c1172c3a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
