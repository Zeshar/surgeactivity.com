<?php

/* ZesharCRMCoreBundle:OpportunityCRUD:list__action_cancel_opportunity.html.twig */
class __TwigTemplate_bdb882e9f7ed19572b6feb61f60f5ee1c53916cf337515324b56578928b53fa7 extends Twig_Template
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
        if ((1 == $this->getAttribute((isset($context["object"]) ? $context["object"] : null), "getStatus", array(), "method"))) {
            // line 2
            echo "    <a class=\"btn btn-sm btn-default\" title=\"Close Quote as success\" href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "generateObjectUrl", array(0 => "cancelOpportunity", 1 => (isset($context["object"]) ? $context["object"] : null)), "method"), "html", null, true);
            echo "\">UnSold Opportunity</a>
";
        }
    }

    public function getTemplateName()
    {
        return "ZesharCRMCoreBundle:OpportunityCRUD:list__action_cancel_opportunity.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  21 => 2,  19 => 1,);
    }
}
/* {% if 1 == object.getStatus() %}*/
/*     <a class="btn btn-sm btn-default" title="Close Quote as success" href="{{ admin.generateObjectUrl('cancelOpportunity', object) }}">UnSold Opportunity</a>*/
/* {% endif %}*/
