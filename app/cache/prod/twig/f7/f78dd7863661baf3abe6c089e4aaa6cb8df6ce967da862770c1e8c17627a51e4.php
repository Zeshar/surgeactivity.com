<?php

/* ZesharCRMGoalsBundle:CRUD:goal_report.html.twig */
class __TwigTemplate_64e4aef653940ff43710d84c35e94fdb6e2bda08cae1452e42b274d9bb9f6a60 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ZesharCRMCoreBundle::sonata_layout.html.twig", "ZesharCRMGoalsBundle:CRUD:goal_report.html.twig", 1);
        $this->blocks = array(
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'content' => array($this, 'block_content'),
            'table_header' => array($this, 'block_table_header'),
            'table_body' => array($this, 'block_table_body'),
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ZesharCRMCoreBundle::sonata_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_breadcrumb($context, array $blocks = array())
    {
        // line 4
        echo "    <li><a href=\"";
        echo $this->env->getExtension('routing')->getUrl("sonata_admin_dashboard");
        echo "\">";
        echo $this->env->getExtension('translator')->getTranslator()->trans("Dashboard", array(), "messages");
        echo "</a></li>
    <li class=\"active\">Sales Performance</li>
";
    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        // line 9
        echo "    ";
        echo twig_include($this->env, $context, "ZesharCRMGoalsBundle:CRUD:goal_report_js.html.twig");
        echo "

    <label class=\"goal-product-title\">Sales Performance</label>

    <div class=\"filter-wrap clearfix\">
        <div class=\"left-column\">
            <div class=\"\">
                <div class=\"pull-right filter-controls\">
                    <form method=\"get\" class=\"form-inline report-filter-form\" action=\"";
        // line 17
        echo $this->env->getExtension('routing')->getUrl($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method"));
        echo "\">
                        <div class=\"form-group\">
                            <input type=\"text\" name=\"date-range-from\" class=\"form-control datepicker\" id=\"date-range-from\" autocomplete=\"off\" placeholder=\"From\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["rangeFrom"]) ? $context["rangeFrom"] : null), "html", null, true);
        echo "\">
                        </div>
                        <div class=\"form-group\">
                            <input type=\"text\" name=\"date-range-to\" class=\"form-control datepicker\" id=\"date-range-to\" autocomplete=\"off\" placeholder=\"To\" value=\"";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["rangeTo"]) ? $context["rangeTo"] : null), "html", null, true);
        echo "\">
                        </div>
                        <div class=\"form-group\">
                            <button type=\"submit\" class=\"btn btn-green btn-list-search\">Search</button>
                            <input type=\"button\" class=\"btn btn-white btn-list-reset\" value=\"Reset Filters\">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class=\"goal-reports table-wrap ui-sortable\">
        <div class=\"box box-primary\">
            ";
        // line 36
        $context["firstUser"] = twig_first($this->env, $this->getAttribute((isset($context["result"]) ? $context["result"] : null), "users", array()));
        // line 37
        echo "            <table class=\"report-table table-sonata-list table-striped table table-bordered\">
                ";
        // line 38
        $this->displayBlock('table_header', $context, $blocks);
        // line 66
        echo "                ";
        $this->displayBlock('table_body', $context, $blocks);
        // line 141
        echo "            </table>
        </div>
    </div>

