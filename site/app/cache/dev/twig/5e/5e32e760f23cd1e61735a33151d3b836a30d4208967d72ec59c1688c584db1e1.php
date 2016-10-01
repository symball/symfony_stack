<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_14e81cd40b35ecb04a6c5d7707be078779ef8e9b3e6867a4f938474738259789 extends Twig_Template
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
        $__internal_02d196dd49904851be78621f2d13d7e2c8bccefba21ae301792f2e06a3f0ddaf = $this->env->getExtension("native_profiler");
        $__internal_02d196dd49904851be78621f2d13d7e2c8bccefba21ae301792f2e06a3f0ddaf->enter($__internal_02d196dd49904851be78621f2d13d7e2c8bccefba21ae301792f2e06a3f0ddaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_02d196dd49904851be78621f2d13d7e2c8bccefba21ae301792f2e06a3f0ddaf->leave($__internal_02d196dd49904851be78621f2d13d7e2c8bccefba21ae301792f2e06a3f0ddaf_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
