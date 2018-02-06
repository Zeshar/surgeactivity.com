<?php

/* ZesharCRMCoreBundle:CRUD/DisplayPartial:lead_opportunity_show_processing.html.twig */
class __TwigTemplate_fa106de426c8f1606222f1b6b95e7ad720887d0a137bc69403703b5c2759fb41 extends Twig_Template
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
        $__internal_e76f561cf3f6d1b4819f1735c298bd6b672660b9d03c495f3f89f982aaacb3da = $this->env->getExtension("native_profiler");
        $__internal_e76f561cf3f6d1b4819f1735c298bd6b672660b9d03c495f3f89f982aaacb3da->enter($__internal_e76f561cf3f6d1b4819f1735c298bd6b672660b9d03c495f3f89f982aaacb3da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ZesharCRMCoreBundle:CRUD/DisplayPartial:lead_opportunity_show_processing.html.twig"));

        // line 1
        echo "<div class=\"custom-block\">
    <div class=\"custom-head clearfix\">
        <h3>Processing</h3>
    </div>
    <script type=\"text/javascript\">
        (function(\$) {
            \$(document).ready(function() {
                \$('#lead_event_create').on('block-data-validate', function(e, params) {
                    var values = params.values;

                    //var eventDate = new Date(eventDate);
                    // @TODO check past date/time

                });
                \$('#lead_processing_save').on('block-ajax-return', function(e, serverResponse) {
//                    var serverResponseObject = JSON.parse(serverResponse);
//                    var redirectUrl = serverResponseObject.redirectUrl;
//                    var sold = serverResponseObject.sold;
//                    \$(this).find('input').not('[type=\"hidden\"]').val('').trigger('change');
//                    if (!sold) {
//                        if (redirectUrl) {
//                            window.location.replace(redirectUrl);
//                        } else {
//                            window.location.reload(); // todo - insert data without reload
//                        }
//                    }
                    \$(this).find('input').not('[type=\"hidden\"]').val('').trigger('change');
                    window.location.reload();

                });

//                \$('button.btn-green-border').parents('form').on('submit', function(e){
//                    e.preventDefault();
//                    e.stopPropagation();
//                    return false;
//                })


            });
        })(jQuery);
    </script>
    <div id=\"lead_processing_save\" class=\"form-column display-block-persistent\" data-controller=\"leads_display\" data-action=\"leadProcessing\">
        <form>
            <div class=\"form-inline form-inline-processing\">
                <div class=\"form-group lead-processing-inline-select\">
                    <label for=\"source\">Lead Source</label>
                    ";
        // line 47
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("ZesharCRMCoreBundle:FormItems:leadSourceSelect", array("activeId" => (( !twig_test_empty($this->getAttribute(        // line 48
(isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "getLeadSource", array(), "method"))) ? ($this->getAttribute($this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "getLeadSource", array(), "method"), "getId", array(), "method")) : (null)))));
        // line 49
        echo "
                </div>
                <div class=\"form-group lead-processing-inline-select\">
                    ";
        // line 52
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 53
            echo "                        ";
            $context["disabled"] = false;
            // line 54
            echo "                    ";
        } else {
            // line 55
            echo "                        ";
            $context["disabled"] = true;
            // line 56
            echo "                    ";
        }
        // line 57
        echo "                    <label for=\"asign\">Asignee</label>
                    ";
        // line 58
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("ZesharCRMCoreBundle:FormItems:assigneeSelect", array("activeId" => (( !twig_test_empty($this->getAttribute(        // line 59
(isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "getAssignee", array(), "method"))) ? ($this->getAttribute($this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "getAssignee", array(), "method"), "getId", array(), "method")) : (null)), "disabled" =>         // line 60
(isset($context["disabled"]) ? $context["disabled"] : $this->getContext($context, "disabled")))));
        // line 61
        echo "
                    <input type=\"hidden\" id=\"lead_id\" name=\"lead_id\" value=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "getId", array(), "method"), "html", null, true);
        echo "\" />
                </div>
                <div class=\"form-group lead-processing-inline-select\">
                    <label for=\"compaign\">Activity</label>
                    ";
        // line 66
        $context["additionalParams"] = array("assignee" => (( !twig_test_empty($this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "getAssignee", array(), "method"))) ? ($this->getAttribute($this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "getAssignee", array(), "method"), "getId", array(), "method")) : (null)));
        // line 67
        echo "                    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("ZesharCRMCoreBundle:FormItems:leadCampaignSelect", array("activeId" => (( !twig_test_empty($this->getAttribute(        // line 68
(isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "getLeadCampaign", array(), "method"))) ? ($this->getAttribute($this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "getLeadCampaign", array(), "method"), "getId", array(), "method")) : (null)), "additionalParams" =>         // line 69
(isset($context["additionalParams"]) ? $context["additionalParams"] : $this->getContext($context, "additionalParams")))));
        // line 70
        echo "
                </div>
            </div>
            ";
        // line 73
        if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getLabel", array(), "method") == "Lead")) {
            // line 74
            echo "                <div class=\"form-group\">
                    <p class=\"label-type\">Status</p>
                    <div class=\"clearfix\">
                        ";
            // line 77
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("ZesharCRMCoreBundle:FormItems:leadStatusSelect", array("activeValue" => $this->getAttribute(            // line 78
(isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "getType", array(), "method"))));
            // line 79
            echo "
                    </div>
                </div>
            ";
        }
        // line 83
        echo "            <div class=\"form-group\">
                <p class=\"label-type\">Lead Type</p>
                ";
        // line 85
        if ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "admin_zesharcrm_core_lead_create") || twig_test_empty($this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "getSystemTypeString", array(), "method")))) {
            // line 86
            echo "                    <div class=\"clearfix\">
                        ";
            // line 87
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("ZesharCRMCoreBundle:FormItems:leadTypeSelect", array("activeId" => (( !twig_test_empty($this->getAttribute(            // line 88
(isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "getLeadType", array(), "method"))) ? ($this->getAttribute($this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "getLeadType", array(), "method"), "getId", array(), "method")) : (null)))));
            // line 89
            echo "
                    </div>
                ";
        } else {
            // line 92
            echo "                    <span>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "getSystemTypeString", array(), "method"), "html", null, true);
            echo "</span>
                ";
        }
        // line 94
        echo "            </div>

           ";
        // line 131
        echo "
            <input type=\"hidden\" id=\"lead_id\" name=\"lead_id\" value=\"";
        // line 132
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "getId", array(), "method"), "html", null, true);
        echo "\" />
            ";
        // line 133
        echo twig_include($this->env, $context, "ZesharCRMCoreBundle:CRUD:DisplayPartial/lead_opportunity_show_block_actions.html.twig");
        echo "
        </form>
    </div>
