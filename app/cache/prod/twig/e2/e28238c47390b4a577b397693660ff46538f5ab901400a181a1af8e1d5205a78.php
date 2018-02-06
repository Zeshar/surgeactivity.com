<?php

/* ZesharCRMLeadScoringBundle:ScoringCRUD:list__action_lead_scoring.html.twig */
class __TwigTemplate_d4d4dcc3cdf9caf254389921d341bbd990b99aaab342a6616dff3b4c44ca2a1f extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "generateUrl", array(0 => "update", 1 => array("lead" => $this->getAttribute((isset($context["object"]) ? $context["object"] : null), "id", array()))), "method"), "html", null, true);
        echo "\">Scoring</a>
";
    }

    public function getTemplateName()
    {
        return "ZesharCRMLeadScoringBundle:ScoringCRUD:list__action_lead_scoring.html.twig";
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
/* <a class="btn btn-sm btn-default" title="Switch a lead into Warm type" href="{{ admin.generateUrl('update',{'lead':object.id}) }}">Scoring</a>*/
/* */
