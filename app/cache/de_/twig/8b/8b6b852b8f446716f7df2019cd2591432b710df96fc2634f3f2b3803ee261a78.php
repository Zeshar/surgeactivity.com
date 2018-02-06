<?php

/* ZesharCRMCoreBundle:CRUD/DisplayPartial:lead_opportunity_edit_entity_details.html.twig */
class __TwigTemplate_49f8e98750bf5665788a136f1365db31c4afa177471298beeade81f616312979 extends Twig_Template
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
        $__internal_7b663dc7cffdc22dc6b2a95798b21490ac7db5f1891ca541540008d5907cc86a = $this->env->getExtension("native_profiler");
        $__internal_7b663dc7cffdc22dc6b2a95798b21490ac7db5f1891ca541540008d5907cc86a->enter($__internal_7b663dc7cffdc22dc6b2a95798b21490ac7db5f1891ca541540008d5907cc86a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ZesharCRMCoreBundle:CRUD/DisplayPartial:lead_opportunity_edit_entity_details.html.twig"));

        // line 1
        echo "<div class=\"custom-block table-block entity-details\">
    <div class=\"custom-head clearfix\">
        <div class=\"custom-menu\">
            <a class=\"inline-edit-details\" href=\"#\"><button class=\"edit-custom entity-details-edit\">Edit</button></a>
            <a class=\"inline-edit-details-save\" href=\"#\"><button style=\"color: green; width: 63px;\" class=\"edit-custom entity-details-edit\">Save</button></a>
            <a href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getContactDelegate", array(), "method"), "generateContactCardObjectUrl", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), 1 => "edit"), "method"), "html", null, true);
        echo "\"><button class=\"edit-custom wide-edit-custom\">Choose Contact</button></a>
        </div>
        <ul class=\"nav nav-pills block-tabs\">
                <li class=\"active\"><a href=\"#lead-tab\" role=\"tab\" data-toggle=\"tab\">";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getLabel", array(), "method"), "html", null, true);
        echo " Details</a></li>
                <li><a  href=\"#opportunity-tab\" role=\"tab\" data-toggle=\"tab\">Opportunity</a></li>
        </ul>

    </div>
    <div class=\"custom-content tab-content form-block\">

        <div class=\"tab-pane active\" id=\"lead-tab\">
            ";
        // line 17
        if ($this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "getContactCard", array(), "method")) {
            // line 18
            echo "                ";
            echo twig_include($this->env, $context, "ZesharCRMCoreBundle:CRUD:DisplayPartial/lead_opportunity_show_entity_details_table.html.twig");
            echo "
            ";
        }
        // line 20
        echo "            ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("ZesharCRMCoreBundle:FormItems:entityDetails", array("subject" =>         // line 21
(isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "type" => "lead")));
        // line 24
        echo "
        </div>
        <div class=\"tab-pane\" id=\"opportunity-tab\">
            ";
        // line 27
        if ($this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "getContactCardOpportunity", array(), "method")) {
            // line 28
            echo "                ";
            echo twig_include($this->env, $context, "ZesharCRMCoreBundle:CRUD:DisplayPartial/lead_opportunity_show_entity_details_table.html.twig");
            echo "
            ";
        }
        // line 30
        echo "            ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("ZesharCRMCoreBundle:FormItems:entityDetails", array("subject" =>         // line 31
(isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "type" => "opportunity")));
        // line 34
        echo "
        </div>

    </div>
</div>
<div class=\"modal fade\" id=\"choose_contactCard\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-lg\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                <h4 class=\"modal-title\"></h4>
            </div>
            <div class=\"modal-body\">
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_7b663dc7cffdc22dc6b2a95798b21490ac7db5f1891ca541540008d5907cc86a->leave($__internal_7b663dc7cffdc22dc6b2a95798b21490ac7db5f1891ca541540008d5907cc86a_prof);

    }

    public function getTemplateName()
    {
        return "ZesharCRMCoreBundle:CRUD/DisplayPartial:lead_opportunity_edit_entity_details.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 34,  73 => 31,  71 => 30,  65 => 28,  63 => 27,  58 => 24,  56 => 21,  54 => 20,  48 => 18,  46 => 17,  35 => 9,  29 => 6,  22 => 1,);
    }
}
/* <div class="custom-block table-block entity-details">*/
/*     <div class="custom-head clearfix">*/
/*         <div class="custom-menu">*/
/*             <a class="inline-edit-details" href="#"><button class="edit-custom entity-details-edit">Edit</button></a>*/
/*             <a class="inline-edit-details-save" href="#"><button style="color: green; width: 63px;" class="edit-custom entity-details-edit">Save</button></a>*/
/*             <a href="{{ admin.getContactDelegate().generateContactCardObjectUrl(object, 'edit') }}"><button class="edit-custom wide-edit-custom">Choose Contact</button></a>*/
/*         </div>*/
/*         <ul class="nav nav-pills block-tabs">*/
/*                 <li class="active"><a href="#lead-tab" role="tab" data-toggle="tab">{{ admin.getLabel() }} Details</a></li>*/
/*                 <li><a  href="#opportunity-tab" role="tab" data-toggle="tab">Opportunity</a></li>*/
/*         </ul>*/
/* */
/*     </div>*/
/*     <div class="custom-content tab-content form-block">*/
/* */
/*         <div class="tab-pane active" id="lead-tab">*/
/*             {% if object.getContactCard() %}*/
/*                 {{ include('ZesharCRMCoreBundle:CRUD:DisplayPartial/lead_opportunity_show_entity_details_table.html.twig') }}*/
/*             {% endif %}*/
/*             {{ render(controller('ZesharCRMCoreBundle:FormItems:entityDetails', {*/
/*             'subject': object,*/
/*             'type': 'lead'*/
/* */
/*             })) }}*/
/*         </div>*/
/*         <div class="tab-pane" id="opportunity-tab">*/
/*             {% if object.getContactCardOpportunity() %}*/
/*                 {{ include('ZesharCRMCoreBundle:CRUD:DisplayPartial/lead_opportunity_show_entity_details_table.html.twig') }}*/
/*             {% endif %}*/
/*             {{ render(controller('ZesharCRMCoreBundle:FormItems:entityDetails', {*/
/*             'subject': object,*/
/*             'type': 'opportunity'*/
/* */
/*             })) }}*/
/*         </div>*/
/* */
/*     </div>*/
/* </div>*/
/* <div class="modal fade" id="choose_contactCard" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">*/
/*     <div class="modal-dialog modal-lg">*/
/*         <div class="modal-content">*/
/*             <div class="modal-header">*/
/*                 <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>*/
/*                 <h4 class="modal-title"></h4>*/
/*             </div>*/
/*             <div class="modal-body">*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
