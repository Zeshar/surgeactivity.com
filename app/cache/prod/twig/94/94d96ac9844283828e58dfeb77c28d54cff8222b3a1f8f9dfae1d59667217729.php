<?php

/* ZesharCRMCoreBundle:Block:block_activity_slot.html.twig */
class __TwigTemplate_dd41fb2b00f2580bb4627db39552539102a74643c059043ea2695b3e118e0121 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'activity_slot_fields' => array($this, 'block_activity_slot_fields'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('activity_slot_fields', $context, $blocks);
    }

    public function block_activity_slot_fields($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 20
        echo "
    ";
        // line 21
        $context["currentYear"] = twig_date_format_filter($this->env, "now", "Y");
        // line 22
        echo "    ";
        $context["lastYear"] = ((isset($context["currentYear"]) ? $context["currentYear"] : null) + 10);
        // line 23
        echo "
    ";
        // line 24
        $context["ends"] = array(0 => "th", 1 => "st", 2 => "nd", 3 => "rd", 4 => "th", 5 => "th", 6 => "th", 7 => "th", 8 => "th", 9 => "th");
        // line 25
        echo "    ";
        $context["days"] = array(1 => "Monday", 2 => "Tuesday", 3 => "Wednesday", 4 => "Thursday", 5 => "Friday", 6 => "Saturday", 7 => "Sunday");
        // line 26
        echo "
    <label class=\"control-label required\">Slot</label>

    <div class=\"sonata-ba-field sonata-ba-field-standard-natural  \">
        <div id=\"custom_slot\" class=\"form-control\">
            ";
        // line 32
        echo "            <div style=\"display:block;\" id=\"time\" class=\"selected\">
                <select id=\"slot_time_hours\">
                    ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, 12));
        foreach ($context['_seq'] as $context["_key"] => $context["k"]) {
            // line 35
            echo "                        <option value=\"";
            echo twig_escape_filter($this->env, $context["k"], "html", null, true);
            echo "\">";
            if (($context["k"] < 10)) {
                echo "0";
            }
            echo twig_escape_filter($this->env, $context["k"], "html", null, true);
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['k'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "                </select>:<select id=\"slot_time_minutes\">
                    ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, 59));
        foreach ($context['_seq'] as $context["_key"] => $context["k"]) {
            // line 39
            echo "                        <option value=\"";
            echo twig_escape_filter($this->env, $context["k"], "html", null, true);
            echo "\">";
            if (($context["k"] < 10)) {
                echo "0";
            }
            echo twig_escape_filter($this->env, $context["k"], "html", null, true);
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['k'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "                </select>
                <select id=\"slot_time_option\">
                    <option value=\"0\">am</option>
                    <option value=\"1\">pm</option>
                </select>
            </div>

            ";
        // line 49
        echo "            <div style=\"display:none;\" id=\"day\">
                <select id=\"slot_day\">
                    ";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["days"]) ? $context["days"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["k"]) {
            // line 52
            echo "                        <option value=\"";
            echo twig_escape_filter($this->env, $context["k"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["k"], "html", null, true);
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['k'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "                </select>
            </div>

            ";
        // line 58
        echo "            <div style=\"display:none;\" id=\"date\">
                <select id=\"slot_date\">
                    ";
        // line 60
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 31));
        foreach ($context['_seq'] as $context["_key"] => $context["k"]) {
            // line 61
            echo "                        ";
            if (((($context["k"] % 100) >= 11) && (($context["k"] % 100) <= 13))) {
                // line 62
                echo "                            <option value=\"";
                echo twig_escape_filter($this->env, $context["k"], "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["k"], "html", null, true);
                echo "th</option>
                        ";
            } else {
                // line 64
                echo "                            <option value=\"";
                echo twig_escape_filter($this->env, $context["k"], "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["k"], "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ends"]) ? $context["ends"] : null), ($context["k"] % 10), array(), "array"), "html", null, true);
                echo "</option>
                        ";
            }
            // line 66
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['k'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "                </select>
            </div>

            ";
        // line 71
        echo "            <div style=\"display:none;\" id=\"month_date\">
                <select id=\"slot_month\">
                    ";
        // line 73
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 12));
        foreach ($context['_seq'] as $context["_key"] => $context["j"]) {
            // line 74
            echo "                        <option  value=\"";
            echo twig_escape_filter($this->env, $context["j"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_date_format_filter($this->env, $context["j"], (("2012-" . $context["j"]) . "-01")), "M"), "html", null, true);
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['j'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        echo "                </select>
                <select id=\"slot_month_date\">
                    ";
        // line 78
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 31));
        foreach ($context['_seq'] as $context["_key"] => $context["j"]) {
            // line 79
            echo "                        <option  value=\"";
            echo twig_escape_filter($this->env, $context["j"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["j"], "html", null, true);
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['j'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        echo "                </select>
            </div>
        </div>
    </div>
";
    }

    // line 2
    public function block_javascripts($context, array $blocks = array())
    {
        // line 3
        echo "        <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/zesharcrmcore/js/activity_creation_block.js"), "html", null, true);
        echo "\"></script>
        ";
        // line 4
        if (((isset($context["url"]) ? $context["url"] : null) == "edit")) {
            // line 5
            echo "            <script>
                \$(function(){
                    autocomplete();
                });
            </script>
        ";
        }
        // line 11
        echo "        ";
        if (((isset($context["url"]) ? $context["url"] : null) == "create")) {
            // line 12
            echo "            <script>
                \$(function(){
                    showDate();
                });
            </script>
        ";
        }
        // line 18
        echo "
    ";
    }

    public function getTemplateName()
    {
        return "ZesharCRMCoreBundle:Block:block_activity_slot.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  243 => 18,  235 => 12,  232 => 11,  224 => 5,  222 => 4,  217 => 3,  214 => 2,  206 => 81,  195 => 79,  191 => 78,  187 => 76,  176 => 74,  172 => 73,  168 => 71,  163 => 67,  157 => 66,  148 => 64,  140 => 62,  137 => 61,  133 => 60,  129 => 58,  124 => 54,  113 => 52,  109 => 51,  105 => 49,  96 => 41,  82 => 39,  78 => 38,  75 => 37,  61 => 35,  57 => 34,  53 => 32,  46 => 26,  43 => 25,  41 => 24,  38 => 23,  35 => 22,  33 => 21,  30 => 20,  27 => 2,  21 => 1,);
    }
}
/* {% block activity_slot_fields %}*/
/*     {% block javascripts %}*/
/*         <script type="text/javascript" src="{{ asset('bundles/zesharcrmcore/js/activity_creation_block.js') }}"></script>*/
/*         {% if url == 'edit' %}*/
/*             <script>*/
/*                 $(function(){*/
/*                     autocomplete();*/
/*                 });*/
/*             </script>*/
/*         {% endif %}*/
/*         {% if url == 'create' %}*/
/*             <script>*/
/*                 $(function(){*/
/*                     showDate();*/
/*                 });*/
/*             </script>*/
/*         {% endif %}*/
/* */
/*     {% endblock %}*/
/* */
/*     {% set currentYear = "now"|date("Y") %}*/
/*     {% set lastYear = currentYear + 10 %}*/
/* */
/*     {% set ends = ['th','st','nd','rd','th','th','th','th','th','th'] %}*/
/*     {% set days = {1: 'Monday', 2: 'Tuesday', 3: 'Wednesday', 4: 'Thursday', 5: 'Friday', 6: 'Saturday', 7: 'Sunday'} %}*/
/* */
/*     <label class="control-label required">Slot</label>*/
/* */
/*     <div class="sonata-ba-field sonata-ba-field-standard-natural  ">*/
/*         <div id="custom_slot" class="form-control">*/
/*             {#for daily frequency#}*/
/*             <div style="display:block;" id="time" class="selected">*/
/*                 <select id="slot_time_hours">*/
/*                     {% for k in 0..12 %}*/
/*                         <option value="{{ k }}">{% if k<10 %}0{% endif %}{{ k }}</option>*/
/*                     {% endfor %}*/
/*                 </select>:<select id="slot_time_minutes">*/
/*                     {% for k in 0..59 %}*/
/*                         <option value="{{ k }}">{% if k<10 %}0{% endif %}{{ k }}</option>*/
/*                     {% endfor %}*/
/*                 </select>*/
/*                 <select id="slot_time_option">*/
/*                     <option value="0">am</option>*/
/*                     <option value="1">pm</option>*/
/*                 </select>*/
/*             </div>*/
/* */
/*             {#for weekly frequency#}*/
/*             <div style="display:none;" id="day">*/
/*                 <select id="slot_day">*/
/*                     {% for k in days %}*/
/*                         <option value="{{ k }}">{{ k }}</option>*/
/*                     {% endfor %}*/
/*                 </select>*/
/*             </div>*/
/* */
/*             {#for monthly frequency#}*/
/*             <div style="display:none;" id="date">*/
/*                 <select id="slot_date">*/
/*                     {% for k in 1..31 %}*/
/*                         {% if (k%100) >= 11 and (k%100) <= 13 %}*/
/*                             <option value="{{ k }}">{{ k }}th</option>*/
/*                         {% else %}*/
/*                             <option value="{{ k }}">{{ k }}{{ ends[k%10] }}</option>*/
/*                         {% endif %}*/
/*                     {% endfor %}*/
/*                 </select>*/
/*             </div>*/
/* */
/*             {#for yearly frequency#}*/
/*             <div style="display:none;" id="month_date">*/
/*                 <select id="slot_month">*/
/*                     {% for j in 1..12 %}*/
/*                         <option  value="{{ j }}">{{ j |date('2012-' ~ j ~ '-01') |date('M') }}</option>*/
/*                     {% endfor %}*/
/*                 </select>*/
/*                 <select id="slot_month_date">*/
/*                     {% for j in 1..31 %}*/
/*                         <option  value="{{ j }}">{{ j }}</option>*/
/*                     {% endfor %}*/
/*                 </select>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
