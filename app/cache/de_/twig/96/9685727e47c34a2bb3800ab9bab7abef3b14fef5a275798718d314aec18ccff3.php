<?php

/* ZesharCRMCoreBundle:Block:block_activity_slot.html.twig */
class __TwigTemplate_ffd25c782d3d71eea90a8b60c64218dc318ede7a7da9a7f967a5b390f4c28d49 extends Twig_Template
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
        $__internal_cdba5e4aec9ea2bc3b3b9dbadb4291e61507f13d7afd1d47800a0515be16951e = $this->env->getExtension("native_profiler");
        $__internal_cdba5e4aec9ea2bc3b3b9dbadb4291e61507f13d7afd1d47800a0515be16951e->enter($__internal_cdba5e4aec9ea2bc3b3b9dbadb4291e61507f13d7afd1d47800a0515be16951e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ZesharCRMCoreBundle:Block:block_activity_slot.html.twig"));

        // line 1
        $this->displayBlock('activity_slot_fields', $context, $blocks);
        
        $__internal_cdba5e4aec9ea2bc3b3b9dbadb4291e61507f13d7afd1d47800a0515be16951e->leave($__internal_cdba5e4aec9ea2bc3b3b9dbadb4291e61507f13d7afd1d47800a0515be16951e_prof);

    }

    public function block_activity_slot_fields($context, array $blocks = array())
    {
        $__internal_904bb29a2fd3e71e30e71fe96775760fa58ac57fcab14b131472bbb1b2308258 = $this->env->getExtension("native_profiler");
        $__internal_904bb29a2fd3e71e30e71fe96775760fa58ac57fcab14b131472bbb1b2308258->enter($__internal_904bb29a2fd3e71e30e71fe96775760fa58ac57fcab14b131472bbb1b2308258_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "activity_slot_fields"));

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
        $context["lastYear"] = ((isset($context["currentYear"]) ? $context["currentYear"] : $this->getContext($context, "currentYear")) + 10);
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
        $context['_seq'] = twig_ensure_traversable((isset($context["days"]) ? $context["days"] : $this->getContext($context, "days")));
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
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ends"]) ? $context["ends"] : $this->getContext($context, "ends")), ($context["k"] % 10), array(), "array"), "html", null, true);
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
        
        $__internal_904bb29a2fd3e71e30e71fe96775760fa58ac57fcab14b131472bbb1b2308258->leave($__internal_904bb29a2fd3e71e30e71fe96775760fa58ac57fcab14b131472bbb1b2308258_prof);

    }

    // line 2
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_bfdb8fef03d7d2d7a031ff0ae4ce1ceef00659fa3ba78c823775959b72504a33 = $this->env->getExtension("native_profiler");
        $__internal_bfdb8fef03d7d2d7a031ff0ae4ce1ceef00659fa3ba78c823775959b72504a33->enter($__internal_bfdb8fef03d7d2d7a031ff0ae4ce1ceef00659fa3ba78c823775959b72504a33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 3
        echo "        <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/zesharcrmcore/js/activity_creation_block.js"), "html", null, true);
        echo "\"></script>
        ";
        // line 4
        if (((isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")) == "edit")) {
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
        if (((isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")) == "create")) {
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
        
        $__internal_bfdb8fef03d7d2d7a031ff0ae4ce1ceef00659fa3ba78c823775959b72504a33->leave($__internal_bfdb8fef03d7d2d7a031ff0ae4ce1ceef00659fa3ba78c823775959b72504a33_prof);

    }

    public function getTemplateName()
    {
        return "ZesharCRMCoreBundle:Block:block_activity_slot.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  258 => 18,  250 => 12,  247 => 11,  239 => 5,  237 => 4,  232 => 3,  226 => 2,  215 => 81,  204 => 79,  200 => 78,  196 => 76,  185 => 74,  181 => 73,  177 => 71,  172 => 67,  166 => 66,  157 => 64,  149 => 62,  146 => 61,  142 => 60,  138 => 58,  133 => 54,  122 => 52,  118 => 51,  114 => 49,  105 => 41,  91 => 39,  87 => 38,  84 => 37,  70 => 35,  66 => 34,  62 => 32,  55 => 26,  52 => 25,  50 => 24,  47 => 23,  44 => 22,  42 => 21,  39 => 20,  36 => 2,  24 => 1,);
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
