<?php

/* ZesharCRMCoreBundle:CRUD/DisplayPartial:lead_opportunity_show_entity_details.html.twig */
class __TwigTemplate_4813918a0ab3de89fab74e3abc3cab95e26e7c82dee5b3f6bb284e4860111e3a extends Twig_Template
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
        echo "

    <div class=\"custom-block table-block entity-details\">
        <div class=\"modal fade\" id=\"contactCardList\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
            <div class=\"modal-dialog modal-lg\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                        <h4 class=\"modal-title\">Contact Card List</h4>
                    </div>
                    <div class=\"modal-body\">
                    </div>
                </div>
            </div>
        </div>
        <div class=\"custom-head clearfix\">
            <div class=\"custom-menu\">
                    <a class=\"inline-edit-details\" href=\"#\"><button style=\"margin-top:0\" class=\"edit-custom entity-details-edit\">Edit</button></a>
                    <a class=\"inline-edit-details\" href=\"#\"><button style=\"width: 74px; margin-top:0\" class=\"edit-custom entity-details-edit-cancel\">Cancel</button></a>
                    <a class=\"inline-edit-details-save\" href=\"#\"><button style=\"color: green; width: 63px; margin-top:0\" class=\"edit-custom entity-details-save\">Save</button></a>


                <div class=\"btn-group\">
                    <button style=\"width: 130px;\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\">
                        Select Contact
                        <span class=\"caret\"></span>
                    </button>
                    <ul class=\"dropdown-menu custom-dropdown-menu\">
                        <a href=\"#\"><button style=\"width: 126px;\" class=\"edit-custom wide-edit-custom inline-edit-copy-from-lead\">Copy from lead</button></a>
                        <a href=\"#\"><button style=\"width: 130px;\" class=\"edit-custom wide-edit-custom entity-details-choose-contact\">Choose Contact</button></a>
                    </ul>
                </div>
            </div>

            <ul class=\"nav nav-pills block-tabs\">
                <li class=\"active\"><a href=\"#lead-tab\" role=\"tab\" data-toggle=\"tab\">Lead</a></li>
                <li><a  href=\"#opportunity-tab\" role=\"tab\" data-toggle=\"tab\">Contact Person</a></li>
            </ul>

        </div>
        <div class=\"custom-content tab-content form-block\">

            <div class=\"tab-pane active pane-lead-details\" id=\"lead-tab\">
                ";
        // line 44
        if ($this->getAttribute((isset($context["object"]) ? $context["object"] : null), "getContactCard", array(), "method")) {
            // line 45
            echo "                    ";
            $context["contactCard"] = $this->getAttribute((isset($context["object"]) ? $context["object"] : null), "getContactCard", array(), "method");
            // line 46
            echo "                    ";
            echo twig_include($this->env, $context, "ZesharCRMCoreBundle:CRUD:DisplayPartial/lead_opportunity_show_entity_details_table.html.twig");
            echo "
                ";
        }
        // line 48
        echo "                ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("ZesharCRMCoreBundle:FormItems:entityDetails", array("subject" =>         // line 49
(isset($context["object"]) ? $context["object"] : null), "type" => "lead")));
        // line 52
        echo "
            </div>
            <div class=\"tab-pane pane-opportunity-details\" id=\"opportunity-tab\">
                ";
        // line 55
        if ($this->getAttribute((isset($context["object"]) ? $context["object"] : null), "getContactCardOpportunity", array(), "method")) {
            // line 56
            echo "                    ";
            $context["contactCard"] = $this->getAttribute((isset($context["object"]) ? $context["object"] : null), "getContactCardOpportunity", array(), "method");
            // line 57
            echo "                    ";
            echo twig_include($this->env, $context, "ZesharCRMCoreBundle:CRUD:DisplayPartial/lead_opportunity_show_entity_details_table.html.twig");
            echo "
                ";
        }
        // line 59
        echo "                ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("ZesharCRMCoreBundle:FormItems:entityDetails", array("subject" =>         // line 60
