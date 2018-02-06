<?php

/* ZesharCRMCoreBundle:Goal:list_action_index.html.twig */
class __TwigTemplate_cc481733922903767e2d739f00962198b9dab6ec4f9fb4b0d86d098b88986d32 extends Twig_Template
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
        $__internal_be572300cb6f57a66f4725f796f54922ffe84853911832821455e8de80860f99 = $this->env->getExtension("native_profiler");
        $__internal_be572300cb6f57a66f4725f796f54922ffe84853911832821455e8de80860f99->enter($__internal_be572300cb6f57a66f4725f796f54922ffe84853911832821455e8de80860f99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ZesharCRMCoreBundle:Goal:list_action_index.html.twig"));

        // line 1
        echo "<a class=\"btn btn-sm btn-default view_link\" href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateObjectUrl", array(0 => "index", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "html", null, true);
        echo "\"><i class=\"fa fa-plus-circle\"></i> Create</a>
";
        
        $__internal_be572300cb6f57a66f4725f796f54922ffe84853911832821455e8de80860f99->leave($__internal_be572300cb6f57a66f4725f796f54922ffe84853911832821455e8de80860f99_prof);

    }

    public function getTemplateName()
    {
        return "ZesharCRMCoreBundle:Goal:list_action_index.html.twig";
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
/* <a class="btn btn-sm btn-default view_link" href="{{ admin.generateObjectUrl('index', object) }}"><i class="fa fa-plus-circle"></i> Create</a>*/
/* */
