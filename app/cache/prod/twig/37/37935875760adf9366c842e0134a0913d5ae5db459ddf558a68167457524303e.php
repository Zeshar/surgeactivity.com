<?php

/* ZesharCRMCoreBundle:ActivityCRUD:list__action_show_activity.html.twig */
class __TwigTemplate_ed16d13e5fdcdcac1a0945dab72fe14bcbef2bbfb1177e12a13828293af746e1 extends Twig_Template
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
        // line 1
        echo "<div class=\"btn-group\">
    <a href=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_activity_show", array("id" => $this->getAttribute((isset($context["object"]) ? $context["object"] : null), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-sm btn-default view_link\" title=\"Show\">
        <i class=\"glyphicon glyphicon-zoom-in\"></i>
        Show
    </a>";
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
        return array (  22 => 2,  19 => 1,);
    }
}
/* <div class="btn-group">*/
/*     <a href="{{ path('admin_activity_show', {'id': object.id}) }}" class="btn btn-sm btn-default view_link" title="Show">*/
/*         <i class="glyphicon glyphicon-zoom-in"></i>*/
/*         Show*/
/*     </a>*/
