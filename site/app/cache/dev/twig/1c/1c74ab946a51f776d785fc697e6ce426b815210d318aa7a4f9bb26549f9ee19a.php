<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_e564256a44cefeba5873310511c0d9d365edbb3427f13f6f91ed0a3633909679 extends Twig_Template
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
        $__internal_9331de89d758351bb4c1d8af89c048edec81d7765dc3fc9faeff36b5790f1a61 = $this->env->getExtension("native_profiler");
        $__internal_9331de89d758351bb4c1d8af89c048edec81d7765dc3fc9faeff36b5790f1a61->enter($__internal_9331de89d758351bb4c1d8af89c048edec81d7765dc3fc9faeff36b5790f1a61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_9331de89d758351bb4c1d8af89c048edec81d7765dc3fc9faeff36b5790f1a61->leave($__internal_9331de89d758351bb4c1d8af89c048edec81d7765dc3fc9faeff36b5790f1a61_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