";
    }

    // line 38
    public function block_table_header($context, array $blocks = array())
    {
        // line 39
        echo "                <thead>
                <tr>
                    <th colspan=\"3\">SALES</th>
                    <th colspan=\"4\">PERFORMANCES</th>
                    ";
        // line 43
        if (((isset($context["filter"]) ? $context["filter"] : null) == false)) {
            // line 44
            echo "                        <th colspan=\"";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["firstUser"]) ? $context["firstUser"] : null), "summaryPercentPreMonths", array())), "html", null, true);
            echo "\">MONTHLY PERFORMANCE COMPARISONS</th>
                    ";
        }
        // line 46
        echo "
                </tr>
                <tr>
                    <th>User</th>
                    <th>Current Goals</th>
                    <th>Items Sold</th>
                    <th>Balance</th>
                    <th>Sales</th>
                    <th>Activity</th>
                    <th>Source</th>
                    ";
        // line 56
        if (((isset($context["filter"]) ? $context["filter"] : null) == false)) {
            // line 57
            echo "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_reverse_filter($this->env, $this->getAttribute((isset($context["firstUser"]) ? $context["firstUser"] : null), "summaryPercentPreMonths", array())));
            foreach ($context['_seq'] as $context["month"] => $context["prePercent"]) {
                // line 58
                echo "                            <th>
                                ";
                // line 59
                echo twig_escape_filter($this->env, $context["month"], "html", null, true);
                echo "
                            </th>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['month'], $context['prePercent'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 62
            echo "                    ";
        }
        // line 63
        echo "                </tr>
                </thead>
                ";
    }

    // line 66
    public function block_table_body($context, array $blocks = array())
    {
        // line 67
        echo "                <tbody>
                ";
        // line 68
        if ((isset($context["result"]) ? $context["result"] : null)) {
            // line 69
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["result"]) ? $context["result"] : null), "users", array()));
            foreach ($context['_seq'] as $context["user"] => $context["value"]) {
                // line 70
                echo "                        <tr data-user=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "id", array()), "html", null, true);
                echo "\" class=\"sonata-ba-view-container\">
                            <td>
                                <a class=\"report-username report-child\" data-child-type=\"product\" href=\"#\">";
                // line 72
                echo twig_escape_filter($this->env, $context["user"], "html", null, true);
                echo "</a>
                            </td>
                            <td>
                                ";
                // line 75
                echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "summaryItems", array()), "html", null, true);
                echo "
                            </td>
                            <td>
                                ";
                // line 78
                echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "summarySold", array()), "html", null, true);
                echo "
                            </td>
                            <td>
                                ";
                // line 81
                echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "summaryCurrentGoals", array()), "html", null, true);
                echo "
                            </td>
                            <td class=\"performance ";
                // line 83
                if (($this->getAttribute($context["value"], "summaryPerformance", array()) < 20)) {
                    echo "least";
                }
                if ((($this->getAttribute($context["value"], "summaryPerformance", array()) > 20) && ($this->getAttribute($context["value"], "summaryPerformance", array()) < 40))) {
                    echo "little";
                }
                if ((($this->getAttribute($context["value"], "summaryPerformance", array()) > 40) && ($this->getAttribute($context["value"], "summaryPerformance", array()) < 70))) {
                    echo "need_better";
                }
                if ((($this->getAttribute($context["value"], "summaryPerformance", array()) > 70) && ($this->getAttribute($context["value"], "summaryPerformance", array()) < 100))) {
                    echo "good";
                }
                if (($this->getAttribute($context["value"], "summaryPerformance", array()) > 100)) {
                    echo "very_good";
                }
                echo "\">
                                <label class=\"tile-type\">";
                // line 84
                echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "summaryPerformance", array()), "html", null, true);
                echo "% </label>
                            </td>
                            <td>
                                <a class=\"report-child\" data-child-type=\"campaign\" href=\"#\">";
                // line 87
                echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "summaryCampaignPercent", array()), "html", null, true);
                echo "%</a>
                            </td>
                            <td>
                                <a class=\"report-child\" data-child-type=\"source\" href=\"#\">";
                // line 90
                echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "summarySourcePercent", array()), "html", null, true);
                echo "%</a>
                            </td>

                            ";
                // line 93
                if (((isset($context["filter"]) ? $context["filter"] : null) == false)) {
                    // line 94
                    echo "                                ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_reverse_filter($this->env, $this->getAttribute($context["value"], "summaryPercentPreMonths", array())));
                    foreach ($context['_seq'] as $context["month"] => $context["prePercent"]) {
                        // line 95
                        echo "                                    <td>
                                        ";
                        // line 96
                        if (($this->getAttribute($context["value"], "summaryItems", array()) == 0)) {
                            // line 97
                            echo "                                            -
                                        ";
                        } else {
                            // line 99
                            echo "                                            ";
                            echo twig_escape_filter($this->env, twig_round((($context["prePercent"] / $this->getAttribute($context["value"], "summaryItems", array())) * 100), 2, "floor"), "html", null, true);
                            echo "%
                                        ";
                        }
                        // line 101
                        echo "
                                    </td>
                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['month'], $context['prePercent'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 104
                    echo "                            ";
                }
                // line 105
                echo "                        </tr>
                        <tr class=\"child-table\" style=\"display: none\">
                            ";
                // line 107
                $context["rows"] = (twig_length_filter($this->env, $this->getAttribute($context["value"], "summaryPercentPreMonths", array())) + 7);
                // line 108
                echo "                            <td colspan=\"";
                echo twig_escape_filter($this->env, (isset($context["rows"]) ? $context["rows"] : null), "html", null, true);
                echo "\">
                                ";
                // line 109
                echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("ZesharCRMGoalsBundle:GoalGlobalAdmin:childEntityTableGenerate", array("userId" => $this->getAttribute(                // line 110
$context["value"], "id", array()), "propertyTitle" => "leadSource", "entityTitle" => "Source")));
                // line 113
                echo "
                                ";
                // line 114
                echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("ZesharCRMGoalsBundle:GoalGlobalAdmin:childEntityTableGenerate", array("userId" => $this->getAttribute(                // line 115
$context["value"], "id", array()), "propertyTitle" => "leadCampaign", "entityTitle" => "Campaign")));
                // line 118
                echo "
                                ";
                // line 119
                echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("ZesharCRMGoalsBundle:GoalGlobalAdmin:childEntityTableGenerate", array("userId" => $this->getAttribute(                // line 120
$context["value"], "id", array()), "propertyTitle" => "leadCategory", "entityTitle" => "Product")));
                // line 123
                echo "
                                ";
                // line 125
                echo "
                            </td>
                            ";
                // line 128
                echo "                            ";
                // line 129
                echo "                                ";
                // line 130
                echo "
                                ";
                // line 132
                echo "                            ";
                // line 133
                echo "

                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['user'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 137
            echo "
                ";
        }
        // line 139
        echo "                </tbody>
                ";
    }

    // line 147
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 148
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" type=\"text/css\"  href=\"";
        // line 149
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/zesharcrmgoals/css/style.css"), "html", null, true);
        echo "\"  />
