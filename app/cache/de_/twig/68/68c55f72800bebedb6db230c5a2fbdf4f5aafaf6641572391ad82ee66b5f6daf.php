<?php

/* ZesharCRMCoreBundle::main_menu.html.twig */
class __TwigTemplate_dcd0cd963276f15e7e1dd2acf60f0b58790ea137e5de8b11b1c02ff8bcd0096d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("knp_menu.html.twig", "ZesharCRMCoreBundle::main_menu.html.twig", 1);
        $this->blocks = array(
            'list' => array($this, 'block_list'),
            'children' => array($this, 'block_children'),
            'item' => array($this, 'block_item'),
            'linkElement' => array($this, 'block_linkElement'),
            'spanElement' => array($this, 'block_spanElement'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "knp_menu.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6ecc810632bd256eba29d038e9dac7df0139809049e40d04516f07253e0a6737 = $this->env->getExtension("native_profiler");
        $__internal_6ecc810632bd256eba29d038e9dac7df0139809049e40d04516f07253e0a6737->enter($__internal_6ecc810632bd256eba29d038e9dac7df0139809049e40d04516f07253e0a6737_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ZesharCRMCoreBundle::main_menu.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6ecc810632bd256eba29d038e9dac7df0139809049e40d04516f07253e0a6737->leave($__internal_6ecc810632bd256eba29d038e9dac7df0139809049e40d04516f07253e0a6737_prof);

    }

    // line 11
    public function block_list($context, array $blocks = array())
    {
        $__internal_a204b399ca6b6f650f5871b9c8f389d9baf9058b5e5f109fdf284aec5c023450 = $this->env->getExtension("native_profiler");
        $__internal_a204b399ca6b6f650f5871b9c8f389d9baf9058b5e5f109fdf284aec5c023450->enter($__internal_a204b399ca6b6f650f5871b9c8f389d9baf9058b5e5f109fdf284aec5c023450_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list"));

        // line 12
        if ((($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "hasChildren", array()) &&  !($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "depth", array()) === 0)) && $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "displayChildren", array()))) {
            // line 13
            echo "    <ul ";
            if (twig_test_empty($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "parent", array()))) {
                echo "class=\"menu\"";
            }
            echo " ";
            echo $this->getAttribute($this, "attributes", array(0 => (isset($context["listAttributes"]) ? $context["listAttributes"] : $this->getContext($context, "listAttributes"))), "method");
            echo ">
        ";
            // line 14
            if (twig_test_empty($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "parent", array()))) {
                echo " ";
                // line 15
                echo "            <li style=\"width: 260px;\">
                <img src=\"";
                // line 16
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/logo2.png"), "html", null, true);
                echo "\" alt=\"\" width=\"41px\">
                <p class=\"title-logo\">Surge<span>Activity</span></p>
            </li>
        ";
            }
            // line 20
            echo "        ";
            $this->displayBlock("children", $context, $blocks);
            echo "
        ";
            // line 21
            if (twig_test_empty($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "parent", array()))) {
                echo " ";
                // line 22
                echo "            <li>";
                echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("ZesharCRMCoreBundle:Default:profileInfo"));
                echo "</li>
        ";
            }
            // line 24
            echo "    </ul>
";
        }
        
        $__internal_a204b399ca6b6f650f5871b9c8f389d9baf9058b5e5f109fdf284aec5c023450->leave($__internal_a204b399ca6b6f650f5871b9c8f389d9baf9058b5e5f109fdf284aec5c023450_prof);

    }

    // line 28
    public function block_children($context, array $blocks = array())
    {
        $__internal_3feb8823528b7574a66cd02f6146fbe90aed346a56c6f08da6152a5e13a961b1 = $this->env->getExtension("native_profiler");
        $__internal_3feb8823528b7574a66cd02f6146fbe90aed346a56c6f08da6152a5e13a961b1->enter($__internal_3feb8823528b7574a66cd02f6146fbe90aed346a56c6f08da6152a5e13a961b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "children"));

        // line 30
        $context["currentOptions"] = (isset($context["options"]) ? $context["options"] : $this->getContext($context, "options"));
        // line 31
        $context["currentItem"] = (isset($context["item"]) ? $context["item"] : $this->getContext($context, "item"));
        // line 33
        if ( !(null === $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "depth", array()))) {
            // line 34
            $context["options"] = twig_array_merge((isset($context["currentOptions"]) ? $context["currentOptions"] : $this->getContext($context, "currentOptions")), array("depth" => ($this->getAttribute((isset($context["currentOptions"]) ? $context["currentOptions"] : $this->getContext($context, "currentOptions")), "depth", array()) - 1)));
        }
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["currentItem"]) ? $context["currentItem"] : $this->getContext($context, "currentItem")), "children", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 37
            echo "    ";
            $this->displayBlock("item", $context, $blocks);
            echo "
