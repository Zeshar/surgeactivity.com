<?php

/* ZesharCRMCoreBundle:Goal:list_action_check.html.twig */
class __TwigTemplate_f73d626fd5b45469f0cb2c79808dd9fd870d1ce31a29c00cb400f7ce54b59e02 extends Twig_Template
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
        $__internal_53c6d2131e1c459b737e4f98b49035d3d5607ba980f5a5a1d2a4770aef85e0ba = $this->env->getExtension("native_profiler");
        $__internal_53c6d2131e1c459b737e4f98b49035d3d5607ba980f5a5a1d2a4770aef85e0ba->enter($__internal_53c6d2131e1c459b737e4f98b49035d3d5607ba980f5a5a1d2a4770aef85e0ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ZesharCRMCoreBundle:Goal:list_action_check.html.twig"));

        // line 1
        echo "<a class=\"btn btn-sm btn-default view_link\" href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateObjectUrl", array(0 => "check", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "html", null, true);
        echo "\">Check</a>
";
        
        $__internal_53c6d2131e1c459b737e4f98b49035d3d5607ba980f5a5a1d2a4770aef85e0ba->leave($__internal_53c6d2131e1c459b737e4f98b49035d3d5607ba980f5a5a1d2a4770aef85e0ba_prof);

    }

    public function getTemplateName()
    {
        return "ZesharCRMCoreBundle:Goal:list_action_check.html.twig";
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
/* <a class="btn btn-sm btn-default view_link" href="{{ admin.generateObjectUrl('check', object) }}">Check</a>*/
/* */
