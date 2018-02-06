<?php

/* ZesharCRMGoalsBundle:CRUD:goal_js.html.twig */
class __TwigTemplate_f5562e4fcf72e1459fb473a716a0b4b2d0bda5b13653fabdcbdeda7f6911da84 extends Twig_Template
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
        echo "<script type=text/javascript>
    \$(document).ready(function() {
        \"use strict\";

        var goal = {
            tableWrapper: \$('.sonata-ba-view-container'),
            wrapper: \$('body'),

            updateFields: function(){

                goal.tableWrapper.on('change', '.goal-text-edit', function(){
                    goal.updateValue(\$(this));
                });
            },

            updateValue: function(item) {
                var globalPoints = parseFloat(goal.wrapper.find('input.product-points').val());
                var globalPercent = parseFloat(goal.wrapper.find('input.global-percent').val());
                var globalEstimated = parseFloat(goal.wrapper.find('input.goal-estimated').val());

                console.log(globalPoints);
                console.log(globalPercent);
                console.log(globalEstimated);

                var tr = item.parents('tr');

                var points = tr.find('td.goal-points input.points');
                var percent = tr.find('td.goal-percent input.percent');
                var items = tr.find('td.goal-items input.items');

                var finalItems = 0;
                var finalPercent = 0;
                var currentPercent = 0;
                var finalPoints = 0;

                if (item.hasClass('percent')) {
                     finalPercent = parseFloat(percent.val());
                     currentPercent = parseFloat(globalPercent/100 * parseFloat(percent.val()));
                    if (globalPercent != 0) {
                         finalItems = parseFloat(globalEstimated * currentPercent / globalPercent);
                    } else {
                        finalItems = 0;
                    }
                    finalPoints = parseFloat(globalPoints * finalItems);
                }

                if (item.hasClass('points')) {
                    finalPoints = parseFloat(points.val());

                    if (globalPoints != 0) {
                        finalItems = parseFloat(finalPoints / globalPoints);
                    } else {
                        finalItems = 0;
                    }
                    if (globalEstimated != 0) {
                        currentPercent = parseFloat(finalItems * globalPercent / globalEstimated);
                    } else {
                        currentPercent = 0;
                    }

                    if (globalPercent != 0) {
                        finalPercent = parseFloat(currentPercent * 100 /globalPercent);
                    } else {
                        finalPercent = 0;
                    }

                }

                if (item.hasClass('items')) {
                    finalItems = parseFloat(items.val());
                    finalPoints = parseFloat(finalItems * globalPoints);

                    if (globalEstimated != 0) {
                        currentPercent = parseFloat(finalItems * globalPercent / globalEstimated);
                    } else {
                        currentPercent = 0;
                    }

                    if (globalPercent != 0) {
                        finalPercent = parseFloat(currentPercent * 100 /globalPercent);
                    } else {
                        finalPercent = 0;
                    }

                }

                points.val(finalPoints.toFixed(2));
                items.val(finalItems.toFixed(2));
                percent.val(finalPercent.toFixed(2));

                var globalPercentUpdate = 0;

                goal.tableWrapper.each(function(){
                    globalPercentUpdate += parseFloat(\$(this).find('input.percent').val());
                });

                \$('.total-amount .total-percent').html(globalPercentUpdate.toFixed(2));
            },

            saveValue: function(){
                goal.wrapper.on('click', '.goal-action-save', function(){
                    var data = {};
                    var goalId = \$('table.table').data('goalId');
                    var ajaxUrl = \"";
        // line 104
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "getBaseURL", array(), "method"), "html", null, true);
        echo "/ajax/goal_global_admin/saveGoalAssigns\";
                    goal.tableWrapper.each(function(){
                        var dataElem = {};
                        dataElem['points'] = parseFloat(\$(this).find('.goal-points input.points').val());
                        dataElem['percent'] = parseFloat(\$(this).find('.goal-percent input.percent').val());
                        dataElem['items'] = parseFloat(\$(this).find('.goal-items input.items').val());
                        var userId = \$(this).find('.goal-user').data('userId');
                        data[userId] = dataElem;
                    });
                    data['goalId'] = goalId;

                    \$.ajax(ajaxUrl, {
                        'data': data,
                        'type': 'POST',
                        'success': function (response) {
                            window.location.href = \"";
        // line 119
        echo $this->env->getExtension('routing')->getPath("zeshar_crm_goals_users");
        echo "\";
                        },
                        'error': function () {
                            console.log('ajax error');
                            alert('A error occured while AJAX request.');
                        }
                    });
                });
            },

            init: function(){
                goal.updateFields();
                goal.saveValue();
            }
        };

        goal.init();
    });
