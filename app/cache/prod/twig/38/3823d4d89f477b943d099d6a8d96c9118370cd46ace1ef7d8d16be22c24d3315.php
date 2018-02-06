<?php

/* ZesharCRMGoalsBundle:CRUD:goal_report_js.html.twig */
class __TwigTemplate_4421e5134be6db3abdaad1eb77dab01d44b199e1542437ea45f78d69e15e1ac2 extends Twig_Template
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

        var goalReport = {

            tableRowWrapper: \$('.sonata-ba-view-container'),

            commonReport: function(){

//                goalReport.tableRowWrapper.on('click', 'a.report-username', function(){
//
//                    var allChildTables = \$('.child-table');
//                    allChildTables.hide();
//
//                    var childTable = \$(this).parents('tr').next();
//
//                    if (childTable.hasClass('visible')) {
//                        console.log(childTable);
//                        childTable.hide();
//                        childTable.removeClass('visible');
//                    } else {
//                        childTable.show();
//                        allChildTables.removeClass('visible');
//                        childTable.addClass('visible');
//                    }
//
//                });

                goalReport.tableRowWrapper.on('click', '.report-child', function(){


                    var allChildTablesWrapper = \$('.child-table');
                    allChildTablesWrapper.hide();

                    var childTableWrapper = \$(this).parents('tr').next();

                   // if (childTableWrapper.find())

//                    if (childTableWrapper.hasClass('visible')) {
//                        console.log(childTableWrapper);
//                        childTableWrapper.hide();
//                        childTableWrapper.removeClass('visible');
//                    } else {
//                        childTableWrapper.show();
//                        allChildTables.removeClass('visible');
//                        childTableWrapper.addClass('visible');
//                    }

                    var entityType = \$(this).data('childType');

                    var childTable = \$('.child-goal-report-table');
                    childTable.hide();
                    var currentChildTable = \$('.child-goal-report-table.'+entityType);

                    if (childTableWrapper.hasClass('visible')) {
                        if (currentChildTable.hasClass('visible')) {
                            childTableWrapper.hide();
                            childTableWrapper.removeClass('visible');
                            currentChildTable.removeClass('visible');
                        } else {
                            childTableWrapper.show();
                            allChildTablesWrapper.removeClass('visible');
                            childTableWrapper.addClass('visible');
                            childTable.removeClass('visible');
                            currentChildTable.show().addClass('visible');
                        }
                    } else {
                        childTableWrapper.show();
                        allChildTablesWrapper.removeClass('visible');
                        childTableWrapper.addClass('visible');
                        currentChildTable.show().addClass('visible');
                    }

                    return false;
            });

            },

            init: function(){
                goalReport.commonReport();
            }
        };

        goalReport.init();
    });
</script>";
    }

    public function getTemplateName()
    {
        return "ZesharCRMGoalsBundle:CRUD:goal_report_js.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* <script type=text/javascript>*/
/*     $(document).ready(function() {*/
/*         "use strict";*/
/* */
/*         var goalReport = {*/
/* */
/*             tableRowWrapper: $('.sonata-ba-view-container'),*/
/* */
/*             commonReport: function(){*/
/* */
/* //                goalReport.tableRowWrapper.on('click', 'a.report-username', function(){*/
/* //*/
/* //                    var allChildTables = $('.child-table');*/
/* //                    allChildTables.hide();*/
/* //*/
/* //                    var childTable = $(this).parents('tr').next();*/
/* //*/
/* //                    if (childTable.hasClass('visible')) {*/
/* //                        console.log(childTable);*/
/* //                        childTable.hide();*/
/* //                        childTable.removeClass('visible');*/
/* //                    } else {*/
/* //                        childTable.show();*/
/* //                        allChildTables.removeClass('visible');*/
/* //                        childTable.addClass('visible');*/
/* //                    }*/
/* //*/
/* //                });*/
/* */
/*                 goalReport.tableRowWrapper.on('click', '.report-child', function(){*/
/* */
/* */
/*                     var allChildTablesWrapper = $('.child-table');*/
/*                     allChildTablesWrapper.hide();*/
/* */
/*                     var childTableWrapper = $(this).parents('tr').next();*/
/* */
/*                    // if (childTableWrapper.find())*/
/* */
/* //                    if (childTableWrapper.hasClass('visible')) {*/
/* //                        console.log(childTableWrapper);*/
/* //                        childTableWrapper.hide();*/
/* //                        childTableWrapper.removeClass('visible');*/
/* //                    } else {*/
/* //                        childTableWrapper.show();*/
/* //                        allChildTables.removeClass('visible');*/
/* //                        childTableWrapper.addClass('visible');*/
/* //                    }*/
/* */
/*                     var entityType = $(this).data('childType');*/
/* */
/*                     var childTable = $('.child-goal-report-table');*/
/*                     childTable.hide();*/
/*                     var currentChildTable = $('.child-goal-report-table.'+entityType);*/
/* */
/*                     if (childTableWrapper.hasClass('visible')) {*/
/*                         if (currentChildTable.hasClass('visible')) {*/
/*                             childTableWrapper.hide();*/
/*                             childTableWrapper.removeClass('visible');*/
/*                             currentChildTable.removeClass('visible');*/
/*                         } else {*/
/*                             childTableWrapper.show();*/
/*                             allChildTablesWrapper.removeClass('visible');*/
/*                             childTableWrapper.addClass('visible');*/
/*                             childTable.removeClass('visible');*/
/*                             currentChildTable.show().addClass('visible');*/
/*                         }*/
/*                     } else {*/
/*                         childTableWrapper.show();*/
/*                         allChildTablesWrapper.removeClass('visible');*/
/*                         childTableWrapper.addClass('visible');*/
/*                         currentChildTable.show().addClass('visible');*/
/*                     }*/
/* */
/*                     return false;*/
/*             });*/
/* */
/*             },*/
/* */
/*             init: function(){*/
/*                 goalReport.commonReport();*/
/*             }*/
/*         };*/
/* */
/*         goalReport.init();*/
/*     });*/
/* </script>*/
