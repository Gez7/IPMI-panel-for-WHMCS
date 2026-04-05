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

/* server/privileges/privileges_table.twig */
class __TwigTemplate_6c40f38014679349976ee5901003e326 extends Template
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
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty((isset($context["columns"]) || array_key_exists("columns", $context) ? $context["columns"] : (function () { throw new RuntimeError('Variable "columns" does not exist.', 1, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 2
            yield "
  <input type=\"hidden\" name=\"grant_count\" value=\"";
            // line 3
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 3, $this->source); })())), "html", null, true);
            yield "\">
  <input type=\"hidden\" name=\"column_count\" value=\"";
            // line 4
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["columns"]) || array_key_exists("columns", $context) ? $context["columns"] : (function () { throw new RuntimeError('Variable "columns" does not exist.', 4, $this->source); })())), "html", null, true);
            yield "\">
  <div class=\"card mb-3\" id=\"fieldset_user_priv\">
    <div class=\"card-header js-submenu-label\" data-submenu-label=\"";
            // line 6
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Table"), "html", null, true);
            yield "\">
      ";
            // line 7
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Table-specific privileges"), "html", null, true);
            yield "
    </div>
    <div class=\"card-body\">
    <p>
      <small><em>";
            // line 11
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Note: MySQL privilege names are expressed in English."), "html", null, true);
            yield "</em></small>
    </p>

    <div class=\"item\" id=\"div_item_select\">
      <label for=\"select_select_priv\">
        <code><dfn title=\"";
            // line 16
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Allows reading data."), "html", null, true);
            yield "\">SELECT</dfn></code>
      </label>

      <select class=\"resize-vertical\" id=\"select_select_priv\" name=\"Select_priv[]\" size=\"8\" multiple>
        ";
            // line 20
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["columns"]) || array_key_exists("columns", $context) ? $context["columns"] : (function () { throw new RuntimeError('Variable "columns" does not exist.', 20, $this->source); })()));
            foreach ($context['_seq'] as $context["curr_col"] => $context["curr_col_privs"]) {
                // line 21
                yield "          <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["curr_col"], "html", null, true);
                yield "\"";
                yield ((((CoreExtension::getAttribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 21, $this->source); })()), "Select_priv", [], "array", false, false, false, 21) == "Y") || CoreExtension::getAttribute($this->env, $this->source, $context["curr_col_privs"], "Select", [], "array", false, false, false, 21))) ? (" selected") : (""));
                yield ">
            ";
                // line 22
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["curr_col"], "html", null, true);
                yield "
          </option>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['curr_col'], $context['curr_col_privs'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            yield "      </select>

      <div>
        <button class=\"btn btn-link p-0\" id=\"select_priv_all\" type=\"button\" data-select-target=\"#select_select_priv\">
          ";
            // line 29
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Select all"), "html", null, true);
            yield "
        </button>
      </div>

      <em>";
            // line 33
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Or"), "html", null, true);
            yield "</em>
      <label for=\"checkbox_Select_priv_none\">
        <input type=\"checkbox\" name=\"Select_priv_none\" id=\"checkbox_Select_priv_none\" title=\"";
            // line 36
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_pgettext("None privileges", "None"), "html", null, true);
            yield "\">
        ";
            // line 37
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_pgettext("None privileges", "None"), "html", null, true);
            yield "
      </label>
    </div>

    <div class=\"item\" id=\"div_item_insert\">
      <label for=\"select_insert_priv\">
        <code><dfn title=\"";
            // line 43
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Allows inserting and replacing data."), "html", null, true);
            yield "\">INSERT</dfn></code>
      </label>

      <select class=\"resize-vertical\" id=\"select_insert_priv\" name=\"Insert_priv[]\" size=\"8\" multiple>
        ";
            // line 47
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["columns"]) || array_key_exists("columns", $context) ? $context["columns"] : (function () { throw new RuntimeError('Variable "columns" does not exist.', 47, $this->source); })()));
            foreach ($context['_seq'] as $context["curr_col"] => $context["curr_col_privs"]) {
                // line 48
                yield "          <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["curr_col"], "html", null, true);
                yield "\"";
                yield ((((CoreExtension::getAttribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 48, $this->source); })()), "Insert_priv", [], "array", false, false, false, 48) == "Y") || CoreExtension::getAttribute($this->env, $this->source, $context["curr_col_privs"], "Insert", [], "array", false, false, false, 48))) ? (" selected") : (""));
                yield ">
            ";
                // line 49
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["curr_col"], "html", null, true);
                yield "
          </option>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['curr_col'], $context['curr_col_privs'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 52
            yield "      </select>

      <div>
        <button class=\"btn btn-link p-0\" id=\"insert_priv_all\" type=\"button\" data-select-target=\"#select_insert_priv\">
          ";
            // line 56
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Select all"), "html", null, true);
            yield "
        </button>
      </div>

      <em>";
            // line 60
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Or"), "html", null, true);
            yield "</em>
      <label for=\"checkbox_Insert_priv_none\">
        <input type=\"checkbox\" name=\"Insert_priv_none\" id=\"checkbox_Insert_priv_none\" title=\"";
            // line 63
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_pgettext("None privileges", "None"), "html", null, true);
            yield "\">
        ";
            // line 64
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_pgettext("None privileges", "None"), "html", null, true);
            yield "
      </label>
    </div>

    <div class=\"item\" id=\"div_item_update\">
      <label for=\"select_update_priv\">
        <code><dfn title=\"";
            // line 70
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Allows changing data."), "html", null, true);
            yield "\">UPDATE</dfn></code>
      </label>

      <select class=\"resize-vertical\" id=\"select_update_priv\" name=\"Update_priv[]\" size=\"8\" multiple>
        ";
            // line 74
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["columns"]) || array_key_exists("columns", $context) ? $context["columns"] : (function () { throw new RuntimeError('Variable "columns" does not exist.', 74, $this->source); })()));
            foreach ($context['_seq'] as $context["curr_col"] => $context["curr_col_privs"]) {
                // line 75
                yield "          <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["curr_col"], "html", null, true);
                yield "\"";
                yield ((((CoreExtension::getAttribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 75, $this->source); })()), "Update_priv", [], "array", false, false, false, 75) == "Y") || CoreExtension::getAttribute($this->env, $this->source, $context["curr_col_privs"], "Update", [], "array", false, false, false, 75))) ? (" selected") : (""));
                yield ">
            ";
                // line 76
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["curr_col"], "html", null, true);
                yield "
          </option>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['curr_col'], $context['curr_col_privs'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 79
            yield "      </select>

      <div>
        <button class=\"btn btn-link p-0\" id=\"update_priv_all\" type=\"button\" data-select-target=\"#select_update_priv\">
          ";
            // line 83
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Select all"), "html", null, true);
            yield "
        </button>
      </div>

      <em>";
            // line 87
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Or"), "html", null, true);
            yield "</em>
      <label for=\"checkbox_Update_priv_none\">
        <input type=\"checkbox\" name=\"Update_priv_none\" id=\"checkbox_Update_priv_none\" title=\"";
            // line 90
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_pgettext("None privileges", "None"), "html", null, true);
            yield "\">
        ";
            // line 91
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_pgettext("None privileges", "None"), "html", null, true);
            yield "
      </label>
    </div>

    <div class=\"item\" id=\"div_item_references\">
      <label for=\"select_references_priv\">
        <code><dfn title=\"";
            // line 97
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Has no effect in this MySQL version."), "html", null, true);
            yield "\">REFERENCES</dfn></code>
      </label>

      <select class=\"resize-vertical\" id=\"select_references_priv\" name=\"References_priv[]\" size=\"8\" multiple>
        ";
            // line 101
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["columns"]) || array_key_exists("columns", $context) ? $context["columns"] : (function () { throw new RuntimeError('Variable "columns" does not exist.', 101, $this->source); })()));
            foreach ($context['_seq'] as $context["curr_col"] => $context["curr_col_privs"]) {
                // line 102
                yield "          <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["curr_col"], "html", null, true);
                yield "\"";
                yield ((((CoreExtension::getAttribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 102, $this->source); })()), "References_priv", [], "array", false, false, false, 102) == "Y") || CoreExtension::getAttribute($this->env, $this->source, $context["curr_col_privs"], "References", [], "array", false, false, false, 102))) ? (" selected") : (""));
                yield ">
            ";
                // line 103
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["curr_col"], "html", null, true);
                yield "
          </option>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['curr_col'], $context['curr_col_privs'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 106
            yield "      </select>

      <div>
        <button class=\"btn btn-link p-0\" id=\"references_priv_all\" type=\"button\" data-select-target=\"#select_references_priv\">
          ";
            // line 110
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Select all"), "html", null, true);
            yield "
        </button>
      </div>

      <em>";
            // line 114
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Or"), "html", null, true);
            yield "</em>
      <label for=\"checkbox_References_priv_none\">
        <input type=\"checkbox\" name=\"References_priv_none\" id=\"checkbox_References_priv_none\" title=\"";
            // line 117
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_pgettext("None privileges", "None"), "html", null, true);
            yield "\">
        ";
            // line 118
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_pgettext("None privileges", "None"), "html", null, true);
            yield "
      </label>
    </div>

    <div class=\"item\">
      <div class=\"item\">
        <input type=\"checkbox\" name=\"Delete_priv\" id=\"checkbox_Delete_priv\" value=\"Y\" title=\"";
            // line 125
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Allows deleting data."), "html", null, true);
            yield "\"";
            yield ((((((CoreExtension::getAttribute($this->env, $this->source, ($context["row"] ?? null), "Delete_priv", [], "array", true, true, false, 125) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 125, $this->source); })()), "Delete_priv", [], "array", false, false, false, 125)))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 125, $this->source); })()), "Delete_priv", [], "array", false, false, false, 125)) : (null)) == "Y")) ? (" checked") : (""));
            yield ">
        <label for=\"checkbox_Delete_priv\">
          <code>
            <dfn title=\"";
            // line 128
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Allows deleting data."), "html", null, true);
            yield "\">
              DELETE
            </dfn>
          </code>
        </label>
      </div>

      <div class=\"item\">
        <input type=\"checkbox\" name=\"Create_priv\" id=\"checkbox_Create_priv\" value=\"Y\" title=\"";
            // line 137
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Allows creating new tables."), "html", null, true);
            yield "\"";
            yield ((((((CoreExtension::getAttribute($this->env, $this->source, ($context["row"] ?? null), "Create_priv", [], "array", true, true, false, 137) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 137, $this->source); })()), "Create_priv", [], "array", false, false, false, 137)))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 137, $this->source); })()), "Create_priv", [], "array", false, false, false, 137)) : (null)) == "Y")) ? (" checked") : (""));
            yield ">
        <label for=\"checkbox_Create_priv\">
          <code>
            <dfn title=\"";
            // line 140
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Allows creating new tables."), "html", null, true);
            yield "\">
              CREATE
            </dfn>
          </code>
        </label>
      </div>

      <div class=\"item\">
        <input type=\"checkbox\" name=\"Drop_priv\" id=\"checkbox_Drop_priv\" value=\"Y\" title=\"";
            // line 149
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Allows dropping tables."), "html", null, true);
            yield "\"";
            yield ((((((CoreExtension::getAttribute($this->env, $this->source, ($context["row"] ?? null), "Drop_priv", [], "array", true, true, false, 149) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 149, $this->source); })()), "Drop_priv", [], "array", false, false, false, 149)))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 149, $this->source); })()), "Drop_priv", [], "array", false, false, false, 149)) : (null)) == "Y")) ? (" checked") : (""));
            yield ">
        <label for=\"checkbox_Drop_priv\">
          <code>
            <dfn title=\"";
            // line 152
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Allows dropping tables."), "html", null, true);
            yield "\">
              DROP
            </dfn>
          </code>
        </label>
      </div>

      <div class=\"item\">
        <input type=\"checkbox\" name=\"Grant_priv\" id=\"checkbox_Grant_priv\" value=\"Y\" title=\"";
            // line 161
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Allows user to give to other users or remove from other users the privileges that user possess yourself."), "html", null, true);
            yield "\"";
            // line 162
            yield ((((((CoreExtension::getAttribute($this->env, $this->source, ($context["row"] ?? null), "Grant_priv", [], "array", true, true, false, 162) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 162, $this->source); })()), "Grant_priv", [], "array", false, false, false, 162)))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 162, $this->source); })()), "Grant_priv", [], "array", false, false, false, 162)) : (null)) == "Y")) ? (" checked") : (""));
            yield ">
        <label for=\"checkbox_Grant_priv\">
          <code>
            <dfn title=\"";
            // line 165
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Allows user to give to other users or remove from other users the privileges that user possess yourself."), "html", null, true);
            yield "\">
              GRANT
            </dfn>
          </code>
        </label>
      </div>

      <div class=\"item\">
        <input type=\"checkbox\" name=\"Index_priv\" id=\"checkbox_Index_priv\" value=\"Y\" title=\"";
            // line 174
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Allows creating and dropping indexes."), "html", null, true);
            yield "\"";
            yield ((((((CoreExtension::getAttribute($this->env, $this->source, ($context["row"] ?? null), "Index_priv", [], "array", true, true, false, 174) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 174, $this->source); })()), "Index_priv", [], "array", false, false, false, 174)))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 174, $this->source); })()), "Index_priv", [], "array", false, false, false, 174)) : (null)) == "Y")) ? (" checked") : (""));
            yield ">
        <label for=\"checkbox_Index_priv\">
          <code>
            <dfn title=\"";
            // line 177
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Allows creating and dropping indexes."), "html", null, true);
            yield "\">
              INDEX
            </dfn>
          </code>
        </label>
      </div>

      <div class=\"item\">
        <input type=\"checkbox\" name=\"Alter_priv\" id=\"checkbox_Alter_priv\" value=\"Y\" title=\"";
            // line 186
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Allows altering the structure of existing tables."), "html", null, true);
            yield "\"";
            yield ((((((CoreExtension::getAttribute($this->env, $this->source, ($context["row"] ?? null), "Alter_priv", [], "array", true, true, false, 186) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 186, $this->source); })()), "Alter_priv", [], "array", false, false, false, 186)))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 186, $this->source); })()), "Alter_priv", [], "array", false, false, false, 186)) : (null)) == "Y")) ? (" checked") : (""));
            yield ">
        <label for=\"checkbox_Alter_priv\">
          <code>
            <dfn title=\"";
            // line 189
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Allows altering the structure of existing tables."), "html", null, true);
            yield "\">
              ALTER
            </dfn>
          </code>
        </label>
      </div>

      <div class=\"item\">
        <input type=\"checkbox\" name=\"Create_view_priv\" id=\"checkbox_Create_view_priv\" value=\"Y\" title=\"";
            // line 198
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Allows creating new views."), "html", null, true);
            yield "\"";
            yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 198, $this->source); })()), "Create View_priv", [], "array", false, false, false, 198) == "Y")) ? (" checked") : (""));
            yield ">
        <label for=\"checkbox_Create_view_priv\">
          <code>
            <dfn title=\"";
            // line 201
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Allows creating new views."), "html", null, true);
            yield "\">
              CREATE VIEW
            </dfn>
          </code>
        </label>
      </div>

      <div class=\"item\">
        <input type=\"checkbox\" name=\"Show_view_priv\" id=\"checkbox_Show_view_priv\" value=\"Y\" title=\"";
            // line 210
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Allows performing SHOW CREATE VIEW queries."), "html", null, true);
            yield "\"";
            yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 210, $this->source); })()), "Show view_priv", [], "array", false, false, false, 210) == "Y")) ? (" checked") : (""));
            yield ">
        <label for=\"checkbox_Show_view_priv\">
          <code>
            <dfn title=\"";
            // line 213
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Allows performing SHOW CREATE VIEW queries."), "html", null, true);
            yield "\">
              SHOW VIEW
            </dfn>
          </code>
        </label>
      </div>

      <div class=\"item\">
        <input type=\"checkbox\" name=\"Trigger_priv\" id=\"checkbox_Trigger_priv\" value=\"Y\" title=\"";
            // line 222
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Allows creating and dropping triggers."), "html", null, true);
            yield "\"";
            yield ((((((CoreExtension::getAttribute($this->env, $this->source, ($context["row"] ?? null), "Trigger_priv", [], "array", true, true, false, 222) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 222, $this->source); })()), "Trigger_priv", [], "array", false, false, false, 222)))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 222, $this->source); })()), "Trigger_priv", [], "array", false, false, false, 222)) : (null)) == "Y")) ? (" checked") : (""));
            yield ">
        <label for=\"checkbox_Trigger_priv\">
          <code>
            <dfn title=\"";
            // line 225
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Allows creating and dropping triggers."), "html", null, true);
            yield "\">
              TRIGGER
            </dfn>
          </code>
        </label>
      </div>

      ";
            // line 232
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["row"] ?? null), "Delete versioning rows_priv", [], "array", true, true, false, 232)) {
                // line 233
                yield "        <div class=\"item\">
          <input type=\"checkbox\" name=\"Delete_history_priv\" id=\"checkbox_Delete_history_priv\" value=\"Y\" title=\"";
                // line 235
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Allows deleting historical rows."), "html", null, true);
                yield "\"";
                // line 236
                yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 236, $this->source); })()), "Delete versioning rows_priv", [], "array", false, false, false, 236) == "Y")) ? (" checked") : (""));
                yield ">
          <label for=\"checkbox_Delete_history_priv\">
            <code>
              <dfn title=\"";
                // line 239
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Allows deleting historical rows."), "html", null, true);
                yield "\">
                DELETE HISTORY
              </dfn>
            </code>
          </label>
        </div>
      ";
            }
            // line 246
            yield "    </div>
    </div>
  </div>

