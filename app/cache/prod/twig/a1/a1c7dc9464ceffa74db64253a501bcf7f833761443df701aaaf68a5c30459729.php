<?php

/* ZesharCRMCoreBundle:CRUD/DisplayPartial:lead_opportunity_show_calendar.html.twig */
class __TwigTemplate_206f96ab6855ce58870bda541b8a2e7c3b3f4e2b8330ab0cbb026a8f53ecb677 extends Twig_Template
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
        echo "<div class=\"custom-block calendar-block\">
    <div class=\"custom-head clearfix\">
        <div class=\"custom-menu\">
            <button class=\"up-custom\"></button>
        </div>
        <h3>Appointments</h3>
    </div>
    <div class=\"clearfix\">
        <script type=\"text/javascript\">
            (function(\$) {
                \$(document).ready(function() {
                    \$('#lead_event_create').on('block-data-validate', function(e, params) {
                        var values = params.values;
                            //var eventDate = new Date(eventDate);
                            // @TODO check past date/time

                    });
                    \$('#lead_event_create').on('block-ajax-return', function(e, serverResponse) {
                        //console.log('ajax response', serverResponse);
                        \$(this).find('input').not('[type=\"hidden\"]').val('').trigger('change');
                        window.location.reload(); // todo - insert data without reload
                    });
                });
            })(jQuery);
        </script>
        <div id=\"lead_event_create\" class=\"display-block-persistent\" data-controller=\"leads_display\" data-action=\"leadEvent\">
            <div class=\"form-column\">
                <div class=\"form-group row\">
                    <div class=\"col-md-6\">
                        <label for=\"date2\">Date</label>
                        <input type=\"text\" id=\"date2\" class=\"form-control datepicker\" name=\"date\"/>
                    </div>
                    <div class=\"col-md-6\">
                        <label for=\"time\">Time</label>
                        <input type=\"text\" id=\"time\" class=\"form-control timepicker\" name=\"time\" />
                    </div>
                </div>
                <div class=\"form-group\">
                    <label for=\"compaign\">Location</label>
                    <input type=\"text\" id=\"location\" class=\"form-control\"/>
                </div>
                <input type=\"hidden\" id=\"lead_id\" name=\"lead_id\" value=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["object"]) ? $context["object"] : null), "getId", array(), "method"), "html", null, true);
        echo "\" />
            </div>
            <div class=\"form-column\">
                <div class=\"form-group row\">
                    <div class=\"col-md-6\">
                        <div class=\"form-group\">
                            <label for=\"type3\">Type</label>
                            ";
        // line 49
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("ZesharCRMCoreBundle:FormItems:leadEventTypeSelect", array()));
        // line 50
        echo "
                        </div>
                    </div>
                    <div class=\"col-md-6\">
                        <label for=\"compaign\">Goal</label>
                        ";
        // line 55
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("ZesharCRMCoreBundle:FormItems:leadEventGoalSelect", array()));
        // line 56
        echo "
                    </div>
                    ";
        // line 59
        echo "                        ";
        // line 60
        echo "                        ";
        // line 61
        echo "                    ";
        // line 62
        echo "                </div>
                ";
        // line 64
        echo "                    ";
        // line 65
        echo "                    ";
        // line 66
        echo "                ";
        // line 67
        echo "                ";
        // line 68
        echo "            </div>
            ";
        // line 69
        $this->loadTemplate("ZesharCRMCoreBundle:CRUD:DisplayPartial/lead_opportunity_show_block_actions.html.twig", "ZesharCRMCoreBundle:CRUD/DisplayPartial:lead_opportunity_show_calendar.html.twig", 69)->display(array_merge($context, array("show_cancel_link" => false, "save_button_title" => "Save")));
        // line 70
        echo "        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "ZesharCRMCoreBundle:CRUD/DisplayPartial:lead_opportunity_show_calendar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 70,  107 => 69,  104 => 68,  102 => 67,  100 => 66,  98 => 65,  96 => 64,  93 => 62,  91 => 61,  89 => 60,  87 => 59,  83 => 56,  81 => 55,  74 => 50,  72 => 49,  62 => 42,  19 => 1,);
    }
}
/* <div class="custom-block calendar-block">*/
/*     <div class="custom-head clearfix">*/
/*         <div class="custom-menu">*/
/*             <button class="up-custom"></button>*/
/*         </div>*/
/*         <h3>Appointments</h3>*/
/*     </div>*/
/*     <div class="clearfix">*/
/*         <script type="text/javascript">*/
/*             (function($) {*/
/*                 $(document).ready(function() {*/
/*                     $('#lead_event_create').on('block-data-validate', function(e, params) {*/
/*                         var values = params.values;*/
/*                             //var eventDate = new Date(eventDate);*/
/*                             // @TODO check past date/time*/
/* */
/*                     });*/
/*                     $('#lead_event_create').on('block-ajax-return', function(e, serverResponse) {*/
/*                         //console.log('ajax response', serverResponse);*/
/*                         $(this).find('input').not('[type="hidden"]').val('').trigger('change');*/
/*                         window.location.reload(); // todo - insert data without reload*/
/*                     });*/
/*                 });*/
/*             })(jQuery);*/
/*         </script>*/
/*         <div id="lead_event_create" class="display-block-persistent" data-controller="leads_display" data-action="leadEvent">*/
/*             <div class="form-column">*/
/*                 <div class="form-group row">*/
/*                     <div class="col-md-6">*/
/*                         <label for="date2">Date</label>*/
/*                         <input type="text" id="date2" class="form-control datepicker" name="date"/>*/
/*                     </div>*/
/*                     <div class="col-md-6">*/
/*                         <label for="time">Time</label>*/
/*                         <input type="text" id="time" class="form-control timepicker" name="time" />*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                     <label for="compaign">Location</label>*/
/*                     <input type="text" id="location" class="form-control"/>*/
/*                 </div>*/
/*                 <input type="hidden" id="lead_id" name="lead_id" value="{{ object.getId() }}" />*/
/*             </div>*/
/*             <div class="form-column">*/
/*                 <div class="form-group row">*/
/*                     <div class="col-md-6">*/
/*                         <div class="form-group">*/
/*                             <label for="type3">Type</label>*/
/*                             {{ render(controller('ZesharCRMCoreBundle:FormItems:leadEventTypeSelect', {*/
/*                             })) }}*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="col-md-6">*/
/*                         <label for="compaign">Goal</label>*/
/*                         {{ render(controller('ZesharCRMCoreBundle:FormItems:leadEventGoalSelect', {*/
/*                         })) }}*/
/*                     </div>*/
/*                     {#<div class="col-md-6">#}*/
/*                         {#<label for="compaign">Time</label>#}*/
/*                         {#<input type="text" id="compaign" class="form-control"/>#}*/
/*                     {#</div>#}*/
/*                 </div>*/
/*                 {#<div class="form-group">#}*/
/*                     {#<label for="compaign">Goal</label>#}*/
/*                     {#<input type="text" id="goal" name="goal" class="form-control"/>#}*/
/*                 {#</div>#}*/
/*                 {#{% include('ZesharCRMCoreBundle:CRUD:DisplayPartial/lead_opportunity_show_block_actions.html.twig') with {'show_cancel_link': false, 'save_button_title': 'Create'} %}#}*/
/*             </div>*/
/*             {% include('ZesharCRMCoreBundle:CRUD:DisplayPartial/lead_opportunity_show_block_actions.html.twig') with {'show_cancel_link': false, 'save_button_title': 'Save'} %}*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