</script>";
    }

    public function getTemplateName()
    {
        return "ZesharCRMGoalsBundle:CRUD:goal_js.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 119,  124 => 104,  19 => 1,);
    }
}
/* <script type=text/javascript>*/
/*     $(document).ready(function() {*/
/*         "use strict";*/
/* */
/*         var goal = {*/
/*             tableWrapper: $('.sonata-ba-view-container'),*/
/*             wrapper: $('body'),*/
/* */
/*             updateFields: function(){*/
/* */
/*                 goal.tableWrapper.on('change', '.goal-text-edit', function(){*/
/*                     goal.updateValue($(this));*/
/*                 });*/
/*             },*/
/* */
/*             updateValue: function(item) {*/
/*                 var globalPoints = parseFloat(goal.wrapper.find('input.product-points').val());*/
/*                 var globalPercent = parseFloat(goal.wrapper.find('input.global-percent').val());*/
/*                 var globalEstimated = parseFloat(goal.wrapper.find('input.goal-estimated').val());*/
/* */
/*                 console.log(globalPoints);*/
/*                 console.log(globalPercent);*/
/*                 console.log(globalEstimated);*/
/* */
/*                 var tr = item.parents('tr');*/
/* */
/*                 var points = tr.find('td.goal-points input.points');*/
/*                 var percent = tr.find('td.goal-percent input.percent');*/
/*                 var items = tr.find('td.goal-items input.items');*/
/* */
/*                 var finalItems = 0;*/
/*                 var finalPercent = 0;*/
/*                 var currentPercent = 0;*/
/*                 var finalPoints = 0;*/
/* */
/*                 if (item.hasClass('percent')) {*/
/*                      finalPercent = parseFloat(percent.val());*/
/*                      currentPercent = parseFloat(globalPercent/100 * parseFloat(percent.val()));*/
/*                     if (globalPercent != 0) {*/
/*                          finalItems = parseFloat(globalEstimated * currentPercent / globalPercent);*/
/*                     } else {*/
/*                         finalItems = 0;*/
/*                     }*/
/*                     finalPoints = parseFloat(globalPoints * finalItems);*/
/*                 }*/
/* */
/*                 if (item.hasClass('points')) {*/
/*                     finalPoints = parseFloat(points.val());*/
/* */
/*                     if (globalPoints != 0) {*/
/*                         finalItems = parseFloat(finalPoints / globalPoints);*/
/*                     } else {*/
/*                         finalItems = 0;*/
/*                     }*/
/*                     if (globalEstimated != 0) {*/
/*                         currentPercent = parseFloat(finalItems * globalPercent / globalEstimated);*/
/*                     } else {*/
/*                         currentPercent = 0;*/
/*                     }*/
/* */
/*                     if (globalPercent != 0) {*/
/*                         finalPercent = parseFloat(currentPercent * 100 /globalPercent);*/
/*                     } else {*/
/*                         finalPercent = 0;*/
/*                     }*/
/* */
/*                 }*/
/* */
/*                 if (item.hasClass('items')) {*/
/*                     finalItems = parseFloat(items.val());*/
/*                     finalPoints = parseFloat(finalItems * globalPoints);*/
/* */
/*                     if (globalEstimated != 0) {*/
/*                         currentPercent = parseFloat(finalItems * globalPercent / globalEstimated);*/
/*                     } else {*/
/*                         currentPercent = 0;*/
/*                     }*/
/* */
/*                     if (globalPercent != 0) {*/
/*                         finalPercent = parseFloat(currentPercent * 100 /globalPercent);*/
/*                     } else {*/
/*                         finalPercent = 0;*/
/*                     }*/
/* */
/*                 }*/
/* */
/*                 points.val(finalPoints.toFixed(2));*/
/*                 items.val(finalItems.toFixed(2));*/
/*                 percent.val(finalPercent.toFixed(2));*/
/* */
/*                 var globalPercentUpdate = 0;*/
/* */
/*                 goal.tableWrapper.each(function(){*/
/*                     globalPercentUpdate += parseFloat($(this).find('input.percent').val());*/
/*                 });*/
/* */
/*                 $('.total-amount .total-percent').html(globalPercentUpdate.toFixed(2));*/
/*             },*/
/* */
/*             saveValue: function(){*/
/*                 goal.wrapper.on('click', '.goal-action-save', function(){*/
/*                     var data = {};*/
/*                     var goalId = $('table.table').data('goalId');*/
/*                     var ajaxUrl = "{{ app.request.getBaseURL() }}/ajax/goal_global_admin/saveGoalAssigns";*/
/*                     goal.tableWrapper.each(function(){*/
/*                         var dataElem = {};*/
/*                         dataElem['points'] = parseFloat($(this).find('.goal-points input.points').val());*/
/*                         dataElem['percent'] = parseFloat($(this).find('.goal-percent input.percent').val());*/
/*                         dataElem['items'] = parseFloat($(this).find('.goal-items input.items').val());*/
/*                         var userId = $(this).find('.goal-user').data('userId');*/
/*                         data[userId] = dataElem;*/
/*                     });*/
/*                     data['goalId'] = goalId;*/
/* */
/*                     $.ajax(ajaxUrl, {*/
/*                         'data': data,*/
/*                         'type': 'POST',*/
/*                         'success': function (response) {*/
/*                             window.location.href = "{{ path('zeshar_crm_goals_users') }}";*/
/*                         },*/
/*                         'error': function () {*/
/*                             console.log('ajax error');*/
/*                             alert('A error occured while AJAX request.');*/
/*                         }*/
/*                     });*/
/*                 });*/
/*             },*/
/* */
/*             init: function(){*/
/*                 goal.updateFields();*/
/*                 goal.saveValue();*/
/*             }*/
/*         };*/
/* */
/*         goal.init();*/
/*     });*/
/* </script>*/