</div>
";
        
        $__internal_e76f561cf3f6d1b4819f1735c298bd6b672660b9d03c495f3f89f982aaacb3da->leave($__internal_e76f561cf3f6d1b4819f1735c298bd6b672660b9d03c495f3f89f982aaacb3da_prof);

    }

    public function getTemplateName()
    {
        return "ZesharCRMCoreBundle:CRUD/DisplayPartial:lead_opportunity_show_processing.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 133,  167 => 132,  164 => 131,  160 => 94,  154 => 92,  149 => 89,  147 => 88,  146 => 87,  143 => 86,  141 => 85,  137 => 83,  131 => 79,  129 => 78,  128 => 77,  123 => 74,  121 => 73,  116 => 70,  114 => 69,  113 => 68,  111 => 67,  109 => 66,  102 => 62,  99 => 61,  97 => 60,  96 => 59,  95 => 58,  92 => 57,  89 => 56,  86 => 55,  83 => 54,  80 => 53,  78 => 52,  73 => 49,  71 => 48,  70 => 47,  22 => 1,);
    }
}
/* <div class="custom-block">*/
/*     <div class="custom-head clearfix">*/
/*         <h3>Processing</h3>*/
/*     </div>*/
/*     <script type="text/javascript">*/
/*         (function($) {*/
/*             $(document).ready(function() {*/
/*                 $('#lead_event_create').on('block-data-validate', function(e, params) {*/
/*                     var values = params.values;*/
/* */
/*                     //var eventDate = new Date(eventDate);*/
/*                     // @TODO check past date/time*/
/* */
/*                 });*/
/*                 $('#lead_processing_save').on('block-ajax-return', function(e, serverResponse) {*/
/* //                    var serverResponseObject = JSON.parse(serverResponse);*/
/* //                    var redirectUrl = serverResponseObject.redirectUrl;*/
/* //                    var sold = serverResponseObject.sold;*/
/* //                    $(this).find('input').not('[type="hidden"]').val('').trigger('change');*/
/* //                    if (!sold) {*/
/* //                        if (redirectUrl) {*/
/* //                            window.location.replace(redirectUrl);*/
/* //                        } else {*/
/* //                            window.location.reload(); // todo - insert data without reload*/
/* //                        }*/
/* //                    }*/
/*                     $(this).find('input').not('[type="hidden"]').val('').trigger('change');*/
/*                     window.location.reload();*/
/* */
/*                 });*/
/* */
/* //                $('button.btn-green-border').parents('form').on('submit', function(e){*/
/* //                    e.preventDefault();*/
/* //                    e.stopPropagation();*/
/* //                    return false;*/
/* //                })*/
/* */
/* */
/*             });*/
/*         })(jQuery);*/
/*     </script>*/
/*     <div id="lead_processing_save" class="form-column display-block-persistent" data-controller="leads_display" data-action="leadProcessing">*/
/*         <form>*/
/*             <div class="form-inline form-inline-processing">*/
/*                 <div class="form-group lead-processing-inline-select">*/
/*                     <label for="source">Lead Source</label>*/
/*                     {{ render(controller('ZesharCRMCoreBundle:FormItems:leadSourceSelect', {*/
/*                     'activeId': object.getLeadSource() is not empty ? object.getLeadSource().getId() : null*/
/*                     })) }}*/
/*                 </div>*/
/*                 <div class="form-group lead-processing-inline-select">*/
/*                     {% if is_granted('ROLE_ADMIN') %}*/
/*                         {% set disabled = false %}*/
/*                     {% else %}*/
/*                         {% set disabled = true %}*/
/*                     {% endif %}*/
/*                     <label for="asign">Asignee</label>*/
/*                     {{ render(controller('ZesharCRMCoreBundle:FormItems:assigneeSelect', {*/
/*                     'activeId': object.getAssignee() is not empty ? object.getAssignee().getId() : null,*/
/*                     'disabled': disabled*/
/*                     })) }}*/
/*                     <input type="hidden" id="lead_id" name="lead_id" value="{{ object.getId() }}" />*/
/*                 </div>*/
/*                 <div class="form-group lead-processing-inline-select">*/
/*                     <label for="compaign">Activity</label>*/
/*                     {% set additionalParams = {'assignee': object.getAssignee() is not empty ? object.getAssignee().getId() : null} %}*/
/*                     {{ render(controller('ZesharCRMCoreBundle:FormItems:leadCampaignSelect', {*/
/*                         'activeId': object.getLeadCampaign() is not empty ? object.getLeadCampaign().getId() : null,*/
/*                         'additionalParams': additionalParams*/
/*                     })) }}*/
/*                 </div>*/
/*             </div>*/
/*             {% if admin.getLabel() == 'Lead' %}*/
/*                 <div class="form-group">*/
/*                     <p class="label-type">Status</p>*/
/*                     <div class="clearfix">*/
/*                         {{ render(controller('ZesharCRMCoreBundle:FormItems:leadStatusSelect', {*/
/*                         'activeValue': object.getType()*/
/*                         })) }}*/
/*                     </div>*/
/*                 </div>*/
/*             {% endif %}*/
/*             <div class="form-group">*/
/*                 <p class="label-type">Lead Type</p>*/
/*                 {% if app.request.attributes.get('_route') == 'admin_zesharcrm_core_lead_create' or object.getSystemTypeString() is empty %}*/
/*                     <div class="clearfix">*/
/*                         {{ render(controller('ZesharCRMCoreBundle:FormItems:leadTypeSelect', {*/
/*                         'activeId': object.getLeadType() is not empty ? object.getLeadType().getId() : null*/
/*                         })) }}*/
/*                     </div>*/
/*                 {% else %}*/
/*                     <span>{{ object.getSystemTypeString() }}</span>*/
/*                 {% endif %}*/
/*             </div>*/
/* */
/*            {# {% if object.getContactCard() is not empty %}*/
/*                 {% if object.getContactCard().getContacts() is not empty %}*/
/*                     {% set callStatusString = object.getContactCard().getCallStatusString()%}*/
/*                     {% if callStatusString == 'Yes' %}*/
/*                         {% if callStatusString == 'No' %}*/
/*                             {% set activeValue = 2 %}*/
/*                         {% elseif callStatusString == 'Neglected' %}*/
/*                             {% set activeValue = 3 %}*/
/*                         {% endif %}*/
/*                             <div class="form-group">*/
/*                                 <p class="label-type">Contact Attempted</p>*/
/*                                 <div class="clearfix">*/
/*                                     {{ render(controller('ZesharCRMCoreBundle:FormItems:contactStatusSelect', {*/
/*                                         'activeValue' : activeValue*/
/*                                     })) }}*/
/*                                 </div>*/
/*                             </div>*/
/*                     {% endif %}*/
/* */
/*                     <div class="form-group row">*/
/*                         <div class="col-md-6">*/
/*                             <label for="type3">Contact Type</label>*/
/*                             {{ render(controller('ZesharCRMCoreBundle:FormItems:contactTypeSelect', {*/
/*                             'activeValue': object.getContactCard().getContacts()*/
/*                             })) }}*/
/*                         </div>*/
/* */
/*                         <div class="col-md-6">*/
/*                             <label for="type3">Contact Result</label>*/
/*                             {{ render(controller('ZesharCRMCoreBundle:FormItems:contactResultSelect', {*/
/*                             })) }}*/
/*                         </div>*/
/*                     </div>{#*/
/*                 {% endif %}*/
/*             {% endif %}#}*/
/* */
/*             <input type="hidden" id="lead_id" name="lead_id" value="{{ object.getId() }}" />*/
/*             {{ include('ZesharCRMCoreBundle:CRUD:DisplayPartial/lead_opportunity_show_block_actions.html.twig') }}*/
/*         </form>*/
/*     </div>*/
/* </div>*/
/* {#{{ include('ZesharCRMCoreBundle:CRUD:DisplayPartial/lead_opportunity_popup_milestone_sold.html.twig') }}#}*/
/* */
