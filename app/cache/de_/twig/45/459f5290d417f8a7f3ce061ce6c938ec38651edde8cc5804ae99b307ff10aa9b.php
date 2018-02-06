<?php

/* ZesharCRMCoreBundle:Widget:activity.html.twig */
class __TwigTemplate_1254d314d222d87e5579bc57e5963b7e678271c83cef63b76b396fb7551d9ca9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'widget' => array($this, 'block_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e0f3d81db5e217682bbf8c3ea88bc38134b3a0666c90eff495be66e145cd2fc7 = $this->env->getExtension("native_profiler");
        $__internal_e0f3d81db5e217682bbf8c3ea88bc38134b3a0666c90eff495be66e145cd2fc7->enter($__internal_e0f3d81db5e217682bbf8c3ea88bc38134b3a0666c90eff495be66e145cd2fc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ZesharCRMCoreBundle:Widget:activity.html.twig"));

        // line 1
        $this->displayBlock('widget', $context, $blocks);
        
        $__internal_e0f3d81db5e217682bbf8c3ea88bc38134b3a0666c90eff495be66e145cd2fc7->leave($__internal_e0f3d81db5e217682bbf8c3ea88bc38134b3a0666c90eff495be66e145cd2fc7_prof);

    }

    public function block_widget($context, array $blocks = array())
    {
        $__internal_09420e36141df9473a66d283d94d11e372e19801310e83bdff695382fbe57065 = $this->env->getExtension("native_profiler");
        $__internal_09420e36141df9473a66d283d94d11e372e19801310e83bdff695382fbe57065->enter($__internal_09420e36141df9473a66d283d94d11e372e19801310e83bdff695382fbe57065_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget"));

        // line 2
        echo "    <div class=\"custom-block\">
        <div class=\"custom-head clear-fix\">
            <div class=\"custom-menu\">
                <button class=\"up-custom\"></button>
                <button class=\"settings-custom\"></button>
                <button class=\"close-custom\"></button>
            </div>
            <div class=\"custom-menu-select\">
                ";
        // line 10
        if ( !twig_test_empty((isset($context["persons"]) ? $context["persons"] : $this->getContext($context, "persons")))) {
            // line 11
            echo "                    <select class=\"user_data\">
                        ";
            // line 12
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["persons"]) ? $context["persons"] : $this->getContext($context, "persons")));
            foreach ($context['_seq'] as $context["_key"] => $context["person"]) {
                // line 13
                echo "                            <option ";
                if (((isset($context["selectedUser"]) ? $context["selectedUser"] : $this->getContext($context, "selectedUser")) == $this->getAttribute($context["person"], "username", array()))) {
                    echo " selected ";
                }
                echo ">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["person"], "username", array()), "html", null, true);
                echo "</option>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['person'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 15
            echo "                    </select>
                ";
        }
        // line 17
        echo "            </div>
            <h3>My Calendar <span>Today is ";
        // line 18
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "M d, Y"), "html", null, true);
        echo "</span></h3>
        </div>
        <div class=\"custom-content\">
            <ul class=\"calendar-list\">
                    <li>
                        <h4>Happening today</h4>
                    ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["calendarData"]) ? $context["calendarData"] : $this->getContext($context, "calendarData")), "today", array(), "array"));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 25
            echo "                        <div class=\"calendar-row\">
                            ";
            // line 26
            if ($this->getAttribute($context["item"], "activity", array(), "any", true, true)) {
                // line 27
                echo "                                <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_zesharcrm_core_lead_list", array("filters" => "reset", "filter" => array("leadCampaign" => array("value" => $this->getAttribute($this->getAttribute($context["item"], "activity", array()), "id", array(), "array"))))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["item"], "activity", array()), "title", array(), "array"), "html", null, true);
                echo "</a>
                                <span class=\"date\">";
                // line 28
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($context["item"], "activity", array()), "startTime", array(), "array"), "H:i"), "html", null, true);
                echo "
                                    ";
                // line 29
                if (($this->getAttribute($this->getAttribute($context["item"], "activity", array()), "startTime", array(), "array") != $this->getAttribute($this->getAttribute($context["item"], "activity", array()), "endTime", array(), "array"))) {
                    // line 30
                    echo "                                        - ";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($context["item"], "activity", array()), "endTime", array(), "array"), "H:i"), "html", null, true);
                    echo "
                                    ";
                }
                // line 32
                echo "                            </span>
                            ";
            } else {
                // line 34
                echo "                                <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getAttribute($context["item"], "url", array()), array("id" => $this->getAttribute($context["item"], "lead", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "firstName", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "middleName", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "lastName", array()), "html", null, true);
                echo " - ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "location", array()), "html", null, true);
                echo "</a>
                                <span style=\"font-size:10px;\">(";
                // line 35
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "type", array()), "html", null, true);
                echo ")</span>
                                <span class=\"date\"> ";
                // line 36
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["item"], "time", array()), "H:i"), "html", null, true);
                echo " </span>
                            ";
            }
            // line 38
            echo "
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "                </li>
                <li>
                    <h4>Upcoming events</h4>
                    ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["calendarData"]) ? $context["calendarData"] : $this->getContext($context, "calendarData")), "future", array(), "array"));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 45
            echo "                        <div class=\"calendar-row\">
                            <span class=\"date\">
                                ";
            // line 47
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["item"], "time", array()), "d"), "html", null, true);
            echo "
                                <span>";
            // line 48
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["item"], "time", array()), "M"), "html", null, true);
            echo "</span>
                            </span>
                            ";
            // line 50
            if ($this->getAttribute($context["item"], "activity", array(), "any", true, true)) {
                // line 51
                echo "                                <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_zesharcrm_core_lead_list", array("filters" => "reset", "filter" => array("leadCampaign" => array("value" => $this->getAttribute($this->getAttribute($context["item"], "activity", array()), "id", array(), "array"))))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["item"], "activity", array()), "title", array(), "array"), "html", null, true);
                echo "</a>
                                <span class=\"date\">";
                // line 52
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($context["item"], "activity", array()), "startTime", array(), "array"), "H:i"), "html", null, true);
                echo "
                                    ";
                // line 53
                if (($this->getAttribute($this->getAttribute($context["item"], "activity", array()), "startTime", array(), "array") != $this->getAttribute($this->getAttribute($context["item"], "activity", array()), "endTime", array(), "array"))) {
                    // line 54
                    echo "                                        - ";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($context["item"], "activity", array()), "endTime", array(), "array"), "H:i"), "html", null, true);
                    echo "
                                    ";
                }
                // line 56
                echo "                            </span>
                            ";
            } else {
                // line 58
                echo "                                <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getAttribute($context["item"], "url", array()), array("id" => $this->getAttribute($context["item"], "lead", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "firstName", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "middleName", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "lastName", array()), "html", null, true);
                echo " - ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "location", array()), "html", null, true);
                echo "</a>
                                <span style=\"font-size:10px;\">(";
                // line 59
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "type", array()), "html", null, true);
                echo ")</span>
                                <span class=\"date\"> ";
                // line 60
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["item"], "time", array()), "H:i"), "html", null, true);
                echo " </span>
                            ";
            }
            // line 62
            echo "
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "                </li>
            </ul>
        </div>
    </div>
