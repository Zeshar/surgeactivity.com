<?php

/* ZesharCRMCoreBundle:CRUD/DisplayPartial:lead_opportunity_show_generic_history.html.twig */
class __TwigTemplate_7f907818b4ce76d8804356588a164166f6e8425a673473302767128620689ac8 extends Twig_Template
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
        $__internal_e555478e2a61aeb915afd5775da34e01b52f83ee36d1bc85e9cc31d3bd1226e6 = $this->env->getExtension("native_profiler");
        $__internal_e555478e2a61aeb915afd5775da34e01b52f83ee36d1bc85e9cc31d3bd1226e6->enter($__internal_e555478e2a61aeb915afd5775da34e01b52f83ee36d1bc85e9cc31d3bd1226e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ZesharCRMCoreBundle:CRUD/DisplayPartial:lead_opportunity_show_generic_history.html.twig"));

        // line 1
        echo "<div class=\"custom-block custom-block-history\">
    <div class=\"custom-head clearfix\">
        <h3>Lead History</h3>
    </div>
    <script type=\"text/javascript\">
        (function(\$) {
            \$(document).ready(function() {
                \$('#lead_assignee').on('block-ajax-return', function(e, serverResponse) {
                    //console.log('ajax response', serverResponse);
                    \$(this).find('input').not('[type=\"hidden\"]').val('').trigger('change');
                    window.location.reload(); // todo - insert data without reload
                });
            });
        })(jQuery);
    </script>
    <div class=\"form-column\">
        <div class=\"form-group\">
            <label for=\"createdate\">Created At</label>
            <input type=\"text\" id=\"createdate\" disabled class=\"form-control\" name=\"pckr0\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "createdAt", array()), "M d, Y"), "html", null, true);
        echo "\"/>
        </div>
        <div id=\"lead_assignee\" class=\"form-group display-block-persistent\" data-controller=\"leads_display\" data-action=\"leadAssign\">
            ";
        // line 22
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 23
            echo "                ";
            $context["disabled"] = false;
            // line 24
            echo "            ";
        } else {
            // line 25
            echo "                ";
            $context["disabled"] = true;
            // line 26
            echo "            ";
        }
        // line 27
        echo "            <label for=\"asign\">Asignee</label>
            ";
        // line 28
        echo twig_escape_filter($this->env, (( !twig_test_empty($this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "getAssignee", array(), "method"))) ? ($this->getAttribute($this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "getAssignee", array(), "method"), "getId", array(), "method")) : ("N/A")), "html", null, true);
        echo "
            ";
        // line 29
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("ZesharCRMCoreBundle:FormItems:assigneeSelect", array("activeId" => (( !twig_test_empty($this->getAttribute(        // line 30
(isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "getAssignee", array(), "method"))) ? ($this->getAttribute($this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "getAssignee", array(), "method"), "getId", array(), "method")) : (null)), "disabled" =>         // line 31
(isset($context["disabled"]) ? $context["disabled"] : $this->getContext($context, "disabled")))));
        // line 32
        echo "
            <input type=\"hidden\" id=\"lead_id\" name=\"lead_id\" value=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "getId", array(), "method"), "html", null, true);
        echo "\" />
            ";
        // line 34
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 35
            echo "                ";
            $this->loadTemplate("ZesharCRMCoreBundle:CRUD:DisplayPartial/lead_opportunity_show_block_actions.html.twig", "ZesharCRMCoreBundle:CRUD/DisplayPartial:lead_opportunity_show_generic_history.html.twig", 35)->display(array_merge($context, array("show_cancel_link" => false, "save_button_title" => "Assign")));
            // line 36
            echo "            ";
        }
        // line 37
        echo "        </div>
        <div class=\"form-group\">
            <label for=\"source\">Lead Source</label>
            <input type=\"text\" disabled=\"disabled\" class=\"form-control\" value=\"";
        // line 40
        echo twig_escape_filter($this->env, (( !twig_test_empty($this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "getLeadSource", array(), "method"))) ? ($this->getAttribute($this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "getLeadSource", array(), "method"), "getTitle", array(), "method")) : ("(none)")), "html", null, true);
        echo "\"/>
        </div>
        <div class=\"form-group\">
            <label for=\"compaign\">Activity</label>
            <input type=\"text\" disabled=\"disabled\" class=\"form-control\" value=\"";
        // line 44
        echo twig_escape_filter($this->env, (( !twig_test_empty($this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "getLeadCampaign", array(), "method"))) ? ($this->getAttribute($this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "getLeadCampaign", array(), "method"), "getTitle", array(), "method")) : ("(none)")), "html", null, true);
        echo "\"/>
        </div>
    </div>
