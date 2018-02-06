<?php

/* ZesharCRMCoreBundle:CRUD/DisplayPartial:lead_opportunity_show_prequalification.html.twig */
class __TwigTemplate_136c628c7c0e650903aacb8e009ffb35e1a0685e3e4c4eee35f9e65d2e42e0c3 extends Twig_Template
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
        $__internal_b35e2d4db1bcad005934ce1a1349d12d920dabaabf16f3d41f3a6df2452e00a6 = $this->env->getExtension("native_profiler");
        $__internal_b35e2d4db1bcad005934ce1a1349d12d920dabaabf16f3d41f3a6df2452e00a6->enter($__internal_b35e2d4db1bcad005934ce1a1349d12d920dabaabf16f3d41f3a6df2452e00a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ZesharCRMCoreBundle:CRUD/DisplayPartial:lead_opportunity_show_prequalification.html.twig"));

        // line 1
        echo "<div class=\"custom-block custom-block-prequalification\">
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
                    console.log('ajax response', serverResponse);
//                    \$(this).find('input').not('[type=\"hidden\"]').val('').trigger('change');
                    window.location.reload(); // todo - insert data without reload
                });
            });
        })(jQuery);
    </script>

    <div class=\"custom-head clearfix\">
        <div class=\"custom-menu\">
            <button class=\"up-custom close\"></button>
        </div>
        <h3>General Info</h3>
    </div>

    <div id=\"lead_prequalification_save\" class=\"form-column display-block-persistent\" data-controller=\"leads_display\" data-action=\"leadPrequalification\" style=\"display: none;\">
        <div class=\"form-group\">
            <label for=\"source\">Product</label>

            ";
        // line 31
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("ZesharCRMCoreBundle:FormItems:leadCategorySelect", array("activeId" => (( !twig_test_empty($this->getAttribute(        // line 32
(isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "getLeadCategory", array(), "method"))) ? ($this->getAttribute($this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "getLeadCategory", array(), "method"), "getId", array(), "method")) : (null)))));
        // line 33
        echo "
        </div>
        <div class=\"custom-form-head clear-fix\">
            <div class=\"custom-menu\">
                <button class=\"up-custom up-custom-auto close\"></button>
            </div>
            <h3>Auto</h3>
        </div>
        ";
        // line 41
        $context["autos"] = $this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "getPrequalificationAutos", array(), "method");
        // line 42
        echo "        ";
        $context["opportunity"] = $this->env->getExtension('zeshar_crm_core')->checkOpportunityType((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")));
        // line 43
        echo "        ";
        $context["lead"] = $this->env->getExtension('zeshar_crm_core')->checkLeadType((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")));
        // line 44
        echo "        <div style=\"display:none;\">
            <div class=\"custom-form-content\" data-prototype=' ";
        // line 45
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("ZesharCRMCoreBundle:FormItems:leadPrequalificationAutoBlock"));
        echo " '>
                ";
        // line 46
        if (twig_test_empty((isset($context["autos"]) ? $context["autos"] : $this->getContext($context, "autos")))) {
            // line 47
            echo "                    ";
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("ZesharCRMCoreBundle:FormItems:leadPrequalificationAutoBlock", array("last" => true, "single" => true, "first" => true)));
            // line 51
            echo "

                ";
        } else {
            // line 54
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
                // line 55
                echo "
                        ";
                // line 56
                if ($this->getAttribute($context["loop"], "last", array())) {
                    // line 57
                    echo "                            ";
                    $context["last"] = true;
                    // line 58
                    echo "                        ";
                } else {
                    // line 59
                    echo "                            ";
                    $context["last"] = false;
                    // line 60
                    echo "                        ";
                }
                // line 61
                echo "
                        ";
                // line 62
                if ($this->getAttribute($context["loop"], "first", array())) {
                    // line 63
                    echo "                            ";
                    $context["first"] = true;
                    // line 64
                    echo "                        ";
                } else {
                    // line 65
                    echo "                            ";
                    $context["first"] = false;
                    // line 66
                    echo "                        ";
                }
                // line 67
                echo "
                        ";
                // line 68
                $context["single"] = false;
                // line 69
                echo "
                        ";
                // line 70
                echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("ZesharCRMCoreBundle:FormItems:leadPrequalificationAutoBlock", array("last" =>                 // line 71
(isset($context["last"]) ? $context["last"] : $this->getContext($context, "last")), "first" =>                 // line 72
(isset($context["first"]) ? $context["first"] : $this->getContext($context, "first")), "single" =>                 // line 73
(isset($context["single"]) ? $context["single"] : $this->getContext($context, "single")), "autoYear" => $this->getAttribute(                // line 74
$context["auto"], "year", array()), "autoMake" => $this->getAttribute(                // line 75
$context["auto"], "make", array()), "autoModel" => $this->getAttribute(                // line 76
$context["auto"], "model", array()), "autoVinNumber" => $this->getAttribute(                // line 77
$context["auto"], "vinNumber", array()), "id" => $this->getAttribute(                // line 78
$context["auto"], "id", array()))));
                // line 79
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
            // line 81
            echo "                ";
        }
        // line 82
        echo "            </div>
            <div class=\"custom-form-content-auto-previous\">
                <label for=\"source\" style=\"padding-top: 10px;\">Previous carrier</label>
                <div class=\"form-group\">
                    <label for=\"name\">Name</label>
                    <input type=\"text\" name=\"previous_carrier_name\" id=\"name\" class=\"form-control\" value=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "getPreviousCarrierName", array(), "method"), "html", null, true);
        echo "\" />
                </div>
                <div class=\"form-group\">
                    <label for=\"compaign\">Policy №</label>
                    <input type=\"text\" name=\"previous_carrier_police\" id=\"compaign\" class=\"form-control\" value=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "getPreviousCarrierPolice", array(), "method"), "html", null, true);
        echo "\" />
                </div>
                <div class=\"form-group\">
                    <label for=\"xdate\">X-Date</label>
                    <input type=\"text\" id=\"xdate\" class=\"form-control datepicker-product\" name=\"pckr1\"  value=\"";
        // line 95
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
        // line 107
        $context["drivers"] = $this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "getPrequalificationDrivers", array(), "method");
        // line 108
        echo "            <div class=\"custom-form-content\" style=\"display:none;\" data-prototype=' ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("ZesharCRMCoreBundle:FormItems:leadPrequalificationDriverBlock"));
        echo " ' >
                ";
        // line 109
        if (twig_test_empty((isset($context["drivers"]) ? $context["drivers"] : $this->getContext($context, "drivers")))) {
            // line 110
            echo "
                    ";
            // line 111
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("ZesharCRMCoreBundle:FormItems:leadPrequalificationDriverBlock", array("last" => true, "single" => true)));
            // line 114
            echo "
                ";
        } else {
            // line 116
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
                // line 117
                echo "
                        ";
                // line 118
                if ($this->getAttribute($context["loop"], "last", array())) {
                    // line 119
                    echo "                            ";
                    $context["last"] = true;
                    // line 120
                    echo "                        ";
                } else {
                    // line 121
                    echo "                            ";
                    $context["last"] = false;
                    // line 122
                    echo "                        ";
                }
                // line 123
                echo "
                        ";
                // line 124
                $context["single"] = false;
                // line 125
                echo "
                        ";
                // line 126
                echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("ZesharCRMCoreBundle:FormItems:leadPrequalificationDriverBlock", array("last" =>                 // line 127
(isset($context["last"]) ? $context["last"] : $this->getContext($context, "last")), "single" =>                 // line 128
(isset($context["single"]) ? $context["single"] : $this->getContext($context, "single")), "name" => $this->getAttribute(                // line 129
$context["driver"], "name", array()), "dob" => $this->getAttribute(                // line 130
$context["driver"], "dob", array()), "license" => $this->getAttribute(                // line 131
$context["driver"], "license", array()), "ageLicensed" => $this->getAttribute(                // line 132
$context["driver"], "ageLicensed", array()), "tickets" => $this->getAttribute(                // line 133
$context["driver"], "tickets", array()), "id" => $this->getAttribute(                // line 134
$context["driver"], "id", array()))));
                // line 135
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
            // line 138
            echo "                ";
        }
        // line 139
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
        // line 149
        $context["insuredAddresses"] = $this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "getPrequalificationInsuredAddresses", array(), "method");
        // line 150
        echo "            <div class=\"custom-form-content\" style=\"display:none;\" data-prototype=' ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("ZesharCRMCoreBundle:FormItems:leadPrequalificationInsuredAddressBlock"));
        echo " ' >
                ";
        // line 151
        if (twig_test_empty((isset($context["insuredAddresses"]) ? $context["insuredAddresses"] : $this->getContext($context, "insuredAddresses")))) {
            // line 152
            echo "                    ";
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("ZesharCRMCoreBundle:FormItems:leadPrequalificationInsuredAddressBlock", array("last" => true, "single" => true)));
            // line 155
            echo "
                ";
        } else {
            // line 157
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
                // line 158
                echo "
                        ";
                // line 159
                if ($this->getAttribute($context["loop"], "last", array())) {
                    // line 160
                    echo "                            ";
                    $context["last"] = true;
                    // line 161
                    echo "                        ";
                } else {
                    // line 162
                    echo "                            ";
                    $context["last"] = false;
                    // line 163
                    echo "                        ";
                }
                // line 164
                echo "
                        ";
                // line 165
                $context["single"] = false;
                // line 166
                echo "
                        ";
                // line 167
                echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("ZesharCRMCoreBundle:FormItems:leadPrequalificationInsuredAddressBlock", array("previousCarrierPolice" => $this->getAttribute(                // line 168
$context["insuredAddress"], "previousCarrierPolice", array()), "previousCarrierXDate" => $this->getAttribute(                // line 169
$context["insuredAddress"], "previousCarrierXDate", array()), "previousCarrierName" => $this->getAttribute(                // line 170
$context["insuredAddress"], "previousCarrierName", array()), "last" =>                 // line 171
(isset($context["last"]) ? $context["last"] : $this->getContext($context, "last")), "single" =>                 // line 172
(isset($context["single"]) ? $context["single"] : $this->getContext($context, "single")), "type" => $this->getAttribute(                // line 173
$context["insuredAddress"], "type", array()), "address" => $this->getAttribute(                // line 174
$context["insuredAddress"], "address", array()), "state" => $this->getAttribute(                // line 175
$context["insuredAddress"], "state", array()), "zipCode" => $this->getAttribute(                // line 176
$context["insuredAddress"], "zipCode", array()), "city" => $this->getAttribute(                // line 177
$context["insuredAddress"], "city", array()), "id" => $this->getAttribute(                // line 178
$context["insuredAddress"], "id", array()))));
                // line 179
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
            // line 182
            echo "                ";
        }
        // line 183
        echo "            </div>
        </div>
        <input type=\"hidden\" id=\"lead_id\" name=\"lead_id\" value=\"";
        // line 185
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "getId", array(), "method"), "html", null, true);
        echo "\" />
        ";
        // line 186
        $this->loadTemplate("ZesharCRMCoreBundle:CRUD:DisplayPartial/lead_opportunity_show_block_actions.html.twig", "ZesharCRMCoreBundle:CRUD/DisplayPartial:lead_opportunity_show_prequalification.html.twig", 186)->display(array_merge($context, array("show_cancel_link" => false)));
        // line 187
        echo "    </div>

