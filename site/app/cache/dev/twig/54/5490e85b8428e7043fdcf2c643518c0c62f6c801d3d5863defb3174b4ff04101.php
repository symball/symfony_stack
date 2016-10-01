<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_de3101a6a9aa694a07987d04fb608f3479ad49057c555e722e82cb05d261b7ec extends Twig_Template
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
        $__internal_a902590078f5a8f0eb1c1739238af66a6bb63d10f957b908941e6f0c1be01094 = $this->env->getExtension("native_profiler");
        $__internal_a902590078f5a8f0eb1c1739238af66a6bb63d10f957b908941e6f0c1be01094->enter($__internal_a902590078f5a8f0eb1c1739238af66a6bb63d10f957b908941e6f0c1be01094_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_a902590078f5a8f0eb1c1739238af66a6bb63d10f957b908941e6f0c1be01094->leave($__internal_a902590078f5a8f0eb1c1739238af66a6bb63d10f957b908941e6f0c1be01094_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
