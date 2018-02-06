<?php

/* ZesharCRMCoreBundle:CRUD/DisplayPartial:opportunity_edit_prequalification.html.twig */
class __TwigTemplate_a085bd526be98f3ef3dccd78700c62308ade0efba8b7c34837477391e7a6a785 extends Twig_Template
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
        $context["autos"] = $this->getAttribute((isset($context["object"]) ? $context["object"] : null), "getPrequalificationAutos", array(), "method");
        // line 35
        echo "        ";
        $context["opportunity"] = $this->env->getExtension('zeshar_crm_core')->checkOpportunityType((isset($context["object"]) ? $context["object"] : null));
        // line 36
        echo "        ";
        $context["lead"] = $this->env->getExtension('zeshar_crm_core')->checkLeadType((isset($context["object"]) ? $context["object"] : null));
        // line 37
        echo "        <div style=\"display:none;\">
            <div class=\"custom-form-content\" data-prototype=' ";
        // line 38
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("ZesharCRMCoreBundle:FormItems:leadPrequalificationAutoBlock"));
        echo " '>
                ";
        // line 39
        if (twig_test_empty((isset($context["autos"]) ? $context["autos"] : null))) {
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
            $context['_seq'] = twig_ensure_traversable((isset($context["autos"]) ? $context["autos"] : null));
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
(isset($context["last"]) ? $context["last"] : null), "first" =>                 // line 65
(isset($context["first"]) ? $context["first"] : null), "single" =>                 // line 66
(isset($context["single"]) ? $context["single"] : null), "autoYear" => $this->getAttribute(                // line 67
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["object"]) ? $context["object"] : null), "getPreviousCarrierName", array(), "method"), "html", null, true);
        echo "\" />
                </div>
                <div class=\"form-group\">
                    <label for=\"compaign\">Policy №</label>
                    <input type=\"text\" name=\"previous_carrier_police\" id=\"compaign\" class=\"form-control\" value=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["object"]) ? $context["object"] : null), "getPreviousCarrierPolice", array(), "method"), "html", null, true);
        echo "\" />
                </div>
                <div class=\"form-group\">
                    <label for=\"xdate\">X-Date</label>
                    <input type=\"text\" id=\"xdate\" class=\"form-control datepicker-product\" name=\"pckr1\"  value=\"";
        // line 88
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["object"]) ? $context["object"] : null), "getPreviousCarrierXDate", array(), "method"), "M d, Y"), "html", null, true);
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
        $context["drivers"] = $this->getAttribute((isset($context["object"]) ? $context["object"] : null), "getPrequalificationDrivers", array(), "method");
        // line 101
        echo "            <div class=\"custom-form-content\" style=\"display:none;\" data-prototype=' ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("ZesharCRMCoreBundle:FormItems:leadPrequalificationDriverBlock"));
        echo " ' >
                ";
        // line 102
        if (twig_test_empty((isset($context["drivers"]) ? $context["drivers"] : null))) {
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
            $context['_seq'] = twig_ensure_traversable((isset($context["drivers"]) ? $context["drivers"] : null));
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
(isset($context["last"]) ? $context["last"] : null), "single" =>                 // line 121
(isset($context["single"]) ? $context["single"] : null), "name" => $this->getAttribute(                // line 122
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
        $context["insuredAddresses"] = $this->getAttribute((isset($context["object"]) ? $context["object"] : null), "getPrequalificationInsuredAddresses", array(), "method");
        // line 143
        echo "            <div class=\"custom-form-content\" style=\"display:none;\" data-prototype=' ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("ZesharCRMCoreBundle:FormItems:leadPrequalificationInsuredAddressBlock"));
        echo " ' >
                ";
        // line 144
        if (twig_test_empty((isset($context["insuredAddresses"]) ? $context["insuredAddresses"] : null))) {
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
            $context['_seq'] = twig_ensure_traversable((isset($context["insuredAddresses"]) ? $context["insuredAddresses"] : null));
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
(isset($context["last"]) ? $context["last"] : null), "single" =>                 // line 165
(isset($context["single"]) ? $context["single"] : null), "type" => $this->getAttribute(                // line 166
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["object"]) ? $context["object"] : null), "getId", array(), "method"), "html", null, true);
        echo "\" />
        <input type=\"hidden\" name=\"leadCategory\" value=\"\" />
        ";
        // line 180
        $this->loadTemplate("ZesharCRMCoreBundle:CRUD:DisplayPartial/lead_opportunity_show_block_actions.html.twig", "ZesharCRMCoreBundle:CRUD/DisplayPartial:opportunity_edit_prequalification.html.twig", 180)->display($context);
        // line 181
        echo "    </div>
</div>";
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
        return array (  407 => 181,  405 => 180,  400 => 178,  396 => 176,  393 => 175,  377 => 172,  375 => 171,  374 => 170,  373 => 169,  372 => 168,  371 => 167,  370 => 166,  369 => 165,  368 => 164,  367 => 163,  366 => 162,  365 => 161,  364 => 160,  361 => 159,  359 => 158,  356 => 157,  353 => 156,  350 => 155,  347 => 154,  344 => 153,  342 => 152,  339 => 151,  321 => 150,  317 => 148,  314 => 145,  312 => 144,  307 => 143,  305 => 142,  293 => 132,  290 => 131,  274 => 128,  272 => 127,  271 => 126,  270 => 125,  269 => 124,  268 => 123,  267 => 122,  266 => 121,  265 => 120,  264 => 119,  261 => 118,  259 => 117,  256 => 116,  253 => 115,  250 => 114,  247 => 113,  244 => 112,  242 => 111,  239 => 110,  221 => 109,  217 => 107,  215 => 104,  212 => 103,  210 => 102,  205 => 101,  203 => 100,  188 => 88,  181 => 84,  174 => 80,  167 => 75,  164 => 74,  149 => 72,  147 => 71,  146 => 70,  145 => 69,  144 => 68,  143 => 67,  142 => 66,  141 => 65,  140 => 64,  139 => 63,  136 => 62,  134 => 61,  131 => 60,  128 => 59,  125 => 58,  122 => 57,  119 => 56,  117 => 55,  114 => 54,  111 => 53,  108 => 52,  105 => 51,  102 => 50,  100 => 49,  97 => 48,  79 => 47,  74 => 44,  71 => 40,  69 => 39,  65 => 38,  62 => 37,  59 => 36,  56 => 35,  54 => 34,  19 => 1,);
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
