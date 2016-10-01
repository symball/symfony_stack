<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_d9eaa7c37ca5eea25930456cd0415a95e03fd577af990607c93ec47cce61265e extends Twig_Template
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
        $__internal_a9a0721e64cee9986cd28bed73bbef77918ca04ae704690544900270eb770ed5 = $this->env->getExtension("native_profiler");
        $__internal_a9a0721e64cee9986cd28bed73bbef77918ca04ae704690544900270eb770ed5->enter($__internal_a9a0721e64cee9986cd28bed73bbef77918ca04ae704690544900270eb770ed5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_a9a0721e64cee9986cd28bed73bbef77918ca04ae704690544900270eb770ed5->leave($__internal_a9a0721e64cee9986cd28bed73bbef77918ca04ae704690544900270eb770ed5_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
