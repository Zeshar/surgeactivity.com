<?php

/* ZesharCRMLeadScoringBundle:ScoringCRUD:list__action_opportunity_scoring.html.twig */
class __TwigTemplate_260d82d89baccc7b8f0feb958468b57d5edc3a8a1e0d7c3d0602ebad68e5bcbe extends Twig_Template
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
        echo "<a class=\"btn btn-sm btn-default\" title=\"Switch a lead into Warm type\" href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "generateUrl", array(0 => "update", 1 => array("opportunity" => $this->getAttribute((isset($context["object"]) ? $context["object"] : null), "id", array()))), "method"), "html", null, true);
        echo "\">Scoring</a>

";
    }

    public function getTemplateName()
    {
        return "ZesharCRMLeadScoringBundle:ScoringCRUD:list__action_opportunity_scoring.html.twig";
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
/* <a class="btn btn-sm btn-default" title="Switch a lead into Warm type" href="{{ admin.generateUrl('update',{'opportunity':object.id}) }}">Scoring</a>*/
/* */
/* */
