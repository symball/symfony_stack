<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_c6f85ceaaf8b8cd4b68518b44f3f826c31dce50da4641e003d603fe550741125 extends Twig_Template
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
        $__internal_3ac1b50823f079f65b64dafe1fa67205a8421209b022b75f5ba525d83e9fdb3a = $this->env->getExtension("native_profiler");
        $__internal_3ac1b50823f079f65b64dafe1fa67205a8421209b022b75f5ba525d83e9fdb3a->enter($__internal_3ac1b50823f079f65b64dafe1fa67205a8421209b022b75f5ba525d83e9fdb3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_3ac1b50823f079f65b64dafe1fa67205a8421209b022b75f5ba525d83e9fdb3a->leave($__internal_3ac1b50823f079f65b64dafe1fa67205a8421209b022b75f5ba525d83e9fdb3a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
