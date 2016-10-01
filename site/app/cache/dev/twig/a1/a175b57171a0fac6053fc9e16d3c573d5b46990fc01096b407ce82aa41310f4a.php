<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_45c99509f2c90f2491fd1b1122741f0e2a136dd1a18a8d8ff73e120f2c825b34 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fc9af961b5346e9fa820c6d8aa615e0e5171b09fd7f06cf709e795c9555ff595 = $this->env->getExtension("native_profiler");
        $__internal_fc9af961b5346e9fa820c6d8aa615e0e5171b09fd7f06cf709e795c9555ff595->enter($__internal_fc9af961b5346e9fa820c6d8aa615e0e5171b09fd7f06cf709e795c9555ff595_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fc9af961b5346e9fa820c6d8aa615e0e5171b09fd7f06cf709e795c9555ff595->leave($__internal_fc9af961b5346e9fa820c6d8aa615e0e5171b09fd7f06cf709e795c9555ff595_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_fd493d27cb7d3787f68243c827e0f6f1f139653f659b8a8cda846013b6501753 = $this->env->getExtension("native_profiler");
        $__internal_fd493d27cb7d3787f68243c827e0f6f1f139653f659b8a8cda846013b6501753->enter($__internal_fd493d27cb7d3787f68243c827e0f6f1f139653f659b8a8cda846013b6501753_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_fd493d27cb7d3787f68243c827e0f6f1f139653f659b8a8cda846013b6501753->leave($__internal_fd493d27cb7d3787f68243c827e0f6f1f139653f659b8a8cda846013b6501753_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_2999a25a6d4bcdbad926b5aaf11b93344686627dc424df2f0c52836b9ec98c8a = $this->env->getExtension("native_profiler");
        $__internal_2999a25a6d4bcdbad926b5aaf11b93344686627dc424df2f0c52836b9ec98c8a->enter($__internal_2999a25a6d4bcdbad926b5aaf11b93344686627dc424df2f0c52836b9ec98c8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_2999a25a6d4bcdbad926b5aaf11b93344686627dc424df2f0c52836b9ec98c8a->leave($__internal_2999a25a6d4bcdbad926b5aaf11b93344686627dc424df2f0c52836b9ec98c8a_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_d926ba5b324b4dc08fa80989699681031f5334447c2c3d68e86328d162ec25b1 = $this->env->getExtension("native_profiler");
        $__internal_d926ba5b324b4dc08fa80989699681031f5334447c2c3d68e86328d162ec25b1->enter($__internal_d926ba5b324b4dc08fa80989699681031f5334447c2c3d68e86328d162ec25b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_d926ba5b324b4dc08fa80989699681031f5334447c2c3d68e86328d162ec25b1->leave($__internal_d926ba5b324b4dc08fa80989699681031f5334447c2c3d68e86328d162ec25b1_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
