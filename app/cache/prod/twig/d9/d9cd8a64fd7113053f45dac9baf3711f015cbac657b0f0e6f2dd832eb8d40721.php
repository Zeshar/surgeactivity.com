<?php

/* ZesharCRMGoalsBundle:CRUD:goal_report_child_table.html.twig */
class __TwigTemplate_15144c3f54e239b76d266970d69da654f38ed054070c3690c8d13bb542ef574d extends Twig_Template
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
        echo "<table class=\"goal child-goal-report-table table-sonata-list table-striped table table-bordered ";
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, (isset($context["entityTitle"]) ? $context["entityTitle"] : null)), "html", null, true);
        echo "\" style=\"display: none\">
    <thead>
        <tr>
            <th class=\"cell-empty\" colspan=\"2\"></th>
            <th colspan=\"3\">LEAD STATUS</th>
            <th colspan=\"3\">PRIORITY</th>
            <th colspan=\"3\">MILESTONE</th>
            <th colspan=\"6\">PERFORMANCE</th>
        </tr>
        <tr>
            <th>";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["entityTitle"]) ? $context["entityTitle"] : null), "html", null, true);
        echo "</th>
            <th>Total Leads</th>
            <th>Cold</th>
            <th>Warm</th>
            <th>Hot</th>
            <th>Low</th>
            <th>Medium</th>
            <th>High</th>
            <th>Leads</th>
            <th>Opportunities</th>
            <th>Quotes</th>
            <th colspan=\"3\">Sold</th>
            <th colspan=\"3\">Lost</th>
        </tr>
    </thead>
    <tbody>

    ";
        // line 28
        $context["summaryTotalLeads"] = 0;
        // line 29
        echo "    ";
        $context["summarySold"] = 0;
        // line 30
        echo "    ";
        $context["summarySoldPercent"] = 0;
        // line 31
        echo "    ";
        $context["summaryLead"] = 0;
        // line 32
        echo "    ";
        $context["summaryLost"] = 0;
        // line 33
        echo "    ";
        $context["summaryLostPercent"] = 0;
        // line 34
        echo "    ";
        $context["summaryQuote"] = 0;
        // line 35
        echo "    ";
        $context["summaryOpportunity"] = 0;
        // line 36
        echo "    ";
        $context["summaryLeadCold"] = 0;
        // line 37
        echo "    ";
        $context["summaryLeadWarm"] = 0;
        // line 38
        echo "    ";
        $context["summaryLeadHot"] = 0;
        // line 39
        echo "    ";
        $context["summaryPriorityLow"] = 0;
        // line 40
        echo "    ";
        $context["summaryPriorityMedium"] = 0;
        // line 41
        echo "    ";
        $context["summaryPriorityHigh"] = 0;
        // line 42
        echo "    ";
        $context["summaryQuotedAmount"] = 0;
        // line 43
        echo "    ";
        $context["summaryLostQuotedAmount"] = 0;
        // line 44
        echo "
    ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "entity", array()));
        foreach ($context['_seq'] as $context["entityElementTitle"] => $context["entity"]) {
            // line 46
            echo "
        ";
            // line 47
            $context["totalLeads"] = (($this->getAttribute($context["entity"], "lead", array()) + $this->getAttribute($context["entity"], "opportunity", array())) + $this->getAttribute($context["entity"], "quote", array()));
            // line 48
            echo "        ";
            $context["summaryTotalLeads"] = ((isset($context["summaryTotalLeads"]) ? $context["summaryTotalLeads"] : null) + (isset($context["totalLeads"]) ? $context["totalLeads"] : null));
            // line 49
            echo "        ";
            $context["summarySold"] = ((isset($context["summarySold"]) ? $context["summarySold"] : null) + $this->getAttribute($context["entity"], "sold", array()));
            // line 50
            echo "        ";
            $context["summaryLead"] = ((isset($context["summaryLead"]) ? $context["summaryLead"] : null) + $this->getAttribute($context["entity"], "lead", array()));
            // line 51
            echo "        ";
            $context["summaryLost"] = ((isset($context["summaryLost"]) ? $context["summaryLost"] : null) + $this->getAttribute($context["entity"], "lost", array()));
            // line 52
            echo "        ";
            $context["summaryOpportunity"] = ((isset($context["summaryOpportunity"]) ? $context["summaryOpportunity"] : null) + $this->getAttribute($context["entity"], "opportunity", array()));
            // line 53
            echo "        ";
            $context["summaryQuote"] = ((isset($context["summaryQuote"]) ? $context["summaryQuote"] : null) + $this->getAttribute($context["entity"], "quote", array()));
            // line 54
            echo "        ";
            $context["summaryLeadCold"] = ((isset($context["summaryLeadCold"]) ? $context["summaryLeadCold"] : null) + $this->getAttribute($context["entity"], "leadCold", array()));
            // line 55
            echo "        ";
            $context["summaryLeadWarm"] = ((isset($context["summaryLeadWarm"]) ? $context["summaryLeadWarm"] : null) + $this->getAttribute($context["entity"], "leadWarm", array()));
            // line 56
            echo "        ";
            $context["summaryLeadHot"] = ((isset($context["summaryLeadHot"]) ? $context["summaryLeadHot"] : null) + $this->getAttribute($context["entity"], "leadHot", array()));
            // line 57
            echo "        ";
            $context["summaryPriorityLow"] = ((isset($context["summaryPriorityLow"]) ? $context["summaryPriorityLow"] : null) + $this->getAttribute($context["entity"], "priorityLow", array()));
            // line 58
            echo "        ";
            $context["summaryPriorityMedium"] = ((isset($context["summaryPriorityMedium"]) ? $context["summaryPriorityMedium"] : null) + $this->getAttribute($context["entity"], "priorityMedium", array()));
            // line 59
            echo "        ";
            $context["summaryPriorityHigh"] = ((isset($context["summaryPriorityHigh"]) ? $context["summaryPriorityHigh"] : null) + $this->getAttribute($context["entity"], "priorityHigh", array()));
            // line 60
            echo "        ";
            $context["summaryQuotedAmount"] = ((isset($context["summaryQuotedAmount"]) ? $context["summaryQuotedAmount"] : null) + $this->getAttribute($context["entity"], "quotedAmount", array()));
            // line 61
            echo "        ";
            $context["summaryLostQuotedAmount"] = ((isset($context["summaryLostQuotedAmount"]) ? $context["summaryLostQuotedAmount"] : null) + $this->getAttribute($context["entity"], "lostQuotedAmount", array()));
            // line 62
            echo "

        ";
            // line 64
            if (((isset($context["summarySold"]) ? $context["summarySold"] : null) != 0)) {
                // line 65
                echo "            ";
                $context["percrntSold"] = (($this->getAttribute($context["entity"], "sold", array()) / (isset($context["summarySold"]) ? $context["summarySold"] : null)) * 100);
                // line 66
                echo "        ";
            } else {
                // line 67
                echo "            ";
                $context["percrntSold"] = 0;
                // line 68
                echo "        ";
            }
            // line 69
            echo "
        ";
            // line 70
            if (((isset($context["summaryLost"]) ? $context["summaryLost"] : null) != 0)) {
                // line 71
                echo "            ";
                $context["percrntLost"] = (($this->getAttribute($context["entity"], "lost", array()) / (isset($context["summaryLost"]) ? $context["summaryLost"] : null)) * 100);
                // line 72
                echo "        ";
            } else {
                // line 73
                echo "            ";
                $context["percrntLost"] = 0;
                // line 74
                echo "        ";
            }
            // line 75
            echo "
        ";
            // line 76
            $context["summarySoldPercent"] = ((isset($context["summarySoldPercent"]) ? $context["summarySoldPercent"] : null) + (isset($context["percrntSold"]) ? $context["percrntSold"] : null));
            // line 77
            echo "        ";
            $context["summaryLostPercent"] = ((isset($context["summaryLostPercent"]) ? $context["summaryLostPercent"] : null) + (isset($context["percrntLost"]) ? $context["percrntLost"] : null));
            // line 78
            echo "
        <tr class=\"sonata-ba-view-container\">
            <td>";
            // line 80
            echo twig_escape_filter($this->env, $context["entityElementTitle"], "html", null, true);
            echo "</td>
            <td>";
            // line 81
            echo twig_escape_filter($this->env, (isset($context["totalLeads"]) ? $context["totalLeads"] : null), "html", null, true);
            echo "</td>
            <td>";
            // line 82
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "leadCold", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 83
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "leadWarm", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 84
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "leadHot", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 85
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "priorityLow", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 86
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "priorityMedium", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 87
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "priorityHigh", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 88
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "lead", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 89
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "opportunity", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 90
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "quote", array()), "html", null, true);
            echo "</td>
            <td>
                ";
            // line 92
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "sold", array()), "html", null, true);
            echo "
            </td>
            <td>
                ";
            // line 95
            echo twig_escape_filter($this->env, twig_round((isset($context["percrntSold"]) ? $context["percrntSold"] : null), 2, "floor"), "html", null, true);
            echo "%
            </td>
            <td>
                ";
            // line 98
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "quotedAmount", array()), "html", null, true);
            echo "\$
            </td>
            <td>
                ";
            // line 101
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "lost", array()), "html", null, true);
            echo "
            </td>
            <td>
                ";
            // line 104
            echo twig_escape_filter($this->env, twig_round((isset($context["percrntLost"]) ? $context["percrntLost"] : null), 2, "floor"), "html", null, true);
            echo "%
            </td>
            <td>
                ";
            // line 107
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "lostQuotedAmount", array()), "html", null, true);
            echo "\$
            </td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['entityElementTitle'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 111
        echo "    <tr class=\"sonata-ba-view-container\">
        <td class=\"total-td\">TOTAL</td>
        <td>";
        // line 113
        echo twig_escape_filter($this->env, (isset($context["summaryTotalLeads"]) ? $context["summaryTotalLeads"] : null), "html", null, true);
        echo "</td>
        <td>";
        // line 114
        echo twig_escape_filter($this->env, (isset($context["summaryLeadCold"]) ? $context["summaryLeadCold"] : null), "html", null, true);
        echo "</td>
        <td>";
        // line 115
        echo twig_escape_filter($this->env, (isset($context["summaryLeadWarm"]) ? $context["summaryLeadWarm"] : null), "html", null, true);
        echo "</td>
        <td>";
        // line 116
        echo twig_escape_filter($this->env, (isset($context["summaryLeadHot"]) ? $context["summaryLeadHot"] : null), "html", null, true);
        echo "</td>
        <td>";
        // line 117
        echo twig_escape_filter($this->env, (isset($context["summaryPriorityLow"]) ? $context["summaryPriorityLow"] : null), "html", null, true);
        echo "</td>
        <td>";
        // line 118
        echo twig_escape_filter($this->env, (isset($context["summaryPriorityMedium"]) ? $context["summaryPriorityMedium"] : null), "html", null, true);
        echo "</td>
        <td>";
        // line 119
        echo twig_escape_filter($this->env, (isset($context["summaryPriorityHigh"]) ? $context["summaryPriorityHigh"] : null), "html", null, true);
        echo "</td>
        <td>";
        // line 120
        echo twig_escape_filter($this->env, (isset($context["summaryLead"]) ? $context["summaryLead"] : null), "html", null, true);
        echo "</td>
        <td>";
        // line 121
        echo twig_escape_filter($this->env, (isset($context["summaryOpportunity"]) ? $context["summaryOpportunity"] : null), "html", null, true);
        echo "</td>
        <td>";
        // line 122
        echo twig_escape_filter($this->env, (isset($context["summaryQuote"]) ? $context["summaryQuote"] : null), "html", null, true);
        echo "</td>
        <td>";
        // line 123
        echo twig_escape_filter($this->env, (isset($context["summarySold"]) ? $context["summarySold"] : null), "html", null, true);
        echo "</td>
        <td>";
        // line 124
        echo twig_escape_filter($this->env, (isset($context["summarySoldPercent"]) ? $context["summarySoldPercent"] : null), "html", null, true);
        echo "%</td>
        <td>";
        // line 125
        echo twig_escape_filter($this->env, (isset($context["summaryQuotedAmount"]) ? $context["summaryQuotedAmount"] : null), "html", null, true);
        echo "\$</td>
        <td>";
        // line 126
        echo twig_escape_filter($this->env, (isset($context["summaryLost"]) ? $context["summaryLost"] : null), "html", null, true);
        echo "</td>
        <td>";
        // line 127
        echo twig_escape_filter($this->env, (isset($context["summaryLostPercent"]) ? $context["summaryLostPercent"] : null), "html", null, true);
        echo "%</td>
        <td>";
        // line 128
        echo twig_escape_filter($this->env, (isset($context["summaryLostQuotedAmount"]) ? $context["summaryLostQuotedAmount"] : null), "html", null, true);
        echo "\$</td>
    </tr>
    </tbody>
</table>";
    }

    public function getTemplateName()
    {
        return "ZesharCRMGoalsBundle:CRUD:goal_report_child_table.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  350 => 128,  346 => 127,  342 => 126,  338 => 125,  334 => 124,  330 => 123,  326 => 122,  322 => 121,  318 => 120,  314 => 119,  310 => 118,  306 => 117,  302 => 116,  298 => 115,  294 => 114,  290 => 113,  286 => 111,  276 => 107,  270 => 104,  264 => 101,  258 => 98,  252 => 95,  246 => 92,  241 => 90,  237 => 89,  233 => 88,  229 => 87,  225 => 86,  221 => 85,  217 => 84,  213 => 83,  209 => 82,  205 => 81,  201 => 80,  197 => 78,  194 => 77,  192 => 76,  189 => 75,  186 => 74,  183 => 73,  180 => 72,  177 => 71,  175 => 70,  172 => 69,  169 => 68,  166 => 67,  163 => 66,  160 => 65,  158 => 64,  154 => 62,  151 => 61,  148 => 60,  145 => 59,  142 => 58,  139 => 57,  136 => 56,  133 => 55,  130 => 54,  127 => 53,  124 => 52,  121 => 51,  118 => 50,  115 => 49,  112 => 48,  110 => 47,  107 => 46,  103 => 45,  100 => 44,  97 => 43,  94 => 42,  91 => 41,  88 => 40,  85 => 39,  82 => 38,  79 => 37,  76 => 36,  73 => 35,  70 => 34,  67 => 33,  64 => 32,  61 => 31,  58 => 30,  55 => 29,  53 => 28,  33 => 11,  19 => 1,);
    }
}
/* <table class="goal child-goal-report-table table-sonata-list table-striped table table-bordered {{ entityTitle|lower }}" style="display: none">*/
/*     <thead>*/
/*         <tr>*/
/*             <th class="cell-empty" colspan="2"></th>*/
/*             <th colspan="3">LEAD STATUS</th>*/
/*             <th colspan="3">PRIORITY</th>*/
/*             <th colspan="3">MILESTONE</th>*/
/*             <th colspan="6">PERFORMANCE</th>*/
/*         </tr>*/
/*         <tr>*/
/*             <th>{{ entityTitle }}</th>*/
/*             <th>Total Leads</th>*/
/*             <th>Cold</th>*/
/*             <th>Warm</th>*/
/*             <th>Hot</th>*/
/*             <th>Low</th>*/
/*             <th>Medium</th>*/
/*             <th>High</th>*/
/*             <th>Leads</th>*/
/*             <th>Opportunities</th>*/
/*             <th>Quotes</th>*/
/*             <th colspan="3">Sold</th>*/
/*             <th colspan="3">Lost</th>*/
/*         </tr>*/
/*     </thead>*/
/*     <tbody>*/
/* */
/*     {% set summaryTotalLeads = 0 %}*/
/*     {% set summarySold = 0 %}*/
/*     {% set summarySoldPercent = 0 %}*/
/*     {% set summaryLead = 0 %}*/
/*     {% set summaryLost = 0 %}*/
/*     {% set summaryLostPercent = 0 %}*/
/*     {% set summaryQuote = 0 %}*/
/*     {% set summaryOpportunity = 0 %}*/
/*     {% set summaryLeadCold = 0 %}*/
/*     {% set summaryLeadWarm = 0 %}*/
/*     {% set summaryLeadHot = 0 %}*/
/*     {% set summaryPriorityLow = 0 %}*/
/*     {% set summaryPriorityMedium = 0 %}*/
/*     {% set summaryPriorityHigh = 0 %}*/
/*     {% set summaryQuotedAmount = 0 %}*/
/*     {% set summaryLostQuotedAmount = 0 %}*/
/* */
/*     {% for entityElementTitle, entity in data.entity %}*/
/* */
/*         {% set totalLeads = entity.lead + entity.opportunity + entity.quote %}*/
/*         {% set summaryTotalLeads = summaryTotalLeads + totalLeads %}*/
/*         {% set summarySold = summarySold + entity.sold %}*/
/*         {% set summaryLead = summaryLead + entity.lead %}*/
/*         {% set summaryLost = summaryLost + entity.lost %}*/
/*         {% set summaryOpportunity = summaryOpportunity + entity.opportunity %}*/
/*         {% set summaryQuote = summaryQuote + entity.quote %}*/
/*         {% set summaryLeadCold = summaryLeadCold + entity.leadCold %}*/
/*         {% set summaryLeadWarm = summaryLeadWarm + entity.leadWarm %}*/
/*         {% set summaryLeadHot = summaryLeadHot + entity.leadHot %}*/
/*         {% set summaryPriorityLow = summaryPriorityLow + entity.priorityLow %}*/
/*         {% set summaryPriorityMedium = summaryPriorityMedium + entity.priorityMedium %}*/
/*         {% set summaryPriorityHigh = summaryPriorityHigh + entity.priorityHigh %}*/
/*         {% set summaryQuotedAmount = summaryQuotedAmount + entity.quotedAmount %}*/
/*         {% set summaryLostQuotedAmount = summaryLostQuotedAmount + entity.lostQuotedAmount %}*/
/* */
/* */
/*         {% if summarySold != 0 %}*/
/*             {% set percrntSold =  entity.sold / summarySold * 100 %}*/
/*         {% else %}*/
/*             {% set percrntSold = 0 %}*/
/*         {% endif %}*/
/* */
/*         {% if summaryLost != 0 %}*/
/*             {% set percrntLost =  entity.lost / summaryLost * 100 %}*/
/*         {% else %}*/
/*             {% set percrntLost = 0 %}*/
/*         {% endif %}*/
/* */
/*         {% set summarySoldPercent = summarySoldPercent + percrntSold %}*/
/*         {% set summaryLostPercent = summaryLostPercent + percrntLost %}*/
/* */
/*         <tr class="sonata-ba-view-container">*/
/*             <td>{{ entityElementTitle }}</td>*/
/*             <td>{{ totalLeads }}</td>*/
/*             <td>{{ entity.leadCold }}</td>*/
/*             <td>{{ entity.leadWarm }}</td>*/
/*             <td>{{ entity.leadHot }}</td>*/
/*             <td>{{ entity.priorityLow }}</td>*/
/*             <td>{{ entity.priorityMedium }}</td>*/
/*             <td>{{ entity.priorityHigh }}</td>*/
/*             <td>{{ entity.lead }}</td>*/
/*             <td>{{ entity.opportunity }}</td>*/
/*             <td>{{ entity.quote }}</td>*/
/*             <td>*/
/*                 {{ entity.sold }}*/
/*             </td>*/
/*             <td>*/
/*                 {{ percrntSold|round(2, 'floor') }}%*/
/*             </td>*/
/*             <td>*/
/*                 {{ entity.quotedAmount }}$*/
/*             </td>*/
/*             <td>*/
/*                 {{ entity.lost }}*/
/*             </td>*/
/*             <td>*/
/*                 {{ percrntLost|round(2, 'floor') }}%*/
/*             </td>*/
/*             <td>*/
/*                 {{ entity.lostQuotedAmount }}$*/
/*             </td>*/
/*         </tr>*/
/*     {% endfor %}*/
/*     <tr class="sonata-ba-view-container">*/
/*         <td class="total-td">TOTAL</td>*/
/*         <td>{{ summaryTotalLeads }}</td>*/
/*         <td>{{ summaryLeadCold }}</td>*/
/*         <td>{{ summaryLeadWarm }}</td>*/
/*         <td>{{ summaryLeadHot }}</td>*/
/*         <td>{{ summaryPriorityLow }}</td>*/
/*         <td>{{ summaryPriorityMedium }}</td>*/
/*         <td>{{ summaryPriorityHigh }}</td>*/
/*         <td>{{ summaryLead }}</td>*/
/*         <td>{{ summaryOpportunity }}</td>*/
/*         <td>{{ summaryQuote }}</td>*/
/*         <td>{{ summarySold }}</td>*/
/*         <td>{{ summarySoldPercent }}%</td>*/
/*         <td>{{ summaryQuotedAmount }}$</td>*/
/*         <td>{{ summaryLost }}</td>*/
/*         <td>{{ summaryLostPercent }}%</td>*/
/*         <td>{{ summaryLostQuotedAmount }}$</td>*/
/*     </tr>*/
/*     </tbody>*/
/* </table>*/