";
    }

    public function getTemplateName()
    {
        return "ZesharCRMGoalsBundle:CRUD:goal_report.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  342 => 149,  337 => 148,  334 => 147,  329 => 139,  325 => 137,  316 => 133,  314 => 132,  311 => 130,  309 => 129,  307 => 128,  303 => 125,  300 => 123,  298 => 120,  297 => 119,  294 => 118,  292 => 115,  291 => 114,  288 => 113,  286 => 110,  285 => 109,  280 => 108,  278 => 107,  274 => 105,  271 => 104,  263 => 101,  257 => 99,  253 => 97,  251 => 96,  248 => 95,  243 => 94,  241 => 93,  235 => 90,  229 => 87,  223 => 84,  205 => 83,  200 => 81,  194 => 78,  188 => 75,  182 => 72,  176 => 70,  171 => 69,  169 => 68,  166 => 67,  163 => 66,  157 => 63,  154 => 62,  145 => 59,  142 => 58,  137 => 57,  135 => 56,  123 => 46,  117 => 44,  115 => 43,  109 => 39,  106 => 38,  98 => 141,  95 => 66,  93 => 38,  90 => 37,  88 => 36,  71 => 22,  65 => 19,  60 => 17,  48 => 9,  45 => 8,  35 => 4,  32 => 3,  11 => 1,);
    }
}
/* {% extends 'ZesharCRMCoreBundle::sonata_layout.html.twig' %}*/
/* */
/* {% block breadcrumb %}*/
/*     <li><a href="{{ url('sonata_admin_dashboard') }}">{% trans %}Dashboard{% endtrans %}</a></li>*/
/*     <li class="active">Sales Performance</li>*/
/* {% endblock %}*/
/* */
/* {% block content %}*/
/*     {{ include('ZesharCRMGoalsBundle:CRUD:goal_report_js.html.twig') }}*/
/* */
/*     <label class="goal-product-title">Sales Performance</label>*/
/* */
/*     <div class="filter-wrap clearfix">*/
/*         <div class="left-column">*/
/*             <div class="">*/
/*                 <div class="pull-right filter-controls">*/
/*                     <form method="get" class="form-inline report-filter-form" action="{{ url(app.request.attributes.get('_route')) }}">*/
/*                         <div class="form-group">*/
/*                             <input type="text" name="date-range-from" class="form-control datepicker" id="date-range-from" autocomplete="off" placeholder="From" value="{{ rangeFrom }}">*/
/*                         </div>*/
/*                         <div class="form-group">*/
/*                             <input type="text" name="date-range-to" class="form-control datepicker" id="date-range-to" autocomplete="off" placeholder="To" value="{{ rangeTo }}">*/
/*                         </div>*/
/*                         <div class="form-group">*/
/*                             <button type="submit" class="btn btn-green btn-list-search">Search</button>*/
/*                             <input type="button" class="btn btn-white btn-list-reset" value="Reset Filters">*/
/*                         </div>*/
/*                     </form>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* */
/*     <div class="goal-reports table-wrap ui-sortable">*/
/*         <div class="box box-primary">*/
/*             {% set firstUser = result.users|first %}*/
/*             <table class="report-table table-sonata-list table-striped table table-bordered">*/
/*                 {% block table_header %}*/
/*                 <thead>*/
/*                 <tr>*/
/*                     <th colspan="3">SALES</th>*/
/*                     <th colspan="4">PERFORMANCES</th>*/
/*                     {% if filter == false %}*/
/*                         <th colspan="{{ firstUser.summaryPercentPreMonths|length }}">MONTHLY PERFORMANCE COMPARISONS</th>*/
/*                     {% endif %}*/
/* */
/*                 </tr>*/
/*                 <tr>*/
/*                     <th>User</th>*/
/*                     <th>Current Goals</th>*/
/*                     <th>Items Sold</th>*/
/*                     <th>Balance</th>*/
/*                     <th>Sales</th>*/
/*                     <th>Activity</th>*/
/*                     <th>Source</th>*/
/*                     {% if filter == false %}*/
/*                         {% for month, prePercent in firstUser.summaryPercentPreMonths|reverse %}*/
/*                             <th>*/
/*                                 {{ month }}*/
/*                             </th>*/
/*                         {% endfor %}*/
/*                     {% endif %}*/
/*                 </tr>*/
/*                 </thead>*/
/*                 {% endblock %}*/
/*                 {% block table_body %}*/
/*                 <tbody>*/
/*                 {% if result %}*/
/*                     {% for user, value in result.users %}*/
/*                         <tr data-user="{{ value.id }}" class="sonata-ba-view-container">*/
/*                             <td>*/
/*                                 <a class="report-username report-child" data-child-type="product" href="#">{{ user }}</a>*/
/*                             </td>*/
/*                             <td>*/
/*                                 {{ value.summaryItems }}*/
/*                             </td>*/
/*                             <td>*/
/*                                 {{ value.summarySold }}*/
/*                             </td>*/
/*                             <td>*/
/*                                 {{ value.summaryCurrentGoals }}*/
/*                             </td>*/
/*                             <td class="performance {% if value.summaryPerformance < 20 %}least{% endif %}{% if value.summaryPerformance > 20 and value.summaryPerformance < 40 %}little{% endif %}{% if value.summaryPerformance > 40 and value.summaryPerformance < 70 %}need_better{% endif %}{% if value.summaryPerformance > 70 and value.summaryPerformance < 100 %}good{% endif %}{% if value.summaryPerformance > 100 %}very_good{% endif %}">*/
/*                                 <label class="tile-type">{{ value.summaryPerformance }}% </label>*/
/*                             </td>*/
/*                             <td>*/
/*                                 <a class="report-child" data-child-type="campaign" href="#">{{ value.summaryCampaignPercent }}%</a>*/
/*                             </td>*/
/*                             <td>*/
/*                                 <a class="report-child" data-child-type="source" href="#">{{ value.summarySourcePercent }}%</a>*/
/*                             </td>*/
/* */
/*                             {% if filter == false %}*/
/*                                 {% for month, prePercent in value.summaryPercentPreMonths|reverse %}*/
/*                                     <td>*/
/*                                         {% if value.summaryItems == 0 %}*/
/*                                             -*/
/*                                         {% else %}*/
/*                                             {{ (prePercent/value.summaryItems * 100)|round(2, 'floor') }}%*/
/*                                         {% endif %}*/
/* */
/*                                     </td>*/
/*                                 {% endfor %}*/
/*                             {% endif %}*/
/*                         </tr>*/
/*                         <tr class="child-table" style="display: none">*/
/*                             {% set rows = value.summaryPercentPreMonths|length + 7 %}*/
/*                             <td colspan="{{ rows }}">*/
/*                                 {{ render(controller('ZesharCRMGoalsBundle:GoalGlobalAdmin:childEntityTableGenerate', {*/
/*                                     'userId': value.id,*/
/*                                     'propertyTitle': 'leadSource',*/
/*                                     'entityTitle': 'Source'*/
/*                                 })) }}*/
/*                                 {{ render(controller('ZesharCRMGoalsBundle:GoalGlobalAdmin:childEntityTableGenerate', {*/
/*                                     'userId': value.id,*/
/*                                     'propertyTitle': 'leadCampaign',*/
/*                                     'entityTitle': 'Campaign'*/
/*                                 })) }}*/
/*                                 {{ render(controller('ZesharCRMGoalsBundle:GoalGlobalAdmin:childEntityTableGenerate', {*/
/*                                 'userId': value.id,*/
/*                                 'propertyTitle': 'leadCategory',*/
/*                                 'entityTitle': 'Product'*/
/*                                 })) }}*/
/*                                 {#{% include('ZesharCRMGoalsBundle:CRUD:goal_report_product.html.twig') with {'result': result, 'filter': filter} %}#}*/
/* */
/*                             </td>*/
/*                             {#{% set rows = value.summaryPercentPreMonths|length + 7 %}#}*/
/*                             {#<td colspan="{{ rows }}">#}*/
/*                                 {#{% if value.products is defined %}#}*/
/* */
/*                                 {#{% endif %}#}*/
/*                             {#</td>#}*/
/* */
/* */
/*                         </tr>*/
/*                     {% endfor %}*/
/* */
/*                 {% endif %}*/
/*                 </tbody>*/
/*                 {% endblock %}*/
/*             </table>*/
/*         </div>*/
/*     </div>*/
/* */
/* {% endblock %}*/
/* */
/* {% block stylesheets %}*/
/*     {{ parent() }}*/
/*     <link rel="stylesheet" type="text/css"  href="{{ asset('bundles/zesharcrmgoals/css/style.css') }}"  />*/
/* {% endblock %}*/
