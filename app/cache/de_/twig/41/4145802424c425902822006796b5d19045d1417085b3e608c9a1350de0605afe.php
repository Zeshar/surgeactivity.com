<?php

/* ZesharCRMCoreBundle:CRUD:lead_opportunity_show.html.twig */
class __TwigTemplate_5806004e0e438a79bf4fdc025442e85888a796f1d2d5a70a96e1e048fe19e84c extends Twig_Template
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
        $__internal_17e1562cdb28cad6f01e241ceeb37380361d0012209303ec32f8bc22b60dafb5 = $this->env->getExtension("native_profiler");
        $__internal_17e1562cdb28cad6f01e241ceeb37380361d0012209303ec32f8bc22b60dafb5->enter($__internal_17e1562cdb28cad6f01e241ceeb37380361d0012209303ec32f8bc22b60dafb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ZesharCRMCoreBundle:CRUD:lead_opportunity_show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_17e1562cdb28cad6f01e241ceeb37380361d0012209303ec32f8bc22b60dafb5->leave($__internal_17e1562cdb28cad6f01e241ceeb37380361d0012209303ec32f8bc22b60dafb5_prof);

    }

    // line 3
    public function block_actions($context, array $blocks = array())
    {
        $__internal_6757f0535f61a31e2b2f9039adc94b762f41d6f0992889b6e86386ce61bda14c = $this->env->getExtension("native_profiler");
        $__internal_6757f0535f61a31e2b2f9039adc94b762f41d6f0992889b6e86386ce61bda14c->enter($__internal_6757f0535f61a31e2b2f9039adc94b762f41d6f0992889b6e86386ce61bda14c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 4
        echo "
";
        
        $__internal_6757f0535f61a31e2b2f9039adc94b762f41d6f0992889b6e86386ce61bda14c->leave($__internal_6757f0535f61a31e2b2f9039adc94b762f41d6f0992889b6e86386ce61bda14c_prof);

    }

    // line 7
    public function block_tab_menu($context, array $blocks = array())
    {
        $__internal_10c5ce98054c67ed1967cde65ac74e45cfda70999e679d71601fec85425439ac = $this->env->getExtension("native_profiler");
        $__internal_10c5ce98054c67ed1967cde65ac74e45cfda70999e679d71601fec85425439ac->enter($__internal_10c5ce98054c67ed1967cde65ac74e45cfda70999e679d71601fec85425439ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        
        $__internal_10c5ce98054c67ed1967cde65ac74e45cfda70999e679d71601fec85425439ac->leave($__internal_10c5ce98054c67ed1967cde65ac74e45cfda70999e679d71601fec85425439ac_prof);

    }

    // line 9
    public function block_sonata_whole_content_wrapper_classes($context, array $blocks = array())
    {
        $__internal_2d3fc0d082e73fbe50febaa969336c0360f6dba97bee9dfef3ccdfc7a036c9e5 = $this->env->getExtension("native_profiler");
        $__internal_2d3fc0d082e73fbe50febaa969336c0360f6dba97bee9dfef3ccdfc7a036c9e5->enter($__internal_2d3fc0d082e73fbe50febaa969336c0360f6dba97bee9dfef3ccdfc7a036c9e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_whole_content_wrapper_classes"));

        echo "content show-page clear-fix";
        
        $__internal_2d3fc0d082e73fbe50febaa969336c0360f6dba97bee9dfef3ccdfc7a036c9e5->leave($__internal_2d3fc0d082e73fbe50febaa969336c0360f6dba97bee9dfef3ccdfc7a036c9e5_prof);

    }

    // line 11
    public function block_sonata_page_content_nav($context, array $blocks = array())
    {
        $__internal_5e2e17d1f9b90daace5c7c6e2f35f0ae8f39cdbff67dca9b758f6f9b6109baa7 = $this->env->getExtension("native_profiler");
        $__internal_5e2e17d1f9b90daace5c7c6e2f35f0ae8f39cdbff67dca9b758f6f9b6109baa7->enter($__internal_5e2e17d1f9b90daace5c7c6e2f35f0ae8f39cdbff67dca9b758f6f9b6109baa7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content_nav"));

        
        $__internal_5e2e17d1f9b90daace5c7c6e2f35f0ae8f39cdbff67dca9b758f6f9b6109baa7->leave($__internal_5e2e17d1f9b90daace5c7c6e2f35f0ae8f39cdbff67dca9b758f6f9b6109baa7_prof);

    }

    // line 13
    public function block_show($context, array $blocks = array())
    {
        $__internal_b035a1d70a8991b7e4b26fc0c443b396f3f4cce0682b3d22372b57dfa34dfd1c = $this->env->getExtension("native_profiler");
        $__internal_b035a1d70a8991b7e4b26fc0c443b396f3f4cce0682b3d22372b57dfa34dfd1c->enter($__internal_b035a1d70a8991b7e4b26fc0c443b396f3f4cce0682b3d22372b57dfa34dfd1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show"));

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
        $context["opportunity"] = $this->env->getExtension('zeshar_crm_core')->checkOpportunityType((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")));
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getLabel", array(), "method"), "html", null, true);
        echo " ";
        if (($this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "getContactCard", array(), "method") &&  !twig_test_empty($this->getAttribute($this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "getContactCard", array(), "method"), "getFullName", array(), "method")))) {
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "getContactCard", array(), "method"), "getFullName", array(), "method"), "html", null, true);
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "contactCard", array()), 'widget');
        echo "</div>
            <div class=\"row\">
                <div class=\"col-md-12\">
                    ";
        // line 44
        if (((isset($context["opportunity"]) ? $context["opportunity"] : $this->getContext($context, "opportunity")) == true)) {
            // line 45
            echo "                        ";
            if (($this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "status", array()) == 3)) {
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
        if (((isset($context["opportunity"]) ? $context["opportunity"] : $this->getContext($context, "opportunity")) == true)) {
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
        if ((($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getLabel", array(), "method") == "Lead") || ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getLabel", array(), "method") == "Opportunity"))) {
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
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sonata.admin.show.top", array("admin" => (isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "object" => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")))));
        echo "

        ";
        // line 83
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "showgroups", array()));
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
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "trans", array(0 => $context["name"]), "method"), "html", null, true);
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
                    echo $this->env->getExtension('sonata_admin')->renderViewElement($this->getAttribute((isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements")), $context["field_name"], array(), "array"), (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")));
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
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sonata.admin.show.bottom", array("admin" => (isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "object" => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")))));
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
        
        $__internal_b035a1d70a8991b7e4b26fc0c443b396f3f4cce0682b3d22372b57dfa34dfd1c->leave($__internal_b035a1d70a8991b7e4b26fc0c443b396f3f4cce0682b3d22372b57dfa34dfd1c_prof);

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
        return array (  325 => 113,  318 => 110,  315 => 109,  313 => 108,  309 => 107,  306 => 106,  298 => 103,  291 => 101,  285 => 99,  283 => 98,  280 => 97,  276 => 96,  272 => 94,  264 => 89,  259 => 86,  257 => 85,  254 => 84,  250 => 83,  245 => 81,  237 => 76,  232 => 74,  229 => 73,  223 => 71,  221 => 70,  218 => 69,  212 => 67,  207 => 65,  202 => 64,  200 => 63,  197 => 62,  192 => 59,  187 => 57,  181 => 53,  175 => 51,  172 => 50,  166 => 48,  160 => 46,  157 => 45,  155 => 44,  149 => 41,  144 => 39,  136 => 34,  126 => 27,  113 => 22,  107 => 19,  104 => 18,  101 => 17,  95 => 15,  92 => 14,  86 => 13,  75 => 11,  63 => 9,  52 => 7,  44 => 4,  38 => 3,  11 => 1,);
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
