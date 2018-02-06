<?php

/* @ZesharCRMCore/CRUD/DisplayPartial/lead_opportunity_show_processing.html.twig.orig */
class __TwigTemplate_1530e176845821bc86fcc2c8bac3a0f11a62d0484fa8e8a64d98fed5b85e59f0 extends Twig_Template
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
                    var serverResponseObject = JSON.parse(serverResponse);
                    var redirectUrl = serverResponseObject.redirectUrl;
                    console.log(redirectUrl);
                    //console.log('ajax response', serverResponse);
                    \$(this).find('input').not('[type=\"hidden\"]').val('').trigger('change');
                    if (redirectUrl) {
                        window.location.replace(redirectUrl);
                    } else {
                        window.location.reload(); // todo - insert data without reload
                    }
                });
            });
        })(jQuery);
    </script>
    <div id=\"lead_processing_save\" class=\"form-column display-block-persistent\" data-controller=\"leads_display\" data-action=\"leadProcessing\">
        <form>
            <div class=\"form-group\">
                <label for=\"source\">Lead Source</label>
                ";
        // line 34
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("ZesharCRMCoreBundle:FormItems:leadSourceSelect", array("activeId" => (( !twig_test_empty($this->getAttribute(        // line 35
(isset($context["object"]) ? $context["object"] : null), "getLeadSource", array(), "method"))) ? ($this->getAttribute($this->getAttribute((isset($context["object"]) ? $context["object"] : null), "getLeadSource", array(), "method"), "getId", array(), "method")) : (null)))));
        // line 36
        echo "
            </div>
            <div class=\"form-group\">
                <label for=\"compaign\">Campaign</label>
                ";
        // line 40
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("ZesharCRMCoreBundle:FormItems:leadCampaignSelect", array("activeId" => (( !twig_test_empty($this->getAttribute(        // line 41
(isset($context["object"]) ? $context["object"] : null), "getLeadCampaign", array(), "method"))) ? ($this->getAttribute($this->getAttribute((isset($context["object"]) ? $context["object"] : null), "getLeadCampaign", array(), "method"), "getId", array(), "method")) : (null)))));
        // line 42
        echo "
            </div>
<<<<<<< HEAD
        </div>
        <div class=\"form-group\">
            <p class=\"label-type\">Milestone</p>
            ";
        // line 48
        if ((($this->getAttribute((isset($context["object"]) ? $context["object"] : null), "getStatus", array()) == 3) || ($this->getAttribute((isset($context["object"]) ? $context["object"] : null), "getStatus", array()) == 4))) {
            // line 49
            echo "
            ";
        } else {
            // line 51
            echo "                <button class=\"btn btn-green-border\" name=\"lead_status\" value=\"1\">Opportunity</button>
                <button class=\"btn btn-green-border\" name=\"lead_status\" value=\"3\">Quoted</button>
                <button class=\"btn btn-green-border\" name=\"lead_status\" value=\"5\">Sold</button>
                <button class=\"btn btn-green-border\" name=\"lead_status\" value=\"4\">Lost</button>
            ";
        }
        // line 56
        echo "        </div>
        <div class=\"additional-block\">
=======
            <!--<div class=\"form-group\">
                <p class=\"label-type\">Lead Type</p>
                <div class=\"clearfix\">
                    <ul class=\"lead-type four-list\">
                        <li>
                            <input type=\"radio\" id=\"new\" name=\"lead_type\" value=\"new\"/>
                            <label for=\"new\" class=\"tile-type notype\">New</label>
                        </li>
                        <li>
                            <input type=\"radio\" id=\"cold\" name=\"lead_type\" value=\"cold\"/>
                            <label for=\"cold\" class=\"tile-type cold\">Cold</label>
                        </li>
                        <li>
                            <input type=\"radio\" id=\"warm\" name=\"lead_type\" value=\"warm\"/>
                            <label for=\"warm\" class=\"tile-type warm\">Warm</label>
                        </li>
                        <li>
                            <input type=\"radio\" id=\"hot\" name=\"lead_type\" value=\"hot\"/>
                            <label for=\"hot\" class=\"tile-type hot\">Hot</label>
                        </li>
                    </ul>
                </div>
            </div>-->
