<?php

/* ZesharCRMGoalsBundle:CRUD:goal.html.twig */
class __TwigTemplate_5664521dac00dff6b8937eee1f4d5e426d65987034ebe5ef21ca684f0f38e246 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ZesharCRMCoreBundle::sonata_layout.html.twig", "ZesharCRMGoalsBundle:CRUD:goal.html.twig", 1);
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
        echo twig_include($this->env, $context, "ZesharCRMGoalsBundle:CRUD:goal_js.html.twig");
        echo "

    <label class=\"goal-product-title\">";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "productTitle", array()), "html", null, true);
        echo "</label>

    <div class=\"goal-assign-table-wrap table-wrap ui-sortable\">
        <div class=\"box box-primary\">
            <table class=\"report-table table-sonata-list table-striped table table-bordered\" data-goal-id=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "goalId", array()), "html", null, true);
        echo "\">
                <thead>
                <tr>
                    <th>User</th>
                    <th>Points</th>
                    <th>Growth Desired</th>
                    <th>Target Items</th>
                </tr>
                </thead>
                <tbody>
                ";
        // line 25
        if ((isset($context["data"]) ? $context["data"] : null)) {
            // line 26
            echo "                    <input type=\"hidden\" class=\"product-points\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "productPoints", array()), "html", null, true);
            echo "\" />
                    <input type=\"hidden\" class=\"global-percent\" value=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "globalPercent", array()), "html", null, true);
            echo "\" />
                    <input type=\"hidden\" class=\"goal-estimated\" value=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "goalEstimated", array()), "html", null, true);
            echo "\" />
                    ";
            // line 29
            $context["globalPercent"] = 0;
            // line 30
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "users", array()));
            foreach ($context['_seq'] as $context["key"] => $context["item"]) {
                // line 31
                echo "                        ";
                $context["globalPercent"] = ((isset($context["globalPercent"]) ? $context["globalPercent"] : null) + $this->getAttribute($context["item"], "percent", array()));
                // line 32
                echo "                        <tr class=\"sonata-ba-view-container\" ";
                echo ">
                            <td class=\"goal-user\" data-user-id=\"";
                // line 33
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "id", array()), "html", null, true);
                echo "\">
                                ";
                // line 34
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "
                            </td>
                            <td class=\"goal-points goal-editable\">
                                <input type=\"number\" class=\"goal-text-edit edit-field points\" value=\"";
                // line 37
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "point", array()), "html", null, true);
                echo "\" />
                            </td>
                            <td class=\"goal-percent goal-editable goal-editable\">
                                <input type=\"number\" class=\"goal-text-edit edit-field percent\" value=\"";
                // line 40
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "percent", array()), "html", null, true);
                echo "\" />%
                            </td>
                            <td class=\"goal-items goal-editable\">
                                <input type=\"number\" class=\"goal-text-edit edit-field items\" value=\"";
                // line 43
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "items", array()), "html", null, true);
                echo "\" />
                            </td>
                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 47
            echo "                    <tr class=\"total-amount last\">
                        <td class=\"td-title\">Total targets:</td>
                        <td>";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "globalPoints", array()), "html", null, true);
            echo "</td>
                        <td class=\"total-percent\">";
            // line 50
            echo twig_escape_filter($this->env, (isset($context["globalPercent"]) ? $context["globalPercent"] : null), "html", null, true);
            echo "%</td>
                        <td>";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "goalEstimated", array()), "html", null, true);
            echo "</td>
                    </tr>
                ";
        }
        // line 54
        echo "                </tbody>
            </table>
        </div>
    </div>


    <div class=\"goal-block-action\">
        <button class=\"goal-action-save btn-green btn\">Save</button>
    </div>

";
    }

    // line 71
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 72
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" type=\"text/css\"  href=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/zesharcrmgoals/css/style.css"), "html", null, true);
        echo "\"  />
";
    }

    public function getTemplateName()
    {
        return "ZesharCRMGoalsBundle:CRUD:goal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 73,  168 => 72,  165 => 71,  151 => 54,  145 => 51,  141 => 50,  137 => 49,  133 => 47,  123 => 43,  117 => 40,  111 => 37,  105 => 34,  101 => 33,  97 => 32,  94 => 31,  89 => 30,  87 => 29,  83 => 28,  79 => 27,  74 => 26,  72 => 25,  59 => 15,  52 => 11,  46 => 9,  43 => 8,  33 => 4,  30 => 3,  11 => 1,);
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
/*     {{ include('ZesharCRMGoalsBundle:CRUD:goal_js.html.twig') }}*/
/* */
/*     <label class="goal-product-title">{{ data.productTitle }}</label>*/
/* */
/*     <div class="goal-assign-table-wrap table-wrap ui-sortable">*/
/*         <div class="box box-primary">*/
/*             <table class="report-table table-sonata-list table-striped table table-bordered" data-goal-id="{{ data.goalId }}">*/
/*                 <thead>*/
/*                 <tr>*/
/*                     <th>User</th>*/
/*                     <th>Points</th>*/
/*                     <th>Growth Desired</th>*/
/*                     <th>Target Items</th>*/
/*                 </tr>*/
/*                 </thead>*/
/*                 <tbody>*/
/*                 {% if data %}*/
/*                     <input type="hidden" class="product-points" value="{{ data.productPoints }}" />*/
/*                     <input type="hidden" class="global-percent" value="{{ data.globalPercent }}" />*/
/*                     <input type="hidden" class="goal-estimated" value="{{ data.goalEstimated }}" />*/
/*                     {% set globalPercent = 0 %}*/
/*                     {% for key, item in data.users %}*/
/*                         {% set globalPercent = globalPercent + item.percent %}*/
/*                         <tr class="sonata-ba-view-container" {#data-product-id="{{ item.productId }}"#}>*/
/*                             <td class="goal-user" data-user-id="{{ item.id }}">*/
/*                                 {{ key }}*/
/*                             </td>*/
/*                             <td class="goal-points goal-editable">*/
/*                                 <input type="number" class="goal-text-edit edit-field points" value="{{ item.point }}" />*/
/*                             </td>*/
/*                             <td class="goal-percent goal-editable goal-editable">*/
/*                                 <input type="number" class="goal-text-edit edit-field percent" value="{{ item.percent }}" />%*/
/*                             </td>*/
/*                             <td class="goal-items goal-editable">*/
/*                                 <input type="number" class="goal-text-edit edit-field items" value="{{ item.items }}" />*/
/*                             </td>*/
/*                         </tr>*/
/*                     {% endfor %}*/
/*                     <tr class="total-amount last">*/
/*                         <td class="td-title">Total targets:</td>*/
/*                         <td>{{ data.globalPoints }}</td>*/
/*                         <td class="total-percent">{{ globalPercent }}%</td>*/
/*                         <td>{{ data.goalEstimated }}</td>*/
/*                     </tr>*/
/*                 {% endif %}*/
/*                 </tbody>*/
/*             </table>*/
/*         </div>*/
/*     </div>*/
/* */
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
/* {% block stylesheets %}*/
/*     {{ parent() }}*/
/*     <link rel="stylesheet" type="text/css"  href="{{ asset('bundles/zesharcrmgoals/css/style.css') }}"  />*/
/* {% endblock %}*/
/* */