";
        } else {
            // line 251
            yield "
";
            // line 252
            $context["grant_count"] = 0;
            // line 253
            yield "<div class=\"card mb-3\">
  <div class=\"card-header js-submenu-label\" data-submenu-label=\"";
            // line 255
            if ((($tmp = (isset($context["is_global"]) || array_key_exists("is_global", $context) ? $context["is_global"] : (function () { throw new RuntimeError('Variable "is_global" does not exist.', 255, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 256
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Global"), "html", null, true);
            } elseif ((($tmp =             // line 257
(isset($context["is_database"]) || array_key_exists("is_database", $context) ? $context["is_database"] : (function () { throw new RuntimeError('Variable "is_database" does not exist.', 257, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 258
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Database"), "html", null, true);
            } else {
                // line 260
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Table"), "html", null, true);
            }
            // line 261
            yield "\">
    ";
            // line 262
            if ((($tmp = (isset($context["is_global"]) || array_key_exists("is_global", $context) ? $context["is_global"] : (function () { throw new RuntimeError('Variable "is_global" does not exist.', 262, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 263
                yield "      ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Global privileges"), "html", null, true);
                yield "
    ";
            } elseif ((($tmp =             // line 264
(isset($context["is_database"]) || array_key_exists("is_database", $context) ? $context["is_database"] : (function () { throw new RuntimeError('Variable "is_database" does not exist.', 264, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 265
                yield "      ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Database-specific privileges"), "html", null, true);
                yield "
    ";
            } else {
                // line 267
                yield "      ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Table-specific privileges"), "html", null, true);
                yield "
    ";
            }
            // line 269
            yield "    <input type=\"checkbox\" id=\"addUsersForm_checkall\" class=\"checkall_box\" title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Check all"), "html", null, true);
            yield "\">
    <label for=\"addUsersForm_checkall\">";
            // line 270
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Check all"), "html", null, true);
            yield "</label>
  </div>
  <div class=\"card-body row g-3\">
  <p class=\"col-12\">
    <small><em>";
            // line 274
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Note: MySQL privilege names are expressed in English."), "html", null, true);
            yield "</em></small>
  </p>
    <div class=\"col\">
  <div class=\"card\">
    <div class=\"card-header\">
      <input type=\"checkbox\" class=\"sub_checkall_box\" id=\"checkall_Data_priv\" title=\"";
            // line 279
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Check all"), "html", null, true);
            yield "\">
      <label for=\"checkall_Data_priv\">";
            // line 280
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Data"), "html", null, true);
            yield "</label>
    </div>

    <div class=\"card-body\">
    <div class=\"item\">
      ";
            // line 285
            $context["grant_count"] = ((isset($context["grant_count"]) || array_key_exists("grant_count", $context) ? $context["grant_count"] : (function () { throw new RuntimeError('Variable "grant_count" does not exist.', 285, $this->source); })()) + 1);
            // line 286
            yield "      <input type=\"checkbox\" class=\"checkall\" name=\"Select_priv\" id=\"checkbox_Select_priv\" value=\"Y\" title=\"";
            // line 287
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Allows reading data."), "html", null, true);
            yield "\"";
            yield ((((((CoreExtension::getAttribute($this->env, $this->source, ($context["row"] ?? null), "Select_priv", [], "array", true, true, false, 287) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 287, $this->source); })()), "Select_priv", [], "array", false, false, false, 287)))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 287, $this->source); })()), "Select_priv", [], "array", false, false, false, 287)) : (null)) == "Y")) ? (" checked") : (""));
            yield ">
      <label for=\"checkbox_Select_priv\">
        <code>
          <dfn title=\"";
            // line 290
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Allows reading data."), "html", null, true);
            yield "\">
            SELECT
          </dfn>
        </code>
      </label>
    </div>

    <div class=\"item\">
      ";
            // line 298
            $context["grant_count"] = ((isset($context["grant_count"]) || array_key_exists("grant_count", $context) ? $context["grant_count"] : (function () { throw new RuntimeError('Variable "grant_count" does not exist.', 298, $this->source); })()) + 1);
            // line 299
            yield "      <input type=\"checkbox\" class=\"checkall\" name=\"Insert_priv\" id=\"checkbox_Insert_priv\" value=\"Y\" title=\"";
            // line 300
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Allows inserting and replacing data."), "html", null, true);
            yield "\"";
            yield ((((((CoreExtension::getAttribute($this->env, $this->source, ($context["row"] ?? null), "Insert_priv", [], "array", true, true, false, 300) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 300, $this->source); })()), "Insert_priv", [], "array", false, false, false, 300)))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 300, $this->source); })()), "Insert_priv", [], "array", false, false, false, 300)) : (null)) == "Y")) ? (" checked") : (""));
            yield ">
      <label for=\"checkbox_Insert_priv\">
        <code>
          <dfn title=\"";
            // line 303
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Allows inserting and replacing data."), "html", null, true);
            yield "\">
            INSERT
          </dfn>
        </code>
      </label>
    </div>

    <div class=\"item\">
      ";
            // line 311
            $context["grant_count"] = ((isset($context["grant_count"]) || array_key_exists("grant_count", $context) ? $context["grant_count"] : (function () { throw new RuntimeError('Variable "grant_count" does not exist.', 311, $this->source); })()) + 1);
            // line 312
            yield "      <input type=\"checkbox\" class=\"checkall\" name=\"Update_priv\" id=\"checkbox_Update_priv\" value=\"Y\" title=\"";
            // line 313
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Allows changing data."), "html", null, true);
            yield "\"";
            yield ((((((CoreExtension::getAttribute($this->env, $this->source, ($context["row"] ?? null), "Update_priv", [], "array", true, true, false, 313) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 313, $this->source); })()), "Update_priv", [], "array", false, false, false, 313)))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 313, $this->source); })()), "Update_priv", [], "array", false, false, false, 313)) : (null)) == "Y")) ? (" checked") : (""));
            yield ">
      <label for=\"checkbox_Update_priv\">
        <code>
          <dfn title=\"";
            // line 316
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Allows changing data."), "html", null, true);
            yield "\">
            UPDATE
          </dfn>
        </code>
      </label>
    </div>

    <div class=\"item\">
      ";
            // line 324
            $context["grant_count"] = ((isset($context["grant_count"]) || array_key_exists("grant_count", $context) ? $context["grant_count"] : (function () { throw new RuntimeError('Variable "grant_count" does not exist.', 324, $this->source); })()) + 1);
            // line 325
            yield "      <input type=\"checkbox\" class=\"checkall\" name=\"Delete_priv\" id=\"checkbox_Delete_priv\" value=\"Y\" title=\"";
            // line 326
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Allows deleting data."), "html", null, true);
            yield "\"";
            yield ((((((CoreExtension::getAttribute($this->env, $this->source, ($context["row"] ?? null), "Delete_priv", [], "array", true, true, false, 326) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 326, $this->source); })()), "Delete_priv", [], "array", false, false, false, 326)))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 326, $this->source); })()), "Delete_priv", [], "array", false, false, false, 326)) : (null)) == "Y")) ? (" checked") : (""));
            yield ">
      <label for=\"checkbox_Delete_priv\">
        <code>
          <dfn title=\"";
            // line 329
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Allows deleting data."), "html", null, true);
            yield "\">
            DELETE
          </dfn>
        </code>
      </label>
    </div>

    ";
            // line 336
            if ((($tmp = (isset($context["is_global"]) || array_key_exists("is_global", $context) ? $context["is_global"] : (function () { throw new RuntimeError('Variable "is_global" does not exist.', 336, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 337
                yield "      <div class=\"item\">
        ";
                // line 338
                $context["grant_count"] = ((isset($context["grant_count"]) || array_key_exists("grant_count", $context) ? $context["grant_count"] : (function () { throw new RuntimeError('Variable "grant_count" does not exist.', 338, $this->source); })()) + 1);
                // line 339
                yield "        <input type=\"checkbox\" class=\"checkall\" name=\"File_priv\" id=\"checkbox_File_priv\" value=\"Y\" title=\"";
                // line 340
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Allows importing data from and exporting data into files."), "html", null, true);
                yield "\"";
                yield ((((((CoreExtension::getAttribute($this->env, $this->source, ($context["row"] ?? null), "File_priv", [], "array", true, true, false, 340) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 340, $this->source); })()), "File_priv", [], "array", false, false, false, 340)))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 340, $this->source); })()), "File_priv", [], "array", false, false, false, 340)) : (null)) == "Y")) ? (" checked") : (""));
                yield ">
        <label for=\"checkbox_File_priv\">
          <code>
            <dfn title=\"";
                // line 343
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Allows importing data from and exporting data into files."), "html", null, true);
                yield "\">
              FILE
            </dfn>
          </code>
        </label>
      </div>
    ";
            }
            // line 350
            yield "    </div>
  </div>
    </div>
    <div class=\"col\">
  <div class=\"card\">
    <div class=\"card-header\">
      <input type=\"checkbox\" class=\"sub_checkall_box\" id=\"checkall_Structure_priv\" title=\"";
            // line 356
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Check all"), "html", null, true);
            yield "\">
      <label for=\"checkall_Structure_priv\">";
            // line 357
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Structure"), "html", null, true);
            yield "</label>
    </div>

    <div class=\"card-body\">
    <div class=\"item\">
      ";
            // line 362
            $context["grant_count"] = ((isset($context["grant_count"]) || array_key_exists("grant_count", $context) ? $context["grant_count"] : (function () { throw new RuntimeError('Variable "grant_count" does not exist.', 362, $this->source); })()) + 1);
            // line 363
            yield "      <input type=\"checkbox\" class=\"checkall\" name=\"Create_priv\" id=\"checkbox_Create_priv\" value=\"Y\" title=\"";
            // line 364
            if ((($tmp = (isset($context["is_database"]) || array_key_exists("is_database", $context) ? $context["is_database"] : (function () { throw new RuntimeError('Variable "is_database" does not exist.', 364, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 365
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Allows creating new databases and tables."), "html", null, true);
            } else {
                // line 367
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Allows creating new tables."), "html", null, true);
            }
            // line 368
            yield "\"";
            yield ((((((CoreExtension::getAttribute($this->env, $this->source, ($context["row"] ?? null), "Create_priv", [], "array", true, true, false, 368) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 368, $this->source); })()), "Create_priv", [], "array", false, false, false, 368)))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 368, $this->source); })()), "Create_priv", [], "array", false, false, false, 368)) : (null)) == "Y")) ? (" checked") : (""));
            yield ">
      <label for=\"checkbox_Create_priv\">
        <code>
          <dfn title=\"";
            // line 372
            if ((($tmp = (isset($context["is_database"]) || array_key_exists("is_database", $context) ? $context["is_database"] : (function () { throw new RuntimeError('Variable "is_database" does not exist.', 372, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 373
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Allows creating new databases and tables."), "html", null, true);
            } else {
                // line 375
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Allows creating new tables."), "html", null, true);
            }
            // line 376
            yield "\">
            CREATE
          </dfn>
        </code>
      </label>
    </div>

    <div class=\"item\">
      ";
            // line 384
            $context["grant_count"] = ((isset($context["grant_count"]) || array_key_exists("grant_count", $context) ? $context["grant_count"] : (function () { throw new RuntimeError('Variable "grant_count" does not exist.', 384, $this->source); })()) + 1);
            // line 385
            yield "      <input type=\"checkbox\" class=\"checkall\" name=\"Alter_priv\" id=\"checkbox_Alter_priv\" value=\"Y\" title=\"";
            // line 386
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Allows altering the structure of existing tables."), "html", null, true);
            yield "\"";
            yield ((((((CoreExtension::getAttribute($this->env, $this->source, ($context["row"] ?? null), "Alter_priv", [], "array", true, true, false, 386) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 386, $this->source); })()), "Alter_priv", [], "array", false, false, false, 386)))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 386, $this->source); })()), "Alter_priv", [], "array", false, false, false, 386)) : (null)) == "Y")) ? (" checked") : (""));
            yield ">
      <label for=\"checkbox_Alter_priv\">
        <code>
          <dfn title=\"";
            // line 389
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Allows altering the structure of existing tables."), "html", null, true);
            yield "\">
            ALTER
          </dfn>
        </code>
      </label>
    </div>

    <div class=\"item\">
      ";
            // line 397
            $context["grant_count"] = ((isset($context["grant_count"]) || array_key_exists("grant_count", $context) ? $context["grant_count"] : (function () { throw new RuntimeError('Variable "grant_count" does not exist.', 397, $this->source); })()) + 1);
            // line 398
            yield "      <input type=\"checkbox\" class=\"checkall\" name=\"Index_priv\" id=\"checkbox_Index_priv\" value=\"Y\" title=\"";
            // line 399
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Allows creating and dropping indexes."), "html", null, true);
            yield "\"";
            yield ((((((CoreExtension::getAttribute($this->env, $this->source, ($context["row"] ?? null), "Index_priv", [], "array", true, true, false, 399) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 399, $this->source); })()), "Index_priv", [], "array", false, false, false, 399)))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 399, $this->source); })()), "Index_priv", [], "array", false, false, false, 399)) : (null)) == "Y")) ? (" checked") : (""));
            yield ">
      <label for=\"checkbox_Index_priv\">
        <code>
          <dfn title=\"";
            // line 402
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Allows creating and dropping indexes."), "html", null, true);
            yield "\">
            INDEX
          </dfn>
        </code>
      </label>
    </div>

    <div class=\"item\">
      ";
            // line 410
            $context["grant_count"] = ((isset($context["grant_count"]) || array_key_exists("grant_count", $context) ? $context["grant_count"] : (function () { throw new RuntimeError('Variable "grant_count" does not exist.', 410, $this->source); })()) + 1);
            // line 411
            yield "      <input type=\"checkbox\" class=\"checkall\" name=\"Drop_priv\" id=\"checkbox_Drop_priv\" value=\"Y\" title=\"";
            // line 412
            if ((($tmp = (isset($context["is_database"]) || array_key_exists("is_database", $context) ? $context["is_database"] : (function () { throw new RuntimeError('Variable "is_database" does not exist.', 412, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 413
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Allows dropping databases and tables."), "html", null, true);
            } else {
                // line 415
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Allows dropping tables."), "html", null, true);
            }
            // line 416
            yield "\"";
            yield ((((((CoreExtension::getAttribute($this->env, $this->source, ($context["row"] ?? null), "Drop_priv", [], "array", true, true, false, 416) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 416, $this->source); })()), "Drop_priv", [], "array", false, false, false, 416)))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 416, $this->source); })()), "Drop_priv", [], "array", false, false, false, 416)) : (null)) == "Y")) ? (" checked") : (""));
            yield ">
      <label for=\"checkbox_Drop_priv\">
        <code>
          <dfn title=\"";
            // line 420
            if ((($tmp = (isset($context["is_database"]) || array_key_exists("is_database", $context) ? $context["is_database"] : (function () { throw new RuntimeError('Variable "is_database" does not exist.', 420, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 421
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Allows dropping databases and tables."), "html", null, true);
            } else {
                // line 423
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Allows dropping tables."), "html", null, true);
            }
            // line 424
            yield "\">
            DROP
          </dfn>
        </code>
      </label>
    </div>

    <div class=\"item\">
      ";
            // line 432
            $context["grant_count"] = ((isset($context["grant_count"]) || array_key_exists("grant_count", $context) ? $context["grant_count"] : (function () { throw new RuntimeError('Variable "grant_count" does not exist.', 432, $this->source); })()) + 1);
            // line 433
            yield "      <input type=\"checkbox\" class=\"checkall\" name=\"Create_tmp_table_priv\" id=\"checkbox_Create_tmp_table_priv\" value=\"Y\" title=\"";
            // line 434
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Allows creating temporary tables."), "html", null, true);
            yield "\"";
            yield ((((((CoreExtension::getAttribute($this->env, $this->source, ($context["row"] ?? null), "Create_tmp_table_priv", [], "array", true, true, false, 434) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 434, $this->source); })()), "Create_tmp_table_priv", [], "array", false, false, false, 434)))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 434, $this->source); })()), "Create_tmp_table_priv", [], "array", false, false, false, 434)) : (null)) == "Y")) ? (" checked") : (""));
            yield ">
      <label for=\"checkbox_Create_tmp_table_priv\">
        <code>
          <dfn title=\"";
            // line 437
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Allows creating temporary tables."), "html", null, true);
            yield "\">
            CREATE TEMPORARY TABLES
          </dfn>
        </code>
      </label>
    </div>

    <div class=\"item\">
      ";
            // line 445
            $context["grant_count"] = ((isset($context["grant_count"]) || array_key_exists("grant_count", $context) ? $context["grant_count"] : (function () { throw new RuntimeError('Variable "grant_count" does not exist.', 445, $this->source); })()) + 1);
            // line 446
            yield "      <input type=\"checkbox\" class=\"checkall\" name=\"Show_view_priv\" id=\"checkbox_Show_view_priv\" value=\"Y\" title=\"";
            // line 447
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Allows performing SHOW CREATE VIEW queries."), "html", null, true);
            yield "\"";
            yield ((((((CoreExtension::getAttribute($this->env, $this->source, ($context["row"] ?? null), "Show_view_priv", [], "array", true, true, false, 447) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 447, $this->source); })()), "Show_view_priv", [], "array", false, false, false, 447)))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 447, $this->source); })()), "Show_view_priv", [], "array", false, false, false, 447)) : (null)) == "Y")) ? (" checked") : (""));
            yield ">
      <label for=\"checkbox_Show_view_priv\">
        <code>
          <dfn title=\"";
            // line 450
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Allows performing SHOW CREATE VIEW queries."), "html", null, true);
            yield "\">
            SHOW VIEW
          </dfn>
        </code>
      </label>
    </div>

    <div class=\"item\">
      ";
            // line 458
            $context["grant_count"] = ((isset($context["grant_count"]) || array_key_exists("grant_count", $context) ? $context["grant_count"] : (function () { throw new RuntimeError('Variable "grant_count" does not exist.', 458, $this->source); })()) + 1);
            // line 459
            yield "      <input type=\"checkbox\" class=\"checkall\" name=\"Create_routine_priv\" id=\"checkbox_Create_routine_priv\" value=\"Y\" title=\"";
            // line 460
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Allows creating stored routines."), "html", null, true);
            yield "\"";
            yield ((((((CoreExtension::getAttribute($this->env, $this->source, ($context["row"] ?? null), "Create_routine_priv", [], "array", true, true, false, 460) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 460, $this->source); })()), "Create_routine_priv", [], "array", false, false, false, 460)))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 460, $this->source); })()), "Create_routine_priv", [], "array", false, false, false, 460)) : (null)) == "Y")) ? (" checked") : (""));
            yield ">
      <label for=\"checkbox_Create_routine_priv\">
        <code>
          <dfn title=\"";
            // line 463
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Allows creating stored routines."), "html", null, true);
            yield "\">
            CREATE ROUTINE
          </dfn>
        </code>
      </label>
    </div>

    <div class=\"item\">
      ";
            // line 471
            $context["grant_count"] = ((isset($context["grant_count"]) || array_key_exists("grant_count", $context) ? $context["grant_count"] : (function () { throw new RuntimeError('Variable "grant_count" does not exist.', 471, $this->source); })()) + 1);
            // line 472
            yield "      <input type=\"checkbox\" class=\"checkall\" name=\"Alter_routine_priv\" id=\"checkbox_Alter_routine_priv\" value=\"Y\" title=\"";
            // line 473
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Allows altering and dropping stored routines."), "html", null, true);
            yield "\"";
            yield ((((((CoreExtension::getAttribute($this->env, $this->source, ($context["row"] ?? null), "Alter_routine_priv", [], "array", true, true, false, 473) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 473, $this->source); })()), "Alter_routine_priv", [], "array", false, false, false, 473)))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 473, $this->source); })()), "Alter_routine_priv", [], "array", false, false, false, 473)) : (null)) == "Y")) ? (" checked") : (""));
            yield ">
      <label for=\"checkbox_Alter_routine_priv\">
        <code>
          <dfn title=\"";
            // line 476
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Allows altering and dropping stored routines."), "html", null, true);
            yield "\">
            ALTER ROUTINE
          </dfn>
        </code>
      </label>
    </div>

    <div class=\"item\">
      ";
            // line 484
            $context["grant_count"] = ((isset($context["grant_count"]) || array_key_exists("grant_count", $context) ? $context["grant_count"] : (function () { throw new RuntimeError('Variable "grant_count" does not exist.', 484, $this->source); })()) + 1);
            // line 485
            yield "      <input type=\"checkbox\" class=\"checkall\" name=\"Execute_priv\" id=\"checkbox_Execute_priv\" value=\"Y\" title=\"";
            // line 486
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Allows executing stored routines."), "html", null, true);
            yield "\"";
            yield ((((((CoreExtension::getAttribute($this->env, $this->source, ($context["row"] ?? null), "Execute_priv", [], "array", true, true, false, 486) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 486, $this->source); })()), "Execute_priv", [], "array", false, false, false, 486)))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 486, $this->source); })()), "Execute_priv", [], "array", false, false, false, 486)) : (null)) == "Y")) ? (" checked") : (""));
            yield ">
      <label for=\"checkbox_Execute_priv\">
        <code>
          <dfn title=\"";
            // line 489
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Allows executing stored routines."), "html", null, true);
            yield "\">
            EXECUTE
          </dfn>
        </code>
      </label>
    </div>

    ";
            // line 496
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["row"] ?? null), "Create_view_priv", [], "array", true, true, false, 496)) {
                // line 497
                yield "      <div class=\"item\">
        ";
                // line 498
                $context["grant_count"] = ((isset($context["grant_count"]) || array_key_exists("grant_count", $context) ? $context["grant_count"] : (function () { throw new RuntimeError('Variable "grant_count" does not exist.', 498, $this->source); })()) + 1);
                // line 499
                yield "        <input type=\"checkbox\" class=\"checkall\" name=\"Create_view_priv\" id=\"checkbox_Create_view_priv\" value=\"Y\" title=\"";
                // line 500
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Allows creating new views."), "html", null, true);
                yield "\"";
                yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 500, $this->source); })()), "Create_view_priv", [], "array", false, false, false, 500) == "Y")) ? (" checked") : (""));
                yield ">
        <label for=\"checkbox_Create_view_priv\">
          <code>
            <dfn title=\"";
                // line 503
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Allows creating new views."), "html", null, true);
                yield "\">
              CREATE VIEW
            </dfn>
          </code>
        </label>
      </div>
    ";
            }
            // line 510
            yield "
    ";
            // line 511
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["row"] ?? null), "Create View_priv", [], "array", true, true, false, 511)) {
                // line 512
                yield "      <div class=\"item\">
        ";
                // line 513
                $context["grant_count"] = ((isset($context["grant_count"]) || array_key_exists("grant_count", $context) ? $context["grant_count"] : (function () { throw new RuntimeError('Variable "grant_count" does not exist.', 513, $this->source); })()) + 1);
                // line 514
                yield "        <input type=\"checkbox\" class=\"checkall\" name=\"Create View_priv\" id=\"checkbox_Create View_priv\" value=\"Y\" title=\"";
                // line 515
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Allows creating new views."), "html", null, true);
                yield "\"";
                yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 515, $this->source); })()), "Create View_priv", [], "array", false, false, false, 515) == "Y")) ? (" checked") : (""));
                yield ">
        <label for=\"checkbox_Create View_priv\">
          <code>
            <dfn title=\"";
                // line 518
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Allows creating new views."), "html", null, true);
                yield "\">
              CREATE VIEW
            </dfn>
          </code>
        </label>
      </div>
    ";
            }
            // line 525
            yield "
    ";
            // line 526
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["row"] ?? null), "Event_priv", [], "array", true, true, false, 526)) {
                // line 527
                yield "      <div class=\"item\">
        ";
                // line 528
                $context["grant_count"] = ((isset($context["grant_count"]) || array_key_exists("grant_count", $context) ? $context["grant_count"] : (function () { throw new RuntimeError('Variable "grant_count" does not exist.', 528, $this->source); })()) + 1);
                // line 529
                yield "        <input type=\"checkbox\" class=\"checkall\" name=\"Event_priv\" id=\"checkbox_Event_priv\" value=\"Y\" title=\"";
                // line 530
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Allows to set up events for the event scheduler."), "html", null, true);
                yield "\"";
                yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 530, $this->source); })()), "Event_priv", [], "array", false, false, false, 530) == "Y")) ? (" checked") : (""));
                yield ">
        <label for=\"checkbox_Event_priv\">
          <code>
            <dfn title=\"";
                // line 533
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Allows to set up events for the event scheduler."), "html", null, true);
                yield "\">
              EVENT
            </dfn>
          </code>
        </label>
      </div>

      <div class=\"item\">
        ";
                // line 541
                $context["grant_count"] = ((isset($context["grant_count"]) || array_key_exists("grant_count", $context) ? $context["grant_count"] : (function () { throw new RuntimeError('Variable "grant_count" does not exist.', 541, $this->source); })()) + 1);
                // line 542
                yield "        <input type=\"checkbox\" class=\"checkall\" name=\"Trigger_priv\" id=\"checkbox_Trigger_priv\" value=\"Y\" title=\"";
                // line 543
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Allows creating and dropping triggers."), "html", null, true);
                yield "\"";
                yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 543, $this->source); })()), "Trigger_priv", [], "array", false, false, false, 543) == "Y")) ? (" checked") : (""));
                yield ">
        <label for=\"checkbox_Trigger_priv\">
          <code>
            <dfn title=\"";
                // line 546
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Allows creating and dropping triggers."), "html", null, true);
                yield "\">
              TRIGGER
            </dfn>
          </code>
        </label>
      </div>
    ";
            }
            // line 553
            yield "    </div>
  </div>
    </div>
    <div class=\"col\">

  <div class=\"card\">
    <div class=\"card-header\">
      <input type=\"checkbox\" class=\"sub_checkall_box\" id=\"checkall_Administration_priv\" title=\"";
            // line 560
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Check all"), "html", null, true);
            yield "\">
      <label for=\"checkall_Administration_priv\">";
            // line 561
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Administration"), "html", null, true);
            yield "</label>
    </div>

    <div class=\"card-body\">

    ";
            // line 566
            if ((($tmp = (isset($context["is_global"]) || array_key_exists("is_global", $context) ? $context["is_global"] : (function () { throw new RuntimeError('Variable "is_global" does not exist.', 566, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 567
                yield "      <div class=\"item\">
        ";
                // line 568
                $context["grant_count"] = ((isset($context["grant_count"]) || array_key_exists("grant_count", $context) ? $context["grant_count"] : (function () { throw new RuntimeError('Variable "grant_count" does not exist.', 568, $this->source); })()) + 1);
                // line 569
                yield "        <input type=\"checkbox\" class=\"checkall\" name=\"Grant_priv\" id=\"checkbox_Grant_priv\" value=\"Y\" title=\"";
                // line 570
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Allows adding users and privileges without reloading the privilege tables."), "html", null, true);
                yield "\"";
                yield ((((((CoreExtension::getAttribute($this->env, $this->source, ($context["row"] ?? null), "Grant_priv", [], "array", true, true, false, 570) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 570, $this->source); })()), "Grant_priv", [], "array", false, false, false, 570)))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 570, $this->source); })()), "Grant_priv", [], "array", false, false, false, 570)) : (null)) == "Y")) ? (" checked") : (""));
                yield ">
        <label for=\"checkbox_Grant_priv\">
          <code>
            <dfn title=\"";
                // line 573
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Allows adding users and privileges without reloading the privilege tables."), "html", null, true);
                yield "\">
              GRANT
            </dfn>
          </code>
        </label>
      </div>

      <div class=\"item\">
        ";
                // line 581
                $context["grant_count"] = ((isset($context["grant_count"]) || array_key_exists("grant_count", $context) ? $context["grant_count"] : (function () { throw new RuntimeError('Variable "grant_count" does not exist.', 581, $this->source); })()) + 1);
                // line 582
                yield "        <input type=\"checkbox\" class=\"checkall\" name=\"Super_priv\" id=\"checkbox_Super_priv\" value=\"Y\" title=\"";
                // line 583
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Allows connecting, even if maximum number of connections is reached; required for most administrative operations like setting global variables or killing threads of other users."), "html", null, true);
                yield "\"";
                // line 584
                yield ((((((CoreExtension::getAttribute($this->env, $this->source, ($context["row"] ?? null), "Super_priv", [], "array", true, true, false, 584) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 584, $this->source); })()), "Super_priv", [], "array", false, false, false, 584)))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 584, $this->source); })()), "Super_priv", [], "array", false, false, false, 584)) : (null)) == "Y")) ? (" checked") : (""));
                yield ">
        <label for=\"checkbox_Super_priv\">
          <code>
            <dfn title=\"";
                // line 587
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Allows connecting, even if maximum number of connections is reached; required for most administrative operations like setting global variables or killing threads of other users."), "html", null, true);
                yield "\">
              SUPER
            </dfn>
          </code>
        </label>
      </div>

      <div class=\"item\">
        ";
                // line 595
                $context["grant_count"] = ((isset($context["grant_count"]) || array_key_exists("grant_count", $context) ? $context["grant_count"] : (function () { throw new RuntimeError('Variable "grant_count" does not exist.', 595, $this->source); })()) + 1);
                // line 596
                yield "        <input type=\"checkbox\" class=\"checkall\" name=\"Process_priv\" id=\"checkbox_Process_priv\" value=\"Y\" title=\"";
                // line 597
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Allows viewing processes of all users."), "html", null, true);
                yield "\"";
                yield ((((((CoreExtension::getAttribute($this->env, $this->source, ($context["row"] ?? null), "Process_priv", [], "array", true, true, false, 597) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 597, $this->source); })()), "Process_priv", [], "array", false, false, false, 597)))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 597, $this->source); })()), "Process_priv", [], "array", false, false, false, 597)) : (null)) == "Y")) ? (" checked") : (""));
                yield ">
        <label for=\"checkbox_Process_priv\">
          <code>
            <dfn title=\"";
                // line 600
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Allows viewing processes of all users."), "html", null, true);
                yield "\">
              PROCESS
            </dfn>
          </code>
        </label>
      </div>

      <div class=\"item\">
        ";
                // line 608
                $context["grant_count"] = ((isset($context["grant_count"]) || array_key_exists("grant_count", $context) ? $context["grant_count"] : (function () { throw new RuntimeError('Variable "grant_count" does not exist.', 608, $this->source); })()) + 1);
                // line 609
                yield "        <input type=\"checkbox\" class=\"checkall\" name=\"Reload_priv\" id=\"checkbox_Reload_priv\" value=\"Y\" title=\"";
                // line 610
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Allows reloading server settings and flushing the server's caches."), "html", null, true);
                yield "\"";
                yield ((((((CoreExtension::getAttribute($this->env, $this->source, ($context["row"] ?? null), "Reload_priv", [], "array", true, true, false, 610) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 610, $this->source); })()), "Reload_priv", [], "array", false, false, false, 610)))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 610, $this->source); })()), "Reload_priv", [], "array", false, false, false, 610)) : (null)) == "Y")) ? (" checked") : (""));
                yield ">
        <label for=\"checkbox_Reload_priv\">
          <code>
            <dfn title=\"";
                // line 613
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Allows reloading server settings and flushing the server's caches."), "html", null, true);
                yield "\">
              RELOAD
            </dfn>
          </code>
        </label>
      </div>

      <div class=\"item\">
        ";
                // line 621
                $context["grant_count"] = ((isset($context["grant_count"]) || array_key_exists("grant_count", $context) ? $context["grant_count"] : (function () { throw new RuntimeError('Variable "grant_count" does not exist.', 621, $this->source); })()) + 1);
                // line 622
                yield "        <input type=\"checkbox\" class=\"checkall\" name=\"Shutdown_priv\" id=\"checkbox_Shutdown_priv\" value=\"Y\" title=\"";
                // line 623
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Allows shutting down the server."), "html", null, true);
                yield "\"";
                yield ((((((CoreExtension::getAttribute($this->env, $this->source, ($context["row"] ?? null), "Shutdown_priv", [], "array", true, true, false, 623) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 623, $this->source); })()), "Shutdown_priv", [], "array", false, false, false, 623)))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 623, $this->source); })()), "Shutdown_priv", [], "array", false, false, false, 623)) : (null)) == "Y")) ? (" checked") : (""));
                yield ">
        <label for=\"checkbox_Shutdown_priv\">
          <code>
            <dfn title=\"";
                // line 626
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Allows shutting down the server."), "html", null, true);
                yield "\">
              SHUTDOWN
            </dfn>
          </code>
        </label>
      </div>

      <div class=\"item\">
        ";
                // line 634
                $context["grant_count"] = ((isset($context["grant_count"]) || array_key_exists("grant_count", $context) ? $context["grant_count"] : (function () { throw new RuntimeError('Variable "grant_count" does not exist.', 634, $this->source); })()) + 1);
                // line 635
                yield "        <input type=\"checkbox\" class=\"checkall\" name=\"Show_db_priv\" id=\"checkbox_Show_db_priv\" value=\"Y\" title=\"";
                // line 636
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Gives access to the complete list of databases."), "html", null, true);
                yield "\"";
                yield ((((((CoreExtension::getAttribute($this->env, $this->source, ($context["row"] ?? null), "Show_db_priv", [], "array", true, true, false, 636) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 636, $this->source); })()), "Show_db_priv", [], "array", false, false, false, 636)))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 636, $this->source); })()), "Show_db_priv", [], "array", false, false, false, 636)) : (null)) == "Y")) ? (" checked") : (""));
                yield ">
        <label for=\"checkbox_Show_db_priv\">
          <code>
            <dfn title=\"";
                // line 639
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Gives access to the complete list of databases."), "html", null, true);
                yield "\">
              SHOW DATABASES
            </dfn>
          </code>
        </label>
      </div>
    ";
            } else {
                // line 646
                yield "      <div class=\"item\">
        ";
                // line 647
                $context["grant_count"] = ((isset($context["grant_count"]) || array_key_exists("grant_count", $context) ? $context["grant_count"] : (function () { throw new RuntimeError('Variable "grant_count" does not exist.', 647, $this->source); })()) + 1);
                // line 648
                yield "        <input type=\"checkbox\" class=\"checkall\" name=\"Grant_priv\" id=\"checkbox_Grant_priv\" value=\"Y\" title=\"";
                // line 649
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Allows user to give to other users or remove from other users the privileges that user possess yourself."), "html", null, true);
                yield "\"";
                // line 650
                yield ((((((CoreExtension::getAttribute($this->env, $this->source, ($context["row"] ?? null), "Grant_priv", [], "array", true, true, false, 650) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 650, $this->source); })()), "Grant_priv", [], "array", false, false, false, 650)))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 650, $this->source); })()), "Grant_priv", [], "array", false, false, false, 650)) : (null)) == "Y")) ? (" checked") : (""));
                yield ">
        <label for=\"checkbox_Grant_priv\">
          <code>
            <dfn title=\"";
                // line 653
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Allows user to give to other users or remove from other users the privileges that user possess yourself."), "html", null, true);
                yield "\">
              GRANT
            </dfn>
          </code>
        </label>
      </div>
    ";
            }
            // line 660
            yield "
    <div class=\"item\">
      ";
            // line 662
            $context["grant_count"] = ((isset($context["grant_count"]) || array_key_exists("grant_count", $context) ? $context["grant_count"] : (function () { throw new RuntimeError('Variable "grant_count" does not exist.', 662, $this->source); })()) + 1);
            // line 663
            yield "      <input type=\"checkbox\" class=\"checkall\" name=\"Lock_tables_priv\" id=\"checkbox_Lock_tables_priv\" value=\"Y\" title=\"";
            // line 664
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Allows locking tables for the current thread."), "html", null, true);
            yield "\"";
            yield ((((((CoreExtension::getAttribute($this->env, $this->source, ($context["row"] ?? null), "Lock_tables_priv", [], "array", true, true, false, 664) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 664, $this->source); })()), "Lock_tables_priv", [], "array", false, false, false, 664)))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 664, $this->source); })()), "Lock_tables_priv", [], "array", false, false, false, 664)) : (null)) == "Y")) ? (" checked") : (""));
            yield ">
      <label for=\"checkbox_Lock_tables_priv\">
        <code>
          <dfn title=\"";
            // line 667
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Allows locking tables for the current thread."), "html", null, true);
            yield "\">
            LOCK TABLES
          </dfn>
        </code>
      </label>
    </div>

    <div class=\"item\">
      ";
            // line 675
            $context["grant_count"] = ((isset($context["grant_count"]) || array_key_exists("grant_count", $context) ? $context["grant_count"] : (function () { throw new RuntimeError('Variable "grant_count" does not exist.', 675, $this->source); })()) + 1);
            // line 676
            yield "      <input type=\"checkbox\" class=\"checkall\" name=\"References_priv\" id=\"checkbox_References_priv\" value=\"Y\" title=\"";
            // line 677
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Has no effect in this MySQL version."), "html", null, true);
            yield "\"";
            yield ((((((CoreExtension::getAttribute($this->env, $this->source, ($context["row"] ?? null), "References_priv", [], "array", true, true, false, 677) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 677, $this->source); })()), "References_priv", [], "array", false, false, false, 677)))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 677, $this->source); })()), "References_priv", [], "array", false, false, false, 677)) : (null)) == "Y")) ? (" checked") : (""));
            yield ">
      <label for=\"checkbox_References_priv\">
        <code>
          <dfn title=\"";
            // line 680
            yield (((($tmp = (isset($context["supports_references_privilege"]) || array_key_exists("supports_references_privilege", $context) ? $context["supports_references_privilege"] : (function () { throw new RuntimeError('Variable "supports_references_privilege" does not exist.', 680, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Allows creating foreign key relations."), "html", null, true)) : ((((($tmp = (isset($context["is_mariadb"]) || array_key_exists("is_mariadb", $context) ? $context["is_mariadb"] : (function () { throw new RuntimeError('Variable "is_mariadb" does not exist.', 680, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Not used on MariaDB."), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Not used for this MySQL version."), "html", null, true)))));
            yield "\">
            REFERENCES
          </dfn>
        </code>
      </label>
    </div>

    ";
            // line 687
            if ((($tmp = (isset($context["is_global"]) || array_key_exists("is_global", $context) ? $context["is_global"] : (function () { throw new RuntimeError('Variable "is_global" does not exist.', 687, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 688
                yield "      <div class=\"item\">
        ";
                // line 689
                $context["grant_count"] = ((isset($context["grant_count"]) || array_key_exists("grant_count", $context) ? $context["grant_count"] : (function () { throw new RuntimeError('Variable "grant_count" does not exist.', 689, $this->source); })()) + 1);
                // line 690
                yield "        <input type=\"checkbox\" class=\"checkall\" name=\"Repl_client_priv\" id=\"checkbox_Repl_client_priv\" value=\"Y\" title=\"";
                // line 691
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Allows the user to ask where the replicas / primaries are."), "html", null, true);
                yield "\"";
                yield ((((((CoreExtension::getAttribute($this->env, $this->source, ($context["row"] ?? null), "Repl_client_priv", [], "array", true, true, false, 691) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 691, $this->source); })()), "Repl_client_priv", [], "array", false, false, false, 691)))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 691, $this->source); })()), "Repl_client_priv", [], "array", false, false, false, 691)) : (null)) == "Y")) ? (" checked") : (""));
                yield ">
        <label for=\"checkbox_Repl_client_priv\">
          <code>
            <dfn title=\"";
                // line 694
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Allows the user to ask where the replicas / primaries are."), "html", null, true);
                yield "\">
              REPLICATION CLIENT
            </dfn>
          </code>
        </label>
      </div>

      <div class=\"item\">
        ";
                // line 702
                $context["grant_count"] = ((isset($context["grant_count"]) || array_key_exists("grant_count", $context) ? $context["grant_count"] : (function () { throw new RuntimeError('Variable "grant_count" does not exist.', 702, $this->source); })()) + 1);
                // line 703
                yield "        <input type=\"checkbox\" class=\"checkall\" name=\"Repl_slave_priv\" id=\"checkbox_Repl_slave_priv\" value=\"Y\" title=\"";
                // line 704
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Needed for the replication replicas."), "html", null, true);
                yield "\"";
                yield ((((((CoreExtension::getAttribute($this->env, $this->source, ($context["row"] ?? null), "Repl_slave_priv", [], "array", true, true, false, 704) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 704, $this->source); })()), "Repl_slave_priv", [], "array", false, false, false, 704)))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 704, $this->source); })()), "Repl_slave_priv", [], "array", false, false, false, 704)) : (null)) == "Y")) ? (" checked") : (""));
                yield ">
        <label for=\"checkbox_Repl_slave_priv\">
          <code>
            <dfn title=\"";
                // line 707
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Needed for the replication replicas."), "html", null, true);
                yield "\">
              REPLICATION SLAVE
            </dfn>
          </code>
        </label>
      </div>

      <div class=\"item\">
        ";
                // line 715
                $context["grant_count"] = ((isset($context["grant_count"]) || array_key_exists("grant_count", $context) ? $context["grant_count"] : (function () { throw new RuntimeError('Variable "grant_count" does not exist.', 715, $this->source); })()) + 1);
                // line 716
                yield "        <input type=\"checkbox\" class=\"checkall\" name=\"Create_user_priv\" id=\"checkbox_Create_user_priv\" value=\"Y\" title=\"";
                // line 717
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Allows creating, dropping and renaming user accounts."), "html", null, true);
                yield "\"";
                yield ((((((CoreExtension::getAttribute($this->env, $this->source, ($context["row"] ?? null), "Create_user_priv", [], "array", true, true, false, 717) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 717, $this->source); })()), "Create_user_priv", [], "array", false, false, false, 717)))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 717, $this->source); })()), "Create_user_priv", [], "array", false, false, false, 717)) : (null)) == "Y")) ? (" checked") : (""));
                yield ">
        <label for=\"checkbox_Create_user_priv\">
          <code>
            <dfn title=\"";
                // line 720
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Allows creating, dropping and renaming user accounts."), "html", null, true);
                yield "\">
              CREATE USER
            </dfn>
          </code>
        </label>
      </div>
    ";
            }
            // line 727
            yield "    </div>
  </div>
    </div>

  ";
            // line 731
            if ((($tmp = (isset($context["is_global"]) || array_key_exists("is_global", $context) ? $context["is_global"] : (function () { throw new RuntimeError('Variable "is_global" does not exist.', 731, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 732
                yield "    <div class=\"col\">
    <div class=\"card\">
      <div class=\"card-header\">";
                // line 734
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Resource limits"), "html", null, true);
                yield "</div>
      <div class=\"card-body\">
      <p>
        <small><em>";
                // line 737
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Note: Setting these options to 0 (zero) removes the limit."), "html", null, true);
                yield "</em></small>
      </p>

      <div class=\"item\">
        <label for=\"text_max_questions\">
          <code>
            <dfn title=\"";
                // line 743
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Limits the number of queries the user may send to the server per hour."), "html", null, true);
                yield "\">
              MAX QUERIES PER HOUR
            </dfn>
          </code>
        </label>
        <input type=\"number\" name=\"max_questions\" id=\"text_max_questions\" value=\"";
                // line 749
                yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["row"] ?? null), "max_questions", [], "any", true, true, false, 749) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 749, $this->source); })()), "max_questions", [], "any", false, false, false, 749)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 749, $this->source); })()), "max_questions", [], "any", false, false, false, 749), "html", null, true)) : ("0"));
                yield "\" title=\"";
                // line 750
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Limits the number of queries the user may send to the server per hour."), "html", null, true);
                yield "\">
      </div>

      <div class=\"item\">
        <label for=\"text_max_updates\">
          <code>
            <dfn title=\"";
                // line 756
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Limits the number of commands that change any table or database the user may execute per hour."), "html", null, true);
                yield "\">
              MAX UPDATES PER HOUR
            </dfn>
          </code>
        </label>
        <input type=\"number\" name=\"max_updates\" id=\"text_max_updates\" value=\"";
                // line 762
                yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["row"] ?? null), "max_updates", [], "any", true, true, false, 762) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 762, $this->source); })()), "max_updates", [], "any", false, false, false, 762)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 762, $this->source); })()), "max_updates", [], "any", false, false, false, 762), "html", null, true)) : ("0"));
                yield "\" title=\"";
                // line 763
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Limits the number of commands that change any table or database the user may execute per hour."), "html", null, true);
                yield "\">
      </div>

      <div class=\"item\">
        <label for=\"text_max_connections\">
          <code>
            <dfn title=\"";
                // line 769
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Limits the number of new connections the user may open per hour."), "html", null, true);
                yield "\">
              MAX CONNECTIONS PER HOUR
            </dfn>
          </code>
        </label>
        <input type=\"number\" name=\"max_connections\" id=\"text_max_connections\" value=\"";
                // line 775
                yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["row"] ?? null), "max_connections", [], "any", true, true, false, 775) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 775, $this->source); })()), "max_connections", [], "any", false, false, false, 775)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 775, $this->source); })()), "max_connections", [], "any", false, false, false, 775), "html", null, true)) : ("0"));
                yield "\" title=\"";
                // line 776
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Limits the number of new connections the user may open per hour."), "html", null, true);
                yield "\">
      </div>

      <div class=\"item\">
        <label for=\"text_max_user_connections\">
          <code>
            <dfn title=\"";
                // line 782
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Limits the number of simultaneous connections the user may have."), "html", null, true);
                yield "\">
              MAX USER_CONNECTIONS
            </dfn>
          </code>
        </label>
        <input type=\"number\" name=\"max_user_connections\" id=\"text_max_user_connections\" value=\"";
                // line 788
                yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["row"] ?? null), "max_user_connections", [], "any", true, true, false, 788) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 788, $this->source); })()), "max_user_connections", [], "any", false, false, false, 788)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 788, $this->source); })()), "max_user_connections", [], "any", false, false, false, 788), "html", null, true)) : ("0"));
                yield "\" title=\"";
                // line 789
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Limits the number of simultaneous connections the user may have."), "html", null, true);
                yield "\">
      </div>
      </div>
    </div>
    </div>
    <div class=\"col\">

    <div class=\"card\">
      <div class=\"card-header\">SSL</div>
      <div class=\"card-body\">
      <div id=\"require_ssl_div\">
        <div class=\"item\">
          <input type=\"radio\" name=\"ssl_type\" id=\"ssl_type_NONE\" title=\"";
                // line 802
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Does not require SSL-encrypted connections."), "html", null, true);
                yield "\" value=\"NONE\"";
                // line 803
                yield (((((((CoreExtension::getAttribute($this->env, $this->source, ($context["row"] ?? null), "ssl_type", [], "any", true, true, false, 803) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 803, $this->source); })()), "ssl_type", [], "any", false, false, false, 803)))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 803, $this->source); })()), "ssl_type", [], "any", false, false, false, 803)) : (null)) == "NONE") || ((((CoreExtension::getAttribute($this->env, $this->source, ($context["row"] ?? null), "ssl_type", [], "any", true, true, false, 803) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 803, $this->source); })()), "ssl_type", [], "any", false, false, false, 803)))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 803, $this->source); })()), "ssl_type", [], "any", false, false, false, 803)) : (null)) == ""))) ? (" checked") : (""));
                yield ">
          <label for=\"ssl_type_NONE\">
            <code>REQUIRE NONE</code>
          </label>
        </div>

        <div class=\"item\">
          <input type=\"radio\" name=\"ssl_type\" id=\"ssl_type_ANY\" title=\"";
                // line 811
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Requires SSL-encrypted connections."), "html", null, true);
                yield "\" value=\"ANY\"";
                // line 812
                yield ((((((CoreExtension::getAttribute($this->env, $this->source, ($context["row"] ?? null), "ssl_type", [], "any", true, true, false, 812) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 812, $this->source); })()), "ssl_type", [], "any", false, false, false, 812)))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 812, $this->source); })()), "ssl_type", [], "any", false, false, false, 812)) : (null)) == "ANY")) ? (" checked") : (""));
                yield ">
          <label for=\"ssl_type_ANY\">
            <code>REQUIRE SSL</code>
          </label>
        </div>

        <div class=\"item\">
          <input type=\"radio\" name=\"ssl_type\" id=\"ssl_type_X509\" title=\"";
                // line 820
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Requires a valid X509 certificate."), "html", null, true);
                yield "\" value=\"X509\"";
                // line 821
                yield ((((((CoreExtension::getAttribute($this->env, $this->source, ($context["row"] ?? null), "ssl_type", [], "any", true, true, false, 821) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 821, $this->source); })()), "ssl_type", [], "any", false, false, false, 821)))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 821, $this->source); })()), "ssl_type", [], "any", false, false, false, 821)) : (null)) == "X509")) ? (" checked") : (""));
                yield ">
          <label for=\"ssl_type_X509\">
            <code>REQUIRE X509</code>
          </label>
        </div>

        <div class=\"item\">
          <input type=\"radio\" name=\"ssl_type\" id=\"ssl_type_SPECIFIED\" value=\"SPECIFIED\"";
                // line 829
                yield ((((((CoreExtension::getAttribute($this->env, $this->source, ($context["row"] ?? null), "ssl_type", [], "any", true, true, false, 829) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 829, $this->source); })()), "ssl_type", [], "any", false, false, false, 829)))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 829, $this->source); })()), "ssl_type", [], "any", false, false, false, 829)) : (null)) == "SPECIFIED")) ? (" checked") : (""));
                yield ">
          <label for=\"ssl_type_SPECIFIED\">
            <code>SPECIFIED</code>
          </label>
        </div>

        <div id=\"specified_div\" style=\"padding-left:20px;\">
          <div class=\"item\">
            <label for=\"text_ssl_cipher\">
              <code>REQUIRE CIPHER</code>
            </label>
            <input type=\"text\" name=\"ssl_cipher\" id=\"text_ssl_cipher\" value=\"";
                // line 840
                yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["row"] ?? null), "ssl_cipher", [], "any", true, true, false, 840) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 840, $this->source); })()), "ssl_cipher", [], "any", false, false, false, 840)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 840, $this->source); })()), "ssl_cipher", [], "any", false, false, false, 840), "html", null, true)) : (null));
                yield "\" size=\"80\" title=\"";
                // line 841
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Requires that a specific cipher method be used for a connection."), "html", null, true);
                yield "\"";
                // line 842
                yield ((((((CoreExtension::getAttribute($this->env, $this->source, ($context["row"] ?? null), "ssl_type", [], "any", true, true, false, 842) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 842, $this->source); })()), "ssl_type", [], "any", false, false, false, 842)))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 842, $this->source); })()), "ssl_type", [], "any", false, false, false, 842)) : (null)) != "SPECIFIED")) ? (" disabled") : (""));
                yield ">
          </div>

          <div class=\"item\">
            <label for=\"text_x509_issuer\">
              <code>REQUIRE ISSUER</code>
            </label>
            <input type=\"text\" name=\"x509_issuer\" id=\"text_x509_issuer\" value=\"";
                // line 849
                yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["row"] ?? null), "x509_issuer", [], "any", true, true, false, 849) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 849, $this->source); })()), "x509_issuer", [], "any", false, false, false, 849)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 849, $this->source); })()), "x509_issuer", [], "any", false, false, false, 849), "html", null, true)) : (null));
                yield "\" size=\"80\" title=\"";
                // line 850
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Requires that a valid X509 certificate issued by this CA be presented."), "html", null, true);
                yield "\"";
                // line 851
                yield ((((((CoreExtension::getAttribute($this->env, $this->source, ($context["row"] ?? null), "ssl_type", [], "any", true, true, false, 851) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 851, $this->source); })()), "ssl_type", [], "any", false, false, false, 851)))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 851, $this->source); })()), "ssl_type", [], "any", false, false, false, 851)) : (null)) != "SPECIFIED")) ? (" disabled") : (""));
                yield ">
          </div>

          <div class=\"item\">
            <label for=\"text_x509_subject\">
              <code>REQUIRE SUBJECT</code>
            </label>
            <input type=\"text\" name=\"x509_subject\" id=\"text_x509_subject\" value=\"";
                // line 858
                yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["row"] ?? null), "x509_subject", [], "any", true, true, false, 858) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 858, $this->source); })()), "x509_subject", [], "any", false, false, false, 858)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 858, $this->source); })()), "x509_subject", [], "any", false, false, false, 858), "html", null, true)) : (null));
                yield "\" size=\"80\" title=\"";
                // line 859
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Requires that a valid X509 certificate with this subject be presented."), "html", null, true);
                yield "\"";
                // line 860
                yield ((((((CoreExtension::getAttribute($this->env, $this->source, ($context["row"] ?? null), "ssl_type", [], "any", true, true, false, 860) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 860, $this->source); })()), "ssl_type", [], "any", false, false, false, 860)))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 860, $this->source); })()), "ssl_type", [], "any", false, false, false, 860)) : (null)) != "SPECIFIED")) ? (" disabled") : (""));
                yield ">
          </div>
        </div>
      </div>
      </div>
    </div>
    </div>
  ";
            }
            // line 868
            yield "  </div>
