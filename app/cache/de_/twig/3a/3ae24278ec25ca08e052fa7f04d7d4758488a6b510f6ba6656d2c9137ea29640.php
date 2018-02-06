<?php

/* ZesharCRMCoreBundle:CRUD/DisplayPartial:opportunity_edit_prequalification.html.twig */
class __TwigTemplate_c4a07db271b9c9724c0f8e562741104bf2c727c956bb1dd64827401f19e8f1fc extends Twig_Template
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
        $__internal_b4e7e5896314fa85d69ba762c07f12014870a6c117bfcd3983d2cc3a372517eb = $this->env->getExtension("native_profiler");
        $__internal_b4e7e5896314fa85d69ba762c07f12014870a6c117bfcd3983d2cc3a372517eb->enter($__internal_b4e7e5896314fa85d69ba762c07f12014870a6c117bfcd3983d2cc3a372517eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ZesharCRMCoreBundle:CRUD/DisplayPartial:opportunity_edit_prequalification.html.twig"));

        // line 1
        echo "<div class=\"custom-block custom-block-prequalification opp-prequalification-edit\" style=\"display: none;\">
    <script type=\"text/javascript\">
        (function(\$) {
            \$(document).ready(function() {
//                \$('#lead_prequalification_save').on('block-data-validate', function(e, params) {
//                    var values = params.values;
//                        //var eventDate = new Date(eventDate);
//                        // @TODO check past date/time
//
//                });
                \$('#lead_prequalification_edit').on('block-ajax-return', function(e, serverResponse) {
                    console.log('ajax response', serverResponse);
//                    \$(this).find('input').not('[type=\"hidden\"]').val('').trigger('change');
                    window.location.reload(); // todo - insert data without reload
                });
            });
        })(jQuery);
    </script>

    <div class=\"custom-head clearfix\">
        <div class=\"custom-menu\">
            <button class=\"up-custom\"></button>
        </div>
        <h3>Product Details</h3>
    </div>

    <div id=\"lead_prequalification_edit\" class=\"form-column display-block-persistent\" data-controller=\"leads_display\" data-action=\"leadPrequalification\" style=\"display: none;\">
        <div class=\"custom-form-head clear-fix\">
            <div class=\"custom-menu\">
                <button class=\"up-custom up-custom-auto close\"></button>
            </div>
            <h3>Auto</h3>
        </div>
        ";
        // line 34
        $context["autos"] = $this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "getPrequalificationAutos", array(), "method");
        // line 35
        echo "        ";
        $context["opportunity"] = $this->env->getExtension('zeshar_crm_core')->checkOpportunityType((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")));
        // line 36
        echo "        ";
        $context["lead"] = $this->env->getExtension('zeshar_crm_core')->checkLeadType((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")));
        // line 37
        echo "        <div style=\"display:none;\">
            <div class=\"custom-form-content\" data-prototype=' ";
        // line 38
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("ZesharCRMCoreBundle:FormItems:leadPrequalificationAutoBlock"));
        echo " '>
                ";
        // line 39
        if (twig_test_empty((isset($context["autos"]) ? $context["autos"] : $this->getContext($context, "autos")))) {
            // line 40
            echo "                    ";
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("ZesharCRMCoreBundle:FormItems:leadPrequalificationAutoBlock", array("last" => true, "single" => true, "first" => true)));
            // line 44
            echo "

                ";
        } else {
            // line 47
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["autos"]) ? $context["autos"] : $this->getContext($context, "autos")));
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
            foreach ($context['_seq'] as $context["_key"] => $context["auto"]) {
                // line 48
                echo "
                        ";
                // line 49
                if ($this->getAttribute($context["loop"], "last", array())) {
                    // line 50
                    echo "                            ";
                    $context["last"] = true;
                    // line 51
                    echo "                        ";
                } else {
                    // line 52
                    echo "                            ";
                    $context["last"] = false;
                    // line 53
                    echo "                        ";
                }
                // line 54
                echo "
                        ";
                // line 55
                if ($this->getAttribute($context["loop"], "first", array())) {
                    // line 56
                    echo "                            ";
                    $context["first"] = true;
                    // line 57
                    echo "                        ";
                } else {
                    // line 58
                    echo "                            ";
                    $context["first"] = false;
                    // line 59
                    echo "                        ";
                }
                // line 60
                echo "
                        ";
                // line 61
                $context["single"] = false;
                // line 62
                echo "
                        ";
                // line 63
                echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("ZesharCRMCoreBundle:FormItems:leadPrequalificationAutoBlock", array("last" =>                 // line 64
(isset($context["last"]) ? $context["last"] : $this->getContext($context, "last")), "first" =>                 // line 65
(isset($context["first"]) ? $context["first"] : $this->getContext($context, "first")), "single" =>                 // line 66
(isset($context["single"]) ? $context["single"] : $this->getContext($context, "single")), "autoYear" => $this->getAttribute(                // line 67
$context["auto"], "year", array()), "autoMake" => $this->getAttribute(                // line 68
$context["auto"], "make", array()), "autoModel" => $this->getAttribute(                // line 69
$context["auto"], "model", array()), "autoVinNumber" => $this->getAttribute(                // line 70
$context["auto"], "vinNumber", array()), "id" => $this->getAttribute(                // line 71
$context["auto"], "id", array()))));
                // line 72
                echo "
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['auto'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 74
            echo "                ";
        }
        // line 75
        echo "            </div>
            <div class=\"custom-form-content-auto-previous\">
                <label for=\"source\" style=\"padding-top: 10px;\">Previous carrier</label>
                <div class=\"form-group\">
                    <label for=\"name\">Name</label>
                    <input type=\"text\" name=\"previous_carrier_name\" id=\"name\" class=\"form-control\" value=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "getPreviousCarrierName", array(), "method"), "html", null, true);
        echo "\" />
                </div>
                <div class=\"form-group\">
                    <label for=\"compaign\">Policy №</label>
                    <input type=\"text\" name=\"previous_carrier_police\" id=\"compaign\" class=\"form-control\" value=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "getPreviousCarrierPolice", array(), "method"), "html", null, true);
        echo "\" />
                </div>
                <div class=\"form-group\">
                    <label for=\"xdate\">X-Date</label>
                    <input type=\"text\" id=\"xdate\" class=\"form-control datepicker-product\" name=\"pckr1\"  value=\"";
        // line 88
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "getPreviousCarrierXDate", array(), "method"), "M d, Y"), "html", null, true);
        echo "\" />
                </div>
            </div>
        </div>

        <div class=\"additional-block prequalification-drive-group\">
            <div class=\"custom-form-head clear-fix\">
                <div class=\"custom-menu\">
                    <button class=\"up-custom close\"></button>
                </div>
                <h3>Driver</h3>
            </div>
            ";
        // line 100
        $context["drivers"] = $this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "getPrequalificationDrivers", array(), "method");
        // line 101
        echo "            <div class=\"custom-form-content\" style=\"display:none;\" data-prototype=' ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("ZesharCRMCoreBundle:FormItems:leadPrequalificationDriverBlock"));
        echo " ' >
                ";
        // line 102
        if (twig_test_empty((isset($context["drivers"]) ? $context["drivers"] : $this->getContext($context, "drivers")))) {
            // line 103
            echo "
                    ";
            // line 104
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("ZesharCRMCoreBundle:FormItems:leadPrequalificationDriverBlock", array("last" => true, "single" => true)));
            // line 107
            echo "
                ";
        } else {
            // line 109
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["drivers"]) ? $context["drivers"] : $this->getContext($context, "drivers")));
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
            foreach ($context['_seq'] as $context["_key"] => $context["driver"]) {
                // line 110
                echo "
                        ";
                // line 111
                if ($this->getAttribute($context["loop"], "last", array())) {
                    // line 112
                    echo "                            ";
                    $context["last"] = true;
                    // line 113
                    echo "                        ";
                } else {
                    // line 114
                    echo "                            ";
                    $context["last"] = false;
                    // line 115
                    echo "                        ";
                }
                // line 116
                echo "
                        ";
                // line 117
                $context["single"] = false;
                // line 118
                echo "
                        ";
                // line 119
                echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("ZesharCRMCoreBundle:FormItems:leadPrequalificationDriverBlock", array("last" =>                 // line 120
(isset($context["last"]) ? $context["last"] : $this->getContext($context, "last")), "single" =>                 // line 121
(isset($context["single"]) ? $context["single"] : $this->getContext($context, "single")), "name" => $this->getAttribute(                // line 122
$context["driver"], "name", array()), "dob" => $this->getAttribute(                // line 123
$context["driver"], "dob", array()), "license" => $this->getAttribute(                // line 124
$context["driver"], "license", array()), "ageLicensed" => $this->getAttribute(                // line 125
$context["driver"], "ageLicensed", array()), "tickets" => $this->getAttribute(                // line 126
$context["driver"], "tickets", array()), "id" => $this->getAttribute(                // line 127
$context["driver"], "id", array()))));
                // line 128
                echo "

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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['driver'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 131
            echo "                ";
        }
        // line 132
        echo "            </div>
        </div>

        <div class=\"additional-block last\">
            <div class=\"custom-form-head clear-fix\">
                <div class=\"custom-menu\">
                    <button class=\"up-custom close\"></button>
                </div>
                <h3>Insured Address</h3>
            </div>
            ";
        // line 142
        $context["insuredAddresses"] = $this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "getPrequalificationInsuredAddresses", array(), "method");
        // line 143
        echo "            <div class=\"custom-form-content\" style=\"display:none;\" data-prototype=' ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("ZesharCRMCoreBundle:FormItems:leadPrequalificationInsuredAddressBlock"));
        echo " ' >
                ";
        // line 144
        if (twig_test_empty((isset($context["insuredAddresses"]) ? $context["insuredAddresses"] : $this->getContext($context, "insuredAddresses")))) {
            // line 145
            echo "                    ";
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("ZesharCRMCoreBundle:FormItems:leadPrequalificationInsuredAddressBlock", array("last" => true, "single" => true)));
            // line 148
            echo "
                ";
        } else {
            // line 150
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["insuredAddresses"]) ? $context["insuredAddresses"] : $this->getContext($context, "insuredAddresses")));
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
            foreach ($context['_seq'] as $context["_key"] => $context["insuredAddress"]) {
                // line 151
                echo "
                        ";
                // line 152
                if ($this->getAttribute($context["loop"], "last", array())) {
                    // line 153
                    echo "                            ";
                    $context["last"] = true;
                    // line 154
                    echo "                        ";
                } else {
                    // line 155
                    echo "                            ";
                    $context["last"] = false;
                    // line 156
                    echo "                        ";
                }
                // line 157
                echo "
                        ";
                // line 158
                $context["single"] = false;
                // line 159
                echo "
                        ";
                // line 160
                echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("ZesharCRMCoreBundle:FormItems:leadPrequalificationInsuredAddressBlock", array("previousCarrierPolice" => $this->getAttribute(                // line 161
$context["insuredAddress"], "previousCarrierPolice", array()), "previousCarrierXDate" => $this->getAttribute(                // line 162
$context["insuredAddress"], "previousCarrierXDate", array()), "previousCarrierName" => $this->getAttribute(                // line 163
$context["insuredAddress"], "previousCarrierName", array()), "last" =>                 // line 164
(isset($context["last"]) ? $context["last"] : $this->getContext($context, "last")), "single" =>                 // line 165
(isset($context["single"]) ? $context["single"] : $this->getContext($context, "single")), "type" => $this->getAttribute(                // line 166
$context["insuredAddress"], "type", array()), "address" => $this->getAttribute(                // line 167
$context["insuredAddress"], "address", array()), "state" => $this->getAttribute(                // line 168
$context["insuredAddress"], "state", array()), "zipCode" => $this->getAttribute(                // line 169
$context["insuredAddress"], "zipCode", array()), "city" => $this->getAttribute(                // line 170
$context["insuredAddress"], "city", array()), "id" => $this->getAttribute(                // line 171
$context["insuredAddress"], "id", array()))));
                // line 172
                echo "

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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['insuredAddress'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 175
            echo "                ";
        }
        // line 176
        echo "            </div>
        </div>
        <input type=\"hidden\" id=\"lead_id\" name=\"lead_id\" value=\"";
        // line 178
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "getId", array(), "method"), "html", null, true);
        echo "\" />
        <input type=\"hidden\" name=\"leadCategory\" value=\"\" />
        ";
        // line 180
        $this->loadTemplate("ZesharCRMCoreBundle:CRUD:DisplayPartial/lead_opportunity_show_block_actions.html.twig", "ZesharCRMCoreBundle:CRUD/DisplayPartial:opportunity_edit_prequalification.html.twig", 180)->display($context);
        // line 181
        echo "    </div>
