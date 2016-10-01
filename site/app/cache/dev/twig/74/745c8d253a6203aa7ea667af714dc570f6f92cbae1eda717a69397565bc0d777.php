<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_44ef24a7556b4f09bed7d6c8e60c0def903fac1e60282d154af22f8971f5ba4f extends Twig_Template
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
        $__internal_f593dd897a556bd8f3c470219bf3bc31fe1036544b9e4ba46c717f5f7d75d1ed = $this->env->getExtension("native_profiler");
        $__internal_f593dd897a556bd8f3c470219bf3bc31fe1036544b9e4ba46c717f5f7d75d1ed->enter($__internal_f593dd897a556bd8f3c470219bf3bc31fe1036544b9e4ba46c717f5f7d75d1ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_f593dd897a556bd8f3c470219bf3bc31fe1036544b9e4ba46c717f5f7d75d1ed->leave($__internal_f593dd897a556bd8f3c470219bf3bc31fe1036544b9e4ba46c717f5f7d75d1ed_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