</div>
";
        
        $__internal_b35e2d4db1bcad005934ce1a1349d12d920dabaabf16f3d41f3a6df2452e00a6->leave($__internal_b35e2d4db1bcad005934ce1a1349d12d920dabaabf16f3d41f3a6df2452e00a6_prof);

    }

    public function getTemplateName()
    {
        return "ZesharCRMCoreBundle:CRUD/DisplayPartial:lead_opportunity_show_prequalification.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  419 => 187,  417 => 186,  413 => 185,  409 => 183,  406 => 182,  390 => 179,  388 => 178,  387 => 177,  386 => 176,  385 => 175,  384 => 174,  383 => 173,  382 => 172,  381 => 171,  380 => 170,  379 => 169,  378 => 168,  377 => 167,  374 => 166,  372 => 165,  369 => 164,  366 => 163,  363 => 162,  360 => 161,  357 => 160,  355 => 159,  352 => 158,  334 => 157,  330 => 155,  327 => 152,  325 => 151,  320 => 150,  318 => 149,  306 => 139,  303 => 138,  287 => 135,  285 => 134,  284 => 133,  283 => 132,  282 => 131,  281 => 130,  280 => 129,  279 => 128,  278 => 127,  277 => 126,  274 => 125,  272 => 124,  269 => 123,  266 => 122,  263 => 121,  260 => 120,  257 => 119,  255 => 118,  252 => 117,  234 => 116,  230 => 114,  228 => 111,  225 => 110,  223 => 109,  218 => 108,  216 => 107,  201 => 95,  194 => 91,  187 => 87,  180 => 82,  177 => 81,  162 => 79,  160 => 78,  159 => 77,  158 => 76,  157 => 75,  156 => 74,  155 => 73,  154 => 72,  153 => 71,  152 => 70,  149 => 69,  147 => 68,  144 => 67,  141 => 66,  138 => 65,  135 => 64,  132 => 63,  130 => 62,  127 => 61,  124 => 60,  121 => 59,  118 => 58,  115 => 57,  113 => 56,  110 => 55,  92 => 54,  87 => 51,  84 => 47,  82 => 46,  78 => 45,  75 => 44,  72 => 43,  69 => 42,  67 => 41,  57 => 33,  55 => 32,  54 => 31,  22 => 1,);
    }
}
/* <div class="custom-block custom-block-prequalification">*/
/*     <script type="text/javascript">*/
/*         (function($) {*/
/*             $(document).ready(function() {*/
/* //                $('#lead_prequalification_save').on('block-data-validate', function(e, params) {*/
/* //                    var values = params.values;*/
/* //                        //var eventDate = new Date(eventDate);*/
/* //                        // @TODO check past date/time*/
/* //*/
/* //                });*/
/*                 $('#lead_prequalification_save').on('block-ajax-return', function(e, serverResponse) {*/
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
/*             <button class="up-custom close"></button>*/
/*         </div>*/
/*         <h3>General Info</h3>*/
/*     </div>*/
/* */
/*     <div id="lead_prequalification_save" class="form-column display-block-persistent" data-controller="leads_display" data-action="leadPrequalification" style="display: none;">*/
/*         <div class="form-group">*/
/*             <label for="source">Product</label>*/
/* */
/*             {{ render(controller('ZesharCRMCoreBundle:FormItems:leadCategorySelect', {*/
/*                 'activeId': object.getLeadCategory() is not empty ? object.getLeadCategory().getId() : NULL*/
/*             })) }}*/
/*         </div>*/
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
/*         {%  include('ZesharCRMCoreBundle:CRUD:DisplayPartial/lead_opportunity_show_block_actions.html.twig') with {'show_cancel_link': false} %}*/
/*     </div>*/
/* */
/* </div>*/
/* */