</div>";
        
        $__internal_b4e7e5896314fa85d69ba762c07f12014870a6c117bfcd3983d2cc3a372517eb->leave($__internal_b4e7e5896314fa85d69ba762c07f12014870a6c117bfcd3983d2cc3a372517eb_prof);

    }

    public function getTemplateName()
    {
        return "ZesharCRMCoreBundle:CRUD/DisplayPartial:opportunity_edit_prequalification.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  410 => 181,  408 => 180,  403 => 178,  399 => 176,  396 => 175,  380 => 172,  378 => 171,  377 => 170,  376 => 169,  375 => 168,  374 => 167,  373 => 166,  372 => 165,  371 => 164,  370 => 163,  369 => 162,  368 => 161,  367 => 160,  364 => 159,  362 => 158,  359 => 157,  356 => 156,  353 => 155,  350 => 154,  347 => 153,  345 => 152,  342 => 151,  324 => 150,  320 => 148,  317 => 145,  315 => 144,  310 => 143,  308 => 142,  296 => 132,  293 => 131,  277 => 128,  275 => 127,  274 => 126,  273 => 125,  272 => 124,  271 => 123,  270 => 122,  269 => 121,  268 => 120,  267 => 119,  264 => 118,  262 => 117,  259 => 116,  256 => 115,  253 => 114,  250 => 113,  247 => 112,  245 => 111,  242 => 110,  224 => 109,  220 => 107,  218 => 104,  215 => 103,  213 => 102,  208 => 101,  206 => 100,  191 => 88,  184 => 84,  177 => 80,  170 => 75,  167 => 74,  152 => 72,  150 => 71,  149 => 70,  148 => 69,  147 => 68,  146 => 67,  145 => 66,  144 => 65,  143 => 64,  142 => 63,  139 => 62,  137 => 61,  134 => 60,  131 => 59,  128 => 58,  125 => 57,  122 => 56,  120 => 55,  117 => 54,  114 => 53,  111 => 52,  108 => 51,  105 => 50,  103 => 49,  100 => 48,  82 => 47,  77 => 44,  74 => 40,  72 => 39,  68 => 38,  65 => 37,  62 => 36,  59 => 35,  57 => 34,  22 => 1,);
    }
}
/* <div class="custom-block custom-block-prequalification opp-prequalification-edit" style="display: none;">*/
/*     <script type="text/javascript">*/
/*         (function($) {*/
/*             $(document).ready(function() {*/
/* //                $('#lead_prequalification_save').on('block-data-validate', function(e, params) {*/
/* //                    var values = params.values;*/
/* //                        //var eventDate = new Date(eventDate);*/
/* //                        // @TODO check past date/time*/
/* //*/
/* //                });*/
/*                 $('#lead_prequalification_edit').on('block-ajax-return', function(e, serverResponse) {*/
/*                     console.log('ajax response', serverResponse);*/
/* //                    $(this).find('input').not('[type="hidden"]').val('').trigger('change');*/
/*                     window.location.reload(); // todo - insert data without reload*/
/*                 });*/
/*             });*/
/*         })(jQuery);*/
/*     </script>*/
/* */
/*     <div class="custom-head clearfix">*/
/*         <div class="custom-menu">*/
/*             <button class="up-custom"></button>*/
/*         </div>*/
/*         <h3>Product Details</h3>*/
/*     </div>*/
/* */
/*     <div id="lead_prequalification_edit" class="form-column display-block-persistent" data-controller="leads_display" data-action="leadPrequalification" style="display: none;">*/
/*         <div class="custom-form-head clear-fix">*/
/*             <div class="custom-menu">*/
/*                 <button class="up-custom up-custom-auto close"></button>*/
/*             </div>*/
/*             <h3>Auto</h3>*/
/*         </div>*/
/*         {% set autos = object.getPrequalificationAutos() %}*/
/*         {% set opportunity = object|opportunity %}*/
/*         {% set lead = object|lead %}*/
/*         <div style="display:none;">*/
/*             <div class="custom-form-content" data-prototype=' {{ render(controller('ZesharCRMCoreBundle:FormItems:leadPrequalificationAutoBlock')) }} '>*/
/*                 {% if(autos is empty) %}*/
/*                     {{ render(controller('ZesharCRMCoreBundle:FormItems:leadPrequalificationAutoBlock', {*/
/*                         'last': true,*/
/*                         'single': true,*/
/*                         'first': true,*/
/*                     })) }}*/
/* */
/*                 {% else %}*/
/*                     {% for auto in autos %}*/
/* */
/*                         {% if loop.last %}*/
/*                             {% set last = true %}*/
/*                         {% else %}*/
/*                             {% set last = false %}*/
/*                         {% endif %}*/
/* */
/*                         {% if loop.first %}*/
/*                             {% set first = true %}*/
/*                         {% else %}*/
/*                             {% set first = false %}*/
/*                         {% endif %}*/
/* */
/*                         {% set single = false %}*/
/* */
/*                         {{ render(controller('ZesharCRMCoreBundle:FormItems:leadPrequalificationAutoBlock', {*/
/*                             'last': last,*/
/*                             'first': first,*/
/*                             'single': single,*/
/*                             'autoYear': auto.year,*/
/*                             'autoMake': auto.make,*/
/*                             'autoModel': auto.model,*/
/*                             'autoVinNumber': auto.vinNumber,*/
/*                             'id': auto.id*/
/*                         })) }}*/
/*                     {% endfor %}*/
/*                 {% endif %}*/
/*             </div>*/
/*             <div class="custom-form-content-auto-previous">*/
/*                 <label for="source" style="padding-top: 10px;">Previous carrier</label>*/
/*                 <div class="form-group">*/
/*                     <label for="name">Name</label>*/
/*                     <input type="text" name="previous_carrier_name" id="name" class="form-control" value="{{ object.getPreviousCarrierName() }}" />*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                     <label for="compaign">Policy №</label>*/
/*                     <input type="text" name="previous_carrier_police" id="compaign" class="form-control" value="{{ object.getPreviousCarrierPolice() }}" />*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                     <label for="xdate">X-Date</label>*/
/*                     <input type="text" id="xdate" class="form-control datepicker-product" name="pckr1"  value="{{ object.getPreviousCarrierXDate()|date('M d, Y') }}" />*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/* */
/*         <div class="additional-block prequalification-drive-group">*/
/*             <div class="custom-form-head clear-fix">*/
/*                 <div class="custom-menu">*/
/*                     <button class="up-custom close"></button>*/
/*                 </div>*/
/*                 <h3>Driver</h3>*/
/*             </div>*/
/*             {% set drivers = object.getPrequalificationDrivers() %}*/
/*             <div class="custom-form-content" style="display:none;" data-prototype=' {{ render(controller('ZesharCRMCoreBundle:FormItems:leadPrequalificationDriverBlock')) }} ' >*/
/*                 {% if(drivers is empty ) %}*/
/* */
/*                     {{ render(controller('ZesharCRMCoreBundle:FormItems:leadPrequalificationDriverBlock', {*/
/*                     'last': true,*/
/*                     'single': true*/
/*                     })) }}*/
/*                 {% else %}*/
/*                     {% for driver in drivers %}*/
/* */
/*                         {% if loop.last %}*/
/*                             {% set last = true %}*/
/*                         {% else %}*/
/*                             {% set last = false %}*/
/*                         {% endif %}*/
/* */
/*                         {% set single = false %}*/
/* */
/*                         {{ render(controller('ZesharCRMCoreBundle:FormItems:leadPrequalificationDriverBlock', {*/
/*                             'last': last,*/
/*                             'single': single,*/
/*                             'name': driver.name,*/
/*                             'dob': driver.dob,*/
/*                             'license': driver.license,*/
/*                             'ageLicensed': driver.ageLicensed,*/
/*                             'tickets': driver.tickets,*/
/*                             'id': driver.id*/
/*                         })) }}*/
/* */
/*                     {% endfor %}*/
/*                 {% endif %}*/
/*             </div>*/
/*         </div>*/
/* */
/*         <div class="additional-block last">*/
/*             <div class="custom-form-head clear-fix">*/
/*                 <div class="custom-menu">*/
/*                     <button class="up-custom close"></button>*/
/*                 </div>*/
/*                 <h3>Insured Address</h3>*/
/*             </div>*/
/*             {% set insuredAddresses = object.getPrequalificationInsuredAddresses() %}*/
/*             <div class="custom-form-content" style="display:none;" data-prototype=' {{ render(controller('ZesharCRMCoreBundle:FormItems:leadPrequalificationInsuredAddressBlock')) }} ' >*/
/*                 {% if(insuredAddresses is empty ) %}*/
/*                     {{ render(controller('ZesharCRMCoreBundle:FormItems:leadPrequalificationInsuredAddressBlock', {*/
/*                     'last': true,*/
/*                     'single': true*/
/*                     })) }}*/
/*                 {% else %}*/
/*                     {% for insuredAddress in insuredAddresses %}*/
/* */
/*                         {% if loop.last %}*/
/*                             {% set last = true %}*/
/*                         {% else %}*/
/*                             {% set last = false %}*/
/*                         {% endif %}*/
/* */
/*                         {% set single = false %}*/
/* */
/*                         {{ render(controller('ZesharCRMCoreBundle:FormItems:leadPrequalificationInsuredAddressBlock', {*/
/*                             'previousCarrierPolice': insuredAddress.previousCarrierPolice,*/
/*                             'previousCarrierXDate': insuredAddress.previousCarrierXDate,*/
/*                             'previousCarrierName': insuredAddress.previousCarrierName,*/
/*                             'last': last,*/
/*                             'single': single,*/
/*                             'type': insuredAddress.type,*/
/*                             'address': insuredAddress.address,*/
/*                             'state': insuredAddress.state,*/
/*                             'zipCode': insuredAddress.zipCode,*/
/*                             'city': insuredAddress.city,*/
/*                             'id': insuredAddress.id*/
/*                         })) }}*/
/* */
/*                     {% endfor %}*/
/*                 {% endif %}*/
/*             </div>*/
/*         </div>*/
/*         <input type="hidden" id="lead_id" name="lead_id" value="{{ object.getId() }}" />*/
/*         <input type="hidden" name="leadCategory" value="" />*/
/*         {%  include('ZesharCRMCoreBundle:CRUD:DisplayPartial/lead_opportunity_show_block_actions.html.twig') %}*/
/*     </div>*/
/* </div>*/