>>>>>>> a2d47b824fd9233a33b60c8e8fa54082221d306c
            <div class=\"form-group\">
                <p class=\"label-type\">Contact Status</p>
                <div class=\"clearfix\">
                    ";
        // line 86
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("ZesharCRMCoreBundle:FormItems:contactStatusSelect", array("activeValue" => (( !twig_test_empty($this->getAttribute(        // line 87
(isset($context["object"]) ? $context["object"] : null), "getContactCard", array(), "method"))) ? ((( !twig_test_empty($this->getAttribute($this->getAttribute((isset($context["object"]) ? $context["object"] : null), "getContactCard", array(), "method"), "getPhone", array(), "method"))) ? ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["object"]) ? $context["object"] : null), "getContactCard", array(), "method"), "getPhone", array(), "method"), "getDonotCall", array(), "method")) : (null))) : (null)))));
        // line 88
        echo "
                </div>
<<<<<<< HEAD
                <div class=\"custom-form-content\">
                    ";
        // line 92
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("ZesharCRMCoreBundle:FormItems:leadScoring", array("object" =>         // line 93
(isset($context["object"]) ? $context["object"] : null))));
        // line 94
        echo "
                </div>
            </div>
        </div>
        <input type=\"hidden\" id=\"lead_id\" name=\"lead_id\" value=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["object"]) ? $context["object"] : null), "getId", array(), "method"), "html", null, true);
        echo "\" />
        ";
        // line 99
        echo twig_include($this->env, $context, "ZesharCRMCoreBundle:CRUD:DisplayPartial/lead_opportunity_show_block_actions.html.twig");
        echo "
=======
            </div>
            <div class=\"form-group\">
                <p class=\"label-type\">Status</p>
                <div class=\"clearfix\">
                    ";
        // line 105
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("ZesharCRMCoreBundle:FormItems:leadStatusSelect", array("activeValue" => $this->getAttribute(        // line 106
(isset($context["object"]) ? $context["object"] : null), "getType", array(), "method"))));
        // line 107
        echo "
                </div>
            </div>
            <div class=\"form-group\">
                <p class=\"label-type\">Milestone</p>
                ";
        // line 112
        if ((($this->getAttribute((isset($context["object"]) ? $context["object"] : null), "getStatus", array()) == 3) || ($this->getAttribute((isset($context["object"]) ? $context["object"] : null), "getStatus", array()) == 4))) {
            // line 113
            echo "
                ";
        } else {
            // line 115
            echo "                    <button class=\"btn btn-green-border\" name=\"lead_status\" value=\"1\">Opportunity</button>
                    <button class=\"btn btn-green-border\" name=\"lead_status\" value=\"3\">Quoted</button>
                    <button class=\"btn btn-green-border\" name=\"lead_status\" value=\"5\">Sold</button>
                    <button class=\"btn btn-green-border\" name=\"lead_status\" value=\"4\">Lost</button>
                ";
        }
        // line 120
        echo "            </div>
            <!--<div class=\"additional-block\">
                <div class=\"form-group\">
                    <div class=\"custom-form-head clear-fix\">
                        <div class=\"custom-menu\">
                            <button class=\"up-custom\"></button>
                        </div>
                        <p class=\"label-type\">Lead Score</p>
                    </div>
                    <div class=\"custom-form-content\">
                        <ul class=\"criteria-list\">
                        <li>
                            <b>Criteria *</b>
                            <ul>
                                <li>
                                    Base criteria 2
                                    <ul>
                                        <li>
                                            <label>
                                                <input type=\"checkbox\"/>Quick Quote Info etc.
                                            </label>
                                        </li>
                                        <li>
                                            <label>
                                                <input type=\"checkbox\"/>Driver's License
                                            </label>
                                        </li>
                                        <li>
                                            <label>
                                                <input type=\"checkbox\"/>Social Security....
                                            </label>
                                        </li>
                                        <li>
                                            <label>
                                                <input type=\"checkbox\"/>Adress captured
                                            </label>
                                        </li>
                                        <li>
                                            <label>
                                                <input type=\"checkbox\"/>OK or Run Credit?
                                            </label>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <b>Total *</b><br/>
                            <input type=\"text\" value=\"25\"/>
                        </li>
                    </ul>
                    </div>
                </div>
            </div>-->
            <input type=\"hidden\" id=\"lead_id\" name=\"lead_id\" value=\"";
        // line 174
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["object"]) ? $context["object"] : null), "getId", array(), "method"), "html", null, true);
        echo "\" />
            ";
        // line 175
        echo twig_include($this->env, $context, "ZesharCRMCoreBundle:CRUD:DisplayPartial/lead_opportunity_show_block_actions.html.twig");
        echo "
        </form>