</div>";
        
        $__internal_e555478e2a61aeb915afd5775da34e01b52f83ee36d1bc85e9cc31d3bd1226e6->leave($__internal_e555478e2a61aeb915afd5775da34e01b52f83ee36d1bc85e9cc31d3bd1226e6_prof);

    }

    public function getTemplateName()
    {
        return "ZesharCRMCoreBundle:CRUD/DisplayPartial:lead_opportunity_show_generic_history.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 44,  93 => 40,  88 => 37,  85 => 36,  82 => 35,  80 => 34,  76 => 33,  73 => 32,  71 => 31,  70 => 30,  69 => 29,  65 => 28,  62 => 27,  59 => 26,  56 => 25,  53 => 24,  50 => 23,  48 => 22,  42 => 19,  22 => 1,);
    }
}
/* <div class="custom-block custom-block-history">*/
/*     <div class="custom-head clearfix">*/
/*         <h3>Lead History</h3>*/
/*     </div>*/
/*     <script type="text/javascript">*/
/*         (function($) {*/
/*             $(document).ready(function() {*/
/*                 $('#lead_assignee').on('block-ajax-return', function(e, serverResponse) {*/
/*                     //console.log('ajax response', serverResponse);*/
/*                     $(this).find('input').not('[type="hidden"]').val('').trigger('change');*/
/*                     window.location.reload(); // todo - insert data without reload*/
/*                 });*/
/*             });*/
/*         })(jQuery);*/
/*     </script>*/
/*     <div class="form-column">*/
/*         <div class="form-group">*/
/*             <label for="createdate">Created At</label>*/
/*             <input type="text" id="createdate" disabled class="form-control" name="pckr0" value="{{ object.createdAt|date('M d, Y') }}"/>*/
/*         </div>*/
/*         <div id="lead_assignee" class="form-group display-block-persistent" data-controller="leads_display" data-action="leadAssign">*/
/*             {% if is_granted('ROLE_ADMIN') %}*/
/*                 {% set disabled = false %}*/
/*             {% else %}*/
/*                 {% set disabled = true %}*/
/*             {% endif %}*/
/*             <label for="asign">Asignee</label>*/
/*             {{  object.getAssignee() is not empty ? object.getAssignee().getId() : 'N/A' }}*/
/*             {{ render(controller('ZesharCRMCoreBundle:FormItems:assigneeSelect', {*/
/*                 'activeId': object.getAssignee() is not empty ? object.getAssignee().getId() : null,*/
/*                 'disabled': disabled*/
/*             })) }}*/
/*             <input type="hidden" id="lead_id" name="lead_id" value="{{ object.getId() }}" />*/
/*             {% if is_granted('ROLE_ADMIN') %}*/
/*                 {% include('ZesharCRMCoreBundle:CRUD:DisplayPartial/lead_opportunity_show_block_actions.html.twig') with {'show_cancel_link': false, 'save_button_title': 'Assign'} %}*/
/*             {% endif %}*/
/*         </div>*/
/*         <div class="form-group">*/
/*             <label for="source">Lead Source</label>*/
/*             <input type="text" disabled="disabled" class="form-control" value="{{ object.getLeadSource() is not empty ? object.getLeadSource().getTitle() : '(none)'  }}"/>*/
/*         </div>*/
/*         <div class="form-group">*/
/*             <label for="compaign">Activity</label>*/
/*             <input type="text" disabled="disabled" class="form-control" value="{{ object.getLeadCampaign() is not empty ? object.getLeadCampaign().getTitle() : '(none)'  }}"/>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
