<?php

/* ZesharCRMCoreBundle:ActivityCRUD:list__action_edit_activity.html.twig */
class __TwigTemplate_18b6da4d5cf499a1fd8bd68d72d37545c1f5c531b56cc1330c55eb19835b8a81 extends Twig_Template
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
        echo "    <a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_activity_edit", array("id" => $this->getAttribute((isset($context["object"]) ? $context["object"] : null), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-sm btn-default edit_link\" title=\"Edit\">
        <i class=\"glyphicon glyphicon-edit\"></i>
        Edit
    </a>
";
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
        return array (  19 => 1,);
    }
}
/*     <a href="{{ path('admin_activity_edit', {'id': object.id}) }}" class="btn btn-sm btn-default edit_link" title="Edit">*/
/*         <i class="glyphicon glyphicon-edit"></i>*/
/*         Edit*/
/*     </a>*/
/* */