>>>>>>> a2d47b824fd9233a33b60c8e8fa54082221d306c
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@ZesharCRMCore/CRUD/DisplayPartial/lead_opportunity_show_processing.html.twig.orig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  233 => 175,  229 => 174,  173 => 120,  166 => 115,  162 => 113,  160 => 112,  153 => 107,  151 => 106,  150 => 105,  141 => 99,  137 => 98,  131 => 94,  129 => 93,  128 => 92,  122 => 88,  120 => 87,  119 => 86,  87 => 56,  80 => 51,  76 => 49,  74 => 48,  66 => 42,  64 => 41,  63 => 40,  57 => 36,  55 => 35,  54 => 34,  19 => 1,);
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
/*                         //var eventDate = new Date(eventDate);*/
/*                         // @TODO check past date/time*/
/* */
/*                 });*/
/*                 $('#lead_processing_save').on('block-ajax-return', function(e, serverResponse) {*/
/*                     var serverResponseObject = JSON.parse(serverResponse);*/
/*                     var redirectUrl = serverResponseObject.redirectUrl;*/
/*                     console.log(redirectUrl);*/
/*                     //console.log('ajax response', serverResponse);*/
/*                     $(this).find('input').not('[type="hidden"]').val('').trigger('change');*/
/*                     if (redirectUrl) {*/
/*                         window.location.replace(redirectUrl);*/
/*                     } else {*/
/*                         window.location.reload(); // todo - insert data without reload*/
/*                     }*/
/*                 });*/
/*             });*/
/*         })(jQuery);*/
/*     </script>*/
/*     <div id="lead_processing_save" class="form-column display-block-persistent" data-controller="leads_display" data-action="leadProcessing">*/
/*         <form>*/
/*             <div class="form-group">*/
/*                 <label for="source">Lead Source</label>*/
/*                 {{ render(controller('ZesharCRMCoreBundle:FormItems:leadSourceSelect', {*/
/*                     'activeId': object.getLeadSource() is not empty ? object.getLeadSource().getId() : null*/
/*                 })) }}*/
/*             </div>*/
/*             <div class="form-group">*/
/*                 <label for="compaign">Campaign</label>*/
/*                 {{ render(controller('ZesharCRMCoreBundle:FormItems:leadCampaignSelect', {*/
/*                     'activeId': object.getLeadCampaign() is not empty ? object.getLeadCampaign().getId() : null*/
/*                 })) }}*/
/*             </div>*/
/* <<<<<<< HEAD*/
/*         </div>*/
/*         <div class="form-group">*/
/*             <p class="label-type">Milestone</p>*/
/*             {% if object.getStatus == 3 or  object.getStatus == 4 %}*/
/* */
/*             {% else %}*/
/*                 <button class="btn btn-green-border" name="lead_status" value="1">Opportunity</button>*/
/*                 <button class="btn btn-green-border" name="lead_status" value="3">Quoted</button>*/
/*                 <button class="btn btn-green-border" name="lead_status" value="5">Sold</button>*/
/*                 <button class="btn btn-green-border" name="lead_status" value="4">Lost</button>*/
/*             {% endif %}*/
/*         </div>*/
/*         <div class="additional-block">*/
/* =======*/
/*             <!--<div class="form-group">*/
/*                 <p class="label-type">Lead Type</p>*/
/*                 <div class="clearfix">*/
/*                     <ul class="lead-type four-list">*/
/*                         <li>*/
/*                             <input type="radio" id="new" name="lead_type" value="new"/>*/
/*                             <label for="new" class="tile-type notype">New</label>*/
/*                         </li>*/
/*                         <li>*/
/*                             <input type="radio" id="cold" name="lead_type" value="cold"/>*/
/*                             <label for="cold" class="tile-type cold">Cold</label>*/
/*                         </li>*/
/*                         <li>*/
/*                             <input type="radio" id="warm" name="lead_type" value="warm"/>*/
/*                             <label for="warm" class="tile-type warm">Warm</label>*/
/*                         </li>*/
/*                         <li>*/
/*                             <input type="radio" id="hot" name="lead_type" value="hot"/>*/
/*                             <label for="hot" class="tile-type hot">Hot</label>*/
/*                         </li>*/
/*                     </ul>*/
/*                 </div>*/
/*             </div>-->*/
/* >>>>>>> a2d47b824fd9233a33b60c8e8fa54082221d306c*/
/*             <div class="form-group">*/
/*                 <p class="label-type">Contact Status</p>*/
/*                 <div class="clearfix">*/
/*                     {{ render(controller('ZesharCRMCoreBundle:FormItems:contactStatusSelect', {*/
/*                         'activeValue': object.getContactCard() is not empty ? (object.getContactCard().getPhone() is not empty ? object.getContactCard().getPhone().getDonotCall() : NULL) : NULL*/
/*                     })) }}*/
/*                 </div>*/
/* <<<<<<< HEAD*/
/*                 <div class="custom-form-content">*/
/*                     {{ render(controller('ZesharCRMCoreBundle:FormItems:leadScoring', {*/
/*                     'object': object*/
/*                     })) }}*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <input type="hidden" id="lead_id" name="lead_id" value="{{ object.getId() }}" />*/
/*         {{ include('ZesharCRMCoreBundle:CRUD:DisplayPartial/lead_opportunity_show_block_actions.html.twig') }}*/
/* =======*/
/*             </div>*/
/*             <div class="form-group">*/
/*                 <p class="label-type">Status</p>*/
/*                 <div class="clearfix">*/
/*                     {{ render(controller('ZesharCRMCoreBundle:FormItems:leadStatusSelect', {*/
/*                         'activeValue': object.getType()*/
/*                     })) }}*/
/*                 </div>*/
/*             </div>*/
/*             <div class="form-group">*/
/*                 <p class="label-type">Milestone</p>*/
/*                 {% if object.getStatus == 3 or  object.getStatus == 4 %}*/
/* */
/*                 {% else %}*/
/*                     <button class="btn btn-green-border" name="lead_status" value="1">Opportunity</button>*/
/*                     <button class="btn btn-green-border" name="lead_status" value="3">Quoted</button>*/
/*                     <button class="btn btn-green-border" name="lead_status" value="5">Sold</button>*/
/*                     <button class="btn btn-green-border" name="lead_status" value="4">Lost</button>*/
/*                 {% endif %}*/
/*             </div>*/
/*             <!--<div class="additional-block">*/
/*                 <div class="form-group">*/
/*                     <div class="custom-form-head clear-fix">*/
/*                         <div class="custom-menu">*/
/*                             <button class="up-custom"></button>*/
/*                         </div>*/
/*                         <p class="label-type">Lead Score</p>*/
/*                     </div>*/
/*                     <div class="custom-form-content">*/
/*                         <ul class="criteria-list">*/
/*                         <li>*/
/*                             <b>Criteria *</b>*/
/*                             <ul>*/
/*                                 <li>*/
/*                                     Base criteria 2*/
/*                                     <ul>*/
/*                                         <li>*/
/*                                             <label>*/
/*                                                 <input type="checkbox"/>Quick Quote Info etc.*/
/*                                             </label>*/
/*                                         </li>*/
/*                                         <li>*/
/*                                             <label>*/
/*                                                 <input type="checkbox"/>Driver's License*/
/*                                             </label>*/
/*                                         </li>*/
/*                                         <li>*/
/*                                             <label>*/
/*                                                 <input type="checkbox"/>Social Security....*/
/*                                             </label>*/
/*                                         </li>*/
/*                                         <li>*/
/*                                             <label>*/
/*                                                 <input type="checkbox"/>Adress captured*/
/*                                             </label>*/
/*                                         </li>*/
/*                                         <li>*/
/*                                             <label>*/
/*                                                 <input type="checkbox"/>OK or Run Credit?*/
/*                                             </label>*/
/*                                         </li>*/
/*                                     </ul>*/
/*                                 </li>*/
/*                             </ul>*/
/*                         </li>*/
/*                         <li>*/
/*                             <b>Total *</b><br/>*/
/*                             <input type="text" value="25"/>*/
/*                         </li>*/
/*                     </ul>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>-->*/
/*             <input type="hidden" id="lead_id" name="lead_id" value="{{ object.getId() }}" />*/
/*             {{ include('ZesharCRMCoreBundle:CRUD:DisplayPartial/lead_opportunity_show_block_actions.html.twig') }}*/
/*         </form>*/
/* >>>>>>> a2d47b824fd9233a33b60c8e8fa54082221d306c*/
/*     </div>*/
/* </div>*/
/* */