";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        $context["item"] = (isset($context["currentItem"]) ? $context["currentItem"] : $this->getContext($context, "currentItem"));
        // line 41
        $context["options"] = (isset($context["currentOptions"]) ? $context["currentOptions"] : $this->getContext($context, "currentOptions"));
        
        $__internal_3feb8823528b7574a66cd02f6146fbe90aed346a56c6f08da6152a5e13a961b1->leave($__internal_3feb8823528b7574a66cd02f6146fbe90aed346a56c6f08da6152a5e13a961b1_prof);

    }

    // line 44
    public function block_item($context, array $blocks = array())
    {
        $__internal_f10eafd404c45ae8ea680bb51373ce6945f659001813990f31e0ac45f4b12223 = $this->env->getExtension("native_profiler");
        $__internal_f10eafd404c45ae8ea680bb51373ce6945f659001813990f31e0ac45f4b12223->enter($__internal_f10eafd404c45ae8ea680bb51373ce6945f659001813990f31e0ac45f4b12223_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item"));

        // line 45
        if ($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "displayed", array())) {
            // line 47
            $context["classes"] = (( !twig_test_empty($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "attribute", array(0 => "class"), "method"))) ? (array(0 => $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "attribute", array(0 => "class"), "method"))) : (array()));
            // line 48
            if ($this->getAttribute((isset($context["matcher"]) ? $context["matcher"] : $this->getContext($context, "matcher")), "isCurrent", array(0 => (isset($context["item"]) ? $context["item"] : $this->getContext($context, "item"))), "method")) {
                // line 49
                $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")), array(0 => $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "currentClass", array())));
            } elseif ($this->getAttribute(            // line 50
(isset($context["matcher"]) ? $context["matcher"] : $this->getContext($context, "matcher")), "isAncestor", array(0 => (isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), 1 => $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "matchingDepth", array())), "method")) {
                // line 51
                $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")), array(0 => $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "ancestorClass", array())));
            }
            // line 53
            if ($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "actsLikeFirst", array())) {
                // line 54
                $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")), array(0 => $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "firstClass", array())));
            }
            // line 56
            if ($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "actsLikeLast", array())) {
                // line 57
                $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")), array(0 => $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "lastClass", array())));
            }
            // line 59
            $context["attributes"] = $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "attributes", array());
            // line 60
            if ( !twig_test_empty((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")))) {
                // line 61
                $context["attributes"] = twig_array_merge((isset($context["attributes"]) ? $context["attributes"] : $this->getContext($context, "attributes")), array("class" => twig_join_filter((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")), " ")));
            }
            // line 64
            echo "    ";
            $context["knp_menu"] = $this;
            // line 65
            echo "    <li";
            echo $context["knp_menu"]->getattributes((isset($context["attributes"]) ? $context["attributes"] : $this->getContext($context, "attributes")));
            echo ">
    ";
            // line 67
            if (( !twig_test_empty($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "uri", array())) && ( !$this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "current", array()) || $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "currentAsLink", array())))) {
                // line 68
                echo "        ";
                $this->displayBlock("linkElement", $context, $blocks);
            } else {
                // line 70
                echo "        ";
                $this->displayBlock("spanElement", $context, $blocks);
            }
            // line 73
            $context["childrenClasses"] = (( !twig_test_empty($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "childrenAttribute", array(0 => "class"), "method"))) ? (array(0 => $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "childrenAttribute", array(0 => "class"), "method"))) : (array()));
            // line 74
            $context["childrenClasses"] = twig_array_merge((isset($context["childrenClasses"]) ? $context["childrenClasses"] : $this->getContext($context, "childrenClasses")), array(0 => ("menu_level_" . $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "level", array()))));
            // line 75
            $context["listAttributes"] = twig_array_merge($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "childrenAttributes", array()), array("class" => twig_join_filter((isset($context["childrenClasses"]) ? $context["childrenClasses"] : $this->getContext($context, "childrenClasses")), " ")));
            // line 76
            echo "        ";
            if ($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "hasChildren", array())) {
                // line 77
                echo "            <div class=\"drop-menu\">
                ";
                // line 78
                $this->displayBlock("list", $context, $blocks);
                echo "
            </div>
        ";
            }
            // line 81
            echo "    </li>
