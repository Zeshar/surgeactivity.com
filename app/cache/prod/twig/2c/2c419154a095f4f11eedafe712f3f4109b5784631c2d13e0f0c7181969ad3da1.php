<?php

/* ZesharCRMCoreBundle:CRUD/DisplayPartial:lead_opportunity_show_top_actions.html.twig */
class __TwigTemplate_38eee922619e86b4ce35f1817ba634c5d7d7f1701295165062e9df09440af195 extends Twig_Template
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
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array(), "any", false, true), "get", array(0 => "leadCampaign"), "method", true, true)) {
            // line 2
            echo "    ";
            $context["leadCampaign"] = $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "get", array(0 => "leadCampaign"), "method");
        } else {
            // line 4
            echo "    ";
            $context["leadCampaign"] = "";
        }
        // line 6
        echo "
<div class=\"top-actions\" data-lead-id=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["object"]) ? $context["object"] : null), "getId", array(), "method"), "html", null, true);
        echo "\" data-lead-campaign=\"";
        echo twig_escape_filter($this->env, (isset($context["leadCampaign"]) ? $context["leadCampaign"] : null), "html", null, true);
        echo "\">
    ";
        // line 8
        if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "getLabel", array(), "method") == "Lead")) {
            // line 9
            echo "        <button class=\"btn btn-green-border double-quote transition-opportunity\" data-status=\"opportunity\" value=\"1\">Opportunity</button>
        <button class=\"btn btn-green-border double-quote transition-opportunity\" data-status=\"quote\" value=\"3\">Quote</button>
    ";
        }
        // line 12
        echo "    ";
        if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "getLabel", array(), "method") == "Opportunity")) {
            // line 13
            echo "        ";
            if (($this->getAttribute((isset($context["object"]) ? $context["object"] : null), "getStatus", array()) == 1)) {
                // line 14
                echo "            <button class=\"btn btn-green-border double-quote back transition-opportunity\" data-status=\"opportunity_to_lead\" value=\"3\">Lead</button>
            <button class=\"btn btn-green-border double-quote transition-opportunity\" data-status=\"opportunity_to_quote\" value=\"3\">Quote</button>
            <button class=\"btn btn-green-border double-quote transition-opportunity\" data-status=\"opportunity_to_sold\" value=\"5\">Sold</button>
        ";
            }
            // line 18
            echo "        ";
            if (($this->getAttribute((isset($context["object"]) ? $context["object"] : null), "getStatus", array()) == 3)) {
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
        if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "getLabel", array(), "method") == "Lead")) {
            // line 24
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "generateObjectUrl", array(0 => "delete", 1 => (isset($context["object"]) ? $context["object"] : null)), "method"), "html", null, true);
            echo "\">Delete ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "getLabel", array(), "method"), "html", null, true);
            echo "</a>
    ";
        }
        // line 26
        echo "</div>
";
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
        return array (  79 => 26,  71 => 24,  68 => 23,  65 => 22,  60 => 19,  57 => 18,  51 => 14,  48 => 13,  45 => 12,  40 => 9,  38 => 8,  32 => 7,  29 => 6,  25 => 4,  21 => 2,  19 => 1,);
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
