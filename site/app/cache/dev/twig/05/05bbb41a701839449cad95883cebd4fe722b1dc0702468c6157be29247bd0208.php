<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_dc540e0fca07d92538942be15a7fd0dc9758ae826e0fc9a763c278f0737f0d5e extends Twig_Template
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
        $__internal_1b5fb62c5f96524fa34baf9c10df91a3fc6df3b13238103fe9de563610075e7e = $this->env->getExtension("native_profiler");
        $__internal_1b5fb62c5f96524fa34baf9c10df91a3fc6df3b13238103fe9de563610075e7e->enter($__internal_1b5fb62c5f96524fa34baf9c10df91a3fc6df3b13238103fe9de563610075e7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_1b5fb62c5f96524fa34baf9c10df91a3fc6df3b13238103fe9de563610075e7e->leave($__internal_1b5fb62c5f96524fa34baf9c10df91a3fc6df3b13238103fe9de563610075e7e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
