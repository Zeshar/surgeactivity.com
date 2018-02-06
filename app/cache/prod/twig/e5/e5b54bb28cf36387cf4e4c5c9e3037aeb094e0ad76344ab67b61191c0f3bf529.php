<?php

/* ZesharCRMCoreBundle:OpportunityCRUD:list__action_close_opportunity.html.twig */
class __TwigTemplate_e05c42cf38caf6c3681d851921f939d49d865ac0be3099ee88b9acc0c1eb64f9 extends Twig_Template
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
            echo "    <a class=\"btn btn-sm btn-default\" title=\"Convert a Opportunity to Quote\" href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "generateObjectUrl", array(0 => "closeOpportunity", 1 => (isset($context["object"]) ? $context["object"] : null)), "method"), "html", null, true);
            echo "\">Create quote</a>
";
        }
    }

    public function getTemplateName()
    {
        return "ZesharCRMCoreBundle:OpportunityCRUD:list__action_close_opportunity.html.twig";
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
/* {% if  1 == object.getStatus() %}*/
/*     <a class="btn btn-sm btn-default" title="Convert a Opportunity to Quote" href="{{ admin.generateObjectUrl('closeOpportunity', object) }}">Create quote</a>*/
/* {% endif %}*/