";
        }
        
        $__internal_f10eafd404c45ae8ea680bb51373ce6945f659001813990f31e0ac45f4b12223->leave($__internal_f10eafd404c45ae8ea680bb51373ce6945f659001813990f31e0ac45f4b12223_prof);

    }

    // line 85
    public function block_linkElement($context, array $blocks = array())
    {
        $__internal_b7eaa200df39a144f698b3d646eda13fd8d54af15442c410385ed20b35297b95 = $this->env->getExtension("native_profiler");
        $__internal_b7eaa200df39a144f698b3d646eda13fd8d54af15442c410385ed20b35297b95->enter($__internal_b7eaa200df39a144f698b3d646eda13fd8d54af15442c410385ed20b35297b95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linkElement"));

        echo "<a class=\"";
        if ($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "hasChildren", array())) {
            echo "drop-link ";
        }
        echo twig_escape_filter($this->env, twig_join_filter($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "linkAttributes", array(0 => "class"), "method"), " "), "html", null, true);
        echo "\" href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "uri", array()), "html", null, true);
        echo "\">";
        $this->displayBlock("label", $context, $blocks);
        echo "</a>";
        
        $__internal_b7eaa200df39a144f698b3d646eda13fd8d54af15442c410385ed20b35297b95->leave($__internal_b7eaa200df39a144f698b3d646eda13fd8d54af15442c410385ed20b35297b95_prof);

    }

    // line 86
    public function block_spanElement($context, array $blocks = array())
    {
        $__internal_571f9041173156c3d0238550a561e4dffcdd5242b3bf9565a8681e6ed43187bd = $this->env->getExtension("native_profiler");
        $__internal_571f9041173156c3d0238550a561e4dffcdd5242b3bf9565a8681e6ed43187bd->enter($__internal_571f9041173156c3d0238550a561e4dffcdd5242b3bf9565a8681e6ed43187bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "spanElement"));

        echo "<a class=\"";
        if ($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "hasChildren", array())) {
            echo "drop-link ";
        }
        echo twig_escape_filter($this->env, twig_join_filter($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "labelAttributes", array(0 => "class"), "method"), " "), "html", null, true);
        echo "\" href=\"javascript:void();\">";
        $this->displayBlock("label", $context, $blocks);
        echo "</a>";
        
        $__internal_571f9041173156c3d0238550a561e4dffcdd5242b3bf9565a8681e6ed43187bd->leave($__internal_571f9041173156c3d0238550a561e4dffcdd5242b3bf9565a8681e6ed43187bd_prof);

    }

    // line 3
    public function getattributes($__attributes__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "attributes" => $__attributes__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_ce9aeec577a41dc30c8be767d5a1388338914e308a6cc2efa56f873bde3f7336 = $this->env->getExtension("native_profiler");
            $__internal_ce9aeec577a41dc30c8be767d5a1388338914e308a6cc2efa56f873bde3f7336->enter($__internal_ce9aeec577a41dc30c8be767d5a1388338914e308a6cc2efa56f873bde3f7336_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "attributes"));

            // line 4
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["attributes"]) ? $context["attributes"] : $this->getContext($context, "attributes")));
            foreach ($context['_seq'] as $context["name"] => $context["value"]) {
                // line 5
                if (( !(null === $context["value"]) &&  !($context["value"] === false))) {
                    // line 6
                    echo sprintf(" %s=\"%s\"", $context["name"], ((($context["value"] === true)) ? (twig_escape_filter($this->env, $context["name"])) : (twig_escape_filter($this->env, $context["value"]))));
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            
            $__internal_ce9aeec577a41dc30c8be767d5a1388338914e308a6cc2efa56f873bde3f7336->leave($__internal_ce9aeec577a41dc30c8be767d5a1388338914e308a6cc2efa56f873bde3f7336_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "ZesharCRMCoreBundle::main_menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  291 => 6,  289 => 5,  285 => 4,  270 => 3,  251 => 86,  230 => 85,  221 => 81,  215 => 78,  212 => 77,  209 => 76,  207 => 75,  205 => 74,  203 => 73,  199 => 70,  195 => 68,  193 => 67,  188 => 65,  185 => 64,  182 => 61,  180 => 60,  178 => 59,  175 => 57,  173 => 56,  170 => 54,  168 => 53,  165 => 51,  163 => 50,  161 => 49,  159 => 48,  157 => 47,  155 => 45,  149 => 44,  142 => 41,  140 => 40,  123 => 37,  106 => 36,  103 => 34,  101 => 33,  99 => 31,  97 => 30,  91 => 28,  82 => 24,  76 => 22,  73 => 21,  68 => 20,  61 => 16,  58 => 15,  55 => 14,  46 => 13,  44 => 12,  38 => 11,  11 => 1,);
    }
}
/* {% extends 'knp_menu.html.twig' %}*/
/* */
/* {% macro attributes(attributes) %}*/
/* {% for name, value in attributes %}*/
/*     {%- if value is not none and value is not sameas(false) -%}*/
/*         {{- ' %s="%s"'|format(name, value is sameas(true) ? name|e : value|e)|raw -}}*/
/*     {%- endif -%}*/
/* {%- endfor -%}*/
/* {% endmacro %}*/
/* */
/* {% block list %}*/
/* {% if item.hasChildren and options.depth is not sameas(0) and item.displayChildren %}*/
/*     <ul {% if item.parent is empty %}class="menu"{% endif %} {{ _self.attributes(listAttributes) }}>*/
/*         {% if item.parent is empty %} {# only fot root level - output notifications, profile info and "add" button #}*/
/*             <li style="width: 260px;">*/
/*                 <img src="{{ asset('images/logo2.png') }}" alt="" width="41px">*/
/*                 <p class="title-logo">Surge<span>Activity</span></p>*/
/*             </li>*/
/*         {% endif %}*/
/*         {{ block('children') }}*/
/*         {% if item.parent is empty %} {# only fot root level - output notifications, profile info and "add" button #}*/
/*             <li>{{ render(controller('ZesharCRMCoreBundle:Default:profileInfo')) }}</li>*/
/*         {% endif %}*/
/*     </ul>*/
/* {% endif %}*/
/* {% endblock %}*/
/* */
/* {% block children %}*/
/* {# save current variables #}*/
/* {% set currentOptions = options %}*/
/* {% set currentItem = item %}*/
/* {# update the depth for children #}*/
/* {% if options.depth is not none %}*/
/* {% set options = currentOptions|merge({'depth': currentOptions.depth - 1}) %}*/
/* {% endif %}*/
/* {% for item in currentItem.children %}*/
/*     {{ block('item') }}*/
/* {% endfor %}*/
/* {# restore current variables #}*/
/* {% set item = currentItem %}*/
/* {% set options = currentOptions %}*/
/* {% endblock %}*/
/* */
/* {% block item %}*/
/* {% if item.displayed %}*/
/* {# building the class of the item #}*/
/*     {%- set classes = item.attribute('class') is not empty ? [item.attribute('class')] : [] %}*/
/*     {%- if matcher.isCurrent(item) %}*/
/*         {%- set classes = classes|merge([options.currentClass]) %}*/
/*     {%- elseif matcher.isAncestor(item, options.matchingDepth) %}*/
/*         {%- set classes = classes|merge([options.ancestorClass]) %}*/
/*     {%- endif %}*/
/*     {%- if item.actsLikeFirst %}*/
/*         {%- set classes = classes|merge([options.firstClass]) %}*/
/*     {%- endif %}*/
/*     {%- if item.actsLikeLast %}*/
/*         {%- set classes = classes|merge([options.lastClass]) %}*/
/*     {%- endif %}*/
/*     {%- set attributes = item.attributes %}*/
/*     {%- if classes is not empty %}*/
/*         {%- set attributes = attributes|merge({'class': classes|join(' ')}) %}*/
/*     {%- endif %}*/
/* {# displaying the item #}*/
/*     {% import _self as knp_menu %}*/
/*     <li{{ knp_menu.attributes(attributes) }}>*/
/*     {#<li>#}*/
/*         {%- if item.uri is not empty and (not item.current or options.currentAsLink) %}*/
/*         {{ block('linkElement') }}*/
/*         {%- else %}*/
/*         {{ block('spanElement') }}*/
/*         {%- endif %}*/
/* {# render the list of children#}*/
/*         {%- set childrenClasses = item.childrenAttribute('class') is not empty ? [item.childrenAttribute('class')] : [] %}*/
/*         {%- set childrenClasses = childrenClasses|merge(['menu_level_' ~ item.level]) %}*/
/*         {%- set listAttributes = item.childrenAttributes|merge({'class': childrenClasses|join(' ') }) %}*/
/*         {% if item.hasChildren %}*/
/*             <div class="drop-menu">*/
/*                 {{ block('list') }}*/
/*             </div>*/
/*         {% endif %}*/
/*     </li>*/
/* {% endif %}*/
/* {% endblock %}*/
/*     */
/* {% block linkElement %}<a class="{% if item.hasChildren %}drop-link {% endif %}{{ item.linkAttributes('class')|join(' ') }}" href="{{ item.uri }}">{{ block('label') }}</a>{% endblock %}*/
/* {% block spanElement %}<a class="{% if item.hasChildren %}drop-link {% endif %}{{ item.labelAttributes('class')|join(' ') }}" href="javascript:void();">{{ block('label') }}</a>{% endblock %}*/
/* */
