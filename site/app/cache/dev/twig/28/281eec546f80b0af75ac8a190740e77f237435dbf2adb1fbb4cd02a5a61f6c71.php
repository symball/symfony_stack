<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_f5212cb5999529de55b38688188812edeefba7523acc9a560634b71dc15d74fd extends Twig_Template
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
        $__internal_779476bb1bd1bfc5eb8db232d8c9f6258c29a00ad81d82792de2750f32e16bb8 = $this->env->getExtension("native_profiler");
        $__internal_779476bb1bd1bfc5eb8db232d8c9f6258c29a00ad81d82792de2750f32e16bb8->enter($__internal_779476bb1bd1bfc5eb8db232d8c9f6258c29a00ad81d82792de2750f32e16bb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_779476bb1bd1bfc5eb8db232d8c9f6258c29a00ad81d82792de2750f32e16bb8->leave($__internal_779476bb1bd1bfc5eb8db232d8c9f6258c29a00ad81d82792de2750f32e16bb8_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
