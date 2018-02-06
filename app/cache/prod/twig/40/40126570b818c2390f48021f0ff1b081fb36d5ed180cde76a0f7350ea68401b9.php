<?php

/* ZesharCRMCoreBundle:CRUD:lead_opportunity_create.html.twig */
class __TwigTemplate_6d6d9ef4b6d7a07c97f08d9738fc70870ca2c6221fc1afdb9706c08a2ede464a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:show.html.twig", "ZesharCRMCoreBundle:CRUD:lead_opportunity_create.html.twig", 1);
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
        echo "    <button class=\"btn filter-widget hidden-widget\">Hide widgets</button>
    ";
        // line 15
        echo twig_include($this->env, $context, "ZesharCRMCoreBundle:CRUD:DisplayPartial/lead_opportunity_show_block_actions_js.html.twig");
        echo "
    <div class=\"row\">
        <div class=\"title-wrap-simple col-md-6\">
            <h2 class=\"pull-left\">";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "getLabel", array(), "method"), "html", null, true);
        echo " #";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["object"]) ? $context["object"] : null), "getId", array(), "method"), "html", null, true);
        if ( !twig_test_empty($this->getAttribute((isset($context["object"]) ? $context["object"] : null), "getName", array(), "method"))) {
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["object"]) ? $context["object"] : null), "getName", array(), "method"), "html", null, true);
        }
        echo "</h2>
            <button class=\"btn btn-success btn-all-save\" style=\"
                margin-left: 6px;
            \">Save</button>
            <div class=\"pull-right\">
                ";
        // line 24
        echo "            </div>
        </div>
    </div>
    <div class=\"row\">
        <div id=\"collapse-block\"  class=\"right-column\">
            <div class=\"widget-wrap\">
                ";
        // line 30
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("ZesharCRMCoreBundle:Dashboard:showBlockWidget"));
        echo "
            </div>
        </div>
        <div class=\"col-md-6\" id = \"for_choose_id\">
            <div class=\"entity-details-wrap\">
                ";
        // line 35
        echo twig_include($this->env, $context, "ZesharCRMCoreBundle:CRUD:DisplayPartial/lead_opportunity_show_entity_details.html.twig");
        echo "
            </div>
            <div style=\"display: none\">";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "contactCard", array()), 'widget');
        echo "</div>
            <div class=\"row\">
                <div class=\"col-md-12\">
                    ";
        // line 40
        echo twig_include($this->env, $context, "ZesharCRMCoreBundle:CRUD:DisplayPartial/lead_opportunity_show_processing.html.twig");
        echo "
                </div>
            </div>
        </div>
        <div class=\"col-md-6 right_half lead-opp-edit-slides\" style=\"width: 24%;\">
            ";
        // line 45
        echo twig_include($this->env, $context, "ZesharCRMCoreBundle:CRUD:DisplayPartial/lead_opportunity_show_calendar.html.twig");
        echo "

            ";
        // line 48
        echo "
            ";
        // line 49
        echo twig_include($this->env, $context, "ZesharCRMCoreBundle:CRUD:DisplayPartial/lead_opportunity_show_prequalification.html.twig");
        echo "

            ";
        // line 51
        echo twig_include($this->env, $context, "ZesharCRMCoreBundle:CRUD:DisplayPartial/lead_opportunity_show_notes.html.twig");
        echo "
        </div>
    </div>
    <div class=\"sonata-ba-view\" style=\"display: none;\">

        ";
        // line 56
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sonata.admin.show.top", array("admin" => (isset($context["admin"]) ? $context["admin"] : null), "object" => (isset($context["object"]) ? $context["object"] : null))));
        echo "

        ";
        // line 58
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "showgroups", array()));
        foreach ($context['_seq'] as $context["name"] => $context["view_group"]) {
            // line 59
            echo "            <table class=\"table table-bordered\">
                ";
            // line 60
            if ($context["name"]) {
                // line 61
                echo "                    <thead>
                        <tr class=\"sonata-ba-view-title\">
                            <th colspan=\"2\">
                                ";
                // line 64
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "trans", array(0 => $context["name"]), "method"), "html", null, true);
                echo "
                            </th>
                        </tr>
                    </thead>
                ";
            }
            // line 69
            echo "
                <tbody>
                    ";
            // line 71
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["view_group"], "fields", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["field_name"]) {
                // line 72
                echo "                        <tr class=\"sonata-ba-view-container\">
                            ";
                // line 73
                if ($this->getAttribute((isset($context["elements"]) ? $context["elements"] : null), $context["field_name"], array(), "array", true, true)) {
                    // line 74
                    echo "                                ";
                    echo $this->env->getExtension('sonata_admin')->renderViewElement($this->getAttribute((isset($context["elements"]) ? $context["elements"] : null), $context["field_name"], array(), "array"), (isset($context["object"]) ? $context["object"] : null));
                    echo "
                            ";
                }
                // line 76
                echo "                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field_name'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 78
            echo "                </tbody>
            </table>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['view_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        echo "
        ";
        // line 82
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sonata.admin.show.bottom", array("admin" => (isset($context["admin"]) ? $context["admin"] : null), "object" => (isset($context["object"]) ? $context["object"] : null))));
        echo "
        ";
        // line 83
        $this->loadTemplate("ZesharCRMCoreBundle:CRUD:DisplayPartial/lead_opportunity_popup_verification.html.twig", "ZesharCRMCoreBundle:CRUD:lead_opportunity_create.html.twig", 83)->display($context);
        // line 84
        echo "
    </div>
    <script src=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/zesharcrmcore/js/ajaxfileupload.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "ZesharCRMCoreBundle:CRUD:lead_opportunity_create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  212 => 86,  208 => 84,  206 => 83,  202 => 82,  199 => 81,  191 => 78,  184 => 76,  178 => 74,  176 => 73,  173 => 72,  169 => 71,  165 => 69,  157 => 64,  152 => 61,  150 => 60,  147 => 59,  143 => 58,  138 => 56,  130 => 51,  125 => 49,  122 => 48,  117 => 45,  109 => 40,  103 => 37,  98 => 35,  90 => 30,  82 => 24,  68 => 18,  62 => 15,  59 => 14,  56 => 13,  51 => 11,  45 => 9,  40 => 7,  35 => 4,  32 => 3,  11 => 1,);
    }
}
/* {% extends 'SonataAdminBundle:CRUD:show.html.twig' %}*/
/* */
/* {% block actions %}*/
/*     */
/* {% endblock %}*/
/* */
/* {% block tab_menu %}{% endblock %}*/
/* */
/* {% block sonata_whole_content_wrapper_classes %}content show-page clear-fix{% endblock %}*/
/* */
/* {% block sonata_page_content_nav %}{% endblock %}*/
/* */
/* {% block show %}*/
/*     <button class="btn filter-widget hidden-widget">Hide widgets</button>*/
/*     {{ include('ZesharCRMCoreBundle:CRUD:DisplayPartial/lead_opportunity_show_block_actions_js.html.twig') }}*/
/*     <div class="row">*/
/*         <div class="title-wrap-simple col-md-6">*/
/*             <h2 class="pull-left">{{ admin.getLabel() }} #{{ object.getId() }}{% if object.getName() is not empty %} - {{ object.getName() }}{% endif %}</h2>*/
/*             <button class="btn btn-success btn-all-save" style="*/
/*                 margin-left: 6px;*/
/*             ">Save</button>*/
/*             <div class="pull-right">*/
/*                 {#{{ include('ZesharCRMCoreBundle:CRUD:DisplayPartial/lead_opportunity_show_top_actions.html.twig') }}#}*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*     <div class="row">*/
/*         <div id="collapse-block"  class="right-column">*/
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
/*                     {{ include('ZesharCRMCoreBundle:CRUD:DisplayPartial/lead_opportunity_show_processing.html.twig') }}*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <div class="col-md-6 right_half lead-opp-edit-slides" style="width: 24%;">*/
/*             {{ include('ZesharCRMCoreBundle:CRUD:DisplayPartial/lead_opportunity_show_calendar.html.twig') }}*/
/* */
/*             {#{{ include('ZesharCRMCoreBundle:CRUD:DisplayPartial/lead_opportunity_show_generic_history.html.twig') }}#}*/
/* */
/*             {{ include('ZesharCRMCoreBundle:CRUD:DisplayPartial/lead_opportunity_show_prequalification.html.twig') }}*/
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
/* */
/*     </div>*/
/*     <script src="{{ asset('bundles/zesharcrmcore/js/ajaxfileupload.js') }}"></script>*/
/* {% endblock %}*/
/* */
