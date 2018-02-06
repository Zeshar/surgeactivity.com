<?php

/* ZesharCRMCoreBundle:CRUD/DisplayPartial:opportunity_show_prequalification.html.twig */
class __TwigTemplate_3faec0d8382481dccd0c0c5f7d2a82c332b0d39c910c5c15c7b149ac12d80130 extends Twig_Template
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
        echo "<div class=\"custom-block custom-block-prequalification opp-prequalification-show\">
<script type=\"text/javascript\">
    (function(\$) {
        \$(document).ready(function() {
//                \$('#lead_prequalification_save').on('block-data-validate', function(e, params) {
//                    var values = params.values;
//                        //var eventDate = new Date(eventDate);
//                        // @TODO check past date/time
//
//                });
            \$('#lead_prequalification_save').on('block-ajax-return', function(e, serverResponse) {
                //console.log('ajax response', serverResponse);
                \$(this).find('input').not('[type=\"hidden\"]').val('').trigger('change');
                window.location.reload(); // todo - insert data without reload
            });
        });
    })(jQuery);
</script>

<div class=\"custom-head clearfix\">
    <div class=\"custom-menu\">
        <button class=\"up-custom close\"></button>
    </div>
    <h3>Product Details</h3>
</div>

<div id=\"lead_prequalification_save\" class=\"form-column display-block-persistent\" data-controller=\"leads_display\" data-action=\"leadPrequalification\" style=\"display: none;\">

    <div class=\"additional-block\">
        <div class=\"custom-form-head clear-fix\">
            <div class=\"custom-menu\">
                <button class=\"up-custom up-custom-auto close\"></button>
            </div>
            <h3>Auto</h3>
        </div>
        ";
        // line 36
        $context["autos"] = $this->getAttribute((isset($context["object"]) ? $context["object"] : null), "getPrequalificationAutos", array(), "method");
        // line 37
        echo "        ";
        $context["lead"] = $this->env->getExtension('zeshar_crm_core')->checkLeadType((isset($context["object"]) ? $context["object"] : null));
        // line 38
        echo "        ";
        if ( !twig_test_empty((isset($context["autos"]) ? $context["autos"] : null))) {
            // line 39
            echo "            <div class=\"custom-form-content\" data-prototype=' ";
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("ZesharCRMCoreBundle:FormItems:leadPrequalificationAutoBlock"));
            echo " ' style=\"display: none;\">
                <table class=\"table table-condensed table-bordered\">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Year</th>
                        <th>Make</th>
                        <th>Model</th>
                        <th>VIN</th>
                    </tr>
                    </thead>
                    <tbody>
                    ";
            // line 51
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["autos"]) ? $context["autos"] : null));
            foreach ($context['_seq'] as $context["key"] => $context["auto"]) {
                // line 52
                echo "                        <tr>
                            <td>";
                // line 53
                echo twig_escape_filter($this->env, ($context["key"] + 1), "html", null, true);
                echo "</td>
                            <td>";
                // line 54
                echo twig_escape_filter($this->env, $this->getAttribute($context["auto"], "year", array()), "html", null, true);
                echo "</td>
                            <td>";
                // line 55
                echo twig_escape_filter($this->env, $this->getAttribute($context["auto"], "make", array()), "html", null, true);
                echo "</td>
                            <td>";
                // line 56
                echo twig_escape_filter($this->env, $this->getAttribute($context["auto"], "model", array()), "html", null, true);
                echo "</td>
                            <td>";
                // line 57
                echo twig_escape_filter($this->env, $this->getAttribute($context["auto"], "vinNumber", array()), "html", null, true);
                echo "</td>
                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['auto'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 60
            echo "                    <tr>
                    </tr><tr class=\"warning\">
                        <td colspan=\"5\">
                            Previous Carrier
                            <div class=\"row\">
                                <div class=\"col-md-4\">
                                    <label for=\"name\">Name</label>
                                    <span style=\"display: block;\" class=\"form-control-static\">";
            // line 67
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["object"]) ? $context["object"] : null), "getPreviousCarrierName", array(), "method"), "html", null, true);
            echo "</span>
                                </div>

                                <div class=\"col-md-4\">
                                    <label for=\"compaign\">Policy №</label>
                                    <span style=\"display: block;\" class=\"form-control-static\">";
            // line 72
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["object"]) ? $context["object"] : null), "getPreviousCarrierPolice", array(), "method"), "html", null, true);
            echo "</span>
                                </div>
                                <div class=\"col-md-4\">
                                    <label for=\"xdate\">X-Date</label>
                                    <span style=\"display: block;\" class=\"form-control-static\">";
            // line 76
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["object"]) ? $context["object"] : null), "getPreviousCarrierXDate", array(), "method"), "M d, Y"), "html", null, true);
            echo "</span>
                                </div>
                            </div>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        ";
        }
        // line 85
        echo "    </div>

    <div class=\"additional-block\">
        <div class=\"custom-form-head clear-fix\">
            <div class=\"custom-menu\">
                <button class=\"up-custom close\"></button>
            </div>
            <h3>Driver</h3>
        </div>
        ";
        // line 94
        $context["drivers"] = $this->getAttribute((isset($context["object"]) ? $context["object"] : null), "getPrequalificationDrivers", array(), "method");
        // line 95
        echo "        <div class=\"custom-form-content\" style=\"display:none;\" data-prototype=' ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("ZesharCRMCoreBundle:FormItems:leadPrequalificationDriverBlock"));
        echo " ' >
                ";
        // line 96
        if ( !twig_test_empty((isset($context["drivers"]) ? $context["drivers"] : null))) {
            // line 97
            echo "                    <table class=\"table table-condensed table-bordered\">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>DOB</th>
                            <th>License</th>
                            <th>Age licensed</th>
                        </tr>
                        </thead>
                        <tbody>
                        ";
            // line 108
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["drivers"]) ? $context["drivers"] : null));
            foreach ($context['_seq'] as $context["key"] => $context["driver"]) {
                // line 109
                echo "                            <tr>
                                <td rowspan=\"3\">";
                // line 110
                echo twig_escape_filter($this->env, ($context["key"] + 1), "html", null, true);
                echo "</td>
                                <td>";
                // line 111
                echo twig_escape_filter($this->env, $this->getAttribute($context["driver"], "name", array()), "html", null, true);
                echo "</td>
                                <td>";
                // line 112
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["driver"], "dob", array()), "M d, Y"), "html", null, true);
                echo "</td>
                                <td>";
                // line 113
                echo twig_escape_filter($this->env, $this->getAttribute($context["driver"], "license", array()), "html", null, true);
                echo "</td>
                                <td>";
                // line 114
                echo twig_escape_filter($this->env, $this->getAttribute($context["driver"], "ageLicensed", array()), "html", null, true);
                echo "</td>
                            </tr>
                            <tr>
                            </tr>
                            ";
                // line 118
                if (($this->getAttribute($context["driver"], "tickets", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute($context["driver"], "tickets", array())))) {
                    // line 119
                    echo "                                <tr>
                                    <td colspan=\"4\" class=\"row\">
                                        <div class=\"col-md-12\">
                                            <label for=\"compaign\">AtFault / Tickets</label>
                                            ";
                    // line 123
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["driver"], "tickets", array()));
                    $context['loop'] = array(
                      'parent' => $context['_parent'],
                      'index0' => 0,
                      'index'  => 1,
                      'first'  => true,
                    );
                    if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                        $length = count($context['_seq']);
                        $context['loop']['revindex0'] = $length - 1;
                        $context['loop']['revindex'] = $length;
                        $context['loop']['length'] = $length;
                        $context['loop']['last'] = 1 === $length;
                    }
                    foreach ($context['_seq'] as $context["key"] => $context["ticket"]) {
                        // line 124
                        echo "                                                <span class=\"form-control-static\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["ticket"], "getTypeString", array(), "method"), "html", null, true);
                        echo (($this->getAttribute($context["loop"], "last", array())) ? ("") : (","));
                        echo "</span>
                                            ";
                        ++$context['loop']['index0'];
                        ++$context['loop']['index'];
                        $context['loop']['first'] = false;
                        if (isset($context['loop']['length'])) {
                            --$context['loop']['revindex0'];
                            --$context['loop']['revindex'];
                            $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['key'], $context['ticket'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 126
                    echo "                                        </div>
                                    </td>
                                </tr>
                            ";
                }
                // line 130
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['driver'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 131
            echo "                        </tbody>
                    </table>
                ";
        }
        // line 134
        echo "        </div>
    </div>

    <div class=\"additional-block last\">
        <div class=\"custom-form-head clear-fix\">
            <div class=\"custom-menu\">
                <button class=\"up-custom close\"></button>
            </div>
            <h3>Insured Address</h3>
        </div>
        ";
        // line 144
        $context["insuredAddresses"] = $this->getAttribute((isset($context["object"]) ? $context["object"] : null), "getPrequalificationInsuredAddresses", array(), "method");
        // line 145
        echo "        <div class=\"custom-form-content\" data-prototype=' ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("ZesharCRMCoreBundle:FormItems:leadPrequalificationInsuredAddressBlock"));
        echo " ' style=\"display: none;\" >
            ";
        // line 146
        if ( !twig_test_empty((isset($context["insuredAddresses"]) ? $context["insuredAddresses"] : null))) {
            // line 147
            echo "                <table class=\"table table-condensed table-bordered  \">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Address</th>
                            <th>City</th>
                            <th>State</th>
                            <th>Zip</th>
                        </tr>
                    </thead>
                    <tbody>
                    ";
            // line 158
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["insuredAddresses"]) ? $context["insuredAddresses"] : null));
            foreach ($context['_seq'] as $context["key"] => $context["insuredAddress"]) {
                // line 159
                echo "                        <tr>
                            <td rowspan=\"4\">";
                // line 160
                echo twig_escape_filter($this->env, ($context["key"] + 1), "html", null, true);
                echo "</td>
                            <td>";
                // line 161
                echo twig_escape_filter($this->env, $this->getAttribute($context["insuredAddress"], "address", array()), "html", null, true);
                echo "</td>
                            <td>";
                // line 162
                echo twig_escape_filter($this->env, $this->getAttribute($context["insuredAddress"], "city", array()), "html", null, true);
                echo "</td>
                            <td>";
                // line 163
                echo twig_escape_filter($this->env, $this->getAttribute($context["insuredAddress"], "state", array()), "html", null, true);
                echo "</td>
                            <td>";
                // line 164
                echo twig_escape_filter($this->env, $this->getAttribute($context["insuredAddress"], "zipCode", array()), "html", null, true);
                echo "</td>
                        </tr>
                        <tr>
                        </tr>
                        <tr>
                            <td colspan=\"4\">
                                <div class=\"\" row=\"\">
                                    <div class=\"col-md-12\">
                                        <span class=\"form-control-static\">";
                // line 172
                echo twig_escape_filter($this->env, $this->getAttribute($context["insuredAddress"], "getTypeString", array(), "method"), "html", null, true);
                echo "</span>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                        </tr>
                        <tr class=\"warning\">
                            <td colspan=\"5\">
                                Previous Carrier
                                <div class=\"row\">
                                    <div class=\"col-md-4\">
                                        <label for=\"name\">Name</label>
                                        <span style=\"display: block;\" class=\"form-control-static\">";
                // line 185
                echo twig_escape_filter($this->env, $this->getAttribute($context["insuredAddress"], "previousCarrierName", array()), "html", null, true);
                echo "</span>
                                    </div>

                                    <div class=\"col-md-4\">
                                        <label for=\"compaign\">Policy №</label>
                                        <span style=\"display: block;\" class=\"form-control-static\">";
                // line 190
                echo twig_escape_filter($this->env, $this->getAttribute($context["insuredAddress"], "previousCarrierPolice", array()), "html", null, true);
                echo "</span>
                                    </div>
                                    <div class=\"col-md-4\">
                                        <label for=\"xdate\">X-Date</label>
                                        <span style=\"display: block;\" class=\"form-control-static\">";
                // line 194
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["insuredAddress"], "previousCarrierXDate", array()), "M d, Y"), "html", null, true);
                echo "</span>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['insuredAddress'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 200
            echo "                    </tbody>
                </table>
            ";
        }
        // line 203
        echo "        </div>
    </div>
    <input type=\"hidden\" id=\"lead_id\" name=\"lead_id\" value=\"";
        // line 205
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["object"]) ? $context["object"] : null), "getId", array(), "method"), "html", null, true);
        echo "\" />
    <div class=\"show-display-per-block-actions\" style=\"margin-bottom: 15px;\">
        <button class=\"btn btn-success\">Edit</button>
    </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "ZesharCRMCoreBundle:CRUD/DisplayPartial:opportunity_show_prequalification.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  391 => 205,  387 => 203,  382 => 200,  370 => 194,  363 => 190,  355 => 185,  339 => 172,  328 => 164,  324 => 163,  320 => 162,  316 => 161,  312 => 160,  309 => 159,  305 => 158,  292 => 147,  290 => 146,  285 => 145,  283 => 144,  271 => 134,  266 => 131,  260 => 130,  254 => 126,  236 => 124,  219 => 123,  213 => 119,  211 => 118,  204 => 114,  200 => 113,  196 => 112,  192 => 111,  188 => 110,  185 => 109,  181 => 108,  168 => 97,  166 => 96,  161 => 95,  159 => 94,  148 => 85,  136 => 76,  129 => 72,  121 => 67,  112 => 60,  103 => 57,  99 => 56,  95 => 55,  91 => 54,  87 => 53,  84 => 52,  80 => 51,  64 => 39,  61 => 38,  58 => 37,  56 => 36,  19 => 1,);
    }
}
/* <div class="custom-block custom-block-prequalification opp-prequalification-show">*/
/* <script type="text/javascript">*/
/*     (function($) {*/
/*         $(document).ready(function() {*/
/* //                $('#lead_prequalification_save').on('block-data-validate', function(e, params) {*/
/* //                    var values = params.values;*/
/* //                        //var eventDate = new Date(eventDate);*/
/* //                        // @TODO check past date/time*/
/* //*/
/* //                });*/
/*             $('#lead_prequalification_save').on('block-ajax-return', function(e, serverResponse) {*/
/*                 //console.log('ajax response', serverResponse);*/
/*                 $(this).find('input').not('[type="hidden"]').val('').trigger('change');*/
/*                 window.location.reload(); // todo - insert data without reload*/
/*             });*/
/*         });*/
/*     })(jQuery);*/
/* </script>*/
/* */
/* <div class="custom-head clearfix">*/
/*     <div class="custom-menu">*/
/*         <button class="up-custom close"></button>*/
/*     </div>*/
/*     <h3>Product Details</h3>*/
/* </div>*/
/* */
/* <div id="lead_prequalification_save" class="form-column display-block-persistent" data-controller="leads_display" data-action="leadPrequalification" style="display: none;">*/
/* */
/*     <div class="additional-block">*/
/*         <div class="custom-form-head clear-fix">*/
/*             <div class="custom-menu">*/
/*                 <button class="up-custom up-custom-auto close"></button>*/
/*             </div>*/
/*             <h3>Auto</h3>*/
/*         </div>*/
/*         {% set autos = object.getPrequalificationAutos() %}*/
/*         {% set lead = object|lead %}*/
/*         {% if(autos is not empty) %}*/
/*             <div class="custom-form-content" data-prototype=' {{ render(controller('ZesharCRMCoreBundle:FormItems:leadPrequalificationAutoBlock')) }} ' style="display: none;">*/
/*                 <table class="table table-condensed table-bordered">*/
/*                     <thead>*/
/*                     <tr>*/
/*                         <th>#</th>*/
/*                         <th>Year</th>*/
/*                         <th>Make</th>*/
/*                         <th>Model</th>*/
/*                         <th>VIN</th>*/
/*                     </tr>*/
/*                     </thead>*/
/*                     <tbody>*/
/*                     {% for key, auto in autos %}*/
/*                         <tr>*/
/*                             <td>{{ key+1 }}</td>*/
/*                             <td>{{ auto.year }}</td>*/
/*                             <td>{{ auto.make }}</td>*/
/*                             <td>{{ auto.model }}</td>*/
/*                             <td>{{ auto.vinNumber }}</td>*/
/*                         </tr>*/
/*                     {% endfor %}*/
/*                     <tr>*/
/*                     </tr><tr class="warning">*/
/*                         <td colspan="5">*/
/*                             Previous Carrier*/
/*                             <div class="row">*/
/*                                 <div class="col-md-4">*/
/*                                     <label for="name">Name</label>*/
/*                                     <span style="display: block;" class="form-control-static">{{ object.getPreviousCarrierName() }}</span>*/
/*                                 </div>*/
/* */
/*                                 <div class="col-md-4">*/
/*                                     <label for="compaign">Policy №</label>*/
/*                                     <span style="display: block;" class="form-control-static">{{ object.getPreviousCarrierPolice() }}</span>*/
/*                                 </div>*/
/*                                 <div class="col-md-4">*/
/*                                     <label for="xdate">X-Date</label>*/
/*                                     <span style="display: block;" class="form-control-static">{{ object.getPreviousCarrierXDate()|date('M d, Y') }}</span>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </td>*/
/*                     </tr>*/
/*                     </tbody>*/
/*                 </table>*/
/*             </div>*/
/*         {% endif %}*/
/*     </div>*/
/* */
/*     <div class="additional-block">*/
/*         <div class="custom-form-head clear-fix">*/
/*             <div class="custom-menu">*/
/*                 <button class="up-custom close"></button>*/
/*             </div>*/
/*             <h3>Driver</h3>*/
/*         </div>*/
/*         {% set drivers = object.getPrequalificationDrivers() %}*/
/*         <div class="custom-form-content" style="display:none;" data-prototype=' {{ render(controller('ZesharCRMCoreBundle:FormItems:leadPrequalificationDriverBlock')) }} ' >*/
/*                 {% if(drivers is not empty ) %}*/
/*                     <table class="table table-condensed table-bordered">*/
/*                         <thead>*/
/*                         <tr>*/
/*                             <th>#</th>*/
/*                             <th>Name</th>*/
/*                             <th>DOB</th>*/
/*                             <th>License</th>*/
/*                             <th>Age licensed</th>*/
/*                         </tr>*/
/*                         </thead>*/
/*                         <tbody>*/
/*                         {% for key, driver in drivers %}*/
/*                             <tr>*/
/*                                 <td rowspan="3">{{ key+1 }}</td>*/
/*                                 <td>{{ driver.name }}</td>*/
/*                                 <td>{{ driver.dob|date('M d, Y') }}</td>*/
/*                                 <td>{{ driver.license }}</td>*/
/*                                 <td>{{ driver.ageLicensed }}</td>*/
/*                             </tr>*/
/*                             <tr>*/
/*                             </tr>*/
/*                             {% if driver.tickets is defined and driver.tickets is not empty %}*/
/*                                 <tr>*/
/*                                     <td colspan="4" class="row">*/
/*                                         <div class="col-md-12">*/
/*                                             <label for="compaign">AtFault / Tickets</label>*/
/*                                             {% for key, ticket in driver.tickets %}*/
/*                                                 <span class="form-control-static">{{ ticket.getTypeString() }}{{ loop.last ? '' : ',' }}</span>*/
/*                                             {% endfor %}*/
/*                                         </div>*/
/*                                     </td>*/
/*                                 </tr>*/
/*                             {% endif %}*/
/*                         {% endfor %}*/
/*                         </tbody>*/
/*                     </table>*/
/*                 {% endif %}*/
/*         </div>*/
/*     </div>*/
/* */
/*     <div class="additional-block last">*/
/*         <div class="custom-form-head clear-fix">*/
/*             <div class="custom-menu">*/
/*                 <button class="up-custom close"></button>*/
/*             </div>*/
/*             <h3>Insured Address</h3>*/
/*         </div>*/
/*         {% set insuredAddresses = object.getPrequalificationInsuredAddresses() %}*/
/*         <div class="custom-form-content" data-prototype=' {{ render(controller('ZesharCRMCoreBundle:FormItems:leadPrequalificationInsuredAddressBlock')) }} ' style="display: none;" >*/
/*             {% if(insuredAddresses is not empty ) %}*/
/*                 <table class="table table-condensed table-bordered  ">*/
/*                     <thead>*/
/*                         <tr>*/
/*                             <th>#</th>*/
/*                             <th>Address</th>*/
/*                             <th>City</th>*/
/*                             <th>State</th>*/
/*                             <th>Zip</th>*/
/*                         </tr>*/
/*                     </thead>*/
/*                     <tbody>*/
/*                     {% for key, insuredAddress in insuredAddresses %}*/
/*                         <tr>*/
/*                             <td rowspan="4">{{ key+1 }}</td>*/
/*                             <td>{{ insuredAddress.address }}</td>*/
/*                             <td>{{ insuredAddress.city }}</td>*/
/*                             <td>{{ insuredAddress.state }}</td>*/
/*                             <td>{{ insuredAddress.zipCode }}</td>*/
/*                         </tr>*/
/*                         <tr>*/
/*                         </tr>*/
/*                         <tr>*/
/*                             <td colspan="4">*/
/*                                 <div class="" row="">*/
/*                                     <div class="col-md-12">*/
/*                                         <span class="form-control-static">{{ insuredAddress.getTypeString() }}</span>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </td>*/
/*                         </tr>*/
/*                         <tr>*/
/*                         </tr>*/
/*                         <tr class="warning">*/
/*                             <td colspan="5">*/
/*                                 Previous Carrier*/
/*                                 <div class="row">*/
/*                                     <div class="col-md-4">*/
/*                                         <label for="name">Name</label>*/
/*                                         <span style="display: block;" class="form-control-static">{{ insuredAddress.previousCarrierName }}</span>*/
/*                                     </div>*/
/* */
/*                                     <div class="col-md-4">*/
/*                                         <label for="compaign">Policy №</label>*/
/*                                         <span style="display: block;" class="form-control-static">{{ insuredAddress.previousCarrierPolice }}</span>*/
/*                                     </div>*/
/*                                     <div class="col-md-4">*/
/*                                         <label for="xdate">X-Date</label>*/
/*                                         <span style="display: block;" class="form-control-static">{{ insuredAddress.previousCarrierXDate|date('M d, Y') }}</span>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </td>*/
/*                         </tr>*/
/*                     {% endfor %}*/
/*                     </tbody>*/
/*                 </table>*/
/*             {% endif %}*/
/*         </div>*/
/*     </div>*/
/*     <input type="hidden" id="lead_id" name="lead_id" value="{{ object.getId() }}" />*/
/*     <div class="show-display-per-block-actions" style="margin-bottom: 15px;">*/
/*         <button class="btn btn-success">Edit</button>*/
/*     </div>*/
/*     </div>*/
/* </div>*/
