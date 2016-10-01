<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_204e19d2503139da13fb5109d489f52ae9817876a6d33cdc22dd14196651b36f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_b3f979a5b21dd427b00d057990c4c3d39daea0ab18cae4e7e132b5ae98bb9827 = $this->env->getExtension("native_profiler");
        $__internal_b3f979a5b21dd427b00d057990c4c3d39daea0ab18cae4e7e132b5ae98bb9827->enter($__internal_b3f979a5b21dd427b00d057990c4c3d39daea0ab18cae4e7e132b5ae98bb9827_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b3f979a5b21dd427b00d057990c4c3d39daea0ab18cae4e7e132b5ae98bb9827->leave($__internal_b3f979a5b21dd427b00d057990c4c3d39daea0ab18cae4e7e132b5ae98bb9827_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e967382f0782c4be44eeeb6ae044d1c77211979ae4deca63b6ef34c8d8781135 = $this->env->getExtension("native_profiler");
        $__internal_e967382f0782c4be44eeeb6ae044d1c77211979ae4deca63b6ef34c8d8781135->enter($__internal_e967382f0782c4be44eeeb6ae044d1c77211979ae4deca63b6ef34c8d8781135_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_e967382f0782c4be44eeeb6ae044d1c77211979ae4deca63b6ef34c8d8781135->leave($__internal_e967382f0782c4be44eeeb6ae044d1c77211979ae4deca63b6ef34c8d8781135_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_41a9cbdfdea44e4d975c0f699f07d7346da26bca09d32fe33a86f30d9234922e = $this->env->getExtension("native_profiler");
        $__internal_41a9cbdfdea44e4d975c0f699f07d7346da26bca09d32fe33a86f30d9234922e->enter($__internal_41a9cbdfdea44e4d975c0f699f07d7346da26bca09d32fe33a86f30d9234922e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_41a9cbdfdea44e4d975c0f699f07d7346da26bca09d32fe33a86f30d9234922e->leave($__internal_41a9cbdfdea44e4d975c0f699f07d7346da26bca09d32fe33a86f30d9234922e_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_03a0b3af4ced5bd615f871027c5fe584e4f7aa0048b548f7a2e5962d5e823179 = $this->env->getExtension("native_profiler");
        $__internal_03a0b3af4ced5bd615f871027c5fe584e4f7aa0048b548f7a2e5962d5e823179->enter($__internal_03a0b3af4ced5bd615f871027c5fe584e4f7aa0048b548f7a2e5962d5e823179_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_03a0b3af4ced5bd615f871027c5fe584e4f7aa0048b548f7a2e5962d5e823179->leave($__internal_03a0b3af4ced5bd615f871027c5fe584e4f7aa0048b548f7a2e5962d5e823179_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     {% if collector.hasexception %}*/
/*         <style>*/
/*             {{ render(path('_profiler_exception_css', { token: token })) }}*/
/*         </style>*/
/*     {% endif %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/*     <span class="label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}">*/
/*         <span class="icon">{{ include('@WebProfiler/Icon/exception.svg') }}</span>*/
/*         <strong>Exception</strong>*/
/*         {% if collector.hasexception %}*/
/*             <span class="count">*/
/*                 <span>1</span>*/
/*             </span>*/
/*         {% endif %}*/
/*     </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     <h2>Exceptions</h2>*/
/* */
/*     {% if not collector.hasexception %}*/
/*         <div class="empty">*/
/*             <p>No exception was thrown and caught during the request.</p>*/
/*         </div>*/
/*     {% else %}*/
/*         <div class="sf-reset">*/
/*             {{ render(path('_profiler_exception', { token: token })) }}*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
