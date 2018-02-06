<?php

/* ZesharCRMCoreBundle:CRUD:lead_opportunity_show.html.twig */
class __TwigTemplate_beb4ead79c88cc104965c1d433ac93a68d0627c5c32597e90bd21c9f8d452e18 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:show.html.twig", "ZesharCRMCoreBundle:CRUD:lead_opportunity_show.html.twig", 1);
        $this->blocks = array(
            'actions' => array($this, 'block_actions'),
            'tab_menu' => array($this, 'block_tab_menu'),
            'sonata_whole_content_wrapper_classes' => array($this, 'block_sonata_whole_content_wrapper_classes'),
            'sonata_page_content_nav' => array($this, 'block_sonata_page_content_nav'),
            'show' => array($this, 'block_show'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:show.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_actions($context, array $blocks = array())
    {
        // line 4
        echo "
";
    }

    // line 7
    public function block_tab_menu($context, array $blocks = array())
    {
    }

    // line 9
    public function block_sonata_whole_content_wrapper_classes($context, array $blocks = array())
    {
        echo "content show-page clear-fix";
    }

    // line 11
    public function block_sonata_page_content_nav($context, array $blocks = array())
    {
    }

    // line 13
    public function block_show($context, array $blocks = array())
    {
        // line 14
        echo "    ";
        if ($this->getAttribute((isset($context["enable_bundles"]) ? $context["enable_bundles"] : null), "ZesharCRMCallsBundle", array(), "any", true, true)) {
            // line 15
            echo "        ";
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("ZesharCRMCallsBundle:CallReporting:createCall"));
            echo "
    ";
        }
        // line 17
        echo "    ";
        $context["opportunity"] = $this->env->getExtension('zeshar_crm_core')->checkOpportunityType((isset($context["object"]) ? $context["object"] : null));
        // line 18
        echo "    <button class=\"btn filter-widget hidden-widget\">Hide widgets</button>
    ";
        // line 19
        echo twig_include($this->env, $context, "ZesharCRMCoreBundle:CRUD:DisplayPartial/lead_opportunity_show_block_actions_js.html.twig");
        echo "
    <div class=\"row\">
        <div class=\"title-wrap-simple col-md-6\">
            <h2 class=\"pull-left\">";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "getLabel", array(), "method"), "html", null, true);
        echo " ";
        if (($this->getAttribute((isset($context["object"]) ? $context["object"] : null), "getContactCard", array(), "method") &&  !twig_test_empty($this->getAttribute($this->getAttribute((isset($context["object"]) ? $context["object"] : null), "getContactCard", array(), "method"), "getFullName", array(), "method")))) {
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["object"]) ? $context["object"] : null), "getContactCard", array(), "method"), "getFullName", array(), "method"), "html", null, true);
        }
        echo "</h2>
            <button class=\"btn btn-success btn-all-save\" style=\"
                margin-left: 6px;
            \">Save all cards</button>
            <div class=\"pull-right\">
                ";
        // line 27
        echo twig_include($this->env, $context, "ZesharCRMCoreBundle:CRUD:DisplayPartial/lead_opportunity_show_top_actions.html.twig");
        echo "
            </div>
        </div>
    </div>
    <div class=\"row\">
        <div id=\"collapse-block\" class=\"right-column\">
            <div class=\"widget-wrap\">
                ";
        // line 34
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("ZesharCRMCoreBundle:Dashboard:showBlockWidget"));
        echo "
            </div>
        </div>
        <div class=\"col-md-6\" id = \"for_choose_id\">
            <div class=\"entity-details-wrap\">
                ";
        // line 39
        echo twig_include($this->env, $context, "ZesharCRMCoreBundle:CRUD:DisplayPartial/lead_opportunity_show_entity_details.html.twig");
        echo "
            </div>
            <div style=\"display: none\">";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "contactCard", array()), 'widget');
        echo "</div>
            <div class=\"row\">
                <div class=\"col-md-12\">
                    ";
        // line 44
        if (((isset($context["opportunity"]) ? $context["opportunity"] : null) == true)) {
            // line 45
            echo "                        ";
            if (($this->getAttribute((isset($context["object"]) ? $context["object"] : null), "status", array()) == 3)) {
                // line 46
                echo "                            ";
                echo twig_include($this->env, $context, "ZesharCRMCoreBundle:CRUD:DisplayPartial/quote_show_processing.html.twig");
                echo "
                        ";
            } else {
                // line 48
                echo "                            ";
                echo twig_include($this->env, $context, "ZesharCRMCoreBundle:CRUD:DisplayPartial/opportunity_show_processing.html.twig");
                echo "
                        ";
            }
            // line 50
            echo "                    ";
        } else {
            // line 51
            echo "                        ";
            echo twig_include($this->env, $context, "ZesharCRMCoreBundle:CRUD:DisplayPartial/lead_opportunity_show_processing.html.twig");
            echo "
                    ";
        }
        // line 53
        echo "                </div>
            </div>
        </div>
        <div class=\"col-md-6 right_half lead-opp-edit-slides\" style=\"width: 24%;\">
            ";
        // line 57
        echo twig_include($this->env, $context, "ZesharCRMCoreBundle:CRUD:DisplayPartial/lead_opportunity_show_calendar.html.twig");
        echo "

            ";
        // line 59
        echo twig_include($this->env, $context, "ZesharCRMCoreBundle:CRUD:DisplayPartial/lead_opportunity_show_events.html.twig");
        echo "

            ";
        // line 62
        echo "
            ";
        // line 63
        if (((isset($context["opportunity"]) ? $context["opportunity"] : null) == true)) {
            // line 64
            echo "                ";
            echo twig_include($this->env, $context, "ZesharCRMCoreBundle:CRUD:DisplayPartial/opportunity_show_prequalification.html.twig");
            echo "
                ";
            // line 65
            echo twig_include($this->env, $context, "ZesharCRMCoreBundle:CRUD:DisplayPartial/opportunity_edit_prequalification.html.twig");
            echo "
            ";
        } else {
            // line 67
            echo "                ";
            echo twig_include($this->env, $context, "ZesharCRMCoreBundle:CRUD:DisplayPartial/lead_opportunity_show_prequalification.html.twig");
            echo "
            ";
        }
        // line 69
        echo "
            ";
        // line 70
        if ((($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "getLabel", array(), "method") == "Lead") || ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "getLabel", array(), "method") == "Opportunity"))) {
            // line 71
            echo "                ";
            echo twig_include($this->env, $context, "ZesharCRMCoreBundle:CRUD:DisplayPartial/lead_opportunity_show_scoring.html.twig");
            echo "
            ";
        }
        // line 73
        echo "
            ";
        // line 74
        echo twig_include($this->env, $context, "ZesharCRMCoreBundle:CRUD:DisplayPartial/lead_opportunity_show_lead_history.html.twig");
        echo "

            ";
        // line 76
        echo twig_include($this->env, $context, "ZesharCRMCoreBundle:CRUD:DisplayPartial/lead_opportunity_show_notes.html.twig");
        echo "
        </div>
    </div>
    <div class=\"sonata-ba-view\" style=\"display: none;\">

        ";
        // line 81
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sonata.admin.show.top", array("admin" => (isset($context["admin"]) ? $context["admin"] : null), "object" => (isset($context["object"]) ? $context["object"] : null))));
        echo "

        ";
        // line 83
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "showgroups", array()));
        foreach ($context['_seq'] as $context["name"] => $context["view_group"]) {
            // line 84
            echo "            <table class=\"table table-bordered\">
                ";
            // line 85
            if ($context["name"]) {
                // line 86
                echo "                    <thead>
                        <tr class=\"sonata-ba-view-title\">
                            <th colspan=\"2\">
                                ";
                // line 89
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "trans", array(0 => $context["name"]), "method"), "html", null, true);
                echo "
                            </th>
                        </tr>
                    </thead>
                ";
            }
            // line 94
            echo "
                <tbody>
                    ";
            // line 96
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["view_group"], "fields", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["field_name"]) {
                // line 97
                echo "                        <tr class=\"sonata-ba-view-container\">
                            ";
                // line 98
                if ($this->getAttribute((isset($context["elements"]) ? $context["elements"] : null), $context["field_name"], array(), "array", true, true)) {
                    // line 99
                    echo "                                ";
                    echo $this->env->getExtension('sonata_admin')->renderViewElement($this->getAttribute((isset($context["elements"]) ? $context["elements"] : null), $context["field_name"], array(), "array"), (isset($context["object"]) ? $context["object"] : null));
                    echo "
                            ";
                }
                // line 101
                echo "                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field_name'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 103
            echo "                </tbody>
            </table>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['view_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 106
        echo "
        ";
        // line 107
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sonata.admin.show.bottom", array("admin" => (isset($context["admin"]) ? $context["admin"] : null), "object" => (isset($context["object"]) ? $context["object"] : null))));
        echo "
        ";
        // line 108
        $this->loadTemplate("ZesharCRMCoreBundle:CRUD:DisplayPartial/lead_opportunity_popup_verification.html.twig", "ZesharCRMCoreBundle:CRUD:lead_opportunity_show.html.twig", 108)->display($context);
        // line 109
        echo "        ";
        $this->loadTemplate("ZesharCRMCoreBundle:CRUD:DisplayPartial/lead_opportunity_popup_email.html.twig", "ZesharCRMCoreBundle:CRUD:lead_opportunity_show.html.twig", 109)->display($context);
        // line 110
        echo "        ";
        echo twig_include($this->env, $context, "ZesharCRMCoreBundle:CRUD:DisplayPartial/lead_opportunity_popup_milestone_sold.html.twig");
        echo "

    </div>
    <script src=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/zesharcrmcore/js/ajaxfileupload.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "ZesharCRMCoreBundle:CRUD:lead_opportunity_show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  292 => 113,  285 => 110,  282 => 109,  280 => 108,  276 => 107,  273 => 106,  265 => 103,  258 => 101,  252 => 99,  250 => 98,  247 => 97,  243 => 96,  239 => 94,  231 => 89,  226 => 86,  224 => 85,  221 => 84,  217 => 83,  212 => 81,  204 => 76,  199 => 74,  196 => 73,  190 => 71,  188 => 70,  185 => 69,  179 => 67,  174 => 65,  169 => 64,  167 => 63,  164 => 62,  159 => 59,  154 => 57,  148 => 53,  142 => 51,  139 => 50,  133 => 48,  127 => 46,  124 => 45,  122 => 44,  116 => 41,  111 => 39,  103 => 34,  93 => 27,  80 => 22,  74 => 19,  71 => 18,  68 => 17,  62 => 15,  59 => 14,  56 => 13,  51 => 11,  45 => 9,  40 => 7,  35 => 4,  32 => 3,  11 => 1,);
    }
}
/* {% extends 'SonataAdminBundle:CRUD:show.html.twig' %}*/
/* */
/* {% block actions %}*/
/* */
/* {% endblock %}*/
/* */
/* {% block tab_menu %}{% endblock %}*/
/* */
/* {% block sonata_whole_content_wrapper_classes %}content show-page clear-fix{% endblock %}*/
/* */
/* {% block sonata_page_content_nav %}{% endblock %}*/
/* */
/* {% block show %}*/
/*     {% if enable_bundles.ZesharCRMCallsBundle is defined %}*/
/*         {{ render(controller('ZesharCRMCallsBundle:CallReporting:createCall')) }}*/
/*     {% endif %}*/
/*     {% set opportunity = object|opportunity %}*/
/*     <button class="btn filter-widget hidden-widget">Hide widgets</button>*/
/*     {{ include('ZesharCRMCoreBundle:CRUD:DisplayPartial/lead_opportunity_show_block_actions_js.html.twig') }}*/
/*     <div class="row">*/
/*         <div class="title-wrap-simple col-md-6">*/
/*             <h2 class="pull-left">{{ admin.getLabel() }} {% if object.getContactCard() and object.getContactCard().getFullName() is not empty %} - {{ object.getContactCard().getFullName() }}{% endif %}</h2>*/
/*             <button class="btn btn-success btn-all-save" style="*/
/*                 margin-left: 6px;*/
/*             ">Save all cards</button>*/
/*             <div class="pull-right">*/
/*                 {{ include('ZesharCRMCoreBundle:CRUD:DisplayPartial/lead_opportunity_show_top_actions.html.twig') }}*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*     <div class="row">*/
/*         <div id="collapse-block" class="right-column">*/
/*             <div class="widget-wrap">*/
/*                 {{ render(controller('ZesharCRMCoreBundle:Dashboard:showBlockWidget')) }}*/
/*             </div>*/
/*         </div>*/
/*         <div class="col-md-6" id = "for_choose_id">*/
/*             <div class="entity-details-wrap">*/
/*                 {{ include('ZesharCRMCoreBundle:CRUD:DisplayPartial/lead_opportunity_show_entity_details.html.twig') }}*/
/*             </div>*/
/*             <div style="display: none">{{ form_widget(form.contactCard) }}</div>*/
/*             <div class="row">*/
/*                 <div class="col-md-12">*/
/*                     {% if opportunity == true %}*/
/*                         {% if object.status == 3 %}*/
/*                             {{ include('ZesharCRMCoreBundle:CRUD:DisplayPartial/quote_show_processing.html.twig') }}*/
/*                         {% else %}*/
/*                             {{ include('ZesharCRMCoreBundle:CRUD:DisplayPartial/opportunity_show_processing.html.twig') }}*/
/*                         {% endif %}*/
/*                     {% else %}*/
/*                         {{ include('ZesharCRMCoreBundle:CRUD:DisplayPartial/lead_opportunity_show_processing.html.twig') }}*/
/*                     {% endif %}*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <div class="col-md-6 right_half lead-opp-edit-slides" style="width: 24%;">*/
/*             {{ include('ZesharCRMCoreBundle:CRUD:DisplayPartial/lead_opportunity_show_calendar.html.twig') }}*/
/* */
/*             {{ include('ZesharCRMCoreBundle:CRUD:DisplayPartial/lead_opportunity_show_events.html.twig') }}*/
/* */
/*             {#{{ include('ZesharCRMCoreBundle:CRUD:DisplayPartial/lead_opportunity_show_generic_history.html.twig') }}#}*/
/* */
/*             {% if opportunity == true %}*/
/*                 {{ include('ZesharCRMCoreBundle:CRUD:DisplayPartial/opportunity_show_prequalification.html.twig') }}*/
/*                 {{ include('ZesharCRMCoreBundle:CRUD:DisplayPartial/opportunity_edit_prequalification.html.twig') }}*/
/*             {% else %}*/
/*                 {{ include('ZesharCRMCoreBundle:CRUD:DisplayPartial/lead_opportunity_show_prequalification.html.twig') }}*/
/*             {% endif %}*/
/* */
/*             {% if admin.getLabel() == 'Lead' or admin.getLabel() == 'Opportunity' %}*/
/*                 {{ include('ZesharCRMCoreBundle:CRUD:DisplayPartial/lead_opportunity_show_scoring.html.twig') }}*/
/*             {% endif %}*/
/* */
/*             {{ include('ZesharCRMCoreBundle:CRUD:DisplayPartial/lead_opportunity_show_lead_history.html.twig') }}*/
/* */
/*             {{ include('ZesharCRMCoreBundle:CRUD:DisplayPartial/lead_opportunity_show_notes.html.twig') }}*/
/*         </div>*/
/*     </div>*/
/*     <div class="sonata-ba-view" style="display: none;">*/
/* */
/*         {{ sonata_block_render_event('sonata.admin.show.top', { 'admin': admin, 'object': object }) }}*/
/* */
/*         {% for name, view_group in admin.showgroups %}*/
/*             <table class="table table-bordered">*/
/*                 {% if name %}*/
/*                     <thead>*/
/*                         <tr class="sonata-ba-view-title">*/
/*                             <th colspan="2">*/
/*                                 {{ admin.trans(name) }}*/
/*                             </th>*/
/*                         </tr>*/
/*                     </thead>*/
/*                 {% endif %}*/
/* */
/*                 <tbody>*/
/*                     {% for field_name in view_group.fields %}*/
/*                         <tr class="sonata-ba-view-container">*/
/*                             {% if elements[field_name] is defined %}*/
/*                                 {{ elements[field_name]|render_view_element(object) }}*/
/*                             {% endif %}*/
/*                         </tr>*/
/*                     {% endfor %}*/
/*                 </tbody>*/
/*             </table>*/
/*         {% endfor %}*/
/* */
/*         {{ sonata_block_render_event('sonata.admin.show.bottom', { 'admin': admin, 'object': object }) }}*/
/*         {% include('ZesharCRMCoreBundle:CRUD:DisplayPartial/lead_opportunity_popup_verification.html.twig') %}*/
/*         {% include('ZesharCRMCoreBundle:CRUD:DisplayPartial/lead_opportunity_popup_email.html.twig') %}*/
/*         {{ include('ZesharCRMCoreBundle:CRUD:DisplayPartial/lead_opportunity_popup_milestone_sold.html.twig') }}*/
/* */
/*     </div>*/
/*     <script src="{{ asset('bundles/zesharcrmcore/js/ajaxfileupload.js') }}"></script>*/
/* {% endblock %}*/
/* */
