<?php

/* ZesharCRMCoreBundle:ActivityCRUD:list__action_edit_activity.html.twig */
class __TwigTemplate_fd21ddd98c448fe8b3d38560af8fc7d9ba5061acbf6b6286c0064f4260a9678b extends Twig_Template
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
        $__internal_3cdc2ff0d614e1ce19d6ce358b4d113a77d201fadeb3d52be5a9dc554dd8c486 = $this->env->getExtension("native_profiler");
        $__internal_3cdc2ff0d614e1ce19d6ce358b4d113a77d201fadeb3d52be5a9dc554dd8c486->enter($__internal_3cdc2ff0d614e1ce19d6ce358b4d113a77d201fadeb3d52be5a9dc554dd8c486_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ZesharCRMCoreBundle:ActivityCRUD:list__action_edit_activity.html.twig"));

        // line 1
        echo "    <a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_activity_edit", array("id" => $this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-sm btn-default edit_link\" title=\"Edit\">
        <i class=\"glyphicon glyphicon-edit\"></i>
        Edit
    </a>
";
        
        $__internal_3cdc2ff0d614e1ce19d6ce358b4d113a77d201fadeb3d52be5a9dc554dd8c486->leave($__internal_3cdc2ff0d614e1ce19d6ce358b4d113a77d201fadeb3d52be5a9dc554dd8c486_prof);

    }

    public function getTemplateName()
    {
        return "ZesharCRMCoreBundle:ActivityCRUD:list__action_edit_activity.html.twig";
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
/*     <a href="{{ path('admin_activity_edit', {'id': object.id}) }}" class="btn btn-sm btn-default edit_link" title="Edit">*/
/*         <i class="glyphicon glyphicon-edit"></i>*/
/*         Edit*/
/*     </a>*/
/* */