";
        
        $__internal_09420e36141df9473a66d283d94d11e372e19801310e83bdff695382fbe57065->leave($__internal_09420e36141df9473a66d283d94d11e372e19801310e83bdff695382fbe57065_prof);

    }

    public function getTemplateName()
    {
        return "ZesharCRMCoreBundle:Widget:activity.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  222 => 65,  214 => 62,  209 => 60,  205 => 59,  192 => 58,  188 => 56,  182 => 54,  180 => 53,  176 => 52,  169 => 51,  167 => 50,  162 => 48,  158 => 47,  154 => 45,  150 => 44,  145 => 41,  137 => 38,  132 => 36,  128 => 35,  115 => 34,  111 => 32,  105 => 30,  103 => 29,  99 => 28,  92 => 27,  90 => 26,  87 => 25,  83 => 24,  74 => 18,  71 => 17,  67 => 15,  54 => 13,  50 => 12,  47 => 11,  45 => 10,  35 => 2,  23 => 1,);
    }
}
/* {% block widget %}*/
/*     <div class="custom-block">*/
/*         <div class="custom-head clear-fix">*/
/*             <div class="custom-menu">*/
/*                 <button class="up-custom"></button>*/
/*                 <button class="settings-custom"></button>*/
/*                 <button class="close-custom"></button>*/
/*             </div>*/
/*             <div class="custom-menu-select">*/
/*                 {% if persons is not empty %}*/
/*                     <select class="user_data">*/
/*                         {% for person in persons %}*/
/*                             <option {% if selectedUser == person.username %} selected {% endif %}>{{ person.username}}</option>*/
/*                         {% endfor %}*/
/*                     </select>*/
/*                 {% endif %}*/
/*             </div>*/
/*             <h3>My Calendar <span>Today is {{"now"|date('M d, Y')}}</span></h3>*/
/*         </div>*/
/*         <div class="custom-content">*/
/*             <ul class="calendar-list">*/
/*                     <li>*/
/*                         <h4>Happening today</h4>*/
/*                     {% for item in calendarData['today'] %}*/
/*                         <div class="calendar-row">*/
/*                             {% if item.activity is defined %}*/
/*                                 <a href="{{ path('admin_zesharcrm_core_lead_list', {'filters': 'reset', 'filter' : {'leadCampaign' : {'value' : item.activity['id'] } } } ) }}">{{ item.activity['title'] }}</a>*/
/*                                 <span class="date">{{ item.activity['startTime']|date("H:i") }}*/
/*                                     {% if item.activity['startTime'] !=  item.activity['endTime']  %}*/
/*                                         - {{ item.activity['endTime']|date("H:i") }}*/
/*                                     {% endif %}*/
/*                             </span>*/
/*                             {% else %}*/
/*                                 <a href="{{ path(item.url, {'id': item.lead}) }}">{{ item.firstName }} {{ item.middleName }} {{ item.lastName }} - {{ item.location }}</a>*/
/*                                 <span style="font-size:10px;">({{ item.type }})</span>*/
/*                                 <span class="date"> {{ item.time|date("H:i") }} </span>*/
/*                             {% endif %}*/
/* */
/*                         </div>*/
/*                     {% endfor %}*/
/*                 </li>*/
/*                 <li>*/
/*                     <h4>Upcoming events</h4>*/
/*                     {% for item in calendarData['future'] %}*/
/*                         <div class="calendar-row">*/
/*                             <span class="date">*/
/*                                 {{ item.time|date("d") }}*/
/*                                 <span>{{ item.time|date("M") }}</span>*/
/*                             </span>*/
/*                             {% if item.activity is defined %}*/
/*                                 <a href="{{ path('admin_zesharcrm_core_lead_list', {'filters': 'reset', 'filter' : {'leadCampaign' : {'value' : item.activity['id'] } } } ) }}">{{ item.activity['title'] }}</a>*/
/*                                 <span class="date">{{ item.activity['startTime']|date("H:i") }}*/
/*                                     {% if item.activity['startTime'] !=  item.activity['endTime']  %}*/
/*                                         - {{ item.activity['endTime']|date("H:i") }}*/
/*                                     {% endif %}*/
/*                             </span>*/
/*                             {% else %}*/
/*                                 <a href="{{ path(item.url, {'id': item.lead}) }}">{{ item.firstName }} {{ item.middleName }} {{ item.lastName }} - {{ item.location }}</a>*/
/*                                 <span style="font-size:10px;">({{ item.type }})</span>*/
/*                                 <span class="date"> {{ item.time|date("H:i") }} </span>*/
/*                             {% endif %}*/
/* */
/*                         </div>*/
/*                     {% endfor %}*/
/*                 </li>*/
/*             </ul>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
