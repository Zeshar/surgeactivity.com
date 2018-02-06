<?php

/* ZesharCRMCoreBundle:CRUD/DisplayPartial:lead_opportunity_show_entity_details_table.html.twig */
class __TwigTemplate_57e20fa32adfc7a2ee7771399d4351e1a2738c23782bdd7d25a0ed635b60d0eb extends Twig_Template
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
        $__internal_3532e5e4cf27c01738ef4943003e93e45523421959250577a6db518f7b0d9837 = $this->env->getExtension("native_profiler");
        $__internal_3532e5e4cf27c01738ef4943003e93e45523421959250577a6db518f7b0d9837->enter($__internal_3532e5e4cf27c01738ef4943003e93e45523421959250577a6db518f7b0d9837_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ZesharCRMCoreBundle:CRUD/DisplayPartial:lead_opportunity_show_entity_details_table.html.twig"));

        // line 1
        echo "<table class=\"table editable-table entity-details-table-text\">
    ";
        // line 2
        $context["maxValue"] = 35;
        // line 3
        echo "    ";
        $context["showValue"] = 32;
        // line 4
        echo "    <tr>
        <td>First Name</td>
        <td>";
        // line 6
        if ( !twig_test_empty((isset($context["contactCard"]) ? $context["contactCard"] : $this->getContext($context, "contactCard")))) {
            // line 7
            echo "                ";
            if ((twig_length_filter($this->env, $this->getAttribute((isset($context["contactCard"]) ? $context["contactCard"] : $this->getContext($context, "contactCard")), "getFirstName", array(), "method")) > (isset($context["maxValue"]) ? $context["maxValue"] : $this->getContext($context, "maxValue")))) {
                // line 8
                echo "                    <p title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contactCard"]) ? $context["contactCard"] : $this->getContext($context, "contactCard")), "getFirstName", array(), "method"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute((isset($context["contactCard"]) ? $context["contactCard"] : $this->getContext($context, "contactCard")), "getFirstName", array(), "method"), 0, (isset($context["showValue"]) ? $context["showValue"] : $this->getContext($context, "showValue"))), "html", null, true);
                echo "...</p>
                ";
            } else {
                // line 10
                echo "                    ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contactCard"]) ? $context["contactCard"] : $this->getContext($context, "contactCard")), "getFirstName", array(), "method"), "html", null, true);
                echo "
                ";
            }
            // line 12
            echo "            ";
        }
        // line 13
        echo "        </td>
        <td>Address</td>
        <td class=\"address\">
            ";
        // line 16
        if ( !twig_test_empty($this->getAttribute((isset($context["contactCard"]) ? $context["contactCard"] : $this->getContext($context, "contactCard")), "getStreetAddress", array(), "method"))) {
            // line 17
            echo "                ";
            if ((twig_length_filter($this->env, $this->getAttribute((isset($context["contactCard"]) ? $context["contactCard"] : $this->getContext($context, "contactCard")), "getStreetAddress", array(), "method")) > (isset($context["maxValue"]) ? $context["maxValue"] : $this->getContext($context, "maxValue")))) {
                // line 18
                echo "                        <p title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contactCard"]) ? $context["contactCard"] : $this->getContext($context, "contactCard")), "getStreetAddress", array(), "method"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute((isset($context["contactCard"]) ? $context["contactCard"] : $this->getContext($context, "contactCard")), "getStreetAddress", array(), "method"), 0, (isset($context["showValue"]) ? $context["showValue"] : $this->getContext($context, "showValue"))), "html", null, true);
                echo "...</p>
                ";
            } else {
                // line 20
                echo "                    ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contactCard"]) ? $context["contactCard"] : $this->getContext($context, "contactCard")), "getStreetAddress", array(), "method"), "html", null, true);
                echo "
                ";
            }
            // line 22
            echo "            ";
        }
        // line 23
        echo "        </td>
    </tr>
    <tr>
        <td>Last Name</td>
        <td>
            ";
        // line 28
        if ( !twig_test_empty((isset($context["contactCard"]) ? $context["contactCard"] : $this->getContext($context, "contactCard")))) {
            // line 29
            echo "                ";
            if ((twig_length_filter($this->env, $this->getAttribute((isset($context["contactCard"]) ? $context["contactCard"] : $this->getContext($context, "contactCard")), "getLastName", array(), "method")) > (isset($context["maxValue"]) ? $context["maxValue"] : $this->getContext($context, "maxValue")))) {
                // line 30
                echo "                    <p title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contactCard"]) ? $context["contactCard"] : $this->getContext($context, "contactCard")), "getLastName", array(), "method"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute((isset($context["contactCard"]) ? $context["contactCard"] : $this->getContext($context, "contactCard")), "getLastName", array(), "method"), 0, (isset($context["showValue"]) ? $context["showValue"] : $this->getContext($context, "showValue"))), "html", null, true);
                echo "...</p>
                ";
            } else {
                // line 32
                echo "                    ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contactCard"]) ? $context["contactCard"] : $this->getContext($context, "contactCard")), "getLastName", array(), "method"), "html", null, true);
                echo "
                ";
            }
            // line 34
            echo "            ";
        }
        // line 35
        echo "        </td>
        <td>City</td>
        <td>";
        // line 37
        if ( !twig_test_empty((isset($context["contactCard"]) ? $context["contactCard"] : $this->getContext($context, "contactCard")))) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contactCard"]) ? $context["contactCard"] : $this->getContext($context, "contactCard")), "getCity", array(), "method"), "html", null, true);
        }
        echo "</td>
    </tr>
    <tr>
        <td>Middle Initial</td>
        <td>
            ";
        // line 42
        if ( !twig_test_empty((isset($context["contactCard"]) ? $context["contactCard"] : $this->getContext($context, "contactCard")))) {
            // line 43
            echo "                ";
            if ((twig_length_filter($this->env, $this->getAttribute((isset($context["contactCard"]) ? $context["contactCard"] : $this->getContext($context, "contactCard")), "getMiddleInitial", array(), "method")) > (isset($context["maxValue"]) ? $context["maxValue"] : $this->getContext($context, "maxValue")))) {
                // line 44
                echo "                    <p title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contactCard"]) ? $context["contactCard"] : $this->getContext($context, "contactCard")), "getMiddleInitial", array(), "method"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute((isset($context["contactCard"]) ? $context["contactCard"] : $this->getContext($context, "contactCard")), "getMiddleInitial", array(), "method"), 0, (isset($context["showValue"]) ? $context["showValue"] : $this->getContext($context, "showValue"))), "html", null, true);
                echo "...</p>
                ";
            } else {
                // line 46
                echo "                    ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contactCard"]) ? $context["contactCard"] : $this->getContext($context, "contactCard")), "getMiddleInitial", array(), "method"), "html", null, true);
                echo "
                ";
            }
            // line 48
            echo "            ";
        }
        // line 49
        echo "        </td>
        <td>State</td>
        <td>";
        // line 51
        if ( !twig_test_empty((isset($context["contactCard"]) ? $context["contactCard"] : $this->getContext($context, "contactCard")))) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contactCard"]) ? $context["contactCard"] : $this->getContext($context, "contactCard")), "getState", array(), "method"), "html", null, true);
        }
        echo "</td>
    </tr>
    <tr>
        <td>Phone</td>
        <td>
            ";
        // line 56
        if ( !twig_test_empty($this->getAttribute((isset($context["contactCard"]) ? $context["contactCard"] : $this->getContext($context, "contactCard")), "phone", array()))) {
            // line 57
            echo "                <div class=\"name-tel-tab ";
            if ($this->getAttribute($this->getAttribute((isset($context["contactCard"]) ? $context["contactCard"] : $this->getContext($context, "contactCard")), "phone", array()), "getDnc", array(), "method")) {
                echo "dnc";
            } else {
                echo "make-call";
            }
            echo "\" style=\"overflow: visible; ";
            if ( !$this->getAttribute($this->getAttribute($this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "contactCard", array()), "phone", array()), "getDnc", array(), "method")) {
                echo "cursor:pointer;";
            }
            echo "\">
                    ";
            // line 58
            if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["contactCard"]) ? $context["contactCard"] : $this->getContext($context, "contactCard")), "phone", array(), "method"), "value", array(), "method")) > (isset($context["maxValue"]) ? $context["maxValue"] : $this->getContext($context, "maxValue")))) {
                // line 59
                echo "                        <p title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contactCard"]) ? $context["contactCard"] : $this->getContext($context, "contactCard")), "phone", array(), "method"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute((isset($context["contactCard"]) ? $context["contactCard"] : $this->getContext($context, "contactCard")), "phone", array(), "method"), 0, (isset($context["showValue"]) ? $context["showValue"] : $this->getContext($context, "showValue"))), "html", null, true);
                echo "...</p>
                    ";
            } else {
                // line 61
                echo "                        ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contactCard"]) ? $context["contactCard"] : $this->getContext($context, "contactCard")), "phone", array(), "method"), "html", null, true);
                echo "
                    ";
            }
            // line 63
            echo "                </div>
            ";
        }
        // line 65
        echo "        </td>
        <td>Zipcode</td>
        <td>";
        // line 67
        if ( !twig_test_empty((isset($context["contactCard"]) ? $context["contactCard"] : $this->getContext($context, "contactCard")))) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contactCard"]) ? $context["contactCard"] : $this->getContext($context, "contactCard")), "getZip", array(), "method"), "html", null, true);
        }
        echo "</td>
    </tr>
    <tr>
        <td>Email</td>
    <td objectid=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "id", array()), "html", null, true);
        echo "\">
            ";
        // line 72
        if ( !twig_test_empty($this->getAttribute((isset($context["contactCard"]) ? $context["contactCard"] : $this->getContext($context, "contactCard")), "getEmail", array(), "method"))) {
            // line 73
            echo "                ";
            if ( !$this->getAttribute($this->getAttribute((isset($context["contactCard"]) ? $context["contactCard"] : $this->getContext($context, "contactCard")), "getEmail", array(), "method"), "getDonotEmail", array(), "method")) {
                // line 74
                echo "                    <span class=\"email-tab\">
                            ";
                // line 75
                if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["contactCard"]) ? $context["contactCard"] : $this->getContext($context, "contactCard")), "getEmail", array(), "method"), "value", array(), "method")) > (isset($context["maxValue"]) ? $context["maxValue"] : $this->getContext($context, "maxValue")))) {
                    // line 76
                    echo "                                <a href=\"#\" class=\"send-email\" title=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contactCard"]) ? $context["contactCard"] : $this->getContext($context, "contactCard")), "getEmail", array(), "method"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute((isset($context["contactCard"]) ? $context["contactCard"] : $this->getContext($context, "contactCard")), "getEmail", array(), "method"), 0, (isset($context["showValue"]) ? $context["showValue"] : $this->getContext($context, "showValue"))), "html", null, true);
                    echo "...</a>
                            ";
                } else {
                    // line 78
                    echo "                                <a href=\"#\" class=\"send-email\" title=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contactCard"]) ? $context["contactCard"] : $this->getContext($context, "contactCard")), "getEmail", array(), "method"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contactCard"]) ? $context["contactCard"] : $this->getContext($context, "contactCard")), "getEmail", array(), "method"), "html", null, true);
                    echo "</a>
                            ";
                }
                // line 80
                echo "                    </span>
                ";
            } else {
                // line 82
                echo "                    <span class=\"email-tab marked-dne\">
                                ";
                // line 83
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contactCard"]) ? $context["contactCard"] : $this->getContext($context, "contactCard")), "getEmail", array(), "method"), "html", null, true);
                echo "
                            </span>
                ";
            }
            // line 86
            echo "            ";
        }
        // line 87
        echo "        </td>
        <td>Created At</td>
        <td>";
        // line 89
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "createdAt", array()), "M d, Y"), "html", null, true);
        echo "</td>
    </tr>
    <tr>
        <td>Lead Source</td>
        <td>
            ";
        // line 94
        echo twig_escape_filter($this->env, (( !twig_test_empty($this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "getLeadSource", array(), "method"))) ? ($this->getAttribute($this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "getLeadSource", array(), "method"), "getTitle", array(), "method")) : ("(none)")), "html", null, true);
        echo "
        </td>
        <td>Activity</td>
        <td>";
        // line 97
        echo twig_escape_filter($this->env, (( !twig_test_empty($this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "getLeadCampaign", array(), "method"))) ? ($this->getAttribute($this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "getLeadCampaign", array(), "method"), "getTitle", array(), "method")) : ("(none)")), "html", null, true);
        echo "</td>
    </tr>
