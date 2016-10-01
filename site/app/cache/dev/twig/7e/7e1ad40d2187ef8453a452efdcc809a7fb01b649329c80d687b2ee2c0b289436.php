<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_bb2222b84c90f51c773d86f12069cbadbd90a5a37efadf03095c2402105f6488 extends Twig_Template
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
        $__internal_53bb0941bb78c62358902b6909b1abf0c39af2f26bd90e19711030676dfb516c = $this->env->getExtension("native_profiler");
        $__internal_53bb0941bb78c62358902b6909b1abf0c39af2f26bd90e19711030676dfb516c->enter($__internal_53bb0941bb78c62358902b6909b1abf0c39af2f26bd90e19711030676dfb516c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_53bb0941bb78c62358902b6909b1abf0c39af2f26bd90e19711030676dfb516c->leave($__internal_53bb0941bb78c62358902b6909b1abf0c39af2f26bd90e19711030676dfb516c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
