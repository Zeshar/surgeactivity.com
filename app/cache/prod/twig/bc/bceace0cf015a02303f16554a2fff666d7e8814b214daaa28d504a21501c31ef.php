<?php

/* ZesharCRMGoalsBundle:CRUD:goal_list.html.twig */
class __TwigTemplate_56027837f5ad967a135cd571040dbbc4850c7612a52085a10f5348f06cbc8b87 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ZesharCRMCoreBundle::sonata_layout.html.twig", "ZesharCRMGoalsBundle:CRUD:goal_list.html.twig", 1);
        $this->blocks = array(
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'content' => array($this, 'block_content'),
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
    <li class=\"active\">Goal Page</li>
";
    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        // line 9
        echo "    ";
        echo twig_include($this->env, $context, "ZesharCRMGoalsBundle:CRUD:goal_list_js.html.twig");
        echo "
    <div class=\"goal-table-wrap table-wrap ui-sortable\">
        <div class=\"box box-primary\">
            <table class=\"report-table table-sonata-list table-striped table table-bordered\">
                <thead>
                <tr>
                    <th colspan=\"4\">
                        Portfolio
                    </th>
                    <th colspan=\"4\">
                        New Targets
                    </th>
                </tr>
                <tr>
                    <th>Item</th>
                    <th>Points</th>
                    <th>Items in Force</th>
                    <th>Total Points</th>
                    <th>Growth Desired</th>
                    <th>Target Items</th>
                    <th>Total Points</th>
                </tr>
                </thead>
                <tbody>
                ";
        // line 33
        if ((isset($context["result"]) ? $context["result"] : null)) {
            // line 34
            echo "                    ";
            $context["globalPoints"] = 0;
            // line 35
            echo "                    ";
            $context["globalPrev"] = 0;
            // line 36
            echo "                    ";
            $context["globalPrevTotal"] = 0;
            // line 37
            echo "                    ";
            $context["globalPercent"] = 0;
            // line 38
            echo "                    ";
            $context["globalEstimated"] = 0;
            // line 39
            echo "                    ";
            $context["globalPostTotal"] = 0;
            // line 40
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["result"]) ? $context["result"] : null));
            foreach ($context['_seq'] as $context["key"] => $context["item"]) {
                // line 41
                echo "                        ";
                $context["globalPoints"] = ((isset($context["globalPoints"]) ? $context["globalPoints"] : null) + $this->getAttribute($context["item"], "points", array()));
                // line 42
                echo "                        ";
                $context["globalPrev"] = ((isset($context["globalPrev"]) ? $context["globalPrev"] : null) + $this->getAttribute($context["item"], "prev", array()));
                // line 43
                echo "                        ";
                $context["globalPrevTotal"] = ((isset($context["globalPrevTotal"]) ? $context["globalPrevTotal"] : null) + ($this->getAttribute($context["item"], "prev", array()) * $this->getAttribute($context["item"], "points", array())));
                // line 44
                echo "                        ";
                $context["globalEstimated"] = ((isset($context["globalEstimated"]) ? $context["globalEstimated"] : null) + $this->getAttribute($context["item"], "estimated", array()));
                // line 45
                echo "                        ";
                $context["globalPostTotal"] = ((isset($context["globalPostTotal"]) ? $context["globalPostTotal"] : null) + ($this->getAttribute($context["item"], "estimated", array()) * $this->getAttribute($context["item"], "points", array())));
                // line 46
                echo "
                        <tr class=\"sonata-ba-view-container\" data-product-id=\"";
                // line 47
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "productId", array()), "html", null, true);
                echo "\">
                            <td>
                                <a href=\"";
                // line 49
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("zeshar_crm_goal_users", array("id" => $this->getAttribute($context["item"], "productId", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "</a>
                            </td>
                            <td class=\"goal-points\">
                                ";
                // line 52
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "points", array()), "html", null, true);
                echo "
                            </td>
                            <td class=\"goal-prev goal-editable editable-on-text\" data-field-name='prev'>
                                ";
                // line 55
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "prev", array()), "html", null, true);
                echo "
                            </td>
                            <td class=\"goal-prev-total\">
                                ";
                // line 58
                echo twig_escape_filter($this->env, ($this->getAttribute($context["item"], "prev", array()) * $this->getAttribute($context["item"], "points", array())), "html", null, true);
                echo "
                            </td>
                            <td class=\"goal-percent goal-editable\" data-field-name='percent' >
                               <input type=\"number\" class=\"goal-text-edit edit-field percent\" value=\"";
                // line 61
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "percent", array()), "html", null, true);
                echo "\" /> %
                            </td>
                            <td class=\"goal-post\">
                                ";
                // line 64
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "estimated", array()), "html", null, true);
                echo "
                            </td>
                            <td class=\"goal-post-total\">
                                ";
                // line 67
                echo twig_escape_filter($this->env, ($this->getAttribute($context["item"], "estimated", array()) * $this->getAttribute($context["item"], "points", array())), "html", null, true);
                echo "
                            </td>
                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 71
            echo "                    ";
            if (((isset($context["globalPrev"]) ? $context["globalPrev"] : null) != 0)) {
                // line 72
                echo "                        ";
                $context["globalPercent"] = ((((isset($context["globalEstimated"]) ? $context["globalEstimated"] : null) - (isset($context["globalPrev"]) ? $context["globalPrev"] : null)) / (isset($context["globalPrev"]) ? $context["globalPrev"] : null)) * 100);
                // line 73
                echo "                    ";
            } else {
                // line 74
                echo "                        ";
                $context["globalPercent"] = 0;
                // line 75
                echo "                    ";
            }
            // line 76
            echo "                    <tr class=\"total-amount last\">
                        <td class=\"td-title\">Totals:</td>
                        ";
            // line 79
            echo "                        <td></td>
                        <td class=\"goal-global-prev\">";
            // line 80
            echo twig_escape_filter($this->env, (isset($context["globalPrev"]) ? $context["globalPrev"] : null), "html", null, true);
            echo "</td>
                        <td class=\"goal-global-prev-total\">";
            // line 81
            echo twig_escape_filter($this->env, (isset($context["globalPrevTotal"]) ? $context["globalPrevTotal"] : null), "html", null, true);
            echo "</td>
                        <td class=\"goal-global-percent\">";
            // line 82
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["globalPercent"]) ? $context["globalPercent"] : null), 2), "html", null, true);
            echo "%</td>
                        <td class=\"goal-global-estimated\">";
            // line 83
            echo twig_escape_filter($this->env, (isset($context["globalEstimated"]) ? $context["globalEstimated"] : null), "html", null, true);
            echo "</td>
                        <td class=\"goal-global-post-total\">";
            // line 84
            echo twig_escape_filter($this->env, (isset($context["globalPostTotal"]) ? $context["globalPostTotal"] : null), "html", null, true);
            echo "</td>
                    </tr>
                ";
        }
        // line 87
        echo "                </tbody>
            </table>
        </div>
    </div>

    <div class=\"goal-block-action\">
        <button class=\"goal-action-save btn-green btn\">Save</button>
    </div>