</div>
<input type=\"hidden\" name=\"grant_count\" value=\"";
            // line 870
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((isset($context["grant_count"]) || array_key_exists("grant_count", $context) ? $context["grant_count"] : (function () { throw new RuntimeError('Variable "grant_count" does not exist.', 870, $this->source); })()) - ((CoreExtension::getAttribute($this->env, $this->source, ($context["row"] ?? null), "Grant_priv", [], "array", true, true, false, 870)) ? (1) : (0))), "html", null, true);
            yield "\">

";
        }
        // line 873
        yield "
";
        // line 874
        if ((($tmp = (isset($context["has_submit"]) || array_key_exists("has_submit", $context) ? $context["has_submit"] : (function () { throw new RuntimeError('Variable "has_submit" does not exist.', 874, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 875
            yield "  <div>
    <input type=\"hidden\" name=\"update_privs\" value=\"1\">
    <input class=\"btn btn-primary\" type=\"submit\" value=\"";
            // line 877
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Update user privileges"), "html", null, true);
            yield "\">
  </div>
";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "server/privileges/privileges_table.twig";
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
        return array (  1613 => 877,  1609 => 875,  1607 => 874,  1604 => 873,  1598 => 870,  1594 => 868,  1583 => 860,  1580 => 859,  1577 => 858,  1567 => 851,  1564 => 850,  1561 => 849,  1551 => 842,  1548 => 841,  1545 => 840,  1531 => 829,  1521 => 821,  1518 => 820,  1508 => 812,  1505 => 811,  1495 => 803,  1492 => 802,  1477 => 789,  1474 => 788,  1466 => 782,  1457 => 776,  1454 => 775,  1446 => 769,  1437 => 763,  1434 => 762,  1426 => 756,  1417 => 750,  1414 => 749,  1406 => 743,  1397 => 737,  1391 => 734,  1387 => 732,  1385 => 731,  1379 => 727,  1369 => 720,  1361 => 717,  1359 => 716,  1357 => 715,  1346 => 707,  1338 => 704,  1336 => 703,  1334 => 702,  1323 => 694,  1315 => 691,  1313 => 690,  1311 => 689,  1308 => 688,  1306 => 687,  1296 => 680,  1288 => 677,  1286 => 676,  1284 => 675,  1273 => 667,  1265 => 664,  1263 => 663,  1261 => 662,  1257 => 660,  1247 => 653,  1241 => 650,  1238 => 649,  1236 => 648,  1234 => 647,  1231 => 646,  1221 => 639,  1213 => 636,  1211 => 635,  1209 => 634,  1198 => 626,  1190 => 623,  1188 => 622,  1186 => 621,  1175 => 613,  1167 => 610,  1165 => 609,  1163 => 608,  1152 => 600,  1144 => 597,  1142 => 596,  1140 => 595,  1129 => 587,  1123 => 584,  1120 => 583,  1118 => 582,  1116 => 581,  1105 => 573,  1097 => 570,  1095 => 569,  1093 => 568,  1090 => 567,  1088 => 566,  1080 => 561,  1076 => 560,  1067 => 553,  1057 => 546,  1049 => 543,  1047 => 542,  1045 => 541,  1034 => 533,  1026 => 530,  1024 => 529,  1022 => 528,  1019 => 527,  1017 => 526,  1014 => 525,  1004 => 518,  996 => 515,  994 => 514,  992 => 513,  989 => 512,  987 => 511,  984 => 510,  974 => 503,  966 => 500,  964 => 499,  962 => 498,  959 => 497,  957 => 496,  947 => 489,  939 => 486,  937 => 485,  935 => 484,  924 => 476,  916 => 473,  914 => 472,  912 => 471,  901 => 463,  893 => 460,  891 => 459,  889 => 458,  878 => 450,  870 => 447,  868 => 446,  866 => 445,  855 => 437,  847 => 434,  845 => 433,  843 => 432,  833 => 424,  830 => 423,  827 => 421,  825 => 420,  818 => 416,  815 => 415,  812 => 413,  810 => 412,  808 => 411,  806 => 410,  795 => 402,  787 => 399,  785 => 398,  783 => 397,  772 => 389,  764 => 386,  762 => 385,  760 => 384,  750 => 376,  747 => 375,  744 => 373,  742 => 372,  735 => 368,  732 => 367,  729 => 365,  727 => 364,  725 => 363,  723 => 362,  715 => 357,  711 => 356,  703 => 350,  693 => 343,  685 => 340,  683 => 339,  681 => 338,  678 => 337,  676 => 336,  666 => 329,  658 => 326,  656 => 325,  654 => 324,  643 => 316,  635 => 313,  633 => 312,  631 => 311,  620 => 303,  612 => 300,  610 => 299,  608 => 298,  597 => 290,  589 => 287,  587 => 286,  585 => 285,  577 => 280,  573 => 279,  565 => 274,  558 => 270,  553 => 269,  547 => 267,  541 => 265,  539 => 264,  534 => 263,  532 => 262,  529 => 261,  526 => 260,  523 => 258,  521 => 257,  519 => 256,  517 => 255,  514 => 253,  512 => 252,  509 => 251,  502 => 246,  492 => 239,  486 => 236,  483 => 235,  480 => 233,  478 => 232,  468 => 225,  460 => 222,  449 => 213,  441 => 210,  430 => 201,  422 => 198,  411 => 189,  403 => 186,  392 => 177,  384 => 174,  373 => 165,  367 => 162,  364 => 161,  353 => 152,  345 => 149,  334 => 140,  326 => 137,  315 => 128,  307 => 125,  298 => 118,  294 => 117,  289 => 114,  282 => 110,  276 => 106,  267 => 103,  260 => 102,  256 => 101,  249 => 97,  240 => 91,  236 => 90,  231 => 87,  224 => 83,  218 => 79,  209 => 76,  202 => 75,  198 => 74,  191 => 70,  182 => 64,  178 => 63,  173 => 60,  166 => 56,  160 => 52,  151 => 49,  144 => 48,  140 => 47,  133 => 43,  124 => 37,  120 => 36,  115 => 33,  108 => 29,  102 => 25,  93 => 22,  86 => 21,  82 => 20,  75 => 16,  67 => 11,  60 => 7,  56 => 6,  51 => 4,  47 => 3,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% if columns is not empty %}

  <input type=\"hidden\" name=\"grant_count\" value=\"{{ row|length }}\">
  <input type=\"hidden\" name=\"column_count\" value=\"{{ columns|length }}\">
  <div class=\"card mb-3\" id=\"fieldset_user_priv\">
    <div class=\"card-header js-submenu-label\" data-submenu-label=\"{{ t('Table') }}\">
      {{ t('Table-specific privileges') }}
    </div>
    <div class=\"card-body\">
    <p>
      <small><em>{{ t('Note: MySQL privilege names are expressed in English.') }}</em></small>
    </p>

    <div class=\"item\" id=\"div_item_select\">
      <label for=\"select_select_priv\">
        <code><dfn title=\"{{ t('Allows reading data.') }}\">SELECT</dfn></code>
      </label>

      <select class=\"resize-vertical\" id=\"select_select_priv\" name=\"Select_priv[]\" size=\"8\" multiple>
        {% for curr_col, curr_col_privs in columns %}
          <option value=\"{{ curr_col }}\"{{ row['Select_priv'] == 'Y' or curr_col_privs['Select'] ? ' selected' }}>
            {{ curr_col }}
          </option>
        {% endfor %}
      </select>

      <div>
        <button class=\"btn btn-link p-0\" id=\"select_priv_all\" type=\"button\" data-select-target=\"#select_select_priv\">
          {{ t('Select all') }}
        </button>
      </div>

      <em>{{ t('Or') }}</em>
      <label for=\"checkbox_Select_priv_none\">
        <input type=\"checkbox\" name=\"Select_priv_none\" id=\"checkbox_Select_priv_none\" title=\"
          {{- t('None', context = 'None privileges') }}\">
        {{ t('None', context = 'None privileges') }}
      </label>
    </div>

    <div class=\"item\" id=\"div_item_insert\">
      <label for=\"select_insert_priv\">
        <code><dfn title=\"{{ t('Allows inserting and replacing data.') }}\">INSERT</dfn></code>
      </label>

      <select class=\"resize-vertical\" id=\"select_insert_priv\" name=\"Insert_priv[]\" size=\"8\" multiple>
        {% for curr_col, curr_col_privs in columns %}
          <option value=\"{{ curr_col }}\"{{ row['Insert_priv'] == 'Y' or curr_col_privs['Insert'] ? ' selected' }}>
            {{ curr_col }}
          </option>
        {% endfor %}
      </select>

      <div>
        <button class=\"btn btn-link p-0\" id=\"insert_priv_all\" type=\"button\" data-select-target=\"#select_insert_priv\">
          {{ t('Select all') }}
        </button>
      </div>

      <em>{{ t('Or') }}</em>
      <label for=\"checkbox_Insert_priv_none\">
        <input type=\"checkbox\" name=\"Insert_priv_none\" id=\"checkbox_Insert_priv_none\" title=\"
          {{- t('None', context = 'None privileges') }}\">
        {{ t('None', context = 'None privileges') }}
      </label>
    </div>

    <div class=\"item\" id=\"div_item_update\">
      <label for=\"select_update_priv\">
        <code><dfn title=\"{{ t('Allows changing data.') }}\">UPDATE</dfn></code>
      </label>

      <select class=\"resize-vertical\" id=\"select_update_priv\" name=\"Update_priv[]\" size=\"8\" multiple>
        {% for curr_col, curr_col_privs in columns %}
          <option value=\"{{ curr_col }}\"{{ row['Update_priv'] == 'Y' or curr_col_privs['Update'] ? ' selected' }}>
            {{ curr_col }}
          </option>
        {% endfor %}
      </select>

      <div>
        <button class=\"btn btn-link p-0\" id=\"update_priv_all\" type=\"button\" data-select-target=\"#select_update_priv\">
          {{ t('Select all') }}
        </button>
      </div>

      <em>{{ t('Or') }}</em>
      <label for=\"checkbox_Update_priv_none\">
        <input type=\"checkbox\" name=\"Update_priv_none\" id=\"checkbox_Update_priv_none\" title=\"
          {{- t('None', context = 'None privileges') }}\">
        {{ t('None', context = 'None privileges') }}
      </label>
    </div>

    <div class=\"item\" id=\"div_item_references\">
      <label for=\"select_references_priv\">
        <code><dfn title=\"{{ t('Has no effect in this MySQL version.') }}\">REFERENCES</dfn></code>
      </label>

      <select class=\"resize-vertical\" id=\"select_references_priv\" name=\"References_priv[]\" size=\"8\" multiple>
        {% for curr_col, curr_col_privs in columns %}
          <option value=\"{{ curr_col }}\"{{ row['References_priv'] == 'Y' or curr_col_privs['References'] ? ' selected' }}>
            {{ curr_col }}
          </option>
        {% endfor %}
      </select>

      <div>
        <button class=\"btn btn-link p-0\" id=\"references_priv_all\" type=\"button\" data-select-target=\"#select_references_priv\">
          {{ t('Select all') }}
        </button>
      </div>

      <em>{{ t('Or') }}</em>
      <label for=\"checkbox_References_priv_none\">
        <input type=\"checkbox\" name=\"References_priv_none\" id=\"checkbox_References_priv_none\" title=\"
          {{- t('None', context = 'None privileges') }}\">
        {{ t('None', context = 'None privileges') }}
      </label>
    </div>

    <div class=\"item\">
      <div class=\"item\">
        <input type=\"checkbox\" name=\"Delete_priv\" id=\"checkbox_Delete_priv\" value=\"Y\" title=\"
          {{- t('Allows deleting data.') }}\"{{ (row['Delete_priv'] ?? null) == 'Y' ? ' checked' }}>
        <label for=\"checkbox_Delete_priv\">
          <code>
            <dfn title=\"{{ t('Allows deleting data.') }}\">
              DELETE
            </dfn>
          </code>
        </label>
      </div>

      <div class=\"item\">
        <input type=\"checkbox\" name=\"Create_priv\" id=\"checkbox_Create_priv\" value=\"Y\" title=\"
          {{- t('Allows creating new tables.') }}\"{{ (row['Create_priv'] ?? null) == 'Y' ? ' checked' }}>
        <label for=\"checkbox_Create_priv\">
          <code>
            <dfn title=\"{{ t('Allows creating new tables.') }}\">
              CREATE
            </dfn>
          </code>
        </label>
      </div>

      <div class=\"item\">
        <input type=\"checkbox\" name=\"Drop_priv\" id=\"checkbox_Drop_priv\" value=\"Y\" title=\"
          {{- t('Allows dropping tables.') }}\"{{ (row['Drop_priv'] ?? null) == 'Y' ? ' checked' }}>
        <label for=\"checkbox_Drop_priv\">
          <code>
            <dfn title=\"{{ t('Allows dropping tables.') }}\">
              DROP
            </dfn>
          </code>
        </label>
      </div>

      <div class=\"item\">
        <input type=\"checkbox\" name=\"Grant_priv\" id=\"checkbox_Grant_priv\" value=\"Y\" title=\"
          {{- t('Allows user to give to other users or remove from other users the privileges that user possess yourself.') }}\"
          {{- (row['Grant_priv'] ?? null) == 'Y' ? ' checked' }}>
        <label for=\"checkbox_Grant_priv\">
          <code>
            <dfn title=\"{{ t('Allows user to give to other users or remove from other users the privileges that user possess yourself.') }}\">
              GRANT
            </dfn>
          </code>
        </label>
      </div>

      <div class=\"item\">
        <input type=\"checkbox\" name=\"Index_priv\" id=\"checkbox_Index_priv\" value=\"Y\" title=\"
          {{- t('Allows creating and dropping indexes.') }}\"{{ (row['Index_priv'] ?? null) == 'Y' ? ' checked' }}>
        <label for=\"checkbox_Index_priv\">
          <code>
            <dfn title=\"{{ t('Allows creating and dropping indexes.') }}\">
              INDEX
            </dfn>
          </code>
        </label>
      </div>

      <div class=\"item\">
        <input type=\"checkbox\" name=\"Alter_priv\" id=\"checkbox_Alter_priv\" value=\"Y\" title=\"
          {{- t('Allows altering the structure of existing tables.') }}\"{{ (row['Alter_priv'] ?? null) == 'Y' ? ' checked' }}>
        <label for=\"checkbox_Alter_priv\">
          <code>
            <dfn title=\"{{ t('Allows altering the structure of existing tables.') }}\">
              ALTER
            </dfn>
          </code>
        </label>
      </div>

      <div class=\"item\">
        <input type=\"checkbox\" name=\"Create_view_priv\" id=\"checkbox_Create_view_priv\" value=\"Y\" title=\"
          {{- t('Allows creating new views.') }}\"{{ row['Create View_priv'] == 'Y' ? ' checked' }}>
        <label for=\"checkbox_Create_view_priv\">
          <code>
            <dfn title=\"{{ t('Allows creating new views.') }}\">
              CREATE VIEW
            </dfn>
          </code>
        </label>
      </div>

      <div class=\"item\">
        <input type=\"checkbox\" name=\"Show_view_priv\" id=\"checkbox_Show_view_priv\" value=\"Y\" title=\"
          {{- t('Allows performing SHOW CREATE VIEW queries.') }}\"{{ row['Show view_priv'] == 'Y' ? ' checked' }}>
        <label for=\"checkbox_Show_view_priv\">
          <code>
            <dfn title=\"{{ t('Allows performing SHOW CREATE VIEW queries.') }}\">
              SHOW VIEW
            </dfn>
          </code>
        </label>
      </div>

      <div class=\"item\">
        <input type=\"checkbox\" name=\"Trigger_priv\" id=\"checkbox_Trigger_priv\" value=\"Y\" title=\"
          {{- t('Allows creating and dropping triggers.') }}\"{{ (row['Trigger_priv'] ?? null) == 'Y' ? ' checked' }}>
        <label for=\"checkbox_Trigger_priv\">
          <code>
            <dfn title=\"{{ t('Allows creating and dropping triggers.') }}\">
              TRIGGER
            </dfn>
          </code>
        </label>
      </div>

      {% if row['Delete versioning rows_priv'] is defined %}
        <div class=\"item\">
          <input type=\"checkbox\" name=\"Delete_history_priv\" id=\"checkbox_Delete_history_priv\" value=\"Y\" title=\"
            {{- t('Allows deleting historical rows.') }}\"
            {{- row['Delete versioning rows_priv'] == 'Y' ? ' checked' }}>
          <label for=\"checkbox_Delete_history_priv\">
            <code>
              <dfn title=\"{{ t('Allows deleting historical rows.') }}\">
                DELETE HISTORY
              </dfn>
            </code>
          </label>
        </div>
      {% endif %}
    </div>
    </div>
  </div>

{% else %}

{% set grant_count = 0 %}
<div class=\"card mb-3\">
  <div class=\"card-header js-submenu-label\" data-submenu-label=\"
    {%- if is_global %}
      {{- t('Global') -}}
    {% elseif is_database %}
      {{- t('Database') -}}
    {% else %}
      {{- t('Table') -}}
    {% endif %}\">
    {% if is_global %}
      {{ t('Global privileges') }}
    {% elseif is_database %}
      {{ t('Database-specific privileges') }}
    {% else %}
      {{ t('Table-specific privileges') }}
    {% endif %}
    <input type=\"checkbox\" id=\"addUsersForm_checkall\" class=\"checkall_box\" title=\"{{ t('Check all') }}\">
    <label for=\"addUsersForm_checkall\">{{ t('Check all') }}</label>
  </div>
  <div class=\"card-body row g-3\">
  <p class=\"col-12\">
    <small><em>{{ t('Note: MySQL privilege names are expressed in English.') }}</em></small>
  </p>
    <div class=\"col\">
  <div class=\"card\">
    <div class=\"card-header\">
      <input type=\"checkbox\" class=\"sub_checkall_box\" id=\"checkall_Data_priv\" title=\"{{ t('Check all') }}\">
      <label for=\"checkall_Data_priv\">{{ t('Data') }}</label>
    </div>

    <div class=\"card-body\">
    <div class=\"item\">
      {% set grant_count = grant_count + 1 %}
      <input type=\"checkbox\" class=\"checkall\" name=\"Select_priv\" id=\"checkbox_Select_priv\" value=\"Y\" title=\"
        {{- t('Allows reading data.') }}\"{{ (row['Select_priv'] ?? null) == 'Y' ? ' checked' }}>
      <label for=\"checkbox_Select_priv\">
        <code>
          <dfn title=\"{{ t('Allows reading data.') }}\">
            SELECT
          </dfn>
        </code>
      </label>
    </div>

    <div class=\"item\">
      {% set grant_count = grant_count + 1 %}
      <input type=\"checkbox\" class=\"checkall\" name=\"Insert_priv\" id=\"checkbox_Insert_priv\" value=\"Y\" title=\"
        {{- t('Allows inserting and replacing data.') }}\"{{ (row['Insert_priv'] ?? null) == 'Y' ? ' checked' }}>
      <label for=\"checkbox_Insert_priv\">
        <code>
          <dfn title=\"{{ t('Allows inserting and replacing data.') }}\">
            INSERT
          </dfn>
        </code>
      </label>
    </div>

    <div class=\"item\">
      {% set grant_count = grant_count + 1 %}
      <input type=\"checkbox\" class=\"checkall\" name=\"Update_priv\" id=\"checkbox_Update_priv\" value=\"Y\" title=\"
        {{- t('Allows changing data.') }}\"{{ (row['Update_priv'] ?? null) == 'Y' ? ' checked' }}>
      <label for=\"checkbox_Update_priv\">
        <code>
          <dfn title=\"{{ t('Allows changing data.') }}\">
            UPDATE
          </dfn>
        </code>
      </label>
    </div>

    <div class=\"item\">
      {% set grant_count = grant_count + 1 %}
      <input type=\"checkbox\" class=\"checkall\" name=\"Delete_priv\" id=\"checkbox_Delete_priv\" value=\"Y\" title=\"
        {{- t('Allows deleting data.') }}\"{{ (row['Delete_priv'] ?? null) == 'Y' ? ' checked' }}>
      <label for=\"checkbox_Delete_priv\">
        <code>
          <dfn title=\"{{ t('Allows deleting data.') }}\">
            DELETE
          </dfn>
        </code>
      </label>
    </div>

    {% if is_global %}
      <div class=\"item\">
        {% set grant_count = grant_count + 1 %}
        <input type=\"checkbox\" class=\"checkall\" name=\"File_priv\" id=\"checkbox_File_priv\" value=\"Y\" title=\"
          {{- t('Allows importing data from and exporting data into files.') }}\"{{ (row['File_priv'] ?? null) == 'Y' ? ' checked' }}>
        <label for=\"checkbox_File_priv\">
          <code>
            <dfn title=\"{{ t('Allows importing data from and exporting data into files.') }}\">
              FILE
            </dfn>
          </code>
        </label>
      </div>
    {% endif %}
    </div>
  </div>
    </div>
    <div class=\"col\">
  <div class=\"card\">
    <div class=\"card-header\">
      <input type=\"checkbox\" class=\"sub_checkall_box\" id=\"checkall_Structure_priv\" title=\"{{ t('Check all') }}\">
      <label for=\"checkall_Structure_priv\">{{ t('Structure') }}</label>
    </div>

    <div class=\"card-body\">
    <div class=\"item\">
      {% set grant_count = grant_count + 1 %}
      <input type=\"checkbox\" class=\"checkall\" name=\"Create_priv\" id=\"checkbox_Create_priv\" value=\"Y\" title=\"
        {%- if is_database %}
          {{- t('Allows creating new databases and tables.') -}}
        {% else %}
          {{- t('Allows creating new tables.') -}}
        {% endif %}\"{{ (row['Create_priv'] ?? null) == 'Y' ? ' checked' }}>
      <label for=\"checkbox_Create_priv\">
        <code>
          <dfn title=\"
            {%- if is_database %}
              {{- t('Allows creating new databases and tables.') -}}
            {% else %}
              {{- t('Allows creating new tables.') -}}
            {% endif %}\">
            CREATE
          </dfn>
        </code>
      </label>
    </div>

    <div class=\"item\">
      {% set grant_count = grant_count + 1 %}
      <input type=\"checkbox\" class=\"checkall\" name=\"Alter_priv\" id=\"checkbox_Alter_priv\" value=\"Y\" title=\"
        {{- t('Allows altering the structure of existing tables.') }}\"{{ (row['Alter_priv'] ?? null) == 'Y' ? ' checked' }}>
      <label for=\"checkbox_Alter_priv\">
        <code>
          <dfn title=\"{{ t('Allows altering the structure of existing tables.') }}\">
            ALTER
          </dfn>
        </code>
      </label>
    </div>

    <div class=\"item\">
      {% set grant_count = grant_count + 1 %}
      <input type=\"checkbox\" class=\"checkall\" name=\"Index_priv\" id=\"checkbox_Index_priv\" value=\"Y\" title=\"
        {{- t('Allows creating and dropping indexes.') }}\"{{ (row['Index_priv'] ?? null) == 'Y' ? ' checked' }}>
      <label for=\"checkbox_Index_priv\">
        <code>
          <dfn title=\"{{ t('Allows creating and dropping indexes.') }}\">
            INDEX
          </dfn>
        </code>
      </label>
    </div>

    <div class=\"item\">
      {% set grant_count = grant_count + 1 %}
      <input type=\"checkbox\" class=\"checkall\" name=\"Drop_priv\" id=\"checkbox_Drop_priv\" value=\"Y\" title=\"
        {%- if is_database %}
          {{- t('Allows dropping databases and tables.') -}}
        {% else %}
          {{- t('Allows dropping tables.') -}}
        {% endif %}\"{{ (row['Drop_priv'] ?? null) == 'Y' ? ' checked' }}>
      <label for=\"checkbox_Drop_priv\">
        <code>
          <dfn title=\"
            {%- if is_database %}
              {{- t('Allows dropping databases and tables.') -}}
            {% else %}
              {{- t('Allows dropping tables.') -}}
            {% endif %}\">
            DROP
          </dfn>
        </code>
      </label>
    </div>

    <div class=\"item\">
      {% set grant_count = grant_count + 1 %}
      <input type=\"checkbox\" class=\"checkall\" name=\"Create_tmp_table_priv\" id=\"checkbox_Create_tmp_table_priv\" value=\"Y\" title=\"
        {{- t('Allows creating temporary tables.') }}\"{{ (row['Create_tmp_table_priv'] ?? null) == 'Y' ? ' checked' }}>
      <label for=\"checkbox_Create_tmp_table_priv\">
        <code>
          <dfn title=\"{{ t('Allows creating temporary tables.') }}\">
            CREATE TEMPORARY TABLES
          </dfn>
        </code>
      </label>
    </div>

    <div class=\"item\">
      {% set grant_count = grant_count + 1 %}
      <input type=\"checkbox\" class=\"checkall\" name=\"Show_view_priv\" id=\"checkbox_Show_view_priv\" value=\"Y\" title=\"
        {{- t('Allows performing SHOW CREATE VIEW queries.') }}\"{{ (row['Show_view_priv'] ?? null) == 'Y' ? ' checked' }}>
      <label for=\"checkbox_Show_view_priv\">
        <code>
          <dfn title=\"{{ t('Allows performing SHOW CREATE VIEW queries.') }}\">
            SHOW VIEW
          </dfn>
        </code>
      </label>
    </div>

    <div class=\"item\">
      {% set grant_count = grant_count + 1 %}
      <input type=\"checkbox\" class=\"checkall\" name=\"Create_routine_priv\" id=\"checkbox_Create_routine_priv\" value=\"Y\" title=\"
        {{- t('Allows creating stored routines.') }}\"{{ (row['Create_routine_priv'] ?? null) == 'Y' ? ' checked' }}>
      <label for=\"checkbox_Create_routine_priv\">
        <code>
          <dfn title=\"{{ t('Allows creating stored routines.') }}\">
            CREATE ROUTINE
          </dfn>
        </code>
      </label>
    </div>

    <div class=\"item\">
      {% set grant_count = grant_count + 1 %}
      <input type=\"checkbox\" class=\"checkall\" name=\"Alter_routine_priv\" id=\"checkbox_Alter_routine_priv\" value=\"Y\" title=\"
        {{- t('Allows altering and dropping stored routines.') }}\"{{ (row['Alter_routine_priv'] ?? null) == 'Y' ? ' checked' }}>
      <label for=\"checkbox_Alter_routine_priv\">
        <code>
          <dfn title=\"{{ t('Allows altering and dropping stored routines.') }}\">
            ALTER ROUTINE
          </dfn>
        </code>
      </label>
    </div>

    <div class=\"item\">
      {% set grant_count = grant_count + 1 %}
      <input type=\"checkbox\" class=\"checkall\" name=\"Execute_priv\" id=\"checkbox_Execute_priv\" value=\"Y\" title=\"
        {{- t('Allows executing stored routines.') }}\"{{ (row['Execute_priv'] ?? null) == 'Y' ? ' checked' }}>
      <label for=\"checkbox_Execute_priv\">
        <code>
          <dfn title=\"{{ t('Allows executing stored routines.') }}\">
            EXECUTE
          </dfn>
        </code>
      </label>
    </div>

    {% if row['Create_view_priv'] is defined %}
      <div class=\"item\">
        {% set grant_count = grant_count + 1 %}
        <input type=\"checkbox\" class=\"checkall\" name=\"Create_view_priv\" id=\"checkbox_Create_view_priv\" value=\"Y\" title=\"
          {{- t('Allows creating new views.') }}\"{{ row['Create_view_priv'] == 'Y' ? ' checked' }}>
        <label for=\"checkbox_Create_view_priv\">
          <code>
            <dfn title=\"{{ t('Allows creating new views.') }}\">
              CREATE VIEW
            </dfn>
          </code>
        </label>
      </div>
    {% endif %}

    {% if row['Create View_priv'] is defined %}
      <div class=\"item\">
        {% set grant_count = grant_count + 1 %}
        <input type=\"checkbox\" class=\"checkall\" name=\"Create View_priv\" id=\"checkbox_Create View_priv\" value=\"Y\" title=\"
          {{- t('Allows creating new views.') }}\"{{ row['Create View_priv'] == 'Y' ? ' checked' }}>
        <label for=\"checkbox_Create View_priv\">
          <code>
            <dfn title=\"{{ t('Allows creating new views.') }}\">
              CREATE VIEW
            </dfn>
          </code>
        </label>
      </div>
    {% endif %}

    {% if row['Event_priv'] is defined %}
      <div class=\"item\">
        {% set grant_count = grant_count + 1 %}
        <input type=\"checkbox\" class=\"checkall\" name=\"Event_priv\" id=\"checkbox_Event_priv\" value=\"Y\" title=\"
          {{- t('Allows to set up events for the event scheduler.') }}\"{{ row['Event_priv'] == 'Y' ? ' checked' }}>
        <label for=\"checkbox_Event_priv\">
          <code>
            <dfn title=\"{{ t('Allows to set up events for the event scheduler.') }}\">
              EVENT
            </dfn>
          </code>
        </label>
      </div>

      <div class=\"item\">
        {% set grant_count = grant_count + 1 %}
        <input type=\"checkbox\" class=\"checkall\" name=\"Trigger_priv\" id=\"checkbox_Trigger_priv\" value=\"Y\" title=\"
          {{- t('Allows creating and dropping triggers.') }}\"{{ row['Trigger_priv'] == 'Y' ? ' checked' }}>
        <label for=\"checkbox_Trigger_priv\">
          <code>
            <dfn title=\"{{ t('Allows creating and dropping triggers.') }}\">
              TRIGGER
            </dfn>
          </code>
        </label>
      </div>
    {% endif %}
    </div>
  </div>
    </div>
    <div class=\"col\">

  <div class=\"card\">
    <div class=\"card-header\">
      <input type=\"checkbox\" class=\"sub_checkall_box\" id=\"checkall_Administration_priv\" title=\"{{ t('Check all') }}\">
      <label for=\"checkall_Administration_priv\">{{ t('Administration') }}</label>
    </div>

    <div class=\"card-body\">

    {% if is_global %}
      <div class=\"item\">
        {% set grant_count = grant_count + 1 %}
        <input type=\"checkbox\" class=\"checkall\" name=\"Grant_priv\" id=\"checkbox_Grant_priv\" value=\"Y\" title=\"
          {{- t('Allows adding users and privileges without reloading the privilege tables.') }}\"{{ (row['Grant_priv'] ?? null) == 'Y' ? ' checked' }}>
        <label for=\"checkbox_Grant_priv\">
          <code>
            <dfn title=\"{{ t('Allows adding users and privileges without reloading the privilege tables.') }}\">
              GRANT
            </dfn>
          </code>
        </label>
      </div>

      <div class=\"item\">
        {% set grant_count = grant_count + 1 %}
        <input type=\"checkbox\" class=\"checkall\" name=\"Super_priv\" id=\"checkbox_Super_priv\" value=\"Y\" title=\"
          {{- t('Allows connecting, even if maximum number of connections is reached; required for most administrative operations like setting global variables or killing threads of other users.') }}\"
          {{- (row['Super_priv'] ?? null) == 'Y' ? ' checked' }}>
        <label for=\"checkbox_Super_priv\">
          <code>
            <dfn title=\"{{ t('Allows connecting, even if maximum number of connections is reached; required for most administrative operations like setting global variables or killing threads of other users.') }}\">
              SUPER
            </dfn>
          </code>
        </label>
      </div>

      <div class=\"item\">
        {% set grant_count = grant_count + 1 %}
        <input type=\"checkbox\" class=\"checkall\" name=\"Process_priv\" id=\"checkbox_Process_priv\" value=\"Y\" title=\"
          {{- t('Allows viewing processes of all users.') }}\"{{ (row['Process_priv'] ?? null) == 'Y' ? ' checked' }}>
        <label for=\"checkbox_Process_priv\">
          <code>
            <dfn title=\"{{ t('Allows viewing processes of all users.') }}\">
              PROCESS
            </dfn>
          </code>
        </label>
      </div>

      <div class=\"item\">
        {% set grant_count = grant_count + 1 %}
        <input type=\"checkbox\" class=\"checkall\" name=\"Reload_priv\" id=\"checkbox_Reload_priv\" value=\"Y\" title=\"
          {{- t(\"Allows reloading server settings and flushing the server's caches.\") }}\"{{ (row['Reload_priv'] ?? null) == 'Y' ? ' checked' }}>
        <label for=\"checkbox_Reload_priv\">
          <code>
            <dfn title=\"{{ t(\"Allows reloading server settings and flushing the server's caches.\") }}\">
              RELOAD
            </dfn>
          </code>
        </label>
      </div>

      <div class=\"item\">
        {% set grant_count = grant_count + 1 %}
        <input type=\"checkbox\" class=\"checkall\" name=\"Shutdown_priv\" id=\"checkbox_Shutdown_priv\" value=\"Y\" title=\"
          {{- t('Allows shutting down the server.') }}\"{{ (row['Shutdown_priv'] ?? null) == 'Y' ? ' checked' }}>
        <label for=\"checkbox_Shutdown_priv\">
          <code>
            <dfn title=\"{{ t('Allows shutting down the server.') }}\">
              SHUTDOWN
            </dfn>
          </code>
        </label>
      </div>

      <div class=\"item\">
        {% set grant_count = grant_count + 1 %}
        <input type=\"checkbox\" class=\"checkall\" name=\"Show_db_priv\" id=\"checkbox_Show_db_priv\" value=\"Y\" title=\"
          {{- t('Gives access to the complete list of databases.') }}\"{{ (row['Show_db_priv'] ?? null) == 'Y' ? ' checked' }}>
        <label for=\"checkbox_Show_db_priv\">
          <code>
            <dfn title=\"{{ t('Gives access to the complete list of databases.') }}\">
              SHOW DATABASES
            </dfn>
          </code>
        </label>
      </div>
    {% else %}
      <div class=\"item\">
        {% set grant_count = grant_count + 1 %}
        <input type=\"checkbox\" class=\"checkall\" name=\"Grant_priv\" id=\"checkbox_Grant_priv\" value=\"Y\" title=\"
          {{- t('Allows user to give to other users or remove from other users the privileges that user possess yourself.') }}\"
          {{- (row['Grant_priv'] ?? null) == 'Y' ? ' checked' }}>
        <label for=\"checkbox_Grant_priv\">
          <code>
            <dfn title=\"{{ t('Allows user to give to other users or remove from other users the privileges that user possess yourself.') }}\">
              GRANT
            </dfn>
          </code>
        </label>
      </div>
    {% endif %}

    <div class=\"item\">
      {% set grant_count = grant_count + 1 %}
      <input type=\"checkbox\" class=\"checkall\" name=\"Lock_tables_priv\" id=\"checkbox_Lock_tables_priv\" value=\"Y\" title=\"
        {{- t('Allows locking tables for the current thread.') }}\"{{ (row['Lock_tables_priv'] ?? null) == 'Y' ? ' checked' }}>
      <label for=\"checkbox_Lock_tables_priv\">
        <code>
          <dfn title=\"{{ t('Allows locking tables for the current thread.') }}\">
            LOCK TABLES
          </dfn>
        </code>
      </label>
    </div>

    <div class=\"item\">
      {% set grant_count = grant_count + 1 %}
      <input type=\"checkbox\" class=\"checkall\" name=\"References_priv\" id=\"checkbox_References_priv\" value=\"Y\" title=\"
        {{- t('Has no effect in this MySQL version.') }}\"{{ (row['References_priv'] ?? null) == 'Y' ? ' checked' }}>
      <label for=\"checkbox_References_priv\">
        <code>
          <dfn title=\"{{ supports_references_privilege ? t('Allows creating foreign key relations.') : (is_mariadb ? t('Not used on MariaDB.') : t('Not used for this MySQL version.')) }}\">
            REFERENCES
          </dfn>
        </code>
      </label>
    </div>

    {% if is_global %}
      <div class=\"item\">
        {% set grant_count = grant_count + 1 %}
        <input type=\"checkbox\" class=\"checkall\" name=\"Repl_client_priv\" id=\"checkbox_Repl_client_priv\" value=\"Y\" title=\"
          {{- t('Allows the user to ask where the replicas / primaries are.') }}\"{{ (row['Repl_client_priv'] ?? null) == 'Y' ? ' checked' }}>
        <label for=\"checkbox_Repl_client_priv\">
          <code>
            <dfn title=\"{{ t('Allows the user to ask where the replicas / primaries are.') }}\">
              REPLICATION CLIENT
            </dfn>
          </code>
        </label>
      </div>

      <div class=\"item\">
        {% set grant_count = grant_count + 1 %}
        <input type=\"checkbox\" class=\"checkall\" name=\"Repl_slave_priv\" id=\"checkbox_Repl_slave_priv\" value=\"Y\" title=\"
          {{- t('Needed for the replication replicas.') }}\"{{ (row['Repl_slave_priv'] ?? null) == 'Y' ? ' checked' }}>
        <label for=\"checkbox_Repl_slave_priv\">
          <code>
            <dfn title=\"{{ t('Needed for the replication replicas.') }}\">
              REPLICATION SLAVE
            </dfn>
          </code>
        </label>
      </div>

      <div class=\"item\">
        {% set grant_count = grant_count + 1 %}
        <input type=\"checkbox\" class=\"checkall\" name=\"Create_user_priv\" id=\"checkbox_Create_user_priv\" value=\"Y\" title=\"
          {{- t('Allows creating, dropping and renaming user accounts.') }}\"{{ (row['Create_user_priv'] ?? null) == 'Y' ? ' checked' }}>
        <label for=\"checkbox_Create_user_priv\">
          <code>
            <dfn title=\"{{ t('Allows creating, dropping and renaming user accounts.') }}\">
              CREATE USER
            </dfn>
          </code>
        </label>
      </div>
    {% endif %}
    </div>
  </div>
    </div>

  {% if is_global %}
    <div class=\"col\">
    <div class=\"card\">
      <div class=\"card-header\">{{ t('Resource limits') }}</div>
      <div class=\"card-body\">
      <p>
        <small><em>{{ t('Note: Setting these options to 0 (zero) removes the limit.') }}</em></small>
      </p>

      <div class=\"item\">
        <label for=\"text_max_questions\">
          <code>
            <dfn title=\"{{ t('Limits the number of queries the user may send to the server per hour.') }}\">
              MAX QUERIES PER HOUR
            </dfn>
          </code>
        </label>
        <input type=\"number\" name=\"max_questions\" id=\"text_max_questions\" value=\"
          {{- row.max_questions ?? '0' }}\" title=\"
          {{- t('Limits the number of queries the user may send to the server per hour.') }}\">
      </div>

      <div class=\"item\">
        <label for=\"text_max_updates\">
          <code>
            <dfn title=\"{{ t('Limits the number of commands that change any table or database the user may execute per hour.') }}\">
              MAX UPDATES PER HOUR
            </dfn>
          </code>
        </label>
        <input type=\"number\" name=\"max_updates\" id=\"text_max_updates\" value=\"
          {{- row.max_updates ?? '0' }}\" title=\"
          {{- t('Limits the number of commands that change any table or database the user may execute per hour.') }}\">
      </div>

      <div class=\"item\">
        <label for=\"text_max_connections\">
          <code>
            <dfn title=\"{{ t('Limits the number of new connections the user may open per hour.') }}\">
              MAX CONNECTIONS PER HOUR
            </dfn>
          </code>
        </label>
        <input type=\"number\" name=\"max_connections\" id=\"text_max_connections\" value=\"
          {{- row.max_connections ?? '0' }}\" title=\"
          {{- t('Limits the number of new connections the user may open per hour.') }}\">
      </div>

      <div class=\"item\">
        <label for=\"text_max_user_connections\">
          <code>
            <dfn title=\"{{ t('Limits the number of simultaneous connections the user may have.') }}\">
              MAX USER_CONNECTIONS
            </dfn>
          </code>
        </label>
        <input type=\"number\" name=\"max_user_connections\" id=\"text_max_user_connections\" value=\"
          {{- row.max_user_connections ?? '0' }}\" title=\"
          {{- t('Limits the number of simultaneous connections the user may have.') }}\">
      </div>
      </div>
    </div>
    </div>
    <div class=\"col\">

    <div class=\"card\">
      <div class=\"card-header\">SSL</div>
      <div class=\"card-body\">
      <div id=\"require_ssl_div\">
        <div class=\"item\">
          <input type=\"radio\" name=\"ssl_type\" id=\"ssl_type_NONE\" title=\"
            {{- t('Does not require SSL-encrypted connections.') }}\" value=\"NONE\"
            {{- (row.ssl_type ?? null) == 'NONE' or (row.ssl_type ?? null) == '' ? ' checked' }}>
          <label for=\"ssl_type_NONE\">
            <code>REQUIRE NONE</code>
          </label>
        </div>

        <div class=\"item\">
          <input type=\"radio\" name=\"ssl_type\" id=\"ssl_type_ANY\" title=\"
            {{- t('Requires SSL-encrypted connections.') }}\" value=\"ANY\"
            {{- (row.ssl_type ?? null) == 'ANY' ? ' checked' }}>
          <label for=\"ssl_type_ANY\">
            <code>REQUIRE SSL</code>
          </label>
        </div>

        <div class=\"item\">
          <input type=\"radio\" name=\"ssl_type\" id=\"ssl_type_X509\" title=\"
            {{- t('Requires a valid X509 certificate.') }}\" value=\"X509\"
            {{- (row.ssl_type ?? null) == 'X509' ? ' checked' }}>
          <label for=\"ssl_type_X509\">
            <code>REQUIRE X509</code>
          </label>
        </div>

        <div class=\"item\">
          <input type=\"radio\" name=\"ssl_type\" id=\"ssl_type_SPECIFIED\" value=\"SPECIFIED\"
            {{- (row.ssl_type ?? null) == 'SPECIFIED' ? ' checked' }}>
          <label for=\"ssl_type_SPECIFIED\">
            <code>SPECIFIED</code>
          </label>
        </div>

        <div id=\"specified_div\" style=\"padding-left:20px;\">
          <div class=\"item\">
            <label for=\"text_ssl_cipher\">
              <code>REQUIRE CIPHER</code>
            </label>
            <input type=\"text\" name=\"ssl_cipher\" id=\"text_ssl_cipher\" value=\"{{ row.ssl_cipher ?? null }}\" size=\"80\" title=\"
              {{- t('Requires that a specific cipher method be used for a connection.') }}\"
              {{- (row.ssl_type ?? null) != 'SPECIFIED' ? ' disabled' }}>
          </div>

          <div class=\"item\">
            <label for=\"text_x509_issuer\">
              <code>REQUIRE ISSUER</code>
            </label>
            <input type=\"text\" name=\"x509_issuer\" id=\"text_x509_issuer\" value=\"{{ row.x509_issuer ?? null }}\" size=\"80\" title=\"
              {{- t('Requires that a valid X509 certificate issued by this CA be presented.') }}\"
              {{- (row.ssl_type ?? null) != 'SPECIFIED' ? ' disabled' }}>
          </div>

          <div class=\"item\">
            <label for=\"text_x509_subject\">
              <code>REQUIRE SUBJECT</code>
            </label>
            <input type=\"text\" name=\"x509_subject\" id=\"text_x509_subject\" value=\"{{ row.x509_subject ?? null }}\" size=\"80\" title=\"
              {{- t('Requires that a valid X509 certificate with this subject be presented.') }}\"
              {{- (row.ssl_type ?? null) != 'SPECIFIED' ? ' disabled' }}>
          </div>
        </div>
      </div>
      </div>
    </div>
    </div>
  {% endif %}
  </div>
</div>
<input type=\"hidden\" name=\"grant_count\" value=\"{{ grant_count - (row['Grant_priv'] is defined ? 1 : 0) }}\">

{% endif %}

{% if has_submit %}
  <div>
    <input type=\"hidden\" name=\"update_privs\" value=\"1\">
    <input class=\"btn btn-primary\" type=\"submit\" value=\"{{ t('Update user privileges') }}\">
  </div>
{% endif %}
", "server/privileges/privileges_table.twig", "/mnt/storage/phpmyadmin.git/release/phpMyAdmin-6.0+snapshot/resources/templates/server/privileges/privileges_table.twig");
    }
}
