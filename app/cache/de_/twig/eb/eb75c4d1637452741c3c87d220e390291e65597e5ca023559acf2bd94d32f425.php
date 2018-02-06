<?php

/* ZesharCRMCoreBundle:CRUD/DisplayPartial:lead_opportunity_show_entity_details.html.twig */
class __TwigTemplate_a771e75e674c962dd64b8fb1fb27e6d2d6bcc111359a69288966c7b1ba1b1b7a extends Twig_Template
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
        $__internal_dbd7cff07caf47adb60e2b8398df3bdba4e54fa6abe30ec0616855a885abb6ec = $this->env->getExtension("native_profiler");
        $__internal_dbd7cff07caf47adb60e2b8398df3bdba4e54fa6abe30ec0616855a885abb6ec->enter($__internal_dbd7cff07caf47adb60e2b8398df3bdba4e54fa6abe30ec0616855a885abb6ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ZesharCRMCoreBundle:CRUD/DisplayPartial:lead_opportunity_show_entity_details.html.twig"));

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
        if ($this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "getContactCard", array(), "method")) {
            // line 45
            echo "                    ";
            $context["contactCard"] = $this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "getContactCard", array(), "method");
            // line 46
            echo "                    ";
            echo twig_include($this->env, $context, "ZesharCRMCoreBundle:CRUD:DisplayPartial/lead_opportunity_show_entity_details_table.html.twig");
            echo "
                ";
        }
        // line 48
        echo "                ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("ZesharCRMCoreBundle:FormItems:entityDetails", array("subject" =>         // line 49
(isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "type" => "lead")));
        // line 52
        echo "
            </div>
            <div class=\"tab-pane pane-opportunity-details\" id=\"opportunity-tab\">
                ";
        // line 55
        if ($this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "getContactCardOpportunity", array(), "method")) {
            // line 56
            echo "                    ";
            $context["contactCard"] = $this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "getContactCardOpportunity", array(), "method");
            // line 57
            echo "                    ";
            echo twig_include($this->env, $context, "ZesharCRMCoreBundle:CRUD:DisplayPartial/lead_opportunity_show_entity_details_table.html.twig");
            echo "
                ";
        }
        // line 59
        echo "                ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("ZesharCRMCoreBundle:FormItems:entityDetails", array("subject" =>         // line 60
(isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "type" => "opportunity")));
        // line 63
        echo "
            </div>

        </div>


    </div>
";
        
        $__internal_dbd7cff07caf47adb60e2b8398df3bdba4e54fa6abe30ec0616855a885abb6ec->leave($__internal_dbd7cff07caf47adb60e2b8398df3bdba4e54fa6abe30ec0616855a885abb6ec_prof);

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
        return array (  102 => 63,  100 => 60,  98 => 59,  92 => 57,  89 => 56,  87 => 55,  82 => 52,  80 => 49,  78 => 48,  72 => 46,  69 => 45,  67 => 44,  22 => 1,);
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