</table>";
        
        $__internal_3532e5e4cf27c01738ef4943003e93e45523421959250577a6db518f7b0d9837->leave($__internal_3532e5e4cf27c01738ef4943003e93e45523421959250577a6db518f7b0d9837_prof);

    }

    public function getTemplateName()
    {
        return "ZesharCRMCoreBundle:CRUD/DisplayPartial:lead_opportunity_show_entity_details_table.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  274 => 97,  268 => 94,  260 => 89,  256 => 87,  253 => 86,  247 => 83,  244 => 82,  240 => 80,  232 => 78,  224 => 76,  222 => 75,  219 => 74,  216 => 73,  214 => 72,  210 => 71,  201 => 67,  197 => 65,  193 => 63,  187 => 61,  179 => 59,  177 => 58,  164 => 57,  162 => 56,  152 => 51,  148 => 49,  145 => 48,  139 => 46,  131 => 44,  128 => 43,  126 => 42,  116 => 37,  112 => 35,  109 => 34,  103 => 32,  95 => 30,  92 => 29,  90 => 28,  83 => 23,  80 => 22,  74 => 20,  66 => 18,  63 => 17,  61 => 16,  56 => 13,  53 => 12,  47 => 10,  39 => 8,  36 => 7,  34 => 6,  30 => 4,  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* <table class="table editable-table entity-details-table-text">*/
/*     {% set maxValue = 35 %}*/
/*     {% set showValue = 32 %}*/
/*     <tr>*/
/*         <td>First Name</td>*/
/*         <td>{% if contactCard is not empty %}*/
/*                 {% if contactCard.getFirstName()|length > maxValue %}*/
/*                     <p title="{{ contactCard.getFirstName() }}">{{ contactCard.getFirstName()[:showValue] }}...</p>*/
/*                 {% else %}*/
/*                     {{ contactCard.getFirstName() }}*/
/*                 {% endif %}*/
/*             {% endif %}*/
/*         </td>*/
/*         <td>Address</td>*/
/*         <td class="address">*/
/*             {% if contactCard.getStreetAddress() is not empty %}*/
/*                 {% if contactCard.getStreetAddress()|length > maxValue %}*/
/*                         <p title="{{ contactCard.getStreetAddress() }}">{{ contactCard.getStreetAddress()[:showValue] }}...</p>*/
/*                 {% else %}*/
/*                     {{ contactCard.getStreetAddress() }}*/
/*                 {% endif %}*/
/*             {% endif %}*/
/*         </td>*/
/*     </tr>*/
/*     <tr>*/
/*         <td>Last Name</td>*/
/*         <td>*/
/*             {% if contactCard is not empty %}*/
/*                 {% if contactCard.getLastName()|length > maxValue %}*/
/*                     <p title="{{ contactCard.getLastName() }}">{{ contactCard.getLastName()[:showValue] }}...</p>*/
/*                 {% else %}*/
/*                     {{ contactCard.getLastName() }}*/
/*                 {% endif %}*/
/*             {% endif %}*/
/*         </td>*/
/*         <td>City</td>*/
/*         <td>{% if contactCard is not empty %}{{ contactCard.getCity() }}{% endif %}</td>*/
/*     </tr>*/
/*     <tr>*/
/*         <td>Middle Initial</td>*/
/*         <td>*/
/*             {% if contactCard is not empty %}*/
/*                 {% if contactCard.getMiddleInitial()|length > maxValue %}*/
/*                     <p title="{{ contactCard.getMiddleInitial() }}">{{ contactCard.getMiddleInitial()[:showValue] }}...</p>*/
/*                 {% else %}*/
/*                     {{ contactCard.getMiddleInitial() }}*/
/*                 {% endif %}*/
/*             {% endif %}*/
/*         </td>*/
/*         <td>State</td>*/
/*         <td>{% if contactCard is not empty %}{{ contactCard.getState() }}{% endif %}</td>*/
/*     </tr>*/
/*     <tr>*/
/*         <td>Phone</td>*/
/*         <td>*/
/*             {% if contactCard.phone is not empty %}*/
/*                 <div class="name-tel-tab {% if contactCard.phone.getDnc() %}dnc{% else %}make-call{% endif %}" style="overflow: visible; {% if not object.contactCard.phone.getDnc() %}cursor:pointer;{% endif %}">*/
/*                     {% if contactCard.phone().value()|length > maxValue %}*/
/*                         <p title="{{ contactCard.phone() }}">{{ contactCard.phone()[:showValue] }}...</p>*/
/*                     {% else %}*/
/*                         {{ contactCard.phone() }}*/
/*                     {% endif %}*/
/*                 </div>*/
/*             {% endif %}*/
/*         </td>*/
/*         <td>Zipcode</td>*/
/*         <td>{% if contactCard is not empty %}{{ contactCard.getZip() }}{% endif %}</td>*/
/*     </tr>*/
/*     <tr>*/
/*         <td>Email</td>*/
/*     <td objectid="{{ object.id }}">*/
/*             {% if contactCard.getEmail() is not empty %}*/
/*                 {% if not contactCard.getEmail().getDonotEmail() %}*/
/*                     <span class="email-tab">*/
/*                             {% if contactCard.getEmail().value()|length > maxValue %}*/
/*                                 <a href="#" class="send-email" title="{{ contactCard.getEmail() }}">{{ contactCard.getEmail()[:showValue] }}...</a>*/
/*                             {% else %}*/
/*                                 <a href="#" class="send-email" title="{{ contactCard.getEmail() }}">{{ contactCard.getEmail() }}</a>*/
/*                             {% endif %}*/
/*                     </span>*/
/*                 {% else %}*/
/*                     <span class="email-tab marked-dne">*/
/*                                 {{ contactCard.getEmail() }}*/
/*                             </span>*/
/*                 {% endif %}*/
/*             {% endif %}*/
/*         </td>*/
/*         <td>Created At</td>*/
/*         <td>{{ object.createdAt|date('M d, Y') }}</td>*/
/*     </tr>*/
/*     <tr>*/
/*         <td>Lead Source</td>*/
/*         <td>*/
/*             {{ object.getLeadSource() is not empty ? object.getLeadSource().getTitle() : '(none)'  }}*/
/*         </td>*/
/*         <td>Activity</td>*/
/*         <td>{{ object.getLeadCampaign() is not empty ? object.getLeadCampaign().getTitle() : '(none)'  }}</td>*/
/*     </tr>*/
/* </table>*/
