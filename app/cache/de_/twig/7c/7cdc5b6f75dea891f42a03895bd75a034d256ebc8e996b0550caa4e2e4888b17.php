<?php

/* ZesharCRMCoreBundle:ActivityCRUD:list__action_show_activity.html.twig */
class __TwigTemplate_f6510a7833d3513c9dedd08a4d0f5b56818e96ddda86460000828ad902951bc0 extends Twig_Template
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
        $__internal_d339dc2f3c8ab8c658e2ec3a999ab889b4bfe8124b01e1dfaecf942fad24df93 = $this->env->getExtension("native_profiler");
        $__internal_d339dc2f3c8ab8c658e2ec3a999ab889b4bfe8124b01e1dfaecf942fad24df93->enter($__internal_d339dc2f3c8ab8c658e2ec3a999ab889b4bfe8124b01e1dfaecf942fad24df93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ZesharCRMCoreBundle:ActivityCRUD:list__action_show_activity.html.twig"));

        // line 1
        echo "<div class=\"btn-group\">
    <a href=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_activity_show", array("id" => $this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-sm btn-default view_link\" title=\"Show\">
        <i class=\"glyphicon glyphicon-zoom-in\"></i>
        Show
    </a>";
        
        $__internal_d339dc2f3c8ab8c658e2ec3a999ab889b4bfe8124b01e1dfaecf942fad24df93->leave($__internal_d339dc2f3c8ab8c658e2ec3a999ab889b4bfe8124b01e1dfaecf942fad24df93_prof);

    }

    public function getTemplateName()
    {
        return "ZesharCRMCoreBundle:ActivityCRUD:list__action_show_activity.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* <div class="btn-group">*/
/*     <a href="{{ path('admin_activity_show', {'id': object.id}) }}" class="btn btn-sm btn-default view_link" title="Show">*/
/*         <i class="glyphicon glyphicon-zoom-in"></i>*/
/*         Show*/
/*     </a>*/
