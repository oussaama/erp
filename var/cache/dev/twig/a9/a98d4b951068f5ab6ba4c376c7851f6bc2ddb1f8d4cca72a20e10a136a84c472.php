<?php

/* BoekkooiJqueryValidationBundle:Form:macros.js.twig */
class __TwigTemplate_109bf5ba3f915a8110637e8b25964aa07385a74788f36096e44f2a22c4c3adaf extends Twig_Template
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
        $__internal_1514c64fee5e85bb110ac51623b593d6a289f5beb8ea7f6fec57c3a41f8ad423 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1514c64fee5e85bb110ac51623b593d6a289f5beb8ea7f6fec57c3a41f8ad423->enter($__internal_1514c64fee5e85bb110ac51623b593d6a289f5beb8ea7f6fec57c3a41f8ad423_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoekkooiJqueryValidationBundle:Form:macros.js.twig"));

        $__internal_c84d706cd2160f5bcacfc4ce1e4ffd7d504e749bcc6a41c47db1ba79f7bf7b14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c84d706cd2160f5bcacfc4ce1e4ffd7d504e749bcc6a41c47db1ba79f7bf7b14->enter($__internal_c84d706cd2160f5bcacfc4ce1e4ffd7d504e749bcc6a41c47db1ba79f7bf7b14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoekkooiJqueryValidationBundle:Form:macros.js.twig"));

        // line 8
        echo "
";
        // line 15
        echo "
";
        // line 31
        echo "
";
        // line 44
        echo "
";
        // line 89
        echo "
";
        // line 105
        echo "
";
        // line 117
        echo "
";
        
        $__internal_1514c64fee5e85bb110ac51623b593d6a289f5beb8ea7f6fec57c3a41f8ad423->leave($__internal_1514c64fee5e85bb110ac51623b593d6a289f5beb8ea7f6fec57c3a41f8ad423_prof);

        
        $__internal_c84d706cd2160f5bcacfc4ce1e4ffd7d504e749bcc6a41c47db1ba79f7bf7b14->leave($__internal_c84d706cd2160f5bcacfc4ce1e4ffd7d504e749bcc6a41c47db1ba79f7bf7b14_prof);

    }

    // line 1
    public function getform_jquery_selector($__form__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "form" => $__form__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_cbfd6940227bb9e8070cb344d48dfad7ba5c4b1c9befd4dc0bd95e51de350a63 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_cbfd6940227bb9e8070cb344d48dfad7ba5c4b1c9befd4dc0bd95e51de350a63->enter($__internal_cbfd6940227bb9e8070cb344d48dfad7ba5c4b1c9befd4dc0bd95e51de350a63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "form_jquery_selector"));

            $__internal_252ec1d1ffdeaebf1c97ee90b2ebfb7f70b11e01f7d170782daaf317b6bf890b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_252ec1d1ffdeaebf1c97ee90b2ebfb7f70b11e01f7d170782daaf317b6bf890b->enter($__internal_252ec1d1ffdeaebf1c97ee90b2ebfb7f70b11e01f7d170782daaf317b6bf890b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "form_jquery_selector"));

            // line 2
            if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array(), "any", false, true), "attr", array(), "any", false, true), "id", array(), "any", true, true)) {
                // line 3
                echo "#";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "attr", array()), "id", array()), "js");
            } else {
                // line 5
                echo "form[name=\\\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "full_name", array()), "js");
                echo "\\\"]";
            }
            
            $__internal_252ec1d1ffdeaebf1c97ee90b2ebfb7f70b11e01f7d170782daaf317b6bf890b->leave($__internal_252ec1d1ffdeaebf1c97ee90b2ebfb7f70b11e01f7d170782daaf317b6bf890b_prof);

            
            $__internal_cbfd6940227bb9e8070cb344d48dfad7ba5c4b1c9befd4dc0bd95e51de350a63->leave($__internal_cbfd6940227bb9e8070cb344d48dfad7ba5c4b1c9befd4dc0bd95e51de350a63_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 9
    public function getvalidation_groups($__groups__ = null, $__activeGroups__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "groups" => $__groups__,
            "activeGroups" => $__activeGroups__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_e368d71a6402dc126100f31253c79ab51d0761ab182bde257d1343180f0fb3cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_e368d71a6402dc126100f31253c79ab51d0761ab182bde257d1343180f0fb3cc->enter($__internal_e368d71a6402dc126100f31253c79ab51d0761ab182bde257d1343180f0fb3cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "validation_groups"));

            $__internal_1a8b86733f9f8b81fe07b1f971ac0e28915f4fa5f2f802cba2326410e17c5fa4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_1a8b86733f9f8b81fe07b1f971ac0e28915f4fa5f2f802cba2326410e17c5fa4->enter($__internal_1a8b86733f9f8b81fe07b1f971ac0e28915f4fa5f2f802cba2326410e17c5fa4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "validation_groups"));

            // line 10
            $context["activeGroups"] = ((array_key_exists("activeGroups", $context)) ? (_twig_default_filter(($context["activeGroups"] ?? $this->getContext($context, "activeGroups")), array())) : (array()));
            // line 11
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["groups"] ?? $this->getContext($context, "groups")));
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
            foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
                // line 12
                echo "\"";
                echo twig_escape_filter($this->env, $context["group"], "js");
                echo "\": ";
                echo ((twig_in_filter($context["group"], ($context["activeGroups"] ?? $this->getContext($context, "activeGroups")))) ? ("true") : ("false"));
                if ( !$this->getAttribute($context["loop"], "last", array())) {
                    echo ", ";
                }
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            
            $__internal_1a8b86733f9f8b81fe07b1f971ac0e28915f4fa5f2f802cba2326410e17c5fa4->leave($__internal_1a8b86733f9f8b81fe07b1f971ac0e28915f4fa5f2f802cba2326410e17c5fa4_prof);

            
            $__internal_e368d71a6402dc126100f31253c79ab51d0761ab182bde257d1343180f0fb3cc->leave($__internal_e368d71a6402dc126100f31253c79ab51d0761ab182bde257d1343180f0fb3cc_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 17
    public function getform_rules($__fields__ = null, $__includeGroupDeps__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "fields" => $__fields__,
            "includeGroupDeps" => $__includeGroupDeps__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_6f9c8415f06bc493600d6827650a0863102def5e90eefc9f44534306d65a1308 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_6f9c8415f06bc493600d6827650a0863102def5e90eefc9f44534306d65a1308->enter($__internal_6f9c8415f06bc493600d6827650a0863102def5e90eefc9f44534306d65a1308_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "form_rules"));

            $__internal_d38300d9dd4056c792acdfaf384e351997b976f4d1a327cef7f2b2e7f040fe84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_d38300d9dd4056c792acdfaf384e351997b976f4d1a327cef7f2b2e7f040fe84->enter($__internal_d38300d9dd4056c792acdfaf384e351997b976f4d1a327cef7f2b2e7f040fe84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "form_rules"));

            // line 18
            $context["gen"] = $this;
            // line 20
            $context["first"] = true;
            // line 21
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["fields"] ?? $this->getContext($context, "fields")));
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 22
                if ((twig_length_filter($this->env, $this->getAttribute($context["field"], "rules", array())) > 0)) {
                    // line 23
                    if ( !($context["first"] ?? $this->getContext($context, "first"))) {
                        echo ",";
                    }
                    // line 24
                    echo "\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "name", array()), "js");
                    echo "\": {";
                    // line 25
                    echo $context["gen"]->getrules($this->getAttribute($context["field"], "rules", array()), ($context["includeGroupDeps"] ?? $this->getContext($context, "includeGroupDeps")));
                    // line 26
                    echo "}";
                    // line 27
                    $context["first"] = false;
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            
            $__internal_d38300d9dd4056c792acdfaf384e351997b976f4d1a327cef7f2b2e7f040fe84->leave($__internal_d38300d9dd4056c792acdfaf384e351997b976f4d1a327cef7f2b2e7f040fe84_prof);

            
            $__internal_6f9c8415f06bc493600d6827650a0863102def5e90eefc9f44534306d65a1308->leave($__internal_6f9c8415f06bc493600d6827650a0863102def5e90eefc9f44534306d65a1308_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 33
    public function getrules($__field_rules__ = null, $__includeGroupDeps__ = null, $__includeMessage__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "field_rules" => $__field_rules__,
            "includeGroupDeps" => $__includeGroupDeps__,
            "includeMessage" => $__includeMessage__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_b10ca1f3ab29a60ff078d6626c299a86c77c28c1038d04dabab20bc31e0e3a2b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_b10ca1f3ab29a60ff078d6626c299a86c77c28c1038d04dabab20bc31e0e3a2b->enter($__internal_b10ca1f3ab29a60ff078d6626c299a86c77c28c1038d04dabab20bc31e0e3a2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "rules"));

            $__internal_d5889f13389ef4e9a6b7c087c85fa0cf541db5fa1b10f1cd0e0d28e82c7cb33a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_d5889f13389ef4e9a6b7c087c85fa0cf541db5fa1b10f1cd0e0d28e82c7cb33a->enter($__internal_d5889f13389ef4e9a6b7c087c85fa0cf541db5fa1b10f1cd0e0d28e82c7cb33a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "rules"));

            // line 34
            $context["gen"] = $this;
            // line 36
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["field_rules"] ?? $this->getContext($context, "field_rules")));
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
            foreach ($context['_seq'] as $context["_key"] => $context["rule"]) {
                // line 37
                echo "\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["rule"], "name", array()), "js");
                echo "\":";
                echo $context["gen"]->getrule($context["rule"], ($context["includeGroupDeps"] ?? $this->getContext($context, "includeGroupDeps")));
                if ( !$this->getAttribute($context["loop"], "last", array())) {
                    echo ",";
                }
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rule'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            if (((array_key_exists("includeMessage", $context)) ? (_twig_default_filter(($context["includeMessage"] ?? $this->getContext($context, "includeMessage")), false)) : (false))) {
                // line 41
                echo ",\"messages\": {";
                echo $context["gen"]->getrules_messages(($context["field_rules"] ?? $this->getContext($context, "field_rules")));
                echo "}";
            }
            
            $__internal_d5889f13389ef4e9a6b7c087c85fa0cf541db5fa1b10f1cd0e0d28e82c7cb33a->leave($__internal_d5889f13389ef4e9a6b7c087c85fa0cf541db5fa1b10f1cd0e0d28e82c7cb33a_prof);

            
            $__internal_b10ca1f3ab29a60ff078d6626c299a86c77c28c1038d04dabab20bc31e0e3a2b->leave($__internal_b10ca1f3ab29a60ff078d6626c299a86c77c28c1038d04dabab20bc31e0e3a2b_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 46
    public function getrule($__rule__ = null, $__includeGroupDeps__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "rule" => $__rule__,
            "includeGroupDeps" => $__includeGroupDeps__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_ee110fb42812e91635f1e75ef32818b97c52070110875c66eca08cca63aa9cd8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_ee110fb42812e91635f1e75ef32818b97c52070110875c66eca08cca63aa9cd8->enter($__internal_ee110fb42812e91635f1e75ef32818b97c52070110875c66eca08cca63aa9cd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "rule"));

            $__internal_7063a288557b31e7d6674014f7fc289a5e2e503ee0131ce8ed795637a178deff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_7063a288557b31e7d6674014f7fc289a5e2e503ee0131ce8ed795637a178deff->enter($__internal_7063a288557b31e7d6674014f7fc289a5e2e503ee0131ce8ed795637a178deff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "rule"));

            // line 47
            echo "    ";
            $context["macro_conditions"] = $this->loadTemplate("BoekkooiJqueryValidationBundle:Form:conditions.js.twig", "BoekkooiJqueryValidationBundle:Form:macros.js.twig", 47);
            // line 49
            $context["hasGroups"] = ((((array_key_exists("includeGroupDeps", $context)) ? (_twig_default_filter(($context["includeGroupDeps"] ?? $this->getContext($context, "includeGroupDeps")), false)) : (false)) && $this->getAttribute(($context["rule"] ?? null), "groups", array(), "any", true, true)) && (twig_length_filter($this->env, $this->getAttribute(($context["rule"] ?? $this->getContext($context, "rule")), "groups", array())) > 0));
            // line 50
            $context["hasConditions"] =  !twig_test_empty($this->getAttribute(($context["rule"] ?? $this->getContext($context, "rule")), "conditions", array()));
            // line 52
            if ((($context["hasGroups"] ?? $this->getContext($context, "hasGroups")) || ($context["hasConditions"] ?? $this->getContext($context, "hasConditions")))) {
                // line 53
                $context["hasParams"] =  !($this->getAttribute(($context["rule"] ?? $this->getContext($context, "rule")), "options", array()) === true);
                // line 55
                echo "{";
                // line 56
                if (($context["hasParams"] ?? $this->getContext($context, "hasParams"))) {
                    // line 57
                    echo "param:";
                    echo twig_jsonencode_filter($this->getAttribute(($context["rule"] ?? $this->getContext($context, "rule")), "options", array()));
                    echo ",";
                }
                // line 59
                echo "depends: function() {";
                // line 60
                if (($context["hasConditions"] ?? $this->getContext($context, "hasConditions"))) {
                    // line 61
                    if (($context["hasGroups"] ?? $this->getContext($context, "hasGroups"))) {
                        // line 62
                        echo "if (!(";
                        // line 63
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["rule"] ?? $this->getContext($context, "rule")), "groups", array()));
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
                        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
                            // line 64
                            echo "validator.settings.validation_groups[\"";
                            echo twig_escape_filter($this->env, $context["group"], "js");
                            echo "\"]";
                            if ( !$this->getAttribute($context["loop"], "last", array())) {
                                echo " || ";
                            }
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
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 66
                        echo ")) {
                            return false;
                        }";
                    }
                    // line 71
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["rule"] ?? $this->getContext($context, "rule")), "conditions", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["condition"]) {
                        // line 72
                        echo $this->getAttribute(($context["macro_conditions"] ?? $this->getContext($context, "macro_conditions")), $this->getAttribute($context["condition"], "macro", array()), array(0 => $context["condition"], 1 => ($context["rule"] ?? $this->getContext($context, "rule"))));
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['condition'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 75
                    echo "return true;
                ";
                } else {
                    // line 77
                    echo "                    return (";
                    // line 78
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["rule"] ?? $this->getContext($context, "rule")), "groups", array()));
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
                    foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
                        // line 79
                        echo "validator.settings.validation_groups[\"";
                        echo twig_escape_filter($this->env, $context["group"], "js");
                        echo "\"]";
                        if ( !$this->getAttribute($context["loop"], "last", array())) {
                            echo " || ";
                        }
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
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 81
                    echo ");";
                }
                // line 83
                echo "}
        }";
            } else {
                // line 86
                echo twig_jsonencode_filter($this->getAttribute(($context["rule"] ?? $this->getContext($context, "rule")), "options", array()));
            }
            
            $__internal_7063a288557b31e7d6674014f7fc289a5e2e503ee0131ce8ed795637a178deff->leave($__internal_7063a288557b31e7d6674014f7fc289a5e2e503ee0131ce8ed795637a178deff_prof);

            
            $__internal_ee110fb42812e91635f1e75ef32818b97c52070110875c66eca08cca63aa9cd8->leave($__internal_ee110fb42812e91635f1e75ef32818b97c52070110875c66eca08cca63aa9cd8_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 91
    public function getform_messages($__fields__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "fields" => $__fields__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_06659199e7279cbbc72c8164721af447d6d2b49a5350ead6e4b5c2000b265986 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_06659199e7279cbbc72c8164721af447d6d2b49a5350ead6e4b5c2000b265986->enter($__internal_06659199e7279cbbc72c8164721af447d6d2b49a5350ead6e4b5c2000b265986_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "form_messages"));

            $__internal_f768bd34be57d9842df25ce4da4c2aae137a1a5d93e6c74a1b72408cef17ab28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_f768bd34be57d9842df25ce4da4c2aae137a1a5d93e6c74a1b72408cef17ab28->enter($__internal_f768bd34be57d9842df25ce4da4c2aae137a1a5d93e6c74a1b72408cef17ab28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "form_messages"));

            // line 92
            $context["gen"] = $this;
            // line 94
            $context["first"] = true;
            // line 95
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["fields"] ?? $this->getContext($context, "fields")));
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 96
                if ((twig_length_filter($this->env, $this->getAttribute($context["field"], "rules", array())) > 0)) {
                    // line 97
                    if ( !($context["first"] ?? $this->getContext($context, "first"))) {
                        echo ",";
                    }
                    // line 98
                    echo "\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "name", array()), "js");
                    echo "\": {";
                    // line 99
                    echo $context["gen"]->getrules_messages($this->getAttribute($context["field"], "rules", array()));
                    // line 100
                    echo "}";
                    // line 101
                    $context["first"] = false;
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            
            $__internal_f768bd34be57d9842df25ce4da4c2aae137a1a5d93e6c74a1b72408cef17ab28->leave($__internal_f768bd34be57d9842df25ce4da4c2aae137a1a5d93e6c74a1b72408cef17ab28_prof);

            
            $__internal_06659199e7279cbbc72c8164721af447d6d2b49a5350ead6e4b5c2000b265986->leave($__internal_06659199e7279cbbc72c8164721af447d6d2b49a5350ead6e4b5c2000b265986_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 107
    public function getrules_messages($__field_rules__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "field_rules" => $__field_rules__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_8f651985369f00d0520970d173b55a26751fe1b3e3917173a8bc0813cebe8fa2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_8f651985369f00d0520970d173b55a26751fe1b3e3917173a8bc0813cebe8fa2->enter($__internal_8f651985369f00d0520970d173b55a26751fe1b3e3917173a8bc0813cebe8fa2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "rules_messages"));

            $__internal_29c567fd76645b058399e2b0dc41109c9fb9a805889e6cab63e02345459636d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_29c567fd76645b058399e2b0dc41109c9fb9a805889e6cab63e02345459636d8->enter($__internal_29c567fd76645b058399e2b0dc41109c9fb9a805889e6cab63e02345459636d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "rules_messages"));

            // line 108
            $context["gen"] = $this;
            // line 110
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["field_rules"] ?? $this->getContext($context, "field_rules")));
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
            foreach ($context['_seq'] as $context["_key"] => $context["rule"]) {
                // line 111
                if ($this->getAttribute($context["rule"], "message", array())) {
                    // line 112
                    echo "\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["rule"], "name", array()), "js");
                    echo "\": \"";
                    echo $context["gen"]->getrule_message($this->getAttribute($context["rule"], "message", array()));
                    echo "\"";
                    // line 113
                    if ( !$this->getAttribute($context["loop"], "last", array())) {
                        echo ",";
                    }
                }
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rule'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            
            $__internal_29c567fd76645b058399e2b0dc41109c9fb9a805889e6cab63e02345459636d8->leave($__internal_29c567fd76645b058399e2b0dc41109c9fb9a805889e6cab63e02345459636d8_prof);

            
            $__internal_8f651985369f00d0520970d173b55a26751fe1b3e3917173a8bc0813cebe8fa2->leave($__internal_8f651985369f00d0520970d173b55a26751fe1b3e3917173a8bc0813cebe8fa2_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 119
    public function getrule_message($__msg__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "msg" => $__msg__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_dac183f72ff6c47c018b36b8a7dfbc91f02a5389d9f6d05d436a939136a4c506 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_dac183f72ff6c47c018b36b8a7dfbc91f02a5389d9f6d05d436a939136a4c506->enter($__internal_dac183f72ff6c47c018b36b8a7dfbc91f02a5389d9f6d05d436a939136a4c506_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "rule_message"));

            $__internal_8666867e5582619fe884d22b54a5dddc8df39e9cac7c12417adb19a5d7ad3a65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_8666867e5582619fe884d22b54a5dddc8df39e9cac7c12417adb19a5d7ad3a65->enter($__internal_8666867e5582619fe884d22b54a5dddc8df39e9cac7c12417adb19a5d7ad3a65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "rule_message"));

            // line 120
            if ((null === $this->getAttribute(($context["msg"] ?? $this->getContext($context, "msg")), "plural", array()))) {
                // line 121
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["msg"] ?? $this->getContext($context, "msg")), "message", array()), $this->getAttribute(($context["msg"] ?? $this->getContext($context, "msg")), "parameters", array()), "validators"), "js");
            } else {
                // line 123
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->transchoice($this->getAttribute(($context["msg"] ?? $this->getContext($context, "msg")), "message", array()), $this->getAttribute(($context["msg"] ?? $this->getContext($context, "msg")), "plural", array()), twig_array_merge($this->getAttribute(($context["msg"] ?? $this->getContext($context, "msg")), "parameters", array()), array("%count%" => $this->getAttribute(($context["msg"] ?? $this->getContext($context, "msg")), "plural", array()))), "validators"), "js");
            }
            
            $__internal_8666867e5582619fe884d22b54a5dddc8df39e9cac7c12417adb19a5d7ad3a65->leave($__internal_8666867e5582619fe884d22b54a5dddc8df39e9cac7c12417adb19a5d7ad3a65_prof);

            
            $__internal_dac183f72ff6c47c018b36b8a7dfbc91f02a5389d9f6d05d436a939136a4c506->leave($__internal_dac183f72ff6c47c018b36b8a7dfbc91f02a5389d9f6d05d436a939136a4c506_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "BoekkooiJqueryValidationBundle:Form:macros.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  671 => 123,  668 => 121,  666 => 120,  648 => 119,  612 => 113,  606 => 112,  604 => 111,  587 => 110,  585 => 108,  567 => 107,  541 => 101,  539 => 100,  537 => 99,  533 => 98,  529 => 97,  527 => 96,  523 => 95,  521 => 94,  519 => 92,  501 => 91,  479 => 86,  475 => 83,  472 => 81,  453 => 79,  436 => 78,  434 => 77,  430 => 75,  424 => 72,  420 => 71,  415 => 66,  396 => 64,  379 => 63,  377 => 62,  375 => 61,  373 => 60,  371 => 59,  366 => 57,  364 => 56,  362 => 55,  360 => 53,  358 => 52,  356 => 50,  354 => 49,  351 => 47,  332 => 46,  308 => 41,  306 => 40,  286 => 37,  269 => 36,  267 => 34,  247 => 33,  221 => 27,  219 => 26,  217 => 25,  213 => 24,  209 => 23,  207 => 22,  202 => 21,  200 => 20,  198 => 18,  179 => 17,  140 => 12,  123 => 11,  121 => 10,  102 => 9,  78 => 5,  74 => 3,  72 => 2,  54 => 1,  43 => 117,  40 => 105,  37 => 89,  34 => 44,  31 => 31,  28 => 15,  25 => 8,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% macro form_jquery_selector(form) %}
    {%- if form.vars.attr.id is defined -%}
        #{{- form.vars.attr.id|e('js') -}}
    {%- else -%}
        form[name=\\\"{{- form.vars.full_name|e('js') -}}\\\"]
    {%- endif -%}
{% endmacro %}

{% macro validation_groups(groups, activeGroups) %}
    {%- set activeGroups = activeGroups|default([]) -%}
    {%- for group in groups -%}
        \"{{ group|e('js') }}\": {{ group in activeGroups ? 'true' : 'false' }}{% if not loop.last %}, {% endif %}
    {%- endfor -%}
{% endmacro %}

{# Generate all rules for all fields #}
{% macro form_rules(fields, includeGroupDeps) %}
    {%- import _self as gen -%}

    {% set first = true %}
    {% for field in fields %}
        {%- if field.rules|length > 0 -%}
            {%- if not first %},{% endif -%}
            \"{{ field.name|e('js') }}\": {
                {{- gen.rules(field.rules, includeGroupDeps) -}}
            }
            {%- set first = false -%}
        {%- endif -%}
    {% endfor %}
{% endmacro %}

{# Generate all rules #}
{% macro rules(field_rules, includeGroupDeps, includeMessage) %}
    {%- import _self as gen -%}

    {%- for rule in field_rules -%}
        \"{{ rule.name|e('js') }}\": {{- gen.rule(rule, includeGroupDeps) -}}{% if not loop.last %}, {%- endif -%}
    {%- endfor -%}

    {%- if includeMessage|default(false) -%}
        ,\"messages\": { {{- gen.rules_messages(field_rules) -}} }
    {%- endif -%}
{% endmacro %}

{# Generate a rule #}
{% macro rule(rule, includeGroupDeps) %}
    {% import \"BoekkooiJqueryValidationBundle:Form:conditions.js.twig\" as macro_conditions %}

    {%- set hasGroups = includeGroupDeps|default(false) and rule.groups is defined and rule.groups|length > 0 -%}
    {%- set hasConditions = (rule.conditions is not empty) -%}

    {%- if hasGroups or hasConditions -%}
        {%- set hasParams = rule.options is not same as(true) -%}

        {
        {%- if hasParams -%}
            param: {{- rule.options|json_encode()|raw -}},
        {%- endif -%}
            depends: function() {
                {%- if hasConditions %}
                    {%- if hasGroups -%}
                        if (!(
                            {%- for group in rule.groups -%}
                                validator.settings.validation_groups[\"{{ group|e('js') }}\"] {%- if not loop.last %} || {% endif -%}
                            {%- endfor -%}
                        )) {
                            return false;
                        }
                    {%- endif -%}

                    {%- for condition in rule.conditions -%}
                        {{ attribute(macro_conditions, condition.macro, [condition, rule]) }}
                    {%- endfor -%}

                    return true;
                {% else %}
                    return (
                        {%- for group in rule.groups -%}
                            validator.settings.validation_groups[\"{{ group|e('js') }}\"] {%- if not loop.last %} || {% endif -%}
                        {%- endfor -%}
                    );
                {%- endif -%}
            }
        }
    {%- else -%}
        {{- rule.options|json_encode()|raw -}}
    {%- endif -%}
{% endmacro %}

{# Generate all messages for all fields #}
{% macro form_messages(fields) %}
    {%- import _self as gen -%}

    {% set first = true %}
    {%- for field in fields -%}
        {%- if field.rules|length > 0 -%}
            {%- if not first %},{% endif -%}
            \"{{ field.name|e('js') }}\": {
                {{- gen.rules_messages(field.rules) -}}
            }
            {%- set first = false -%}
        {%- endif -%}
    {%- endfor -%}
{% endmacro %}

{# Generate all messages for a set of rules #}
{% macro rules_messages(field_rules) %}
    {%- import _self as gen -%}

    {%- for rule in field_rules -%}
        {%- if rule.message -%}
            \"{{ rule.name|e('js') }}\": \"{{ gen.rule_message(rule.message) }}\"
            {%- if not loop.last -%}, {%- endif -%}
        {%- endif -%}
    {%- endfor -%}
{% endmacro %}

{# Create a string based on a form rule message #}
{% macro rule_message(msg) %}
    {%- if msg.plural is null -%}
        {{- msg.message|trans(msg.parameters, 'validators')|e('js') -}}
    {%- else -%}
        {{- msg.message|transchoice(msg.plural, msg.parameters|merge({'%count%': msg.plural}), 'validators')|e('js') -}}
    {%- endif -%}
{% endmacro %}
", "BoekkooiJqueryValidationBundle:Form:macros.js.twig", "/var/www/html/erp/vendor/boekkooi/jquery-validation-bundle/src/Resources/views/Form/macros.js.twig");
    }
}
