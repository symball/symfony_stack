<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_700779b264741027cb8b9bf22882795772aac9589a9739ad3695cff11a59e207 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_849def60a324fe92077af1441134d0fced6f801a428b5e2ce19db94d9061417b = $this->env->getExtension("native_profiler");
        $__internal_849def60a324fe92077af1441134d0fced6f801a428b5e2ce19db94d9061417b->enter($__internal_849def60a324fe92077af1441134d0fced6f801a428b5e2ce19db94d9061417b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_849def60a324fe92077af1441134d0fced6f801a428b5e2ce19db94d9061417b->leave($__internal_849def60a324fe92077af1441134d0fced6f801a428b5e2ce19db94d9061417b_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_2524712d20c850e4963dc06493d40c6ffcc183abf194772ca725b55b3d9b804f = $this->env->getExtension("native_profiler");
        $__internal_2524712d20c850e4963dc06493d40c6ffcc183abf194772ca725b55b3d9b804f->enter($__internal_2524712d20c850e4963dc06493d40c6ffcc183abf194772ca725b55b3d9b804f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_2524712d20c850e4963dc06493d40c6ffcc183abf194772ca725b55b3d9b804f->leave($__internal_2524712d20c850e4963dc06493d40c6ffcc183abf194772ca725b55b3d9b804f_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
