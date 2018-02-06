<?php

/* ZesharCRMCoreBundle:CRUD/DisplayPartial:lead_opportunity_show_calendar.html.twig */
class __TwigTemplate_c325990a290bbb3dc2496fc91204ad4045d9d3bce1eafca9a622dccb5294f1a6 extends Twig_Template
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
        $__internal_2069b80993416081d282f3da6af796e7ac537e7c8251725df29668931e7c2922 = $this->env->getExtension("native_profiler");
        $__internal_2069b80993416081d282f3da6af796e7ac537e7c8251725df29668931e7c2922->enter($__internal_2069b80993416081d282f3da6af796e7ac537e7c8251725df29668931e7c2922_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ZesharCRMCoreBundle:CRUD/DisplayPartial:lead_opportunity_show_calendar.html.twig"));

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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "getId", array(), "method"), "html", null, true);
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
        
        $__internal_2069b80993416081d282f3da6af796e7ac537e7c8251725df29668931e7c2922->leave($__internal_2069b80993416081d282f3da6af796e7ac537e7c8251725df29668931e7c2922_prof);

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
        return array (  112 => 70,  110 => 69,  107 => 68,  105 => 67,  103 => 66,  101 => 65,  99 => 64,  96 => 62,  94 => 61,  92 => 60,  90 => 59,  86 => 56,  84 => 55,  77 => 50,  75 => 49,  65 => 42,  22 => 1,);
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
