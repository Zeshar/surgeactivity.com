<?php

/* ZesharCRMCoreBundle:CRUD/DisplayPartial:payment_history_tab.html.twig */
class __TwigTemplate_fc67dc64f2bf132cd87965df3e24730e7119cff79c2712b6733e88d6513d7862 extends Twig_Template
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
        $__internal_1e9909e1377e1ea127bc37de5ee94b399c13b4d5f2da229287d2714fca58cacd = $this->env->getExtension("native_profiler");
        $__internal_1e9909e1377e1ea127bc37de5ee94b399c13b4d5f2da229287d2714fca58cacd->enter($__internal_1e9909e1377e1ea127bc37de5ee94b399c13b4d5f2da229287d2714fca58cacd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ZesharCRMCoreBundle:CRUD/DisplayPartial:payment_history_tab.html.twig"));

        // line 1
        echo "<div class=\"custom-block calendar-block\">
    <div class=\"custom-head clearfix\">
        <div class=\"custom-menu\">
            <button class=\"up-custom\"></button>
        </div>
        <h3>Payment History</h3>
    </div>
    <div class=\"clearfix\">
        <div id=\"\" class=\"display-block-persistent\" data-controller=\"leads_display\" data-action=\"leadEvent\">
            <div class=\"form-column\">
                <div class=\"small-table\">
                    <table>
                        <tr>
                            <th width=\"65%\">Payment History</th>
                            <th width=\"35%\"></th>
                        </tr>
                    </table>
                    <div>
                        <table>
                            <tr>
                                <td width=\"20%\"><b>Date</b></td>
                                <td width=\"20%\"><b>Actor</b></td>
                                <td width=\"40%\"><b>Description</b></td>
                                <td width=\"20%\"><b>Amount</b></td>
                            </tr>
                        </table>
                        <div style=\"height: 500px; overflow: auto; width:97%;\">
                            <hr />
                            <table class=\"payments\">
                                ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "creator", array()), "payments", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["payment"]) {
            // line 31
            echo "                                    <tr>
                                        <td>";
            // line 32
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["payment"], "date", array()), "d/m/Y"), "html", null, true);
            echo "</td>
                                        <td>?</td>
                                        <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["payment"], "description", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["payment"], "amount", array()), "html", null, true);
            echo "</td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['payment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_1e9909e1377e1ea127bc37de5ee94b399c13b4d5f2da229287d2714fca58cacd->leave($__internal_1e9909e1377e1ea127bc37de5ee94b399c13b4d5f2da229287d2714fca58cacd_prof);

    }

    public function getTemplateName()
    {
        return "ZesharCRMCoreBundle:CRUD/DisplayPartial:payment_history_tab.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 38,  69 => 35,  65 => 34,  60 => 32,  57 => 31,  53 => 30,  22 => 1,);
    }
}
/* <div class="custom-block calendar-block">*/
/*     <div class="custom-head clearfix">*/
/*         <div class="custom-menu">*/
/*             <button class="up-custom"></button>*/
/*         </div>*/
/*         <h3>Payment History</h3>*/
/*     </div>*/
/*     <div class="clearfix">*/
/*         <div id="" class="display-block-persistent" data-controller="leads_display" data-action="leadEvent">*/
/*             <div class="form-column">*/
/*                 <div class="small-table">*/
/*                     <table>*/
/*                         <tr>*/
/*                             <th width="65%">Payment History</th>*/
/*                             <th width="35%"></th>*/
/*                         </tr>*/
/*                     </table>*/
/*                     <div>*/
/*                         <table>*/
/*                             <tr>*/
/*                                 <td width="20%"><b>Date</b></td>*/
/*                                 <td width="20%"><b>Actor</b></td>*/
/*                                 <td width="40%"><b>Description</b></td>*/
/*                                 <td width="20%"><b>Amount</b></td>*/
/*                             </tr>*/
/*                         </table>*/
/*                         <div style="height: 500px; overflow: auto; width:97%;">*/
/*                             <hr />*/
/*                             <table class="payments">*/
/*                                 {% for payment in object.creator.payments %}*/
/*                                     <tr>*/
/*                                         <td>{{ payment.date|date('d/m/Y') }}</td>*/
/*                                         <td>?</td>*/
/*                                         <td>{{ payment.description }}</td>*/
/*                                         <td>{{ payment.amount }}</td>*/
/*                                     </tr>*/
/*                                 {% endfor %}*/
/*                             </table>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
