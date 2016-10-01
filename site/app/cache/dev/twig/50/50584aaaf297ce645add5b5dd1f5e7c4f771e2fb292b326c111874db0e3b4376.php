<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_61df4c7844d8ed10bca5231f184e6faf16886c746de56802233b7503cf6e5aea extends Twig_Template
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
        $__internal_8e3ef5d8d2e91beb5aa0c87f25ab7ed7b7f989ded7b7e1afe325576a5bc0ca0a = $this->env->getExtension("native_profiler");
        $__internal_8e3ef5d8d2e91beb5aa0c87f25ab7ed7b7f989ded7b7e1afe325576a5bc0ca0a->enter($__internal_8e3ef5d8d2e91beb5aa0c87f25ab7ed7b7f989ded7b7e1afe325576a5bc0ca0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_8e3ef5d8d2e91beb5aa0c87f25ab7ed7b7f989ded7b7e1afe325576a5bc0ca0a->leave($__internal_8e3ef5d8d2e91beb5aa0c87f25ab7ed7b7f989ded7b7e1afe325576a5bc0ca0a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
