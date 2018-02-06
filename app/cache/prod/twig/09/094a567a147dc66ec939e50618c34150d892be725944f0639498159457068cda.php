<?php

/* ZesharCRMGoalsBundle:CRUD:goal_report_product.html.twig */
class __TwigTemplate_bf4d28fd2ec41dd8a1c1dfe1b4240c948d8abd8c8057f02af50763b04e954c60 extends Twig_Template
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
        echo "<table class=\"goal child-goal-report-table table-sonata-list table-striped table table-bordered product\" style=\"display: none\">
    <thead>
    <tr>
        <th class=\"cell-empty\" colspan=\"2\"></th>
        <th colspan=\"3\">LEAD STATUS</th>
        <th colspan=\"3\">PRIORITY</th>
        <th colspan=\"3\">MILESTONE</th>
        <th colspan=\"6\">PERFORMANCE</th>
    </tr>
    <tr>
        <th>Product</th>
        ";
        // line 13
        echo "        <th>Total Leads</th>
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
        ";
        // line 26
        echo "        ";
        // line 27
        echo "        ";
        // line 28
        echo "        ";
        // line 29
        echo "        ";
        // line 30
        echo "        ";
        // line 31
        echo "        ";
        // line 32
        echo "    </tr>
    </thead>
    <tbody>

    ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["value"]) ? $context["value"] : null), "products", array()));
        foreach ($context['_seq'] as $context["productTitle"] => $context["product"]) {
            // line 37
            echo "        ";
            $context["monthlyGoals"] = ($this->getAttribute($context["product"], "user_year_goal", array()) / 12);
            // line 38
            echo "        ";
            if (($this->getAttribute((isset($context["result"]) ? $context["result"] : null), "countDaysInMonth", array()) != 0)) {
                // line 39
                echo "            ";
                $context["currentGoals"] = (($this->getAttribute((isset($context["result"]) ? $context["result"] : null), "currentDay", array()) / $this->getAttribute((isset($context["result"]) ? $context["result"] : null), "countDaysInMonth", array())) * (isset($context["monthlyGoals"]) ? $context["monthlyGoals"] : null));
                // line 40
                echo "        ";
            } else {
                // line 41
                echo "            ";
                $context["currentGoals"] = 0;
                // line 42
                echo "        ";
            }
            // line 43
            echo "        ";
            if (((isset($context["currentGoals"]) ? $context["currentGoals"] : null) != 0)) {
                // line 44
                echo "            ";
                $context["performance"] = (($this->getAttribute($context["product"], "sold", array()) / (isset($context["currentGoals"]) ? $context["currentGoals"] : null)) * 100);
                // line 45
                echo "        ";
            } else {
                // line 46
                echo "            ";
                $context["performance"] = 0;
                // line 47
                echo "        ";
            }
            // line 48
            echo "
        <tr class=\"sonata-ba-view-container\">
            <td>
                ";
            // line 51
            echo twig_escape_filter($this->env, $context["productTitle"], "html", null, true);
            echo "
            </td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            ";
            // line 64
            echo "                ";
            // line 65
            echo "            ";
            // line 66
            echo "            <td>
                ";
            // line 67
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "sold", array()), "html", null, true);
            echo "
            </td>
            ";
            // line 70
            echo "                ";
            // line 71
            echo "            ";
            // line 72
            echo "            <td class=\"performance ";
            if (((isset($context["performance"]) ? $context["performance"] : null) < 20)) {
                echo "least";
            }
            if ((((isset($context["performance"]) ? $context["performance"] : null) > 20) && ((isset($context["performance"]) ? $context["performance"] : null) < 40))) {
                echo "little";
            }
            if ((((isset($context["performance"]) ? $context["performance"] : null) > 40) && ((isset($context["performance"]) ? $context["performance"] : null) < 70))) {
                echo "need_better";
            }
            if ((((isset($context["performance"]) ? $context["performance"] : null) > 70) && ((isset($context["performance"]) ? $context["performance"] : null) < 100))) {
                echo "good";
            }
            if (((isset($context["performance"]) ? $context["performance"] : null) > 100)) {
                echo "very_good";
            }
            echo " \">
                <label class=\"tile-type\"> ";
            // line 73
            echo twig_escape_filter($this->env, twig_round((isset($context["performance"]) ? $context["performance"] : null), 2, "floor"), "html", null, true);
            echo "% </label>
            </td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            ";
            // line 80
            echo "            ";
            // line 81
            echo "            ";
            // line 82
            echo "            ";
            // line 84
            echo "            ";
            // line 85
            echo "            ";
            // line 86
            echo "            ";
            // line 87
            echo "            ";
            // line 88
            echo "            ";
            // line 89
            echo "            ";
            // line 90
            echo "        </tr>

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['productTitle'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 93
        echo "
    </tbody>
</table>";
    }

    public function getTemplateName()
    {
        return "ZesharCRMGoalsBundle:CRUD:goal_report_product.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  191 => 93,  183 => 90,  181 => 89,  179 => 88,  177 => 87,  175 => 86,  173 => 85,  171 => 84,  169 => 82,  167 => 81,  165 => 80,  156 => 73,  137 => 72,  135 => 71,  133 => 70,  128 => 67,  125 => 66,  123 => 65,  121 => 64,  106 => 51,  101 => 48,  98 => 47,  95 => 46,  92 => 45,  89 => 44,  86 => 43,  83 => 42,  80 => 41,  77 => 40,  74 => 39,  71 => 38,  68 => 37,  64 => 36,  58 => 32,  56 => 31,  54 => 30,  52 => 29,  50 => 28,  48 => 27,  46 => 26,  32 => 13,  19 => 1,);
    }
}
/* <table class="goal child-goal-report-table table-sonata-list table-striped table table-bordered product" style="display: none">*/
/*     <thead>*/
/*     <tr>*/
/*         <th class="cell-empty" colspan="2"></th>*/
/*         <th colspan="3">LEAD STATUS</th>*/
/*         <th colspan="3">PRIORITY</th>*/
/*         <th colspan="3">MILESTONE</th>*/
/*         <th colspan="6">PERFORMANCE</th>*/
/*     </tr>*/
/*     <tr>*/
/*         <th>Product</th>*/
/*         {#<th>Monthly Goals</th>#}*/
/*         <th>Total Leads</th>*/
/*         <th>Cold</th>*/
/*         <th>Warm</th>*/
/*         <th>Hot</th>*/
/*         <th>Low</th>*/
/*         <th>Medium</th>*/
/*         <th>High</th>*/
/*         <th>Leads</th>*/
/*         <th>Opportunities</th>*/
/*         <th>Quotes</th>*/
/*         <th colspan="3">Sold</th>*/
/*         <th colspan="3">Lost</th>*/
/*         {#{% if filter == false %}#}*/
/*         {#{% for month, prePercent in value.summaryPercentPreMonths|reverse %}#}*/
/*         {#<th>#}*/
/*         {#{{ month }}#}*/
/*         {#</th>#}*/
/*         {#{% endfor %}#}*/
/*         {#{% endif %}#}*/
/*     </tr>*/
/*     </thead>*/
/*     <tbody>*/
/* */
/*     {% for productTitle, product in value.products %}*/
/*         {% set monthlyGoals = product.user_year_goal/12 %}*/
/*         {% if result.countDaysInMonth != 0 %}*/
/*             {% set currentGoals = result.currentDay / result.countDaysInMonth * monthlyGoals %}*/
/*         {% else %}*/
/*             {% set currentGoals = 0 %}*/
/*         {% endif %}*/
/*         {% if currentGoals != 0 %}*/
/*             {% set performance = product.sold / currentGoals * 100 %}*/
/*         {% else %}*/
/*             {% set performance = 0 %}*/
/*         {% endif %}*/
/* */
/*         <tr class="sonata-ba-view-container">*/
/*             <td>*/
/*                 {{ productTitle }}*/
/*             </td>*/
/*             <td></td>*/
/*             <td></td>*/
/*             <td></td>*/
/*             <td></td>*/
/*             <td></td>*/
/*             <td></td>*/
/*             <td></td>*/
/*             <td></td>*/
/*             <td></td>*/
/*             <td></td>*/
/*             {#<td>#}*/
/*                 {#{{ monthlyGoals|round(2) }}#}*/
/*             {#</td>#}*/
/*             <td>*/
/*                 {{ product.sold }}*/
/*             </td>*/
/*             {#<td>#}*/
/*                 {#{{ currentGoals|round(2, 'floor') }}#}*/
/*             {#</td>#}*/
/*             <td class="performance {% if performance < 20 %}least{% endif %}{% if performance > 20 and performance < 40 %}little{% endif %}{% if performance > 40 and performance < 70 %}need_better{% endif %}{% if performance > 70 and performance < 100 %}good{% endif %}{% if performance > 100 %}very_good{% endif %} ">*/
/*                 <label class="tile-type"> {{ performance|round(2, 'floor') }}% </label>*/
/*             </td>*/
/*             <td></td>*/
/*             <td></td>*/
/*             <td></td>*/
/*             <td></td>*/
/*             {#{% if filter == false %}#}*/
/*             {#{% for month, prePercent in product.percentPreMonths|reverse %}#}*/
/*             {#<td>#}*/
/*             {#{% if monthlyGoals == 0 %}#}*/
/*             {#-#}*/
/*             {#{% else %}#}*/
/*             {#{{ (prePercent / monthlyGoals * 100)|round(2, 'floor') }}%#}*/
/*             {#{% endif %}#}*/
/*             {#</td>#}*/
/*             {#{% endfor %}#}*/
/*             {#{% endif %}#}*/
/*         </tr>*/
/* */
/*     {% endfor %}*/
/* */
/*     </tbody>*/
/* </table>*/
