<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* config/form_display/input.twig */
class __TwigTemplate_f14997cd2841d6fc9789dc83437be247 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        if ((($tmp = (isset($context["option_is_disabled"]) || array_key_exists("option_is_disabled", $context) ? $context["option_is_disabled"] : (function () { throw new RuntimeError('Variable "option_is_disabled" does not exist.', 1, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 2
            yield "  ";
            $context["tr_class"] = ((isset($context["tr_class"]) || array_key_exists("tr_class", $context) ? $context["tr_class"] : (function () { throw new RuntimeError('Variable "tr_class" does not exist.', 2, $this->source); })()) . " disabled-field");
        }
        // line 4
        yield "<tr";
        if ((($tmp = (isset($context["tr_class"]) || array_key_exists("tr_class", $context) ? $context["tr_class"] : (function () { throw new RuntimeError('Variable "tr_class" does not exist.', 4, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield " class=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["tr_class"]) || array_key_exists("tr_class", $context) ? $context["tr_class"] : (function () { throw new RuntimeError('Variable "tr_class" does not exist.', 4, $this->source); })()), "html", null, true);
            yield "\"";
        }
        yield ">
  <th>
    <label for=\"";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["path"]) || array_key_exists("path", $context) ? $context["path"] : (function () { throw new RuntimeError('Variable "path" does not exist.', 6, $this->source); })()), "html", null, true);
        yield "\">";
        yield (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 6, $this->source); })());
        yield "</label>

    ";
        // line 8
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty((isset($context["doc"]) || array_key_exists("doc", $context) ? $context["doc"] : (function () { throw new RuntimeError('Variable "doc" does not exist.', 8, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 9
            yield "      <span class=\"doc\">
        <a href=\"";
            // line 10
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["doc"]) || array_key_exists("doc", $context) ? $context["doc"] : (function () { throw new RuntimeError('Variable "doc" does not exist.', 10, $this->source); })()), "html", null, true);
            yield "\" target=\"documentation\">";
            yield PhpMyAdmin\Html\Generator::getImage("b_help", \_gettext("Documentation"));
            yield "</a>
      </span>
    ";
        }
        // line 13
        yield "
    ";
        // line 14
        if ((($tmp = (isset($context["option_is_disabled"]) || array_key_exists("option_is_disabled", $context) ? $context["option_is_disabled"] : (function () { throw new RuntimeError('Variable "option_is_disabled" does not exist.', 14, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 15
            yield "      <span class=\"disabled-notice\" title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("This setting is disabled, it will not be applied to your configuration."), "html", null, true);
            yield "\">
        ";
            // line 16
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Disabled"), "html", null, true);
            yield "
      </span>
    ";
        }
        // line 19
        yield "
    ";
        // line 20
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty((isset($context["description"]) || array_key_exists("description", $context) ? $context["description"] : (function () { throw new RuntimeError('Variable "description" does not exist.', 20, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 21
            yield "      <small>";
            yield (isset($context["description"]) || array_key_exists("description", $context) ? $context["description"] : (function () { throw new RuntimeError('Variable "description" does not exist.', 21, $this->source); })());
            yield "</small>
    ";
        }
        // line 23
        yield "  </th>

  <td>
    ";
        // line 26
        if (((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 26, $this->source); })()) == "text")) {
            // line 27
            yield "      <input type=\"text\" name=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["path"]) || array_key_exists("path", $context) ? $context["path"] : (function () { throw new RuntimeError('Variable "path" does not exist.', 27, $this->source); })()), "html", null, true);
            yield "\" id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["path"]) || array_key_exists("path", $context) ? $context["path"] : (function () { throw new RuntimeError('Variable "path" does not exist.', 27, $this->source); })()), "html", null, true);
            yield "\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 27, $this->source); })()), "html", null, true);
            yield "\" class=\"w-75";
            yield (((($tmp =  !(isset($context["value_is_default"]) || array_key_exists("value_is_default", $context) ? $context["value_is_default"] : (function () { throw new RuntimeError('Variable "value_is_default" does not exist.', 27, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((((($tmp = (isset($context["has_errors"]) || array_key_exists("has_errors", $context) ? $context["has_errors"] : (function () { throw new RuntimeError('Variable "has_errors" does not exist.', 27, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" custom field-error") : (" custom"))) : (""));
            yield "\">
    ";
        } elseif ((        // line 28
(isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 28, $this->source); })()) == "password")) {
            // line 29
            yield "      <input type=\"password\" name=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["path"]) || array_key_exists("path", $context) ? $context["path"] : (function () { throw new RuntimeError('Variable "path" does not exist.', 29, $this->source); })()), "html", null, true);
            yield "\" id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["path"]) || array_key_exists("path", $context) ? $context["path"] : (function () { throw new RuntimeError('Variable "path" does not exist.', 29, $this->source); })()), "html", null, true);
            yield "\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 29, $this->source); })()), "html", null, true);
            yield "\" class=\"w-75";
            yield (((($tmp =  !(isset($context["value_is_default"]) || array_key_exists("value_is_default", $context) ? $context["value_is_default"] : (function () { throw new RuntimeError('Variable "value_is_default" does not exist.', 29, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((((($tmp = (isset($context["has_errors"]) || array_key_exists("has_errors", $context) ? $context["has_errors"] : (function () { throw new RuntimeError('Variable "has_errors" does not exist.', 29, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" custom field-error") : (" custom"))) : (""));
            yield "\" spellcheck=\"false\">
    ";
        } elseif (((        // line 30
(isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 30, $this->source); })()) == "short_text") &&  !is_iterable((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 30, $this->source); })())))) {
            // line 31
            yield "      ";
            // line 32
            yield "      <input type=\"text\" size=\"25\" name=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["path"]) || array_key_exists("path", $context) ? $context["path"] : (function () { throw new RuntimeError('Variable "path" does not exist.', 32, $this->source); })()), "html", null, true);
            yield "\" id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["path"]) || array_key_exists("path", $context) ? $context["path"] : (function () { throw new RuntimeError('Variable "path" does not exist.', 32, $this->source); })()), "html", null, true);
            yield "\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 32, $this->source); })()), "html", null, true);
            yield "\" class=\"";
            yield (((($tmp =  !(isset($context["value_is_default"]) || array_key_exists("value_is_default", $context) ? $context["value_is_default"] : (function () { throw new RuntimeError('Variable "value_is_default" does not exist.', 32, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((((($tmp = (isset($context["has_errors"]) || array_key_exists("has_errors", $context) ? $context["has_errors"] : (function () { throw new RuntimeError('Variable "has_errors" does not exist.', 32, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("custom field-error") : ("custom"))) : (""));
            yield "\">
    ";
        } elseif ((        // line 33
(isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 33, $this->source); })()) == "number_text")) {
            // line 34
            yield "      <input type=\"number\" name=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["path"]) || array_key_exists("path", $context) ? $context["path"] : (function () { throw new RuntimeError('Variable "path" does not exist.', 34, $this->source); })()), "html", null, true);
            yield "\" id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["path"]) || array_key_exists("path", $context) ? $context["path"] : (function () { throw new RuntimeError('Variable "path" does not exist.', 34, $this->source); })()), "html", null, true);
            yield "\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 34, $this->source); })()), "html", null, true);
            yield "\" class=\"";
            yield (((($tmp =  !(isset($context["value_is_default"]) || array_key_exists("value_is_default", $context) ? $context["value_is_default"] : (function () { throw new RuntimeError('Variable "value_is_default" does not exist.', 34, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((((($tmp = (isset($context["has_errors"]) || array_key_exists("has_errors", $context) ? $context["has_errors"] : (function () { throw new RuntimeError('Variable "has_errors" does not exist.', 34, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("custom field-error") : ("custom"))) : (""));
            yield "\">
    ";
        } elseif ((        // line 35
(isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 35, $this->source); })()) == "checkbox")) {
            // line 36
            yield "      <span class=\"checkbox";
            yield (((($tmp =  !(isset($context["value_is_default"]) || array_key_exists("value_is_default", $context) ? $context["value_is_default"] : (function () { throw new RuntimeError('Variable "value_is_default" does not exist.', 36, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((((($tmp = (isset($context["has_errors"]) || array_key_exists("has_errors", $context) ? $context["has_errors"] : (function () { throw new RuntimeError('Variable "has_errors" does not exist.', 36, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" custom field-error") : (" custom"))) : (""));
            yield "\">
        <input type=\"checkbox\" name=\"";
            // line 37
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["path"]) || array_key_exists("path", $context) ? $context["path"] : (function () { throw new RuntimeError('Variable "path" does not exist.', 37, $this->source); })()), "html", null, true);
            yield "\" id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["path"]) || array_key_exists("path", $context) ? $context["path"] : (function () { throw new RuntimeError('Variable "path" does not exist.', 37, $this->source); })()), "html", null, true);
            yield "\"";
            yield (((($tmp = (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 37, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" checked") : (""));
            yield ">
      </span>
    ";
        } elseif ((        // line 39
(isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 39, $this->source); })()) == "select")) {
            // line 40
            yield "      <select name=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["path"]) || array_key_exists("path", $context) ? $context["path"] : (function () { throw new RuntimeError('Variable "path" does not exist.', 40, $this->source); })()), "html", null, true);
            yield "\" id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["path"]) || array_key_exists("path", $context) ? $context["path"] : (function () { throw new RuntimeError('Variable "path" does not exist.', 40, $this->source); })()), "html", null, true);
            yield "\" class=\"w-75";
            yield (((($tmp =  !(isset($context["value_is_default"]) || array_key_exists("value_is_default", $context) ? $context["value_is_default"] : (function () { throw new RuntimeError('Variable "value_is_default" does not exist.', 40, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((((($tmp = (isset($context["has_errors"]) || array_key_exists("has_errors", $context) ? $context["has_errors"] : (function () { throw new RuntimeError('Variable "has_errors" does not exist.', 40, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" custom field-error") : (" custom"))) : (""));
            yield "\">
        ";
            // line 41
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["select_values"]) || array_key_exists("select_values", $context) ? $context["select_values"] : (function () { throw new RuntimeError('Variable "select_values" does not exist.', 41, $this->source); })()));
            foreach ($context['_seq'] as $context["key"] => $context["val"]) {
                // line 42
                yield "          ";
                if (($context["val"] === true)) {
                    $context["val"] = \_gettext("Yes");
                } elseif (($context["val"] === false)) {
                    $context["val"] = \_gettext("No");
                }
                // line 43
                yield "          <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["key"], "html", null, true);
                yield "\"";
                yield ((Twig\Extension\CoreExtension::testEmpty($context["val"])) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((" label=\"" . \_gettext("None")) . "\""), "html", null, true)) : (""));
                yield ((((($context["key"] === (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 43, $this->source); })())) || (((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 43, $this->source); })()) === true) && ($context["key"] === 1))) || (((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 43, $this->source); })()) === false) && ($context["key"] === 0)))) ? (" selected") : (""));
                yield ((CoreExtension::inFilter($context["key"], (isset($context["select_values_disabled"]) || array_key_exists("select_values_disabled", $context) ? $context["select_values_disabled"] : (function () { throw new RuntimeError('Variable "select_values_disabled" does not exist.', 43, $this->source); })()))) ? (" disabled") : (""));
                yield ">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["val"], "html", null, true);
                yield "</option>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['key'], $context['val'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            yield "      </select>
    ";
        } elseif ((        // line 46
(isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 46, $this->source); })()) == "list")) {
            // line 47
            yield "      <textarea cols=\"35\" rows=\"5\" name=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["path"]) || array_key_exists("path", $context) ? $context["path"] : (function () { throw new RuntimeError('Variable "path" does not exist.', 47, $this->source); })()), "html", null, true);
            yield "\" id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["path"]) || array_key_exists("path", $context) ? $context["path"] : (function () { throw new RuntimeError('Variable "path" does not exist.', 47, $this->source); })()), "html", null, true);
            yield "\" class=\"";
            yield (((($tmp =  !(isset($context["value_is_default"]) || array_key_exists("value_is_default", $context) ? $context["value_is_default"] : (function () { throw new RuntimeError('Variable "value_is_default" does not exist.', 47, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((((($tmp = (isset($context["has_errors"]) || array_key_exists("has_errors", $context) ? $context["has_errors"] : (function () { throw new RuntimeError('Variable "has_errors" does not exist.', 47, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("custom field-error") : ("custom"))) : (""));
            yield "\">";
            // line 48
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 48, $this->source); })()));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["key"] => $context["val"]) {
                if (($context["key"] != "wrapper_params")) {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["val"], "html", null, true);
                    yield (((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 48)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("
") : (""));
                }
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['key'], $context['val'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 49
            yield "</textarea>
    ";
        }
        // line 51
        yield "
    ";
        // line 52
        if (((isset($context["is_setup"]) || array_key_exists("is_setup", $context) ? $context["is_setup"] : (function () { throw new RuntimeError('Variable "is_setup" does not exist.', 52, $this->source); })()) && (isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new RuntimeError('Variable "comment" does not exist.', 52, $this->source); })()))) {
            // line 53
            yield "      <a class=\"userprefs-comment\" title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new RuntimeError('Variable "comment" does not exist.', 53, $this->source); })()), "html", null, true);
            yield "\">";
            yield PhpMyAdmin\Html\Generator::getImage("b_tblops", \_gettext("Comment"));
            yield "</a>
    ";
        }
        // line 55
        yield "
    ";
        // line 56
        if ((($tmp = (isset($context["set_value"]) || array_key_exists("set_value", $context) ? $context["set_value"] : (function () { throw new RuntimeError('Variable "set_value" does not exist.', 56, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 57
            yield "      <a class=\"set-value hide\" href=\"#";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["path"]) || array_key_exists("path", $context) ? $context["path"] : (function () { throw new RuntimeError('Variable "path" does not exist.', 57, $this->source); })()), "html", null, true);
            yield "=";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["set_value"]) || array_key_exists("set_value", $context) ? $context["set_value"] : (function () { throw new RuntimeError('Variable "set_value" does not exist.', 57, $this->source); })()), "html", null, true);
            yield "\" title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf(\_gettext("Set value: %s"), (isset($context["set_value"]) || array_key_exists("set_value", $context) ? $context["set_value"] : (function () { throw new RuntimeError('Variable "set_value" does not exist.', 57, $this->source); })())), "html", null, true);
            yield "\">";
            // line 58
            yield PhpMyAdmin\Html\Generator::getImage("b_edit", Twig\Extension\CoreExtension::sprintf(\_gettext("Set value: %s"), (isset($context["set_value"]) || array_key_exists("set_value", $context) ? $context["set_value"] : (function () { throw new RuntimeError('Variable "set_value" does not exist.', 58, $this->source); })())));
            // line 59
            yield "</a>
    ";
        }
        // line 61
        yield "
    ";
        // line 62
        if ((($tmp = (isset($context["show_restore_default"]) || array_key_exists("show_restore_default", $context) ? $context["show_restore_default"] : (function () { throw new RuntimeError('Variable "show_restore_default" does not exist.', 62, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 63
            yield "      <a class=\"restore-default hide\" href=\"#";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["path"]) || array_key_exists("path", $context) ? $context["path"] : (function () { throw new RuntimeError('Variable "path" does not exist.', 63, $this->source); })()), "html", null, true);
            yield "\" title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Restore default value"), "html", null, true);
            yield "\">";
            // line 64
            yield PhpMyAdmin\Html\Generator::getImage("s_reload", \_gettext("Restore default value"));
            // line 65
            yield "</a>
    ";
        }
        // line 67
        yield "
    ";
        // line 69
        yield "    ";
        if ((($tmp = (isset($context["has_errors"]) || array_key_exists("has_errors", $context) ? $context["has_errors"] : (function () { throw new RuntimeError('Variable "has_errors" does not exist.', 69, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 70
            yield "      <dl class=\"inline_errors\">
        ";
            // line 71
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 71, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 72
                yield "          <dd>";
                yield $context["error"];
                yield "</dd>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 74
            yield "      </dl>
    ";
        }
        // line 76
        yield "  </td>

  ";
        // line 78
        if (((isset($context["is_setup"]) || array_key_exists("is_setup", $context) ? $context["is_setup"] : (function () { throw new RuntimeError('Variable "is_setup" does not exist.', 78, $this->source); })()) &&  !(null === (isset($context["allows_customization"]) || array_key_exists("allows_customization", $context) ? $context["allows_customization"] : (function () { throw new RuntimeError('Variable "allows_customization" does not exist.', 78, $this->source); })())))) {
            // line 79
            yield "    <td class=\"userprefs-allow\" title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Allow users to customize this value"), "html", null, true);
            yield "\">
      <input type=\"checkbox\" name=\"";
            // line 80
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["path"]) || array_key_exists("path", $context) ? $context["path"] : (function () { throw new RuntimeError('Variable "path" does not exist.', 80, $this->source); })()), "html", null, true);
            yield "-userprefs-allow\"";
            yield (((($tmp = (isset($context["allows_customization"]) || array_key_exists("allows_customization", $context) ? $context["allows_customization"] : (function () { throw new RuntimeError('Variable "allows_customization" does not exist.', 80, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" checked") : (""));
            yield " aria-label=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Allow users to customize this value"), "html", null, true);
            yield "\">
    </td>
  ";
        } elseif ((($tmp =         // line 82
(isset($context["is_setup"]) || array_key_exists("is_setup", $context) ? $context["is_setup"] : (function () { throw new RuntimeError('Variable "is_setup" does not exist.', 82, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 83
            yield "    <td>&nbsp;</td>
  ";
        }
        // line 85
        yield "</tr>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "config/form_display/input.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  369 => 85,  365 => 83,  363 => 82,  354 => 80,  349 => 79,  347 => 78,  343 => 76,  339 => 74,  330 => 72,  326 => 71,  323 => 70,  320 => 69,  317 => 67,  313 => 65,  311 => 64,  305 => 63,  303 => 62,  300 => 61,  296 => 59,  294 => 58,  286 => 57,  284 => 56,  281 => 55,  273 => 53,  271 => 52,  268 => 51,  264 => 49,  230 => 48,  222 => 47,  220 => 46,  217 => 45,  202 => 43,  195 => 42,  191 => 41,  182 => 40,  180 => 39,  171 => 37,  166 => 36,  164 => 35,  153 => 34,  151 => 33,  140 => 32,  138 => 31,  136 => 30,  125 => 29,  123 => 28,  112 => 27,  110 => 26,  105 => 23,  99 => 21,  97 => 20,  94 => 19,  88 => 16,  83 => 15,  81 => 14,  78 => 13,  70 => 10,  67 => 9,  65 => 8,  58 => 6,  48 => 4,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% if option_is_disabled %}
  {% set tr_class = tr_class ~ ' disabled-field' %}
{% endif %}
<tr{% if tr_class %} class=\"{{ tr_class }}\"{% endif %}>
  <th>
    <label for=\"{{ path }}\">{{ name|raw }}</label>

    {% if doc is not empty %}
      <span class=\"doc\">
        <a href=\"{{ doc }}\" target=\"documentation\">{{- get_image('b_help', t('Documentation')) -}}</a>
      </span>
    {% endif %}

    {% if option_is_disabled %}
      <span class=\"disabled-notice\" title=\"{{ t('This setting is disabled, it will not be applied to your configuration.') }}\">
        {{ t('Disabled') }}
      </span>
    {% endif %}

    {% if description is not empty %}
      <small>{{ description|raw }}</small>
    {% endif %}
  </th>

  <td>
    {% if type == 'text' %}
      <input type=\"text\" name=\"{{ path }}\" id=\"{{ path }}\" value=\"{{ value }}\" class=\"w-75{{ not value_is_default ? (has_errors ? ' custom field-error' : ' custom') }}\">
    {% elseif type == 'password' %}
      <input type=\"password\" name=\"{{ path }}\" id=\"{{ path }}\" value=\"{{ value }}\" class=\"w-75{{ not value_is_default ? (has_errors ? ' custom field-error' : ' custom') }}\" spellcheck=\"false\">
    {% elseif type == 'short_text' and value is not iterable %}
      {# https://github.com/phpmyadmin/phpmyadmin/issues/11505 #}
      <input type=\"text\" size=\"25\" name=\"{{ path }}\" id=\"{{ path }}\" value=\"{{ value }}\" class=\"{{ not value_is_default ? (has_errors ? 'custom field-error' : 'custom') }}\">
    {% elseif type == 'number_text' %}
      <input type=\"number\" name=\"{{ path }}\" id=\"{{ path }}\" value=\"{{ value }}\" class=\"{{ not value_is_default ? (has_errors ? 'custom field-error' : 'custom') }}\">
    {% elseif type == 'checkbox' %}
      <span class=\"checkbox{{ not value_is_default ? (has_errors ? ' custom field-error' : ' custom') }}\">
        <input type=\"checkbox\" name=\"{{ path }}\" id=\"{{ path }}\"{{ value ? ' checked' }}>
      </span>
    {% elseif type == 'select' %}
      <select name=\"{{ path }}\" id=\"{{ path }}\" class=\"w-75{{ not value_is_default ? (has_errors ? ' custom field-error' : ' custom') }}\">
        {% for key, val in select_values %}
          {% if val is same as(true) %}{% set val = t('Yes') %}{% elseif val is same as(false) %}{% set val = t('No') %}{% endif %}
          <option value=\"{{ key }}\"{{ val is empty ? ' label=\"' ~ t('None') ~ '\"' }}{{ key is same as(value) or (value is same as(true) and key is same as(1)) or (value is same as(false) and key is same as(0)) ? ' selected' }}{{ key in select_values_disabled ? ' disabled' }}>{{ val }}</option>
        {% endfor %}
      </select>
    {% elseif type == 'list' %}
      <textarea cols=\"35\" rows=\"5\" name=\"{{ path }}\" id=\"{{ path }}\" class=\"{{ not value_is_default ? (has_errors ? 'custom field-error' : 'custom') }}\">
        {%- for key, val in value %}{% if key != 'wrapper_params' %}{{ val }}{{ not loop.last ? \"\\n\" }}{% endif %}{% endfor -%}
      </textarea>
    {% endif %}

    {% if is_setup and comment %}
      <a class=\"userprefs-comment\" title=\"{{ comment }}\">{{ get_image('b_tblops', t('Comment')) }}</a>
    {% endif %}

    {% if set_value %}
      <a class=\"set-value hide\" href=\"#{{ path }}={{ set_value }}\" title=\"{{ t('Set value: %s')|format(set_value) }}\">
        {{- get_image('b_edit', t('Set value: %s')|format(set_value)) -}}
      </a>
    {% endif %}

    {% if show_restore_default %}
      <a class=\"restore-default hide\" href=\"#{{ path }}\" title=\"{{ t('Restore default value') }}\">
        {{- get_image('s_reload', t('Restore default value')) -}}
      </a>
    {% endif %}

    {# This must match with window.Config.displayErrors() in scripts/config.js. #}
    {% if has_errors %}
      <dl class=\"inline_errors\">
        {% for error in errors %}
          <dd>{{ error|raw }}</dd>
        {% endfor %}
      </dl>
    {% endif %}
  </td>

  {% if is_setup and allows_customization is not null %}
    <td class=\"userprefs-allow\" title=\"{{ t('Allow users to customize this value') }}\">
      <input type=\"checkbox\" name=\"{{ path }}-userprefs-allow\"{{ allows_customization ? ' checked' }} aria-label=\"{{ t('Allow users to customize this value') }}\">
    </td>
  {% elseif is_setup %}
    <td>&nbsp;</td>
  {% endif %}
</tr>
", "config/form_display/input.twig", "/mnt/storage/phpmyadmin.git/release/phpMyAdmin-6.0+snapshot/resources/templates/config/form_display/input.twig");
    }
}
