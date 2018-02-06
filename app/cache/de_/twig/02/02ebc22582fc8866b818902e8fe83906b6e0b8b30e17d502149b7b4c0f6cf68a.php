<?php

/* ZesharCRMCoreBundle:CRUD/DisplayPartial:lead_opportunity_show_top_actions.html.twig */
class __TwigTemplate_d3bf19cfa145590f7c0a12a7ca092452ef0fef1786be88eab836aa2c7a45c581 extends Twig_Template
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
        $__internal_d5afdbd476dd0c717a64b51a1984383eac24026315a08a545a6f3f75e155b3ad = $this->env->getExtension("native_profiler");
        $__internal_d5afdbd476dd0c717a64b51a1984383eac24026315a08a545a6f3f75e155b3ad->enter($__internal_d5afdbd476dd0c717a64b51a1984383eac24026315a08a545a6f3f75e155b3ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ZesharCRMCoreBundle:CRUD/DisplayPartial:lead_opportunity_show_top_actions.html.twig"));

        // line 1
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array(), "any", false, true), "get", array(0 => "leadCampaign"), "method", true, true)) {
            // line 2
            echo "    ";
            $context["leadCampaign"] = $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "leadCampaign"), "method");
        } else {
            // line 4
            echo "    ";
            $context["leadCampaign"] = "";
        }
        // line 6
        echo "
<div class=\"top-actions\" data-lead-id=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "getId", array(), "method"), "html", null, true);
        echo "\" data-lead-campaign=\"";
        echo twig_escape_filter($this->env, (isset($context["leadCampaign"]) ? $context["leadCampaign"] : $this->getContext($context, "leadCampaign")), "html", null, true);
        echo "\">
    ";
        // line 8
        if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getLabel", array(), "method") == "Lead")) {
            // line 9
            echo "        <button class=\"btn btn-green-border double-quote transition-opportunity\" data-status=\"opportunity\" value=\"1\">Opportunity</button>
        <button class=\"btn btn-green-border double-quote transition-opportunity\" data-status=\"quote\" value=\"3\">Quote</button>
    ";
        }
        // line 12
        echo "    ";
        if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getLabel", array(), "method") == "Opportunity")) {
            // line 13
            echo "        ";
            if (($this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "getStatus", array()) == 1)) {
                // line 14
                echo "            <button class=\"btn btn-green-border double-quote back transition-opportunity\" data-status=\"opportunity_to_lead\" value=\"3\">Lead</button>
            <button class=\"btn btn-green-border double-quote transition-opportunity\" data-status=\"opportunity_to_quote\" value=\"3\">Quote</button>
            <button class=\"btn btn-green-border double-quote transition-opportunity\" data-status=\"opportunity_to_sold\" value=\"5\">Sold</button>
        ";
            }
            // line 18
            echo "        ";
            if (($this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "getStatus", array()) == 3)) {
                // line 19
                echo "            <button class=\"btn btn-green-border double-quote back transition-opportunity\" data-status=\"quote_to_opportunity\" value=\"1\">Opportunity</button>
            <button class=\"btn btn-green-border double-quote transition-opportunity\" data-status=\"opportunity_to_sold\" value=\"5\">Sold</button>
        ";
            }
            // line 22
            echo "    ";
        }
        // line 23
        echo "    ";
        if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getLabel", array(), "method") == "Lead")) {
            // line 24
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateObjectUrl", array(0 => "delete", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "html", null, true);
            echo "\">Delete ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getLabel", array(), "method"), "html", null, true);
            echo "</a>
    ";
        }
        // line 26
        echo "</div>
";
        
        $__internal_d5afdbd476dd0c717a64b51a1984383eac24026315a08a545a6f3f75e155b3ad->leave($__internal_d5afdbd476dd0c717a64b51a1984383eac24026315a08a545a6f3f75e155b3ad_prof);

    }

    public function getTemplateName()
    {
        return "ZesharCRMCoreBundle:CRUD/DisplayPartial:lead_opportunity_show_top_actions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 26,  74 => 24,  71 => 23,  68 => 22,  63 => 19,  60 => 18,  54 => 14,  51 => 13,  48 => 12,  43 => 9,  41 => 8,  35 => 7,  32 => 6,  28 => 4,  24 => 2,  22 => 1,);
    }
}
/* {% if app.request.get('leadCampaign') is defined %}*/
/*     {% set leadCampaign = app.request.get('leadCampaign') %}*/
/* {% else %}*/
/*     {% set leadCampaign = '' %}*/
/* {% endif %}*/
/* */
/* <div class="top-actions" data-lead-id="{{ object.getId() }}" data-lead-campaign="{{ leadCampaign }}">*/
/*     {% if admin.getLabel() == 'Lead' %}*/
/*         <button class="btn btn-green-border double-quote transition-opportunity" data-status="opportunity" value="1">Opportunity</button>*/
/*         <button class="btn btn-green-border double-quote transition-opportunity" data-status="quote" value="3">Quote</button>*/
/*     {% endif %}*/
/*     {% if admin.getLabel() == 'Opportunity' %}*/
/*         {% if object.getStatus == 1 %}*/
/*             <button class="btn btn-green-border double-quote back transition-opportunity" data-status="opportunity_to_lead" value="3">Lead</button>*/
/*             <button class="btn btn-green-border double-quote transition-opportunity" data-status="opportunity_to_quote" value="3">Quote</button>*/
/*             <button class="btn btn-green-border double-quote transition-opportunity" data-status="opportunity_to_sold" value="5">Sold</button>*/
/*         {% endif %}*/
/*         {% if object.getStatus == 3 %}*/
/*             <button class="btn btn-green-border double-quote back transition-opportunity" data-status="quote_to_opportunity" value="1">Opportunity</button>*/
/*             <button class="btn btn-green-border double-quote transition-opportunity" data-status="opportunity_to_sold" value="5">Sold</button>*/
/*         {% endif %}*/
/*     {% endif %}*/
/*     {% if admin.getLabel() == 'Lead' %}*/
/*         <a href="{{ admin.generateObjectUrl('delete', object) }}">Delete {{ admin.getLabel() }}</a>*/
/*     {% endif %}*/
/* </div>*/
/* */
