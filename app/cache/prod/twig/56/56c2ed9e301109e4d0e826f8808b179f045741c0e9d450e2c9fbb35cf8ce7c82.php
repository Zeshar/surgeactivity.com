<?php

/* ZesharCRMCoreBundle:CRUD/DisplayPartial:product_block_actions_js.html.twig */
class __TwigTemplate_d81b84d3eb7fdd2109bd0550b8015ba9ca3e4e7aa57655291c58d493d111179f extends Twig_Template
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
    jQuery(document).ready(function(){
        \$('.delete').click(areYouSure);
    });

    function deleteItem(productId){
        var ajaxUrl = \"";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "getBaseURL", array(), "method"), "html", null, true);
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
        return array (  38 => 15,  27 => 7,  19 => 1,);
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