";
    }

    // line 104
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 105
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" type=\"text/css\"  href=\"";
        // line 106
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/zesharcrmgoals/css/style.css"), "html", null, true);
        echo "\"  />
";
    }

    public function getTemplateName()
    {
        return "ZesharCRMGoalsBundle:CRUD:goal_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  235 => 106,  230 => 105,  227 => 104,  214 => 87,  208 => 84,  204 => 83,  200 => 82,  196 => 81,  192 => 80,  189 => 79,  185 => 76,  182 => 75,  179 => 74,  176 => 73,  173 => 72,  170 => 71,  160 => 67,  154 => 64,  148 => 61,  142 => 58,  136 => 55,  130 => 52,  122 => 49,  117 => 47,  114 => 46,  111 => 45,  108 => 44,  105 => 43,  102 => 42,  99 => 41,  94 => 40,  91 => 39,  88 => 38,  85 => 37,  82 => 36,  79 => 35,  76 => 34,  74 => 33,  46 => 9,  43 => 8,  33 => 4,  30 => 3,  11 => 1,);
    }
}
/* {% extends 'ZesharCRMCoreBundle::sonata_layout.html.twig' %}*/
/* */
/* {% block breadcrumb %}*/
/*     <li><a href="{{ url('sonata_admin_dashboard') }}">{% trans %}Dashboard{% endtrans %}</a></li>*/
/*     <li class="active">Goal Page</li>*/
/* {% endblock %}*/
/* */
/* {% block content %}*/
/*     {{ include('ZesharCRMGoalsBundle:CRUD:goal_list_js.html.twig') }}*/
/*     <div class="goal-table-wrap table-wrap ui-sortable">*/
/*         <div class="box box-primary">*/
/*             <table class="report-table table-sonata-list table-striped table table-bordered">*/
/*                 <thead>*/
/*                 <tr>*/
/*                     <th colspan="4">*/
/*                         Portfolio*/
/*                     </th>*/
/*                     <th colspan="4">*/
/*                         New Targets*/
/*                     </th>*/
/*                 </tr>*/
/*                 <tr>*/
/*                     <th>Item</th>*/
/*                     <th>Points</th>*/
/*                     <th>Items in Force</th>*/
/*                     <th>Total Points</th>*/
/*                     <th>Growth Desired</th>*/
/*                     <th>Target Items</th>*/
/*                     <th>Total Points</th>*/
/*                 </tr>*/
/*                 </thead>*/
/*                 <tbody>*/
/*                 {% if result %}*/
/*                     {% set globalPoints = 0 %}*/
/*                     {% set globalPrev = 0 %}*/
/*                     {% set globalPrevTotal = 0 %}*/
/*                     {% set globalPercent = 0 %}*/
/*                     {% set globalEstimated = 0 %}*/
/*                     {% set globalPostTotal = 0 %}*/
/*                     {% for key, item in result %}*/
/*                         {% set globalPoints = globalPoints + item.points %}*/
/*                         {% set globalPrev = globalPrev + item.prev %}*/
/*                         {% set globalPrevTotal = globalPrevTotal + item.prev*item.points %}*/
/*                         {% set globalEstimated = globalEstimated + item.estimated %}*/
/*                         {% set globalPostTotal = globalPostTotal + item.estimated*item.points %}*/
/* */
/*                         <tr class="sonata-ba-view-container" data-product-id="{{ item.productId }}">*/
/*                             <td>*/
/*                                 <a href="{{ path('zeshar_crm_goal_users', {'id': item.productId}) }}">{{ key }}</a>*/
/*                             </td>*/
/*                             <td class="goal-points">*/
/*                                 {{ item.points }}*/
/*                             </td>*/
/*                             <td class="goal-prev goal-editable editable-on-text" data-field-name='prev'>*/
/*                                 {{ item.prev }}*/
/*                             </td>*/
/*                             <td class="goal-prev-total">*/
/*                                 {{ item.prev*item.points}}*/
/*                             </td>*/
/*                             <td class="goal-percent goal-editable" data-field-name='percent' >*/
/*                                <input type="number" class="goal-text-edit edit-field percent" value="{{ item.percent }}" /> %*/
/*                             </td>*/
/*                             <td class="goal-post">*/
/*                                 {{ item.estimated }}*/
/*                             </td>*/
/*                             <td class="goal-post-total">*/
/*                                 {{ item.estimated*item.points}}*/
/*                             </td>*/
/*                         </tr>*/
/*                     {% endfor %}*/
/*                     {% if globalPrev != 0 %}*/
/*                         {% set globalPercent = (globalEstimated - globalPrev)/globalPrev * 100 %}*/
/*                     {% else %}*/
/*                         {% set globalPercent = 0 %}*/
/*                     {% endif %}*/
/*                     <tr class="total-amount last">*/
/*                         <td class="td-title">Totals:</td>*/
/*                         {#<td class="goal-global-points">{{ globalPoints }}</td>#}*/
/*                         <td></td>*/
/*                         <td class="goal-global-prev">{{ globalPrev }}</td>*/
/*                         <td class="goal-global-prev-total">{{ globalPrevTotal }}</td>*/
/*                         <td class="goal-global-percent">{{ globalPercent|number_format(2) }}%</td>*/
/*                         <td class="goal-global-estimated">{{ globalEstimated }}</td>*/
/*                         <td class="goal-global-post-total">{{ globalPostTotal }}</td>*/
/*                     </tr>*/
/*                 {% endif %}*/
/*                 </tbody>*/
/*             </table>*/
/*         </div>*/
/*     </div>*/
/* */
/*     <div class="goal-block-action">*/
/*         <button class="goal-action-save btn-green btn">Save</button>*/
/*     </div>*/
/* */
/* {% endblock %}*/
/* */
/* {#{% block javascripts %}#}*/
/*     {#{{ parent() }}#}*/
/*     {#<script src="{{ asset('bundles/zesharcrmgoals/js/goal_list.js') }}"></script>#}*/
/* {#{% endblock %}#}*/
/* */
/* */
/* {% block stylesheets %}*/
/*     {{ parent() }}*/
/*     <link rel="stylesheet" type="text/css"  href="{{ asset('bundles/zesharcrmgoals/css/style.css') }}"  />*/
/* {% endblock %}*/
/* */