(isset($context["object"]) ? $context["object"] : null), "type" => "opportunity")));
        // line 63
        echo "
            </div>

        </div>


    </div>
";
    }

    public function getTemplateName()
    {
        return "ZesharCRMCoreBundle:CRUD/DisplayPartial:lead_opportunity_show_entity_details.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 63,  97 => 60,  95 => 59,  89 => 57,  86 => 56,  84 => 55,  79 => 52,  77 => 49,  75 => 48,  69 => 46,  66 => 45,  64 => 44,  19 => 1,);
    }
}
/* */
/* */
/*     <div class="custom-block table-block entity-details">*/
/*         <div class="modal fade" id="contactCardList" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">*/
/*             <div class="modal-dialog modal-lg">*/
/*                 <div class="modal-content">*/
/*                     <div class="modal-header">*/
/*                         <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>*/
/*                         <h4 class="modal-title">Contact Card List</h4>*/
/*                     </div>*/
/*                     <div class="modal-body">*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <div class="custom-head clearfix">*/
/*             <div class="custom-menu">*/
/*                     <a class="inline-edit-details" href="#"><button style="margin-top:0" class="edit-custom entity-details-edit">Edit</button></a>*/
/*                     <a class="inline-edit-details" href="#"><button style="width: 74px; margin-top:0" class="edit-custom entity-details-edit-cancel">Cancel</button></a>*/
/*                     <a class="inline-edit-details-save" href="#"><button style="color: green; width: 63px; margin-top:0" class="edit-custom entity-details-save">Save</button></a>*/
/* */
/* */
/*                 <div class="btn-group">*/
/*                     <button style="width: 130px;" class="btn btn-default dropdown-toggle" data-toggle="dropdown">*/
/*                         Select Contact*/
/*                         <span class="caret"></span>*/
/*                     </button>*/
/*                     <ul class="dropdown-menu custom-dropdown-menu">*/
/*                         <a href="#"><button style="width: 126px;" class="edit-custom wide-edit-custom inline-edit-copy-from-lead">Copy from lead</button></a>*/
/*                         <a href="#"><button style="width: 130px;" class="edit-custom wide-edit-custom entity-details-choose-contact">Choose Contact</button></a>*/
/*                     </ul>*/
/*                 </div>*/
/*             </div>*/
/* */
/*             <ul class="nav nav-pills block-tabs">*/
/*                 <li class="active"><a href="#lead-tab" role="tab" data-toggle="tab">Lead</a></li>*/
/*                 <li><a  href="#opportunity-tab" role="tab" data-toggle="tab">Contact Person</a></li>*/
/*             </ul>*/
/* */
/*         </div>*/
/*         <div class="custom-content tab-content form-block">*/
/* */
/*             <div class="tab-pane active pane-lead-details" id="lead-tab">*/
/*                 {% if object.getContactCard() %}*/
/*                     {% set contactCard = object.getContactCard() %}*/
/*                     {{ include('ZesharCRMCoreBundle:CRUD:DisplayPartial/lead_opportunity_show_entity_details_table.html.twig') }}*/
/*                 {% endif %}*/
/*                 {{ render(controller('ZesharCRMCoreBundle:FormItems:entityDetails', {*/
/*                 'subject': object,*/
/*                 'type': 'lead'*/
/* */
/*                 })) }}*/
/*             </div>*/
/*             <div class="tab-pane pane-opportunity-details" id="opportunity-tab">*/
/*                 {% if object.getContactCardOpportunity() %}*/
/*                     {% set contactCard = object.getContactCardOpportunity() %}*/
/*                     {{ include('ZesharCRMCoreBundle:CRUD:DisplayPartial/lead_opportunity_show_entity_details_table.html.twig') }}*/
/*                 {% endif %}*/
/*                 {{ render(controller('ZesharCRMCoreBundle:FormItems:entityDetails', {*/
/*                 'subject': object,*/
/*                 'type': 'opportunity'*/
/* */
/*                 })) }}*/
/*             </div>*/
/* */
/*         </div>*/
/* */
/* */
/*     </div>*/
/* */
