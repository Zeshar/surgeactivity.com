<?php

/* ZesharCRMCoreBundle:CRUD/DisplayPartial:opportunity_show_processing.html.twig */
class __TwigTemplate_5fc0079c7325c770ae268dda7f956486d239a67fc6516c9749528d3ca8430554 extends Twig_Template
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
//                    console.log(redirectUrl);
//                    //console.log('ajax response', serverResponse);
//                    \$(this).find('input').not('[type=\"hidden\"]').val('').trigger('change');
//                    if (!sold) {
//                        if (redirectUrl) {
//                            window.location.replace(redirectUrl);
//                        } else {
//                            window.location.reload(); // todo - insert data without reload
//                        }
//                    }
                    \$(this).find('input').not('[type=\"hidden\"]').val('').trigger('change');
                    window.location.reload(); // todo - insert data without reload

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
                <div class=\"form-group opportunity-processing-inline-select\">
                    ";
        // line 48
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 49
            echo "                        ";
            $context["disabled"] = false;
            // line 50
            echo "                    ";
        } else {
            // line 51
            echo "                        ";
            $context["disabled"] = true;
            // line 52
            echo "                    ";
        }
        // line 53
        echo "                    <label for=\"asign\">Asignee</label>
                    ";
        // line 54
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("ZesharCRMCoreBundle:FormItems:assigneeSelect", array("activeId" => (( !twig_test_empty($this->getAttribute(        // line 55
(isset($context["object"]) ? $context["object"] : null), "getAssignee", array(), "method"))) ? ($this->getAttribute($this->getAttribute((isset($context["object"]) ? $context["object"] : null), "getAssignee", array(), "method"), "getId", array(), "method")) : (null)), "disabled" =>         // line 56
(isset($context["disabled"]) ? $context["disabled"] : null))));
        // line 57
        echo "
                    <input type=\"hidden\" id=\"lead_id\" name=\"lead_id\" value=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["object"]) ? $context["object"] : null), "getId", array(), "method"), "html", null, true);
        echo "\" />
                </div>
                <div class=\"form-group opportunity-processing-inline-select\">
                    <label for=\"compaign\">Priority</label>
                    ";
        // line 62
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("ZesharCRMCoreBundle:FormItems:prioritySelect", array("activeValue" => (( !twig_test_empty($this->getAttribute(        // line 63
(isset($context["object"]) ? $context["object"] : null), "getPriority", array(), "method"))) ? ($this->getAttribute((isset($context["object"]) ? $context["object"] : null), "getPriority", array(), "method")) : (null)))));
        // line 64
        echo "
                </div>
            </div>
            ";
        // line 67
        if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "getLabel", array(), "method") == "Lead")) {
            // line 68
            echo "                <div class=\"form-group\">
                    <p class=\"label-type\">Status</p>
                    <div class=\"clearfix\">
                        ";
            // line 71
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("ZesharCRMCoreBundle:FormItems:leadStatusSelect", array("activeValue" => $this->getAttribute(            // line 72
(isset($context["object"]) ? $context["object"] : null), "getType", array(), "method"))));
            // line 73
            echo "
                    </div>
                </div>
            ";
        }
        // line 77
        echo "            ";
        $context["score"] = $this->getAttribute((isset($context["lead_subject"]) ? $context["lead_subject"] : null), "getLeadScoringByLead", array(0 => (isset($context["object"]) ? $context["object"] : null)), "method");
        // line 78
        echo "            <div class=\"form-horizontal\">
                <div class=\"form-group\">
                    <label class=\"col-sm-3\">Lead Score</label>
                    <div class=\"col-sm-6\">
                        ";
        // line 82
        $this->loadTemplate("ZesharCRMCoreBundle:FormItems:opportunity_show_score.html.twig", "ZesharCRMCoreBundle:CRUD/DisplayPartial:opportunity_show_processing.html.twig", 82)->display(array_merge($context, array("value" => $this->getAttribute((isset($context["score"]) ? $context["score"] : null), "getTotal", array(), "method"))));
        // line 83
        echo "                    </div>

                </div>
            </div>

            <div class=\"form-group\">
                <p class=\"label-type\">Lead Status</p>
                <div class=\"clearfix\">
                    ";
        // line 91
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("ZesharCRMCoreBundle:FormItems:leadStatusSelect", array("activeValue" => $this->getAttribute($this->getAttribute(        // line 92
(isset($context["object"]) ? $context["object"] : null), "getLead", array(), "method"), "getType", array(), "method"))));
        // line 93
        echo "
                </div>
            </div>

            <div class=\"form-group\">
                <p class=\"label-type\">Lead Type</p>
                <div class=\"clearfix\">
                    ";
        // line 100
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("ZesharCRMCoreBundle:FormItems:leadTypeSelect", array("activeValue" => $this->getAttribute(        // line 101
(isset($context["object"]) ? $context["object"] : null), "getLeadType", array(), "method"))));
        // line 102
        echo "
                </div>
            </div>
            <div class=\"form-horizontal\">
                <div class=\"form-group\">
                    <label class=\"col-sm-3\">Closing date</label>
                    <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"closing_date\" class=\"form-control datepicker-processing\" id=\"dp1413988887500\" value=\"";
        // line 109
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["object"]) ? $context["object"] : null), "getClosingDate", array(), "method"), "M d, Y"), "html", null, true);
        echo "\">
                    </div>

                </div>
            </div>
            <div class=\"form-group row\">
                <div class=\"col-md-6\">
                    <label for=\"compaign\">Product</label>
                    ";
        // line 117
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("ZesharCRMCoreBundle:FormItems:leadCategorySelect", array("activeId" => (( !twig_test_empty($this->getAttribute(        // line 118
(isset($context["object"]) ? $context["object"] : null), "getLeadCategory", array(), "method"))) ? ($this->getAttribute($this->getAttribute((isset($context["object"]) ? $context["object"] : null), "getLeadCategory", array(), "method"), "getId", array(), "method")) : (null)))));
        // line 119
        echo "
                </div>
                <div class=\"col-md-6\">
                    <label>Quantity</label>
                    <input type=\"text\" name=\"quantity\" class=\"form-control\" id=\"lead_opportunity_quantity\" value=\"";
        // line 123
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["object"]) ? $context["object"] : null), "quantity", array()), "html", null, true);
        echo "\">
                </div>
            </div>

            ";
        // line 127
        if ( !twig_test_empty($this->getAttribute((isset($context["object"]) ? $context["object"] : null), "getContactCard", array(), "method"))) {
            // line 128
            echo "                ";
            if ( !twig_test_empty($this->getAttribute($this->getAttribute((isset($context["object"]) ? $context["object"] : null), "getContactCard", array(), "method"), "getContacts", array(), "method"))) {
                // line 129
                echo "                    <div class=\"form-group row\">
                        <div class=\"col-md-6\">
                            <label for=\"type3\">Contact Type</label>
                            ";
                // line 132
                echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("ZesharCRMCoreBundle:FormItems:contactTypeSelect", array("activeValue" => $this->getAttribute($this->getAttribute(                // line 133
(isset($context["object"]) ? $context["object"] : null), "getContactCard", array(), "method"), "getContacts", array(), "method"))));
                // line 134
                echo "
                        </div>

                        <div class=\"col-md-6\">
                            <label for=\"type3\">Contact Result</label>
                            ";
                // line 139
                echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("ZesharCRMCoreBundle:FormItems:contactResultSelect", array()));
                // line 140
                echo "
                        </div>
                    </div>
                ";
            }
            // line 144
            echo "            ";
        }
        // line 145
        echo "            
            <input type=\"hidden\" id=\"lead_id\" name=\"lead_id\" value=\"";
        // line 146
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["object"]) ? $context["object"] : null), "getId", array(), "method"), "html", null, true);
        echo "\" />
            ";
        // line 147
        echo twig_include($this->env, $context, "ZesharCRMCoreBundle:CRUD:DisplayPartial/lead_opportunity_show_block_actions.html.twig");
        echo "
        </form>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "ZesharCRMCoreBundle:CRUD/DisplayPartial:opportunity_show_processing.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  233 => 147,  229 => 146,  226 => 145,  223 => 144,  217 => 140,  215 => 139,  208 => 134,  206 => 133,  205 => 132,  200 => 129,  197 => 128,  195 => 127,  188 => 123,  182 => 119,  180 => 118,  179 => 117,  168 => 109,  159 => 102,  157 => 101,  156 => 100,  147 => 93,  145 => 92,  144 => 91,  134 => 83,  132 => 82,  126 => 78,  123 => 77,  117 => 73,  115 => 72,  114 => 71,  109 => 68,  107 => 67,  102 => 64,  100 => 63,  99 => 62,  92 => 58,  89 => 57,  87 => 56,  86 => 55,  85 => 54,  82 => 53,  79 => 52,  76 => 51,  73 => 50,  70 => 49,  68 => 48,  19 => 1,);
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
/* //                    console.log(redirectUrl);*/
/* //                    //console.log('ajax response', serverResponse);*/
/* //                    $(this).find('input').not('[type="hidden"]').val('').trigger('change');*/
/* //                    if (!sold) {*/
/* //                        if (redirectUrl) {*/
/* //                            window.location.replace(redirectUrl);*/
/* //                        } else {*/
/* //                            window.location.reload(); // todo - insert data without reload*/
/* //                        }*/
/* //                    }*/
/*                     $(this).find('input').not('[type="hidden"]').val('').trigger('change');*/
/*                     window.location.reload(); // todo - insert data without reload*/
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
/*                 <div class="form-group opportunity-processing-inline-select">*/
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
/*                 <div class="form-group opportunity-processing-inline-select">*/
/*                     <label for="compaign">Priority</label>*/
/*                     {{ render(controller('ZesharCRMCoreBundle:FormItems:prioritySelect', {*/
/*                     'activeValue': object.getPriority() is not empty ? object.getPriority() : null*/
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
/*             {% set score = lead_subject.getLeadScoringByLead(object) %}*/
/*             <div class="form-horizontal">*/
/*                 <div class="form-group">*/
/*                     <label class="col-sm-3">Lead Score</label>*/
/*                     <div class="col-sm-6">*/
/*                         {% include('ZesharCRMCoreBundle:FormItems:opportunity_show_score.html.twig') with {'value': score.getTotal()} %}*/
/*                     </div>*/
/* */
/*                 </div>*/
/*             </div>*/
/* */
/*             <div class="form-group">*/
/*                 <p class="label-type">Lead Status</p>*/
/*                 <div class="clearfix">*/
/*                     {{ render(controller('ZesharCRMCoreBundle:FormItems:leadStatusSelect', {*/
/*                     'activeValue': object.getLead().getType()*/
/*                     })) }}*/
/*                 </div>*/
/*             </div>*/
/* */
/*             <div class="form-group">*/
/*                 <p class="label-type">Lead Type</p>*/
/*                 <div class="clearfix">*/
/*                     {{ render(controller('ZesharCRMCoreBundle:FormItems:leadTypeSelect', {*/
/*                     'activeValue': object.getLeadType()*/
/*                     })) }}*/
/*                 </div>*/
/*             </div>*/
/*             <div class="form-horizontal">*/
/*                 <div class="form-group">*/
/*                     <label class="col-sm-3">Closing date</label>*/
/*                     <div class="col-sm-6">*/
/*                         <input type="text" name="closing_date" class="form-control datepicker-processing" id="dp1413988887500" value="{{ object.getClosingDate()|date('M d, Y') }}">*/
/*                     </div>*/
/* */
/*                 </div>*/
/*             </div>*/
/*             <div class="form-group row">*/
/*                 <div class="col-md-6">*/
/*                     <label for="compaign">Product</label>*/
/*                     {{ render(controller('ZesharCRMCoreBundle:FormItems:leadCategorySelect', {*/
/*                     'activeId': object.getLeadCategory() is not empty ? object.getLeadCategory().getId() : NULL*/
/*                     })) }}*/
/*                 </div>*/
/*                 <div class="col-md-6">*/
/*                     <label>Quantity</label>*/
/*                     <input type="text" name="quantity" class="form-control" id="lead_opportunity_quantity" value="{{ object.quantity }}">*/
/*                 </div>*/
/*             </div>*/
/* */
/*             {% if object.getContactCard() is not empty %}*/
/*                 {% if object.getContactCard().getContacts() is not empty %}*/
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
/*                     </div>*/
/*                 {% endif %}*/
/*             {% endif %}*/
/*             */
/*             <input type="hidden" id="lead_id" name="lead_id" value="{{ object.getId() }}" />*/
/*             {{ include('ZesharCRMCoreBundle:CRUD:DisplayPartial/lead_opportunity_show_block_actions.html.twig') }}*/
/*         </form>*/
/*     </div>*/
/* </div>*/
/* */
