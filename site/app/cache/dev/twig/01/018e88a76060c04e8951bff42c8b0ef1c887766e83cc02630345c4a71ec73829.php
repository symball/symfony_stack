<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_eb0f24cc7bb1559ec63b15c24245ffc3f5c7d604ec34a7e6af6313e8076e049a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_10b8ee882f6a8fc5e96a1266306f2cf148a8662969580a206f8d14d00772c6a4 = $this->env->getExtension("native_profiler");
        $__internal_10b8ee882f6a8fc5e96a1266306f2cf148a8662969580a206f8d14d00772c6a4->enter($__internal_10b8ee882f6a8fc5e96a1266306f2cf148a8662969580a206f8d14d00772c6a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_10b8ee882f6a8fc5e96a1266306f2cf148a8662969580a206f8d14d00772c6a4->leave($__internal_10b8ee882f6a8fc5e96a1266306f2cf148a8662969580a206f8d14d00772c6a4_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_353dfa9b2ef5cb66d4c36ae8833165c52bcac0f60a812f7dccf3f0909a05bb7a = $this->env->getExtension("native_profiler");
        $__internal_353dfa9b2ef5cb66d4c36ae8833165c52bcac0f60a812f7dccf3f0909a05bb7a->enter($__internal_353dfa9b2ef5cb66d4c36ae8833165c52bcac0f60a812f7dccf3f0909a05bb7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_353dfa9b2ef5cb66d4c36ae8833165c52bcac0f60a812f7dccf3f0909a05bb7a->leave($__internal_353dfa9b2ef5cb66d4c36ae8833165c52bcac0f60a812f7dccf3f0909a05bb7a_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_eff6e14b9ce716254246316467cce3cf9d88f68f418bdab40c2cdd88681f934b = $this->env->getExtension("native_profiler");
        $__internal_eff6e14b9ce716254246316467cce3cf9d88f68f418bdab40c2cdd88681f934b->enter($__internal_eff6e14b9ce716254246316467cce3cf9d88f68f418bdab40c2cdd88681f934b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_eff6e14b9ce716254246316467cce3cf9d88f68f418bdab40c2cdd88681f934b->leave($__internal_eff6e14b9ce716254246316467cce3cf9d88f68f418bdab40c2cdd88681f934b_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b54da8c93267ea315286da8830397f59346c4afff892314fd79ff8a27f1fd2f2 = $this->env->getExtension("native_profiler");
        $__internal_b54da8c93267ea315286da8830397f59346c4afff892314fd79ff8a27f1fd2f2->enter($__internal_b54da8c93267ea315286da8830397f59346c4afff892314fd79ff8a27f1fd2f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_b54da8c93267ea315286da8830397f59346c4afff892314fd79ff8a27f1fd2f2->leave($__internal_b54da8c93267ea315286da8830397f59346c4afff892314fd79ff8a27f1fd2f2_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
