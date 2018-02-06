<?php

/* ZesharCRMCoreBundle:CRUD/DisplayPartial:product_block_actions_js.html.twig */
class __TwigTemplate_6a18a552b12795ba9242b327468038eb08f97f11faa92473d6760a97f2a2a596 extends Twig_Template
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
        $__internal_605055508230511c3b7c2d88bef0c227b9377332b162cfaf8859947338e34b3f = $this->env->getExtension("native_profiler");
        $__internal_605055508230511c3b7c2d88bef0c227b9377332b162cfaf8859947338e34b3f->enter($__internal_605055508230511c3b7c2d88bef0c227b9377332b162cfaf8859947338e34b3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ZesharCRMCoreBundle:CRUD/DisplayPartial:product_block_actions_js.html.twig"));

        // line 1
        echo "<script type=text/javascript>
    jQuery(document).ready(function(){
        \$('.delete').click(areYouSure);
    });

    function deleteItem(productId){
        var ajaxUrl = \"";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "getBaseURL", array(), "method"), "html", null, true);
        echo "/admin/product/\"+productId;

        console.log(productId);

        \$.ajax(ajaxUrl, {
            'id': productId,
            'type': 'DELETE',
            'success': function (response) {
                window.location.href = \"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("dashboard");
        echo "\";
            },
            'error': function (error) {
                console.log('ajax error');
                console.log(error);
            }
        });
        e.preventDefault();
        return false;
    }


    function areYouSure(e){
        productId = \$(this).attr('data-id');
        \$( \"#dialog-confirm\" ).dialog({
            resizable: false,
            height:140,
            modal: true,
            buttons: {
                \"Delete item\": function() {
                    \$( this ).dialog( \"close\" );
                    deleteItem(productId);
                },
                Cancel: function() {
                    \$( this ).dialog( \"close\" );
                }
            }
        });
    }

</script>
";
        
        $__internal_605055508230511c3b7c2d88bef0c227b9377332b162cfaf8859947338e34b3f->leave($__internal_605055508230511c3b7c2d88bef0c227b9377332b162cfaf8859947338e34b3f_prof);

    }

    public function getTemplateName()
    {
        return "ZesharCRMCoreBundle:CRUD/DisplayPartial:product_block_actions_js.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 15,  30 => 7,  22 => 1,);
    }
}
/* <script type=text/javascript>*/
/*     jQuery(document).ready(function(){*/
/*         $('.delete').click(areYouSure);*/
/*     });*/
/* */
/*     function deleteItem(productId){*/
/*         var ajaxUrl = "{{ app.request.getBaseURL() }}/admin/product/"+productId;*/
/* */
/*         console.log(productId);*/
/* */
/*         $.ajax(ajaxUrl, {*/
/*             'id': productId,*/
/*             'type': 'DELETE',*/
/*             'success': function (response) {*/
/*                 window.location.href = "{{ path('dashboard') }}";*/
/*             },*/
/*             'error': function (error) {*/
/*                 console.log('ajax error');*/
/*                 console.log(error);*/
/*             }*/
/*         });*/
/*         e.preventDefault();*/
/*         return false;*/
/*     }*/
/* */
/* */
/*     function areYouSure(e){*/
/*         productId = $(this).attr('data-id');*/
/*         $( "#dialog-confirm" ).dialog({*/
/*             resizable: false,*/
/*             height:140,*/
/*             modal: true,*/
/*             buttons: {*/
/*                 "Delete item": function() {*/
/*                     $( this ).dialog( "close" );*/
/*                     deleteItem(productId);*/
/*                 },*/
/*                 Cancel: function() {*/
/*                     $( this ).dialog( "close" );*/
/*                 }*/
/*             }*/
/*         });*/
/*     }*/
/* */
/* </script>*/
/* */
