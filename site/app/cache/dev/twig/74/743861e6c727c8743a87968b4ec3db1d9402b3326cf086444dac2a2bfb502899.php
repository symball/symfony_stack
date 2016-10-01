<?php

/* ::base.html.twig */
class __TwigTemplate_6c55edd318f98757d6e48e05eedaf9ca99d953a82ceb6f8a454c063fc1d6ffa7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6cc69f1e87c656122f9d957fa7e9705a906565d0a0928034c643a48ead9ab03b = $this->env->getExtension("native_profiler");
        $__internal_6cc69f1e87c656122f9d957fa7e9705a906565d0a0928034c643a48ead9ab03b->enter($__internal_6cc69f1e87c656122f9d957fa7e9705a906565d0a0928034c643a48ead9ab03b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_6cc69f1e87c656122f9d957fa7e9705a906565d0a0928034c643a48ead9ab03b->leave($__internal_6cc69f1e87c656122f9d957fa7e9705a906565d0a0928034c643a48ead9ab03b_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_f8339320c817cf2304652fdd97782a7c380d5a12c771dc4545e747e20b79e781 = $this->env->getExtension("native_profiler");
        $__internal_f8339320c817cf2304652fdd97782a7c380d5a12c771dc4545e747e20b79e781->enter($__internal_f8339320c817cf2304652fdd97782a7c380d5a12c771dc4545e747e20b79e781_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_f8339320c817cf2304652fdd97782a7c380d5a12c771dc4545e747e20b79e781->leave($__internal_f8339320c817cf2304652fdd97782a7c380d5a12c771dc4545e747e20b79e781_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_07e3ab81f183ed0877b9bb31ac5ba8aecdd1ad46d3b2dc3fe66cd787283d700a = $this->env->getExtension("native_profiler");
        $__internal_07e3ab81f183ed0877b9bb31ac5ba8aecdd1ad46d3b2dc3fe66cd787283d700a->enter($__internal_07e3ab81f183ed0877b9bb31ac5ba8aecdd1ad46d3b2dc3fe66cd787283d700a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_07e3ab81f183ed0877b9bb31ac5ba8aecdd1ad46d3b2dc3fe66cd787283d700a->leave($__internal_07e3ab81f183ed0877b9bb31ac5ba8aecdd1ad46d3b2dc3fe66cd787283d700a_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_5f2639864073a02429fa2d626c9057293c4c71918ffce1c99649e915f1490bb2 = $this->env->getExtension("native_profiler");
        $__internal_5f2639864073a02429fa2d626c9057293c4c71918ffce1c99649e915f1490bb2->enter($__internal_5f2639864073a02429fa2d626c9057293c4c71918ffce1c99649e915f1490bb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_5f2639864073a02429fa2d626c9057293c4c71918ffce1c99649e915f1490bb2->leave($__internal_5f2639864073a02429fa2d626c9057293c4c71918ffce1c99649e915f1490bb2_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_228b0e4d5a021bdafdd38c5e65b3642cd0c33565820686a7ea49c00db5be4a34 = $this->env->getExtension("native_profiler");
        $__internal_228b0e4d5a021bdafdd38c5e65b3642cd0c33565820686a7ea49c00db5be4a34->enter($__internal_228b0e4d5a021bdafdd38c5e65b3642cd0c33565820686a7ea49c00db5be4a34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_228b0e4d5a021bdafdd38c5e65b3642cd0c33565820686a7ea49c00db5be4a34->leave($__internal_228b0e4d5a021bdafdd38c5e65b3642cd0c33565820686a7ea49c00db5be4a34_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
